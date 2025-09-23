document.addEventListener("DOMContentLoaded", () => {

  // ========== Cannabis Tabs ==========
  const tabItems = document.querySelectorAll('.cannabis-tab-item');
  const rightImg = document.querySelector('.cannabis-active-img');

  if (tabItems.length > 0 && rightImg) {
    tabItems.forEach(item => {
      item.addEventListener('click', function () {

        // remove old active
        document.querySelector('.cannabis-tab-item.active')?.classList.remove('active');

        // add active to clicked tab
        this.classList.add('active');

        // get new image
        let newImg = this.dataset.img;

        // fade out
        rightImg.style.transition = "opacity 0.3s ease";
        rightImg.style.opacity = "0";

        setTimeout(() => {
          rightImg.src = newImg;  // change image
          rightImg.style.opacity = "1"; // fade in
        }, 300);
      });
    });
  }

  // ========== Auto Rotate Circle Images ==========
  const circleImages = document.querySelectorAll('.cannabis-circle-img');
  let currentIndex = 0;

  if (circleImages.length > 0) {
    setInterval(() => {
      // hide current
      circleImages[currentIndex].classList.remove('active');

      // next index
      currentIndex = (currentIndex + 1) % circleImages.length;

      // show next
      circleImages[currentIndex].classList.add('active');
    }, 4000); // every 4 sec
  }

});
