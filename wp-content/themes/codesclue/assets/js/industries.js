document.addEventListener('DOMContentLoaded', () => {
  const cards = document.querySelectorAll('.feature-card');
  const previewBox = document.getElementById('previewBox');

  let hoverTimeout;
  let isHovered = false;

  // ✅ Set default as the first card's detail
  const firstCardTarget = cards[0].getAttribute('data-target');
  const firstContent = document.querySelector(firstCardTarget)?.innerHTML || '';
  previewBox.innerHTML = `<div class="preview-content">${firstContent}</div>`;

  cards.forEach(card => {
    card.addEventListener('mouseenter', () => {
      clearTimeout(hoverTimeout);
      isHovered = true;
      const targetSelector = card.getAttribute('data-target');
      const content = document.querySelector(targetSelector)?.innerHTML || '';
      
      hoverTimeout = setTimeout(() => {
        if (isHovered) {
          previewBox.innerHTML = `<div class="preview-content">${content}</div>`;
        }
      }, 100); // Delay to prevent flicker
    });

    card.addEventListener('mouseleave', () => {
      isHovered = false;
      clearTimeout(hoverTimeout);
    });
  });
});