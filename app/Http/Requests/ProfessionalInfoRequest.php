<?php

namespace App\Http\Requests;

use App\Models\Biodata;
use Illuminate\Foundation\Http\FormRequest;

class ProfessionalInfoRequest extends FormRequest
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
            'profession' => 'required',
            'profession_details' => 'required',
        ];


        if ($biodata && $biodata->biodata_type == 'male') {
            $rules['workplace'] = 'required | max:100';
            $rules['income_verify'] = 'required | max:50';
        }

        return $rules;
    }
    ///
    public function messages(): array
    {
        return[
            'required' => 'অবশ্যই পূরণীয়',
            
            'workplace.max' => '১০০ অক্ষরের বেশি দিতে পারবেন না।',
            'income_verify.max' => '৫০ অক্ষরের বেশি দিতে পারবেন না।',
        ];
    }
}
