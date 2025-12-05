<?php

namespace App\Http\Requests;

use App\Models\Biodata;
use Illuminate\Foundation\Http\FormRequest;

class MarriageInfoRequest extends FormRequest
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
    public function rules(): array
    {
        $customer_id = auth('customer')->user()->id;
        $biodata = Biodata::where('customer_id', $customer_id)->first();

        $rules = [
            'parents_consent' => 'required|max:100',
            'why_getting_married' => 'required',
            'about_mohar' => 'required|max:100',
        ];

        // married
        if ($biodata && $biodata->married_type == 'married') {
            $rules['currently_wife_children'] = 'required|max:100';
            $rules['married_again'] = 'required';
        }
        // divorced
        if ($biodata && $biodata->married_type == 'divorced') {
            $rules['divorce_reason'] = 'required';
        }
        // widow
        if ($biodata && $biodata->married_type == 'widow') {
            $rules['husband_death_year'] = 'required';
            $rules['wife_new_relationship'] = 'required';
        }
        // widower
        if ($biodata && $biodata->married_type == 'widower') {
            $rules['wife_death_year'] = 'required';
            $rules['husband_new_relationship'] = 'required';
        }
        // male
        if ($biodata && $biodata->biodata_type == 'male') {
            $rules['after_marriage_veil'] = 'required|max:100';
            $rules['wife_after_marriage_job'] = 'required|max:100';
            $rules['wife_after_marriage_live'] = 'required|max:100';
            $rules['wife_responsibilities'] = 'required';
            $rules['expect_wedding_gift'] = 'required|max:100';
            $rules['widow_divorced_woman'] = 'required|max:100';
            $rules['compromise_husband'] = 'required|max:100';
        }
        // Female
        if ($biodata && $biodata->biodata_type == 'female') {
            $rules['obedience_husband'] = 'required|max:100';
            $rules['job_after_marriage'] = 'required|max:100';
            $rules['husband_responsibilities'] = 'required';
            $rules['student_unemployed'] = 'required|max:100';
            $rules['second_wife'] = 'required|max:100';
            $rules['compromise_wife'] = 'required|max:100';
        }

        return $rules;
    }
    ///
    public function messages(): array
    {
        return [
            'required' => 'অবশ্যই পূরণীয়',

            'parents_consent.max' => '১০০ অক্ষরের বেশি দিতে পারবেন না।',
            'currently_wife_children.max' => '১০০ অক্ষরের বেশি দিতে পারবেন না।',
            'obedience_husband.max' => '১০০ অক্ষরের বেশি দিতে পারবেন না।',
            'job_after_marriage.max' => '১০০ অক্ষরের বেশি দিতে পারবেন না।',
            'after_marriage_veil.max' => '১০০ অক্ষরের বেশি দিতে পারবেন না।',
            'wife_after_marriage_job.max' => '১০০ অক্ষরের বেশি দিতে পারবেন না।',
            'wife_after_marriage_live.max' => '১০০ অক্ষরের বেশি দিতে পারবেন না।',
            'expect_wedding_gift.max' => '১০০ অক্ষরের বেশি দিতে পারবেন না।',
            'about_mohar.max' => '১০০ অক্ষরের বেশি দিতে পারবেন না।',
            'student_unemployed.max' => '১০০ অক্ষরের বেশি দিতে পারবেন না।',
            'second_wife.max' => '১০০ অক্ষরের বেশি দিতে পারবেন না।',
            'widow_divorced_woman.max' => '১০০ অক্ষরের বেশি দিতে পারবেন না।',
            'compromise_wife.max' => '১০০ অক্ষরের বেশি দিতে পারবেন না।',
            'compromise_husband.max' => '১০০ অক্ষরের বেশি দিতে পারবেন না।',

        ];
}
}
