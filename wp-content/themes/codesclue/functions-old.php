<?php
/**
 * CodesClue Theme Functions
 */

if (!defined('ABSPATH')) exit;

/**
 * THEME SETUP
 */
function codesclue_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', [
        'search-form','comment-form','comment-list','gallery','caption'
    ]);
    add_theme_support('custom-logo');
    add_theme_support('custom-background');
    add_theme_support('custom-header');
    add_theme_support('automatic-feed-links');
    add_theme_support('post-formats', [
        'aside','image','video','quote','link','gallery','audio'
    ]);

    register_nav_menus([
        'primary' => __('Primary Menu','codesclue'),
        'footer'  => __('Footer Menu','codesclue'),
        'mobile'  => __('Mobile Menu','codesclue'),
    ]);

    add_image_size('codesclue-thumbnail',350,250,true);
    add_image_size('codesclue-medium',750,500,true);
    add_image_size('codesclue-large',1200,800,true);
    add_image_size('codesclue-hero',1920,1080,true);
}
add_action('after_setup_theme','codesclue_setup');


/**
 * ENQUEUE GLOBAL CSS
 */
function codesclue_enqueue_styles() {

    wp_enqueue_style('codesclue-root-style', get_stylesheet_uri());

    wp_enqueue_style(
        'codesclue-main-style',
        get_stylesheet_directory_uri() . '/assets/css/style.css',
        ['codesclue-root-style'],
        filemtime(get_stylesheet_directory() . '/assets/css/style.css')
    );
}
add_action('wp_enqueue_scripts','codesclue_enqueue_styles',20);


/**
 * MODULAR CSS ENQUEUE - Global & Components
 * Loads global styles and shared components first
 */
function codesclue_enqueue_modular_global() {
    $css_dir = get_stylesheet_directory_uri() . '/assets/css';
    $css_path = get_stylesheet_directory() . '/assets/css';
    
    // 1. Global CSS (Variables & Reset)
    wp_enqueue_style(
        'codesclue-global-variables',
        $css_dir . '/global/variables.css',
        [],
        file_exists($css_path . '/global/variables.css') ? filemtime($css_path . '/global/variables.css') : '1.0.0'
    );
    
    wp_enqueue_style(
        'codesclue-global-reset',
        $css_dir . '/global/reset.css',
        ['codesclue-global-variables'],
        file_exists($css_path . '/global/reset.css') ? filemtime($css_path . '/global/reset.css') : '1.0.0'
    );
    
    // 2. Component CSS (Shared across pages)
    wp_enqueue_style(
        'codesclue-component-header',
        $css_dir . '/components/header.css',
        ['codesclue-global-reset'],
        file_exists($css_path . '/components/header.css') ? filemtime($css_path . '/components/header.css') : '1.0.0'
    );
    
    wp_enqueue_style(
        'codesclue-component-footer',
        $css_dir . '/components/footer.css',
        ['codesclue-component-header'],
        file_exists($css_path . '/components/footer.css') ? filemtime($css_path . '/components/footer.css') : '1.0.0'
    );
    
    wp_enqueue_style(
        'codesclue-component-buttons',
        $css_dir . '/components/buttons.css',
        ['codesclue-component-footer'],
        file_exists($css_path . '/components/buttons.css') ? filemtime($css_path . '/components/buttons.css') : '1.0.0'
    );
    
    wp_enqueue_style(
        'codesclue-component-scroll-to-top',
        $css_dir . '/components/scroll-to-top.css',
        ['codesclue-component-buttons'],
        file_exists($css_path . '/components/scroll-to-top.css') ? filemtime($css_path . '/components/scroll-to-top.css') : '1.0.0'
    );
    
    // CTA component (used on multiple pages)
    wp_enqueue_style(
        'codesclue-component-cta',
        $css_dir . '/components/cta.css',
        ['codesclue-component-scroll-to-top'],
        file_exists($css_path . '/components/cta.css') ? filemtime($css_path . '/components/cta.css') : '1.0.0'
    );
}
add_action('wp_enqueue_scripts','codesclue_enqueue_modular_global',15);


/**
 * MODULAR CSS ENQUEUE - Page-Specific
 * Conditionally loads page-specific CSS
 */
