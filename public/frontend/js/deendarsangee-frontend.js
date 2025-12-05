// SEND PROPOSAL- WANT CONTACT CONTAINER


document.addEventListener("DOMContentLoaded", function () {
  const sendBtn = document.querySelector(".proposal-send-btn");
  const contactBtn = document.querySelector(".want-contact-btn");
  const sendBox = document.querySelector(".send-proposal-content");
  const contactBox = document.querySelector(".want-contact-content");

  // ডিফল্ট অবস্থায় sendBox দেখা যাবে
  sendBox.classList.add("active");
  contactBox.classList.remove("active");

  sendBtn.classList.add("active");
  contactBtn.classList.remove("active");

  // প্রস্তাব পাঠান বাটনে ক্লিক করলে
  sendBtn.addEventListener("click", function () {
    sendBox.classList.add("active");
    contactBox.classList.remove("active");

    sendBtn.classList.add("active");
    contactBtn.classList.remove("active");
  });

  // যোগাযোগ বাটনে ক্লিক করলে
  contactBtn.addEventListener("click", function () {
    contactBox.classList.add("active");
    sendBox.classList.remove("active");

    contactBtn.classList.add("active");
    sendBtn.classList.remove("active");
  });
});


document.addEventListener("DOMContentLoaded", function () {
    const Item = document.querySelectorAll('.navbar-inner li a');
    const Item2 = document.querySelectorAll('.ds-dashboard-nav ul li a');
    const CurrentLocation = location.href.toLowerCase();

    // Navber
    Item.forEach(link => {
        if (link.href.toLowerCase() === CurrentLocation) {
            link.classList.add("active_nav");
        }
    });

    // Dashboard
    Item2.forEach(link => {
        if (link.href.toLowerCase() === CurrentLocation) {
            link.classList.add("active_dash");
        }
    });
});



// Select 2 Plugin
$(document).ready(function() {
  $('.select2').select2();


});
$('.select2').select2();

$('.select2').on('select2:opening select2:closing', function( event ) {
    var $searchfield = $(this).parent().find('.select2-search__field');
    $searchfield.prop('disabled', true);
});

// mobile toggle navbar

// Select elements
const toggleButton = document.querySelector('.mobile-toggle');
const navbarContainer = document.querySelector('.ds-navbar-container');

// Toggle navbar visibility on button click
toggleButton.addEventListener('click', () => {
  navbarContainer.classList.toggle('active');
});

// Hide navbar if clicked outside
document.addEventListener('click', (event) => {
  const isClickInside =
    toggleButton.contains(event.target) || navbarContainer.contains(event.target);
  if (!isClickInside) {
    navbarContainer.classList.remove('active');
  }
});


// User dropdown menubar
$(function(){
    const userIcon = document.querySelector(".aw-user-icon");
    const dsDropdownMenu = document.querySelector(".ds-dropdown-menu");

    userIcon.addEventListener("click", ()=> {
      dsDropdownMenu.classList.toggle("active");
    })
    document.onclick = function(dsdropdownmenu){
      if(!userIcon.contains(dsdropdownmenu.target) && !dsDropdownMenu.contains(dsdropdownmenu.target)) {
        dsDropdownMenu.classList.remove("active");
      }
    }
});


