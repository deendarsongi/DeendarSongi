
@extends('frontend.sidebar')

@section('dashboard_content')
<div class="dsdb-content">
        <div class="dsdb-content-inner">
            <div class="row">
              <div class="col-12">
                <div class="dsdb-biodata-commitment-importance-container">
                  <div class="commitment-importance-header">
                    <h4>গুরুত্বপূর্ণ টীকা</h4>
                  </div>
                  <div class="commitment-importance-text">
                    <p> দ্বীনদারসঙ্গী ডটকম এ বায়োডাটা জমা দেওয়ার জন্য নূন্যতম
                        শর্তসমূহ পূরণ করা আবশ্যক
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <div class="dsdb-biodata-commitment-container">
                  <div class="biodata-commitment-btn-container">
                    <div class="commitment-gender-btn-box commitment-male-btn-box">
                      <input type="radio" id="commitment-male-btn" name="commitment-gender-btn" checked="">
                      <label for="commitment-male-btn">পাত্রের ক্ষেত্রে</label>
                    </div>
                    <div class="commitment-gender-btn-box commitment-female-btn-box">
                      <input type="radio" id="commitment-female-btn" name="commitment-gender-btn">
                      <label for="commitment-female-btn">পাত্রীর ক্ষেত্রে</label>
                    </div>
                  </div>
                  <div class="biodata-commitment-content-box ">
                    <div class="biodata-commitment-content commitment-male-content active">
                      <div class="biodata-commitment-image-box">
                        <img src="{{ asset('frontend') }}/uploads/Man.svg" alt="male-image">
                      </div>
                      <ul class="biodata-commitment">
                        <li>
                          <i class="bi bi-check-circle-fill"></i>
                          <p>উপার্জন হালাল হতে হবে</p>
                        </li>
                        <li>
                          <i class="bi bi-check-circle-fill"></i>
                          <p> ৫ ওয়াক্ত সালাত আদায়কারী হতে হবে</p>
                        </li>
                        <li>
                          <i class="bi bi-check-circle-fill"></i>
                          <p>ওয়াজিব বড় দাড়ি থাকতে হবে</p>
                        </li>
                        <li>
                          <i class="bi bi-check-circle-fill"></i>
                          <p>দৃষ্টি সংযত রাখতে হবে<br /></p>
                        </li>
                        <li>
                          <i class="bi bi-check-circle-fill"></i>
                          <p>টাখনুর উপর পোশাক পরতে হবে</p>
                        </li>
                      </ul>
                    </div>
                    <div class="biodata-commitment-content commitment-female-content">
                      <div class="biodata-commitment-image-box">
                        <img src="{{ asset('frontend') }}/uploads/Woman.svg" alt="male-image">
                      </div>
                      <ul class="biodata-commitment">
                        <li>
                          <i class="bi bi-check-circle-fill"></i>
                          <p>শরয়ী ফরয পর্দানশীন হতে হবে</p>
                        </li>
                        <li>
                          <i class="bi bi-check-circle-fill"></i>
                          <p>৫ ওয়াক্ত সালাত আদায়কারী হতে হবে</p>
                        </li>
                        <li>
                          <i class="bi bi-check-circle-fill"></i>
                          <p>স্বামীর আনুগত্য করার মানসিকতা থাকতে হবে</p>
                        </li>
                        <li>
                          <i class="bi bi-check-circle-fill"></i>
                          <p>অভিভাবকের অনুমতি নিতে হবে</p>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="commitment-to-ds-header">
                    <h3>কর্তৃপক্ষের কাছে প্রতিশ্রুতি</h3>
                  </div>
                  <div class="commitment-to-ds-box">
                    <div class="commitment-item">
                        <label for="ds-minimum-commitment">
                            <input value="1"  name="a" type="checkbox" id="ds-minimum-commitment">আমি দ্বীনদারসঙ্গী ডটকম এ বায়োডাটা জমা দেওয়ার
                            নূন্যতম সকল শর্তের জন্য যোগ্য</label>
                    </div>
                    <div class="commitment-item">
                      <label for="commitment-to-allah">
                        <input value="1" name="b" type="checkbox" id="commitment-to-allah">আমি আল্লাহর শপথ করে সাক্ষ্য দিচ্ছি, আমি আমার
                        বায়োডাটায় সকল তথ্য সত্য ছাড়া মিথ্যা প্রদান করব
                        না</label>
                    </div>
                    <div class="commitment-item">
                      <label for="commitment-to-deendarsongi">
                        <input value="1" name="c" type="checkbox" id="commitment-to-deendarsongi">আমি যদি বায়োডাটায় মিথ্যা তথ্য প্রদান করি, তার জন্য
                        পরবর্তী যেকোনো জটিলতায় কর্তৃপক্ষ
                        দুুুনিয়াবী এবং আখিরাতের দায়ভার নিবে না বলে সম্মতি
                        দিচ্ছি</label>
                    </div>
                  </div>
                  <div class="commitment-biodata-create">
                    <a href="{{ route('add.biodata') }}"  class="ds-general-btn ds-button">
                      বায়োডাটা তৈরি করুন
                    </a>
                  </div>
                    <p class="text-danger center" style="display: none; margin-top: 5px">দয়া করে শর্তগুলো পূরণ করুন</p>
                </div>
              </div>
            </div>
        </div>
</div>
@endsection


@section('footer_script')
<script>
    document.addEventListener('DOMContentLoaded', function () {
      const submitBtn = document.querySelector('.commitment-biodata-create a');
      const checkboxes = document.querySelectorAll('.commitment-to-ds-box input[type="checkbox"]');
      const warningText = document.querySelector('.dsdb-biodata-commitment-container p.text-danger');

      submitBtn.addEventListener('click', function (e) {
        let allChecked = true;

        checkboxes.forEach(checkbox => {
          if (!checkbox.checked) {
            allChecked = false;
            checkbox.parentElement.style.color = 'red';
          } else {
            checkbox.parentElement.style.color = '';
          }
        });

        if (!allChecked) {
          e.preventDefault();
          if (warningText) {
            warningText.style.display = 'block';
          }
        }
      });

      // Checkbox
      checkboxes.forEach(checkbox => {
        checkbox.addEventListener('change', function () {
          if (checkbox.checked) {
            checkbox.parentElement.style.color = '';
          }
          const allNowChecked = Array.from(checkboxes).every(c => c.checked);
          if (allNowChecked && warningText) {
            warningText.style.display = 'none';
          }
        });
      });
    });
    </script>

@endsection
