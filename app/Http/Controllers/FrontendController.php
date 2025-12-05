<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use Illuminate\Http\Request;
use PHPUnit\Framework\Constraint\Count;

class FrontendController extends Controller
{
    function deendarsangee(){
        return view('frontend.index');
    }
    //
    function biodatas(){
        $biodatas = Biodata::with('subBiodata')->get();
        return view('frontend.biodatas',
        [
            'biodatas' => $biodatas,
        ]);
    }
    //
    function about_us(){
        return view('frontend.about_us');
    }
    //
    function faq(){
        return view('frontend.faq');
    }
    //
    function contact(){
        return view('frontend.contact');
    }
    //
    function my_dashboard(){
        return view('frontend.my_dashboard');
    }
    function proposal(){
        return view('frontend.proposal');
    }
    //
    function wishlist(){
        return view('frontend.wishlist');
    }
    //
    function biodata(){
        return view('frontend.biodata');
    }
    //
    function preview_biodata(){
        $biodata= Biodata::with('subBiodata')->where('customer_id', auth('customer')->user()->id)->first();
        return view('frontend.preview_biodata',[
            'biodata' => $biodata,
        ]);
    }
    //
    function report_info(){
        return view('frontend.report_info');
    }
    //
    function checkout(){
        return view('frontend.checkout');
    }
    //
    function packages(){
        return view('frontend.packages');
    }
    //

    function add_biodata(){
        $biodata= Biodata::with('subBiodata')->where('customer_id', auth('customer')->user()->id)->first();

        if($biodata){
            $currentStep = 0;

            if ($biodata->generalinfo_validate == 'true') {
                $currentStep = 1;
            }
            if ($biodata->address_validate == 'true') {
                $currentStep = 2;
            }
            if ($biodata->education_validate == 'true') {
                $currentStep = 3;
            }
            if ($biodata->familyinfo_validate == 'true') {
                $currentStep = 4;
            }
            if ($biodata->personalinfo_validate == 'true') {
                $currentStep = 5;
            }
            if ($biodata->professionalinfo_validate == 'true') {
                $currentStep = 6;
            }
            if ($biodata->marriageinfo_validate == 'true') {
                $currentStep = 7;
            }
            if ($biodata->expectationinfo_validate == 'true') {
                $currentStep = 8;
            }
            if ($biodata->inquiriesinfo_validate == 'true') {
                $currentStep = 9;
            }
            if ($biodata->contactinfo_validate == 'true') {
                $currentStep = 10;
            }
            //

            return view('frontend.add_biodata',[
                'biodata' => $biodata,
                'currentStep' => $currentStep,
            ]);
        }else{
            return view('frontend.add_biodata',[
                'biodata' => null,
                'currentStep' => 0,
            ]);
        }

    }
    //

    function contact_info(){
        return view('frontend.contact_info');
    }
    //
    function payment_info(){
        return view('frontend.payment_info');
    }
    //
    function report(){
        return view('frontend.report');
    }
    //
    function success_form(){
        return view('frontend.success_form');
    }
    //
    function delete_biodata(){
        return view('frontend.delete_biodata');
    }
    //
    function biodata_detail($id){
        $biodata = Biodata::with('subBiodata')->find($id);
        return view('frontend.biodata_detail', [
            'biodata' => $biodata,
        ]);
    }
    //
}
