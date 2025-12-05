@extends('frontend.master')

@section('content')
<section class="aw-login-form">
    <div class="container aw-login-form-container">
      <div class="aw-login-card">
        <div class="col-12 aw-login-card-body">
          <div class="aw-form-header">
            <h2>পাসওয়ার্ড ভুলে গেছেন?</h2>
          </div>
          <div class="aw-form-group-container">
            <form action="{{ route('forget.password.submit', ) }}" method="POST">
                @csrf
              <div class="aw-form-group-container-inner">
                <div class="aw-form-group-input form-group-input-email">
                  <input type="text" name="email" class="aw-form-control" autocomplete="off" value="">
                  <div class="aw-form-labelline">ইমেইল</div>
                </div>
                @if (session('forget_error'))
                    <p style="color: red;">{{ session('forget_error') }}</p>
                @endif
                @if (session('user_block_error'))
                    <p style="color: red;">{{ session('user_block_error') }}</p>
                @endif
                @error('email')
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


