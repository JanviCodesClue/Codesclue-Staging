// Aos-Animation
let hasScrolled = false;
AOS.init({
  duration: 1000,  // Duration of the animation (in ms)
  once: true,      // Animations should happen only once
});

const nav = document.querySelector('nav');
const navBrand = document.querySelector('.navbar-brand'); // Select navbar brand
const logo = document.querySelector('.nav-logo:nth-of-type(1)'); // First logo (Logo.svg)
const favicon = document.querySelector('.nav-logo:nth-of-type(2)'); // Second logo (favicon.ico)

// Hide favicon by default
favicon.classList.add('d-none');

window.addEventListener('scroll', function () {
  if (window.scrollY > 150) {
    // Toggle logos
    logo.classList.add('d-none');
    logo.classList.remove('d-block');

    favicon.classList.remove('d-none');
    favicon.classList.add('d-block');

    // Add classes to navbar and navbar-brand
    nav.classList.add('w-75', 'scroll-nav-header');
    navBrand.classList.add('w-auto');
  } else {
    // Toggle logos back
    logo.classList.remove('d-none');
    logo.classList.add('d-block');

    favicon.classList.add('d-none');
    favicon.classList.remove('d-block');

    // Remove classes from navbar and navbar-brand
    nav.classList.remove('w-75', 'scroll-nav-header');
    navBrand.classList.remove('w-auto');
  }
});

// Get the button element
const scrollToTopBtn = document.getElementById('scrollToTopBtn');

// Show the button when the user scrolls down 200px
window.addEventListener('scroll', () => {
  if (window.scrollY > 100) {
    scrollToTopBtn.style.display = 'flex';
  } else {
    scrollToTopBtn.style.display = 'none';
  }
});

// Scroll to the top when the button is clicked
scrollToTopBtn.addEventListener('click', () => {
  window.scrollTo({
    top: 0,
    behavior: 'smooth'
  });
});


function countUp() {
  const counters = document.querySelectorAll('.count-rotate-num');

  counters.forEach(counter => {
      const target = +counter.getAttribute('data-bs-target');
      let current = 0; // Always start from 0
      const speed = 2000;  // Total duration in milliseconds
      const interval = 10; // Update interval in milliseconds
      const increment = target / (speed / interval); // Calculate increment step

      function updateCounter() {
          current += increment;
          counter.textContent = Math.ceil(current);

          if (current < target) {
              requestAnimationFrame(updateCounter);
          } else {
              counter.textContent = target; // Ensure final value is exactly target
          }
      }

      updateCounter();
  });
}

// Run countUp on page load
document.addEventListener('DOMContentLoaded', countUp);

// Ensure countUp runs when returning to page from cache
window.addEventListener('pageshow', countUp);

(function () {
  function cycleQuotes(element) {
    var quotes = $(element).children();
    var quoteIndex = 0;
    var fadeInTime = $(element).data('fade-in') || 1000;
    var delayTime = $(element).data('delay') || 2000;
    var fadeOutTime = $(element).data('fade-out') || 1000;

    // Hide all quotes except the first one
    quotes.hide().eq(0).show();

    function showNextQuote() {
      quotes.eq(quoteIndex).fadeOut(fadeOutTime, function () {
        quoteIndex = (quoteIndex + 1) % quotes.length; // Loop back to the first quote
        quotes.eq(quoteIndex).fadeIn(fadeInTime);
      });

      setTimeout(showNextQuote, delayTime + fadeInTime + fadeOutTime);
    }

    setTimeout(showNextQuote, delayTime);
  }

  // Apply to all elements with the class "quotes-container"
  if (typeof $ !== 'undefined') {
    $(".quotes-container").each(function () {
      cycleQuotes(this);
    });
  }

})();

