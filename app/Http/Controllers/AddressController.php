<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\Division;
use App\Models\District;
use App\Models\Upazila;

class AddressController extends Controller
{
    public function getCountries()
    {
        return response()->json(Country::all());
    }

    public function getDivisions($country_id)
    {
        return response()->json(Division::where('country_id', $country_id)->get());
    }

    public function getDistricts($division_id)
    {
        return response()->json(District::where('division_id', $division_id)->get());
    }

    public function getUpazilas($district_id)
    {
        return response()->json(Upazila::where('district_id', $district_id)->get());
    }
}
