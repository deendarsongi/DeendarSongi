
@extends('frontend.sidebar')
@section('dashboard_content')
<div class="dsdb-content">
    <div class="dsdb-content-inner">
      <div class="dsdb-sub-header">
        <h2>প্রস্তাবসমূহ</h2>
      </div>
      <div class="proposal-container">

  <div class="proposal-contact-btn-box">
    <button class="proposal-recieved active">প্রস্তাব এসেছে</button>
    <button class="proposal-send">প্রস্তাব গিয়েছে</button>
  </div>

  <!-- Received Proposals -->
  <div class="recieved-proposal-content-box">
         <div class="dsdb-item-container">
        <div class="col-12 dsdb-item-container-inner">
          <div class="dsdb-each-item-field">
            <div class="dsdb-list-avatar-info">
              <div class="dsdb-list-info-img">
                <img src="{{ asset('frontend') }}/uploads/Man.svg" alt="">
              </div>
              <div class="dsdb-list-info-text">
                <h4 class="dsdb-list-info-biodata-number">
                  DSBN14586
                </h4>
                <span class="dsdb-list-info-place">
                  সিরাজগঞ্জ
                </span>
              </div>
            </div>
            <div class="dsdb-list-detail-info">
                <div class="dsdb-list-info">
                <h3>স্ট্যাটাস</h3>
                <span class="biodata-status-text status-awating">awaiting</span>
            </div>
                <div class="dsdb-list-info">
                    <h3>সময়</h3>
                    <span class="countdown-timer">২৩:০৩:৫৪</span>
                </div>



            <div class="dsdb-list-info">
                <h3>এ্যাকশন</h3>
                <a href="#" class=" dsdb-list-link dsdb-list-link-btn dsdb-info-link-btn ds-button">বায়োডাটা</a>
            </div>
            </div>
          </div>
          </div>
        </div>
  </div>

  <!-- Sent Proposals -->
  <div class="send-proposal-content-box hide">
    <div class="dsdb-item-container">
        <div class="col-12 dsdb-item-container-inner">
          <div class="dsdb-each-item-field">
            <div class="dsdb-list-avatar-info">
              <div class="dsdb-list-info-img">
                <img src="{{ asset('frontend') }}/uploads/Man.svg" alt="">
              </div>
              <div class="dsdb-list-info-text">
                <h4 class="dsdb-list-info-biodata-number">
                  DSBN14586
                </h4>
                <span class="dsdb-list-info-place">
                  সিরাজগঞ্জ
                </span>
              </div>
            </div>
            <div class="dsdb-list-detail-info">
                <div class="dsdb-list-info">
                <h3>স্ট্যাটাস</h3>
                <span class="biodata-status-text status-pending">pending</span>
            </div>
                <div class="dsdb-list-info">
                    <h3>সময়</h3>
                    <span class="countdown-timer">২৩:০৩:৫৪</span>
                </div>



            <div class="dsdb-list-info">
                <h3>এ্যাকশন</h3>
                <button class="dsdb-list-link dsdb-list-link-btn dsdb-info-link-btn rejected-btn">বাতিল</button>
            </div>
            </div>
          </div>
          <div class="dsdb-each-item-field">
            <div class="dsdb-list-avatar-info">
              <div class="dsdb-list-info-img">
                <img src="{{ asset('frontend') }}/uploads/Man.svg" alt="">
              </div>
              <div class="dsdb-list-info-text">
                <h4 class="dsdb-list-info-biodata-number">
                  DSBN14586
                </h4>
                <span class="dsdb-list-info-place">
                  সিরাজগঞ্জ
                </span>
              </div>
            </div>
            <div class="dsdb-list-detail-info">
                <div class="dsdb-list-info">
                <h3>স্ট্যাটাস</h3>
                <span class="biodata-status-text status-pending">pending</span>
            </div>
                <div class="dsdb-list-info">
                    <h3>সময়</h3>
                    <span class="countdown-timer">২৩:০৩:৫৪</span>
                </div>


            <div class="dsdb-list-info">
                <h3>এ্যাকশন</h3>
                <button class="dsdb-list-link dsdb-list-link-btn dsdb-info-link-btn rejected-btn">বাতিল</button>
            </div>
            </div>
          </div>
          <div class="dsdb-each-item-field">
            <div class="dsdb-list-avatar-info">
              <div class="dsdb-list-info-img">
                <img src="{{ asset('frontend') }}/uploads/Man.svg" alt="">
              </div>
              <div class="dsdb-list-info-text">
                <h4 class="dsdb-list-info-biodata-number">
                  DSBN14586
                </h4>
                <span class="dsdb-list-info-place">
                  সিরাজগঞ্জ
                </span>
              </div>
            </div>
            <div class="dsdb-list-detail-info">
                <div class="dsdb-list-info">
                <h3>স্ট্যাটাস</h3>
                <span class="biodata-status-text status-pending">pending</span>
            </div>
                <div class="dsdb-list-info">
                    <h3>সময়</h3>
                    <span class="countdown-timer">২৩:০৩:৫৪</span>
                </div>



            <div class="dsdb-list-info">
                <h3>এ্যাকশন</h3>
                <button class="dsdb-list-link dsdb-list-link-btn dsdb-info-link-btn rejected-btn">বাতিল</button>
            </div>
            </div>
          </div>
          </div>
        </div>
  </div>

</div>

      </div>
    </div>
  </div>
@endsection

