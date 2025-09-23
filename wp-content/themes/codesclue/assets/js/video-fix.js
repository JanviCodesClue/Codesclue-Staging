document.addEventListener("DOMContentLoaded", function () {
  const video = document.querySelector(".cannabis-bg-video");
  if (video) {
    video.play().catch(() => {
      // Agar autoplay block ho jaye to pehle user touch/click pe play karva do
      document.addEventListener("touchstart", () => {
        video.play();
      }, { once: true });
    });
  }
});
