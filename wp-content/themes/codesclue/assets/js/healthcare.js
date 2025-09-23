document.addEventListener("DOMContentLoaded", () => {
  console.log("Healthcare.js loaded ✅");

  // ========== GSAP / ScrollTrigger Setup ==========
  if (typeof gsap !== "undefined" && typeof ScrollTrigger !== "undefined") {
    gsap.registerPlugin(ScrollTrigger);

    function initGsap() {
      // Kill old triggers before re-initializing
      ScrollTrigger.getAll().forEach(trigger => trigger.kill());

      if (window.innerWidth >= 992) {
        const wrapper = document.querySelector(".healthcare-scroll-wrapper");
        const imgSide = document.querySelector(".healthcare-image-side");

        if (wrapper && imgSide) {
          ScrollTrigger.create({
            trigger: wrapper,
            start: "top top",
            end: () => "+=" + (wrapper.offsetHeight - imgSide.offsetHeight),
            pin: imgSide,
            scrub: true
          });
          console.log("GSAP ScrollTrigger initialized ✅");
        }
      }
    }

    initGsap();
    window.addEventListener("resize", initGsap);
  } else {
    console.warn("GSAP or ScrollTrigger not loaded ❌");
  }

  // ========== Healthcare Hover / Mobile Details ==========
  const healthServiceBoxes = document.querySelectorAll(".health-service-box");
  const healthImageBox = document.getElementById("healthImageBox");
  const healthOverlayText = document.getElementById("healthOverlayText");

  function renderDetails() {
    if (healthServiceBoxes.length === 0) {
      console.warn("No .health-service-box elements found ❌");
      return;
    }

    if (window.innerWidth > 992) {
      // Desktop hover mode
      if (healthImageBox) healthImageBox.style.display = "block";

      healthServiceBoxes.forEach(box => {
        const detail = box.querySelector(".health-service-details");
        if (detail) detail.remove();

        box.onmouseenter = () => {
          const text = box.getAttribute("data-text") || "";
          let items = text.split("--").filter(item => item.trim() !== "");

          let ul = document.createElement("ul");
          ul.classList.add("health-list");
          items.forEach(item => {
            let li = document.createElement("li");
            li.textContent = item.trim();
            ul.appendChild(li);
          });

          if (healthOverlayText) {
            healthOverlayText.innerHTML = "";
            healthOverlayText.appendChild(ul);
          }
          if (healthImageBox) healthImageBox.classList.add("active");
        };

        box.onmouseleave = () => {
          if (healthOverlayText) {
            healthOverlayText.textContent = "Hover on a service to see details";
          }
          if (healthImageBox) healthImageBox.classList.remove("active");
        };
      });
    } else {
      // Mobile inline details
      if (healthImageBox) healthImageBox.style.display = "none";

      healthServiceBoxes.forEach(box => {
        if (!box.querySelector(".health-service-details")) {
          const text = box.getAttribute("data-text") || "";
          let items = text.split("--").filter(item => item.trim() !== "");

          let ul = document.createElement("ul");
          items.forEach(item => {
            let li = document.createElement("li");
            li.textContent = item.trim();
            ul.appendChild(li);
          });

          let detailDiv = document.createElement("div");
          detailDiv.classList.add("health-service-details");
          detailDiv.appendChild(ul);

          box.appendChild(detailDiv);
        }
      });
    }
  }

  renderDetails();

  // ========== Equal Header Height ==========
  function setEqualHeaderHeight(sectionClass) {
    const section = document.querySelector(sectionClass);
    if (!section) return;

    const leftHeaders = section.querySelectorAll("#accordionLeft .accordion-button");
    const rightHeaders = section.querySelectorAll("#accordionRight .accordion-button");

    const maxHeights = [];

    leftHeaders.forEach((header, index) => {
      const rightHeader = rightHeaders[index];
      if (rightHeader) {
        const max = Math.max(header.offsetHeight, rightHeader.offsetHeight);
        maxHeights[index] = max;
      }
    });

    leftHeaders.forEach((header, index) => {
      if (maxHeights[index]) header.style.height = maxHeights[index] + "px";
    });
    rightHeaders.forEach((header, index) => {
      if (maxHeights[index]) rightHeaders[index].style.height = maxHeights[index] + "px";
    });
  }

  // Resize + load handlers
  let resizeTimer;
  window.addEventListener("resize", () => {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(() => {
      document.querySelectorAll(".health-accordion-section .accordion-button")
        .forEach(el => el.style.height = "auto");
      renderDetails();
      setEqualHeaderHeight(".health-accordion-section");
    }, 200);
  });

  window.addEventListener("load", () => setEqualHeaderHeight(".health-accordion-section"));
});