// Slick Plugin
    $(document).ready(function(){
        $('.featured-biodata').slick({
            autoplay: true,
      autoplaySpeed: 1000,
            dots: false,
      infinite: true,
      speed: 1200,
      slidesToShow: 3,
      slidesToScroll: 3,
      responsive: [
        {
          breakpoint: 1199.98,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
            infinite: true,
            dots: false
          }
        },
        {
          breakpoint: 991.98,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint:767.98,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        },
        {
            breakpoint:575.98,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
        }
      ]

        });
      });


    // share button

    $(function(){
        // শেয়ার মডাল ওপেন করা
        document.getElementById('openShare').addEventListener('click', function() {
        document.getElementById('shareModal').style.display = 'flex';
     });

     // শেয়ার মডাল ক্লোজ করা
        document.getElementById('closeShare').addEventListener('click', function() {
        document.getElementById('shareModal').style.display = 'none';
     });

     // শেয়ার লিংক কপি করা
        document.getElementById('copyLink').addEventListener('click', function() {
        var copyText = document.getElementById('shareLink');
        copyText.select();
        document.execCommand('copy');
        alert('Link copied to clipboard!');
     });

     // বর্তমান পেজের URL ধরে শেয়ার লিংক তৈরি করা
     const pageUrl = encodeURIComponent(window.location.href);

     document.getElementById('facebookShare').href = `https://www.facebook.com/sharer/sharer.php?u=${pageUrl}`;
     document.getElementById('whatsappShare').href = `https://api.whatsapp.com/send?text=${pageUrl}`;
     document.getElementById('twitterShare').href = `https://twitter.com/intent/tweet?url=${pageUrl}`;
     document.getElementById('emailShare').href = `mailto:?subject=Check this out&body=${pageUrl}`;

     });



// scroll to top
  const ScrollTopBtn = document.querySelector(".scroll-top-btn");

    window.addEventListener("scroll", checkheight)
    function checkheight(){
        if(window.scrollY > 600) {
            ScrollTopBtn.style.display = "flex"
        }
        else {
            ScrollTopBtn.style.display = "none"
        }
    }
    ScrollTopBtn.addEventListener("click", () => {
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        })
    })

    // Password View Icon

    $(function(){
        function togglePasswordVisibility(show) {
                const passwordField = document.querySelector(".passwordField");
                const hiddenIcon = document.getElementById("hiddenIcon");
                const visibleIcon = document.getElementById("visibleIcon");

                if (show) {
                passwordField.type = "text";
                hiddenIcon.style.display = "none";
                visibleIcon.style.display = "inline";
                } else {
                passwordField.type = "password";
                hiddenIcon.style.display = "inline";
                visibleIcon.style.display = "none";
                }
            }

            document.getElementById("hiddenIcon").addEventListener("click", function () {
                togglePasswordVisibility(true);
            });

            document.getElementById("visibleIcon").addEventListener("click", function () {
                togglePasswordVisibility(false);
            });

    });

    // Form Input Label Animation
    document.querySelectorAll('.aw-form-group-input input').forEach(input => {
        const label = input.nextElementSibling;
        //
        const updateLabel = () => {
        if (input.value.trim() !== "") {
            label.style.height = '30px';
            label.style.lineHeight = '30px';
            label.style.transform = 'translate(-5px, -15px) scale(0.88)';
            label.style.zIndex = '1111';
        } else {
            label.style.height = '';
            label.style.lineHeight = '';
            label.style.transform = '';
            label.style.zIndex = '';
        }
        };
        //
        updateLabel();
        input.addEventListener('input', updateLabel);
    });

    // wrap in DOMContentLoaded
