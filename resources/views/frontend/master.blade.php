<!DOCTYPE html>
<html lang="bn">

<head>
    <meta charset="UTF-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Biodatas | Deendarsangee.com</title>
    <meta name="description"
        content="দ্বীনদারসঙ্গী ডটকম দ্বীনদার পাত্রপাত্রীর
    বায়োডাটা খোঁজার একটি নির্ভরযোগ্য ইসলামিক ম্যাট্রিমনি । যা সম্পূর্ণ ইসলামী
    শরিয়াহ অনুযায়ী পরিচালিত । দ্বীনদার জীবনসঙ্গী সন্ধানে সাহায্য করে সমাজে
    সুন্নাহ সম্মত বিয়ে প্রতিষ্ঠা করা আমাদের উদ্দেশ্য! />
    <meta
      name="keywords"
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
    সুন্নতি বিবাহ" />
    <meta name="subject"
        content="DeendarSangee.com is a reliable Islamic online matrimony platform for finding a Deendar life partner. Which is fully managed according to Islamic Shariah" />
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
    <link rel="stylesheet" href="{{ asset('frontend') }}/plugins/Ion-range-slider/css/ion.rangeSlider.min.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/plugins/Select2/css/select2.min.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/plugins/Slick/css/slick.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/plugins/Slick/css/slick-theme.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/plugins/Card-slider/css/cardslider.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.15.2/css/selectize.default.min.css"
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!--TOP HEADER PART START-->
    <header class="aw-header ds-header-top">
        <div class="aw-top-content">
            <div class="aw-logo-box">
                <a href="{{ route('index') }}"><img src="{{ asset('frontend') }}/uploads/Logo.svg"
                        alt="deendarsangee-logo" /></a>
            </div>
        </div>
        <div class="container">
            <div
                class="row aw-top-container d-flex justify-content-spaceBetween align-items-center position-relative aw-z-index">
                <div class="mobile-toggle-box">
                    <div class="mobile-toggle">
                        <img src="{{ asset('frontend') }}/uploads/hamburger.svg" alt="" />
                    </div>
                </div>
                <div class="col-8 col-md-8 ds-navbar-container">
                    <div class="aw-nav-inner">
                        <div class="aw-nav-inner-inner align-items-start d-column">
                            <nav class="aw-navbar">
                                <ul class="navbar-inner d-flex justify-content-spaceBetween align-items-center">
                                    <li>
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
                <div class="col-4 col-md-4 d-flex align-items-center justify-content-end ds-log-reg-container aw-login-reg-box"
                    align="right">
                    @auth('customer')
                        <div class="aw-user-login-box">
                            <span class="aw-wishlist-icon aw-user-general-icon">
                                <a href="{{ route('wishlist') }}"><img
                                        src="{{ asset('frontend') }}/uploads/love-color.svg" alt="" /></a>
                                <span class="wishlist-quantity user-general-icon-quantity">3</span>
                            </span>
                            <span class="aw-notification-icon aw-user-general-icon">
                                <a href="#"><img src="{{ asset('frontend') }}/uploads/Notification-color.svg"
                                        alt="" /></a>
                                <span class="notification-quantity user-general-icon-quantity">12</span>
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
                                            <a href="{{ route('my.dashboard') }}"><img
                                                    src="{{ asset('frontend') }}/uploads/Dashboard.svg"
                                                    alt="dashboard-icon" />ড্যাশবোর্ড</a>
                                        </li>
                                        <li class="dsdb-tab-btn">
                                            <a href="{{ route('proposal') }}"><img
                                                    src="{{ asset('frontend') }}/uploads/Proposal.svg"
                                                    alt="dashboard-icon" />প্রস্তাব</a>
                                        </li>
                                        <li class="dsdb-tab-btn">
                                            <a href="{{ route('contact.info') }}"><img
                                                    src="{{ asset('frontend') }}/uploads/Contact-Info.svg"
                                                    alt="dashboard-icon" />যোগাযোগ তথ্য</a>
                                        </li>
                                        <li class="dsdb-tab-btn">
                                            <a href="{{ route('wishlist') }}"><img
                                                    src="{{ asset('frontend') }}/uploads/love-color.svg"
                                                    alt="dashboard-icon" />পছন্দের তালিকা</a>
                                        </li>
                                        <li class="dsdb-tab-btn">
                                            <a href="{{ route('payment.info') }}"><img
                                                    src="{{ asset('frontend') }}/uploads/payment.svg"
                                                    alt="dashboard-icon" />পেমেন্ট হিস্টোরি</a>
                                        </li>
                                        <li class="dsdb-tab-btn">
                                            <a href="{{ route('report.info') }}"><img
                                                    src="{{ asset('frontend') }}/uploads/Report.svg"
                                                    alt="dashboard-icon" />রিপোর্টসমূহ</a>
                                        </li>
                                        <li class="dsdb-tab-btn">
                                            <a href="{{ route('success.form') }}"><img
                                                    src="{{ asset('frontend') }}/uploads/success.svg"
                                                    alt="dashboard-icon" />বিবাহ নিশ্চিতকরণ</a>
                                        </li>
                                        <li class="dsdb-tab-btn">
                                            <a href="{{ route('delete.biodata') }}"><img
                                                    src="{{ asset('frontend') }}/uploads/delete-primary.svg"
                                                    alt="dashboard-icon" />ডিলিট বায়োডাটা</a>
                                        </li>
                                        <li class="dsdb-tab-btn">
                                            <a href="{{ route('customer.logout') }}"><img
                                                    src="{{ asset('frontend') }}/uploads/logout.svg"
                                                    alt="dashboard-icon" />লগআউট</a>
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
    <!-- HEADER PART END -->
    <div class="aw-content-main">
        @yield('content')
    </div>
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
                                <p>
                                    <a href="mailto:support@deendarsangee.com">Email: support@deendarsongi.com</a>
                                </p>
                                <p>
                                    <a href="tel:+8801864462222">Helpline: +8801864462222</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4">
                        <div class="aw-footer-content">
                            <div class="footer-title">
                                <h4>হেল্প এন্ড সাপোর্ট</h4>
                            </div>
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
                            <div class="footer-title">
                                <h4>গুরুত্বপূর্ণ লিঙ্কস</h4>
                            </div>
                            <div class="footer-links">
                                <ul>
                                    <li>
                                        <a href="https://www.facebook.com/groups/reviews.deendarsangee"
                                            target="_blank">সেবাগ্রহীতার রিভিওসমূহ</a>
                                    </li>
                                    <li>
                                        <a href="https://www.facebook.com/groups/successbibahposts.deendarsangee"
                                            target="_blank">সাক্সেস বিবাহ পোস্ট</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4">
                        <div class="aw-footer-content">
                            <div class="footer-title">
                                <h4>নীতিমালা</h4>
                            </div>
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
                                        <a href="https://www.facebook.com/DeendarSangee" target="_blank"><i
                                                class="bi bi-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://www.youtube.com/@DeendarSangee" target="_blank"><i
                                                class="bi bi-youtube"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/deendarsangee" target="_blank"><i
                                                class="bi bi-whatsapp"></i></a>
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
                    <a href="{{ route('index') }}"
                        class="footer-navbar-each-item {{ Route::is('index') ? 'active' : '' }}">
                        <div class="footer-nav-icon-box">
                            <img src="{{ asset('frontend') }}/uploads/Home.svg" alt=""
                                class="footer-navbar-each-item-icon" />
                            <img src="{{ asset('frontend') }}/uploads/Home-fill.svg" alt=""
                                class="footer-navbar-each-item-icon-fill" />
                        </div>
                        <span class="footer-text">হোম</span>
                    </a>

                    <a href="{{ route('wishlist') }}"
                        class="footer-navbar-each-item {{ Route::is('wishlist') ? 'active' : '' }}">
                        <div class="footer-nav-icon-box">
                            <img src="{{ asset('frontend') }}/uploads/Love.svg" alt=""
                                class="footer-navbar-each-item-icon" />
                            <img src="{{ asset('frontend') }}/uploads/Love-fill.svg" alt=""
                                class="footer-navbar-each-item-icon-fill" />
                        </div>
                        <span class="footer-text">পছন্দ</span>
                    </a>
                    <div class="footer-navbar-each-item">
                        <div class="footer-nav-icon-box" style="visibility: hidden">
                            <img src="{{ asset('frontend') }}/uploads/Fillter.svg" alt=""
                                class="footer-navbar-each-item-icon" />
                        </div>
                        <span style="cursor:text">ফিল্টার</span>
                    </div>
                    <a href="#" class="footer-navbar-each-item search-advanced-fillter-btn">
                        <div class="footer-nav-icon-box">
                            <img src="{{ asset('frontend') }}/uploads/Fillter.svg" alt="" class="" />
                        </div>
                    </a>
                    <a href="#" class="footer-navbar-each-item {{ Route::is('#') ? 'active' : '' }}">
                        <div class="footer-nav-icon-box">
                            <img src="{{ asset('frontend') }}/uploads/Notification.svg" alt=""
                                class="footer-navbar-each-item-icon" />
                            <img src="{{ asset('frontend') }}/uploads/Notification-fill.svg" alt=""
                                class="footer-navbar-each-item-icon-fill" />
                        </div>
                        <span class="footer-text">নোটিফিকেশন</span>
                    </a>
                    <a href="{{ route('my.dashboard') }}"
                        class="footer-navbar-each-item {{ Route::is('my.dashboard') ? 'active' : '' }}">
                        <div class="footer-nav-icon-box">
                            <img src="{{ asset('frontend') }}/uploads/Dashboard.svg" alt=""
                                class="footer-navbar-each-item-icon" />
                            <img src="{{ asset('frontend') }}/uploads/Dashboard-fill.svg" alt=""
                                class="footer-navbar-each-item-icon-fill" />
                        </div>
                        <span class="footer-text">ড্যাশবোর্ড</span>
                    </a>
                </div>
            </div>
            {{-- Footer Navbar End --}}

        </section>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.15.2/js/selectize.min.js" crossorigin="anonymous"
        referrerpolicy="no-referrer"></script>

    @yield('footer_script')
</body>

</html>
