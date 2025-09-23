
document.addEventListener("DOMContentLoaded", function () {
    const counters = document.querySelectorAll(".count-num");
  
    counters.forEach(counter => {
      const updateCount = () => {
        const target = +counter.getAttribute("data-target");
        const speed = 200; // lower = faster
        const increment = target / speed;
        let current = +counter.innerText;
  
        if (current < target) {
          counter.innerText = Math.ceil(current + increment);
          setTimeout(updateCount, 20);
        } else {
          counter.innerText = target;
        }
      };
  
      updateCount();
    });
  });