// Get elements
const navbarToggler = document.querySelector('.navbar-toggler');
const openIcon = document.querySelector('.open-icon');
const closeIcon = document.querySelector('.close-icon');
const navbarCollapse = document.querySelector('#navbarNav');
const ulNavbar = document.querySelector('.ul-nav');

function toggleNavbarIcons() {
  // Reset icons and navbar visibility
  if (navbarCollapse.classList.contains('show')) {
    openIcon.classList.add('d-none');
    closeIcon.classList.remove('d-none');
    ulNavbar.classList.remove('hide');
  } else {
  
    openIcon.classList.remove('d-none');
    closeIcon.classList.add('d-none');
    ulNavbar.classList.add('hide');
  }

  document.querySelectorAll('.has_submenu.change-hover').forEach(item => {
    item.classList.remove('change-hover');
    item.querySelector('.dropdown-menu')?.classList.remove('show-menu');
  });

  document.querySelectorAll('.nav-link.accordion-open').forEach(item => {
    item.classList.remove('accordion-open');
  });

  document.querySelectorAll('.accordion.show').forEach(item => {
    item.classList.remove('show');
  });

  document.querySelectorAll('.accordion-collapse.show').forEach(item => {
    item.classList.remove('show');
  });

  document.querySelectorAll('.accordion-button').forEach(item => {
    item.classList.add('collapsed');
  });
}

window.addEventListener('scroll', function () {
  const navbarCollapse = document.querySelector('.navbar-collapse');
  if (navbarCollapse.classList.contains('show')) {
    const bsCollapse = bootstrap.Collapse.getInstance(navbarCollapse) 
      || new bootstrap.Collapse(navbarCollapse, { toggle: false });
    bsCollapse.hide();
  }
});


document.addEventListener("DOMContentLoaded", function() {
  const toggle = document.getElementById("menuToggle");
  const menu = document.getElementById("navMenu");

  toggle.addEventListener("click", function() {
    const isOpen = menu.classList.contains("open");
    if (!isOpen && window.innerWidth <= 991) {
      document.body.style.overflow = "hidden";   // disable scroll
    } else {
      document.body.style.overflow = "";          // enable scroll
    }
  });

  // also close on resize/orientation change
  window.addEventListener("resize", function() {
    document.body.style.overflow = "";
  });
  window.addEventListener("orientationchange", function() {
    document.body.style.overflow = "";
  });
});



// Event listener for navbar toggler
navbarToggler.addEventListener('click', function () {
  navbarCollapse.classList.toggle('show');
  toggleNavbarIcons();
});

// Event listener for close icon
closeIcon.addEventListener('click', function () {
  if (navbarCollapse.classList.contains('show')) {
    navbarCollapse.classList.remove('show');
    toggleNavbarIcons();
  }
});
// Close navbar when clicking outside
document.addEventListener("click", function (event) {
  if (!event.target.closest('.navbar') && navbarCollapse.classList.contains('show')) {
    const bsCollapse = bootstrap.Collapse.getOrCreateInstance(navbarCollapse);
    bsCollapse.hide();
    toggleNavbarIcons();
  }
});


// Close navbar when clicking a nav link (except dropdown toggles)
document.querySelectorAll('.nav-link').forEach(link => {
  link.addEventListener('click', function (event) {
    if (!event.target.classList.contains('dropdown-toggle') && navbarCollapse.classList.contains('show')) {
      navbarCollapse.classList.remove('show');
      toggleNavbarIcons();
    }
  });
});

// Ensure correct icon display on page load
document.addEventListener("DOMContentLoaded", function () {
  toggleNavbarIcons();
});



