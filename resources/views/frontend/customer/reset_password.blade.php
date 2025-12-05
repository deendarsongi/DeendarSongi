
@extends('frontend.master')

@section('content')

<section class="aw-login-form">
    <div class="container aw-login-form-container">
      <div class="aw-login-card">
        <div class="col-12 aw-login-card-body">
          <div class="aw-form-header">
            <h2>নতুন পাসওয়ার্ড দিন</h2>
          </div>
          <div class="aw-form-group-container">
            <form action="{{ route('reset.password.submit', $customer->id) }}" method="POST">
                @csrf
                <div class="aw-form-group-container-inner">
                    <div class="aw-form-group-input">
                      <input type="password" name="password" autocomplete="off" class="aw-form-control passwordField" value=""  id="">
                      <div class="aw-form-labelline">পাসওয়ার্ড</div>
                      <div class="aw-form-eye">
                        <img src="{{ asset('frontend') }}/uploads/Eye-Hidden.svg" alt="Hidden" class="eye-hidden" id="hiddenIcon" style="display: inline;">
                        <img src="{{ asset('frontend') }}/uploads/Eye-Visible.svg" alt="Visible" class="eye-visible" id="visibleIcon" style="display: none;">
                      </div>
                    </div>
                    @error('password')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                  </div>
              <div class="aw-form-group-container-inner">
                <div class="aw-form-group-input">
                  <button type="submit" class="aw-form-control ds-button" >পাসওয়ার্ড পুনরুদ্ধার করুন</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
