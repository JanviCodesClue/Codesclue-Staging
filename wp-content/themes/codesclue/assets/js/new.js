

document.addEventListener('DOMContentLoaded', () => {
  let fadeArray_items = document.querySelectorAll(".fade-anim");

  if (fadeArray_items.length > 0) {
    fadeArray_items.forEach((item) => {
      // Remove any opacity or transform styling if applied
      item.style.opacity = "1";
      item.style.transform = "none";
    });
  }
});




  document.addEventListener("DOMContentLoaded", () => {
    const logos = document.getElementById("logos");
    const clone = logos.cloneNode(true);
    document.querySelector(".logo-track").appendChild(clone);

    const totalWidth = logos.offsetWidth;

    gsap.to([logos, clone], {
      x: `-=${totalWidth}`,
      duration: 20,
      ease: "none",
      repeat: -1,
      modifiers: {
        x: gsap.utils.unitize(x => parseFloat(x) % totalWidth)
      }
    });
  });



  document.addEventListener("DOMContentLoaded", function () {
      const cards = document.querySelectorAll(".project-card");

      cards.forEach(card => {
        const video = card.querySelector("video");

        card.addEventListener("mouseenter", () => {
          video.currentTime = 0;
          video.play();
        });

        card.addEventListener("mouseleave", () => {
          video.pause();
        });
      });
    });


    let fadeArray_items = document.querySelectorAll(".fade-anim");
if (fadeArray_items.length > 0) {
  // Check if ScrollTrigger is available before using it
  if (typeof ScrollTrigger !== 'undefined') {
    gsap.registerPlugin(ScrollTrigger);
    const fadeArray = gsap.utils.toArray(".fade-anim");

    // gsap.set(fadeArray, {opacity:0}); // optional: uncomment if needed

    fadeArray.forEach((item, i) => {

      var fade_direction = "bottom";
      var onscroll_value = 1;
      var duration_value = 1.15;
      var fade_offset = 50;
      var delay_value = 0.15;
      var ease_value = "power2.out";
      var rotate_value = 0;

      if (item.getAttribute("data-offset")) {
        fade_offset = item.getAttribute("data-offset");
      }
      if (item.getAttribute("data-duration")) {
        duration_value = item.getAttribute("data-duration");
      }
      if (item.getAttribute("data-direction")) {
        fade_direction = item.getAttribute("data-direction");
      }
      if (item.getAttribute("data-on-scroll")) {
        onscroll_value = item.getAttribute("data-on-scroll");
      }
      if (item.getAttribute("data-delay")) {
        delay_value = item.getAttribute("data-delay");
      }
      if (item.getAttribute("data-ease")) {
        ease_value = item.getAttribute("data-ease");
      }
      if (item.getAttribute("data-rotate")) {
        rotate_value = item.getAttribute("data-rotate");
      }

      let animation_settings = {
        opacity: 0,
        ease: ease_value,
        duration: duration_value,
        delay: delay_value,
        rotate: rotate_value,    // <- add rotation here
      }

      if (fade_direction == "top") {
        animation_settings['y'] = -fade_offset
      }
      if (fade_direction == "left") {
        animation_settings['x'] = -fade_offset
      }
      if (fade_direction == "bottom") {
        animation_settings['y'] = fade_offset
      }
      if (fade_direction == "right") {
        animation_settings['x'] = fade_offset
      }

      if (onscroll_value == 1) {
        animation_settings['scrollTrigger'] = {
          trigger: item,
          start: 'top 85%',
        }
      }
      gsap.from(item, animation_settings);
    });
  } else {
    console.warn('ScrollTrigger not loaded, skipping GSAP animations');
  }
}


// Carousel functionality - only run if elements exist
const track = document.querySelector('.carousel-track');
const slides = document.querySelectorAll('.carousel-slide');

if (track && slides.length > 0) {
  let index = 0; // current group

  function scrollNextGroup() {
    if (track && track.style) {
      index++;
      if (index > slides.length / 3 - 1) index = 0; // reset
      track.style.transform = `translateX(-${index * 100}%)`;
    }
  }

  function scrollPrevGroup() {
    if (track && track.style) {
      index--;
      if (index < 0) index = slides.length / 3 - 1;
      track.style.transform = `translateX(-${index * 100}%)`;
    }
  }

  // Example auto scroll
  setInterval(scrollNextGroup, 3000);
} else {
  // Log for debugging if carousel elements are not found
  console.log('Carousel elements not found, skipping carousel functionality');
}


 $(document).ready(function(){
    // Only activate carousel if more than 2 items
    if ($("#dynamicCarousel .custom-card-project").length > 2) {
      $("#dynamicCarousel").owlCarousel({
        loop: true,
        margin: 20,
        nav: true,
        dots: true,
        autoplay: true,
        autoplayTimeout: 3000,
        responsive:{
          0:{ items:1 },
          600:{ items:2 },
          1000:{ items:3 }
        }
      });
    } else {
      // If 2 or fewer, show static grid
      $("#dynamicCarousel").remove();
      $("#staticLayout").removeClass("d-none");
    }
  });
