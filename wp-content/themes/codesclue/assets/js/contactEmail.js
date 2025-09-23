const contactForm = document.getElementById("contactForm");
const toastContainer = document.getElementById("toastContainer");
const toastMessage = document.getElementById("toastMessage");

if (contactForm) {
  contactForm.addEventListener("submit", function (event) {
    event.preventDefault();

    const name = document.getElementById("name").value.trim();
    const email = document.getElementById("email").value.trim();
    const phone = document.getElementById("phone").value.trim();
    const message = document.getElementById("message").value.trim();
    const submitButton = contactForm.querySelector("button[type='submit']");

    const serviceCheckboxes = document.querySelectorAll("input[name='services[]']:checked");
    const selectedServices = Array.from(serviceCheckboxes).map((cb) => cb.value);

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

    const payload = new FormData();
    payload.append("action", "send_contact_email"); // WP AJAX action
    payload.append("name", name);
    payload.append("email", email);
    payload.append("phone", phone);
    payload.append("message", message);

    // ✅ send services as array
    selectedServices.forEach((service) => {
      payload.append("services[]", service);
    });

    submitButton.disabled = true;
    submitButton.innerText = "Submitting...";

    fetch(contact_ajax_obj.ajax_url, {
      method: "POST",
      body: payload,
    })
      .then((response) => response.json())
      .then((data) => {
        if (data.success) {
          showToast("✅ Thank you for contacting us!", "success", true);
          contactForm.reset();
        } else {
          showToast(data.data || "❌ Error sending message.", "danger");
        }
      })
      .catch((error) => {
        showToast("❌ Error sending message. Please try again later.", "danger");
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