function codesclue_enqueue_modular_pages() {
    $css_dir = get_stylesheet_directory_uri() . '/assets/css/pages';
    $css_path = get_stylesheet_directory() . '/assets/css/pages';
    
    // Home page
    if (is_front_page() || is_page('home')) {
        wp_enqueue_style(
            'codesclue-page-home',
            $css_dir . '/home.css',
            ['codesclue-component-cta'],
            file_exists($css_path . '/home.css') ? filemtime($css_path . '/home.css') : '1.0.0'
        );
    }
    
    // Services pages
    if (is_page(array(
        'services','android','angular','api-testing','auto-mated-testing',
        'css','dotnet','flutter','ios','ipad','js','java','kotlin','laravel',
        'manual-testing','mobile-testing','mongo-db','node-js','performance-testing',
        'php','pwa','react-native','react-js','ror','software-testing',
        'support-testing','vue-js','swift','html-page','cloud-consulting-migrations',
        'devsecops-sre','security-governance','cloud-reporting','application-modernization',
        'genaiops'
    ))) {
        wp_enqueue_style(
            'codesclue-page-services',
            $css_dir . '/services.css',
            ['codesclue-component-cta'],
            file_exists($css_path . '/services.css') ? filemtime($css_path . '/services.css') : '1.0.0'
        );
    }
    
    // Hiring pages
    if (is_page(array(
        'hire-android-developer','hire-react-native-developer','hire-flutter-developer',
        'hire-ios-developer','hire-angular-developer','hire-react-js-developer',
        'hire-javascript-developer','hire-php-developer','hire-node-js-developer',
        'hire-ror-developers','hire-java-developer','hire-dotnet-developer',
        'hire-automated-qa','hire-manual-qa'
    ))) {
        wp_enqueue_style(
            'codesclue-page-hiring',
            $css_dir . '/hiring.css',
            ['codesclue-component-cta'],
            file_exists($css_path . '/hiring.css') ? filemtime($css_path . '/hiring.css') : '1.0.0'
        );
    }
    
    // About page
    if (is_page('about-us') || is_page('our-company')) {
        wp_enqueue_style(
            'codesclue-page-about',
            $css_dir . '/about.css',
            ['codesclue-component-cta'],
            file_exists($css_path . '/about.css') ? filemtime($css_path . '/about.css') : '1.0.0'
        );
    }
    
    // Portfolio page
    if (is_page('our-portfolio')) {
        wp_enqueue_style(
            'codesclue-page-portfolio',
            $css_dir . '/portfolio.css',
            ['codesclue-component-cta'],
            file_exists($css_path . '/portfolio.css') ? filemtime($css_path . '/portfolio.css') : '1.0.0'
        );
    }
    
    // Contact page
    if (is_page('contact-us')) {
        wp_enqueue_style(
            'codesclue-page-contact',
            $css_dir . '/contact.css',
            ['codesclue-component-cta'],
            file_exists($css_path . '/contact.css') ? filemtime($css_path . '/contact.css') : '1.0.0'
        );
    }
    
    // Career page
    if (is_page('career')) {
        wp_enqueue_style(
            'codesclue-page-career',
            $css_dir . '/career.css',
            ['codesclue-component-cta'],
            file_exists($css_path . '/career.css') ? filemtime($css_path . '/career.css') : '1.0.0'
        );
    }
    
    // Case Studies page
    if (is_page('case-studies')) {
        wp_enqueue_style(
            'codesclue-page-case-studies',
            $css_dir . '/case-studies.css',
            ['codesclue-component-cta'],
            file_exists($css_path . '/case-studies.css') ? filemtime($css_path . '/case-studies.css') : '1.0.0'
        );
    }
    
    // Testimonials page
    if (is_page('clinet-testimonials')) {
        wp_enqueue_style(
            'codesclue-page-testimonials',
            $css_dir . '/testimonials.css',
            ['codesclue-component-cta'],
            file_exists($css_path . '/testimonials.css') ? filemtime($css_path . '/testimonials.css') : '1.0.0'
        );
    }
    
    // Team page
    if (is_page('meet-our-team')) {
        wp_enqueue_style(
            'codesclue-page-team',
            $css_dir . '/team.css',
            ['codesclue-component-cta'],
            file_exists($css_path . '/team.css') ? filemtime($css_path . '/team.css') : '1.0.0'
        );
    }
    
    // Industries pages
    if (is_page('ecommerce')) {
        wp_enqueue_style(
            'codesclue-page-industries',
            $css_dir . '/industries.css',
            ['codesclue-component-cta'],
            file_exists($css_path . '/industries.css') ? filemtime($css_path . '/industries.css') : '1.0.0'
        );
    }
    
    // Projects pages
    if (is_page(array('greenreleaf','therapix','project'))) {
        wp_enqueue_style(
            'codesclue-page-projects',
            $css_dir . '/projects.css',
            ['codesclue-component-cta'],
            file_exists($css_path . '/projects.css') ? filemtime($css_path . '/projects.css') : '1.0.0'
        );
    }



    // AI page
    if (is_page('ai-software-development') || is_page('aipage')) {
        wp_enqueue_style(
            'codesclue-page-aipage',
            $css_dir . '/aipage.css',
            ['codesclue-component-cta'],
            file_exists($css_path . '/aipage.css') ? filemtime($css_path . '/aipage.css') : '1.0.0'
        );
    }
    
    // Home New Page (Arolax Inspired) - template-home-new.php
    // Note: CSS is loaded separately with high priority to ensure it loads LAST
    // See codesclue_home_new_assets() function below
    
    // ================================================================
    // INDUSTRY PAGES - ISOLATED CSS ENQUEUE
    // Each industry page loads ONLY its own CSS with ZERO dependency
    // NOTE: Industry CSS files are in /assets/css/ (root), not /pages/
    // ================================================================
    
    // Industry CSS directory (root, not pages subdirectory)
    $industry_css_dir = get_stylesheet_directory_uri() . '/assets/css';
    $industry_css_path = get_stylesheet_directory() . '/assets/css';
    
    // Advertisement Industry
    if (is_page_template('industries/advertisement.php')) {
        wp_enqueue_style(
            'industry-advertisement',
            $industry_css_dir . '/advertisement.css',
            ['codesclue-component-cta'],
            file_exists($industry_css_path . '/advertisement.css') ? filemtime($industry_css_path . '/advertisement.css') : '1.0.0'
        );
    }
    
       if (is_page('trackntake')) {
        wp_enqueue_style('codesclue-trackntake', get_template_directory_uri() . '/assets/css/TrackNtake.css', array(), '1.0.0');
    }

         if (is_page('ride-reach')) {
        wp_enqueue_style('codesclue-ride-reach', get_template_directory_uri() . '/assets/css/ridereach.css', array(), '1.0.0');
    }

    // Banking Industry
    if (is_page_template('industries/banking.php')) {
        wp_enqueue_style(
            'industry-banking',
            $industry_css_dir . '/banking.css',
            ['codesclue-component-cta'],
            file_exists($industry_css_path . '/banking.css') ? filemtime($industry_css_path . '/banking.css') : '1.0.0'
        );
    }
    
    // Cannabis Industry
    if (is_page_template('industries/cannabis.php')) {
        wp_enqueue_style(
            'industry-cannabis',
            $industry_css_dir . '/cannabis.css',
            ['codesclue-component-cta'],
            file_exists($industry_css_path . '/cannabis.css') ? filemtime($industry_css_path . '/cannabis.css') : '1.0.0'
        );
    }
    
    // Ecommerce Industry
    if (is_page_template('industries/ecommerce.php')) {
        wp_enqueue_style(
            'industry-ecommerce',
            $industry_css_dir . '/ecommerce.css',
            ['codesclue-component-cta'],
            file_exists($industry_css_path . '/ecommerce.css') ? filemtime($industry_css_path . '/ecommerce.css') : '1.0.0'
        );
    }
    
    // Financial Industry
    if (is_page_template('industries/financial.php')) {
        wp_enqueue_style(
            'industry-financial',
            $industry_css_dir . '/financial.css',
            ['codesclue-component-cta'],
            file_exists($industry_css_path . '/financial.css') ? filemtime($industry_css_path . '/financial.css') : '1.0.0'
        );
    }
    
    // Food Service Industry
    if (is_page_template('industries/food-service.php')) {
        wp_enqueue_style(
            'industry-food-service',
            $industry_css_dir . '/food-service.css',
            ['codesclue-component-cta'],
            file_exists($industry_css_path . '/food-service.css') ? filemtime($industry_css_path . '/food-service.css') : '1.0.0'
        );
    }
    
    // Healthcare Industry
    if (is_page_template('industries/healthcare.php')) {
        wp_enqueue_style(
            'industry-healthcare',
            $industry_css_dir . '/healthcare.css',
            ['codesclue-component-cta'],
            file_exists($industry_css_path . '/healthcare.css') ? filemtime($industry_css_path . '/healthcare.css') : '1.0.0'
        );
    }
    
    // Manufacturing Industry
    if (is_page_template('industries/manufacturing.php')) {
        wp_enqueue_style(
            'industry-manufacturing',
            $industry_css_dir . '/manufacturing.css',
            ['codesclue-component-cta'],
            file_exists($industry_css_path . '/manufacturing.css') ? filemtime($industry_css_path . '/manufacturing.css') : '1.0.0'
        );
    }
    
    // Media and Entertainment Industry
    if (is_page_template('industries/media-and-entertainment.php')) {
        wp_enqueue_style(
            'industry-media-entertainment',
            $industry_css_dir . '/media.css',
            ['codesclue-component-cta'],
            file_exists($industry_css_path . '/media.css') ? filemtime($industry_css_path . '/media.css') : '1.0.0'
        );
    }
    
    // Taxi Booking Industry
    if (is_page_template('industries/taxi-booking.php')) {
        wp_enqueue_style(
            'industry-taxi-booking',
            $industry_css_dir . '/taxi-booking.css',
            ['codesclue-component-cta'],
            file_exists($industry_css_path . '/taxi-booking.css') ? filemtime($industry_css_path . '/taxi-booking.css') : '1.0.0'
        );
    }

    // Accounting Industry
    
}
add_action('wp_enqueue_scripts','codesclue_enqueue_modular_pages',25);


