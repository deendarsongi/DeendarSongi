<?php

namespace App\Http\Requests;

use App\Models\Biodata;
use Illuminate\Foundation\Http\FormRequest;

class ContactInfoRequest extends FormRequest
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
            'guardian_mobile' => 'required|max:100',
            'guardian_relation' => 'required|max:100',
            'receive_biodata_email' => 'required|max:100|email',
        ];


        if ($biodata && $biodata->biodata_type == 'male') {
            $rules['husband_name'] = 'required|max:100';

        }
        if ($biodata && $biodata->biodata_type == 'female') {
            $rules['wife_name'] = 'required|max:100';
        }

        return $rules;
    }
    //
     public function messages()
    {
        return [
            'required' => 'অবশ্যই পূরণীয়।',
            
            'receive_biodata_email.email' => 'ইমেইলটি ফরমেট অনুযায়ী দিতে হবে।',
        ];
    }
}
