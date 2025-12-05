<!DOCTYPE html>
<html lang="bn">
  <head>
    <meta charset="UTF-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Biodatas | Deendarsangee.com</title>
    <meta name="description" content="দ্বীনদারসঙ্গী ডটকম দ্বীনদার পাত্রপাত্রীর
    বায়োডাটা খোঁজার একটি নির্ভরযোগ্য ইসলামিক ম্যাট্রিমনি । যা সম্পূর্ণ ইসলামী
    শরিয়াহ অনুযায়ী পরিচালিত । দ্বীনদার জীবনসঙ্গী সন্ধানে সাহায্য করে সমাজে
    সুন্নাহ সম্মত বিয়ে প্রতিষ্ঠা করা আমাদের উদ্দেশ্য! />
    <meta name= "keywords"
      content="deendarsangee,deendarsangee.com,deendarsangee dotcom. deendarsongi,
    deendarsangee matrimony, deendarsangee website,muslim matrimony, bangladeshi
    matrimony, best matrimony,matrimony,marriage media,Islamic matrimony
    website, Nikah, bangaldeshi islamic matrimony website, bibah, best matrimony
    website,Free matrimony website,best matrimonial site in bangladesh,free
    marriage site in bangladesh,deendarsongi.com.Bangladeshi matrimony for
    muslim, ordhekdeen for muslim, deendarjibonsongi,দ্বীনদারসঙ্গী,
    দ্বীনদারসঙ্গী ডটকম, দ্বীনদারসঙ্গী ওয়েবসাইট, দ্বীনদার
    পাত্রপাত্রী,পাত্র/পাত্রীর বায়োডাটা,দ্বীনদার পাত্র পাত্রীর সন্ধান, দ্বীনদার
    জীবনসঙ্গী, জীবনসঙ্গী, দ্বীনদার ছেলে, দ্বীনদার মেয়ে,প্র্যাক্টিসিং মুসলিম,
    প্র্যাক্টিসিং মুসলিম পাত্রপাত্রী, ইসলামিক ম্যাট্রিমনি, মুসলিম বিবাহ, নিকাহ, ইসলামিক বিবাহ,
    সুন্নতি বিবাহ"
    />
    <meta
      name="subject"
      content="DeendarSangee.com is a reliable Islamic online matrimony platform for finding a Deendar life partner. Which is fully managed according to Islamic Shariah"
    />
    <meta name="copyright" content="deendarsangee.com" />
    <meta name="author" content="Sayem Sadat" />
    <!--favicon-->
    <link rel="icon" type="image/x-icon" href="{{ asset('frontend') }}/uploads/favicon.svg" />
    <!--stylesheet-->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/deendarsangee-frontend.css" />
    <!-- Bootstrap-->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/media.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/all.min.css" />

    <link rel="stylesheet" href="{{ asset('frontend') }}/bootstrap/bootstrap-icons.min.css" />
    <!-- plugins-->
    <link rel="stylesheet" href="{{ asset('frontend') }}/plugins/Ion-range-slider/css/ion.rangeSlider.min.css"/>
    <link rel="stylesheet" href="{{ asset('frontend') }}/plugins/Select2/css/select2.min.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/plugins/Slick/css/slick.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/plugins/Slick/css/slick-theme.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/plugins/Card-slider/css/cardslider.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.15.2/css/selectize.default.min.css"
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
    />
  </head>
  <body>
    <!--TOP HEADER PART START-->
    <header class="aw-header">
      <div class="aw-top-content">
        <div class="aw-logo-box">
          <a href="{{ route('index') }}"
            ><img src="{{ asset('frontend') }}/uploads/Logo.svg" alt="deendarsangee-logo"
          /></a>
        </div>
      </div>
      <div class="container">
        <div class="row aw-top-container d-flex justify-content-spaceBetween align-items-center position-relative aw-z-index">
          <div class="mobile-toggle-box">
            <div class="mobile-toggle">
              <img src="{{ asset('frontend') }}/uploads/hamburger.svg" alt="" />
            </div>
          </div>
          <div class="col-8 col-md-8 ds-navbar-container">
            <div class="aw-nav-inner">
              <div class="aw-nav-inner-inner align-items-start d-column">
                <nav class="aw-navbar">
                  <ul
                    class="navbar-inner d-flex justify-content-spaceBetween align-items-center"
                  >
                    <li >
                      <a href="{{ route('index') }}">হোম </a>
                    </li>
                    <li>
                      <a href="{{ route('biodatas') }}">সকল বায়োডাটা</a>
                    </li>
                    <li>
                      <a href="{{ route('about_us') }}">আমাদের সম্পর্কে</a>
                    </li>
                    <li><a href="{{ route('faq') }}">সচরাচর জিজ্ঞাসা</a></li>
                    <li><a href="##">নির্দেশনা</a></li>
                    <li><a href="{{ route('contact') }}">যোগাযোগ</a></li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
          {{-- //// --}}
          <div class="col-4 col-md-4 d-flex align-items-center justify-content-end ds-log-reg-container aw-login-reg-box" align="right" >
            @auth('customer')
            <div class="aw-user-login-box">
                <span class="aw-wishlist-icon aw-user-general-icon">
                  <a href="{{ route('wishlist') }}"
                    ><img src="{{ asset('frontend') }}/uploads/love-color.svg" alt=""
                  /></a>
                  <span class="wishlist-quantity user-general-icon-quantity"
                    >3</span
                  >
                </span>
                <span class="aw-notification-icon aw-user-general-icon">
                  <a href="#"
                    ><img src="{{ asset('frontend') }}/uploads/Notification-color.svg" alt=""
                  /></a>
                  <span class="notification-quantity user-general-icon-quantity"
                    >12</span
                  >
                </span>
                <span class="aw-user-icon">
                    @if (Auth::guard('customer')->user()->gender == 1)
                        <img src="{{ asset('frontend') }}/uploads/Man.svg" alt="" />
                    @else
                        <img src="{{ asset('frontend') }}/uploads/Woman.svg" alt="" />
                    @endif

                  <div class="ds-dashboard-nav ds-dropdown-menu">
                    <ul>
                      <li class="dsdb-tab-btn active">
                        <a href="{{ route('my.dashboard') }}"
                          ><img
                            src="{{ asset('frontend') }}/uploads/Dashboard.svg"
                            alt="dashboard-icon"
                          />ড্যাশবোর্ড</a
                        >
                      </li>
                      <li class="dsdb-tab-btn">
                        <a href="{{ route('contact.info') }}"
                          ><img
                            src="{{ asset('frontend') }}/uploads/Contact-Info.svg"
                            alt="dashboard-icon"
                          />যোগাযোগ তথ্য</a
                        >
                      </li>
                      <li class="dsdb-tab-btn">
                        <a href="{{ route('wishlist') }}"
                          ><img
                            src="{{ asset('frontend') }}/uploads/love-color.svg"
                            alt="dashboard-icon"
                          />পছন্দের তালিকা</a
                        >
                      </li>
                      <li class="dsdb-tab-btn">
                        <a href="{{ route('payment.info') }}"
                          ><img
                            src="{{ asset('frontend') }}/uploads/payment.svg"
                            alt="dashboard-icon"
                          />পেমেন্ট হিস্টোরি</a
                        >
                      </li>
                      <li class="dsdb-tab-btn">
                        <a href="{{ route('report.info') }}"
                          ><img
                            src="{{ asset('frontend') }}/uploads/Report.svg"
                            alt="dashboard-icon"
                          />রিপোর্টসমূহ</a
                        >
                      </li>
                      <li class="dsdb-tab-btn">
                          <a href="{{ route('success.form') }}"
                            ><img
                              src="{{ asset('frontend') }}/uploads/success.svg"
                              alt="dashboard-icon"
                            />বিবাহ নিশ্চিতকরণ</a
                          >
                        </li>
                      <li class="dsdb-tab-btn">
                        <a href="{{ route('delete.biodata') }}"
                          ><img
                            src="{{ asset('frontend') }}/uploads/settings.svg"
                            alt="dashboard-icon"
                          />সেটিংস</a
                        >
                      </li>
                      <li class="dsdb-tab-btn">
                        <a href="{{ route('customer.logout') }}"
                          ><img
                            src="{{ asset('frontend') }}/uploads/logout.svg"
                            alt="dashboard-icon"
                          />লগআউট</a
                        >
                      </li>
                    </ul>
                  </div>
                </span>
              </div>
            @else
            <div class="aw-user-logout-box">
                <div class="login-btn d-inlineblock aw-z-index">
                  <button type="button">
                    <a href="{{ route('customer.login') }}" class="ds-button">লগইন</a>
                  </button>
                </div>
              </div>
            @endauth
          </div>
        </div>
      </div>
    </header>
    <div class="aw-content-main">
      <!-- TOP HOME PART START-->
      <section class="aw-home-top-bg">
        <div class="aw-home-bg-container d-inlineblock">
          <div class="aw-home-bg-content d-flex align-items-center d-column">
            <div class="aw-heading d-flex justify-content-center">
              <h1>
                ইসলামিক অনলাইন<br />
                <span>ম্যাট্রিমনি</span>
              </h1>
            </div>
            <div class="aw-subheading">
              <h2 class="clr-primary">
                আপনার প্রত্যাশিত দ্বীনদার জীবনসঙ্গী নির্বাচন এখন খুবই সহজ
              </h2>
            </div>
            <div class="ds-home-call-to-action-container">
              <div class="cta-btn-group">
            <div class="cta-each-item">
                @if (Auth::guard('customer')->check())
                    @if (App\Models\Biodata::where('customer_id', Auth::guard('customer')->user()->id)->exists())
                    <a href="{{ route('add.biodata') }}" class="cta-each-btn ds-button"
                    >বায়োডাটা এডিট করুন</a>
                    @else
                        <a href="{{ route('biodata') }}" class="cta-each-btn ds-button"
                        >বিনামূল্যে বায়োডাটা তৈরি করুন</a>
                    @endif
                @else
                    <a href="{{ route('biodata') }}" class="cta-each-btn ds-button"
                    >বিনামূল্যে বায়োডাটা তৈরি করুন</a>
                @endif
            </div>
                <div class="cta-each-item">
                  <a href="#" class="cta-each-btn how-to-create-biodata-btn ds-button-border"
                    ><img src="{{ asset('frontend') }}/uploads/Play-Button.svg" alt="" />যেভাবে বায়োডাটা
                    তৈরি করবেন</a
                  >
                </div>
              </div>
            </div>
          </div>
          <div class="aw-search-container">
            <div class="aw-search-container-inner">
              <div class="aw-search-content">
                <div class="aw-search-option-label">
                  <label for="lookingfor">আমি খুঁজছি</label>
                </div>
                <div class="aw-search-option-input">
                  <select class="select2 aw-biodata-dropdown" name="lookingfor">
                    <option value="no_selected">সকল</option>
                    <option value="male-biodata">পাত্রের বায়োডাটা</option>
                    <option value="female-biodata">পাত্রীর বায়োডাটা</option>
                  </select>
                </div>
              </div>

              <div class="aw-search-content">
                <div class="aw-search-option-label">
                  <label for="marital-status">বৈবাহিক অবস্থা</label>
                </div>
                <div class="aw-search-option-input">
                  <select
                    class="select2 aw-biodata-dropdown"
                    name="marital-status"
                  >
                    <option value="no_selected">সকল</option>
                    <option value="unmarried">অবিবাহিত</option>
                    <option value="married">বিবাহিত</option>
                    <option value="devorced">ডিভোর্সড</option>
                    <option value="widow">বিধবা</option>
                    <option value="widower">বিপত্নীক</option>
                  </select>
                </div>
              </div>
              <div class="aw-search-content">
                <div class="aw-search-option-label">
                  <label for="permanent-address">স্থায়ী ঠিকানা</label>
                </div>
                <div class="aw-search-option-input aw-search-location-input">
                  <div class="aw-location-dropdown">
                    <a href="#" class="aw-location-dropdown-trigger"
                      >ঠিকানা নির্বাচন করুন</a
                    >
                  </div>
                  <div class="awl-wrap aw-location-panel-wrap"></div>
                </div>
              </div>
              <div class="aw-search-content aw-submit-btn">
                <button type="button" class=" ds-button">
                  বায়োডাটা খুঁজুন
                </button>
              </div>
            </div>
          </div>
        </div>
      </section>

            <!--HADITH PART START-->
      <section class="ds-hadith">
        <div class="container ds-hadith-container">
          <div class="ds-hadith-container-inner">
            <div class="hadith-item-container">
              <ul class="ds-hadith-slide">
                <li>
                  <div class="ds-hadith-content">
                    <div class="ds-hadith-quotemark">
                      <i class="bi bi-quote"></i>
                    </div>
                    <div class="ds-hadith">
                      <p>
                        তোমাদের মধ্যে যার বিয়ের সামর্থ্য আছে, সে যেন বিয়ে করে নেয়। কেননা বিয়ে দৃষ্টিকে নিচু রাখে এবং লজ্জাস্থানের হেফাজত করে
                      </p>
                    </div>
                    <div class="ds-hadith-reference">
                      <p>[ সহিহ বুখারি - ৫০৬৫]</p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="ds-hadith-content">
                    <div class="ds-hadith-quotemark">
                      <i class="bi bi-quote"></i>
                    </div>
                    <div class="ds-hadith">
                      <p>
                        তিনি তোমাদেরকে এক ব্যক্তি হতে সৃষ্টি করেছেন এবং তাঁর
                        থেকেই তাঁর স্ত্রীকে বানিয়েছেন, যাতে সে তার নিকট
                        প্রশান্তি লাভ করতে পারে
                      </p>
                    </div>
                    <div class="ds-hadith-reference">
                      <p>[ সূরা আরাফ - ১৮৯ ]</p>
                    </div>
                  </div>
                </li>                                <li>
                  <div class="ds-hadith-content">
                    <div class="ds-hadith-quotemark">
                      <i class="bi bi-quote"></i>
                    </div>
                    <div class="ds-hadith">
                      <p>
                        যে ব্যক্তি বিয়ে করলো সে তার অর্ধেক দ্বীন পূর্ণ করে
                        ফেললো। বাকি অর্ধেকের জন্য সে আল্লাহকে ভয় করুক
                      </p>
                    </div>
                    <div class="ds-hadith-reference">
                      <p>[ বায়হাকী, শু’আবুল ঈমান - ৫৪৮৬ ]</p>
                    </div>
                  </div>
                </li>
              <li>
                  <div class="ds-hadith-content">
                    <div class="ds-hadith-quotemark">
                      <i class="bi bi-quote"></i>
                    </div>
                    <div class="ds-hadith">
                      <p>
                        বিয়ে হলো আমার সুন্নাত, যে ব্যক্তি আমার সুন্নাত তরিকা
                        ছেড়ে চলবে সে আমার দলভুক্ত নয়
                      </p>
                    </div>
                    <div class="ds-hadith-reference">
                      <p>[ সহিহ বুখারি - ৫০৬৩ ]</p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="ds-hadith-content">
                    <div class="ds-hadith-quotemark">
                      <i class="bi bi-quote"></i>
                    </div>
                    <div class="ds-hadith">
                      <p>
                        নারীকে বিবাহ করা হয় চারটি জিনিস দেখে। তার সম্পদ,বংশমর্যাদা,রূপ এবং দ্বীনদারীতা দেখে। কিন্তু তুমি দ্বীনদারিতাকে অগ্রাধিকার দাও,অন্যথায় ক্ষতিগ্রস্ত হবে
                      </p>
                    </div>
                    <div class="ds-hadith-reference">
                      <p>[ সহীহ বুখারী - ৫০৯০ ]</p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="ds-hadith-content">
                    <div class="ds-hadith-quotemark">
                      <i class="bi bi-quote"></i>
                    </div>
                    <div class="ds-hadith">
                      <p>
                        তোমাদের নিকট যদি এমন কারও প্রস্তাব আসে যার দ্বীনদারি এবং
                        চরিত্রের ব্যাপারে তোমরা সন্তুষ্ট তাহলে তার সাথে বিবাহ
                        সম্পন্ন করে ফেল
                      </p>
                    </div>
                    <div class="ds-hadith-reference">
                      <p>[ জামে তিরমিযি - ১০৮৯ ]</p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="ds-hadith-content">
                    <div class="ds-hadith-quotemark">
                      <i class="bi bi-quote"></i>
                    </div>
                    <div class="ds-hadith">
                      <p>
                        নারীদেরকে দ্বীনদার পুরুষের নিকট বিবাহ দাও, আর
                        পুরুষদেরকেও দ্বীনদার নারীর সাথে বিবাহ দাও;
                        ফলশ্রুতিতে তাদের যে সন্তান হবে তারা হবে উওম
                      </p>
                    </div>
                    <div class="ds-hadith-reference">
                      <p>[ সুনানে দারিমী - ২২২৭ ]</p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="ds-hadith-content">
                    <div class="ds-hadith-quotemark">
                      <i class="bi bi-quote"></i>
                    </div>
                    <div class="ds-hadith">
                      <p>
                        মানুষ দুনিয়াতে যা কিছু দ্বারা কল্যাণ ও উপকার লাভ করে,
                        তার মধ্যে দ্বীনদার-নেককার স্ত্রীর চেয়ে উত্তম আর
                        কিছু নেই
                      </p>
                    </div>
                    <div class="ds-hadith-reference">
                      <p>[ সুনানে ইবনে মাজাহ - ১৮৫৫ ]</p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="ds-hadith-content">
                    <div class="ds-hadith-quotemark">
                      <i class="bi bi-quote"></i>
                    </div>
                    <div class="ds-hadith">
                      <p>
                        বরকতের দিক থেকে সর্বোত্তম বিবাহ হল সেটি যাতে অধিকতর কম খরচ হয়
                      </p>
                    </div>
                    <div class="ds-hadith-reference">
                      <p>[ মুসনাদে আহমাদ - ২৪৫২৯ ]</p>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <!-- HOW DEENDARSANGEE WORKS START-->
      <section class="aw-how-works">
        <div class="container aw-how-works-container">
          <div class="row aw-how-works-container-inner">
            <div class="aw-section-heading">
              <h2> ‍<span>দ্বীনদারসঙ্গী</span> যেভাবে কাজ করে</h2>
            </div>
            <div class="col-xl-3 col-lg-6 how-works-container-inner-inner">
              <div class="aw-how-works-content">
                <div class="how-works-image">
                  <img src="{{ asset('frontend') }}/uploads/Create-Biodate.svg" alt="Icon" />
                </div>
                <span class="how-works-border"></span>
                <div class="how-works-text-content">
                  <h3>বিনামূল্যে বায়োডাটা তৈরী করুন</h3>
                  <p>
                    আপনার ঠিকানা,ব্যক্তিগত তথ্য, শিক্ষাগত যোগ্যতা, প্রত্যাশিত
                    জীবনসঙ্গী সহ প্রয়োজনীয় তথ্য দিয়ে খুব সহজেই বায়োডাটা তৈরী
                    করুন
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 how-works-container-inner-inner">
              <div class="aw-how-works-content">
                <div class="how-works-image">
                  <img src="{{ asset('frontend') }}/uploads/Search Biodata.svg" alt="Icon" />
                </div>
                <span class="how-works-border"></span>
                <div class="how-works-text-content">
                  <h3>প্রত্যাশিত জীবনসঙ্গী খুঁজুন</h3>
                  <p>
                    নিজস্ব চাহিদা অনুযায়ী ব্যক্তিগত তথ্য, ঠিকানা, বয়স, শিক্ষাগত
                    যোগ্যতা, পেশা ইত্যাদি তথ্য দিয়ে এডভান্সড ফিল্টারিং করে জীবনসঙ্গী
                    খুঁজুন
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 how-works-container-inner-inner">
              <div class="aw-how-works-content">
                <div class="how-works-image">
                  <img src="{{ asset('frontend') }}/uploads/Send Proposal.svg" alt="Icon" />
                </div>
                <span class="how-works-border"></span>
                <div class="how-works-text-content">
                  <h3>যোগাযোগ করে প্রস্তাব পাঠান</h3>
                  <p>
                    আপনার পছন্দকৃত বায়োডাটার অভিবাবকের যোগাযোগ তথ্য সংগ্রহ করে
                    সরাসরি, ফোন কল অথবা ইমেইলের মাধ্যমে যোগাযোগ করুন
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 how-works-container-inner-inner">
              <div class="aw-how-works-content">
                <div class="how-works-image">
                  <img src="{{ asset('frontend') }}/uploads/Engage-Ring.svg" alt="Icon" />
                </div>
                <span class="how-works-border"></span>
                <div class="how-works-text-content">
                  <h3>বিয়ে সম্পন্ন করুন</h3>
                  <p>
                    সরাসরি সাক্ষাৎ এ নিজ দায়িত্বে পাত্রপাত্রীর তথ্যের সত্যতা
                    যাচাই করে উভয়পক্ষের সম্মতির পর সুন্নতি পদ্ধতিতে বিয়ে সম্পন্ন
                    করুন
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- WHY DEENDARSANGEE START-->
      <section class="why-azwaj">
        <div class="container why-azwaj-container">
          <div class="row why-azwaj-container-inner">
            <div class="aw-section-heading">
              <h2>‍<span>দ্বীনদারসঙ্গী</span> কেন ব্যবহার করবেন</h2>
            </div>
            <div class="col-lg-6 why-azwaj-content-left">
              <ul class="why-azwaj-itemlist p-0">
                <li class="why-azwaj-item">
                  <img src="{{ asset('frontend') }}/uploads/Checkmark.svg" alt="checkmark image" />
                  <p>
                    ইসলামী শরিয়াহ অনুযায়ী পরিচালিত বিশ্বস্ত ম্যাট্রিমনি
                  </p>
                </li>
                <li class="why-azwaj-item">
                  <img src="{{ asset('frontend') }}/uploads/Checkmark.svg" alt="checkmark image" />
                  <p>বিনামূল্যে একাউন্ট তৈরি করা এবং বায়োডাটা জমা দেওয়া যায়</p>
                </li>
                <li class="why-azwaj-item">
                  <img src="{{ asset('frontend') }}/uploads/Checkmark.svg" alt="checkmark image" />
                  <p>
                    বিশেষ প্রক্রিয়ার মধ্য দিয়ে পাত্রপাত্রীর দ্বীনদারিতা যাচাই করে
                  </p>
                </li>
                <li class="why-azwaj-item">
                  <img src="{{ asset('frontend') }}/uploads/Checkmark.svg" alt="checkmark image" />
                  <p>বায়োডাটার তথ্যের সত্যতা জেনে এপ্রুভাল দিয়ে থাকে</p>
                </li>
                <li class="why-azwaj-item">
                  <img src="{{ asset('frontend') }}/uploads/Checkmark.svg" alt="checkmark image" />
                  <p>
                    ব্যবহারকারীর ব্যক্তিগত তথ্যের নিরাপত্তা প্রদান করে
                  </p>
                </li>
                <li class="why-azwaj-item">
                  <img src="{{ asset('frontend') }}/uploads/Checkmark.svg" alt="checkmark image" />
                  <p>
                    চাহিদা অনুযায়ী এডভান্স ফিল্টারিং করে বায়োডাটা খোঁজা যায়
                  </p>
                </li>
                <li class="why-azwaj-item">
                  <img src="{{ asset('frontend') }}/uploads/Checkmark.svg" alt="checkmark image" />
                  <p>
                    ব্যবহারকারীর যেকোন সমস্যায় সাপোর্ট নিতে পারে
                  </p>
                </li>
                <li class="why-azwaj-item">
                  <img src="{{ asset('frontend') }}/uploads/Checkmark.svg" alt="checkmark image" />
                  <p>বিবাহ পরবর্তী কোনো ধরনের সার্ভিস চার্জ নেই</p>
                </li>
                <li class="why-azwaj-item">
                    <li class="why-azwaj-item">
                        @if (Auth::guard('customer')->check())
                            @if (App\Models\Biodata::where('customer_id', Auth::guard('customer')->user()->id)->exists())
                            <a href="{{ route('add.biodata') }}" class="cta-each-btn ds-button"
                            >বায়োডাটা এডিট করুন</a>
                            @else
                                <a href="{{ route('biodata') }}" style="text-decoration: none"  class="cta-each-btn ds-button"
                                >বিনামূল্যে বায়োডাটা তৈরি করুন</a>
                            @endif
                        @else
                            <a href="{{ route('biodata') }}" style="text-decoration: none" class="cta-each-btn ds-button"
                            >বিনামূল্যে বায়োডাটা তৈরি করুন</a>
                        @endif
                    </li>
                </li>
              </ul>
            </div>
            <div class="col-lg-6 why-azwaj-content-right">
              <div class="use-deendarsangee-tutorial">
                <a href="#" class="use-deendarsangee-tutorial-link"></a>
              </div>
            </div>
          </div>
        </div>
        <!-- DEENDARSANGEE CUSTOMER STATISTICS START-->
      </section>
      <section class="aw-customer-statistics">
        <div class="container aw-customer-statistics-container">
          <div class="row customer-statistics-container-inner">
            <div class="aw-section-heading">
              <h2>‍<span>দ্বীনদারসঙ্গী</span> ডাটাবেজের তথ্য</h2>
            </div>
            <div class="col-xl-3 col-lg-6 customer-statistics-inner-inner">
              <div class="customer-statistics-content">
                <div class="customer-statistics-image">
                  <img
                    src="{{ asset('frontend') }}/uploads/Man-woman.svg"
                    alt="man-woman-icon"
                    id="woman-man-statistics-img"
                  />
                </div>
                <span class="customer-statistics-border"></span>
                <div class="customer-statistics-text-content">
                  <p>সর্বমোট পাত্রপাত্রীর বায়োডাটা</p>
                  <span class="customer-statistics-count">4,689</span>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 customer-statistics-inner-inner">
              <div class="customer-statistics-content">
                <div class="customer-statistics-image">
                  <img src="{{ asset('frontend') }}/uploads/Man.svg" alt="man-woman-icon" />
                </div>
                <span class="customer-statistics-border"></span>
                <div class="customer-statistics-text-content">
                  <p>সর্বমোট পাত্রের বায়োডাটা</p>
                  <span class="customer-statistics-count">2,200</span>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 customer-statistics-inner-inner">
              <div class="customer-statistics-content">
                <div class="customer-statistics-image">
                  <img src="{{ asset('frontend') }}/uploads/Woman.svg" alt="man-woman-icon" />
                </div>
                <span class="customer-statistics-border"></span>
                <div class="customer-statistics-text-content">
                  <p>সর্বমোট পাত্রীর বায়োডাটা</p>
                  <span class="customer-statistics-count">2,489</span>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 customer-statistics-inner-inner">
              <div class="customer-statistics-content">
                <div class="customer-statistics-image">
                  <img src="{{ asset('frontend') }}/uploads/Marriage-Ring.svg" alt="man-woman-icon" />
                </div>
                <span class="customer-statistics-border"></span>
                <div class="customer-statistics-text-content">
                  <p>সর্বমোট সফল বিবাহ</p>
                  <span class="customer-statistics-count">850+</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--CALL TO ACTION PART START-->
      <section class="aw-cta">
        <div class="container aw-cta-container">
          <div class="row aw-cta-container-inner">
            <div class="col-12">
              <div class="aw-cta-content">
                <div class="cta-text">
                  <h3>দ্বীনদার জীবনসঙ্গী সন্ধানের</h3>
                  <p>সবচেয়ে বিশ্বস্ত, নিরাপদ এবং সহজ মাধ্যম</p>
                </div>
                <div>
                  <div class="cta-button">
                    <a href="login.html">বায়োডাটাসমূহ দেখুন</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--FAQ PART START-->
      <section class="aw-accordion">
        <div class="container aw-accordion-container">
          <div class="row aw-accordion-container-inner">
            <div class="aw-section-heading">
              <h2>‍সচরাচর জিজ্ঞাসা</h2>
            </div>
            <div class="col-12 aw-accordion-container-inner-inner">
              <div class="aw-accordion-content">
                <div
                  class="aw-accordion-title d-flex align-items-center justify-content-spaceBetween"
                >
                  <button>দ্বীনদারসঙ্গী ডটকম কাদের জন্য কাজ করে?</button>
                  <i class="bi bi-chevron-down accordion-arrow"></i>
                </div>
                <div class="aw-accordion-collapse">
                  <div class="accordion-body">
                    <p>
                        এটি শুধুমাত্র প্রেক্টিসিং মুসলিম পাত্র/পাত্রীদের নিয়ে
                        কাজ করে। যারা বিয়ের ক্ষেত্রে পাত্র/পাত্রীর দ্বীনদারিতাকে
                        প্রাধান্য দেয় এবং বিয়েতে সকল প্রকার হারাম সংশ্লিষ্ট
                        কর্মকান্ড বর্জন করে সুন্নাহসম্মত বিয়ে করতে ইচ্ছুক
                    </p>
                  </div>
                </div>
              </div>
              <div class="aw-accordion-content">
                <div
                  class="aw-accordion-title d-flex align-items-center justify-content-spaceBetween"
                >
                  <button>বায়োডাটা তৈরীতে কোন শর্ত আছে কি?</button>
                  <i class="bi bi-chevron-down accordion-arrow"></i>
                </div>
                <div class="aw-accordion-collapse">
                  <div class="accordion-body">
                    <p>
                        হ্যাঁ। দ্বীনদারসঙ্গী ডটকমে বায়োডাটা তৈরি ও জমা দিতে
                        নিম্নবর্ণিত শর্তসমূহ পূরণ করা আবশ্যক। অন্যথায় বায়োডাটা
                        এপ্রুভ করা হয় না।
                        <b class="faq-gender d-block">পাত্রের ক্ষেত্রে -</b>
                        <span class="aw-faq-condtiion">
                          ১. উপার্জন হালাল হতে হবে<br />
                          ২. নিয়মিত ৫ ওয়াক্ত নামাযী হতে হবে<br />
                          ৩. ওয়াজিব দাড়ি থাকতে হবে<br />
                          ৪. টাখনুর উপর পোশাক পরতে হবে<br />
                          ৫. অভিভাবকের অনুমতি নিতে হবে </span
                        ><b class="faq-gender d-block">পাত্রীর ক্ষেত্রে -</b>
                        <span class="aw-faq-condtiion">
                          ১. শরয়ী ফরয পর্দানশীন হতে হবে<br />
                          ২. নিয়মিত ৫ ওয়াক্ত নামাযী হতে হবে<br />
                          ৩. স্বামীর আনুগত্য করার মানসিকতা থাকতে হবে<br />
                          8. অভিভাবকের অনুমতি নিতে হবে</span
                        >
                      </p>
                  </div>
                </div>
              </div>
              <div class="aw-accordion-content">
                <div
                  class="aw-accordion-title d-flex align-items-center justify-content-spaceBetween"
                >
                  <button>আপনাদের সেবা কি শুধুমাত্র অবিবাহিতদের জন্য ?</button>
                  <i class="bi bi-chevron-down accordion-arrow"></i>
                </div>
                <div class="aw-accordion-collapse">
                  <div class="accordion-body">
                    <p>
                      না। অবিবাহিত, বিবাহিত, ডিভোর্সড, বিধবা কিংবা বিপত্নীক যে
                      কেউ নূন্যতম শর্ত পূরন করে বায়োডাটা তৈরি ও জমা দিতে পারবে।
                    </p>
                  </div>
                </div>
              </div>

              <div class="aw-accordion-content">
                <div
                  class="aw-accordion-title d-flex align-items-center justify-content-spaceBetween"
                >
                  <button>
                    দ্বীনদারসঙ্গীতে আমার ব্যক্তিগত তথ্য কতটা নিরাপদ থাকবে?
                  </button>
                  <i class="bi bi-chevron-down accordion-arrow"></i>
                </div>
                <div class="aw-accordion-collapse">
                  <div class="accordion-body">
                    <p>
                        আপনার ব্যক্তিগত তথ্যের নিরাপত্তার জন্য আপনার ও আপনার
                        পিতা-মাতার নাম, মোবাইল নাম্বার এবং ইমেইল এড্রেস গোপন রাখা
                        হবে। যে কেউ আপনার বায়োডাটা পড়তে পারবে কিন্ত আপনার পরিচয়
                        জানতে পারবে না। শুধুমাত্র বিয়ের জন্য আপনার অভিভাবকের সাথে
                        যোগাযোগ করতে আগ্রহী যে কেউ নির্দিষ্ট পরিমাণ টাকা পরিশোধ
                        করার পর ব্যক্তিগত তথ্য দেখতে পারবে।
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div
              class="ds-detailbtn d-flex align-items-center justify-content-center"
            >
              <button type="button">
                <a href="{{ route('faq') }}" class="ds-button">বিস্তারিত জানুন</a>
              </button>
            </div>
          </div>
        </div>
      </section>
      <!--IMPORTANT LINKS PART START-->
      <section class="aw-important-links">
        <div class="aw-importance-links">
          <div class="importance-links-content">
            <div class="importance-links-item">
              <a
                href="https://www.facebook.com/groups/reviews.deendarsangee"
                target="_blank" class="ds-button-border"
                >সেবাগ্রহীতার রিভিওসমূহ দেখুন</a
              >
            </div>
            <div class="importance-links-item">
              <a
                href="https://www.facebook.com/groups/successbibahposts.deendarsangee"
                target="_blank" class="ds-button-border"
                >সাক্সেস বিবাহ পোস্ট পড়ুন</a
              >
            </div>
          </div>
        </div>
      </section>
         <!--FOOTER PART START-->
         <section class="aw-footer">
            <div class="aw-footer-container">
              <div class="row aw-footer-container-inner">
                <div class="col-xl-3 col-lg-4">
                  <div class="aw-footer-content">
                    <div class="logo-white">
                        <img src="{{ asset('frontend') }}/uploads/Logo-White.svg" alt="azwaj logo" />
                    </div>
                    <div class="azwaj-address">
                      <span>ওয়ার্ড-০৪, কাজিপুর রোড, সিরাজগঞ্জ সদর</span>
                      <p>
                        <a href="mailto:support@deendarsongi.com"
                          >Email: support@deendarsangee.com</a
                        >
                      </p>
                      <p>
                        <a href="tel:+8801864462222">Helpline: +8801864462222</a>
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-4">
                  <div class="aw-footer-content">
                    <div class="footer-title"><h4>হেল্প এন্ড সাপোর্ট</h4></div>
                    <div class="footer-links">
                      <ul>
                        <li>
                          <a href="contact-us.html">যোগাযোগ</a>
                        </li>
                        <li>
                          <a href="faq.html">সচরাচর জিজ্ঞাসা</a>
                        </li>
                        <li><a href="guide.html">নির্দেশনা</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-4">
                  <div class="aw-footer-content">
                    <div class="footer-title"><h4>নীতিমালা</h4></div>
                    <div class="footer-links">
                      <ul>
                        <li>
                          <a href="terms-and-conditions.html">পরিষেবার শর্তাবলী</a>
                        </li>
                        <li><a href="privacy-policy.html">গোপনীয়তা নীতিমালা</a></li>
                        <li><a href="refund-policy.html">ফেরত নীতিমালা</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-4">
                  <div class="aw-footer-content">
                    <div class="azwaj-sociallinks">
                      <ul class="d-flex">
                        <li>
                          <a
                            href="https://www.facebook.com/DeendarSangee"
                            target="_blank"
                            ><i class="bi bi-facebook"></i
                          ></a>
                        </li>
                        <li>
                          <a
                            href="https://www.youtube.com/@DeendarSangee"
                            target="_blank"
                            ><i class="bi bi-youtube"></i
                          ></a>
                        </li>
                        <li>
                          <a
                            href="https://www.instagram.com/deendarsangee"
                            target="_blank"
                            ><i class="bi bi-whatsapp"></i
                          ></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="aw-scroll-top">
                <button class="scroll-top-btn">
                  <i class="bi bi-chevron-double-up"></i>
                </button>
              </div>
            </div>
            <div class="footer-copyright">
              <div class="copyright-text">
                <p>©২০২৪ দ্বীনদারসঙ্গী - সমস্ত অধিকার সংরক্ষিত</p>
              </div>
            </div>
            {{-- Footer Navbar Start --}}
        <div class="footer-navbar-container">
            <span class="footer-navbar-middle-box"></span>
            <div class="footer-navbar-content">
                <a href="{{ route('index') }}" class="footer-navbar-each-item {{ Route::is('index') ? 'active' : '' }}">
                    <div class="footer-nav-icon-box">
                        <img
                        src="{{ asset('frontend') }}/uploads/Home.svg"
                        alt=""
                        class="footer-navbar-each-item-icon"
                      />
                    <img
                        src="{{ asset('frontend') }}/uploads/Home-fill.svg"
                        alt=""
                        class="footer-navbar-each-item-icon-fill"
                      />
                    </div>
                      <span class="footer-text">হোম</span>
                </a>

                <a href="{{ route('wishlist') }}" class="footer-navbar-each-item {{ Route::is('wishlist') ? 'active' : '' }}">
                    <div class="footer-nav-icon-box">
                        <img
                        src="{{ asset('frontend') }}/uploads/Love.svg"
                        alt=""
                        class="footer-navbar-each-item-icon"
                      />
                    <img
                        src="{{ asset('frontend') }}/uploads/Love-fill.svg"
                        alt=""
                        class="footer-navbar-each-item-icon-fill"
                      />
                    </div>
                      <span class="footer-text">পছন্দ</span>
                </a>

                <div class="footer-navbar-each-item">
                    <div class="footer-nav-icon-box" style="visibility: hidden">
                        <img
                        src="{{ asset('frontend') }}/uploads/Fillter.svg"
                        alt=""
                        class="footer-navbar-each-item-icon"
                      />
                    </div>
                      <span style="cursor:text">ফিল্টার</span>
                </div>
                <a href="#" class="footer-navbar-each-item search-advanced-fillter-btn">
                    <div class="footer-nav-icon-box">
                        <img
                        src="{{ asset('frontend') }}/uploads/Fillter.svg"
                        alt=""
                        class=""
                      />
                    </div>
                </a>
                <a href="#" class="footer-navbar-each-item {{ Route::is('#') ? 'active' : '' }}">
                    <div class="footer-nav-icon-box">
                        <img
                        src="{{ asset('frontend') }}/uploads/Notification.svg"
                        alt=""
                        class="footer-navbar-each-item-icon"
                      />
                    <img
                        src="{{ asset('frontend') }}/uploads/Notification-fill.svg"
                        alt=""
                        class="footer-navbar-each-item-icon-fill"
                      />
                    </div>
                      <span class="footer-text">নোটিফিকেশন</span>
                </a>
                <a href="{{ route('my.dashboard') }}" class="footer-navbar-each-item {{ Route::is('my.dashboard') ? 'active' : '' }}">
                    <div class="footer-nav-icon-box">
                        <img
                        src="{{ asset('frontend') }}/uploads/Dashboard.svg"
                        alt=""
                        class="footer-navbar-each-item-icon"
                      />
                    <img
                        src="{{ asset('frontend') }}/uploads/Dashboard-fill.svg"
                        alt=""
                        class="footer-navbar-each-item-icon-fill"
                      />
                    </div>
                      <span class="footer-text">ড্যাশবোর্ড</span>
                </a>
            </div>
        </div>
        {{-- Footer Navbar End --}}
          </section>
    </div>
 <!-- jQuery plugins-->
 <script src="{{ asset('frontend') }}/jquery/jquery-3.7.1.min.js"></script>
 <!--frontend style-->
 <script src="{{ asset('frontend') }}/js/faq.js"></script>
 <script src="{{ asset('frontend') }}/js/add_biodata.js"></script>
 <script src="{{ asset('frontend') }}/js/biodatas.js"></script>
 <!-- Others plugins-->
 <script src="{{ asset('frontend') }}/plugins/Ion-range-slider/js/ion.rangeSlider.min.js"></script>
 <script src="{{ asset('frontend') }}/plugins/Select2/js/select2.min.js"></script>
 <script src="{{ asset('frontend') }}/plugins/Slick/js/slick.min.js"></script>
 <script src="{{ asset('frontend') }}/plugins/Card-slider/js/jquery.cardslider.min.js"></script>
 <script src="{{ asset('frontend') }}/plugins/Card-slider/js/jquery.event.move.js"></script>
 <script src="{{ asset('frontend') }}/plugins/Card-slider/js/jquery.event.swipe.js"></script>
 <script src="{{ asset('frontend') }}/js/commitment.js"></script>
 <script src="{{ asset('frontend') }}/js/about-us.js"></script>
 <script src="{{ asset('frontend') }}/js/bootstrap.min.js"></script>
 <script src="{{ asset('frontend') }}/js/deendarsangee-frontend.js"></script>
 <script src="{{ asset('frontend') }}/js/education.js "></script>
 <script src="{{ asset('frontend') }}/js/address.js"></script>
 {{-- backend --}}
 <script src="{{ asset('backend') }}/js/general_info.js"></script>
 <script src="{{ asset('backend') }}/js/address_info.js"></script>
 <script src="{{ asset('backend') }}/js/education_info.js"></script>
 <script src="{{ asset('backend') }}/js/family_info.js"></script>
 <script src="{{ asset('backend') }}/js/personal_info.js"></script>
 <script src="{{ asset('backend') }}/js/professional_info.js"></script>
 <script src="{{ asset('backend') }}/js/marriage_info.js"></script>
<script src="{{ asset('backend') }}/js/expectation_info.js"></script>
<script src="{{ asset('backend') }}/js/inquiries_info.js"></script>
<script src="{{ asset('backend') }}/js/contact_info.js"></script>


 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.15.2/js/selectize.min.js"
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
    ></script>
 @yield('footer_script')
</body>
</html>