/**
 * MOVE MAIN STYLE LAST
 */
function codesclue_move_main_style_last() {
    global $wp_styles;
    $h = 'codesclue-main-style';

    if (!empty($wp_styles->queue) && isset($wp_styles->registered[$h])) {
        $pos = array_search($h,$wp_styles->queue);
        if ($pos !== false) {
            unset($wp_styles->queue[$pos]);
            $wp_styles->queue[] = $h;
        }
    }
}
add_action('wp_print_styles','codesclue_move_main_style_last',PHP_INT_MAX);


/**
 * MAIN SCRIPT + STYLE ENQUEUE
 */
function codesclue_scripts() {

    // GLOBAL CSS
    wp_enqueue_style('bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css');
    wp_enqueue_style('font-awesome','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css');
    wp_enqueue_style('bootstrap-icons','https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css');

    wp_enqueue_style('codesclue-style', get_stylesheet_uri());
    // responsive.css file doesn't exist - removed to prevent 404 errors
    // wp_enqueue_style('responsive-css', get_template_directory_uri().'/assets/css/responsive.css');
    
    // NOTE: Header, footer, and other global CSS are now loaded via codesclue_enqueue_modular_global()
    // NOTE: Page-specific CSS is now loaded via codesclue_enqueue_modular_pages()
    // Removed duplicate enqueues to prevent conflicts and ensure proper isolation

    wp_enqueue_style('aos-css', get_template_directory_uri().'/assets/css/aos.css');
    wp_enqueue_style('owl-carousel-css', get_template_directory_uri().'/assets/css/owl.carousel.min.css');
    wp_enqueue_style('owl-theme-css', get_template_directory_uri().'/assets/css/owl.theme.default.css');
    wp_enqueue_style('codesclue-fonts', get_template_directory_uri().'/assets/css/font.css');
    
    // Additional global CSS files (if needed)
    wp_enqueue_style('codesclue-new', get_template_directory_uri().'/assets/css/new.css');
    
    // GLOBAL JS
    wp_enqueue_script('jquery');
    wp_enqueue_script('owl-carousel', get_template_directory_uri().'/assets/js/owl.carousel.js', ['jquery'], null, true);
    wp_enqueue_script('waypoints', get_template_directory_uri().'/assets/js/jquery.waypoints.js',['jquery'],null,true);
    wp_enqueue_script('rcounter', get_template_directory_uri().'/assets/js/jquery.rcounter.js',['jquery'],null,true);
    wp_enqueue_script('aos-animation', get_template_directory_uri().'/assets/js/aos-animation.js',[],null,true);
    
    // Home New Page - GSAP and Animations
    // Note: JS is loaded separately in codesclue_home_new_assets() function below

    wp_enqueue_script('bootstrap-js','https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js',['jquery'],null,true);

    wp_enqueue_script('header2', get_template_directory_uri().'/assets/js/header2.js',['jquery','bootstrap-js'],null,true);
    wp_enqueue_script('codesclue-main', get_template_directory_uri().'/assets/js/main.js',['jquery'],null,true);

    // Scroll-to-top functionality is handled by scripts.js (loaded inline in templates)

}
add_action('wp_enqueue_scripts','codesclue_scripts');
/* ================================================================
   PAGE-SPECIFIC CSS CONTINUED
   (No UI change — only same enqueue order)
================================================================= */