document.addEventListener("DOMContentLoaded", function () {
  let activeDropdown = null;

  function openDropdown(item) {
    if (activeDropdown && activeDropdown !== item) {
      closeDropdown();
    }
    item.classList.add("change-hover");
    const menu = item.querySelector(".dropdown-menu");
    if (menu) menu.classList.add("show-menu");
    activeDropdown = item;
  }

  function closeDropdown() {
    if (activeDropdown) {
      activeDropdown.classList.remove("change-hover");
      const menu = activeDropdown.querySelector(".dropdown-menu");
      if (menu) menu.classList.remove("show-menu");
      activeDropdown = null;
    }
  }

  document.querySelectorAll(".has_submenu").forEach(item => {
    const toggle = item.querySelector(".dropdown-toggle");

    // 🔒 DESKTOP: open on hover
    item.addEventListener("mouseenter", () => {
      if (window.innerWidth >= 992) openDropdown(item);
    });

    item.addEventListener("mouseleave", () => {
      if (window.innerWidth >= 992) closeDropdown();
    });

    // ✅ MOBILE: open on any tap inside item
    item.addEventListener("click", function (e) {
      if (window.innerWidth < 992) {
        const isInsideMenu = e.target.closest(".dropdown-menu");
        if (isInsideMenu) return;

        e.preventDefault();
        const isOpen = item.classList.contains("change-hover");
        closeDropdown();
        if (!isOpen) openDropdown(item);
      }
    });
  });

  // Don't close when clicking inside the dropdown menu
  document.querySelectorAll(".dropdown-menu").forEach(menu => {
    menu.addEventListener("click", e => e.stopPropagation());
  });

  // Close when clicking outside
  document.addEventListener("click", function (e) {
    if (!e.target.closest(".has_submenu")) {
      closeDropdown();
    }
  });

  // Accordion logic
  document.querySelectorAll(".dropdownaccordian, .dropdownServiceaccordian").forEach(button => {
    button.addEventListener("click", function () {
      document.querySelectorAll(".dropdownaccordian, .dropdownServiceaccordian").forEach(btn => {
        if (btn !== this) btn.classList.remove("accordion-open");
      });
      this.classList.toggle("accordion-open");
    });
  });

  // Marquee duplication
  document.querySelectorAll(".marquee-track").forEach(track => {
    const items = Array.from(track.children);
    items.forEach(item => {
      const clone = item.cloneNode(true);
      track.appendChild(clone);
      track.appendChild(clone.cloneNode(true));
    });
  });
});


// Description hover effect
const marqueeTrack = document.getElementById('marqueeTrack');
const items = document.querySelectorAll('.tech-pill');
const descBox = document.getElementById('serviceDescBox');
const descEl = document.getElementById('service-desc');

items.forEach(item => {
  item.addEventListener('mouseenter', () => {
    const title = item.getAttribute('data-title');
    const desc = item.getAttribute('data-desc');
    descEl.textContent = desc;

    const rect = item.getBoundingClientRect();
    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    const scrollLeft = window.pageXOffset || document.documentElement.scrollLeft;

    descBox.style.top = `${rect.top + scrollTop}px`;
    descBox.style.left = `${rect.left + rect.width + 20 + scrollLeft}px`;
    descBox.classList.add('active');
    marqueeTrack.classList.add('stop');
  });

  item.addEventListener('mouseleave', () => {
    descBox.classList.remove('active');
    marqueeTrack.classList.remove('stop');
  });
});



document.addEventListener('DOMContentLoaded', function () {
  const isTouchDevice = 'ontouchstart' in window || navigator.maxTouchPoints > 0;

  if (isTouchDevice) {
    const dropdowns = document.querySelectorAll('.nav-item.dropdown');

    dropdowns.forEach(dropdown => {
      const toggle = dropdown.querySelector('.dropdown-toggle');
      const menu = dropdown.querySelector('.dropdown-menu');

      toggle.addEventListener('click', function (e) {
        e.preventDefault();
        const isOpen = dropdown.classList.contains('show');

        // Close all open dropdowns
        document.querySelectorAll('.nav-item.dropdown.show').forEach(openDropdown => {
          if (openDropdown !== dropdown) {
            openDropdown.classList.remove('show');
            const openMenu = openDropdown.querySelector('.dropdown-menu');
            if (openMenu) openMenu.classList.remove('show');
          }
        });

        if (!isOpen) {
          dropdown.classList.add('show');
          if (menu) menu.classList.add('show');
        } else {
          dropdown.classList.remove('show');
          if (menu) menu.classList.remove('show');
        }
      });
    });

    // Tap outside to close
    document.addEventListener('click', function (e) {
      if (!e.target.closest('.nav-item.dropdown')) {
        document.querySelectorAll('.nav-item.dropdown.show').forEach(dropdown => {
          dropdown.classList.remove('show');
          dropdown.querySelector('.dropdown-menu').classList.remove('show');
        });
      }
    });
  }
});
document.addEventListener('DOMContentLoaded', function () {
  const isMobileView = window.innerWidth < 1400; // Mobile & Tablet

  if (isMobileView) {
    const dropdowns = document.querySelectorAll('.nav-item.dropdown');

    dropdowns.forEach(dropdown => {
      const toggle = dropdown.querySelector('.dropdown-toggle');
      const menu = dropdown.querySelector('.dropdown-menu');

      toggle.addEventListener('click', function (e) {
        e.preventDefault();
        const isOpen = dropdown.classList.contains('show');

        // Close all open dropdowns
        document.querySelectorAll('.nav-item.dropdown.show').forEach(openDropdown => {
          if (openDropdown !== dropdown) {
            openDropdown.classList.remove('show');
            const openMenu = openDropdown.querySelector('.dropdown-menu');
            if (openMenu) openMenu.classList.remove('show');
          }
        });

        // Toggle current dropdown
        if (!isOpen) {
          dropdown.classList.add('show');
          if (menu) menu.classList.add('show');
        } else {
          dropdown.classList.remove('show');
          if (menu) menu.classList.remove('show');
        }
      });
    });

    // Tap outside to close
    document.addEventListener('click', function (e) {
      if (!e.target.closest('.nav-item.dropdown')) {
        document.querySelectorAll('.nav-item.dropdown.show').forEach(dropdown => {
          dropdown.classList.remove('show');
          const menu = dropdown.querySelector('.dropdown-menu');
          if (menu) menu.classList.remove('show');
        });
      }
    });
  }
});
(function () {
  function onReady(callback) {
    if (document.readyState === 'complete' || document.readyState === 'interactive') {
      callback();
    } else {
      document.addEventListener('DOMContentLoaded', callback);
    }
  }

  onReady(function () {
    const dropdown = document.querySelector('.nav-item.dropdown.has_submenu');
    const toggle = dropdown.querySelector('.dropdown-toggle');
    const menu = dropdown.querySelector('.dropdown-menu');

    // Only run this behavior on mobile/tablet
    if (window.innerWidth <= 991) {
      toggle.addEventListener('click', function (e) {
        e.preventDefault();
        const isShown = menu.classList.contains('show');

        // Close any other open menus
        document.querySelectorAll('.dropdown-menu.show').forEach(m => {
          if (m !== menu) m.classList.remove('show');
        });

        // Toggle current
        menu.classList.toggle('show', !isShown);
      });

      // Outside click closes dropdown
      document.addEventListener('click', function (e) {
        if (!e.target.closest('.nav-item.dropdown.has_submenu')) {
          menu.classList.remove('show');
        }
      });
    }
  });
})();


