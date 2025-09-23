document.addEventListener("DOMContentLoaded", function() {
  const toggle = document.getElementById("menuToggle");
  const menu = document.getElementById("navMenu");
  const hasSubs = document.querySelectorAll(".has-sub");

  toggle.addEventListener("click", function() {
    menu.classList.toggle("open");
  });

  hasSubs.forEach(item => {
    const link = item.querySelector("a");
    link.addEventListener("click", function(e) {
      if (window.innerWidth <= 991) {
        e.preventDefault();
        item.classList.toggle("active");
      }
    });
  });
});
