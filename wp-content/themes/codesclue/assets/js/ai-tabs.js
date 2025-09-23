function openTab(tabId) {
    // Sab tab-content hide karo
    document.querySelectorAll(".ai-tab-content").forEach(function(tab) {
        tab.style.display = "none";
    });

    // Sab button se active class hatao
    document.querySelectorAll(".nav-button").forEach(function(btn) {
        btn.classList.remove("active");
    });

    // Sirf clicked tab show karo
    var selected = document.getElementById(tabId);
    if (selected) {
        selected.style.display = "flex"; // ya "block" aapke design pe depend karta hai
    }

    // Active class add karo clicked button ko
    if (event && event.currentTarget) {
        event.currentTarget.classList.add("active");
    }
}

// Default tab open karna (optional)
document.addEventListener("DOMContentLoaded", function() {
    openTab("framework"); // page load hone par framework wala visible hoga
});




jQuery(document).ready(function($) {

  // === Function to initialize Owl Carousel ===
  function initOwlCarousel(selector, options) {
    if ($(selector).length) {
      $(selector).owlCarousel(options);
    }
  }

  // === AI Carousel ===
  initOwlCarousel("#ai-carousel", {
    loop: true,
    nav: false,
    dots: true,
    autoplay: true,
    autoplayHoverPause: true,
    items: 1,
    responsive: {
      0:    { items: 1 },
      600:  { items: 2 },
      1000: { items: 2 }
    }
  });

  // === AI Industry Carousel ===
  initOwlCarousel("#ai-industry-carousel", {
    loop: true,
    margin: 30,
    nav: false,
    dots: false,
    items: 3,
    responsive: {
      0:    { items: 1 },
      576:  { items: 2 },
      768:  { items: 2 },
      1130: { items: 3 }
    }
  });

  // === TH Carousel ===
  initOwlCarousel("#th-carousel", {
    loop: true,
    nav: false,
    dots: true,
    autoplay: true,
    items: 4,
    responsive: {
      0:    { items: 1 },
      600:  { items: 1 },
      1000: { items: 5 }
    }
  });

});
