document.addEventListener("DOMContentLoaded", function () {
  cards.forEach(card => {
  const article = card.querySelector(".blog-item");
  const category = article?.dataset.category || "";

  if (filter === "all" || category.includes(filter)) {
    card.classList.remove("is-hidden");
  } else {
    card.classList.add("is-hidden");
  }
});

});
 console.log("BLOG FILTER JS TEST");
