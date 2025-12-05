
@extends('frontend.sidebar')
@section('dashboard_content')
<div class="dsdb-content">
    <div class="dsdb-content-inner">
      <div class="dsdb-sub-header">
        <h2>যোগাযোগ তথ্য</h2>
        <p>
          আপনি যেসকল বায়োডাটার যোগাযোগ তথ্য ক্রয় করেছেন
        </p>
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
              <span class="dsdb-list-link"><a href="#" class="dsdb-list-link-btn dsdb-info-link-btn ds-button mr-8">যোগাযোগ</a></span>
              <span class="dsdb-list-link"><a href="{{ route('report') }}" class="dsdb-list-link-btn dsdb-report-link-btn">রিপোর্ট</a></span>
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

