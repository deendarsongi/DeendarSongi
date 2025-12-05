<?php

namespace App\Http\Requests;

use App\Models\Biodata;
use Illuminate\Foundation\Http\FormRequest;

class PersonalInfoRequest extends FormRequest
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
            'salat_year' => 'required',
            'mahram_non_mahram' => 'required',
            'quran_recitation' => 'required',
            'outside_outside_clothes' => 'required',
            'any_creed_sect' => 'required',
            'favorite_islamic_book' => 'required',
            'favorite_islamic_scholar' => 'required',
            'physical_mental_condition' => 'required',
            'watch_listen_movies_songs' => 'required',
            'involved_establish_religion' => 'required',
            'beliefs_shrine' => 'required',
            'about_yourself' => 'required',
        ];


        if ($biodata && $biodata->biodata_type == 'male') {
            $rules['obligatory_beard'] = 'required';
            $rules['ankle_dress'] = 'required';
            $rules['eat_drink_intoxicating'] = 'required';
            $rules['male_phone'] = 'required|max:20';
        }
        if ($biodata && $biodata->biodata_type == 'female') {
            $rules['full_islamic_veil'] = 'required';
            $rules['gender_equality'] = 'required|max:50';
            $rules['female_phone'] = 'required|max:20';
        }

        return $rules;
    }

    public function messages(): array
    {
        return [
            'required' => 'অবশ্যই পূরণীয়',

            'male_phone.max' => '২০ অক্ষরের বেশি দিতে পারবেন না।',
            'female_phone.max' => '২০ অক্ষরের বেশি দিতে পারবেন না।',
        ];
    }
}
