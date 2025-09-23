// document.addEventListener("DOMContentLoaded", function () {
//   console.log("Mobile menu script initialized");

//   // Elements
//   const openBtn = document.getElementById("openMenu");
//   const closeBtn = document.getElementById("closeMenu");
//   const mainMenu = document.getElementById("mainMenu");
//   const submenuBtns = document.querySelectorAll(".submenu-btn");
//   const backBtns = document.querySelectorAll(".submenu-back");
//   const allSubmenus = document.querySelectorAll(".mobile-submenu");
//   const allCloseBtns = document.querySelectorAll(".btn-menu");

//   // ✅ SCROLL LOCK/UNLOCK UTILITIES
//   function lockScroll() {
//     const scrollY = window.scrollY;
//     document.body.style.position = 'fixed';
//     document.body.style.top = `-${scrollY}px`;
//     document.body.style.width = '100%';
//     document.body.style.overflow = 'hidden';
//     console.log("Scroll locked at position:", scrollY);
//   }

//   function unlockScroll() {
//     const scrollY = document.body.style.top;
//     document.body.style.position = '';
//     document.body.style.top = '';
//     document.body.style.width = '';
//     document.body.style.overflow = '';
//     window.scrollTo(0, parseInt(scrollY || '0') * -1);
//     console.log("Scroll unlocked, restored to position:", parseInt(scrollY || '0') * -1);
//   }

//   // Open Mobile Menu
//   if (openBtn && mainMenu) {
//     openBtn.addEventListener("click", () => {
//       mainMenu.classList.add("active");
//       lockScroll(); // ✅ Lock scroll when menu opens
//       console.log("Menu opened");
//     });
//   }

//   // Close Mobile Menu - handle all close buttons
//   allCloseBtns.forEach((btn) => {
//     // Skip the open button
//     if (btn.id !== "openMenu") {
//       btn.addEventListener("click", () => {
//         // Check if this is a submenu close button
//         const submenuId = btn.getAttribute("data-close");
//         if (submenuId) {
//           // Close specific submenu
//           const submenu = document.getElementById(submenuId);
//           if (submenu) {
//             submenu.classList.remove("active");
//             console.log("Submenu closed:", submenuId);
//           }
//         } else {
//           // Close main menu
//           mainMenu.classList.remove("active");
//           unlockScroll(); // ✅ Unlock scroll when menu closes
//           closeAllSubmenus();
//           console.log("Menu closed");
//         }
//       });
//     }
//   });

//   // Open Submenu
//   submenuBtns.forEach((btn) => {
//     btn.addEventListener("click", () => {
//       const targetId = btn.getAttribute("data-submenu");
//       const submenu = document.getElementById(targetId);
//       if (submenu) {
//         submenu.classList.add("active");
//         console.log("Submenu opened:", targetId);
//       }
//     });
//   });

//   // Go Back from Submenu
// backBtns.forEach((btn) => {
//   btn.addEventListener("click", () => {
//     const targetId = btn.getAttribute("data-close");
//     const submenu = document.getElementById(targetId);
//     if (submenu) {
//       submenu.classList.remove("active");
//       document.querySelector(".mobile-main-menu").classList.add("active"); // main menu wapas dikhao
//       console.log("Submenu closed:", targetId);
//     }
//   });
// });


//   // Utility to close all submenus
//   function closeAllSubmenus() {
//     allSubmenus.forEach((submenu) => submenu.classList.remove("active"));
//   }

//   // ✅ Handle Escape key
//   document.addEventListener("keydown", (e) => {
//     if (e.key === "Escape") {
//       // Close any open submenu first
//       const openSubmenus = document.querySelectorAll(".mobile-submenu.active");
//       if (openSubmenus.length > 0) {
//         openSubmenus.forEach((submenu) => submenu.classList.remove("active"));
//         console.log("Submenu closed with Escape");
//       } else if (mainMenu && mainMenu.classList.contains("active")) {
//         mainMenu.classList.remove("active");
//         unlockScroll(); // ✅ Unlock scroll when menu closes with Escape
//         closeAllSubmenus();
//         console.log("Menu closed with Escape");
//       }
//     }
//   });

