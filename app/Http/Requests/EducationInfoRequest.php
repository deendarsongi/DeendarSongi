<?php

namespace App\Http\Requests;

use Illuminate\Auth\Events\Validated;
use Illuminate\Foundation\Http\FormRequest;

class EducationInfoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */


    public function rules()
    {
            $rules = [
                'education_type' => 'required',
            ];


        //General Education
        if ($this->education_type === 'general') {
            $rules['highest_education_general'] = 'required';

            //Below SSC
            if ($this->highest_education_general === 'below_ssc') {
                $rules['under_ssc_class'] = 'required';
            }
            //SSC
            if ($this->highest_education_general === 'ssc') {
                $rules['ssc_passing_year'] = 'required';
                $rules['ssc_education_category'] = 'required';
                $rules['ssc_result'] = 'required';
                $rules['hsc_ongoing_year'] = 'required';
            }
            //HSC
            if ($this->highest_education_general === 'hsc') {
                $rules['hsc_passing_year'] = 'required';
                $rules['hsc_education_category'] = 'required';
                $rules['hsc_result'] = 'required';
                //
                $rules['hsc_ssc_passing_year'] = 'required';
                $rules['hsc_ssc_education_category'] = 'required';
                $rules['hsc_ssc_result'] = 'required';
            }
            //Diploma ongoing
            if ($this->highest_education_general === 'diploma_ongoing') {
                $rules['diploma_ongoing_subject'] = 'required';
                $rules['diploma_ongoing_year'] = 'required';
                $rules['diploma_ongoing_institut'] = 'required';
                //
                $rules['diploma_ongoing_ssc_passing_year'] = 'required';
                $rules['diploma_ongoing_ssc_education_category'] = 'required';
                $rules['diploma_ongoing_ssc_result'] = 'required';
            }
            //Diploma
            if ($this->highest_education_general === 'diploma') {
                $rules['diploma_passing_subject'] = 'required';
                $rules['diploma_passing_year'] = 'required';
                $rules['diploma_passing_institut'] = 'required';
                //
                $rules['diploma_ssc_passing_year'] = 'required';
                $rules['diploma_ssc_education_category'] = 'required';
                $rules['diploma_ssc_result'] = 'required';
            }
            //Honours ongoing
            if ($this->highest_education_general === 'honours_ongoing') {
                $rules['honours_ongoing_subject'] = 'required';
                $rules['honours_ongoing_year'] = 'required';
                $rules['honours_ongoing_institut'] = 'required';
                //
                $rules['honours_ongoing_ssc_passing_year'] = 'required';
                $rules['honours_ongoing_ssc_education_category'] = 'required';
                $rules['honours_ongoing_ssc_result'] = 'required';
                $rules['after_ssc_education'] = 'required';

                //After Ssc education
                if ($this->after_ssc_education === 'hsc_education') {
                    $rules['honours_ong_hsc_passing_year'] = 'required';
                    $rules['honours_ong_hsc_edu_category'] = 'required';
                    $rules['honours_ong_hsc_result'] = 'required';
                }
                if ($this->after_ssc_education === 'diploma_education') {
                    $rules['honours_ong_diploma_passing_subject'] = 'required';
                    $rules['honours_ong_diploma_passing_year'] = 'required';
                    $rules['honours_ong_diploma_passing_institut'] = 'required';
                }
            }
            //Honours
            if ($this->highest_education_general === 'honours') {

                $rules['honours_passing_subject'] = 'required';
                $rules['honours_passing_year'] = 'required';
                $rules['honours_passing_institut'] = 'required';
                //
                $rules['honours_ssc_passing_year'] = 'required';
                $rules['honours_ssc_education_category'] = 'required';
                $rules['honours_ssc_result'] = 'required';
                $rules['honours_after_ssc_education'] = 'required';

                //After Ssc education
                if ($this->honours_after_ssc_education === 'hsc_education') {
                    $rules['honours_hsc_passing_year'] = 'required';
                    $rules['honours_hsc_edu_category'] = 'required';
                    $rules['honours_hsc_result'] = 'required';
                }
                if ($this->honours_after_ssc_education === 'diploma_education') {
                    $rules['honours_diploma_passing_subject'] = 'required';
                    $rules['honours_diploma_passing_year'] = 'required';
                    $rules['honours_diploma_passing_institut'] = 'required';
                }
            }
            //Masters
            if ($this->highest_education_general === 'masters') {
                $rules['masters_passing_subject'] = 'required';
                $rules['masters_passing_year'] = 'required';
                $rules['masters_passing_institut'] = 'required';
                //
                $rules['masters_ssc_passing_year'] = 'required';
                $rules['masters_ssc_education_category'] = 'required';
                $rules['masters_ssc_result'] = 'required';
                $rules['masters_after_ssc_education'] = 'required';
                //
                $rules['masters_honours_passing_subject'] = 'required';
                $rules['masters_honours_passing_year'] = 'required';
                $rules['masters_honours_passing_institut'] = 'required';

                //After Ssc education
                if ($this->masters_after_ssc_education === 'hsc_education') {
                    $rules['masters_hsc_passing_year'] = 'required';
                    $rules['masters_hsc_edu_category'] = 'required';
                    $rules['masters_hsc_result'] = 'required';
                }
                if ($this->masters_after_ssc_education === 'diploma_education') {
                    $rules['masters_diploma_passing_subject'] = 'required';
                    $rules['masters_diploma_passing_year'] = 'required';
                    $rules['masters_diploma_passing_institut'] = 'required';
                }
            }
        }
        //Qawmi
        if ($this->education_type === 'qawmi') {
            $rules['highest_education_qawmi'] = 'required';

            //ibtidaiyah
            if ($this->highest_education_qawmi === 'ibtidaiyah') {
                $rules['ibtidaiyah_passing_year'] = 'required';
                $rules['ibtidaiyah_result'] = 'required';
                $rules['ibtidaiyah_madrasa_name'] = 'required';
            }
            //mutawasita
            if ($this->highest_education_qawmi === 'mutawasita') {
                $rules['mutawasita_passing_year'] = 'required';
                $rules['mutawasita_result'] = 'required';
                $rules['mutawasita_madrasa_name'] = 'required';
            }
            //sanabia
            if ($this->highest_education_qawmi === 'sanabia_uluiya') {
                $rules['sanabia_passing_year'] = 'required';
                $rules['sanabia_result'] = 'required';
                $rules['sanabia_madrasa_name'] = 'required';
            }
            //fazilat
            if ($this->highest_education_qawmi === 'fazilat') {
                $rules['fazilat_passing_year'] = 'required';
                $rules['fazilat_result'] = 'required';
                $rules['fazilat_madrasa_name'] = 'required';
            }
            //taqmeel
            if ($this->highest_education_qawmi === 'taqmeel') {
                $rules['taqmeel_passing_year'] = 'required';
                $rules['taqmeel_result'] = 'required';
                $rules['taqmeel_madrasa_name'] = 'required';
            }
            //takhassus
            if ($this->highest_education_qawmi === 'takhassus') {
                $rules['takhassus_passing_subject'] = 'required';
                $rules['takhassus_passing_year'] = 'required';
                $rules['takhassus_result'] = 'required';
                $rules['takhassus_madrasa_name'] = 'required';
                //
                $rules['takhassus_taqmeel_passing_year'] = 'required';
                $rules['takhassus_taqmeel_result'] = 'required';
                $rules['takhassus_taqmeel_madrasa_name'] = 'required';
            }

        }

        return $rules;
    }



    public function messages(): array
    {
        return [
            'required' => 'অবশ্যই পূরণীয়',
            
            // //General Education
            // 'education_type.required' => 'শিক্ষার ধরন নির্বাচন করা আবশ্যক।',
            // 'highest_education_general.required' => 'সর্বোচ্চ শিক্ষাগত যোগ্যতা প্রদান করুন।',
            // 'highest_education_qawmi.required' => 'সর্বোচ্চ শিক্ষাগত যোগ্যতা প্রদান করুন।',
            // 'under_ssc_class.required' => 'এসএসসি’র নিচের শ্রেণী উল্লেখ করুন।',
            // //SSC
            // 'ssc_passing_year.required' => 'এসএসসি পাশের সাল প্রদান করুন।',
            // 'ssc_education_category.required' => 'এসএসসি বিভাগ নির্বাচন করুন।',
            // 'ssc_result.required' => 'এসএসসি ফলাফল প্রদান করুন।',
            // //HSC
            // 'hsc_ongoing_year.required' => 'এইচএসসি চলমান বছরের তথ্য দিন।',
            // 'hsc_passing_year.required' => 'এইচএসসি পাশের সাল দিন।',
            // 'hsc_education_category.required' => 'এইচএসসি বিভাগ নির্বাচন করুন।',
            // 'hsc_result.required' => 'এইচএসসি ফলাফল দিন।',
            // //
            // 'hsc_ssc_passing_year.required' => 'এসএসসি পাশের সাল প্রদান করুন।',
            // 'hsc_ssc_education_category.required' => 'এসএসসি বিভাগ নির্বাচন করুন।',
            // 'hsc_ssc_result.required' => 'এসএসসি ফলাফল প্রদান করুন।',

            // //Diploma ongoing
            // 'diploma_ongoing_subject.required' => 'ডিপ্লোমার চলমান বিষয় দিন।',
            // 'diploma_ongoing_year.required' => 'ডিপ্লোমার চলমান বছরের তথ্য দিন।',
            // 'diploma_ongoing_institut.required' => 'ডিপ্লোমার চলমান প্রতিষ্ঠান দিন।',
            // //
            // 'diploma_ongoing_ssc_passing_year.required' => 'এসএসসি পাশের সাল দিন।',
            // 'diploma_ongoing_ssc_education_category.required' => ' এসএসসি বিভাগ নির্বাচন করুন।',
            // 'diploma_ongoing_ssc_result.required' => 'এসএসসি ফলাফল দিন।',

            // //Diploma
            // 'diploma_passing_subject.required' => 'ডিপ্লোমা পাশের বিষয় দিন।',
            // 'diploma_passing_year.required' => 'ডিপ্লোমা পাশের বছর দিন।',
            // 'diploma_passing_institut.required' => 'ডিপ্লোমা পাশের প্রতিষ্ঠান দিন।',
            // //
            // 'diploma_ssc_passing_year.required' => 'এসএসসি পাশের সাল দিন।',
            // 'diploma_ssc_education_category.required' => 'এসএসসি বিভাগ নির্বাচন করুন।',
            // 'diploma_ssc_result.required' => 'এসএসসি ফলাফল দিন।',

            // //Honours ongoing
            // 'honours_ongoing_subject.required' => 'অনার্সের চলমান বিষয় দিন।',
            // 'honours_ongoing_year.required' => 'অনার্সের চলমান বছর দিন।',
            // 'honours_ongoing_institut.required' => 'অনার্সের চলমান প্রতিষ্ঠান দিন।',
            // //
            // 'honours_ongoing_ssc_passing_year.required' => 'এসএসসি পাশের সাল দিন।',
            // 'honours_ongoing_ssc_education_category.required' => 'এসএসসি বিভাগ নির্বাচন করুন।',
            // 'honours_ongoing_ssc_result.required' => 'এসএসসি ফলাফল দিন।',
            // 'after_ssc_education.required' => 'এসএসসি পরবর্তী শিক্ষা নির্বাচন করুন।',
            // //
            // 'honours_ong_hsc_passing_year.required' => 'এইচএসসি পাশের সাল দিন।',
            // 'honours_ong_hsc_edu_category.required' => 'এইচএসসি বিভাগ নির্বাচন করুন।',
            // 'honours_ong_hsc_result.required' => 'এইচএসসি ফলাফল দিন।',
            // //
            // 'honours_ong_diploma_passing_subject.required' => 'ডিপ্লোমা পাশের বিষয় দিন।',
            // 'honours_ong_diploma_passing_year.required' => 'ডিপ্লোমা পাশের বছর দিন।',
            // 'honours_ong_diploma_passing_institut.required' => 'ডিপ্লোমা পাশের প্রতিষ্ঠান দিন।',

            // //Honours
            // 'honours_passing_subject.required' => 'অনার্স পাশের বিষয় দিন।',
            // 'honours_passing_year.required' => 'অনার্স পাশের বছর দিন।',
            // 'honours_passing_institut.required' => 'অনার্স পাশের প্রতিষ্ঠান দিন।',
            // //
            // 'honours_ssc_passing_year.required' => 'এসএসসি পাশের সাল দিন।',
            // 'honours_ssc_education_category.required' => 'এসএসসি বিভাগ নির্বাচন করুন।',
            // 'honours_ssc_result.required' => 'এসএসসি ফলাফল দিন।',
            // 'honours_after_ssc_education.required' => 'এসএসসি পরবর্তী শিক্ষা নির্বাচন করুন।',
            // //
            // 'honours_diploma_passing_subject.required' => 'ডিপ্লোমা পাশের বিষয় দিন।',
            // 'honours_diploma_passing_year.required' => 'ডিপ্লোমা পাশের বছর দিন।',
            // 'honours_diploma_passing_institut.required' => 'ডিপ্লোমা পাশের প্রতিষ্ঠান দিন।',
            // //
            // 'honours_hsc_passing_year.required' => 'এইচএসসি পাশের সাল দিন।',
            // 'honours_hsc_edu_category.required' => 'এইচএসসি বিভাগ নির্বাচন করুন।',
            // 'honours_hsc_result.required' => 'এইচএসসি ফলাফল দিন।',

            // //Masters
            // 'masters_passing_subject.required' => 'মাস্টার্স পাশের বিষয় দিন।',
            // 'masters_passing_year.required' => 'মাস্টার্স পাশের বছর দিন।',
            // 'masters_passing_institut.required' => 'মাস্টার্স পাশের প্রতিষ্ঠান দিন।',
            // //
            // 'masters_ssc_passing_year.required' => 'এসএসসি পাশের সাল দিন।',
            // 'masters_ssc_education_category.required' => 'এসএসসি বিভাগ নির্বাচন করুন।',
            // 'masters_ssc_result.required' => 'এসএসসি ফলাফল দিন।',
            // 'masters_after_ssc_education.required' => 'এসএসসি পরবর্তী শিক্ষা নির্বাচন করুন।',
            // //
            // 'masters_honours_passing_subject.required' => 'অনার্স পাশের বিষয় দিন।',
            // 'masters_honours_passing_year.required' => 'অনার্স পাশের বছর দিন।',
            // 'masters_honours_passing_institut.required' => 'অনার্স পাশের প্রতিষ্ঠান দিন।',
            // //
            // 'masters_hsc_passing_year.required' => 'এইচএসসি পাশের সাল দিন।',
            // 'masters_hsc_edu_category.required' => 'এইচএসসি বিভাগ নির্বাচন করুন।',
            // 'masters_hsc_result.required' => 'এইচএসসি ফলাফল দিন।',
            // //
            // 'masters_diploma_passing_subject.required' => 'ডিপ্লোমা পাশের বিষয় দিন।',
            // 'masters_diploma_passing_year.required' => 'ডিপ্লোমা পাশের বছর দিন।',
            // 'masters_diploma_passing_institut.required' => 'ডিপ্লোমা পাশের প্রতিষ্ঠান দিন।',

            // //Qawmi
            // //ibtidaiyah
            // 'ibtidaiyah_passing_year.required' => 'ইবতেদায়িয়া পাশের বছর দিন।',
            // 'ibtidaiyah_result.required' => 'ইবতেদায়িয়া ফলাফল দিন।',
            // 'ibtidaiyah_madrasa_name.required' => 'ইবতেদায়িয়া মাদ্রাসার নাম দিন।',

            // //mutawasita
            // 'mutawasita_passing_year.required' => 'মুতাওয়াস্সিতা পাশের বছর দিন।',
            // 'mutawasita_result.required' => 'মুতাওয়াস্সিতা ফলাফল দিন।',
            // 'mutawasita_madrasa_name.required' => 'মুতাওয়াস্সিতা মাদ্রাসার নাম দিন।',

            // //sanabia
            // 'sanabia_passing_year.required' => 'সানাবিয়া পাশের বছর দিন।',
            // 'sanabia_result.required' => 'সানাবিয়া ফলাফল দিন।',
            // 'sanabia_madrasa_name.required' => 'সানাবিয়া মাদ্রাসার নাম দিন।',

            // //fazilat
            // 'fazilat_passing_year.required' => 'ফাযিলত পাশের বছর দিন।',
            // 'fazilat_result.required' => 'ফাযিলত ফলাফল দিন।',
            // 'fazilat_madrasa_name.required' => 'ফাযিলত মাদ্রাসার নাম দিন।',

            // //taqmeel
            // 'taqmeel_passing_year.required' => 'তাকমীল পাশের বছর দিন।',
            // 'taqmeel_result.required' => 'তাকমীল ফলাফল দিন।',
            // 'taqmeel_madrasa_name.required' => 'তাকমীল মাদ্রাসার নাম দিন।',

            // //takhassus
            // 'takhassus_passing_subject.required' => 'তাখাসসুস পাশের বিষয় দিন।',
            // 'takhassus_passing_year.required' => 'তাখাসসুস পাশের বছর দিন।',
            // 'takhassus_result.required' => 'তাখাসসুস ফলাফল দিন।',
            // 'takhassus_madrasa_name.required' => 'তাখাসসুস মাদ্রাসার নাম দিন।',
            // //
            // 'takhassus_taqmeel_passing_year.required' => 'তাকমীল পাশের বছর দিন।',
            // 'takhassus_taqmeel_result.required' => 'তাকমীল ফলাফল দিন।',
            // 'takhassus_taqmeel_madrasa_name.required' => 'তাকমীল মাদ্রাসার নাম দিন।',

        ];
    }


}//end