/**
 * ADDITIONAL PAGE-SPECIFIC ENQUEUES
 * NOTE: Main page CSS is handled by codesclue_enqueue_modular_pages()
 * This function handles additional page-specific resources (JS, etc.)
 */
function codesclue_scripts_more() {
    // Team page JS (page CSS is loaded via modular system)
    if (is_page('meet-our-team')) {
        wp_enqueue_script('team-js', get_template_directory_uri().'/assets/js/team.js', [], null, true);
        wp_localize_script('team-js', 'themeData', [
            'themeUri' => get_template_directory_uri()
        ]);
    }
    
    // NOTE: All page-specific CSS is now loaded via codesclue_enqueue_modular_pages()
    // Removed duplicate CSS enqueues to ensure proper isolation
}
add_action('wp_enqueue_scripts','codesclue_scripts_more',30);



/* =================================================================
   TESTIMONIAL FIX — (THIS WAS YOUR MAIN ISSUE)
   themePath.img now works 100% in testimonial.js
=================================================================== */

function codesclue_fix_testimonial_assets() {

    if (is_page('clinet-testimonials')) {

        // Load Owl
        wp_enqueue_script(
            'owl-carousel-js',
            get_template_directory_uri() . '/assets/js/owl.carousel.min.js',
            ['jquery'], '2.3.4', true
        );

        // Load testimonial JS
        wp_enqueue_script(
            'testimonial-js',
            get_template_directory_uri() . '/assets/js/testimonial.js',
            ['jquery','owl-carousel-js'],
            '1.0.0', true
        );

        // FIX: themePath for images
        wp_localize_script('testimonial-js', 'themePath', [
            'img' => get_template_directory_uri() . '/assets/images/testimonials/'
        ]);
    }
}
add_action('wp_enqueue_scripts','codesclue_fix_testimonial_assets',40);



