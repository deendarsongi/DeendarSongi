<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddressInfoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array {
        $rules = [
            'permanent_address' => 'required|string',
            'permanent_ads_extra' => 'required|string',
            'born_raised' => 'required|string',
        ];

        if ($this->input('location_picker_checkbox') != 1) {
            $rules['current_address'] = 'required|string';
            $rules['current_ads_extra'] = 'required|string';
        }

        return $rules;
    }


    public function messages(): array
    {
        return [
            'required' => 'অবশ্যই পূরণীয়',

            'permanent_address.string' => 'স্থায়ী ঠিকানার ফরম্যাট ঠিক নেই!',
            'permanent_ads_extra.string' => 'গ্রাম বা এলাকার নাম অবশ্যই একটি স্ট্রিং হতে হবে!',
            'born_raised.string' => 'জন্মস্থানের ফরম্যাট ঠিক নেই!',
            'current_address.string' => 'বর্তমান ঠিকানার ফরম্যাট ঠিক নেই!',
            'current_ads_extra.string' => 'গ্রাম বা এলাকার নাম অবশ্যই একটি স্ট্রিং হতে হবে!',
        ];
    }

}
