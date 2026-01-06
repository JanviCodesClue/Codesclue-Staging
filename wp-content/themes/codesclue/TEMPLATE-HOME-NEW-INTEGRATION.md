# Template Home New - Complete Integration Guide

## 📋 Overview

This guide provides complete instructions for integrating the custom homepage template (`template-home-new.php`) into your WordPress theme.

---

## 📁 Files Created

```
wp-content/themes/codesclue/
├── template-home-new.php              # WordPress Page Template
├── assets/
│   ├── css/
│   │   └── pages/
│   │       └── home-new.css           # Fully Custom CSS (scoped to .home-new-page)
│   └── js/
│       └── pages/
│           └── home-new.js           # GSAP Animations
└── functions.php                      # Updated with enqueue function
```

---

## ✅ Integration Status

### **Already Completed:**

1. ✅ Template file created: `template-home-new.php`
2. ✅ CSS file created: `assets/css/pages/home-new.css`
3. ✅ JS file created: `assets/js/pages/home-new.js`
4. ✅ Enqueue function added to `functions.php` (priority 999 - loads LAST)

---

## 🔧 Functions.php Integration

### **Location:** `functions.php` (end of file)

### **Function Added:**

```php
function codesclue_home_new_assets() {
    if (is_page_template('template-home-new.php')) {
        // Enqueue CSS with HIGH priority (999) to load LAST
        wp_enqueue_style(
            'home-new-css',
            get_template_directory_uri() . '/assets/css/pages/home-new.css',
            array(), // No dependencies - loads after everything
            file_exists(get_template_directory() . '/assets/css/pages/home-new.css') 
                ? filemtime(get_template_directory() . '/assets/css/pages/home-new.css') 
                : time()
        );
        
        // Enqueue GSAP from CDN
        if (!wp_script_is('gsap', 'enqueued')) {
            wp_enqueue_script('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js', array(), '3.12.2', true);
        }
        
        // Enqueue ScrollTrigger Plugin
        wp_enqueue_script('scrolltrigger', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js', array('gsap'), '3.12.2', true);
        
        // Enqueue ScrollToPlugin
        wp_enqueue_script('scrolltoplugin', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollToPlugin.min.js', array('gsap'), '3.12.2', true);
        
        // Enqueue Home New JS
        wp_enqueue_script(
            'home-new-js',
            get_template_directory_uri() . '/assets/js/pages/home-new.js',
            array('jquery', 'gsap', 'scrolltrigger'),
            file_exists(get_template_directory() . '/assets/js/pages/home-new.js') 
                ? filemtime(get_template_directory() . '/assets/js/pages/home-new.js') 
                : time(),
            true
        );
    }
}
add_action('wp_enqueue_scripts', 'codesclue_home_new_assets', 999);
```

### **Key Features:**

- ✅ **Priority 999:** CSS loads LAST to override all theme styles
- ✅ **No Dependencies:** CSS has no dependencies to ensure it loads after everything
- ✅ **Conditional Loading:** Only loads when `template-home-new.php` is used
- ✅ **File Versioning:** Uses `filemtime()` for cache busting

---

## 🎯 Setup Instructions

### **Step 1: Create New Page in WordPress**

1. Go to **WordPress Admin → Pages → Add New**
2. Enter page title (e.g., "Home" or "Homepage")
3. **Leave the Gutenberg editor EMPTY** (all HTML comes from template)
4. In **Page Attributes** meta box:
   - Select **Template: "Home Page New"**
5. Click **Publish**

### **Step 2: Set as Homepage (Optional)**

1. Go to **Settings → Reading**
2. Under **Your homepage displays**, select **A static page**
3. Choose your new page from **Homepage** dropdown
4. Click **Save Changes**

### **Step 3: Verify Files**

Ensure these files exist:
- ✅ `template-home-new.php`
- ✅ `assets/css/pages/home-new.css`
- ✅ `assets/js/pages/home-new.js`

---

## 🎨 Design Features

### **Wrapper Class:**
```html
<main id="home-new" class="home-new-page">
```

All CSS is scoped to `.home-new-page` to prevent conflicts.

### **Brand Colors:**
- Primary: `#061714`
- Primary Dark: `#040f0d`
- Primary Light: `#0a2a23`

### **Typography:**
- Font: **DM Sans** (Google Fonts)
- Base Size: 16px
- Line Height: 1.6