/* ======================================================
   FIX MISSING TEXTURE (404 ERROR)
======================================================= */

function codesclue_fix_missing_texture() {

    $texture = get_template_directory() . '/assets/images/codesclue_texture.webp';

    // Only load CSS if texture exists
    if (!file_exists($texture)) {
        // fallback: remove background
        wp_add_inline_style('codesclue-footer', '.footer-bg{ background-image:none !important; }');
    }
}
add_action('wp_enqueue_scripts','codesclue_fix_missing_texture',50);



function codesclue_custom_post_types() {

    // SERVICES
    register_post_type('services', [
        'labels' => [
            'name' => __('Services','codesclue'),
            'singular_name' => __('Service','codesclue'),
        ],
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-admin-tools',
        'supports' => ['title','editor','thumbnail','excerpt'],
        'rewrite' => ['slug'=>'services'],
    ]);

    // PORTFOLIO
    register_post_type('portfolio', [
        'labels' => [
            'name' => __('Portfolio','codesclue'),
            'singular_name' => __('Portfolio Item','codesclue'),
        ],
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-portfolio',
        'supports' => ['title','editor','thumbnail','excerpt'],
        'rewrite' => ['slug'=>'portfolio'],
    ]);

    // TEAM
    register_post_type('team', [
        'labels' => [
            'name' => __('Team','codesclue'),
            'singular_name' => __('Team Member','codesclue'),
        ],
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-groups',
        'supports' => ['title','editor','thumbnail','excerpt'],
        'rewrite' => ['slug'=>'team'],
    ]);

    // TESTIMONIALS
    register_post_type('testimonials', [
        'labels' => [
            'name' => __('Testimonials','codesclue'),
            'singular_name' => __('Testimonial','codesclue'),
        ],
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-format-quote',
        'supports' => ['title','editor','thumbnail','excerpt'],
        'rewrite' => ['slug'=>'testimonials'],
    ]);
}
add_action('init','codesclue_custom_post_types');



/* ================================================================
   CUSTOM TAXONOMIES
================================================================= */

function codesclue_custom_taxonomies() {

    register_taxonomy('service_category','services',[
        'labels'=>['name'=>__('Service Categories','codesclue')],
        'hierarchical'=>true,
        'show_admin_column'=>true,
        'rewrite'=>['slug'=>'service-category']
    ]);

    register_taxonomy('portfolio_category','portfolio',[
        'labels'=>['name'=>__('Portfolio Categories','codesclue')],
        'hierarchical'=>true,
        'show_admin_column'=>true,
        'rewrite'=>['slug'=>'portfolio-category']
    ]);

    register_taxonomy('team_department','team',[
        'labels'=>['name'=>__('Departments','codesclue')],
        'hierarchical'=>true,
        'show_admin_column'=>true,
        'rewrite'=>['slug'=>'department']
    ]);
}
add_action('init','codesclue_custom_taxonomies');



