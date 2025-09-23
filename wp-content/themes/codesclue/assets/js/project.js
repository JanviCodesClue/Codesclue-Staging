document.addEventListener("DOMContentLoaded", function () {
    const filterButtons = document.querySelectorAll(".filter-btn");
    const projects = document.querySelectorAll(".card-portfolio-section");

    function filterProjects(category) {
        projects.forEach(project => {
            const categories = project.getAttribute("data-category").split(",").map(cat => cat.trim());
            if (category === "all" || categories.includes(category)) {
                project.classList.add("show");
            } else {
                project.classList.remove("show");
            }
        });
    }

    filterButtons.forEach(button => {
        button.addEventListener("click", function () {
            filterButtons.forEach(btn => btn.classList.remove("active"));
            this.classList.add("active");
            filterProjects(this.getAttribute("data-filter"));
        });
    });

    // Show all projects initially
    filterProjects("all");
});