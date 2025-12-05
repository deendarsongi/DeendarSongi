@extends('frontend.master')

@section('content')
<section class="aw-login-form">
    <div class="container aw-login-form-container">
      <div class="aw-login-card">
        <div class="col-12 aw-login-card-body">
          <div class="aw-form-header">
            <h2>একাউন্টে লগইন করুন</h2>
          </div>
          <div class="aw-form-group-container">
            @if (session('reset_succ'))
                <p style="color: green; padding-bottom: 10px;">{{ session('reset_succ') }}</p>
            @endif
            @if (session('google_error'))
                <p style="color: rgb(239, 29, 29); padding-bottom: 10px;">{{ session('google_error') }}</p>
            @endif
            <form action="{{ route('customerlogin') }}" method="POST">
                @csrf
              <div class="aw-form-group-container-inner">
                <div class="aw-form-group-input form-group-input-email">
                  <input type="text" name="email" class="aw-form-control" autocomplete="off" value="{{ old('email', session('email')) }}">
                  <div class="aw-form-labelline">ইমেইল</div>
                </div>
                @if (session('user_block_error'))
                    <p class="text-danger">{{ session('user_block_error') }}</p>
                @endif
                @error('email')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                @if (session('wrong_email'))
                    <p class="text-danger">{{ session('wrong_email') }}</p>
                @endif
              </div>
              <div class="aw-form-group-container-inner">
                <div class="aw-form-group-input">
                  <input type="password" name="password" autocomplete="off" class="aw-form-control passwordField" value="{{ old('password', session('password')) }}"  id="">
                  <div class="aw-form-labelline">পাসওয়ার্ড</div>
                  <div class="aw-form-eye">
                    <img src="{{ asset('frontend') }}/uploads/Eye-Hidden.svg" alt="Hidden" class="eye-hidden" id="hiddenIcon" style="display: inline;">
                    <img src="{{ asset('frontend') }}/uploads/Eye-Visible.svg" alt="Visible" class="eye-visible" id="visibleIcon" style="display: none;">
                  </div>
                </div>
                @error('password')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                @if (session('wrong_password'))
                    <p class="text-danger">{{ session('wrong_password') }}</p>
                @endif
              </div>
              <div class="aw-form-group-container-inner">
              <div class="aw-form-remember-password">
                <div class="aw-form-label">
                  <input name="remember" type="checkbox" id="remember-me" value="1" >
                  <label for="remember-me">মনে রাখুন</label>
                </div>
                <div class="aw-form-label">
                  <a href="{{ route('forget.password') }}">পাসওয়ার্ড ভুলে গেছেন?</a>
                </div>
              </div>
            </div>
              <div class="aw-form-group-container-inner">
                <div class="aw-form-group-input">
                  <button type="submit" class="aw-form-control ds-button" >লগইন</button>
                </div>
              </div>
            </form>
            <div class="aw-form-group-container-inner">
              <div class="aw-form-seperator">
                <span>অথবা</span>
              </div>
            </div>
            <div class="aw-form-group-container-inner">
              <div class="aw-form-group-content">
                <a href="{{ route('google.redirect') }}" class="aw-form-button aw-google-btn"><span><img src="{{ asset('frontend') }}/uploads/Google.svg" alt=""></span>Google দিয়ে লগইন করুন</a>
              </div>
            </div>
              <div class="aw-form-group-container-inner form-create-account-dailouge">
                <span>দ্বীনদারসঙ্গীতে একাউন্ট নেই? <a href="{{ route('register.selection') }}" class="">একাউন্ট তৈরি করুন</a></span>
              </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection



