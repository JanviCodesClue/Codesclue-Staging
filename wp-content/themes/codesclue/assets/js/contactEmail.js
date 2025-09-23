const contactForm = document.getElementById("contactForm");
  const toastContainer = document.getElementById("toastContainer");
  const toastMessage = document.getElementById("toastMessage");

  if (contactForm) {
    contactForm.addEventListener("submit", function(event) {
      event.preventDefault();

      const name = document.getElementById("name").value.trim();
      const email = document.getElementById("email").value.trim();
      const phone = document.getElementById("phone").value.trim();
      const message = document.getElementById("message").value.trim();
      const submitButton = contactForm.querySelector("button[type='submit']");

      // Get selected services
      const serviceCheckboxes = document.querySelectorAll("input[name='services[]']:checked");
      const selectedServices = Array.from(serviceCheckboxes).map(cb => cb.value);

      function isValidEmail(email) {
        return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
      }

      if (phone.length < 8 || phone.length > 12) {
        showToast("Phone number must be between 8 to 12 digits.", "danger");
        return;
      }

      if (!isValidEmail(email)) {
        showToast("Please enter a valid email address.", "danger");
        return;
      }

      if (!name || !phone || !email) {
        showToast("Please fill all fields correctly.", "danger");
        return;
      }

      const payload = {
        name,
        phone,
        email,
        message,
        services: selectedServices,
        formtype: "contact"
      };

      submitButton.disabled = true;
      submitButton.innerText = "Submitting...";

      fetch('https://63a4hpijlb.execute-api.eu-north-1.amazonaws.com/dev/contectEmail', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify(payload)
      })
      .then(response => response.json())
      .then(data => {
        showToast("Thank you for contacting us!", "success", true);
        contactForm.reset();
      })
      .catch(error => {
        showToast("Error sending message. Please try again later.", "danger");
        console.error("Error:", error);
      })
      .finally(() => {
        setTimeout(() => {
          submitButton.disabled = false;
          submitButton.innerText = "Send";
        }, 1500);
      });
    });
  }

  // Show Bootstrap Toast Notification with auto-close
  function showToast(message, type, autoClose = false) {
    toastMessage.innerText = message;

    toastContainer.classList.remove("bg-danger", "bg-success");
    toastContainer.classList.add(type === "success" ? "bg-success" : "bg-danger");

    const toast = new bootstrap.Toast(toastContainer);
    toast.show();

    if (autoClose) {
      setTimeout(() => {
        toast.hide();
      }, 3000);
    }
  }