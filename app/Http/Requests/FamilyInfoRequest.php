<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FamilyInfoRequest extends FormRequest
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
        $rules = [
            'family_type' => 'required',
            'father_name' => 'required',
            'father_current_condition' => 'required',
            'father_profession' => 'required',
            'mother_name' => 'required',
            'mother_current_condition' => 'required',
            'mother_profession' => 'required',
            'brother_count' => 'required',
            'sister_count' => 'required',
            'uncles_info' => 'required',
            'family_financial_info' => 'required',
            'social_status_info' => 'required',
            'family_members_info' => 'required',
            'family_religious_status' => 'required',
        ];

        if ($this->brother_count !== 'none') {
            $rules['brother_info'] = 'required';
        }
        if ($this->sister_count !== 'none') {
            $rules['sister_info'] = 'required';
        }

        return $rules;
    }

    public function messages(): array
    {
        return [
           'required' => 'অবশ্যই পূরণীয়',

        ];
    }
}