//   // ✅ Handle click outside menu
//   document.addEventListener("click", (e) => {
//     if (mainMenu && mainMenu.classList.contains("active") && 
//         !mainMenu.contains(e.target) && 
//         openBtn && !openBtn.contains(e.target)) {
//       mainMenu.classList.remove("active");
//       unlockScroll(); // ✅ Unlock scroll when menu closes by clicking outside
//       closeAllSubmenus();
//       console.log("Menu closed - clicked outside");
//     }
//   });

//   // ✅ Handle window resize
//   window.addEventListener("resize", () => {
//     if (window.innerWidth >= 1200 && mainMenu && mainMenu.classList.contains("active")) {
//       mainMenu.classList.remove("active");
//       unlockScroll(); // ✅ Unlock scroll when menu closes on resize
//       closeAllSubmenus();
//       console.log("Menu closed - resized to desktop");
//     }
//   });

//   // ✅ Handle page navigation (close menu when user clicks links)
//   document.addEventListener("click", (e) => {
//     if (e.target.tagName === "A" && e.target.href && !e.target.href.includes("#")) {
//       // User is navigating to a new page, close menu
//       if (mainMenu && mainMenu.classList.contains("active")) {
//         mainMenu.classList.remove("active");
//         unlockScroll(); // ✅ Unlock scroll when navigating
//         closeAllSubmenus();
//         console.log("Menu closed - navigation detected");
//       }
//     }
//   });

//   console.log("Mobile menu fully functional with scroll locking");
// });





