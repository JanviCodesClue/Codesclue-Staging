document.addEventListener("DOMContentLoaded", function () {
    const accordionButtons = document.querySelectorAll(".accordion-button");

    accordionButtons.forEach(button => {
        button.addEventListener("click", function () {
            const target = document.querySelector(this.getAttribute("data-bs-target"));
            
            if (target.classList.contains("show")) {
                target.classList.remove("show");
                this.classList.add("collapsed");
                this.setAttribute("aria-expanded", "false");
            } else {
                target.classList.add("show");
                this.classList.remove("collapsed");
                this.setAttribute("aria-expanded", "true");
            }
        });
    });
});