/* ================================================================
   META BOXES
================================================================= */

function codesclue_add_meta_boxes() {

    add_meta_box('service_details','Service Details','codesclue_service_meta','services','normal','high');
    add_meta_box('portfolio_details','Portfolio Details','codesclue_portfolio_meta','portfolio','normal','high');
    add_meta_box('team_details','Team Member Details','codesclue_team_meta','team','normal','high');
    add_meta_box('testimonial_details','Testimonial Details','codesclue_testimonial_meta','testimonials','normal','high');

}
add_action('add_meta_boxes','codesclue_add_meta_boxes');



/* ================================================================
   META BOX CALLBACKS
================================================================= */

// SERVICE META BOX
function codesclue_service_meta($post){
    wp_nonce_field('codesclue_meta_save','codesclue_meta_nonce');

    $icon = get_post_meta($post->ID,'service_icon',true);
    $link = get_post_meta($post->ID,'service_link',true);
    $order = get_post_meta($post->ID,'service_order',true);

    echo '<table class="form-table">
        <tr><th>Icon</th><td><input type="text" name="service_icon" value="'.$icon.'" class="regular-text"></td></tr>
        <tr><th>Link</th><td><input type="url" name="service_link" value="'.$link.'" class="regular-text"></td></tr>
        <tr><th>Order</th><td><input type="number" name="service_order" value="'.$order.'" class="small-text"></td></tr>
    </table>';
}


// PORTFOLIO META BOX
function codesclue_portfolio_meta($post){
    wp_nonce_field('codesclue_meta_save','codesclue_meta_nonce');

    $client = get_post_meta($post->ID,'portfolio_client',true);
    $tech = get_post_meta($post->ID,'portfolio_technology',true);
    $url = get_post_meta($post->ID,'portfolio_url',true);
    $gallery = get_post_meta($post->ID,'portfolio_gallery',true);

    echo '<table class="form-table">
        <tr><th>Client</th><td><input type="text" name="portfolio_client" value="'.$client.'" class="regular-text"></td></tr>
        <tr><th>Technologies</th><td><input type="text" name="portfolio_technology" value="'.$tech.'" class="regular-text"></td></tr>
        <tr><th>URL</th><td><input type="url" name="portfolio_url" value="'.$url.'" class="regular-text"></td></tr>
        <tr><th>Gallery IDs</th><td><input type="text" name="portfolio_gallery" value="'.$gallery.'" class="regular-text"></td></tr>
    </table>';
}


// TEAM META BOX
function codesclue_team_meta($post){
    wp_nonce_field('codesclue_meta_save','codesclue_meta_nonce');

    $pos = get_post_meta($post->ID,'team_position',true);
    $email = get_post_meta($post->ID,'team_email',true);
    $linkedin = get_post_meta($post->ID,'team_linkedin',true);
    $twitter = get_post_meta($post->ID,'team_twitter',true);

    echo '<table class="form-table">
        <tr><th>Position</th><td><input type="text" name="team_position" value="'.$pos.'" class="regular-text"></td></tr>
        <tr><th>Email</th><td><input type="email" name="team_email" value="'.$email.'" class="regular-text"></td></tr>
        <tr><th>LinkedIn</th><td><input type="url" name="team_linkedin" value="'.$linkedin.'" class="regular-text"></td></tr>
        <tr><th>Twitter</th><td><input type="url" name="team_twitter" value="'.$twitter.'" class="regular-text"></td></tr>
    </table>';
}


// TESTIMONIAL META BOX
function codesclue_testimonial_meta($post){
    wp_nonce_field('codesclue_meta_save','codesclue_meta_nonce');

    $company = get_post_meta($post->ID,'testimonial_company',true);
    $pos = get_post_meta($post->ID,'testimonial_position',true);
    $rating = get_post_meta($post->ID,'testimonial_rating',true);

    echo '<table class="form-table">
        <tr><th>Company</th><td><input type="text" name="testimonial_company" value="'.$company.'" class="regular-text"></td></tr>
        <tr><th>Position</th><td><input type="text" name="testimonial_position" value="'.$pos.'" class="regular-text"></td></tr>
        <tr><th>Rating</th><td><input type="number" min="1" max="5" name="testimonial_rating" value="'.$rating.'" class="small-text"></td></tr>
    </table>';
}
/* ================================================================
   SAVE META BOX DATA
================================================================= */

