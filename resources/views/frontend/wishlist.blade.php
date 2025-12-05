@extends('frontend.sidebar')

@section('dashboard_content')
 <div class="dsdb-content">
    <div class="dsdb-content-inner">
      <div class="dsdb-sub-header">
        <h2>পছন্দের তালিকা</h2>
        <p>আপনি যেসকল বায়োডাটা পছন্দ করেছেন</p>
      </div>
      <div class="dsdb-item-container">
        <div class="col-12 dsdb-item-container-inner">
          <div class="dsdb-each-item-field dsdb-each-item-field-2">
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
            <div class="dsdb-list-link-item d-flex align-items-center justify-content-center">
              <button class="dsdb-wishlist-link dsdb-list-biodata-link"><a href="#"><img src="{{ asset('frontend') }}/uploads/link-color.svg" alt="" class="dsdb-list-biodata-btn"></a></button>
              <button class="dsdb-wishlist-link dsdb-list-biodata-delete">
                <img src="{{ asset('frontend') }}/uploads/delete-color.svg" alt="" class="dsdb-list-delete-btn">
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection



