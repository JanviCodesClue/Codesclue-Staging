# WordPress Theme CSS/JS Cleanup Analysis Report

## Executive Summary
This document provides a comprehensive analysis of unused, duplicate, and unnecessary CSS/JS code in the CodesClue WordPress theme.

---

## 1. FILES NOT ENQUEUED (Safe to Delete)

### CSS Files Not Enqueued:
1. **blog.css** - Not referenced in functions.php
2. **code.css** - Not referenced in functions.php
3. **css-animation.css** - Not referenced in functions.php
4. **eagle-bank.css** - Not referenced in functions.php
5. **financial.css** - Not referenced in functions.php
6. **food-service copy.css** - Duplicate file (backup)
7. **header1.css** - Not referenced (header.css is used instead)
8. **hiring copy.css** - Duplicate file (backup)
9. **our-company.css** - Not referenced in functions.php
10. **ridereach copy.css** - Duplicate file (backup)
11. **taxi-booking.css** - Not referenced in functions.php
12. **TrackNtake.css** - Not referenced in functions.php
13. **Cannabis.css** - Not referenced in functions.php
14. **casestudy copy.css** - Duplicate file (backup)

### JS Files Not Enqueued (But Some Loaded Inline):
**Actually Used (Loaded Inline in front-page.php/index.php):**
- **new.js** - Loaded inline in front-page.php and index.php (line 1632/362)
- **scripts.js** - Loaded inline in front-page.php and index.php (line 1634/364) - Contains scroll-to-top, carousels, counters
- **sitemap.js** - Loaded inline in front-page.php and index.php (line 1635/365)
- **ainavtab.js** - Loaded inline in front-page.php and index.php (line 1636/366)
- **cacheBuster.js** - Loaded inline in front-page.php and index.php (line 1637/367)

**NOT Used (Safe to Delete):**
1. **accordian.js** - Not referenced anywhere
2. **advertisement.js** - Not referenced (has initScrollToTop but scripts.js handles it)
3. **ai-tabs.js** - Not referenced (tabs handled in scripts.js)
4. **blog.js** - Not referenced anywhere
5. **bootstrap.bundle.js** - Not used (bootstrap.min.js from CDN is used)
6. **bootstrap.min.js** - Not used (CDN version is used)
7. **candly.widget.js** - Not referenced anywhere
8. **Cannabis.js** - Not referenced anywhere
9. **clutch-widget.js** - Not referenced anywhere
10. **codeshow.js** - Not referenced anywhere
11. **contactEmail.js** - Not referenced (only in functions copy.php)
12. **counter.js** - Not referenced (jquery.rcounter.js is used instead)
13. **custom-carousel.js** - Not referenced (scripts.js handles carousels)
14. **DMCABadgeHelper.min.js** - Not referenced anywhere
15. **financial.js** - Not referenced anywhere
16. **gsap.min.js** - Not referenced (if GSAP needed, should be enqueued properly)
17. **gsapCircle.js** - Not referenced anywhere
18. **header.js** - Not referenced (header2.js is used instead)
19. **header1.js** - Not referenced (header2.js is used instead)
20. **hiringForm.js** - Not referenced (only in functions copy.php)
21. **industries.js** - Not referenced anywhere
22. **jquery-3.6.0.min.js** - Not needed (WordPress provides jQuery)
23. **parallax.js** - Not referenced anywhere
24. **particle.min.js** - Not referenced anywhere
25. **popper.js** - Not needed (Bootstrap bundle includes it)
26. **privacycode.js** - Not referenced anywhere
27. **project.js** - Not referenced anywhere
28. **script-particle.js** - Not referenced anywhere
29. **ScrollTrigger.min.js** - Not referenced (if GSAP needed, should be enqueued properly)
30. **team copy.js** - Duplicate file (backup)
31. **video-fix.js** - Not referenced (scripts.js handles video lazy loading)
32. **video.js** - Not referenced (scripts.js handles video lazy loading)
33. **widget.min.js** - Not referenced anywhere

### Missing Files Referenced:
1. **responsive.css** - Referenced in functions.php but file doesn't exist
2. **scroll-top.js** - Referenced in functions.php but file doesn't exist

---

## 2. DUPLICATE ENQUEUES

### In functions.php:
1. **codesclue-main-style** - Enqueued twice:
   - Line 48: `codesclue_enqueue_styles()` function
   - Line 141: `codesclue_scripts()` function (as 'codesclue-main')
   
2. **testimonial.js** - Enqueued twice:
   - Line 249: `codesclue_fix_testimonial_assets()` function
   - Line 677: Duplicate code block (lines 674-686)

3. **main.js** - Enqueued twice:
   - Line 141: `codesclue_scripts()` function
   - Line 693: `codesclue_load_scripts()` function

