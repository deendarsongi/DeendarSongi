@extends('frontend.sidebar')
@section('dashboard_content')
<div class="dsdb-content">
    <div class="dsdb-content-inner">
        <div class="dsdb-sub-header">
            <h2>অভিযোগ করুন</h2>
            <p>
                আপনার যেকোনো বৈধ অভিযোগের জন্য নিম্নোক্ত ফর্মটি পূরণ করে পাঠিয়ে দিন ইনশা আল্লাহ
            </p>
          </div>
      <div class="row">
        <div class="col-12">
          <form action="" method="post">
            <div class="dsdb-success-form-container">
              <div class="success-form-main-container">
                <div class="success-form-general-content">
                  <div class="success-form-each-field">
                    <div class="success-form-label">
                      <label for="">অভিযুক্ত বায়োডাটা আইডি<span
                        class="must-fillup-estaristic"
                        >*</span
                      ></label>
                    </div>
                    <div class="success-form-input">
                      <input type="text" required="" class="input-filup-text">
                    </div>
                  </div>
                </div>
                <div class="success-form-general-content">
                  <div class="success-form-each-field">
                    <div class="success-form-label">
                      <label for="">বিষয়<span
                        class="must-fillup-estaristic"
                        >*</span
                      ></label>
                    </div>
                    <div class="success-form-input">
                        <select
                        name=""
                        class="select2 select2-hidden-accessible"
                        style="width: 100%"
                        id=""
                      >
                        <option value="">নির্বাচন করুন</option>
                        <option value="">বায়োডাটাতে তথ্য ভুল দিয়েছে</option>
                        <option value="">যোগাযোগ তথ্য ভুল</option>
                        <option value="">
                        বিবাহ হয়ে গেছে
                        </option>
                        <option value="">অশোভন আচরণ করেছে</option>
                        <option value="">অন্যান্য</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="success-form-general-content">
                  <div class="success-form-each-field">
                    <div class="success-form-label">
                      <label for="">আপনার মোবাইল নাম্বার<span
                        class="must-fillup-estaristic"
                        >*</span
                      ></label>
                    </div>
                    <div class="success-form-input">
                      <input type="text" required="" class="input-filup-text">
                    </div>
                  </div>
                </div>
                <div class="success-form-general-content">
                    <div class="success-form-each-field">
                      <div class="success-form-label">
                        <label for="">অভিযোগের কারন লিখুন<span
                            class="must-fillup-estaristic"
                            >*</span
                          ></label>
                      </div>
                      <div class="success-form-input">
                        <textarea name="success-form-sharefeelings"  required="" class="input-filup-text"></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="success-form-general-content">
                    <div class="success-form-each-field">
                      <div class="success-form-label">
                        <label for="report-photo">দলীল বা প্রমাণ দিন (যদি থাকে)</label>
                      </div>
                      <label class="input-filup-file"> Upload Photo
                        <input type="file" id="report-photo" required="" style="display:none">
                      </label>
                    </div>
                  </div>
              </div>
              <div class="success-form-submit">
                <button type="button" class="ds-general-btn w-100">পাঠিয়ে দিন</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
