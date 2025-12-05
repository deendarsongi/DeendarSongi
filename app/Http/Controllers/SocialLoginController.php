<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;

class SocialLoginController extends Controller
{
   //
   function google_redirect(){
    return Socialite::driver('google')->redirect();
}
//

function google_callback(){
    if (request()->has('error')) {
        return redirect()->route('customer.login');
    }

    $user = Socialite::driver('google')->user();
    $customer = Customer::where('email', $user->email)->first();

    //check blocked
    if ($customer && $customer->otp_blocked_until > Carbon::now()) {
        $remainingTime = Carbon::parse($customer->otp_blocked_until)->diffInMinutes(Carbon::now());
        return redirect()->route('customer.login')->with('google_error', "আপনার এই ইমেইল সাময়িকভাবে ব্লক অবস্থায় আছেন {$remainingTime} মিনিট পরে আবার চেষ্টা করুন।");
    }

    if ($customer){
        Auth::guard('customer')->login($customer);
        return redirect()->route('my.dashboard')->with('success', 'স্বাগতম, '.$customer->name. ' !');
    }
    else{
        $customer = Customer::create([
                'name' => $user->name,
                'email' => $user->email,
                'password' => bcrypt(Str::random(8)),
                'gender' => null,
                'status' => 'verified',
                'created_at' => Carbon::now(),
            ]);

            session(['pending_customer_id' => $customer->id]);
            return redirect()->route('select.gender');
        }
    }
    //

    //selact gender
    function select_gender(){
        if (!session()->has('pending_customer_id')) {
            return redirect()->route('customer.login')->with('google_error', 'কিছু সমস্যা হয়েছে! দয়া করে আবার চেষ্টা করুন।');
        }

        $customer = Customer::find(session('pending_customer_id'));

        return view('frontend.customer.select_gender', [
            'customer' => $customer,
        ]);
    }
    //
    function save_gender(Request $request){
        $request->validate([
            'gender' => 'required',
        ]);

        $customer = Customer::find(session('pending_customer_id'));

        if (!$customer) {
            return redirect()->route('customer.login')->with('google_error', 'কিছু সমস্যা হয়েছে! দয়া করে আবার চেষ্টা করুন।');
        }

        $customer->update(['gender' => $request->gender]);

        Auth::guard('customer')->login($customer);

        session()->forget('pending_customer_id');

        return redirect()->route('my.dashboard')->with('success', 'স্বাগতম, '.$customer->name. ' !');
    }

/////////////////////////
}