window.addEventListener('resize', function () {
  const navbarCollapse = document.querySelector('.navbar-collapse');
  const navToggler = document.querySelector('.navbar-toggler');
  const ulNavbar = document.querySelector('.navbar-nav');
  const openIcon = document.querySelector('.menu-open-icon');   // replace with your actual selector
  const closeIcon = document.querySelector('.menu-close-icon'); // replace with your actual selector

  const isMobile = window.innerWidth <= 991.98;

  if (!navbarCollapse || !ulNavbar || !navToggler) return; // fail-safe

  if (!isMobile && navbarCollapse.classList.contains('show')) {
    navbarCollapse.classList.remove('show');
    navToggler.classList.add('collapsed');
    navToggler.setAttribute('aria-expanded', 'false');
    ulNavbar.classList.remove('hide');
    openIcon?.classList.remove('d-none');
    closeIcon?.classList.add('d-none');
  } else if (isMobile && navbarCollapse.classList.contains('show')) {
    ulNavbar.classList.remove('hide');
    openIcon?.classList.add('d-none');
    closeIcon?.classList.remove('d-none');
  } else if (isMobile && !navbarCollapse.classList.contains('show')) {
    ulNavbar.classList.add('hide');
    openIcon?.classList.remove('d-none');
    closeIcon?.classList.add('d-none');
  }
});

document.querySelectorAll('.mobile-accordion .nav-link').forEach(link => {
  link.addEventListener('click', function (e) {
    e.preventDefault();

    const currentAccordion = this.closest('.mobile-accordion');
    const currentSubmenu = currentAccordion.querySelector('.submenu');

    // saare submenu band karo
    document.querySelectorAll('.mobile-accordion .submenu').forEach(sub => {
      if (sub !== currentSubmenu) {
        sub.classList.remove('show');
      }
    });

    // current ko toggle karo
    currentSubmenu.classList.toggle('show');
  });
});







document.addEventListener("DOMContentLoaded", function () {
  const navbarCollapse = document.querySelector("#navbarNav");
  const navToggler = document.querySelector(".navbar-toggler");

  function closeBootstrapMenu() {
    const isMobile = window.innerWidth <= 991.98;

    if (!navbarCollapse || !navToggler) return;

    if (isMobile && navbarCollapse.classList.contains("show")) {
      navToggler.click();  // programmatically toggle Bootstrap collapse
      document.body.style.overflow = ""; // unlock page scroll
    }
  }

  // lock scroll on open
  navToggler?.addEventListener("click", function () {
    const isOpen = navbarCollapse.classList.contains("show");
    if (!isOpen) {
      document.body.style.overflow = "hidden";  // lock page scroll
    } else {
      document.body.style.overflow = "";         // unlock page scroll
    }
  });

  // scroll pe close
  window.addEventListener("scroll", function () {
    closeBootstrapMenu();
  }, { passive: true });

  // resize pe close
  window.addEventListener("resize", closeBootstrapMenu);

  // orientationchange pe close
  window.addEventListener("orientationchange", closeBootstrapMenu);
});
 
