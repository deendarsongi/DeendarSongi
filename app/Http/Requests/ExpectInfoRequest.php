<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExpectInfoRequest extends FormRequest
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
        return [
            'expect_age' => 'required',
            'expect_marital_type' => 'required',
            'expect_district' => 'required|max:200',
            'expect_skin_colors' => 'required',
            'expect_height' => 'required|max:100',
            'expect_body_type' => 'required',
            'expect_education' => 'required|max:200',
            'expect_creed_sect' => 'required|max:100',
            'expect_profession' => 'required|max:200',
            'expect_economic_status' => 'required',
            'expect_life_partner' => 'required',
        ];
    }
    //
    public function messages()
    {
        return [
            'required' => 'অবশ্যই পূরণীয়।',
            
            'expect_district.max' => 'প্রত্যাশিত জেলা সর্বোচ্চ ২০০ অক্ষরের মধ্যে হতে হবে।',
            'expect_height.max' => 'প্রত্যাশিত উচ্চতা সর্বোচ্চ ১০০ অক্ষরের মধ্যে হতে হবে।',
            'expect_education.max' => 'প্রত্যাশিত শিক্ষাগত যোগ্যতা সর্বোচ্চ ২০০ অক্ষরের মধ্যে হতে হবে।',
            'expect_creed_sect.max' => 'প্রত্যাশিত মাজহাব/মতবাদ সর্বোচ্চ ১০০ অক্ষরের মধ্যে হতে হবে।',
            'expect_profession.max' => 'প্রত্যাশিত পেশা সর্বোচ্চ ২০০ অক্ষরের মধ্যে হতে হবে।',
        ];
    }

}
