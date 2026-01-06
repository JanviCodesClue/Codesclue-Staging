// ================================================================
// TESTIMONIAL PAGE JS - ISOLATED SCOPE
// Only runs on testimonials page to prevent cross-page interference
// ================================================================

// Check if we're on the testimonials page
if (document.body.classList.contains('page-testimonials')) {
// All testimonials
const testimonials = [
  {
    name: "Ethan Fraser", role: "CEO at TFL",
    text: "Seamless, expert delivery of our TLF fitness appon time, on brand, and beyond expectations.We had an exceptional experience working with this team on our project. From the very beginning, they approached the engagement with professionalism, clear communication, and a genuine interest in understanding our vision and goals. Throughout the development process, they were highly responsive, organized, and transparent, providing regular updates, incorporating feedback quickly, and proactively offering solutions when challenges arose. What stood out most was their collaborative spirit and attention to detail. They made us feel like true partners rather than just clients.",
    stars: "★★★★★"
  },
  {
    name: "Mrulay Mistry", role: "CEO at Therapix",
    text: "A very client centric company with incredible top  executives. They have years of experience and outstanding knowledge.Never faced an issue with scheduling meetings, or change notifications.",
    stars: "★★★★★"
  },
  {
    name: "Snakz EU", role: "CEO at Snakz",
    text: "Communication was a key part of this any new features and updates were handled with care and done in a promptly manner. While what we were asking for was not always worded in the correct manner for the I.T. space they always understood what we were asking for.",
    stars: "★★★★★"
  },
  {
    name: "Nico Alexander", role: "CEO at TracknTake",
    text: "Great communication and problem solving Was great to work with Ketan. Always optimistic, very professional and hard worker. Knew how to solve complex problems. Great project manager. Recommend them for web development.",
    stars: "★★★★★"
  },
  {
    name: "Ibrahim al Sulati", role: "CEO at Aazer",
    text: "CodesClue Technologies delivered a high-quality product that met the client's expectations. The team maintained high professionalism and clear communication throughout the engagement. Moreover, they were highly responsive to the client's needs and proactive in problem-solving.",
    stars: "★★★★★"
  },
  {
    name: "Lucas White", role: "CEO at NEXTLIFEBOOK",
    text: "CodesClue built a secure, user-friendly platform for managing digital legacies on NextLifeBook. My overall experience with developing NextLifeBook at CodesClue Technologies has been incredibly fulfilling. We built a secure and intuitive platform that allows users to manage their digital legacies, store essential documents, and share lasting memories. Our team worked diligently to ensure seamless functionality, data security, and an exceptional user experience. The project presented unique challenges that required careful attention to detail, but witnessing the final product helping users plan their legacy made all the effort worthwhile.",
    stars: "★★★★★"
  }
];

// Responsive cards
function getPerPage() {
  return window.innerWidth >= 992 ? 2 : 1;
}

let currentPage = 0;

function renderTestimonials() {
  const wrapper = document.getElementById("reviewsWrapper");
  wrapper.innerHTML = "";

  const perPage = getPerPage();
  const start = currentPage * perPage;
  const end = start + perPage;

  testimonials.slice(start, end).forEach(item => {
    wrapper.innerHTML += `
      <div class="col-lg-6 col-md-12 col-12 mx-auto d-flex align-items-stretch">
        <div class="review-card-v3 w-100">

          <div class="quote-top">
            <img src="${themePath.img}up-q.png">
          </div>

          <div class="review-user-box">
            <div class="review-user-img"></div>
            <div>
              <h4 class="review-user-name">${item.name}</h4>
              <p class="review-user-role">${item.role}</p>
            </div>
          </div>

          <p class="review-text">${item.text}</p>

          <div class="review-stars">${item.stars}</div>

          <div class="quote-bottom">
            <img src="${themePath.img}down-q.png">
          </div>

        </div>
      </div>
    `;
  });
}

document.getElementById("nextBtn").onclick = () => {
  if ((currentPage + 1) * getPerPage() < testimonials.length) {
    currentPage++;
    renderTestimonials();
  }
};

document.getElementById("prevBtn").onclick = () => {
  if (currentPage > 0) {
    currentPage--;
    renderTestimonials();
  }
};

renderTestimonials();

window.addEventListener("resize", () => {
  currentPage = 0;
  renderTestimonials();
});



const goodFirmReviews = [
  {
    name: "Ethan Fraser",
    badge: "★★★★★ 5 out of 5 (GoodFirm)",
    img: themeBase.url + "/assets/images/testimonials/ratting-side.png",
    ratings: [
      { label: "Quality", stars: 5, percent: "100%" },
      { label: "Schedule", stars: 5, percent: "100%" },
      { label: "Reporting", stars: 5, percent: "100%" },
      { label: "Overall Rating", stars: 5, percent: "100%" }
    ]
  },
  {
    name: "Ibrahim al Sulati",
    badge: "★★★★★ 5 out of 5 (GoodFirm)",
    img: themeBase.url + "/assets/images/testimonials/ratting-side.png",
    ratings: [
      { label: "Quality", stars: 5, percent: "100%" },
      { label: "Schedule", stars: 5, percent: "100%" },
      { label: "Cost", stars: 5, percent: "100%" },
      { label: "Willing to Refer", stars: 5, percent: "100%" }
    ]
  },
  {
    name: "Ibrahim al Sulati",
    badge: "★★★★★ 5 out of 5 (GoodFirm)",
    img: themeBase.url + "/assets/images/testimonials/ratting-side.png",
    ratings: [
      { label: "Quality", stars: 5, percent: "100%" },
      { label: "Schedule", stars: 5, percent: "100%" },
      { label: "Cost", stars: 5, percent: "100%" },
      { label: "Willing to Refer", stars: 5, percent: "100%" }
    ]
  }
];

let gfIndex = 0;

function renderGfSlider() {
  const wrap = document.getElementById("gfSlider");
  wrap.innerHTML = "";

  goodFirmReviews.forEach((r, i) => {
    if (i === gfIndex || (window.innerWidth >= 992 && i < gfIndex + 2)) {
      let ratingsHTML = "";
      r.ratings.forEach(rate => {
        ratingsHTML += `
                    <p>${rate.label}
                        <span>${"★".repeat(rate.stars)} &nbsp; ${rate.percent}</span>
                    </p>`;
      });

      wrap.innerHTML += `
    <div class="col-lg-6 col-md-12 col-12">
        <div class="gf-card">
            <div class="gf-left">
                <img src="${r.img}">
            </div>

            <div class="gf-right">
                <h3>${r.name}</h3>
                <div class="gf-badge">${r.badge}</div>
                <div class="gf-rating-table">${ratingsHTML}</div>
            </div>
        </div>
    </div>
`;

    }
  });
}

document.getElementById("gfPrev").onclick = () => {
  gfIndex = (gfIndex - 1 + goodFirmReviews.length) % goodFirmReviews.length;
  renderGfSlider();
};

document.getElementById("gfNext").onclick = () => {
  gfIndex = (gfIndex + 1) % goodFirmReviews.length;
  renderGfSlider();
};

renderGfSlider();
window.addEventListener("resize", renderGfSlider);

} // End of page-testimonials check
