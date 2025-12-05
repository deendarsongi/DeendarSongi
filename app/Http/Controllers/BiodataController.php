<?php

namespace App\Http\Controllers;
use Intervention\Image\Facades\Image;

use App\Helpers\EducationHelper;
use App\Http\Requests\AddressInfoRequest;
use App\Http\Requests\ContactInfoRequest;
use App\Http\Requests\EducationInfoRequest;
use App\Http\Requests\ExpectInfoRequest;
use App\Http\Requests\FamilyInfoRequest;
use App\Http\Requests\GeneralInfoRequest;
use App\Http\Requests\InquiriesInfoRequest;
use App\Http\Requests\MarriageInfoRequest;
use App\Http\Requests\PersonalInfoRequest;
use App\Http\Requests\ProfessionalInfoRequest;
use App\Models\Biodata;
use App\Models\Sub_biodata;
use Illuminate\Http\Request;

class BiodataController extends Controller {

// General Info Store
public function general_info_store(GeneralInfoRequest $request){

    $customer_id = auth('customer')->user()->id;

    // Check biodata
    $biodata = Biodata::where('customer_id', $customer_id)->first();

    if ($biodata) {
        $biodata->update([
            'biodata_type' => $request->biodata_type,
            'married_type' => $request->married_type,
            'date_of_birth' => $request->date_of_birth,
            'face_color' => $request->face_color,
            'height' => $request->height,
            'weight' => $request->weight,
            'body_shape' => $request->body_shape,
            'blood_group' => $request->blood_group,
            'status' => 'in_complete',
            'generalinfo_validate' => 'true',
            'updated_at' => now(),
        ]);
        return response()->json([
            'success' => true,
            'message' => 'সাধারণ তথ্য আপডেট সফল হয়েছে!',
            'biodata_id' => $biodata->biodata_id,
            'action' => 'update'
        ]);
    } else {
        $biodata_id = 'DS' . rand(10000, 99999);

        Sub_biodata::insert([ 'customer_id' => $customer_id, ]);
        Biodata::insert([
            'biodata_id' => $biodata_id,
            'customer_id' => $customer_id,
            'status' => 'in_complete',
            'biodata_type' => $request->biodata_type,
            'married_type' => $request->married_type,
            'date_of_birth' => $request->date_of_birth,
            'face_color' => $request->face_color,
            'height' => $request->height,
            'weight' => $request->weight,
            'body_shape' => $request->body_shape,
            'blood_group' => $request->blood_group,
            'status' => 'in_complete',
            'generalinfo_validate' => 'true',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        return response()->json([
            'success' => true,
            'message' => 'সাধারণ তথ্য সংরক্ষণ সফল হয়েছে!',
            'biodata_id' => $biodata_id,
            'action' => 'insert'
        ]);
    }
}
//

// Address Info Store
public function address_info_store(AddressInfoRequest $request){
    $customer_id = auth('customer')->user()->id;
    $biodata = Biodata::where('customer_id', $customer_id)->first();
    $address_validate = Biodata::where('customer_id', $customer_id)
    ->where('address_validate', 'true')->first();

    // explode the address into parts
    $permanent_address =  explode(',', $request->permanent_address);
        $permanent_upazila  = trim($permanent_address[0] ?? '');
        $permanent_district = trim($permanent_address[1] ?? '');
        $permanent_division = trim($permanent_address[2] ?? '');
        $permanent_country  = trim($permanent_address[3] ?? '');

    // Current Address explode
    $current_address =  explode(',', $request->current_address);
        $current_upazila  = trim($current_address[0] ?? '');
        $current_district = trim($current_address[1] ?? '');
        $current_division = trim($current_address[2] ?? '');
        $current_country  = trim($current_address[3] ?? '');

    if ($biodata) {
        if ($request->input('location_picker_checkbox') == 1) {
            $biodata->update([
                'permanent_upazila' => $permanent_upazila,
                'permanent_district' => $permanent_district,
                'permanent_division' => $permanent_division,
                'permanent_country' => $permanent_country,
                'permanent_ads_extra' => $request->permanent_ads_extra,
                'current_upazila' => $permanent_upazila,
                'current_district' => $permanent_district,
                'current_division' => $permanent_division,
                'current_country' => $permanent_country,
                'current_ads_extra' => $request->permanent_ads_extra,
                'born_raised' => $request->born_raised,
                'same_address' => $request->location_picker_checkbox,
                'address_validate' => 'true'
            ]);
        }else {
            $biodata->update([
                'permanent_upazila' => $permanent_upazila,
                'permanent_district' => $permanent_district,
                'permanent_division' => $permanent_division,
                'permanent_country' => $permanent_country,
                'permanent_ads_extra' => $request->permanent_ads_extra,
                'current_upazila' => $current_upazila,
                'current_district' => $current_district,
                'current_division' => $current_division,
                'current_country' => $current_country,
                'current_ads_extra' => $request->current_ads_extra,
                'born_raised' => $request->born_raised,
                'address_validate' => 'true'
            ]);
        }
        if($address_validate){
            return response()->json([
                'success' => true,
                'message' => 'ঠিকানা তথ্য আপডেট সফল হয়েছে।',
                'action' => 'update'
            ]);
        }
        return response()->json([
            'success' => true,
            'message' => 'ঠিকানা তথ্য সংরক্ষণ সফল হয়েছে!',
            'action' => 'insert'
        ]);
    }
}

// Education Info Store
public function education_info_store(EducationInfoRequest $request){
    $customer_id = auth('customer')->user()->id;
    $biodata = Biodata::where('customer_id', $customer_id)->first();
    $education_validate = Biodata::where('customer_id', $customer_id)
    ->where('education_validate', 'true')
    ->first();
    $highest_education = $request->highest_education_general ?? $request->highest_education_qawmi;
    $sscInfo = EducationHelper::extractSSCInfo($request);
    $hscInfo = EducationHelper::extractHSCInfo($request);
    $diplomaInfo = EducationHelper::extractDiplomaInfo($request);
    $after_ssc_education = $request->after_ssc_education ?? $request->honours_after_ssc_education ?? $request->masters_after_ssc_education;
    $honoursInfo = EducationHelper::extractHonoursInfo($request);
    $taqmeelInfo = EducationHelper::extractTaqmeelInfo($request);

    if ($biodata) {
        $biodata->update([
            'education_type' => $request->education_type,
            'highest_education' => $highest_education,
            'under_ssc_class' => $request->under_ssc_class,

            // SSC
            'ssc_passing_year' => $sscInfo['ssc_passing_year'],
            'ssc_education_category' => $sscInfo['ssc_education_category'],
            'ssc_result' =>$sscInfo['ssc_result'],
            'hsc_ongoing_year' => $request->hsc_ongoing_year,

            // HSC
            'hsc_passing_year' => $hscInfo['hsc_passing_year'],
            'hsc_education_category' => $hscInfo['hsc_education_category'],
            'hsc_result' => $hscInfo['hsc_result'],

            //diploma ongoing
            'diploma_ongoing_subject' => $request->diploma_ongoing_subject,
            'diploma_ongoing_year' => $request->diploma_ongoing_year,
            'diploma_ongoing_institut' => $request->diploma_ongoing_institut,

            // diploma
            'diploma_passing_subject' => $diplomaInfo['diploma_passing_subject'],
            'diploma_passing_year' => $diplomaInfo['diploma_passing_year'],
            'diploma_passing_institut' => $diplomaInfo['diploma_passing_institut'],
            'after_ssc_education' => $after_ssc_education,

            // Honours ongoing
            'honours_ongoing_subject' => $request->honours_ongoing_subject,
            'honours_ongoing_year' => $request->honours_ongoing_year,
            'honours_ongoing_institut' => $request->honours_ongoing_institut,

            // Honours
            'honours_passing_subject' => $honoursInfo['honours_passing_subject'],
            'honours_passing_year' => $honoursInfo['honours_passing_year'],
            'honours_passing_institut' => $honoursInfo['honours_passing_institut'],

            // Masters
            'masters_passing_subject' => $request->masters_passing_subject,
            'masters_passing_year' => $request->masters_passing_year,
            'masters_passing_institut' => $request->masters_passing_institut,

            //ibtidaiyah
            'ibtidaiyah_passing_year' => $request->ibtidaiyah_passing_year,
            'ibtidaiyah_result' => $request->ibtidaiyah_result,
            'ibtidaiyah_madrasa_name' => $request->ibtidaiyah_madrasa_name,

            //mutawasita
            'mutawasita_passing_year' => $request->mutawasita_passing_year,
            'mutawasita_result' => $request->mutawasita_result,
            'mutawasita_madrasa_name' => $request->mutawasita_madrasa_name,

            //sanabia
            'sanabia_passing_year' => $request->sanabia_passing_year,
            'sanabia_result' => $request->sanabia_result,
            'sanabia_madrasa_name' => $request->sanabia_madrasa_name,

            //fazilat
            'fazilat_passing_year' => $request->fazilat_passing_year,
            'fazilat_result' => $request->fazilat_result,
            'fazilat_madrasa_name' => $request->fazilat_madrasa_name,

            //taqmeel
            'taqmeel_passing_year' => $taqmeelInfo['taqmeel_passing_year'],
            'taqmeel_result' => $taqmeelInfo['taqmeel_result'],
            'taqmeel_madrasa_name' => $taqmeelInfo['taqmeel_madrasa_name'],

            //takhassus
            'takhassus_passing_subject' => $request->takhassus_passing_subject,
            'takhassus_passing_year' => $request->takhassus_passing_year,
            'takhassus_result' => $request->takhassus_result,
            'takhassus_madrasa_name' => $request->takhassus_madrasa_name,

            'religious_qualifi' => $request->religious_qualifi,
            'other_educational' => $request->other_educational,
            'education_validate' => 'true',
        ]);
        if($education_validate){
            return response()->json([
            'success' => true,
            'message' => 'শিক্ষাগত তথ্য আপডেট সফল হয়েছে।',
            'action' => 'update'
        ]);
        }
        return response()->json([
            'success' => true,
            'message' => 'শিক্ষাগত তথ্য সংরক্ষণ সফল হয়েছে!',
            'action' => 'insert'
        ]);
    }
}
//


// Family Info Store
public function family_info_store(FamilyInfoRequest $request){
    $customer_id = auth('customer')->user()->id;
    $biodata = Biodata::where('customer_id', $customer_id)->first();
    $familyinfo_validate = Biodata::where('customer_id', $customer_id)
    ->where('familyinfo_validate', 'true')->first();


    if($biodata){
        $biodata->update([
            'family_type' => $request->family_type,
            'father_name' => $request->father_name,
            'father_current_condition' => $request->father_current_condition,
            'father_profession' => $request->father_profession,
            'mother_name' => $request->mother_name,
            'mother_current_condition' => $request->mother_current_condition,
            'mother_profession' => $request->mother_profession,
            'brother_count' => $request->brother_count,
            'brother_info' => $request->brother_info,
            'sister_count' => $request->sister_count,
            'sister_info' => $request->sister_info,
            'uncles_info' => $request->uncles_info,
            'family_financial_info' => $request->family_financial_info,
            'social_status_info' => $request->social_status_info,
            'family_members_info' => $request->family_members_info,
            'family_religious_status' => $request->family_religious_status,
            'familyinfo_validate' => 'true'
        ]);

        if($familyinfo_validate){
        return response()->json([
            'success' => true,
            'message' => 'পারিবারিক তথ্য আপডেট সফল হয়েছে।',
            'action' => 'update'
        ]);
        }
        return response()->json([
            'success' => true,
            'message' => 'পারিবারিক তথ্য সংরক্ষণ সফল হয়েছে!',
            'action' => 'insert'
        ]);
    }
}
//
public function parsonal_info_store(PersonalInfoRequest $request){
    $customer_id = auth('customer')->user()->id;
    $biodata = Sub_biodata::where('customer_id', $customer_id)->first();
    $personalinfo_validate = Biodata::where('customer_id', $customer_id)
    ->where('personalinfo_validate', 'true')->first();

    if ($request->has('options_apply_you') && is_array($request->options_apply_you)) {
        $after_implode_tag = implode(',', $request->options_apply_you);
    } else {
        $after_implode_tag = null;
    }

    if($biodata){
        $biodata->update([
            'salat_year' => $request->salat_year,
            'mahram_non_mahram' => $request->mahram_non_mahram,
            'full_islamic_veil' => $request->full_islamic_veil,
            'keep_your_eyes_peeled' => $request->keep_your_eyes_peeled,
            'quran_recitation' => $request->quran_recitation,
            'obligatory_beard' => $request->obligatory_beard,
            'ankle_dress' => $request->ankle_dress,
            'outside_outside_clothes' => $request->outside_outside_clothes,
            'fasting_seeds' => $request->fasting_seeds,
            'any_creed_sect' => $request->any_creed_sect,
            'religious_knowledge_source' => $request->religious_knowledge_source,
            'favorite_islamic_book' => $request->favorite_islamic_book,
            'favorite_islamic_scholar' => $request->favorite_islamic_scholar,
            'physical_mental_condition' => $request->physical_mental_condition,
            'eat_drink_intoxicating' => $request->eat_drink_intoxicating,
            'watch_listen_movies_songs' => $request->watch_listen_movies_songs,
            'involved_establish_religion' => $request->involved_establish_religion,
            'political_philosophy' => $request->political_philosophy,
            'beliefs_shrine' => $request->beliefs_shrine,
            'about_next_generation' => $request->about_next_generation,
            'about_yourself' => $request->about_yourself,
            'home_responsibilities' => $request->home_responsibilities,
            'gender_equality' => $request->gender_equality,
            'religious_worldly_qualifi' => $request->religious_worldly_qualifi,
            'options_apply_you' => $after_implode_tag,
            'male_phone' => $request->male_phone,
            'female_phone' => $request->female_phone,
        ]);

        Biodata::where('customer_id', $customer_id)->update([
            'personalinfo_validate' => 'true',
        ]);


    if($personalinfo_validate){
        return response()->json([
            'success' => true,
            'message' => 'ব্যক্তিগত তথ্য আপডেট সফল হয়েছে।',
            'action' => 'update'
        ]);
        }
        return response()->json([
            'success' => true,
            'message' => 'ব্যক্তিগত তথ্য সংরক্ষণ সফল হয়েছে!',
            'action' => 'insert'
        ]);
    }
}
//

// Professional Info Store
public function professional_info_store(ProfessionalInfoRequest $request){
    $customer_id = auth('customer')->user()->id;
    $biodata = Sub_biodata::where('customer_id', $customer_id)->first();
    $professionalinfo_validate = Biodata::where('customer_id', $customer_id)
    ->where('professionalinfo_validate', 'true')->first();

    if($biodata){
        $biodata->update([
            'profession' => $request->profession,
            'profession_details' => $request->profession_details,
            'workplace' => $request->workplace,
            'income_verify' => $request->income_verify,
            'monthly_income' => $request->monthly_income
        ]);

        Biodata::where('customer_id', $customer_id)->update([
            'professionalinfo_validate' => 'true',
        ]);


    if($professionalinfo_validate){
        return response()->json([
            'success' => true,
            'message' => 'পেশাগত তথ্য আপডেট সফল হয়েছে।',
            'action' => 'update'
        ]);
        }
        return response()->json([
            'success' => true,
            'message' => 'পেশাগত তথ্য সংরক্ষণ সফল হয়েছে!',
            'action' => 'insert'
        ]);
    }
}
//

// Marrige Info Store
public function marriage_info_store(MarriageInfoRequest $request){
    $customer_id = auth('customer')->user()->id;
    $biodata = Sub_biodata::where('customer_id', $customer_id)->first();
    $marriageinfo_validate = Biodata::where('customer_id', $customer_id)
    ->where('marriageinfo_validate', 'true')->first();

    if($biodata){
        $biodata->update([
            'parents_consent' => $request->parents_consent,
            'currently_wife_children' => $request->currently_wife_children,
            'married_again' => $request->married_again,
            'divorce_reason' => $request->divorce_reason,
            'husband_death_year' => $request->husband_death_year,
            'wife_new_relationship' => $request->wife_new_relationship,
            'wife_death_year' => $request->wife_death_year,
            'husband_new_relationship' => $request->husband_new_relationship,
            'why_getting_married' => $request->why_getting_married,
            'obedience_husband' => $request->obedience_husband,
            'job_after_marriage' => $request->job_after_marriage,
            'husband_responsibilities' => $request->husband_responsibilities,
            'after_marriage_veil' => $request->after_marriage_veil,
            'wife_after_marriage_job' => $request->wife_after_marriage_job,
            'wife_after_marriage_live' => $request->wife_after_marriage_live,
            'wife_responsibilities' => $request->wife_responsibilities,
            'expect_wedding_gift' => $request->expect_wedding_gift,
            'about_mohar' => $request->about_mohar,
            'student_unemployed' => $request->student_unemployed,
            'second_wife' => $request->second_wife,
            'widow_divorced_woman' => $request->widow_divorced_woman,
            'compromise_wife' => $request->compromise_wife,
            'compromise_husband' => $request->compromise_husband,
        ]);

        Biodata::where('customer_id', $customer_id)->update([
            'marriageinfo_validate' => 'true',
        ]);


    if($marriageinfo_validate){
        return response()->json([
            'success' => true,
            'message' => 'বিবাহ সম্পর্কিত তথ্য আপডেট সফল হয়েছে।',
            'action' => 'update'
        ]);
        }
        return response()->json([
            'success' => true,
            'message' => 'বিবাহ সম্পর্কিত তথ্য সংরক্ষণ সফল হয়েছে!',
            'action' => 'insert'
        ]);
    }
}
//

// Expectation Info Store
public function expectation_info_store(ExpectInfoRequest $request){
    $customer_id = auth('customer')->user()->id;
    $biodata = Sub_biodata::where('customer_id', $customer_id)->first();
    $expectationinfo_validate = Biodata::where('customer_id', $customer_id)
    ->where('expectationinfo_validate', 'true')->first();

    $after_marital_type = implode(',', $request->expect_marital_type);
    $after_skin_colors = implode(',', $request->expect_skin_colors);
    $after_body_type = implode(',', $request->expect_body_type);
    $after_economic_status = implode(',', $request->expect_economic_status);

    if($biodata){
        $biodata->update([
            'expect_age' => $request->expect_age,
            'expect_marital_type' => $after_marital_type,
            'expect_district' => $request->expect_district,
            'expect_skin_colors' => $after_skin_colors,
            'expect_height' => $request->expect_height,
            'expect_body_type' => $after_body_type,
            'expect_education' => $request->expect_education,
            'expect_creed_sect' => $request->expect_creed_sect,
            'expect_profession' => $request->expect_profession,
            'expect_economic_status' => $after_economic_status,
            'expect_life_partner' => $request->expect_life_partner,
            'expect_something_special' => $request->expect_something_special,
        ]);

        Biodata::where('customer_id', $customer_id)->update([
            'expectationinfo_validate' => 'true',
        ]);


    if($expectationinfo_validate){
        return response()->json([
            'success' => true,
            'message' => 'প্রত্যাশিত তথ্য আপডেট সফল হয়েছে।',
            'action' => 'update'
        ]);
        }
        return response()->json([
            'success' => true,
            'message' => 'প্রত্যাশিত তথ্য সংরক্ষণ সফল হয়েছে!',
            'action' => 'insert'
        ]);
    }
}
//

// Inquiries Info Store
public function inquiries_info_store(InquiriesInfoRequest $request){
    $customer_id = auth('customer')->user()->id;
    $biodata = Sub_biodata::where('customer_id', $customer_id)->first();
    $inquiriesinfo_validate = Biodata::where('customer_id', $customer_id)
    ->where('inquiriesinfo_validate', 'true')->first();


    if($biodata){
        $biodata->update([
            'guardian_permission' => $request->guardian_permission,
            'information_true' => $request->information_true,
            'responsibility' => $request->responsibility,
        ]);

        Biodata::where('customer_id', $customer_id)->update([
            'inquiriesinfo_validate' => 'true',
        ]);


    if($inquiriesinfo_validate){
        return response()->json([
            'success' => true,
            'message' => 'কর্তৃপক্ষের জিজ্ঞাসা তথ্য আপডেট সফল হয়েছে।',
            'action' => 'update'
        ]);
        }
        return response()->json([
            'success' => true,
            'message' => 'কর্তৃপক্ষের জিজ্ঞাসা তথ্য সংরক্ষণ সফল হয়েছে!',
            'action' => 'insert'
        ]);
    }
}
//

// Contact Info Store
public function contact_info_store(ContactInfoRequest $request){
    $customer_id = auth('customer')->user()->id;
    $biodata = Sub_biodata::where('customer_id', $customer_id)->first();
    $contactinfo_validate = Biodata::where('customer_id', $customer_id)
    ->where('contactinfo_validate', 'true')->first();


    if($biodata){
        $biodata->update([
            'husband_name' => $request->husband_name,
            'wife_name' => $request->wife_name,
            'guardian_mobile' => $request->guardian_mobile,
            'guardian_relation' => $request->guardian_relation,
            'receive_biodata_email' => $request->receive_biodata_email,
        ]);

        Biodata::where('customer_id', $customer_id)->update([
            'contactinfo_validate' => 'true',
        ]);


    if($contactinfo_validate){
        return response()->json([
            'success' => true,
            'message' => 'যোগাযোগ তথ্য আপডেট সফল হয়েছে।',
            'action' => 'update'
        ]);
        }
        return response()->json([
            'success' => true,
            'message' => 'যোগাযোগ তথ্য সংরক্ষণ সফল হয়েছে!',
            'action' => 'insert'
        ]);
    }
}
//

//Submit biodata
public function submit_biodata()
{
    $customerId = auth('customer')->id();

    $biodata = Biodata::where('customer_id', $customerId)->first();

    if ($biodata) {
        $biodata->update([
            'status' => 'in_review',
        ]);

        // return redirect()->back()->with('submit_biodata', true);

        return redirect()->back()->with('success', 'আপনার বায়োডাটা সফলভাবে সাবমিট হয়েছে। অনুগ্রহ করে অপেক্ষা করুন।');
    }

    return redirect()->back()->with('error', 'বায়োডাটা খুঁজে পাওয়া যায়নি।');
}

//

//Delete Biodata
public function delete_biodata()
{
    $customerId = auth('customer')->id();

    $biodata = Biodata::where('customer_id', $customerId)->first();

    if ($biodata) {
        // If has related subBiodata
        $biodata->subBiodata()->delete();
        $biodata->delete();

        return redirect()->back()->with('delete_biodata', true);
    }

    return redirect()->back()->with('delete_biodata', false);
}



}//End