4. **owl.carousel.js** - Two different files:
   - `owl.carousel.js` (line 133)
   - `owl.carousel.min.js` (line 242) - Both loaded for testimonials page

---

## 3. UNUSED FUNCTIONS IN JS FILES

### main.js:
1. **initScrollToTop()** - Function is commented out (lines 64-81) but still called on line 16
2. **initCounterOnScroll()** - Function defined but commented out (line 248)
3. **initParallax()** - Function defined but commented out (lines 250-262)
4. **getDeviceKey()** - Function defined but commented out (lines 363-380)
5. **addDeviceClassToHtml()** - Function defined but commented out (lines 382-392)
6. **initCounters()** - Function defined but never called (lines 210-228)

### header2.js:
1. Entire commented-out block (lines 1-151) - Dead code, should be removed

---

## 4. UNUSED CSS SELECTORS

### Analysis Needed:
To properly identify unused CSS selectors, we need to:
1. Scan all PHP template files for class/id usage
2. Compare with CSS selectors
3. Check for dynamically generated classes

**Note:** This requires a more detailed scan of template files.

---

## 5. DEAD CODE IN FUNCTIONS.PHP

1. **Lines 674-686** - Duplicate testimonial.js enqueue (already handled in `codesclue_fix_testimonial_assets()`)
2. **Lines 688-704** - Duplicate main.js enqueue (already handled in `codesclue_scripts()`)
3. **functions copy.php** - Entire backup file should be deleted

---

## 6. RECOMMENDATIONS

### High Priority (Safe to Remove):
1. Delete all "copy" files (backup duplicates)
2. Remove duplicate enqueue functions
3. Remove commented-out code blocks
4. Delete files that are never referenced
5. Fix missing file references (responsive.css, scroll-top.js)

### Medium Priority (Verify Before Removing):
1. Remove unused JS functions (after verifying they're not called dynamically)
2. Remove duplicate owl.carousel enqueues (use one version)
3. Consolidate main.js enqueues

### Low Priority (Requires Testing):
1. CSS selector cleanup (requires template scanning)
2. Remove unused vendor scripts (verify no dynamic loading)

---

## 7. FILES TO DELETE

### CSS Files (15 files):
- blog.css
- code.css
- css-animation.css
- eagle-bank.css
- financial.css
- food-service copy.css
- header1.css
- hiring copy.css
- our-company.css
- ridereach copy.css
- taxi-booking.css
- TrackNtake.css
- Cannabis.css
- casestudy copy.css

### JS Files (38 files):
- accordian.js
- advertisement.js
- ai-tabs.js
- ainavtab.js
- blog.js
- bootstrap.bundle.js
- bootstrap.min.js
- cacheBuster.js
- candly.widget.js
- Cannabis.js
- clutch-widget.js
- codeshow.js
- contactEmail.js
- counter.js
- custom-carousel.js
- DMCABadgeHelper.min.js
- financial.js
- gsap.min.js
- gsapCircle.js
- header.js
- header1.js
- hiringForm.js
- industries.js
- jquery-3.6.0.min.js
- new.js
- parallax.js
- particle.min.js
- popper.js
- privacycode.js
- project.js
- script-particle.js
- scripts.js
- ScrollTrigger.min.js
- sitemap.js
- team copy.js
- video-fix.js
- video.js
- widget.min.js

### PHP Files:
- functions copy.php

---

## 8. CODE CLEANUP NEEDED

### functions.php:
1. Remove lines 674-686 (duplicate testimonial.js)
2. Remove lines 688-704 (duplicate main.js)
3. Fix missing responsive.css reference (line 85)
4. Fix missing scroll-top.js reference (line 290)

### main.js:
1. Remove commented-out code blocks (lines 64-81, 248, 250-262, 363-392)
2. Remove unused initCounters() function or implement it properly
3. Remove unused initScrollToTop() call or implement the function

### header2.js:
1. Remove entire commented-out block (lines 1-151)

---

## 9. ESTIMATED SAVINGS

- **CSS Files:** ~15 files × average 50KB = ~750KB
- **JS Files:** ~38 files × average 30KB = ~1.14MB
- **Total:** ~1.89MB of unused files
- **Code Cleanup:** Additional ~50KB from dead code removal

**Total Estimated Savings: ~1.94MB**

---

## 10. TESTING CHECKLIST

After cleanup, verify:
- [ ] Mobile menu works
- [ ] Testimonial carousel works
- [ ] Scroll-to-top button works
- [ ] Counter animations work
- [ ] All page-specific styles load correctly
- [ ] No console errors
- [ ] All interactive components function properly

---

*Report Generated: 2025-01-27*
*Theme: CodesClue*
*Location: wp-content/themes/codesclue/*

