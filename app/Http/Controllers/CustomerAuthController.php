<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;
use App\Notifications\CustomerOtpNotification;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;

class CustomerAuthController extends Controller
{
    function register_selection(){
        return view('frontend.customer.registration_selection');
    }

    //register
    function customer_register(){
        return view('frontend.customer.customer_register');
    }
    //
    function customer_store(Request $request){
        $request->validate([
            'name'=>'required',
            'gender'=>'required',
            'email'=>['required','email'],
            'password'=>['required',
            Password::min(8)
            ->letters()
            ->numbers()],
        ],[
            'name.required' => 'দয়া করে আপনার নাম দিন।',
            'gender.required' => 'দয়া করে লিঙ্গ সিলেক্ট করুন।',
            'email.required' => 'দয়া করে ইমেইল দিন।',
            'email.email' => 'ইমেইলটি সঠিক হয়নি।',
            'password.required' => 'দয়া করে পাসওয়ার্ড দিন।',
            'password.min' => 'কমপক্ষে আট অক্ষরের পাসওয়ার্ড ব্যবহার করতে হবে।',
            'password.letters' => 'কমপক্ষে একটি অক্ষর ব্যবহার করতে হবে।',
            'password.numbers' => 'কমপক্ষে একটি সংখ্যা ব্যবহার করতে হবে।',
        ]);

            $email = $request->input('email');

            //check blocked
            $blockedCustomer = Customer::where('email', $email)
                ->where('otp_blocked_until', '>', Carbon::now())
                ->first();

            if ($blockedCustomer) {
                $remainingTime = Carbon::parse($blockedCustomer->otp_blocked_until)->diffInMinutes(Carbon::now());
                return back()->with('user_block_error', "আপনি সাময়িকভাবে ব্লক অবস্থায় আছেন {$remainingTime} মিনিট পরে আবার চেষ্টা করুন।");
            }

        $otp = rand(100000, 999999);

        if (Customer::where('email', $request->email)->where('status', 'pending')->exists()){
            Customer::where('email', $request->email)->where('status', 'pending')->delete();
        } else {
            $request->validate([
                'email'=>'unique:customers',
            ],[
                'email.unique' => 'এই ইমেইলটি আগের থেকেই রয়েছে।',
            ]);
        }
            $customer = Customer::create([
                'name'=> $request->name,
                'gender'=> $request->gender,
                'email'=> $request->email,
                'password'=> bcrypt($request->password),
                'otp'=> $otp,
                'otp_expires_at'=> Carbon::now()->addMinutes(5),
                'created_at'=>Carbon::now(),
            ]);

            $customer->notify(new CustomerOtpNotification($otp));

            return redirect()->route('customer.register.otp', $customer->id)
            ->with('sand_otp', 'আপনার ইমেইলে ৬ সংখ্যার একটি ভেরিফিকেশন কোড পাঠানো হয়েছে । ');
    }

    //resend otp
    function resendOTP($customerID){
        $customer = Customer::find($customerID);

        if ($customer->otp_blocked_until && now()->lessThan($customer->otp_blocked_until)) {
            $remainingTime = Carbon::parse($customer->otp_blocked_until)->diffInMinutes(Carbon::now());
            return back()->with('otp_resand_error', "আপনি সাময়িকভাবে ব্লক অবস্থায় আছেন {$remainingTime} মিনিট পরে আবার চেষ্টা করুন।");
        }
        //otp attempts
        $customer->increment('otp_attempts');

        if ($customer->otp_attempts >= 2) {
            $customer->update([
                'otp_blocked_until' => now()->addMinutes(30),
                'otp_attempts' => 0
            ]);

            return back()->with('otp_resand_error', 'আপনাকে সাময়িকভাবে ব্লক করা হয়েছে। 30 মিনিট পরে আবার চেষ্টা করুন। ');
        }

        $otp = rand(100000, 999999);
        $customer->update([
            'otp' => $otp,
            'otp_expires_at' => Carbon::now()->addMinutes(5),
        ]);

        $customer->notify(new CustomerOtpNotification($otp));

        return redirect()->route('customer.register.otp', $customer->id)
        ->with('sand_otp', 'আপনার ইমেইলে ৬ সংখ্যার ভেরিফিকেশন কোড পুনরায় পাঠানো হয়েছে । ');
    }

    //verify otp
    function customer_register_otp($customerID){

        $customer = Customer::find($customerID);

        return view('frontend.customer.register_otp',[
            'customer'=>$customer,
        ]);
    }
    //
    function customer_register_verify_otp(Request $request, $customerID){
        $request->validate([
            'otp.*' => 'required',
        ],[
            'otp.*.required' => 'দয়া করে ভেরিফিকেশন কোড দিন।',
        ]);

        $request_otp = implode('', $request->otp);
        $customer = Customer::find($customerID);

        if ($customer->otp !== $request_otp || now()->greaterThan($customer->otp_expires_at)){
            return back()->with('otp_error', 'ভেরিফিকেশন কোড মিল নেই।');
        }

        $customer->update([
            'otp' => null,
            'otp_expires_at' => null,
            'status' => 'verified',
            'otp_attempts' => 0,
            'otp_blocked_until' => null
        ]);

        //direct login
        Auth::guard('customer')->login($customer);

        return redirect()->route('my.dashboard')->with('success', 'স্বাগতম, '.$customer->name. ' !');
    }

