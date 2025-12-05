<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddressController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/get-countries', [AddressController::class, 'getCountries']);
Route::get('/get-divisions/{country_id}', [AddressController::class, 'getDivisions']);
Route::get('/get-districts/{division_id}', [AddressController::class, 'getDistricts']);
Route::get('/get-upazilas/{district_id}', [AddressController::class, 'getUpazilas']);
