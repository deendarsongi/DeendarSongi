
<!DOCTYPE html>
<html lang="bn">
  <head>
    <meta charset="UTF-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Panel | DeendarSongi.com</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('backend') }}/uploads/favicon.svg" />
    <link rel="stylesheet" href="{{ asset('backend') }}/css/style.css" />

    {{-- ///// --}}
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
    {{-- ///// --}}

  </head>

  <body>
    <div class="sidebar">
      <div class="logo-box">
        <img src="{{ asset('backend') }}/uploads/Logo-Icon-Gradient.svg" alt="" class="web-logo" />
      </div>
      <ul class="menu">
        <li class="menu-group">
          <a class="menu-content-link menu-content" href="{{ route('dashboard') }}">
            <span class="menu-item"
              ><img src="{{ asset('backend') }}/uploads/Dashboard.svg" alt="" class="menu-item-icon" />
              <span>Dashboard</span></span
            >
          </a>
        </li>
        <li class="menu-group">
          <a class="menu-content-link menu-content" href="{{ route('user.management') }}">
            <div class="menu-item">
              <img src="{{ asset('backend') }}/uploads/User.svg" alt="" class="menu-item-icon" />
              <span>User Management</span>
            </div>
          </a>
        </li>
        <li class="menu-group">
          <a
            class="menu-content-link menu-content"
            href="{{ route('biodata.management') }}"
          >
            <div class="menu-item">
              <img src="{{ asset('backend') }}/uploads/Biodata.svg" alt="" class="menu-item-icon" />
              <span>Biodata Management</span>
            </div>
          </a>
        </li>
        <li class="menu-group">
          <a class="menu-content-link menu-content">
            <div class="menu-item">
              <img src="{{ asset('backend') }}/uploads/Payment.svg" alt="" class="menu-item-icon" />
              <span>Payment & Refund</span>
            </div>
          </a>
        </li>
        <li class="menu-group">
          <a class="menu-content-link menu-content">
            <div class="menu-item">
              <img src="{{ asset('backend') }}/uploads/CMS.svg" alt="" class="menu-item-icon" />
              <span>CMS</span>
            </div>
          </a>
        </li>
        <li class="menu-group">
          <a class="menu-content-link menu-content">
            <div class="menu-item">
              <img src="{{ asset('backend') }}/uploads/Contact-Us.svg" alt="" class="menu-item-icon" />
              <span>Contact Us Queries</span>
            </div>
          </a>
        </li>
        <li class="menu-group">
          <a class="menu-content-link menu-content">
            <div class="menu-item">
              <img
                src="{{ asset('backend') }}/uploads/Marriage-Success.svg"
                alt=""
                class="menu-item-icon"
              />
              <span>Marriage Reports</span>
            </div>
          </a>
        </li>
        <li class="menu-group">
          <a class="menu-content-link menu-content">
            <div class="menu-item">
              <img
                src="{{ asset('backend') }}/uploads/Notification.svg"
                alt=""
                class="menu-item-icon"
              />
              <span>Notifications</span>
            </div>
          </a>
        </li>
        <li class="menu-group">
          <a class="menu-content-link menu-content">
            <div class="menu-item">
              <img src="{{ asset('backend') }}/uploads/settings.svg" alt="" class="menu-item-icon" />
              <span>Settings</span>
            </div>
            <span
              ><img src="{{ asset('backend') }}/uploads/Arrow-Under.svg" alt="" class="menu-arrow"
            /></span>
          </a>
          <ul class="submenu">
            <a class="submenu-content-link menu-content">
              <div class="submenu-item">
                <img src="{{ asset('backend') }}/uploads/Round.svg" alt="" class="submenu-item-icon" />
                <span>General Settings</span>
              </div>
            </a>
            <a class="submenu-content-link menu-content">
              <div class="submenu-item">
                <img src="{{ asset('backend') }}/uploads/Round.svg" alt="" class="submenu-item-icon" />
                <span>Email Settings</span>
              </div>
            </a>
            <a class="submenu-content-link menu-content">
              <div class="submenu-item">
                <img src="{{ asset('backend') }}/uploads/Round.svg" alt="" class="submenu-item-icon" />
                <span>Payment Gateway</span>
              </div>
            </a>
            <a class="submenu-content-link menu-content">
              <div class="submenu-item">
                <img src="{{ asset('backend') }}/uploads/Round.svg" alt="" class="submenu-item-icon" />
                <span>Security</span>
              </div>
            </a>
            <a class="submenu-content-link menu-content">
              <div class="submenu-item">
                <img src="{{ asset('backend') }}/uploads/Round.svg" alt="" class="submenu-item-icon" />
                <span>Backup</span>
              </div>
            </a>
          </ul>
        </li>
        <li class="menu-group">
          <a class="menu-content-link menu-content">
            <div class="menu-item">
              <img src="{{ asset('backend') }}/uploads/Staffs.svg" alt="" class="menu-item-icon" />
              <span>Staffs</span>
            </div>
            <span
              ><img src="{{ asset('backend') }}/uploads/Arrow-Under.svg" alt="" class="menu-arrow"
            /></span>
          </a>
          <ul class="submenu">
            <a class="submenu-content-link menu-content">
              <div class="submenu-item">
                <img src="{{ asset('backend') }}/uploads/Round.svg" alt="" class="submenu-item-icon" />
                <span>All Staffs</span>
              </div>
            </a>
            <a class="submenu-content-link menu-content">
              <div class="submenu-item">
                <img src="{{ asset('backend') }}/uploads/Round.svg" alt="" class="submenu-item-icon" />
                <span>Staff Roles</span>
              </div>
            </a>
            <a class="submenu-content-link menu-content">
              <div class="submenu-item">
                <img src="{{ asset('backend') }}/uploads/Round.svg" alt="" class="submenu-item-icon" />
                <span>Login Logs</span>
              </div>
            </a>
          </ul>
        </li>
      </ul>
    </div>
    <div class="main">
      <div class="header">
        <div class="search-bar-wrapper">
          <input type="text" class="dashboard-search" placeholder="Search" />
        </div>

        <div class="topbar-content-wrapper">
          <div class="topbar-notifications">
            <img src="{{ asset('backend') }}/uploads/Notification.svg" alt="" />
            <span class="notifications-indicator"></span>
          </div>
          <div class="user-profile">
            <img src="{{ asset('backend') }}/uploads/Man.svg" class="avatar" />
            <div class="username">Sayem<span class="role">admin</span></div>
            <div class="user-profile-dropdown">
              <a href="" class="user-profile-item"
                ><img src="{{ asset('backend') }}/uploads/User.svg" alt="" />Manage Profile</a
              >
              <a href="{{ route('logout') }}" class="user-profile-item"
                ><img src="{{ asset('backend') }}/uploads/logout.svg" alt="" />Logout</a
              >
            </div>
          </div>
        </div>
      </div>
        {{-- content --}}
        @yield('des_content')
        {{-- content --}}
    </div>

    <script src="{{ asset('backend') }}/js/script.js"></script>

    {{-- /////// --}}
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
    {{-- /////// --}}
    @yield('footer_script')
  </body>
</html>