document.addEventListener("DOMContentLoaded", function () {
  const navbarCollapse = document.getElementById("navbarNav");
  const navToggler = document.querySelector(".navbar-toggler");

  // get Bootstrap Collapse instance
  const bsCollapse = bootstrap.Collapse.getOrCreateInstance(navbarCollapse);

  // scroll pe close
  window.addEventListener("scroll", function () {
    if (navbarCollapse.classList.contains("show")) {
      bsCollapse.hide();                   // collapse menu
      document.body.style.overflow = "";   // unlock scroll
    }
  }, { passive: true });

  // toggler click pe lock/unlock body scroll
  navToggler?.addEventListener("click", function () {
    const isOpen = navbarCollapse.classList.contains("show");
    if (!isOpen) {
      document.body.style.overflow = "hidden";
    } else {
      document.body.style.overflow = "";
    }
  });

  // orientation change pe reload (for iPad)
  window.addEventListener("orientationchange", function () {
    location.reload();
  });
});

document.addEventListener("DOMContentLoaded", function () {
  const navbarCollapse = document.getElementById("navbarNav");
  const navToggler = document.querySelector(".navbar-toggler");
  const bsCollapse = bootstrap.Collapse.getOrCreateInstance(navbarCollapse);

  // toggler click pe scroll lock
  navToggler?.addEventListener("click", function () {
    const isOpen = navbarCollapse.classList.contains("show");
    if (!isOpen) {
      document.body.style.overflow = "hidden";
    } else {
      document.body.style.overflow = "";
    }
  });

  // scroll pe close
  window.addEventListener("scroll", function () {
    if (navbarCollapse.classList.contains("show")) {
      bsCollapse.hide();
      document.body.style.overflow = "";
    }
  }, { passive: true });

  // orientation change pe reload
  window.addEventListener("orientationchange", function () {
    location.reload();
  });

  // nav-link click pe close + redirect fix for iPad
  document.querySelectorAll("#navbarNav .nav-link").forEach(link => {
    link.addEventListener("click", function (e) {
      const href = this.getAttribute("href");
      if (href && href !== "#") {
        e.preventDefault();

        bsCollapse.hide(); // close the menu
        document.body.style.overflow = "";

        // wait for collapse transition to finish, then redirect
        setTimeout(() => {
          window.location.href = href;
        }, 350); // 350ms Bootstrap default transition
      }
    });
  });
});



document.addEventListener("DOMContentLoaded", function () {
  const navbarCollapse = document.getElementById("navbarNav");
  const navToggler = document.querySelector(".navbar-toggler");
  const bsCollapse = bootstrap.Collapse.getOrCreateInstance(navbarCollapse);

  // toggler click pe scroll lock
  navToggler?.addEventListener("click", function () {
    const isOpen = navbarCollapse.classList.contains("show");
    document.body.style.overflow = isOpen ? "" : "hidden";
  });

  // scroll pe menu close sirf portrait me
  window.addEventListener("scroll", function () {
    const isPortrait = window.matchMedia("(orientation: portrait)").matches;
    if (navbarCollapse.classList.contains("show") && isPortrait) {
      bsCollapse.hide();
      document.body.style.overflow = "";
    }
  }, { passive: true });

  // orientation change pe page reload for iPad
  window.addEventListener("orientationchange", function () {
    location.reload();
  });

  // link click pe collapse + redirect
  document.querySelectorAll("#navbarNav .nav-link").forEach(link => {
    link.addEventListener("click", function (e) {
      const href = this.getAttribute("href");
      if (href && href !== "#") {
        e.preventDefault();
        bsCollapse.hide();
        document.body.style.overflow = "";
        setTimeout(() => {
          window.location.href = href;
        }, 350);
      }
    });
  });
});


function forceCloseNavbarOnScroll() {
  const navbarCollapse = document.getElementById("navbarNav");
  const navToggler = document.querySelector(".navbar-toggler");
  if (!navbarCollapse || !navToggler) return;

  const bsCollapse = bootstrap.Collapse.getOrCreateInstance(navbarCollapse);

  window.addEventListener("scroll", function () {
    if (navbarCollapse.classList.contains("show")) {
      bsCollapse.hide();
      navToggler.classList.add("collapsed");
      navToggler.setAttribute("aria-expanded", "false");
      document.body.style.overflow = "";

      // force show collapse block even if reduced-motion CSS applies
      navbarCollapse.style.setProperty("display", "block", "important");
    }
  }, { passive: true });
}

document.addEventListener("DOMContentLoaded", function() {
  forceCloseNavbarOnScroll();
});

window.addEventListener('scroll', function() {
  const navbarCollapse = document.querySelector('.navbar-collapse');
  if (navbarCollapse.classList.contains('show')) {
    // This will properly close the collapse
    const bsCollapse = new bootstrap.Collapse(navbarCollapse, {
      toggle: false
    });
    bsCollapse.hide();
  }
});
