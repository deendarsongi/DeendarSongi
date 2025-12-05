@extends('frontend.master')

@section('content')
<section class="aw-registration-form">
    <div class="container aw-registration-form-container">
      <div class="aw-registration-card">
        @if (session('register_secc'))
            <h4>{{ session('register_secc') }}</h4>
        @endif
        <div class="col-12 aw-registration-card-body">
          <div class="aw-form-header">
            <h2>হালাল সম্পর্কের শুরু এখানেই</h2>
          </div>
          <div class="aw-form-group-container">
            <form action="{{ route('customer.store') }}" method="POST">
                @csrf
              <div class="aw-form-group-container-inner">
                <div class="aw-form-group-input form-group-input-email">
                  <input type="text" name="name" class="aw-form-control" autocomplete="off" value="{{ old('name') }}" >
                  <div class="aw-form-labelline">সম্পূর্ণ নাম</div>
                </div>
                @error('name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
              </div>
              <div class="aw-form-group-container-inner">
                <div class="aw-form-group-gender">
                  <div class="aw-form-group-label">
                    <div class="aw-form-label mb-10">লিঙ্গগত তথ্য</div>
                  </div>
                  <div class="aw-form-input-field">
                    <div class="aw-form-group-input-gender mr-10">
                        <label for="male">পুরুষ</label>
                        <input type="radio" name="gender" id="male" value="1" {{ old('gender') == 1 ? 'checked' : '' }}>
                    </div>
                    <div class="aw-form-group-input-gender">
                        <label for="female">মহিলা</label>
                        <input type="radio" name="gender" id="female" value="2" {{ old('gender') == 2 ? 'checked' : '' }}>
                    </div>
                  </div>
                  @error('gender')
                    <p class="text-danger">{{ $message }}</p>
                  @enderror
                </div>
              </div>
              <div class="aw-form-group-container">
                <div class="aw-form-group-container-inner">
                  <div class="aw-form-group-input form-group-input-email">
                    <input type="text" name="email" class="aw-form-control" autocomplete="off" value="{{ old('email') }}" >
                    <div class="aw-form-labelline">ইমেইল</div>
                  </div>
                  @error('email')
                    <p class="text-danger">{{ $message }}</p>
                  @enderror
                    @if (session('login_error'))
                        <p class="text-danger">{{ session('login_error') }}</p>
                    @endif
                    @if (session('user_block_error'))
                        <p class="text-danger">{{ session('user_block_error') }}</p>
                    @endif
                </div>
              </div>
              <div class="aw-form-group-container-inner">
                <div class="aw-form-group-input">
                  <input type="password" name="password" autocomplete="off" class="aw-form-control passwordField" value=""  id="">
                  <div class="aw-form-labelline">নতুন পাসওয়ার্ড</div>
                  <div class="aw-form-eye">
                    <img src="{{ asset('frontend') }}/uploads/Eye-Hidden.svg" alt="Hidden" class="eye-hidden" id="hiddenIcon" style="display: inline;">
                    <img src="{{ asset('frontend') }}/uploads/Eye-Visible.svg" alt="Visible" class="eye-visible" id="visibleIcon" style="display: none;">
                  </div>
                </div>
                @error('password')
                    <p class="text-danger">{{ $message }}</p>
                  @enderror
              </div>
              <div class="aw-form-confirmation-text d-flex">
                <p>
                  রেজিষ্ট্রেশন করার মাধমে আপনি আমাদের
                  <span><a href="#">পরিষেবার শর্তাবলী</a></span> মেনে নিচ্ছেন
                </p>
              </div>
              <div class="aw-form-group-container-inner">
                <div class="aw-form-group-input">
                  <button type="submit"  class="aw-form-control ds-button">একাউন্ট তৈরি করুন</button>
                </div>
              </div>
            </form>
            <div class="aw-form-group-container-inner form-create-account-dailouge">
              <span>ইতিমধ্যে একাউন্ট আছে? <a href="{{ route('customer.login') }}" class="">লগইন করুন</a></span>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
@endsection



