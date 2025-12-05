@extends('frontend.master')
@section('content')
<section class="aw-contact-us">
    <div class="subpage-header">
      <h1>যোগাযোগ করুন</h1>
    </div>
    <div class="container">
      <div class="row contactus-container">
        <div class="col-md-6 contactus-container-inner">
          <address>
            <div class="contactus-addressbox">
              <div class="addressbox-content">
                <div class="addressbox-icon d-flex align-items-center">
                  <i class="bi bi-geo-alt-fill"></i>
                </div>
                <div class="address-text">
                  <h4>অফিস এড্রেস</h4>
                  <p>ওয়ার্ড-০৪, কাজিপুর রোড, সিরাজগঞ্জ সদর</p>
                </div>
              </div>
              <div class="addressbox-content">
                <div class="addressbox-icon d-flex align-items-center">
                  <i class="bi bi-telephone-fill"></i>
                </div>
                <div class="address-text">
                  <h4>হেল্পলাইন</h4>
                  <p><a href="tel:+8801776121324">+8801864462222</a></p>
                </div>
              </div>
              <div class="addressbox-content">
                <div class="addressbox-icon d-flex align-items-center">
                  <i class="bi bi-envelope-fill"></i>
                </div>
                <div class="address-text">
                  <h4>ইমেইল এড্রেস</h4>
                  <p>
                    <a href="mailto:support@deendarsangee.com">support@deendarsongi.com
                    </a>
                  </p>
                </div>
              </div>
            </div>
          </address>
        </div>
        <div class="col-md-6 contactus-mailbox">
          <div class="mail-header">
            <h3>
              আপনার যেকোনো জিজ্ঞাসার জন্য আমাদের নিম্নোক্ত ফর্মটি পূরণ করে
              পাঠিয়ে দিন। আমরা খুব শীঘ্রই আপনার সাথে যোগাযোগ করব
              ইনশা আল্লাহ।
            </h3>
          </div>
          <div class="mail-container">
            <div class="mail-container-inner">
              <form action="" target="_blank" method="post" autocomplete="off">
                <div class="mail-box">
                  <div class="mail-box-label">
                    <label for="Name"></label>
                  </div>
                  <div class="mail-box-input">
                    <input type="text" required="" placeholder="আপনার নাম" autocomplete="off" id="name">
                  </div>
                </div>
                <div class="mail-box">
                  <div class="mail-box-label">
                    <label for="email"></label>
                  </div>
                  <div class="mail-box-input">
                    <input type="email" required="" placeholder="ইমেইল এড্রেস" autocomplete="off" id="email">
                  </div>
                </div>
                <div class="mail-box">
                  <div class="mail-box-label">
                    <label for="subject"></label>
                  </div>
                  <div class="mail-box-input">
                    <input type="text" required="" placeholder="বিষয়" autocomplete="off" id="subject">
                  </div>
                </div>
                <div class="mail-box">
                  <div class="mail-box-label">
                    <label for="message"></label>
                  </div>
                  <div class="mail-box-input">
                    <textarea name="message" id="message" required="" placeholder="আপনার বার্তা"></textarea>
                  </div>
                </div>
                <div class="mail-submit-box">
                  <button type="button" class="ds-button"> পাঠিয়ে দিন</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

