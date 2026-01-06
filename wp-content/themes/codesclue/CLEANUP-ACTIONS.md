# Cleanup Actions - Safe Removals

## Phase 1: Delete Unused Files (SAFE)

### CSS Files to Delete (14 files):
1. blog.css
2. code.css
3. css-animation.css
4. eagle-bank.css
5. financial.css
6. food-service copy.css
7. header1.css
8. hiring copy.css
9. our-company.css
10. ridereach copy.css
11. taxi-booking.css
12. TrackNtake.css
13. Cannabis.css
14. casestudy copy.css

### JS Files to Delete (33 files):
1. accordian.js
2. advertisement.js
3. ai-tabs.js
4. blog.js
5. bootstrap.bundle.js
6. bootstrap.min.js
7. candly.widget.js
8. Cannabis.js
9. clutch-widget.js
10. codeshow.js
11. contactEmail.js
12. counter.js
13. custom-carousel.js
14. DMCABadgeHelper.min.js
15. financial.js
16. gsap.min.js
17. gsapCircle.js
18. header.js
19. header1.js
20. hiringForm.js
21. industries.js
22. jquery-3.6.0.min.js
23. parallax.js
24. particle.min.js
25. popper.js
26. privacycode.js
27. project.js
28. script-particle.js
29. ScrollTrigger.min.js
30. team copy.js
31. video-fix.js
32. video.js
33. widget.min.js

### PHP Files to Delete:
1. functions copy.php

---

## Phase 2: Clean Up functions.php

### Remove Duplicate Code:
1. **Lines 674-686**: Remove duplicate testimonial.js enqueue (already in codesclue_fix_testimonial_assets)
2. **Lines 688-704**: Remove duplicate main.js enqueue (already in codesclue_scripts)

### Fix Missing File References:
1. **Line 85**: Remove or comment out responsive.css (file doesn't exist)
2. **Line 290**: Remove scroll-top.js enqueue (file doesn't exist, functionality in scripts.js)

---

## Phase 3: Clean Up JS Files

### main.js:
1. Remove commented-out initScrollToTop() function (lines 64-81)
2. Remove initScrollToTop() call on line 16 (functionality handled by scripts.js)
3. Remove commented-out initCounterOnScroll() (line 248)
4. Remove commented-out initParallax() (lines 250-262)
5. Remove commented-out getDeviceKey() and addDeviceClassToHtml() (lines 363-392)
6. Remove unused initCounters() function (lines 210-228) or implement properly

### header2.js:
1. Remove entire commented-out block (lines 1-151)

---

## Phase 4: Verify After Cleanup

Test the following:
- [ ] Mobile menu works
- [ ] Testimonial carousel works
- [ ] Scroll-to-top button works (handled by scripts.js)
- [ ] Counter animations work
- [ ] All page-specific styles load correctly
- [ ] No console errors
- [ ] All interactive components function properly
- [ ] Owl carousels work
- [ ] AOS animations work

---

## Estimated File Size Savings:
- CSS: ~14 files × 50KB = ~700KB
- JS: ~33 files × 30KB = ~990KB
- PHP: ~1 file × 50KB = ~50KB
- **Total: ~1.74MB**

---

## Notes:
- scripts.js, new.js, sitemap.js, ainavtab.js, and cacheBuster.js are loaded inline in templates, so they are KEPT
- scroll-to-top functionality is handled by scripts.js, not a separate file
- All "copy" files are backup duplicates and safe to delete

