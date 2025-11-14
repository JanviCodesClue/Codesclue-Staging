// document.addEventListener("DOMContentLoaded", function () {
//   const config = {
//     slidesToShow: 5,
//     centerMode: true,
//     gap: 20
//   };

//   const galleryImages = [
//     { id: 0, label: "Slide 1", src: "/assets/images/teams/gallery/outing24/codesclue_1.webp" },
//     { id: 1, label: "Slide 2", src: "https://picsum.photos/id/1035/600/400" },
//     { id: 2, label: "Slide 3", src: "https://picsum.photos/id/1015/600/400" },
//     { id: 3, label: "Slide 4", src: "https://picsum.photos/id/1003/600/400" },
//     { id: 4, label: "Slide 5", src: "https://picsum.photos/id/1041/600/400" }
//   ];

//   const sliderTrack = document.getElementById("sliderTrack");
//   if (!sliderTrack) {
//     console.warn("sliderTrack element not found");
//     return;
//   }

//   let currentLogicalIndex = 0;
//   let currentPhysicalIndex = 0;
//   let gallerySlides = [];
//   let isTransitioning = false;

//   let sideSlideSize = 0;
//   let centerSlideSize = 0;
//   let isMobile = window.innerWidth <= 768;

//   function calculateWidths() {
//     const sliderWrapper = document.querySelector(".slider-wrapper");
//     const containerSize = isMobile
//       ? sliderWrapper.offsetHeight
//       : sliderWrapper.offsetWidth;
//     const totalGaps = config.gap * (config.slidesToShow - 1);
//     const availableSize = containerSize - totalGaps;

//     if (config.centerMode) {
//       centerSlideSize = availableSize * 0.4;
//       sideSlideSize = (availableSize - centerSlideSize) / (config.slidesToShow - 1);
//     } else {
//       sideSlideSize = availableSize / config.slidesToShow;
//       centerSlideSize = sideSlideSize;
//     }
//   }

//   function createSlide(item) {
//     const slide = document.createElement("div");
//     slide.className = "slide";
//     slide.dataset.label = item.label;
//     slide.dataset.id = item.id;
//     slide.innerHTML = `<img src="${item.src}" alt="${item.label}">`;
//     return slide;
//   }

//   function buildInfiniteTrack() {
//     sliderTrack.innerHTML = "";
//     calculateWidths();
//     const repeatCount = 20;

//     for (let rep = 0; rep < repeatCount; rep++) {
//       galleryImages.forEach((item) => {
//         const slide = createSlide(item);
//         sliderTrack.appendChild(slide);
//       });
//     }

//     gallerySlides = Array.from(sliderTrack.children);
//     currentPhysicalIndex = Math.floor(gallerySlides.length / 2);
//     currentLogicalIndex = currentPhysicalIndex % galleryImages.length;
//     applyWidths();
//   }

//   function applyWidths() {
//     gallerySlides.forEach((slide, index) => {
//       const isCenter = index === currentPhysicalIndex && config.centerMode;
//       const size = isCenter ? centerSlideSize : sideSlideSize;

//       if (isMobile) {
//         slide.style.height = `${size}px`;
//         slide.style.marginTop = "0px";
//         slide.style.marginBottom = `${config.gap}px`;
//       } else {
//         slide.style.width = `${size}px`;
//         slide.style.height = "300px";
//         slide.style.marginLeft = "0px";
//         slide.style.marginRight = `${config.gap}px`;
//       }
//     });

//     if (gallerySlides.length > 0) {
//       if (isMobile) {
//         gallerySlides[gallerySlides.length - 1].style.marginBottom = "0px";
//       } else {
//         gallerySlides[gallerySlides.length - 1].style.marginRight = "0px";
//       }
//     }
//   }

//   function getCenterOffset(slideIndex) {
//     const sliderWrapper = document.querySelector(".slider-wrapper");
//     const containerCenter = isMobile
//       ? sliderWrapper.offsetHeight / 2
//       : sliderWrapper.offsetWidth / 2;
//     let offset = 0;

