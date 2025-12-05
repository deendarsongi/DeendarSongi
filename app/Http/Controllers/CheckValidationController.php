<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use Illuminate\Http\Request;

class CheckValidationController extends Controller
{
    // Biodata Step
public function checkStepAccess(Request $request){
    $step = (int) $request->step;
    $biodata = Biodata::where('customer_id', auth('customer')->user()->id)->first();

    $stepMap = [

        0 => $biodata->generalinfo_validate,
        1 => $biodata->address_validate,
        2 => $biodata->education_validate,
        3 => $biodata->familyinfo_validate,
        4 => $biodata->personalinfo_validate,
        5 => $biodata->professionalinfo_validate,
        6 => $biodata->marriageinfo_validate,
        7 => $biodata->expectationinfo_validate,
        8 => $biodata->inquiriesinfo_validate,
        9 => $biodata->contactinfo_validate,
    ];

    for ($i = 0; $i < $step; $i++) {
        if (empty($stepMap[$i]) || $stepMap[$i] !== 'true') {
            return response()->json(['allowed' => false]);
        }
    }

    return response()->json(['allowed' => true]);
}
///

public function stepValidation(Request $request)
{
    $biodata = Biodata::where('customer_id', auth('customer')->user()->id)->first();
    $step = $request->step;


    $stepMap = [
        'generalinfo' => 'generalinfo_validate',
        'address' => 'address_validate',
        'education' => 'education_validate',
        'family' => 'familyinfo_validate',
        'parsonal' => 'personalinfo_validate',
        'professional' => 'professionalinfo_validate',
        'marriage' => 'marriageinfo_validate',
        'expectation' => 'expectationinfo_validate',
        'inquiries' => 'inquiriesinfo_validate',
        'contact' => 'contactinfo_validate',
    ];

    $action = 'insert';

    if ($biodata && isset($stepMap[$step])) {
        $validateField = $stepMap[$step];
        if ($biodata->$validateField === 'true') {
            $action = 'update';
        }
    }

    return response()->json(['action' => $action]);
}


}//end
