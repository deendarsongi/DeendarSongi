<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InquiriesInfoRequest extends FormRequest
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
            'guardian_permission'=>'required',
            'information_true'=>'required',
            'responsibility'=>'required',
        ];
    }
    //
    public function messages()
    {
        return [
            'required' => 'অবশ্যই পূরণীয়।',
        ];
    }
}