document.addEventListener('DOMContentLoaded', function() {

  // সব toggle-switch নিন (একাধিক কপি থাকতে পারে)
  const toggles = document.querySelectorAll('.toggle-switch');

  // localStorage key prefix (প্রতিটি biodata-র আলাদা key রাখুন)
  const prefix = 'biodata_toggle_';

  // Helper: apply visual state and store
  function applyState(el, state, persist=true) {
    if (state) {
      el.classList.add('active');
      const text = el.querySelector('.toggle-text');
      if (text) text.textContent = 'লাইভ';
    } else {
      el.classList.remove('active');
      const text = el.querySelector('.toggle-text');
      if (text) text.textContent = 'হাইড';
    }
    if (persist) {
      const id = el.dataset.biodataId || 'default';
      localStorage.setItem(prefix + id, state ? 'true' : 'false');
    }
  }

  // init each toggle
  toggles.forEach(toggle => {
    const id = toggle.dataset.biodataId || 'default';
    const saved = localStorage.getItem(prefix + id);

    // যদি সার্ভার-রেন্ডার করে data-approved attribute প্রয়োজন হলে:
    // const serverApproved = toggle.dataset.approved === 'true';
    // এখানে আমরা localStorage + default(true) ব্যবহার করছি (আপনি serverApproved যুক্ত করতে পারবেন)

    let initial;
    if (saved === null) {
      initial = true; // প্রথমবার ON রাখতে চাইলে true, নাহলে false করে দিন
      localStorage.setItem(prefix + id, initial ? 'true' : 'false');
    } else {
      initial = (saved === 'true');
    }

    // apply initial state
    applyState(toggle, initial, false);

    // Click / touch
    toggle.addEventListener('click', function(e) {
      const current = toggle.classList.contains('active');
      applyState(toggle, !current, true);

      // --- এখানে সার্ভারে AJAX কল করতে চাইলে যোগ করুন ---
      // fetch('/api/toggle', {method:'POST', headers:{'Content-Type':'application/json'}, body: JSON.stringify({ id: id, approved: !current })})
      // .then(r => r.json()).then(resp => { /* handle */ }).catch(err => { /* error */ });

    });

    // 키বোর্ড থেকে টগল করার জন্য (accessibility)
    toggle.addEventListener('keydown', function(e) {
      if (e.key === 'Enter' || e.key === ' ' || e.code === 'Space') {
        e.preventDefault();
        toggle.click();
      }
    });

    // (Optional) touchstart listener to improve responsiveness on some mobile browsers
    toggle.addEventListener('touchstart', function(){}, {passive:true});
  });

});


const btnReceived = document.querySelector(".proposal-recieved");
const btnSent = document.querySelector(".proposal-send");

const boxReceived = document.querySelector(".recieved-proposal-content-box");
const boxSent = document.querySelector(".send-proposal-content-box");

btnReceived.addEventListener("click", () => {
  btnReceived.classList.add("active");
  btnSent.classList.remove("active");

  boxReceived.classList.remove("hide");
  boxSent.classList.add("hide");
});

btnSent.addEventListener("click", () => {
  btnSent.classList.add("active");
  btnReceived.classList.remove("active");

  boxSent.classList.remove("hide");
  boxReceived.classList.add("hide");
});

// COUNTDOWN
    // ইংরেজি ডিজিটকে বাংলা ডিজিটে রূপান্তর
    function toBanglaNumber(number) {
        const banglaDigits = '০১২৩৪৫৬৭৮৯';
        return String(number)
            .padStart(2, '0')
            .replace(/\d/g, d => banglaDigits[d]);
    }

    function initCountdown() {
        const TOTAL_MS = 24 * 60 * 60 * 1000; // মোট ২৪ ঘন্টা
        const timers = document.querySelectorAll('.countdown-timer');

        timers.forEach(timer => {
            const startTimeStr = timer.getAttribute('data-start-time');
            if (!startTimeStr) return;

            const startTime = new Date(startTimeStr).getTime();

            function updateTimer() {
                const now = Date.now();

                // কত সময় পেরিয়েছে (নেগেটিভ হলে ০ ধরা হবে)
                let elapsed = now - startTime;
                if (isNaN(elapsed) || elapsed < 0) elapsed = 0;

                // বাকি সময় = ২৪ ঘন্টা - যতটা পেরিয়েছে
                let remaining = TOTAL_MS - elapsed;

                if (remaining <= 0) {
                    timer.textContent = 'সময় শেষ';
                    clearInterval(intervalId);
                    return;
                }

                const hours   = Math.floor(remaining / (1000 * 60 * 60));
                const minutes = Math.floor((remaining % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((remaining % (1000 * 60)) / 1000);

                timer.textContent =
                    toBanglaNumber(hours) + ':' +
                    toBanglaNumber(minutes) + ':' +
                    toBanglaNumber(seconds);
            }

            updateTimer(); // প্রথমবার
            const intervalId = setInterval(updateTimer, 1000); // প্রতি সেকেন্ডে
        });
    }

    document.addEventListener('DOMContentLoaded', initCountdown);