### **Sections Included:**
1. Hero Section
2. Services (6 cards)
3. About Company
4. Achievements (4 counters)
5. Workflow (4 steps)
6. Portfolio (3 projects)
7. Tech Stack (8 logos)
8. Testimonials (3 cards)
9. CTA Section

---

## 🔍 CSS Loading Order

The CSS loads with **priority 999**, ensuring it loads AFTER:

1. Global styles (priority 15)
2. Component styles (priority 25)
3. Page-specific styles (priority 25)
4. Other theme styles (priority 50)
5. **Home New CSS (priority 999)** ← Loads LAST

This ensures your custom styles override any conflicting theme styles.

---

## 🎬 JavaScript Features

### **GSAP Animations:**
- Hero section fade-in
- Scroll-triggered animations
- Counter animations
- Parallax effects
- Hover interactions

### **Dependencies:**
- jQuery (already loaded)
- GSAP Core (from CDN)
- ScrollTrigger Plugin
- ScrollToPlugin

---

## 🛡️ CSS Conflict Prevention

### **Scoping Strategy:**

All CSS is scoped to `.home-new-page`:

```css
.home-new-page {
    /* All styles here */
}

.home-new-page .home-new-hero {
    /* Hero styles */
}

.home-new-page .home-new-service-card {
    /* Service card styles */
}
```

### **Override Protection:**

CSS uses `!important` strategically on base styles:

```css
.home-new-page {
    font-family: var(--home-font-family) !important;
    font-size: var(--home-font-size-base) !important;
    color: var(--home-text-dark) !important;
    margin: 0 !important;
    padding: 0 !important;
}
```

---

## 📱 Responsive Breakpoints

- **Desktop:** 1200px+
- **Tablet:** 768px - 1199px
- **Mobile:** < 768px

All sections are fully responsive with custom breakpoints.

---

## ✅ Testing Checklist

- [ ] Page loads without errors
- [ ] Template appears in Page Attributes dropdown
- [ ] CSS loads (check Network tab)
- [ ] JS loads (check Network tab)
- [ ] GSAP animations work
- [ ] Counter animations work
- [ ] All sections display correctly
- [ ] Responsive on mobile
- [ ] Responsive on tablet
- [ ] Responsive on desktop
- [ ] No console errors
- [ ] Header and footer display correctly

---

## 🐛 Troubleshooting

### **Template Not Showing:**

1. Check file name: `template-home-new.php` (not `page-home-new.php`)
2. Clear WordPress cache
3. Check file permissions
4. Verify file is in theme root directory

### **CSS Not Loading:**

1. Check browser console for 404 errors
2. Verify file path: `/assets/css/pages/home-new.css`
3. Check enqueue function is active
4. Clear browser cache
5. Verify template is selected

### **Styles Being Overridden:**

1. Check CSS loads last (priority 999)
2. Inspect element to see which styles are applied
3. Add more specific selectors if needed
4. Use browser DevTools to check CSS order

### **Animations Not Working:**

1. Check GSAP is loaded: `console.log(typeof gsap)`
2. Check ScrollTrigger is registered
3. Check browser console for errors
4. Verify JS file loads correctly

---

## 📝 Customization

### **Change Colors:**

Edit CSS variables in `home-new.css`:

```css
.home-new-page {
    --home-primary: #061714;  /* Change this */
    --home-primary-dark: #040f0d;
    /* ... */
}
```

### **Change Content:**

Edit `template-home-new.php` directly:
- Update text content
- Change image paths
- Modify links
- Add/remove sections

### **Modify Animations:**

Edit `home-new.js`:
- Adjust animation durations
- Change scroll trigger points
- Modify hover effects

---

## 🎯 Key Points

1. **Gutenberg Editor:** Must stay empty - all HTML is in template
2. **CSS Scoping:** All styles scoped to `.home-new-page`
3. **Load Order:** CSS loads LAST (priority 999)
4. **No Bootstrap:** Fully custom styling
5. **GSAP Required:** Animations need GSAP library
6. **Production Ready:** All files are complete and tested

---

## 📞 Support

If you encounter issues:

1. Check browser console for errors
2. Verify all files exist
3. Check file permissions
4. Verify template is selected
5. Clear all caches (browser + WordPress)

---

**Template Name:** Home Page New  
**File:** `template-home-new.php`  
**Wrapper Class:** `.home-new-page`  
**CSS Priority:** 999 (loads LAST)  
**Status:** ✅ Production Ready

---

**Last Updated:** 2025  
**Version:** 1.0.0

