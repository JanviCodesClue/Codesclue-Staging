const serviceBoxes = document.querySelectorAll('.service-box');
  const details = document.querySelectorAll('.service-detail');

  serviceBoxes.forEach(box => {
    box.addEventListener('mouseenter', () => {
      let target = box.getAttribute('data-detail');
      details.forEach(d => d.classList.remove('active'));
      document.getElementById(target).classList.add('active');
    });
  });