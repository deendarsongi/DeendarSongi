<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class GeneralInfoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'biodata_type' => 'required',
            'married_type' => 'required',
            'date_of_birth' => 'required|date|before:today',
            'face_color' => 'required',
            'height' => 'required',
            'weight' => 'required',
            'body_shape' => 'required',
            'blood_group' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'required' => 'অবশ্যই পূরণীয়',
            'date_of_birth.date' => 'জন্মতারিখ একটি বৈধ তারিখ হতে হবে।',
            'date_of_birth.before' => 'জন্মতারিখ আজকের তারিখের আগে হতে হবে।',

        ];
    }
}
