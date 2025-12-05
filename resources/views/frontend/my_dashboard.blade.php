@extends('frontend.sidebar')
@section('dashboard_content')
@if (session('success'))
    <div id="alertBox" class="alert-box">
        <i class="fa-solid fa-circle-check"></i>
        <span>{{ session('success') }}</span>
        <div class="suc-progress-bar"></div>
    </div>
@endif
 @php
    $biodata = App\Models\Biodata::where('customer_id', Auth::guard('customer')->user()->id)->first();

    $status = optional($biodata)->status ?? 'not_created';

    $statusClassMap = [
        'not_created' => 'status-not-submited',
        'in_review' => 'status-in_review',
        'approved' => 'status-approved',
        'reject' => 'status-rejected',
        'in_complete' => 'status-incomplete',
    ];

    $statusTextMap = [
        'not_created' => 'not created',
        'in_review' => 'in review',
        'approved' => 'approved',
        'reject' => 'rejected',
        'in_complete' => 'in complete',
    ];

    $statusClass = $statusClassMap[$status] ?? 'status-not-submited';
    $statusText = $statusTextMap[$status] ?? 'not created';
@endphp
<div class="dsdb-content">
    <div class="dsdb-content-inner">
        <div class="dsdb-header-content">
          <h2>আমার ড্যাশবোর্ড</h2>
          <div class="dsdb-welcome-header">
            <p>স্বাগতম</p>
            <span class="dsdb-user-name">{{ Auth::guard('customer')->user()->name }}</span>
          </div>
        </div>
        <div class="dsdb-main-content">
          <div class="row">
            <div class="col-12">
              <div class="ds-user-info-mobile">
                @if (Auth::guard('customer')->user()->gender == 1)
                    <img src="{{ asset('frontend') }}/uploads/Man.svg" alt="" />
                @else
                    <img src="{{ asset('frontend') }}/uploads/Woman.svg" alt="" />
                @endif

                @if ($biodata)
                    <span class="ds-user-biodata-number ds-user-biodata-number-mobile">{{ $biodata->biodata_id }}</span>
                @else
                    <span id="biodata-id" class="ds-user-biodata-number ds-user-biodata-number-mobile"></span>
                @endif

                <div class="ds-my-biodata-link-mobile">
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
            </div>
          </div>
          <div class="row">
            <div class="col-12">
                <div class="dsdb-status-create-container">
                    <div class="dsdb-biodata-status-container">
                    <div class="biodata-status-box">
                        <div class="biodata-status-header">
                            <p>বায়োডাটা স্ট্যাটাস</p>
                        </div>
                        <span class="biodata-status-text {{ $statusClass }}">{{ $statusText }}</span>
                    </div>
                </div>
              <div class="dsdb-create-biodata-container">
                @if (App\Models\Biodata::where('customer_id', Auth::guard('customer')->user()->id)->exists())
                    <a href="{{ route('add.biodata') }}" class="how-to-create-biodata-btn"><i class="bi bi-pencil-square"></i>বায়োডাটা এডিট করুন</a>
                @else
                    <a href="{{ route('biodata') }}" class="how-to-create-biodata-btn"><i class="bi bi-plus-lg"></i>বায়োডাটা তৈরি করুন</a>
                @endif
              </div>
                </div>
            </div>
          </div>
          <div class="row">
                        <div class="col-12 col-md-6">
                    <div class="dsdb-home-card dsdb-card-container dsdb-connect-container">
                      <div class="dsdb-home-card-content">
                        <div class="dsdb-card-each-content">
                          <div class="dsdb-each-item">
                            <p class="dsdb-header-text">কানেক্ট রয়েছে</p>
                            <span>20</span>
                          </div>
                        </div>
                      </div>
                      <div class="dsdb-home-card-footer-content">
                              <a class="buy-creadit-btn" href="{{ route('packages') }}">কানেক্ট কিনুন</a>
                            </div>
                    </div>
                  </div>
            <div class="col-12 col-md-6">
              <div class="dsdb-home-card visited dsdb-card-container">
                <div class="dsdb-home-card-content">
                  <div class="dsdb-visited-item-left">
                    <div class="dsdb-card-each-content">
                      <div class="dsdb-each-item">
                        <p class="dsdb-header-text">
                          সর্বমোট বায়োডাটা ভিজিট
                        </p>
                        <span>300</span>
                      </div>
                    </div>
                  </div>

                  <div class="dsdb-visited-item-right">
                    <div class="dsdb-card-each-content">
                      <div class="dsdb-each-item fs-1">
                        <p class="dsdb-header-text">আজকে</p>
                        <span>20</span>
                      </div>
                    </div>
                    <div class="dsdb-card-each-content">
                      <div class="dsdb-each-item fs-1">
                        <p class="dsdb-header-text">শেষ ৭ দিনে</p>
                        <span>40</span>
                      </div>
                    </div>
                    <div class="dsdb-card-each-content">
                      <div class="dsdb-each-item fs-1">
                        <p class="dsdb-header-text">শেষ ৩০ দিনে</p>
                        <span>200</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="dsdb-home-card-footer-content">
                  <p>আপনার বায়োডাটা যতজন ভিজিট করেছে</p>
                </div>
              </div>
            </div>
          </div>
                    <div class="row">
            <div class="col-md-12 col-xl-4">
                    <div class="dsdb-home-card">
                      <div class="dsdb-home-card-content">
                        <div class="dsdb-card-each-content">
                          <div class="dsdb-each-item">
                            <p class="dsdb-header-text">পছন্দের তালিকা</p>
                            <span>9</span>
                            <div class="dsdb-home-card-footer-content">
                              <p>আপনি যতজনকে পছন্দের তালিকায় রেখেছেন</p>
                            </div>
                          </div>
                        </div>
                        <div class="dsdb-card-each-content">
                          <div class="dsdb-each-item">
                            <div class="dsdb-card-icon">
                              <img src="{{ asset('frontend') }}/uploads/love-color.svg" alt="">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
            <div class="col-md-12 col-xl-4">
              <div class="dsdb-home-card">
                <div class="dsdb-home-card-content">
                  <div class="dsdb-card-each-content">
                    <div class="dsdb-each-item">
                      <p class="dsdb-header-text">
                        বায়োডাটা পছন্দের তালিকাভুুক্ত
                      </p>
                      <span>9</span>
                      <div class="dsdb-home-card-footer-content">
                        <p>আপনাকে যতজন পছন্দের তালিকায় রেখেছে</p>
                      </div>
                    </div>
                  </div>
                  <div class="dsdb-card-each-content">
                    <div class="dsdb-each-item">
                      <div class="dsdb-card-icon">
                        <img src="{{ asset('frontend') }}/uploads/love-list.svg" alt="">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12 col-xl-4">
              <div class="dsdb-home-card">
                <div class="dsdb-home-card-content">
                  <div class="dsdb-card-each-content">
                    <div class="dsdb-each-item">
                      <p class="dsdb-header-text">যোগাযোগ তথ্য</p>
                      <span>9</span>
                      <div class="dsdb-home-card-footer-content">
                        <p>আপনি যতজনের যোগাযোগ তথ্য ক্রয় করেছেন</p>
                      </div>
                    </div>
                  </div>
                  <div class="dsdb-card-each-content">
                    <div class="dsdb-each-item">
                      <div class="dsdb-card-icon">
                        <img src="{{ asset('frontend') }}/uploads/Contact-Info.svg" alt="">
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

@section('footer_script')
    <script>
        setTimeout(() => {
            document.getElementById("alertBox").style.opacity = "0";
            setTimeout(() => {
                document.getElementById("alertBox").style.display = "none";
            }, 500);
        }, 4000);
    </script>
@endsection
