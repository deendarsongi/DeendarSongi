<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BackendController extends Controller
{
    function dashboard(){
        return view('backend.dashboard');
    }
    //
    function user_manage(){
        $users = Customer::with('biodata')->get();
        return view('backend.user_manage',[
            'users' => $users,
        ]);
    }
    //
    function biodata_manage(){
        $biodatas = Biodata::with('customer')->get();
        return view('backend.biodata_manage',[
            'biodatas' => $biodatas,
        ]);
    }
    //
    function view_biodata($id){
        $biodata= Biodata::with('subBiodata', 'customer')->where('id', $id)->first();

        return view('backend.view_biodata',[
            'biodata' => $biodata,
        ]);
    }
    //
    public function acceptBiodata($id)
    {
        $biodata = Biodata::find($id);
        $biodata->update([
            'status' => 'approved',
        ]);

        return redirect()->back()->with('success', 'বায়োডাটা সফলভাবে গৃহীত হয়েছে।');
    }

    public function rejectBiodata($id)
    {
        $biodata = Biodata::find($id);
        $biodata->update([
            'status' => 'reject',
        ]);

        return redirect()->back()->with('error', 'বায়োডাটা প্রত্যাখ্যান করা হয়েছে।');
    }




    //
    function logout(){
        Auth::logout();
        return redirect('/login');
    }
    //

}// END