function codesclue_save_meta_box_data($post_id){

    if (!isset($_POST['codesclue_meta_nonce']) ||
        !wp_verify_nonce($_POST['codesclue_meta_nonce'],'codesclue_meta_save')) {
        return;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;

    if (!current_user_can('edit_post',$post_id)) return;

    // SERVICE
    if(isset($_POST['service_icon'])){
        update_post_meta($post_id,'service_icon',sanitize_text_field($_POST['service_icon']));
    }
    if(isset($_POST['service_link'])){
        update_post_meta($post_id,'service_link',esc_url_raw($_POST['service_link']));
    }
    if(isset($_POST['service_order'])){
        update_post_meta($post_id,'service_order',intval($_POST['service_order']));
    }

    // PORTFOLIO
    if(isset($_POST['portfolio_client'])){
        update_post_meta($post_id,'portfolio_client',sanitize_text_field($_POST['portfolio_client']));
    }
    if(isset($_POST['portfolio_technology'])){
        update_post_meta($post_id,'portfolio_technology',sanitize_text_field($_POST['portfolio_technology']));
    }
    if(isset($_POST['portfolio_url'])){
        update_post_meta($post_id,'portfolio_url',esc_url_raw($_POST['portfolio_url']));
    }
    if(isset($_POST['portfolio_gallery'])){
        update_post_meta($post_id,'portfolio_gallery',sanitize_text_field($_POST['portfolio_gallery']));
    }

    // TEAM
    if(isset($_POST['team_position'])){
        update_post_meta($post_id,'team_position',sanitize_text_field($_POST['team_position']));
    }
    if(isset($_POST['team_email'])){
        update_post_meta($post_id,'team_email',sanitize_email($_POST['team_email']));
    }
    if(isset($_POST['team_linkedin'])){
        update_post_meta($post_id,'team_linkedin',esc_url_raw($_POST['team_linkedin']));
    }
    if(isset($_POST['team_twitter'])){
        update_post_meta($post_id,'team_twitter',esc_url_raw($_POST['team_twitter']));
    }

    // TESTIMONIALS
    if(isset($_POST['testimonial_company'])){
        update_post_meta($post_id,'testimonial_company',sanitize_text_field($_POST['testimonial_company']));
    }
    if(isset($_POST['testimonial_position'])){
        update_post_meta($post_id,'testimonial_position',sanitize_text_field($_POST['testimonial_position']));
    }
    if(isset($_POST['testimonial_rating'])){
        update_post_meta($post_id,'testimonial_rating',intval($_POST['testimonial_rating']));
    }
}
add_action('save_post','codesclue_save_meta_box_data');



/* ================================================================
   CUSTOM IMAGE SIZES
================================================================= */

function codesclue_add_image_sizes(){
    add_image_size('codesclue-hero',1920,1080,true);
    add_image_size('codesclue-thumbnail',350,250,true);
    add_image_size('codesclue-medium',750,500,true);
    add_image_size('codesclue-large',1200,800,true);
    add_image_size('codesclue-team',300,300,true);
    add_image_size('codesclue-portfolio',600,400,true);
}
add_action('after_setup_theme','codesclue_add_image_sizes');



/* ================================================================
   BODY CLASSES
================================================================= */

function codesclue_body_classes($classes){

    if(is_front_page()) $classes[] = 'home-page';
    if(is_page_template('page-home.php')) $classes[] = 'home-template';
    
    // Add page-specific classes for CSS isolation
    if (is_front_page() || is_page('home')) {
        $classes[] = 'page-home';
    }
    
    if (is_page(array(
        'services','android','angular','api-testing','auto-mated-testing',
        'css','dotnet','flutter','ios','ipad','js','java','kotlin','laravel',
        'manual-testing','mobile-testing','mongo-db','node-js','performance-testing',
        'php','pwa','react-native','react-js','ror','software-testing',
        'support-testing','vue-js','swift','html-page','cloud-consulting-migrations',
        'devsecops-sre','security-governance','cloud-reporting','application-modernization',
        'genaiops'
    ))) {
        $classes[] = 'page-services';
    }
    
    if (is_page(array(
        'hire-android-developer','hire-react-native-developer','hire-flutter-developer',
        'hire-ios-developer','hire-angular-developer','hire-react-js-developer',
        'hire-javascript-developer','hire-php-developer','hire-node-js-developer',
        'hire-ror-developers','hire-java-developer','hire-dotnet-developer',
        'hire-automated-qa','hire-manual-qa'
    ))) {
        $classes[] = 'page-hiring';
    }
    
    if (is_page('about-us') || is_page('our-company')) {
        $classes[] = 'page-about';
    }
    
    if (is_page('our-portfolio')) {
        $classes[] = 'page-portfolio';
    }
    
    if (is_page('contact-us')) {
        $classes[] = 'page-contact';
    }
    
    if (is_page('career')) {
        $classes[] = 'page-career';
    }
    
    if (is_page('case-studies')) {
        $classes[] = 'page-case-studies';
    }
    
    if (is_page('clinet-testimonials')) {
        $classes[] = 'page-testimonials';
    }
    
    if (is_page('meet-our-team')) {
        $classes[] = 'page-team';
    }
    
    if (is_page('ecommerce')) {
        $classes[] = 'page-industries';
    }
    
    if (is_page(array('greenreleaf','therapix','project'))) {
        $classes[] = 'page-projects';
    }
    
    if (is_page('ai-software-development') || is_page('aipage')) {
        $classes[] = 'page-aipage';
    }

    return $classes;
}
add_filter('body_class','codesclue_body_classes');



/* ================================================================
   EXCERPT SETTINGS
================================================================= */

add_filter('excerpt_length', function(){ return 20; });
add_filter('excerpt_more', function(){ return '...'; });



/* ================================================================
   CUSTOM LOGIN LOGO
================================================================= */

function codesclue_login_logo(){
    $logo = get_theme_mod('codesclue_logo');
    if($logo){
        echo '<style>
            #login h1 a {
                background-image:url('.esc_url($logo).') !important;
                background-size:contain !important;
                width:320px !important;
                height:80px !important;
            }
        </style>';
    }
}
add_action('login_head','codesclue_login_logo');

