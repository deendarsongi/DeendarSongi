@extends('frontend.master')

@section('content')
<section class="aw-registration-form">
    <div class="container aw-registration-form-container">
      <div class="aw-registration-card">
        <div class="col-12 aw-registration-card-body">
          <div class="aw-form-header">
            <h2>দ্বীনদার জীবনসঙ্গী খুঁজতে</h2>
          </div>
              <div class="aw-form-group-container-inner">
                <div class="aw-form-group-content">
                  <a href="{{ route('google.redirect') }}" class="aw-form-button aw-google-btn-clr"><span><img src="{{ asset('frontend') }}/uploads/Google.svg" alt=""></span>Google দিয়ে একাউন্ট তৈরি করুন</a>
                </div>
              </div>
              <div class="aw-form-group-container-inner">
                <div class="aw-form-seperator">
                  <span>অথবা</span>
                </div>
              </div>
              <div class="aw-form-group-container-inner">
                  <div class="aw-form-group-content">
                    <a href="{{ route('customer.register') }}" class="aw-form-button aw-mail-btn"><span><img src="{{ asset('frontend') }}/uploads/Mail.svg" alt=""></span>ইমেইল দিয়ে একাউন্ট তৈরি করুন</a>
                  </div>
                </div>
                <div class="aw-form-group-container-inner form-create-account-dailouge">
                  <span>ইতিমধ্যে একাউন্ট আছে? <a href="{{ route('customer.login') }}" class="">লগইন করুন</a></span>
                </div>
        </div>
      </div>
    </div>
</section>
@endsection



