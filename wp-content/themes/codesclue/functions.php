<?php
/**
 * CodesClue Theme Functions
 * 
 * @package CodesClue
 * @version 1.0
 */

// Debug: Check if functions.php is being loaded
error_log('CodesClue functions.php is being loaded');

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Theme Setup
 */
function codesclue_setup()
{
    // Add theme support for various features
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    add_theme_support('custom-logo');
    add_theme_support('custom-background');
    add_theme_support('custom-header');
    add_theme_support('automatic-feed-links');
    add_theme_support('post-formats', array('aside', 'image', 'video', 'quote', 'link', 'gallery', 'audio'));

    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'codesclue'),
        'footer' => __('Footer Menu', 'codesclue'),
        'mobile' => __('Mobile Menu', 'codesclue'),
    ));

    // Add image sizes
    add_image_size('codesclue-thumbnail', 350, 250, true);
    add_image_size('codesclue-medium', 750, 500, true);
    add_image_size('codesclue-large', 1200, 800, true);
    add_image_size('codesclue-hero', 1920, 1080, true);
}
add_action('after_setup_theme', 'codesclue_setup');
// 1) Normal enqueue (use correct directory function for child/parent)
function codesclue_enqueue_styles() {
    // root theme style (mandatory)
    wp_enqueue_style( 'codesclue-root-style', get_stylesheet_uri() );
 
    // your real CSS in assets/css/style.css
    wp_enqueue_style(
        'codesclue-main-style',
        get_stylesheet_directory_uri() . '/assets/css/style.css',
        array('codesclue-root-style'),
        filemtime( get_stylesheet_directory() . '/assets/css/style.css' )
    );
}
add_action('wp_enqueue_scripts', 'codesclue_enqueue_styles', 20);
 
// 2) Force it to the end of the printing queue
function codesclue_move_main_style_last() {
    global $wp_styles;
    $handle = 'codesclue-main-style';
    if ( ! empty( $wp_styles->queue ) && isset( $wp_styles->registered[ $handle ] ) ) {
        $pos = array_search( $handle, $wp_styles->queue );
        if ( $pos !== false ) {
            unset( $wp_styles->queue[ $pos ] );
            $wp_styles->queue[] = $handle;
        }
    }
}
add_action('wp_print_styles', 'codesclue_move_main_style_last', PHP_INT_MAX);
/**
 * Enqueue scripts and styles
 */
function codesclue_scripts() {
    error_log('codesclue_scripts function is being called');

    // ===== Global Styles =====
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '5.3.0');
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css', array(), '6.7.2');
    wp_enqueue_style('bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css', array(), '1.10.5');
    wp_enqueue_style('codesclue-style', get_stylesheet_uri(), array(), '1.0.0');
    wp_enqueue_style('responsive-css', get_template_directory_uri() . '/assets/css/responsive.css', array(), '1.0.0');


    // Main global styles
    wp_enqueue_style('codesclue-header', get_template_directory_uri() . '/assets/css/header.css', array(), '1.0.0');
    wp_enqueue_style('codesclue-home', get_template_directory_uri() . '/assets/css/home.css', array(), '1.0.0');
    wp_enqueue_style('codesclue-new', get_template_directory_uri() . '/assets/css/new.css', array(), '1.0.0');
    wp_enqueue_style('codesclue-footer', get_template_directory_uri() . '/assets/css/footer.css', array(), '1.0.0');

    wp_enqueue_style('aos-css', get_template_directory_uri() . '/assets/css/aos.css', array(), '1.0.0');
    wp_enqueue_style('owl-carousel-css', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), '2.3.4');
    wp_enqueue_style('owl-theme-css', get_template_directory_uri() . '/assets/css/owl.theme.default.css', array('owl-carousel-css'), '2.3.4');
    wp_enqueue_style('responsive-css', get_template_directory_uri() . '/assets/css/responsive.css', array(), '1.0.0');
    wp_enqueue_style('codesclue-fonts', get_template_directory_uri() . '/assets/css/font.css', array(), '1.0.0');

    // ===== Page Specific Styles =====
    if (is_page('about-us') || is_page('our-company')) {
        wp_enqueue_style('codesclue-about-us', get_template_directory_uri() . '/assets/css/about.css', array(), '1.0.0');
    }

        if (is_page(array(
            'services',
            'android',
            'angular',
            'api-testing',
            'auto-mated-testing',
            'css',
            'dotnet',
            'flutter',
            'ios',
            'ipad',
            'js',
            'java',
            'kotlin',
            'laravel',
            'manual-testing',
            'mobile-testing',
            'mongo-db',
            'node-js',
            'performance-testing',
            'php',
            'pwa',
            'react-native',
            'react-js',
            'ror',
            'software-testing',
            'support-testing',
            'vue-js',
            'swift',
            'html-page'
        ))) {
            wp_enqueue_style(
                'codesclue-services',
                get_template_directory_uri() . '/assets/css/services.css',
                array(),
                '1.0.0'
            );
        }


        if (is_page(array(
            'hire-android-developer',
            'hire-react-native-developer',
            'hire-flutter-developer',
            'hire-ios-developer',
            'hire-angular-developer',
            'hire-react-js-developer',
            'hire-javascript-developer',
            'hire-php-developer',
            'hire-node-js-developer',
            'hire-ror-developers',
            'hire-java-developer',
            'hire-dotnet-developer',
            'hire-automated-qa',
            'hire-manual-qa'
        ))) {
            wp_enqueue_style(
                'codesclue-services',
                get_template_directory_uri() . '/assets/css/hiring.css',
                array(),
                '1.0.0'
            );
        }

        if (is_page(array(
            'greenreleaf',
            'therapix',
        ))) {
            wp_enqueue_style(
                'codesclue-project',
                get_template_directory_uri() . '/assets/css/project.css',
                array(),
                '1.0.0'
            );
        }



    if (is_page('our-portfolio')) {
        wp_enqueue_style('codesclue-portfolio', get_template_directory_uri() . '/assets/css/portfolio.css', array(), '1.0.0');
    }

    if (is_page('meet-our-team')) {
        wp_enqueue_style('codesclue-team', get_template_directory_uri() . '/assets/css/team.css', array(), '1.0.0');
    }

      if (is_page('food-service')) {
        wp_enqueue_style('codesclue-food-service', get_template_directory_uri() . '/assets/css/food-service.css', array(), '1.0.0');
    }

