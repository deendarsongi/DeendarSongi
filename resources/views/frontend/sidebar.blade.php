@extends('frontend.master')
@section('content')
<section class="ds-dashboard ds-content">
    <div class="ds-content-main">
      <div class="ds-user-account-container">
        <div class="ds-row">
            <div class="dsdb-sidebar">
                <div class="ds-user-info-nav-desk">
                    @if (Auth::guard('customer')->user()->gender == 1)
                        <img src="{{ asset('frontend') }}/uploads/Man.svg" alt="" />
                    @else
                        <img src="{{ asset('frontend') }}/uploads/Woman.svg" alt="" />
                    @endif
                    {{-- biodata_id show --}}
                    @php
                        $biodata = App\Models\Biodata::where('customer_id', Auth::guard('customer')->user()->id)->first();
                    @endphp

                    @if ($biodata)
                        <span id="biodata-id" class="ds-user-biodata-number">{{ $biodata->biodata_id }}</span>
                    @else
                        <span id="biodata-id" class="ds-user-biodata-number"></span>
                    @endif

                  <div class="ds-my-biodata-link pt">
                    @if ($biodata)
                        <a style="text-decoration: none; text-align: center;" class="ds-biodata-btn ds-my-biodata ds-button" href="{{ route('preview.biodata') }}">আমার বায়োডাটা</a>
                        @else
                        <a id="biodata-preview-btn" style="text-decoration: none; text-align: center;" class="ds-biodata-btn ds-my-biodata ds-button disabled-link" href="javascript:void(0)">আমার বায়োডাটা</a>
                    @endif

                  </div>
                  <form action="" method="post">
  <div class="biodata-settings-general-content">
    <div class="delete-biodata-content">
      <!-- প্রথম কপি -->
      <div class="toggle-container">
        <div class="toggle-switch" data-biodata-id="DS50542" role="button" tabindex="0">
          <div class="toggle-button">
            <span class="toggle-text">লাইভ</span>
          </div>
        </div>
      </div>

    </div>
  </div>
</form>

                </div>
                <div class="ds-dashboard-nav ">
                  <ul>
                    <li >
                      <a href="{{ route('my.dashboard') }}"><img src="{{ asset('frontend') }}/uploads/Dashboard.svg" alt="dashboard-icon">ড্যাশবোর্ড</a>
                    </li>
                    <li >
                      <a href="{{ route('proposal') }}"><img src="{{ asset('frontend') }}/uploads/Proposal.svg" alt="dashboard-icon">প্রস্তাব</a>
                    </li>

                    <li >
                      <a href="{{ route('contact.info') }}"><img src="{{ asset('frontend') }}/uploads/Contact-Info.svg" alt="dashboard-icon">যোগাযোগ তথ্য</a>
                    </li>
                    <li >
                      <a href="{{ route('wishlist') }}"><img src="{{ asset('frontend') }}/uploads/love-color.svg" alt="dashboard-icon">পছন্দের তালিকা</a>
                    </li>
                    <li >
                      <a href="{{ route('payment.info') }}"><img src="{{ asset('frontend') }}/uploads/payment.svg" alt="dashboard-icon">পেমেন্ট হিস্টোরি</a>
                    </li>
                    <li >
                      <a href="{{ route('report.info') }}"><img src="{{ asset('frontend') }}/uploads/Report.svg" alt="dashboard-icon">রিপোর্টসমূহ</a>
                    </li>
                      <li >
                        <a href="{{ route('success.form') }}"><img src="{{ asset('frontend') }}/uploads/success.svg" alt="dashboard-icon">বিবাহ নিশ্চিতকরণ</a>
                      </li>
                    <li >
                      <a href="{{ route('delete.biodata') }}"><img src="{{ asset('frontend') }}/uploads/delete-primary.svg" alt="dashboard-icon">ডিলিট বায়োডাটা</a>
                    </li>
                    <li >
                      <a href="{{ route('customer.logout') }}"><img src="{{ asset('frontend') }}/uploads/logout.svg" alt="dashboard-icon">লগআউট</a>
                    </li>
                  </ul>
                </div>
            </div>
            @yield('dashboard_content')
        </div>
      </div>
    </div>
  </section>
@endsection

