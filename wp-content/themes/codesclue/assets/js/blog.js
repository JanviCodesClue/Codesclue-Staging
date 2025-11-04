// document.addEventListener("DOMContentLoaded", function () {
//     const filterButtons = document.querySelectorAll(".blog-filter-btn");
//     const blogItems = document.querySelectorAll(".blog-item");

//     function filterBlogs(category) {
//         blogItems.forEach(blog => {
//             const categories = blog.getAttribute("data-category").split(" ");
//             if (category === "all" || categories.includes(category)) {
//                 blog.classList.add("show");
//             } else {
//                 blog.classList.remove("show");
//             }
//         });
//     }

//     filterButtons.forEach(button => {
//         button.addEventListener("click", function () {
//             filterButtons.forEach(btn => btn.classList.remove("active"));
//             this.classList.add("active");
//             filterBlogs(this.getAttribute("data-filter"));
//         });
//     });

//     filterBlogs("all");
// });

document.addEventListener("DOMContentLoaded", function () {
    const filterButtons = document.querySelectorAll(".blog-filter-btn");
    const blogItems = document.querySelectorAll(".blog-item");

    function filterBlogs(category) {
        blogItems.forEach(blog => {
            const parent = blog.closest(".blog-item-add"); // find parent wrapper
            const categories = blog.getAttribute("data-category").split(" ");
            if (category === "all" || categories.includes(category)) {
                blog.classList.add("show");
                parent.style.setProperty("display", "flex", "important"); // show parent
            } else {
                blog.classList.remove("show");
                parent.style.setProperty("display", "none", "important"); // hide parent with !important
            }
        });
    }

    filterButtons.forEach(button => {
        button.addEventListener("click", function () {
            filterButtons.forEach(btn => btn.classList.remove("active"));
            this.classList.add("active");
            filterBlogs(this.getAttribute("data-filter"));
        });
    });

    filterBlogs("all");
});