if ( is_page('clinet-testimonials') ) {
wp_enqueue_style(
    'testimonial-css',
    get_template_directory_uri() . '/assets/css/testimonial.css'
);

wp_enqueue_style(
    'owl-carousel-css',
    get_template_directory_uri() . '/assets/css/owl.carousel.min.css'
);

wp_enqueue_script(
    'owl-carousel-js',
    get_template_directory_uri() . '/assets/js/owl.carousel.min.js',
    array('jquery'),
    '2.3.4',
    true
);

wp_enqueue_script(
    'main-scripts',
    get_template_directory_uri() . '/assets/js/testimonial.js',
    array('jquery','owl-carousel-js'),
    '1.0.0',
    true
);

}


    if (is_page('contact-us')) {
        wp_enqueue_style('codesclue-contact', get_template_directory_uri() . '/assets/css/contact.css', array(), '1.0.0');
    }

    if (is_page('career')) {
        wp_enqueue_style('codesclue-career', get_template_directory_uri() . '/assets/css/career.css', array(), '1.0.0');
    }

    if (is_page('casestudy')) {
        wp_enqueue_style('codesclue-casestudy', get_template_directory_uri() . '/assets/css/casestudy.css', array(), '1.0.0');
    }

    if (is_page('ecommerce')) {
        wp_enqueue_style('codesclue-industries', get_template_directory_uri() . '/assets/css/industries.css', array(), '1.0.0');
    }

    if (is_page('financial')) {
        wp_enqueue_style('codesclue-financial', get_template_directory_uri() . '/assets/css/financial.css', array(), '1.0.0');
    }

    // if (is_page('project')) {
    //     wp_enqueue_style('codesclue-project', get_template_directory_uri() . '/assets/css/project.css', array(), '1.0.0');
    // }

    if (is_page('ai-software-development') || is_page('aipage')) {
        wp_enqueue_style('codesclue-aipage', get_template_directory_uri() . '/assets/css/aipage.css', array(), '1.0.0');
    }

    if (is_page('media-and-entertainment')) {
        wp_enqueue_style('codesclue-media-and-entertainment', get_template_directory_uri() . '/assets/css/media.css', array(), '1.0.0');
    }


    if (is_page('cannabis')) {
        wp_enqueue_style('codesclue-cannabis', get_template_directory_uri() . '/assets/css/Cannabis.css', array(), '1.0.0');
    }


    if (is_page('cannabis')) {
        wp_enqueue_style('codesclue-cannabis', get_template_directory_uri() . '/assets/css/Cannabis.css', array(), '1.0.0');
    }

    if (is_page('healthcare')) {
        wp_enqueue_style('codesclue-heathcare', get_template_directory_uri() . '/assets/css/healthcare.css', array(), '1.0.0');
    }

    if (is_page('faq')) {
        wp_enqueue_style('codesclue-faq', get_template_directory_uri() . '/assets/css/faq.css', array(), '1.0.0');
    }

    // ===== Global Scripts =====
    wp_enqueue_script('jquery');
    wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.js', array('jquery'), '2.3.4', true);
    wp_enqueue_script('waypoints', get_template_directory_uri() . '/assets/js/jquery.waypoints.js', array('jquery'), '4.0.1', true);
    wp_enqueue_script('rcounter', get_template_directory_uri() . '/assets/js/jquery.rcounter.js', array('jquery'), '1.0.0', true);

    wp_enqueue_script('gsap-scrolltrigger', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js', array('jquery'), null, true);
    wp_enqueue_script('aos-animation', get_template_directory_uri() . '/assets/js/aos-animation.js', array(), '1.0.0', true);
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', array('jquery'), '5.3.3', true);

    wp_enqueue_script('header2', get_template_directory_uri() . '/assets/js/header2.js', array('jquery', 'bootstrap-js'), '1.0.0', true);
    wp_enqueue_script('sitemap', get_template_directory_uri() . '/assets/js/sitemap.js', array(), '1.0.0', true);
    wp_enqueue_script('project', get_template_directory_uri() . '/assets/js/project.js', array(), '1.0.0', true);
    wp_enqueue_script('blog', get_template_directory_uri() . '/assets/js/blog.js', array(), '1.0.0', true);
    wp_enqueue_script('widget-min', get_template_directory_uri() . '/assets/js/widget.min.js', array(), '1.0.0', true);
    wp_enqueue_script('clutch-widget', get_template_directory_uri() . '/assets/js/clutch-widget.js', array(), '1.0.0', true);
    wp_enqueue_script('ai-software-development', get_template_directory_uri() . '/assets/js/ai-tabs.js', array(), '1.0.0', true);

    wp_enqueue_script('codesclue-main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('codesclue-scripts', get_template_directory_uri() . '/assets/js/scripts.js', array('jquery', 'aos-animation'), '1.0.0', true);
    wp_enqueue_script('codesclue-contact-email', get_template_directory_uri() . '/assets/js/contactEmail.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('codesclue-ainavtab', get_template_directory_uri() . '/assets/js/ainavtab.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('codesclue-hiring-form', get_template_directory_uri() . '/assets/js/hiringForm.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('codesclue-team', get_template_directory_uri() . '/assets/js/team.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('codesclue-counter', get_template_directory_uri() . '/assets/js/counter.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('codesclue-cache-buster', get_template_directory_uri() . '/assets/js/cacheBuster.js', array(), '1.0.0', true);

    // ===== Page Specific Scripts =====
    
    if (is_page('cannabis')) {
        wp_enqueue_script('Cannabis', get_template_directory_uri() . '/assets/js/Cannabis.js', array(), '1.0.0', true);
    }

    if (is_page('ecommerce')) {
        wp_enqueue_script('ecommerce', get_template_directory_uri() . '/assets/js/industries.js', array(), '1.0.0', true);
    }
   if (is_page('financial')) {
        wp_enqueue_script('financial', get_template_directory_uri() . '/assets/js/financial.js', array(), '1.0.0', true);
    }

 if ( is_page( array('our-portfolio', 'contact-us') ) ) {
        wp_enqueue_script(
            'our-portfolio',
            get_template_directory_uri() . '/assets/js/new.js',
            array(),    // dependencies
            '1.0.0',
            true        // footer me load hoga
        );
    }
    // GSAP core
    wp_enqueue_script(
        'gsap',
        'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js',
        array(),
        '3.12.5',
        true
    );

    // ScrollTrigger plugin
    wp_enqueue_script(
        'gsap-scrolltrigger',
        'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js',
        array('gsap'),
        '3.12.5',
        true
    );

    // Healthcare custom JS (depends on gsap + scrolltrigger)
    if (is_page('healthcare')) {
        wp_enqueue_script(
            'codesclue-healthcare',
            get_template_directory_uri() . '/assets/js/healthcare.js',
            array('gsap','gsap-scrolltrigger'),
            '1.0.0',
            true
        );
    }
    // AI page ke liye tab switch JS
    if ( is_page('ai-software-development') ) {
        wp_enqueue_script(
            'ai-tabs',
            get_template_directory_uri() . '/assets/js/ai-tabs.js',
            array('jquery'),
            '1.0.0',
            true
        );
    }


        if (is_page('faq')) {
            wp_enqueue_script('codesclue-faq', get_template_directory_uri() . '/assets/js/faq.js', array('jquery'), '1.0.0', true);
        }

        // ===== Extra =====
        if (!is_front_page()) {
            wp_register_script('lottie-player', 'https://unpkg.com/@dotlottie/player-component@2.7.12/dist/dotlottie-player.mjs', array(), null, true);
            wp_script_add_data('lottie-player', 'type', 'module');
            wp_enqueue_script('lottie-player');
        }

        wp_localize_script('codesclue-main', 'codesclue_ajax', array(
            'ajax_url' => admin_url('admin-ajax.php'),
            'nonce' => wp_create_nonce('codesclue_nonce'),
        ));
}

add_action('wp_enqueue_scripts', 'codesclue_scripts');
remove_action('wp_head', 'wp_generator');





error_log('wp_enqueue_scripts hook registered for codesclue_scripts');
// ===== AI Software Development Page Specific Scripts =====

function codesclue_testimonial_inline_js() {
    ?>
    <script type="text/javascript">
    jQuery(document).ready(function ($) {

        // === Owl Carousel 2 (Generic) ===
        $('#owl-carousel2').owlCarousel({
            loop: false,
            margin: 0,
            dots: true,
            nav: false,
            responsive: {
                0: { items: 1 },
                768: { items: 2 },
                1130: { items: 3 }
            }
        });

        // === Logo Carousel ===
        $('#owl-logo').owlCarousel({
            loop: true,
            dots: false,
            nav: false,
            autoplay: true,
            margin: 0,
            autoplayTimeout: 2000,
            autoplayHoverPause: true,
            responsive: {
                0: { items: 1 },
                768: { items: 3 },
                1130: { items: 4 }
            }
        });

        // === Blog Carousel ===
        $('#owl-blog-content').owlCarousel({
            loop: true,
            dots: false,
            nav: true,
            navText: [
                "<img loading='lazy' src='<?php echo get_template_directory_uri(); ?>/assets/images/btn-left.svg' alt='btn-left' />",
                "<img loading='lazy' src='<?php echo get_template_directory_uri(); ?>/assets/images/btn-right.svg' alt='btn-right'/>"
            ],
            items: 1
        });

        // === Client Testimonial Carousel ===
        $('#clientstestimonial').owlCarousel({
            loop: true,
            margin: 0,
            dots: false,
            nav: true,
            navText: [
                "<img loading='lazy' src='<?php echo get_template_directory_uri(); ?>/assets/images/btn-left.svg' alt='btn-left' />",
                "<img loading='lazy' src='<?php echo get_template_directory_uri(); ?>/assets/images/btn-right.svg' alt='btn-right'/>"
            ],
            responsive: {
                0: { items: 1 },
                768: { items: 2 },
                1130: { items: 3 }
            }
        });

        // === Owl Carousel 6 (Simple One Item) ===
        $('#owl-carousel6').owlCarousel({
            loop: false,
            dots: true,
            nav: false,
            items: 1
        });

        // === Testimonial Carousel (Main) ===
        $("#testimonial-carousel").owlCarousel({
            loop: true,
            nav: false,
            dots: true,
            autoplay: true,
            autoplayHoverPause: true,
            margin: 0,
            responsive: {
                0: { items: 1 },
                1000: { items: 2 }
            }
        });

        // === Testimonial Star Carousel ===
        $("#testimonial-star-carousel").owlCarousel({
            loop: true,
            nav: false,
            dots: true,
            autoplay: true,
            autoplayHoverPause: true,
            margin: 20,
            responsive: {
                0: { items: 1 },
                900: { items: 2 }
            }
        });

    });
    </script>
    <style>


.testimonial-box {
    margin-top: 40px !important;
}
.testimonial-box {
    width: 100%;
    background: #fff;
    padding: 30px 20px;
    margin: 20px 5px 50px 5px;
    border-radius: 6px;
    box-shadow: 0 10px 10px 5px #00000033;
    transform: scale(0.9);
    opacity: 1;
    transition: all 0.3s;
    min-height: 350px !important;
    display: flex;
    flex-direction: column;
    justify-content: center !important;
}
    </style>
    <?php
}
add_action('wp_footer', 'codesclue_testimonial_inline_js');



function enqueue_dotlottie_player() {
    wp_enqueue_script(
        'dotlottie-player',
        'https://unpkg.com/@dotlottie/player-component@1.0.0/dist/dotlottie-player.js',
        array(),
        null,
        true
    );
}
add_action('wp_enqueue_scripts', 'enqueue_dotlottie_player');



function codesclue_enqueue_assets() {
    // CSS
    wp_enqueue_style('main-css', get_template_directory_uri() . '/assets/css/style.css');
    wp_enqueue_style('responsive-css', get_template_directory_uri() . '/assets/css/responsive.css');

    // JS
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'codesclue_enqueue_assets');




function codesclue_enqueue_parallax() {
    if ( is_front_page() ) {
        wp_enqueue_script(
            'codesclue-parallax',
            get_template_directory_uri() . '/assets/js/parallax.js',
            array('jquery'),
            null,
            true
        );
    }
}
add_action('wp_enqueue_scripts', 'codesclue_enqueue_parallax');


function codesclue_video_fix_scripts() {
    wp_enqueue_script(
        'codesclue-video-fix',
        get_template_directory_uri() . '/assets/js/video-fix.js',
        array(),
        null,
        true
    );
}
add_action('wp_enqueue_scripts', 'codesclue_video_fix_scripts');



function codesclue_force_scripts()
{
    // Only add this if scripts aren't loading normally
    if (!wp_script_is('codesclue-scripts', 'enqueued')) {
        echo "<!-- Force loading scripts -->\n";
        echo '<script src="' . get_template_directory_uri() . '/assets/js/scripts.js"></script>' . "\n";
        echo '<script src="' . get_template_directory_uri() . '/assets/js/contactEmail.js"></script>' . "\n";
        echo '<script src="' . get_template_directory_uri() . '/assets/js/ainavtab.js"></script>' . "\n";
        echo '<script src="' . get_template_directory_uri() . '/assets/js/hiringForm.js"></script>' . "\n";
        echo '<script src="' . get_template_directory_uri() . '/assets/js/team.js"></script>' . "\n";
        echo '<script src="' . get_template_directory_uri() . '/assets/js/header2.js"></script>' . "\n";
        echo "<!-- End force loading scripts -->\n";
    }
}
add_action('wp_footer', 'codesclue_force_scripts');

/**
 * Register widget areas
 */
function codesclue_widgets_init()
{
    register_sidebar(array(
        'name' => __('Sidebar', 'codesclue'),
        'id' => 'sidebar-1',
        'description' => __('Add widgets here.', 'codesclue'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => __('Footer Widget 1', 'codesclue'),
        'id' => 'footer-1',
        'description' => __('Add widgets here.', 'codesclue'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));

    register_sidebar(array(
        'name' => __('Footer Widget 2', 'codesclue'),
        'id' => 'footer-2',
        'description' => __('Add widgets here.', 'codesclue'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));

    register_sidebar(array(
        'name' => __('Footer Widget 3', 'codesclue'),
        'id' => 'footer-3',
        'description' => __('Add widgets here.', 'codesclue'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
}
add_action('widgets_init', 'codesclue_widgets_init');


function codesclue_enqueue_ga()
{
    if (!is_admin()) {
        wp_enqueue_script(
            'google-analytics',
            'https://www.googletagmanager.com/gtag/js?id=G-1GMX7Q7FMN',
            array(),
            null,
            false
        );
    }
}
add_action('wp_enqueue_scripts', 'codesclue_enqueue_ga');

/**
 * Custom post types
 */
function codesclue_custom_post_types()
{
    // Services Post Type
    register_post_type('services', array(
        'labels' => array(
            'name' => __('Services', 'codesclue'),
            'singular_name' => __('Service', 'codesclue'),
            'add_new' => __('Add New Service', 'codesclue'),
            'add_new_item' => __('Add New Service', 'codesclue'),
            'edit_item' => __('Edit Service', 'codesclue'),
            'new_item' => __('New Service', 'codesclue'),
            'view_item' => __('View Service', 'codesclue'),
            'search_items' => __('Search Services', 'codesclue'),
            'not_found' => __('No services found', 'codesclue'),
            'not_found_in_trash' => __('No services found in trash', 'codesclue'),
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'menu_icon' => 'dashicons-admin-tools',
        'rewrite' => array('slug' => 'services'),
    ));

    // Portfolio Post Type
    register_post_type('portfolio', array(
        'labels' => array(
            'name' => __('Portfolio', 'codesclue'),
            'singular_name' => __('Portfolio Item', 'codesclue'),
            'add_new' => __('Add New Portfolio Item', 'codesclue'),
            'add_new_item' => __('Add New Portfolio Item', 'codesclue'),
            'edit_item' => __('Edit Portfolio Item', 'codesclue'),
            'new_item' => __('New Portfolio Item', 'codesclue'),
            'view_item' => __('View Portfolio Item', 'codesclue'),
            'search_items' => __('Search Portfolio', 'codesclue'),
            'not_found' => __('No portfolio items found', 'codesclue'),
            'not_found_in_trash' => __('No portfolio items found in trash', 'codesclue'),
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'menu_icon' => 'dashicons-portfolio',
        'rewrite' => array('slug' => 'portfolio'),
    ));

    // Team Post Type
    register_post_type('team', array(
        'labels' => array(
            'name' => __('Team', 'codesclue'),
            'singular_name' => __('Team Member', 'codesclue'),
            'add_new' => __('Add New Team Member', 'codesclue'),
            'add_new_item' => __('Add New Team Member', 'codesclue'),
            'edit_item' => __('Edit Team Member', 'codesclue'),
            'new_item' => __('New Team Member', 'codesclue'),
            'view_item' => __('View Team Member', 'codesclue'),
            'search_items' => __('Search Team', 'codesclue'),
            'not_found' => __('No team members found', 'codesclue'),
            'not_found_in_trash' => __('No team members found in trash', 'codesclue'),
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'menu_icon' => 'dashicons-groups',
        'rewrite' => array('slug' => 'team'),
    ));

    // Testimonials Post Type
    register_post_type('testimonials', array(
        'labels' => array(
            'name' => __('Testimonials', 'codesclue'),
            'singular_name' => __('Testimonial', 'codesclue'),
            'add_new' => __('Add New Testimonial', 'codesclue'),
            'add_new_item' => __('Add New Testimonial', 'codesclue'),
            'edit_item' => __('Edit Testimonial', 'codesclue'),
            'new_item' => __('New Testimonial', 'codesclue'),
            'view_item' => __('View Testimonial', 'codesclue'),
            'search_items' => __('Search Testimonials', 'codesclue'),
            'not_found' => __('No testimonials found', 'codesclue'),
            'not_found_in_trash' => __('No testimonials found in trash', 'codesclue'),
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'menu_icon' => 'dashicons-format-quote',
        'rewrite' => array('slug' => 'testimonials'),
    ));
}
add_action('init', 'codesclue_custom_post_types');

/**
 * Custom taxonomies
 */
function codesclue_custom_taxonomies()
{
    // Services Category
    register_taxonomy('service_category', 'services', array(
        'labels' => array(
            'name' => __('Service Categories', 'codesclue'),
            'singular_name' => __('Service Category', 'codesclue'),
        ),
        'hierarchical' => true,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'service-category'),
    ));

    // Portfolio Category
    register_taxonomy('portfolio_category', 'portfolio', array(
        'labels' => array(
            'name' => __('Portfolio Categories', 'codesclue'),
            'singular_name' => __('Portfolio Category', 'codesclue'),
        ),
        'hierarchical' => true,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'portfolio-category'),
    ));

    // Team Department
    register_taxonomy('team_department', 'team', array(
        'labels' => array(
            'name' => __('Departments', 'codesclue'),
            'singular_name' => __('Department', 'codesclue'),
        ),
        'hierarchical' => true,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'department'),
    ));
}
add_action('init', 'codesclue_custom_taxonomies');

/**
 * Custom meta boxes
 */
function codesclue_add_meta_boxes()
{
    // Services meta box
    add_meta_box(
        'service_details',
        __('Service Details', 'codesclue'),
        'codesclue_service_meta_callback',
        'services',
        'normal',
        'high'
    );

    // Portfolio meta box
    add_meta_box(
        'portfolio_details',
        __('Portfolio Details', 'codesclue'),
        'codesclue_portfolio_meta_callback',
        'portfolio',
        'normal',
        'high'
    );

    // Team meta box
    add_meta_box(
        'team_details',
        __('Team Member Details', 'codesclue'),
        'codesclue_team_meta_callback',
        'team',
        'normal',
        'high'
    );

    // Testimonials meta box
    add_meta_box(
        'testimonial_details',
        __('Testimonial Details', 'codesclue'),
        'codesclue_testimonial_meta_callback',
        'testimonials',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'codesclue_add_meta_boxes');

/**
 * Service meta box callback
 */
function codesclue_service_meta_callback($post)
{
    wp_nonce_field('codesclue_save_meta_box_data', 'codesclue_meta_box_nonce');

    $service_icon = get_post_meta($post->ID, 'service_icon', true);
    $service_link = get_post_meta($post->ID, 'service_link', true);
    $service_order = get_post_meta($post->ID, 'service_order', true);

    ?>
    <table class="form-table">
        <tr>
            <th><label for="service_icon">Service Icon (Font Awesome class)</label></th>
            <td><input type="text" id="service_icon" name="service_icon" value="<?php echo esc_attr($service_icon); ?>"
                    class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="service_link">Service Link</label></th>
            <td><input type="url" id="service_link" name="service_link" value="<?php echo esc_url($service_link); ?>"
                    class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="service_order">Display Order</label></th>
            <td><input type="number" id="service_order" name="service_order" value="<?php echo esc_attr($service_order); ?>"
                    class="small-text" /></td>
        </tr>
    </table>
    <?php
}

/**
 * Portfolio meta box callback
 */
function codesclue_portfolio_meta_callback($post)
{
    wp_nonce_field('codesclue_save_meta_box_data', 'codesclue_meta_box_nonce');

    $portfolio_client = get_post_meta($post->ID, 'portfolio_client', true);
    $portfolio_technology = get_post_meta($post->ID, 'portfolio_technology', true);
    $portfolio_url = get_post_meta($post->ID, 'portfolio_url', true);
    $portfolio_gallery = get_post_meta($post->ID, 'portfolio_gallery', true);

    ?>
    <table class="form-table">
        <tr>
            <th><label for="portfolio_client">Client Name</label></th>
            <td><input type="text" id="portfolio_client" name="portfolio_client"
                    value="<?php echo esc_attr($portfolio_client); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="portfolio_technology">Technologies Used</label></th>
            <td><input type="text" id="portfolio_technology" name="portfolio_technology"
                    value="<?php echo esc_attr($portfolio_technology); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="portfolio_url">Project URL</label></th>
            <td><input type="url" id="portfolio_url" name="portfolio_url" value="<?php echo esc_url($portfolio_url); ?>"
                    class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="portfolio_gallery">Gallery IDs (comma separated)</label></th>
            <td><input type="text" id="portfolio_gallery" name="portfolio_gallery"
                    value="<?php echo esc_attr($portfolio_gallery); ?>" class="regular-text" /></td>
        </tr>
    </table>
    <?php
}

/**
 * Team meta box callback
 */
function codesclue_team_meta_callback($post)
{
    wp_nonce_field('codesclue_save_meta_box_data', 'codesclue_meta_box_nonce');

    $team_position = get_post_meta($post->ID, 'team_position', true);
    $team_email = get_post_meta($post->ID, 'team_email', true);
    $team_linkedin = get_post_meta($post->ID, 'team_linkedin', true);
    $team_twitter = get_post_meta($post->ID, 'team_twitter', true);

    ?>
    <table class="form-table">
        <tr>
            <th><label for="team_position">Position</label></th>
            <td><input type="text" id="team_position" name="team_position" value="<?php echo esc_attr($team_position); ?>"
                    class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="team_email">Email</label></th>
            <td><input type="email" id="team_email" name="team_email" value="<?php echo esc_attr($team_email); ?>"
                    class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="team_linkedin">LinkedIn URL</label></th>
            <td><input type="url" id="team_linkedin" name="team_linkedin" value="<?php echo esc_url($team_linkedin); ?>"
                    class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="team_twitter">Twitter URL</label></th>
            <td><input type="url" id="team_twitter" name="team_twitter" value="<?php echo esc_url($team_twitter); ?>"
                    class="regular-text" /></td>
        </tr>
    </table>
    <?php
}

/**
 * Testimonial meta box callback
 */
function codesclue_testimonial_meta_callback($post)
{
    wp_nonce_field('codesclue_save_meta_box_data', 'codesclue_meta_box_nonce');

    $testimonial_company = get_post_meta($post->ID, 'testimonial_company', true);
    $testimonial_position = get_post_meta($post->ID, 'testimonial_position', true);
    $testimonial_rating = get_post_meta($post->ID, 'testimonial_rating', true);

    ?>
    <table class="form-table">
        <tr>
            <th><label for="testimonial_company">Company</label></th>
            <td><input type="text" id="testimonial_company" name="testimonial_company"
                    value="<?php echo esc_attr($testimonial_company); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="testimonial_position">Position</label></th>
            <td><input type="text" id="testimonial_position" name="testimonial_position"
                    value="<?php echo esc_attr($testimonial_position); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="testimonial_rating">Rating (1-5)</label></th>
            <td><input type="number" id="testimonial_rating" name="testimonial_rating"
                    value="<?php echo esc_attr($testimonial_rating); ?>" min="1" max="5" class="small-text" /></td>
        </tr>
    </table>
    <?php
}

/**
 * Save meta box data
 */
function codesclue_save_meta_box_data($post_id)
{
    if (!isset($_POST['codesclue_meta_box_nonce']) || !wp_verify_nonce($_POST['codesclue_meta_box_nonce'], 'codesclue_save_meta_box_data')) {
        return;
    }

    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    // Save service meta
    if (isset($_POST['service_icon'])) {
        update_post_meta($post_id, 'service_icon', sanitize_text_field($_POST['service_icon']));
    }
    if (isset($_POST['service_link'])) {
        update_post_meta($post_id, 'service_link', esc_url_raw($_POST['service_link']));
    }
    if (isset($_POST['service_order'])) {
        update_post_meta($post_id, 'service_order', intval($_POST['service_order']));
    }

    // Save portfolio meta
    if (isset($_POST['portfolio_client'])) {
        update_post_meta($post_id, 'portfolio_client', sanitize_text_field($_POST['portfolio_client']));
    }
    if (isset($_POST['portfolio_technology'])) {
        update_post_meta($post_id, 'portfolio_technology', sanitize_text_field($_POST['portfolio_technology']));
    }
    if (isset($_POST['portfolio_url'])) {
        update_post_meta($post_id, 'portfolio_url', esc_url_raw($_POST['portfolio_url']));
    }
    if (isset($_POST['portfolio_gallery'])) {
        update_post_meta($post_id, 'portfolio_gallery', sanitize_text_field($_POST['portfolio_gallery']));
    }

    // Save team meta
    if (isset($_POST['team_position'])) {
        update_post_meta($post_id, 'team_position', sanitize_text_field($_POST['team_position']));
    }
    if (isset($_POST['team_email'])) {
        update_post_meta($post_id, 'team_email', sanitize_email($_POST['team_email']));
    }
    if (isset($_POST['team_linkedin'])) {
        update_post_meta($post_id, 'team_linkedin', esc_url_raw($_POST['team_linkedin']));
    }
    if (isset($_POST['team_twitter'])) {
        update_post_meta($post_id, 'team_twitter', esc_url_raw($_POST['team_twitter']));
    }

    // Save testimonial meta
    if (isset($_POST['testimonial_company'])) {
        update_post_meta($post_id, 'testimonial_company', sanitize_text_field($_POST['testimonial_company']));
    }
    if (isset($_POST['testimonial_position'])) {
        update_post_meta($post_id, 'testimonial_position', sanitize_text_field($_POST['testimonial_position']));
    }
    if (isset($_POST['testimonial_rating'])) {
        update_post_meta($post_id, 'testimonial_rating', intval($_POST['testimonial_rating']));
    }
}
add_action('save_post', 'codesclue_save_meta_box_data');

/**
 * Customizer settings
 */


/**
 * Include additional files
 */
require get_template_directory() . '/inc/template-functions.php';
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/customizer.php';

// Include industry-specific functions
if (file_exists(get_template_directory() . '/industries/cannabis-functions.php')) {
    require get_template_directory() . '/industries/cannabis-functions.php';
}

/**
 * Contact Form Handler
 */
function codesclue_contact_form_handler()
{
    // Verify nonce
    if (!wp_verify_nonce($_POST['nonce'], 'codesclue_contact_nonce')) {
        wp_die('Security check failed');
    }

    // Sanitize form data
    $name = sanitize_text_field($_POST['name']);
    $email = sanitize_email($_POST['email']);
    $phone = sanitize_text_field($_POST['phone']);
    $company = sanitize_text_field($_POST['company']);
    $service = sanitize_text_field($_POST['service']);
    $budget = sanitize_text_field($_POST['budget']);
    $message = sanitize_textarea_field($_POST['message']);
    $newsletter = isset($_POST['newsletter']) ? 'Yes' : 'No';

    // Validate required fields
    if (empty($name) || empty($email) || empty($message)) {
        wp_send_json_error('Please fill in all required fields.');
    }

    // Email subject and content
    $subject = 'New Contact Form Submission - ' . get_bloginfo('name');
    $admin_email = get_option('admin_email');

    $email_content = "New contact form submission:\n\n";
    $email_content .= "Name: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Phone: $phone\n";
    $email_content .= "Company: $company\n";
    $email_content .= "Service: $service\n";
    $email_content .= "Budget: $budget\n";
    $email_content .= "Message: $message\n";
    $email_content .= "Newsletter: $newsletter\n";

    // Send email
    $headers = array('Content-Type: text/plain; charset=UTF-8');
    $sent = wp_mail($admin_email, $subject, $email_content, $headers);

    if ($sent) {
        wp_send_json_success('Thank you for your message. We will get back to you soon!');
    } else {
        wp_send_json_error('Sorry, there was an error sending your message. Please try again.');
    }
}
add_action('wp_ajax_codesclue_contact_form', 'codesclue_contact_form_handler');
add_action('wp_ajax_nopriv_codesclue_contact_form', 'codesclue_contact_form_handler');

/**
 * Add custom image sizes
 */
function codesclue_add_image_sizes()
{
    add_image_size('codesclue-hero', 1920, 1080, true);
    add_image_size('codesclue-thumbnail', 350, 250, true);
    add_image_size('codesclue-medium', 750, 500, true);
    add_image_size('codesclue-large', 1200, 800, true);
    add_image_size('codesclue-team', 300, 300, true);
    add_image_size('codesclue-portfolio', 600, 400, true);
}
add_action('after_setup_theme', 'codesclue_add_image_sizes');

/**
 * Add custom body classes
 */
function codesclue_body_classes($classes)
{
    // Add page-specific classes
    if (is_front_page()) {
        $classes[] = 'home-page';
    }
    if (is_page_template('page-home.php')) {
        $classes[] = 'home-template';
    }

    return $classes;
}
add_filter('body_class', 'codesclue_body_classes');

/**
 * Add custom excerpt length
 */
function codesclue_excerpt_length($length)
{
    return 20;
}
add_filter('excerpt_length', 'codesclue_excerpt_length');

/**
 * Add custom excerpt more
 */
function codesclue_excerpt_more($more)
{
    return '...';
}
add_filter('excerpt_more', 'codesclue_excerpt_more');

/**
 * Add custom login logo
 */
function codesclue_login_logo()
{
    $logo = get_theme_mod('codesclue_logo');
    if ($logo) {
        echo '<style type="text/css">
            #login h1 a {
                background-image: url(' . esc_url($logo) . ') !important;
                background-size: contain !important;
                width: 320px !important;
                height: 80px !important;
            }
        </style>';
    }
}
add_action('login_head', 'codesclue_login_logo');

/**
 * Add custom login logo URL
 */
function codesclue_login_logo_url()
{
    return home_url();
}
add_filter('login_headerurl', 'codesclue_login_logo_url');

/**
 * Add custom login logo title
 */
function codesclue_login_logo_url_title()
{
    return get_bloginfo('name');
}
add_filter('login_headertext', 'codesclue_login_logo_url_title');

/**
 * Add custom admin footer
 */
function codesclue_admin_footer()
{
    echo 'Powered by <a href="' . esc_url(home_url()) . '">' . get_bloginfo('name') . '</a>';
}
add_filter('admin_footer_text', 'codesclue_admin_footer');

/**
 * Add custom dashboard widgets
 */
function codesclue_add_dashboard_widgets()
{
    wp_add_dashboard_widget(
        'codesclue_dashboard_widget',
        'CodesClue Theme Info',
        'codesclue_dashboard_widget_callback'
    );
}
add_action('wp_dashboard_setup', 'codesclue_add_dashboard_widgets');

function codesclue_dashboard_widget_callback()
{
    echo '<p>Welcome to your CodesClue WordPress theme!</p>';
    echo '<p><strong>Quick Links:</strong></p>';
    echo '<ul>';
    echo '<li><a href="' . admin_url('post-new.php?post_type=services') . '">Add New Service</a></li>';
    echo '<li><a href="' . admin_url('post-new.php?post_type=portfolio') . '">Add New Portfolio Item</a></li>';
    echo '<li><a href="' . admin_url('post-new.php?post_type=team') . '">Add New Team Member</a></li>';
    echo '<li><a href="' . admin_url('post-new.php?post_type=testimonials') . '">Add New Testimonial</a></li>';
    echo '</ul>';
}

/**
 * Add custom admin menu
 */
function codesclue_admin_menu()
{
    add_menu_page(
        'CodesClue Settings',
        'CodesClue',
        'manage_options',
        'codesclue-settings',
        'codesclue_settings_page',
        'dashicons-admin-generic',
        30
    );
}
add_action('admin_menu', 'codesclue_admin_menu');

function codesclue_settings_page()
{
    ?>
    <div class="wrap">
        <h1>CodesClue Theme Settings</h1>
        <p>Welcome to your CodesClue WordPress theme settings page.</p>
        <p>Use the <a href="<?php echo admin_url('customize.php'); ?>">WordPress Customizer</a> to customize your theme.</p>
        <p>For migration assistance, go to <a href="<?php echo admin_url('tools.php?page=codesclue-migration'); ?>">Tools →
                CodesClue Migration</a>.</p>
    </div>
    <?php
}

/**
 * Include migration script
 */
require get_template_directory() . '/migration-script.php';

function codesclue_team_images() {
    wp_enqueue_script('team-js', get_template_directory_uri() . '/assets/js/team.js', array(), '1.0.0', true);

    $images = [
        get_template_directory_uri() . '/assets/images/teams/S11.png',
        get_template_directory_uri() . '/assets/images/teams/S12.png',
        get_template_directory_uri() . '/assets/images/teams/BIG-1.png',
        get_template_directory_uri() . '/assets/images/teams/S13.png',
        get_template_directory_uri() . '/assets/images/teams/S14.png',

        get_template_directory_uri() . '/assets/images/teams/S21.png',
        get_template_directory_uri() . '/assets/images/teams/S22.png',
        get_template_directory_uri() . '/assets/images/teams/big-2.png',
        get_template_directory_uri() . '/assets/images/teams/S23.png',
        get_template_directory_uri() . '/assets/images/teams/S24.png',

        get_template_directory_uri() . '/assets/images/teams/S31.png',
        get_template_directory_uri() . '/assets/images/teams/S32.png',
        get_template_directory_uri() . '/assets/images/teams/big-3.png',
        get_template_directory_uri() . '/assets/images/teams/S33.png',
        get_template_directory_uri() . '/assets/images/teams/S34.png',
    ];

    wp_localize_script('team-js', 'teamData', array(
        'images' => $images
    ));
}
add_action('wp_enqueue_scripts', 'codesclue_team_images');





add_action('phpmailer_init', function ($phpmailer) {
    $phpmailer->isSMTP();
    $phpmailer->Host = 'smtp.gmail.com';
    $phpmailer->SMTPAuth = true;
    $phpmailer->Username = 'business@codesclue.com'; // your Gmail
    $phpmailer->Password = 'cmly yrin zrgb zlni';          // Gmail App Password
    $phpmailer->SMTPSecure = 'ssl';                        // tls or ssl
    $phpmailer->Port = 465;                          // 465 for ssl
});
function send_contact_email()
{
    // Sanitize common fields
    $name = sanitize_text_field($_POST['name'] ?? '');
    $to = sanitize_email($_POST['email'] ?? '');
    $phone = sanitize_text_field($_POST['phone'] ?? '');
    $form_id = sanitize_text_field($_POST['form_id'] ?? 'contact_form');
    $cc = ['ketan@codesclue.com'];
 
    if (empty($name) || empty($to)) {
        wp_send_json_error('Please fill in all required fields.');
    }
 
    // Prepare table rows for email
    $rows = "
        <tr>
            <td><strong>Name:</strong></td>
            <td>{$name}</td>
        </tr>
        <tr>
            <td><strong>Email:</strong></td>
            <td>{$to}</td>
        </tr>
        <tr>
            <td><strong>Phone:</strong></td>
            <td>{$phone}</td>
        </tr>
    ";
 
    // Message field
    if (!empty($_POST['message'])) {
        $message = sanitize_textarea_field($_POST['message']);
        $rows .= "
        <tr>
            <td><strong>Message:</strong></td>
            <td>" . nl2br($message) . "</td>
        </tr>";
    }
 
    // Services field
    if (!empty($_POST['services']) && is_array($_POST['services'])) {
        $services = array_map('sanitize_text_field', $_POST['services']);
        $rows .= "
        <tr>
            <td><strong>Services:</strong></td>
            <td>" . implode(', ', $services) . "</td>
        </tr>";
    }
 
    // Job type / options field
    if (!empty($_POST['job-type']) && is_array($_POST['job-type'])) {
        $options = array_map('sanitize_text_field', $_POST['job-type']);
        $rows .= "
        <tr>
            <td><strong>Options:</strong></td>
            <td>" . implode(', ', $options) . "</td>
        </tr>";
    }
 
    // Email body with logo and table
    $body = '
    <html>
    <body style="font-family: Arial, sans-serif; line-height:1.5; color:#333;">
        <div style="max-width:600px; margin:0 auto; padding:20px; border:1px solid #ddd; border-radius:8px;">
            <div style="text-align:center; margin-bottom:20px;">
                <img src="https://codesclue.com/wp-content/themes/codesclue/assets/images/codesclue_Logo.png" alt="Company Logo" style="max-width:150px;">
            </div>
            <h2 style="text-align:center; color:#444;">Crafting Quality, Building Bonds for a Lifetime</h2>
            <table style="width:100%; border-collapse:collapse; margin-top:20px;">
                ' . $rows . '
            </table>
        </div>
    </body>
    </html>
    ';
 
    $headers = [
        "MIME-Version: 1.0",
        "Content-Type: text/html; charset=UTF-8",
        "From: CodesClue <yash.codesclue@gmail.com>", // must match SMTP
        "Cc: " . implode(", ", $cc)
    ];
 
    // Send email
    if (wp_mail($to, "Thank you for conacting us, {$name}", $body, $headers)) {
        wp_send_json_success("Email sent to $to and CC'd to " . implode(", ", $cc));
    } else {
        global $phpmailer;
        $error = $phpmailer->ErrorInfo ?? 'Unknown error';
        wp_send_json_error("Failed to send email. Error: $error");
    }
}
 
 
 
add_action('wp_ajax_send_contact_email', 'send_contact_email');
add_action('wp_ajax_nopriv_send_contact_email', 'send_contact_email');
 
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_script('contact-form', get_template_directory_uri() . '/js/contact-form.js', ['jquery'], null, true);
    wp_localize_script('contact-form', 'contact_ajax_obj', [
        'ajax_url' => admin_url('admin-ajax.php')
    ]);
});