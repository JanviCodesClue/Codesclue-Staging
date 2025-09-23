// Wrap jQuery-dependent code in document ready
$(document).ready(function () {
  // Owl Carousel 2
  $('#owl-carousel2').owlCarousel({
    loop: false,
    margin: 5,
    dots: true,
    nav: false,
    items: 3,
    responsive: {
      0: { items: 1 },
      480: { items: 1 },
      768: { items: 2 },
      115: { items: 3 }
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
      115: { items: 4, nav: false }
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
    margin: 5,
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
      115: { items: 3, nav: true }
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
    margin: 5,
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
    margin: 5,
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
    margin: 5,
    dots: false,
    nav: false,
    items: 3,
    responsive: {
      0: { items: 1 },
      576: { items: 2 },
      768: { items: 2 },
      115: { items: 3 }
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