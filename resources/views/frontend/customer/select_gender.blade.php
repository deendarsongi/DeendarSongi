@extends('frontend.master')

@section('content')
<section class="aw-registration-form">
    <div class="container aw-registration-form-container">
      <div class="aw-registration-card">
        <div class="col-12 aw-registration-card-body">
            <div class="aw-form-header">
                <h2>হালাল সম্পর্কের শুরু এখানেই</h2>
            </div>
            <div class="aw-form-confirmation-text d-flex">
                <p>
                    আপনার ইমেইল এবং নাম ভেরিফিকেশন সম্পন্ন হয়েছে। আপনার লিঙ্গ নির্বাচন করুন।
                </p>
              </div>
          <div class="aw-form-group-container">
            <form action="{{ route('save.gender') }}" method="POST">
                @csrf
              <div class="aw-form-group-container-inner">
                <div class="aw-form-group-input form-group-input-email">
                  <input type="text" name="name" class="aw-form-control" value="{{ $customer->name }}" readonly>
                  <div class="aw-form-labelline">আপনার নাম</div>
                </div>
              </div>
              <div class="aw-form-group-container-inner">
                <div class="aw-form-group-gender">
                  <div class="aw-form-group-label">
                    <div class="aw-form-label mb-10">লিঙ্গগত তথ্য</div>
                  </div>
                  <div class="aw-form-input-field">
                    <div class="aw-form-group-input-gender mr-10">
                        <label for="male">পুরুষ</label>
                        <input type="radio" name="gender" id="male" value="1">
                    </div>
                    <div class="aw-form-group-input-gender">
                        <label for="female">মহিলা</label>
                        <input type="radio" name="gender" id="female" value="2">
                    </div>
                  </div>
                  @error('gender')
                    <p class="text-danger">{{ $message }}</p>
                  @enderror
                </div>
              </div>
              <div class="aw-form-group-container-inner">
                <div class="aw-form-group-input">
                  <button type="submit"  class="aw-form-control ds-button">লগইন</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
</section>
@endsection