function codesclue_login_logo_url(){ return home_url(); }
add_filter('login_headerurl','codesclue_login_logo_url');

function codesclue_login_logo_title(){ return get_bloginfo('name'); }
add_filter('login_headertext','codesclue_login_logo_title');



/* ================================================================
   ADMIN FOOTER
================================================================= */

function codesclue_admin_footer(){
    echo 'Powered by <a href="'.esc_url(home_url()).'">'.get_bloginfo('name').'</a>';
}
add_filter('admin_footer_text','codesclue_admin_footer');



/* ================================================================
   DASHBOARD WIDGET
================================================================= */

function codesclue_add_dashboard_widgets(){
    wp_add_dashboard_widget(
        'codesclue_dashboard_widget',
        'CodesClue Theme Info',
        function(){
            echo '<p>Welcome to your CodesClue theme dashboard.</p>';
            echo '<ul>
                    <li><a href="'.admin_url('post-new.php?post_type=services').'">Add New Service</a></li>
                    <li><a href="'.admin_url('post-new.php?post_type=portfolio').'">Add New Portfolio Item</a></li>
                    <li><a href="'.admin_url('post-new.php?post_type=team').'">Add New Team Member</a></li>
                    <li><a href="'.admin_url('post-new.php?post_type=testimonials').'">Add New Testimonial</a></li>
                 </ul>';
        }
    );
}
add_action('wp_dashboard_setup','codesclue_add_dashboard_widgets');

function codesclue_blog_filter_scripts() {
    wp_enqueue_script(
        'codesclue-blog-filter',
        get_template_directory_uri() . '/assets/js/blog-filter.js',
        array(),
        '1.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'codesclue_blog_filter_scripts');


/* ================================================================
   SETTINGS MENU
================================================================= */

function codesclue_admin_menu(){
    add_menu_page(
        'CodesClue Settings',
        'CodesClue',
        'manage_options',
        'codesclue-settings',
        function(){
            echo '<div class="wrap">
                    <h1>CodesClue Theme Settings</h1>
                    <p>Use the WordPress Customizer to update theme options.</p>
                  </div>';
        },
        'dashicons-admin-generic',
        30
    );
}
add_action('admin_menu','codesclue_admin_menu');


if (!function_exists('codesclue_home_new_assets')) {
    function codesclue_home_new_assets() {
        if (is_page_template('template-home-new.php')) {

            wp_enqueue_style('home-new-css', get_template_directory_uri() . '/assets/css/pages/home-new.css', [], time());

            wp_enqueue_script('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js', [], null, true);
            wp_enqueue_script('scrolltrigger', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js', ['gsap'], null, true);

            wp_enqueue_script('home-new-js', get_template_directory_uri() . '/assets/js/pages/home-new.js', ['jquery','gsap','scrolltrigger'], time(), true);
        }
    }
}
add_action('wp_enqueue_scripts', 'codesclue_home_new_assets', 999);



