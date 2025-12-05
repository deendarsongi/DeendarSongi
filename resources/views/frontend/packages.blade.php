
@extends('frontend.sidebar')
@section('dashboard_content')
<div class="dsdb-content">
    <div class="dsdb-content-inner">
      <div class="dsdb-sub-header">
        <h2>কানেক্ট ক্রয়</h2>
      </div>
      <div class="dsdb-connect-count-container">
      <div class="dsdb-connect-count-container-inner">
        <div class="conncet-count-field">
            <span class="connect-counter">1</span>
        </div>
        <div class="connect-count-text">
            <p>কানেক্ট রয়েছে</p>
        </div>
      </div>
      </div>
      <div class="how-proposal-contact-box how-connect-buy-box">
    <a href="#" class="how-proposal-contact-btn"><span><img src="{{ asset('frontend') }}/uploads/Youtube-Social.svg" alt=""></span>যেভাবে কানেক্ট ক্রয় করবেন</a>
</div>
      <div class="row dsdb-packages-container">
        <div class="col-12 col-md-4 dsdb-packages-each-item">
          <div class="dsdb-packages-content">
            <div class="packges-name-box"><h2 class="packages-name">ইবতিদা</h2></div>
            <div class="packges-price-box">
                <span class="packges-price packages-price-discount">৳১৫০</span>
                <span class="packges-price packages-price-reqular">৳২০০</span>
            </div>
            <div class="packages-text">
                <p> এই প্যাকেজটি তাদের জন্য যারা দৃঢ় আত্ববিশ্বাসের সাথে একটি বায়োডাটায় প্রস্তাব পাঠাতে চায় </p>
            </div>
            <div class="connect-count-box">
                <p class="connect-count"><i class="bi bi-check-circle-fill"></i>২টি কানেক্ট</p>
            </div>
            <div class="connect-buy-box">
                <a href="#" class="connect-buy-btn"><i class="bi bi-bag-plus"></i>ক্রয় করুন</a>
            </div>
          </div>
          </div>
        <div class="col-12 col-md-4 dsdb-packages-each-item">
          <div class="dsdb-packages-content">
            <div class="packges-name-box"><h2 class="packages-name">আমানাহ</h2></div>
            <div class="packges-price-box">
                <span class="packges-price packages-price-discount">৳৩৫০</span>
                <span class="packges-price packages-price-reqular">৳৫০০</span>
            </div>
            <div class="packages-text">
                <p> এই প্যাকেজটি তাদের জন্য যারা দৃঢ় আত্ববিশ্বাসের সাথে একটি বায়োডাটায় প্রস্তাব পাঠাতে চায় </p>
            </div>
            <div class="connect-count-box">
                <p class="connect-count"><i class="bi bi-check-circle-fill"></i>৫টি কানেক্ট</p>
            </div>
            <div class="connect-buy-box">
                <a href="#" class="connect-buy-btn"><i class="bi bi-bag-plus"></i>ক্রয় করুন</a>
            </div>
          </div>
          </div>
        <div class="col-12 col-md-4 dsdb-packages-each-item">
          <div class="dsdb-packages-content">
            <div class="packges-name-box"><h2 class="packages-name">ইহসান</h2></div>
            <div class="packges-price-box">
                <span class="packges-price packages-price-discount">৳৬৫০</span>
                <span class="packges-price packages-price-reqular">৳১০০০</span>
            </div>
            <div class="packages-text">
                <p> এই প্যাকেজটি তাদের জন্য যারা দৃঢ় আত্ববিশ্বাসের সাথে একটি বায়োডাটায় প্রস্তাব পাঠাতে চায় </p>
            </div>
            <div class="connect-count-box">
                <p class="connect-count"><i class="bi bi-check-circle-fill"></i>১০টি কানেক্ট</p>
            </div>
            <div class="connect-buy-box">
                <a href="#" class="connect-buy-btn"><i class="bi bi-bag-plus"></i>ক্রয় করুন</a>
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