//     for (let i = 0; i < slideIndex; i++) {
//       const size = i === currentPhysicalIndex ? centerSlideSize : sideSlideSize;
//       offset += size + config.gap;
//     }

//     const currentSize = slideIndex === currentPhysicalIndex ? centerSlideSize : sideSlideSize;
//     offset += currentSize / 2;

//     return offset - containerCenter;
//   }

//   function updateSlider(animate = true) {
//     if (isTransitioning && animate) return;
//     applyWidths();

//     gallerySlides.forEach((slide) => slide.classList.remove("active"));
//     if (gallerySlides[currentPhysicalIndex] && config.centerMode) {
//       gallerySlides[currentPhysicalIndex].classList.add("active");
//     }

//     const offset = getCenterOffset(currentPhysicalIndex);
//     const direction = isMobile ? "translateY" : "translateX";
//     sliderTrack.style.transition = animate ? "transform 0.6s ease" : "none";
//     sliderTrack.style.transform = `${direction}(-${offset}px)`;

//     if (animate) {
//       isTransitioning = true;
//       setTimeout(() => {
//         isTransitioning = false;
//         resetPositionIfNeeded();
//       }, 600);
//     }
//   }

//   function resetPositionIfNeeded() {
//     const resetThreshold = galleryImages.length * 2;
//     const middlePosition = Math.floor(gallerySlides.length / 2);
//     if (
//       currentPhysicalIndex < resetThreshold ||
//       currentPhysicalIndex > gallerySlides.length - resetThreshold
//     ) {
//       const targetLogical = currentLogicalIndex;
//       currentPhysicalIndex = middlePosition + (targetLogical - (middlePosition % galleryImages.length));
//       updateSlider(false);
//     }
//   }

//   function nextSlide() {
//     if (isTransitioning) return;
//     currentPhysicalIndex++;
//     currentLogicalIndex = (currentLogicalIndex + 1) % galleryImages.length;
//     updateSlider(true);
//   }

//   function prevSlide() {
//     if (isTransitioning) return;
//     currentPhysicalIndex--;
//     currentLogicalIndex = (currentLogicalIndex - 1 + galleryImages.length) % galleryImages.length;
//     updateSlider(true);
//   }

//   function bindEvents() {
//     const nextBtn = document.querySelector(".next-button");
//     const prevBtn = document.querySelector(".prev-button");

//     if (nextBtn) nextBtn.addEventListener("click", nextSlide);
//     if (prevBtn) prevBtn.addEventListener("click", prevSlide);

//     window.addEventListener("keydown", (e) => {
//       if (e.key === "ArrowRight" || e.key === "ArrowDown") nextSlide();
//       else if (e.key === "ArrowLeft" || e.key === "ArrowUp") prevSlide();
//     });

//     window.addEventListener("resize", () => {
//       isMobile = window.innerWidth <= 768;
//       calculateWidths();
//       applyWidths();
//       updateSlider(false);
//     });
//   }

//   buildInfiniteTrack();
//   updateSlider(false);
//   bindEvents();
// });



document.addEventListener("DOMContentLoaded", function () {
  // WordPress से आया हुआ array (functions.php में define किया गया है)
  if (typeof teamData === "undefined" || !teamData.images) {
    console.error("No images found in teamData");
    return;
  }

  const allImagesList = teamData.images; // अब इसमें सारे सही URLs होंगे
  const highlightTrack = document.querySelector(".highlight-track");
  if (!highlightTrack) return;

  let currentGroupIndex = 0;
  const groupSize = 5;

  function showImageGroup() {
    const start = currentGroupIndex * groupSize;
    const end = start + groupSize;
    const currentGroup = allImagesList.slice(start, end);

    if (currentGroup.length < groupSize) {
      currentGroupIndex = 0;
      return showImageGroup();
    }

    highlightTrack.innerHTML = "";

    currentGroup.forEach((src, i) => {
      const img = document.createElement("img");
      img.src = src;
      if (i === Math.floor(groupSize / 2)) {
        img.classList.add("highlight-center");
      }
      highlightTrack.appendChild(img);
    });

    currentGroupIndex++;
  }

  showImageGroup();
  setInterval(showImageGroup, 3000);
});