    //login
    function customer_login(){
        return view('frontend.customer.customer_login');
    }
    //
    function customerlogin(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required',
            'remember' => 'nullable|boolean',
        ],[
            'email.required' => 'দয়া করে ইমেইল দিন।',
            'password.required' => 'দয়া করে পাসওয়ার্ড দিন।',
        ]);

            $email = $request->input('email');

            //check blocked
            $blockedCustomer = Customer::where('email', $email)
                ->where('otp_blocked_until', '>', Carbon::now())
                ->first();

            if ($blockedCustomer) {
                $remainingTime = Carbon::parse($blockedCustomer->otp_blocked_until)->diffInMinutes(Carbon::now());
                return back()->with('user_block_error', "আপনি সাময়িকভাবে ব্লক অবস্থায় আছেন {$remainingTime} মিনিট পরে আবার চেষ্টা করুন।");
            }

        if (Customer::where('email', $request->email)->exists()){

            if (Auth::guard('customer')->attempt(['email'=>$request->email, 'password'=>$request->password])){

                if ($request->has('remember')) {
                    $request->session()->put('email', $request->email);
                    $request->session()->put('password', $request->password);
                }

                if (Auth::guard('customer')->user()->status == 'pending'){
                    $customerID = Auth::guard('customer')->user()->id;
                    Auth::guard('customer')->logout();

                    $otp = rand(100000, 999999);
                    $customer = Customer::find($customerID);
                    $customer->update([
                        'otp' => $otp,
                        'otp_expires_at' => Carbon::now()->addMinutes(5),
                    ]);

                    $customer->notify(new CustomerOtpNotification($otp));

                    return redirect()->route('customer.register.otp', $customerID)->with('sand_otp', 'আপনার ইমেইলে ৬ সংখ্যার একটি ভেরিফিকেশন কোড পাঠানো হয়েছে । ');
                }else{
                    return redirect()->route('my.dashboard')->with('success', 'স্বাগতম, '.Auth::guard('customer')->user()->name. ' !');
                }
            }
            else{
                return back()->with('wrong_password', 'ভুল পাসওয়ার্ড।');
            }
        }
        else{
            return back()->with('wrong_email', 'এই ইমেইলে একাউন্ট খুঁজে পাওয়া যায়নি। ');
        }
    }


    //logout
    function customer_logout(){
        Auth::guard('customer')->logout();
        return redirect()->route('customer.login');
    }

    //forget password
    function forget_password(){
        return view('frontend.customer.forget_password');
    }
    //
    function forget_password_submit(Request $request){
        $request->validate([
            'email'=>'required',
        ],[
            'email.required' => 'দয়া করে ইমেইল দিন।',
        ]);

        $email = $request->input('email');

        //check blocked
        $blockedCustomer = Customer::where('email', $email)
            ->where('otp_blocked_until', '>', Carbon::now())
            ->first();

        if ($blockedCustomer) {
            $remainingTime = Carbon::parse($blockedCustomer->otp_blocked_until)->diffInMinutes(Carbon::now());
            return back()->with('user_block_error', "আপনি সাময়িকভাবে ব্লক অবস্থায় আছেন {$remainingTime} মিনিট পরে আবার চেষ্টা করুন।");
        }

        //customer verification check
        if (Customer::where('email', $request->email)->where('status', 'pending')->exists()){
            return back()->with('forget_error', 'এই ইমেইলে একাউন্ট খুঁজে পাওয়া যায়নি।');
        }


        $customer = Customer::where('email', $request->email)->first();

        if ($customer){
            $otp = rand(100000, 999999);
            $customer->update([
                'otp' => $otp,
                'otp_expires_at' => Carbon::now()->addMinutes(5),
            ]);

            $customer->notify(new CustomerOtpNotification($otp));

            return redirect()->route('forget.password.otp', $customer->id)
            ->with('sand_otp', 'আপনার ইমেইলে ৬ সংখ্যার ভেরিফিকেশন কোড পাঠানো হয়েছে । ');
        }
        else{
            return back()->with('forget_error', 'এই ইমেইলে একাউন্ট খুঁজে পাওয়া যায়নি।');
        }
    }

    // forget otp verify
    function forget_password_otp($customerID){
        $customer = Customer::find($customerID);
        return view('frontend.customer.forget_password_otp',[
            'customer'=>$customer,
        ]);
    }
    //
    function forget_password_verify_otp(Request $request, $customerID){
        $request->validate([
            'otp.*' => 'required',
        ],[
            'otp.*.required' => 'দয়া করে ভেরিফিকেশন কোড দিন।',
        ]);

        $request_otp = implode('', $request->otp);
        $customer = Customer::find($customerID);

        if ($customer->otp !== $request_otp || now()->greaterThan($customer->otp_expires_at)){
            return back()->with('otp_error', 'ভেরিফিকেশন কোড মিল নেই।');
        }

        return redirect()->route('reset.password', $customer->id);
    }
    //reset password
    function reset_password($customerID){
        $customer = Customer::find($customerID);
        return view('frontend.customer.reset_password',[
            'customer'=>$customer,
        ]);
    }
    //
    function reset_password_submit(Request $request, $customerID){
        $request->validate([
            'password'=>['required',
            Password::min(8)
            ->letters()
            ->numbers()],
        ],[
            'password.required' => 'দয়া করে পাসওয়ার্ড দিন।',
            'password.min' => 'কমপক্ষে আট অক্ষরের পাসওয়ার্ড ব্যবহার করতে হবে।',
            'password.letters' => 'কমপক্ষে একটি অক্ষর ব্যবহার করতে হবে।',
            'password.numbers' => 'কমপক্ষে একটি সংখ্যা ব্যবহার করতে হবে।',
        ]);

        $customer = Customer::find($customerID);
        $customer->update([
            'password'=>bcrypt($request->password),
            'otp'=>null,
            'otp_expires_at'=>null,
            'otp_attempts' => 0,
            'otp_blocked_until' => null
        ]);

        return redirect()->route('customer.login')->with('reset_succ', 'পাসওয়ার্ড পরিবর্তন সফল হয়েছে। লগইন করুন।');
    }
    //

/////////////////////////
}