// Wrap jQuery-dependent code in document ready
$(document).ready(function () {
  // Owl Carousel 2
  $('#owl-carousel2').owlCarousel({
    loop: false,
    margin: 30,
    dots: true,
    nav: false,
    items: 3,
    responsive: {
      0: { items: 1 },
      480: { items: 1 },
      768: { items: 2 },
      1130: { items: 3 }
    }
  });

  // Logo Carousel
  $('#owl-logo').owlCarousel({
    loop: true,
    dots: false,
    nav: true,
    items: 4,
    autoplay: true,
    autoplayTimeout: 2000,
    autoplayHoverPause: true,
    responsive: {
      0: { items: 1, nav: false },
      480: { items: 1, nav: false },
      768: { items: 3, nav: false },
      1130: { items: 4, nav: false }
    }
  });

  // Blog Carousel
  $('#owl-blog-content').owlCarousel({
    loop: true,
    dots: false,
    nav: true,
    navText: [
      "<img loading='lazy' src='assets/images/btn-left.svg' alt='btn-left' />",
      "<img loading='lazy' src='assets/images/btn-right.svg' alt='btn-right'/>"
    ],
    items: 1
  });

  // Client Testimonial Carousel
  $('#clientstestimonial').owlCarousel({
    loop: true,
    margin: 30,
    dots: false,
    nav: true,
    navText: [
      "<img loading='lazy' src='assets/images/btn-left.svg' alt='btn-left' />",
      "<img loading='lazy' src='assets/images/btn-right.svg' alt='btn-right'/>"
    ],
    items: 3,
    responsive: {
      0: { items: 1, nav: true },
      480: { items: 1, nav: true },
      768: { items: 2, nav: true },
      1130: { items: 3, nav: true }
    }
  });

  // Owl Carousel 6
  $('#owl-carousel6').owlCarousel({
    loop: false,
    dots: true,
    nav: false,
    items: 1
  });

  // Testimonial Carousel (main)
  $("#testimonial-carousel").owlCarousel({
    loop: true,
    nav: false,
    dots: true,
    autoplay: true,
    autoplayHoverPause: true,
    margin: 30,
    responsive: {
      0: { items: 1 },
      600: { items: 1 },
      1000: { items: 2 }
    }
  });

  // Testimonial Star Carousel
  $("#testimonial-star-carousel").owlCarousel({
    loop: true,
    nav: false,
    dots: true,
    autoplay: true,
    autoplayHoverPause: true,
    margin: 30,
    responsive: {
      0: { items: 1 },
      600: { items: 2 },
      1000: { items: 2 }
    }
  });

  // AI Carousel
  $("#ai-carousel").owlCarousel({
    loop: true,
    nav: false,
    dots: true,
    autoplay: true,
    autoplayHoverPause: true,
    items: 1,
    responsive: {
      0: { items: 1 },
      600: { items: 2 },
      1000: { items: 2 }
    }
  });

  // AI Industry Carousel
  $('#ai-industry-carousel').owlCarousel({
    loop: true,
    margin: 30,
    dots: false,
    nav: false,
    items: 3,
    responsive: {
      0: { items: 1 },
      576: { items: 2 },
      768: { items: 2 },
      1130: { items: 3 }
    }
  });

  // TH Carousel
  $("#th-carousel").owlCarousel({
    loop: true,
    nav: false,
    dots: true,
    autoplay: true,
    items: 4,
    responsive: {
      0: { items: 1 },
      600: { items: 1 },
      1000: { items: 5 }
    }
  });
});

// Disable staging links
document.addEventListener("DOMContentLoaded", function () {
  const links = document.querySelectorAll(".restrictedLink");
  const stagingHostnames = ["staging.codesclue.com", "127.0.0.1"];
  const currentHostname = window.location.hostname.trim();

  if (stagingHostnames.includes(currentHostname)) {
    links.forEach(link => {
      link.removeAttribute("href");
      link.style.cursor = "not-allowed";
      link.setAttribute("title", "This link is disabled in the staging environment.");
    });
  }
});

// Lazy load videos
document.addEventListener("DOMContentLoaded", function () {
  const lazyVideos = [
    { videoId: "gr-video", previewId: "gr-preview-image", containerId: "gr-video-section" },
    { videoId: "therapix-video", previewId: "therapix-preview-image", containerId: "therapix-video-section" }
  ];

  if ("IntersectionObserver" in window) {
    const observer = new IntersectionObserver((entries, obs) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const video = entry.target.querySelector("video");
          const preview = entry.target.querySelector("img");

          if (preview) preview.style.display = "none";
          if (video && video.paused) video.play().catch(() => {});

          obs.unobserve(entry.target);
        }
      });
    }, { threshold: 0.5 });

    lazyVideos.forEach(({ containerId }) => {
      const section = document.getElementById(containerId);
      if (section) observer.observe(section);
    });
  }
});

// Image container rotation
document.addEventListener("DOMContentLoaded", function () {
  const containers = document.querySelectorAll(".image-container");
  containers.forEach(container => {
    const images = container.querySelectorAll("img");
    let current = 0;
    setInterval(() => {
      images[current].classList.remove("active");
      current = (current + 1) % images.length;
      images[current].classList.add("active");
    }, 3000);
  });
});

// Flip cards
document.addEventListener("DOMContentLoaded", () => {
  const cards = document.querySelectorAll(".flip-card");
  cards.forEach((card, index) => {
    setInterval(() => {
      card.classList.toggle("flipped");
    }, 4000 + (index * 100));
  });
});

// AI Tabs
function openTab(tabId) {
  document.querySelectorAll('.ai-tab-content').forEach(tab => {
    tab.style.display = 'none';
  });
  const activeTab = document.getElementById(tabId);
  if (activeTab) activeTab.style.display = 'grid';

  document.querySelectorAll('.nav-button').forEach(btn => btn.classList.remove('active'));
  const clickedButton = document.querySelector(`.nav-button[onclick="openTab('${tabId}')"]`);
  if (clickedButton) clickedButton.classList.add('active');
}
openTab('framework');

document.querySelectorAll('.ai-flip-card').forEach(card => {
  card.addEventListener('click', () => {
    card.classList.toggle('flipped');
  });
});