document.addEventListener("DOMContentLoaded", function () {
  console.log("Mobile menu script initialized");

  // Elements
  const openBtn = document.getElementById("openMenu");
  const closeBtn = document.getElementById("closeMenu");
  const mainMenu = document.getElementById("mainMenu"); // your main overlay menu
  const submenuBtns = document.querySelectorAll(".submenu-btn");
  const backBtns = document.querySelectorAll(".submenu-back");
  const allSubmenus = document.querySelectorAll(".mobile-submenu");
  const allCloseBtns = document.querySelectorAll(".btn-menu");

  // SCROLL LOCK/UNLOCK UTILITIES
  function lockScroll() {
    const scrollY = window.scrollY;
    document.body.style.position = 'fixed';
    document.body.style.top = `-${scrollY}px`;
    document.body.style.width = '100%';
    document.body.style.overflow = 'hidden';
    console.log("Scroll locked at position:", scrollY);
  }

  function unlockScroll() {
    const scrollY = document.body.style.top;
    document.body.style.position = '';
    document.body.style.top = '';
    document.body.style.width = '';
    document.body.style.overflow = '';
    window.scrollTo(0, parseInt(scrollY || '0') * -1);
    console.log("Scroll unlocked, restored to position:", parseInt(scrollY || '0') * -1);
  }

  // Utility to close all submenus
  function closeAllSubmenus() {
    allSubmenus.forEach((submenu) => submenu.classList.remove("active"));
  }

  // Open Mobile Menu
  if (openBtn && mainMenu) {
    openBtn.addEventListener("click", (e) => {
      e.stopPropagation();
      mainMenu.classList.add("active");
      lockScroll(); // Lock scroll when menu opens
      console.log("Menu opened");
    });
  }

  // Close Mobile Menu - handle all close buttons
  allCloseBtns.forEach((btn) => {
    // Skip the open button
    if (btn.id !== "openMenu") {
      btn.addEventListener("click", (e) => {
        // Prevent bubbling to document click handler
        e.stopPropagation();

        // Check if this is a submenu close button (has data-close)
        const submenuId = btn.getAttribute("data-close");
        if (submenuId) {
          // Close specific submenu (this typically is the LEFT 'back' button)
          const submenu = document.getElementById(submenuId);
          if (submenu) {
            submenu.classList.remove("active");
            console.log("Submenu closed (via btn-menu):", submenuId);
          }
          // Show main menu again (safe fallback)
          if (mainMenu) mainMenu.classList.add("active");
        } else {
          // Close main menu (this is the RIGHT 'close' button or other generic close)
          if (mainMenu) mainMenu.classList.remove("active");
          unlockScroll(); // Unlock scroll when menu closes
          closeAllSubmenus();
          console.log("Menu closed (via btn-menu)");
        }
      });
    }
  });

  // Open Submenu
  submenuBtns.forEach((btn) => {
    btn.addEventListener("click", (e) => {
      e.stopPropagation();
      const targetId = btn.getAttribute("data-submenu");
      const submenu = document.getElementById(targetId);
      if (submenu) {
        // hide main menu while submenu is open
        if (mainMenu) mainMenu.classList.remove("active");
        submenu.classList.add("active");
        console.log("Submenu opened:", targetId);
      }
    });
  });

  // Go Back from Submenu — only goes back to main menu (does NOT close overlay)
  backBtns.forEach((btn) => {
    btn.addEventListener("click", (e) => {
      // Important: stop propagation so document-level click handlers don't close the overlay
      e.stopPropagation();

      // Prefer closing the nearest parent submenu
      const parentSubmenu = btn.closest(".mobile-submenu");
      if (parentSubmenu) {
        parentSubmenu.classList.remove("active");
        console.log("Submenu closed (via back):", parentSubmenu.id || "(no id)");
      } else {
        // fallback: if data-close attribute is used
        const targetId = btn.getAttribute("data-close");
        const submenu = document.getElementById(targetId);
        if (submenu) {
          submenu.classList.remove("active");
          console.log("Submenu closed (via back data-close):", targetId);
        }
      }

      // Show main menu again
      if (mainMenu) mainMenu.classList.add("active");
    });
  });

  // Handle Escape key
  document.addEventListener("keydown", (e) => {
    if (e.key === "Escape") {
      const openSubmenus = document.querySelectorAll(".mobile-submenu.active");
      if (openSubmenus.length > 0) {
        openSubmenus.forEach((submenu) => submenu.classList.remove("active"));
        if (mainMenu) mainMenu.classList.add("active");
        console.log("Submenu closed with Escape");
      } else if (mainMenu && mainMenu.classList.contains("active")) {
        mainMenu.classList.remove("active");
        unlockScroll(); // Unlock scroll when menu closes with Escape
        closeAllSubmenus();
        console.log("Menu closed with Escape");
      }
    }
  });

  // Handle click outside menu
  document.addEventListener("click", (e) => {
    if (
      mainMenu &&
      mainMenu.classList.contains("active") &&
      !mainMenu.contains(e.target) &&
      openBtn &&
      !openBtn.contains(e.target)
    ) {
      mainMenu.classList.remove("active");
      unlockScroll();
      closeAllSubmenus();
      console.log("Menu closed - clicked outside");
    }
  });

  // Handle window resize
  window.addEventListener("resize", () => {
    if (window.innerWidth >= 1200 && mainMenu && mainMenu.classList.contains("active")) {
      mainMenu.classList.remove("active");
      unlockScroll();
      closeAllSubmenus();
      console.log("Menu closed - resized to desktop");
    }
  });

  // Handle page navigation (close menu when user clicks links)
  document.addEventListener("click", (e) => {
    if (e.target.tagName === "A" && e.target.href && !e.target.href.includes("#")) {
      if (mainMenu && mainMenu.classList.contains("active")) {
        mainMenu.classList.remove("active");
        unlockScroll();
        closeAllSubmenus();
        console.log("Menu closed - navigation detected");
      }
    }
  });

  console.log("Mobile menu fully functional with scroll locking");
});
