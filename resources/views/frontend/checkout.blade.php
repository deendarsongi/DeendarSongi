@extends('frontend.master')

@section('content')
<section class="aw-checkout">
    <div class="container">
      <div class="row checkout-container">
        <div class="checkout-header">
          <h1>চেকআউট</h1>
        </div>
        <div class="col-lg-6 biodata-buy-container">
          <div class="biodata-buy-header">
            <p>আপনি যে বায়োডাটার অভিবাবকের যোগাযোগ তথ্য নিতে চাচ্ছেন</p>
          </div>
          <div class="biodata-buy-item">
            <div class="biodata-buy-info-content">
              <div class="biodata-buy-info-img">
                <img src="{{ asset('frontend') }}/uploads/Man.svg" alt="" />
              </div>
              <div class="biodata-buy-info-text">
                <h4 class="biodata-buy-info-profile">পাত্রের বায়োডাটা</h4>
                <span class="biodata-buy-info-biodata-number">DSBN14586</span>
                <p class="biodata-buy-info-place">
                  রংপুর সদর, রংপুর, বাংলাদেশ
                </p>
              </div>
            </div>
            <div class="biodata-buy-link-content">
              <span class="biodata-buy-wishlist"
                ><img src="{{ asset('frontend') }}/uploads/love-color.svg" alt=""
              /></span>
              <span class="biodata-buy-biodata-link"
                ><a href="#"><img src="{{ asset('frontend') }}/uploads/link-color.svg" alt="" /></a
              ></span>
            </div>
          </div>
        </div>
        <div class="col-lg-6 place-order-container">
          <div class="place-order-container-inner">
            <div class="place-order-header-top">
              <h4 class="place-order-header">অর্ডার ডিটেইলস</h4>
              <p>
                আপনি পেমেন্ট সম্পন্ন করার পর ইনস্ট্যান্ট বায়োডাটাটির অভিভাবকের যোগাযোগ তথ্য দেখতে পারবেন
              </p>
            </div>
            <div class="order-price-details">
              <div class="order-each-price-detail subtotal">
                <p>সাবটোটাল</p>
                <h4>৳১২০</h4>
              </div>
              <div class="order-each-price-detail discount">
                <p>ডিসকাউন্ট</p>
                <h4>৳০</h4>
              </div>
              <div class="order-each-price-detail total-price">
                <p>টোটাল</p>
                <h4>৳১২০</h4>
              </div>
            </div>
            <div class="order-coupon-code">
              <div class="coupon-code-label">
                <label for="">কুপন কোড আছে?</label>
              </div>
              <div class="coupon-code-input-field">
                <input
                  type="text"
                  name=""
                  id=""
                  class="coupon-code-input"
                  placeholder="কুপন কোডটি লিখুন"
                />
                <button type="button" class="coupon-code-submit-btn">
                  এপ্লাই
                </button>
              </div>
            </div>
            <div class="place-order-condition">
              <p>
                পেমেন্ট করার মাধ্যমে আপনি আমাদের
                <a href="terms-and-conditions.html">টার্মস এন্ড কন্ডিশন</a>,
                ‍<a href="privacy-policy.html">প্রাইভেসি পলিসি</a> এবং
                <a href="refund-policy.html">রিফান্ড পলিসি</a> মেনে নিচ্ছেন
              </p>
            </div>
            <button type="button" class="Place-order-submit-btn ds-button">
              পেমেন্ট করুন
            </button>
          </div>
          <div class="pay-with">
            <p>টাকা পরিশোধ করুন</p>
            <img src="{{ asset('frontend') }}/uploads/Payment-Card.svg" alt="" />
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

