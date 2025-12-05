
// my
  document.addEventListener("DOMContentLoaded", function () {
    const menuLinks = document.querySelectorAll('.menu-content-link');
    const currentUrl = location.href.toLowerCase();

    menuLinks.forEach(link => {
      const href = link.getAttribute('href');
      if (href && currentUrl.includes(href.toLowerCase())) {
        // Active ক্লাস অ্যাড করো
        link.classList.add("active");

        // যদি এটা সাবমেনুর মধ্যে থাকে, তাহলে parent `.menu-group` খুঁজে সাবমেনু খোলাও
        const parentGroup = link.closest('.menu-group');
        if (parentGroup) {
          parentGroup.classList.add('menu-open');
        }
      }
    });
  });

// my

// Toggle sidebar submenu

document.addEventListener("DOMContentLoaded", function () {
  const menuGroups = document.querySelectorAll(".menu-group");

  menuGroups.forEach(group => {
    const link = group.querySelector(".menu-content-link");
    const submenu = group.querySelector(".submenu");
    const arrow = group.querySelector(".menu-arrow");

    if (submenu) {
      // শুধু তখনই ক্লিক কাজ করবে যখন submenu আছে
      link.addEventListener("click", function (e) {
        // যদি টার্গেট submenu এর ভেতরের কোনো লিংক হয়, তখন কিছু করো না
        if (e.target.closest(".submenu")) return;

        const isVisible = submenu.style.display === "block";

        // সব সাবমেনু বন্ধ করে দাও
        document.querySelectorAll(".menu-group").forEach(g => {
          const sm = g.querySelector(".submenu");
          const ar = g.querySelector(".menu-arrow");
          if (sm) sm.style.display = "none";
          if (ar) ar.classList.remove("rotate");
        });

        // যদি আগেই খোলা না থাকে, তাহলে খোলো
        if (!isVisible) {
          submenu.style.display = "block";
          if (arrow) arrow.classList.add("rotate");
        }
      });
    }
  });
});


  document.addEventListener("DOMContentLoaded", function () {
    const profile = document.querySelector(".user-profile");
    const dropdown = document.querySelector(".user-profile-dropdown");

    // Dropdown hide initially
    dropdown.style.display = "none";

    profile.addEventListener("click", function (e) {
      e.stopPropagation(); // prevent bubbling to window
      dropdown.style.display = (dropdown.style.display === "none") ? "block" : "none";
    });

    // Hide dropdown if clicked outside
    window.addEventListener("click", function () {
      dropdown.style.display = "none";
    });
  });








  /// FILTER
document.addEventListener("DOMContentLoaded", function () {
  const filterFields = document.querySelectorAll('.filter-field');

  // Hide all dropdowns
  function hideAllDropdowns() {
    document.querySelectorAll('.filter-dropdown').forEach(dropdown => {
      dropdown.style.display = 'none';
    });
  }

  filterFields.forEach(field => {
    const selectedText = field.querySelector('.fillter-selected-text');
    const dropdown = field.querySelector('.filter-dropdown');

    // Toggle dropdown on field click
    field.addEventListener('click', function (e) {
      e.stopPropagation(); // prevent bubbling to window click
      const isVisible = dropdown.style.display === 'block';

      hideAllDropdowns(); // hide others before showing
      dropdown.style.display = isVisible ? 'none' : 'block';
    });

    // Handle dropdown button click
    dropdown.querySelectorAll('button').forEach(button => {
      button.addEventListener('click', function (e) {
        e.stopPropagation();
        selectedText.textContent = this.textContent;
        dropdown.style.display = 'none';
      });
    });
  });

  // Hide dropdown when clicking outside
  window.addEventListener('click', function () {
    hideAllDropdowns();
  });
});


// TOPBAR

const tabs = document.querySelectorAll('.tab');
    const indicator = document.getElementById('indicator');
    const tabContainer = document.getElementById('tabs');

    function moveIndicator(el) {
      const parentRect = tabContainer.getBoundingClientRect();
      const elRect = el.getBoundingClientRect();
      const left = elRect.left - parentRect.left + el.offsetWidth / 2 - 6; // center triangle
      indicator.style.left = `${left}px`;
    }

    tabs.forEach(tab => {
      tab.addEventListener('click', () => {
        tabs.forEach(t => t.classList.remove('active'));
        tab.classList.add('active');
        moveIndicator(tab);
      });
    });

    // Load default active tab indicator
    window.addEventListener('DOMContentLoaded', () => {
      const activeTab = document.querySelector('.tab.active');
      if (activeTab) moveIndicator(activeTab);
    });

    // Responsive reposition on resize
    window.addEventListener('resize', () => {
      const activeTab = document.querySelector('.tab.active');
      if (activeTab) moveIndicator(activeTab);
    });


// OPTION DROPDOWN
document.addEventListener("DOMContentLoaded", function () {
  const dropdowns = document.querySelectorAll(".ap-more-option");

  dropdowns.forEach(drop => {
    const trigger = drop.querySelector(".ap-more-option-item");

    trigger.addEventListener("click", function (e) {
      e.stopPropagation();

      // Close others
      dropdowns.forEach(d => {
        if (d !== drop) d.classList.remove("show");
      });

      // Toggle current
      drop.classList.toggle("show");
    });
  });

  // Outside click will close all
  window.addEventListener("click", function () {
    dropdowns.forEach(drop => {
      drop.classList.remove("show");
    });
  });
});
