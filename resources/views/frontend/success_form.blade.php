@extends('frontend.sidebar')
@section('dashboard_content')
<div class="dsdb-content">
    <div class="dsdb-content-inner">
        <div class="dsdb-sub-header">
            <h2>বিবাহ নিশ্চিতকরণ</h2>
            <p>
              নিচের ফরম পূরণের মাধ্যমে আপনার বিয়ের অনুভূতি এবং বিয়ে সংক্রান্ত তথ্য আমাদের সাথে শেয়ার করুন ইনশা আল্লাহ
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
                      <label for="">জীবনসঙ্গীর বায়োডাটা নাম্বার<span
                        class="must-fillup-estaristic"
                        >*</span
                      ></label>
                    </div>
                    <div class="success-form-input">
                      <input type="text" required="" class="input-filup-text">
                      <div class="input-highlighter-text">
                        <p>
                        ওয়েবসাইটে বায়োডাটা না থাকলে "বায়োডাটা ছিল না" লিখুন
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="success-form-general-content">
                  <div class="success-form-each-field">
                    <div class="success-form-label">
                      <label for="">বরের জেলা<span
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
                      <label for="">কনের জেলা<span
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
                      <label for="">বরের পেশা<span
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
                      <label for="">কনের পেশা<span
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
                      <label for="">বরের পড়াশোনা<span
                        class="must-fillup-estaristic"
                        >*</span
                      ></label>
                    </div>
                    <div class="success-form-input">
                      <input type="text"  required="" class="input-filup-text">
                    </div>
                  </div>
                </div>
                <div class="success-form-general-content">
                  <div class="success-form-each-field">
                    <div class="success-form-label">
                      <label for="">কনের পড়াশোনা<span
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
                      <label for="">বিয়ে সম্পন্ন হওয়ার তারিখ<span
                        class="must-fillup-estaristic"
                        >*</span
                      ></label>
                    </div>
                    <div class="success-form-input">
                      <input type="date" required="" class="input-filup-text">
                    </div>
                  </div>
                </div>
                <div class="success-form-general-content">
                  <div class="success-form-each-field">
                    <div class="success-form-label">
                      <label for="">বিয়েতে মোহরানা কত টাকা ছিল?<span
                        class="must-fillup-estaristic"
                        >*</span
                      ></label>
                    </div>
                    <div class="success-form-input">
                      <input type="text" required=""class="input-filup-text">
                    </div>
                  </div>
                </div>
                <div class="success-form-general-content">
                    <div class="success-form-each-field">
                      <div class="success-form-label">
                        <label for="">বিয়ে কোথায় সম্পন্ন হয়েছিল?<span
                            class="must-fillup-estaristic"
                            >*</span
                          ></label>
                      </div>
                      <div class="success-form-input">
                        <input type="text" required=""class="input-filup-text">
                      </div>
                    </div>
                  </div>
                <div class="success-form-general-content">
                    <div class="success-form-each-field">
                      <div class="success-form-label">
                        <label for="">বিয়ে, জীবনসঙ্গী এবং দ্বীনদারসঙ্গী ডটকম
                          সম্পর্কে আপনার অনুভূতি বিস্তারিত লিখুন<span
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
                        <label for="report-photo">আকদ হওয়ার সময়কার সর্বোচ্চ একটি ছবি দিন (যদি থাকে)</label>
                      </div>
                      <label class="input-filup-file"> Upload Photo
                        <input type="file" id="report-photo" required="" style="display:none">
                      </label>
                    </div>
                  </div>
              </div>
              <div class="success-form-submit">
                <button type="button" class="ds-general-btn w-100 ds-button">পাঠিয়ে দিন</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
