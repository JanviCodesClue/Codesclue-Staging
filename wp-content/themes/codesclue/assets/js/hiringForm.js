document.addEventListener("DOMContentLoaded", function () {
    const formMappings = [
        { id: "AndroidhiringForm", type: "android-hiring" },
        { id: "AngularhiringForm", type: "angular-hiring" },
        { id: "JavahiringForm", type: "java-hiring" },
        { id: "ReactNativehiringForm", type: "react-native-hiring" },
        { id: "PhphiringForm", type: "php-hiring" },
        { id: "RoRhiringForm", type: "ror-hiring" },
        { id: "ReactJshiringForm", type: "react-js-hiring" },
        { id: "JShiringForm", type: "js-hiring" },
        { id: "automatedQAhiringForm", type: "automated-qa-hiring" },
        { id: "manualQAhiringForm", type: "manual-qa-hiring" },
        { id: "FlutterhiringForm", type: "flutter-hiring" },
        { id: "iOShiringForm", type: "ios-hiring" },
        { id: "NodejshiringForm", type: "node-js-hiring" }
    ];

    formMappings.forEach(({ id, type }) => handleFormSubmission(id, type));

    function handleFormSubmission(formId, formType) {
        const hiringForm = document.getElementById(formId);
        if (!hiringForm) return;

        hiringForm.addEventListener("submit", async function (event) {
            event.preventDefault();

            const name = hiringForm.querySelector("#name").value.trim();
            const email = hiringForm.querySelector("#email").value.trim();
            const phone = hiringForm.querySelector("#phone").value.trim();
            const selectedServices = Array.from(hiringForm.querySelectorAll(".bagdehire input[type='checkbox']:checked"))
                .map(checkbox => checkbox.value);

            if (phone.length < 8 || phone.length > 12) {
                showToast("Phone number must be between 8 to 12 digits.", "danger");
                return;
            }

            if (!name || !email || !phone || selectedServices.length === 0) {
                showToast("Please fill all fields and select at least one hiring model.", "danger");
                return;
            }

            const payload = { name, email, phone, services: selectedServices, formtype: formType };

            const submitButton = hiringForm.querySelector("button[type='submit']");
            if (submitButton) {
                submitButton.disabled = true;
                submitButton.innerText = "Submitting...";
            }

            try {
                const response = await fetch('https://63a4hpijlb.execute-api.eu-north-1.amazonaws.com/dev/contectEmail', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify(payload)
                });

                const data = await response.json();
                console.log("Email sent:", data);
                showToast("Thank you for contacting us!", "success");

                hiringForm.reset();
                hiringForm.querySelectorAll(".bagdehire input[type='checkbox']").forEach(checkbox => {
                    checkbox.checked = false;
                });

            } catch (error) {
                console.error("Error:", error);
                showToast("There was an error sending your message.", "danger");
            } finally {
                setTimeout(() => {
                    if (submitButton) {
                        submitButton.disabled = false;
                        submitButton.innerText = "Hire Developer";
                    }
                }, 1400);
            }
        });
    }

    function showToast(message, type) {
        const toastMessage = document.getElementById("toastMessage");
        const toastContainer = document.getElementById("toastContainer");

        toastMessage.innerText = message;
        toastContainer.classList.remove("bg-danger", "bg-success");
        toastContainer.classList.add(type === "success" ? "bg-success" : "bg-danger");

        const toast = new bootstrap.Toast(toastContainer);
        toast.show();

        setTimeout(() => {
            toast.hide();
        }, 3000);
    }

    document.querySelectorAll(".bagdehire input[type='checkbox']").forEach(checkbox => {
        checkbox.addEventListener("change", function () {
            this.parentElement.classList.toggle("selected", this.checked);
        });
    });

    function validatePhone(input) {
        input.value = input.value.replace(/\D/g, '');
        if (input.value.length > 12) {
            input.value = input.value.slice(0, 12);
        }
    }
});