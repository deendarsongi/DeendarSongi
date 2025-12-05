<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\BiodataController;
use App\Http\Controllers\CheckValidationController;
use App\Http\Controllers\CustomerAuthController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SocialLoginController;
use Illuminate\Support\Facades\Route;

Route::controller(FrontendController::class)->group(function(){
    Route::get('/', 'deendarsangee')->name('index');
    Route::get('/biodatas', 'biodatas')->name('biodatas');
    Route::get('/about/us', 'about_us')->name('about_us');
    Route::get('/faq', 'faq')->name('faq');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/my/dashboard', 'my_dashboard')->name('my.dashboard')->middleware('customer_auth_check');
    Route::get('/proposal', 'proposal')->name('proposal')->middleware('customer_auth_check');
    Route::get('/wishlist', 'wishlist')->name('wishlist')->middleware('customer_auth_check');
    Route::get('/biodata', 'biodata')->name('biodata')->middleware('customer_auth_check');
    Route::get('/add/biodata', 'add_biodata')->name('add.biodata')->middleware('customer_auth_check');
    Route::get('/preview/biodata', 'preview_biodata')->name('preview.biodata')->middleware('customer_auth_check');
    Route::get('/contact/information', 'contact_info')->name('contact.info');
    Route::get('/payment/information', 'payment_info')->name('payment.info');
    Route::get('/report', 'report')->name('report');
    Route::get('/report/info', 'report_info')->name('report.info');
    Route::get('/success/form', 'success_form')->name('success.form');
    Route::get('/delete/biodata', 'delete_biodata')->name('delete.biodata');
    Route::get('/biodata/detail/{id}', 'biodata_detail')->name('biodata.detail');
    Route::get('/checkout', 'checkout')->name('checkout');
    Route::get('/packages', 'packages')->name('packages');
});

//Customer
Route::controller(CustomerAuthController::class)->group(function(){
    //Customer Login / Registration
    Route::get('/customer/login', 'customer_login')->name('customer.login');
    Route::get('/customer/registration/selection', 'register_selection')->name('register.selection');
    Route::get('/customer/registration', 'customer_register')->name('customer.register');
    //
    Route::get('/customer/register/otp/{customerID}', 'customer_register_otp')->name('customer.register.otp');
    Route::post('/customer/register/verify/otp/{customerID}', 'customer_register_verify_otp')->name('customer.register.verify.otp');
    Route::get('resend-otp/{customerID}','resendOTP')->name('resend.otp');
    //
    Route::post('/customer/store', 'customer_store')->name('customer.store');
    Route::post('/customerlogin', 'customerlogin')->name('customerlogin');
    Route::get('/customer/logout', 'customer_logout')->name('customer.logout');

    //Forget Password
    Route::get('/customer/forget/password', 'forget_password')->name('forget.password');
    Route::post('/customer/forget/password', 'forget_password_submit')->name('forget.password.submit');
    //
    Route::get('/customer/forget/password/otp/{customerID}', 'forget_password_otp')->name('forget.password.otp');
    Route::post('/customer/forget/password/verify/otp/{customerID}', 'forget_password_verify_otp')->name('forget.password.verify.otp');
    //
    Route::get('/customer/reset/password/{customerID}', 'reset_password')->name('reset.password');
    Route::post('/customer/reset/password/{customerID}', 'reset_password_submit')->name('reset.password.submit');
});

//Social Login
Route::controller(SocialLoginController::class)->group(function(){
    Route::get('/google/redirect', 'google_redirect')->name('google.redirect');
    Route::get('/google/callback', 'google_callback')->name('google.callback');
    //
    Route::get('/select/gender', 'select_gender')->name('select.gender');
    Route:: post('/save/gender', 'save_gender')->name('save.gender');
});

//Address
Route::controller(AddressController::class)->group(function(){
    Route::get('/get-countries','getCountries');
    Route::get('/get-divisions/{country_id}','getDivisions');
    Route::get('/get-districts/{division_id}','getDistricts');
    Route::get('/get-upazilas/{district_id}', 'getUpazilas');
});

//Biodata
Route::controller(BiodataController::class)->group(function(){
    Route::post('/general/information/store', 'general_info_store')->name('general.information.store');
    Route::post('/address/information/store', 'address_info_store')->name('address.information.store');
    Route::post('/education/information/store', 'education_info_store')->name('education.information.store');
    Route::post('/family/information/store', 'family_info_store')->name('family.information.store');
    Route::post('/parsonal/information/store', 'parsonal_info_store')->name('parsonal.information.store');
    Route::post('/professional/information/store', 'professional_info_store')->name('professional.information.store');
    Route::post('/marriage/information/store', 'marriage_info_store')->name('marriage.information.store');
    Route::post('/expectation/information/store', 'expectation_info_store')->name('expectation.information.store');
    Route::post('/inquiries/information/store', 'inquiries_info_store')->name('inquiries.information.store');
    Route::post('/contact/information/store', 'contact_info_store')->name('contact.information.store');
    Route::post('/submit/biodata', 'submit_biodata')->name('submit.biodata');
    Route::get('/delete/biodata', 'delete_biodata')->name('delete.biodata');

});

//CheckValidation
Route::controller(CheckValidationController::class)->group(function(){
    Route::get('/check/step/access', 'checkStepAccess');
    Route::post('/step/validation', 'stepValidation');
});


// Backend
Route::controller(BackendController::class)->group(function(){
    Route::get('/dashboard', 'dashboard')->middleware(['auth', 'verified'])->name('dashboard');
    Route::get('/user/management', 'user_manage')->middleware(['auth', 'verified'])->name('user.management');
    Route::get('/biodata/management', 'biodata_manage')->middleware(['auth', 'verified'])->name('biodata.management');
    Route::get('view/biodata/{id}', 'view_biodata')->middleware(['auth', 'verified'])->name('view.biodata');
    Route::post('/biodata/accept/{id}',  'acceptBiodata')->name('biodata.accept');
    Route::post('/biodata/reject/{id}',  'rejectBiodata')->name('biodata.reject');

    Route::get('/logout', 'logout')->name('logout');
});

// Backend End



/////////////////////////
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
