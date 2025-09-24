<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />

    <?php wp_head(); ?>

    <!-- Google tag (gtag.js) -->
    <script src="https://www.googletagmanager.com/gtag/js?id=G-1GMX7Q7FMN" defer></script>
    <script>
        const disabledEnvironments = ['staging.codesclue.com', '127.0.0.1', 'localhost'];
        const currentHost = window.location.hostname;

        if (!disabledEnvironments.includes(currentHost)) {
            (function () {
                var script = document.createElement('script');
                script.async = true;
                script.src = "https://www.googletagmanager.com/gtag/js?id=G-1GMX7Q7FMN";
                document.head.appendChild(script);

                script.onload = function () {
                    window.dataLayer = window.dataLayer || [];
                    function gtag() { dataLayer.push(arguments); }
                    gtag('js', new Date());
                    gtag('config', 'G-1GMX7Q7FMN');
                };
            })();
        } else {
            console.log("Google Analytics disabled on this environment:", currentHost);
        }
    </script>
</head>
<style>
    .ai-bg.hero-section-ai {
        position: relative;
        min-height: 650px;
        height: calc(100vh - 75px);
        overflow: hidden;
        cursor: auto !important;
        background-image: url('<?php echo get_template_directory_uri(); ?>/assets/gif/codesclue_website-ai-video.gif');
        background-position: center;
        background-size: 100% 100%;
    }

    .video-wrapper-ai {
        background: linear-gradient(rgba(16, 16, 16, 0.3), rgba(16, 16, 16, 0.3)),
            url('<?php echo get_template_directory_uri(); ?>/assets/gif/codesclue_ai-tech-video.gif') center / cover no-repeat !important;
        background-position: center;
        background-size: 100% 100%;
        height: 400px;
    }

 .ai-video-wraper {
    background: linear-gradient(to top, #00000099, #00000090, #00000090, #00000099), url('<?php echo get_template_directory_uri(); ?>/assets/gif/codesclue_ai-method-video.gif') center / cover no-repeat !important;
    height: 460px !important;
}
    .nav-item.active > .nav-link {
    color: #108aff !important;
    padding: 8px 15px;
    border-radius: 5px;
}
</style>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <!-- Header -->
    <header>
        >
        <nav class="navbar navbar-expand-xl navbar-light bg-white fixed-top box-shadow-md nav-desktop">

            <div class="container d-flex align-items-center justify-content-between" style="height: 60px;">
                <!-- left side logo + pill -->
                <div class="d-flex gap-sm-3 gap-1 align-items-center">
                    <a class="navbar-brand py-0 my-xl-0 my-2 me-0" href="<?php echo home_url(''); ?>">
                        <img loading="lazy"
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/codesclue_Logo.png"
                            class="nav-logo" alt="logo" />
                        <img loading="lazy"
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/codesclue_favicon.png"
                            width="50" height="50" class="nav-logo d-none" alt="logo" />
                    </a>
                    <a class="d-flex gap-2 ai-pill py-0 my-xl-0 my-2 me-0"
                        href="<?php echo home_url('/ai-software-development/'); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/codesclue-ai.svg"
                            class="btn-img-20"" alt=" codesclue-ai" />
                        <p class="content-desc">AI-Powered Growth</p>
                    </a>
                </div>

                <!-- right side toggler + contact button -->
                <div class="d-flex gap-0 align-items-center">
                    <a class="btn btn-primary d-xl-none" href="<?php echo home_url('/contact-us/'); ?>">Contact us</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon open-icon"></span>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/codesclue_close-icon.webp"
                            class="my-close-icon d-none ms-2" width="25" height="25" alt="close-icon" />
                    </button>
                </div>
                <div class="collapse navbar-collapse ul-nav gap-3 mobile-just" id="navbarNav">
                    <?php $current_page = basename($_SERVER['PHP_SELF']); ?>
                    <ul class="navbar-nav g-nav-5">
                        <li class="nav-item <?php if ( is_front_page() || is_home() ) echo 'active'; ?>">
                            <a class="nav-link" aria-current="page" href="<?php echo home_url(''); ?>">Home</a>
                        </li>

                        <li
                            class="nav-item dropdown has_submenu d-xl-flex d-none <?php if (is_page(array('about-us','privacy','meet-our-team','clinet-testimonials','faq','our-company'))) echo 'active'; ?>">
                            <a class="nav-link dropdown-toggle" id="AboutDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                About
                            </a>


                            <div class="dropdown-menu w-auto " aria-labelledby="AboutDropdown">
                                <div class="outer-dropdown">
                                    <div class="dropdown-box">
                                        <div class="dropdown-content-box d-grid grid-2 gap-1">
                                            <div class="link-box">
                                                <div class>
                                                    <div
                                                        class="d-flex align-items-center text-uppercase bold-text justify-content-between mb-xl-3 mb-2 ps-xl-2 ps-0 nav-heading">
                                                        About the
                                                        company
                                                    </div>

                                                </div>

                                                <div
                                                    class="dropdown-single-item d-flex justify-content-sm-start justify-content-between flex-md-row flex-column">
                                                    <div class="inner-services">
                                                        <a class="nav-link dropdown-item d-flex gap-lg-3 gap-2 align-items-center"
                                                            href="<?php echo home_url('/about-us/'); ?>">
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_about.svg"
                                                                class="black-logo icon-menu-size-20" alt="about-logo" />
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/blue_icon/codesclue_blue_about.svg"
                                                                class="blue-logo icon-menu-size-20"
                                                                alt="about-blue-logo" />
                                                            About us</a>
                                                        <a class="nav-link dropdown-item d-flex gap-lg-3 gap-2 align-items-center"
                                                            href="<?php echo home_url('/privacy/'); ?>">
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_privacy.svg"
                                                                class="black-logo icon-menu-size-20"
                                                                alt="privacy-logo" />
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/blue_icon/codesclue_blue_privacy.svg"
                                                                class="blue-logo icon-menu-size-20"
                                                                alt="privacy-blue-logo" />
                                                            Privacy
                                                            Policy</a>
                                                    </div>
                                                    <div class="inner-services px-xl-5">
                                                        <a class="nav-link dropdown-item d-flex gap-lg-3 gap-2 align-items-center"
                                                            href="<?php echo home_url('/meet-our-team/'); ?>">
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_meet team.svg"
                                                                class="black-logo icon-menu-size-20"
                                                                alt="meetteam-logo" />
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/blue_icon/codesclue_blue_meet team.svg"
                                                                class="blue-logo icon-menu-size-20"
                                                                alt="meetteam-blue-logo" />
                                                            Meet Our
                                                            Team</a>
                                                        <a class="nav-link dropdown-item d-flex gap-lg-3 gap-2 align-items-center"
                                                            href="<?php echo home_url('/clinet-testimonials/'); ?>">
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_testimonial.svg"
                                                                class="black-logo icon-menu-size-20"
                                                                alt="testimonial-logo" />
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/blue_icon/codesclue_blue_testimonial.svg"
                                                                class="blue-logo icon-menu-size-20"
                                                                alt="testimonial-blue-logo" />
                                                            Client
                                                            Testimonial</a>
                                                    </div>
                                                    <div class="inner-services px-xl-5">

                                                        <a class="nav-link dropdown-item d-flex gap-lg-3 gap-2 align-items-center"
                                                            href="<?php echo home_url('/faq/'); ?>">
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_faq.svg"
                                                                class="black-logo icon-menu-size-20" alt="faq-logo" />
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/blue_icon/codesclue_blue_faq.svg"
                                                                class="blue-logo icon-menu-size-20"
                                                                alt="faq-blue-logo" />
                                                            FAQs</a>
                                                        <a class="nav-link dropdown-item d-flex gap-lg-3 gap-2 align-items-center"
                                                            href="<?php echo home_url('/our-company/'); ?>">
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_Our_Company.svg"
                                                                class="black-logo icon-menu-size-20" alt="faq-logo" />
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/blue_icon/codesclue_blue_Our_Company.svg"
                                                                class="blue-logo icon-menu-size-20"
                                                                alt="faq-blue-logo" />
                                                            Our Company</a>
                                                    </div>
                                                    <div class="inner-services">
                                                        <div
                                                            class="bg-light-blue p-xxl-4 d-sm-grid d-flex flex-sm-row flex-column grid-2 gap-xl-4 gap-2 p-sm-3 p-2">
                                                            <a target="_blank" href="mailto:business@codesclue.com"
                                                                class="social-details d-flex gap-sm-3 gap-1 align-items-center">
                                                                <img loading="lazy"
                                                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/header/social_icon/codesclue_mail.svg"
                                                                    class="size-32" alt="mail-logo" />
                                                                <div class="d-flex flex-column gap-1">
                                                                    <span class="gray-text mb-0">Email
                                                                        ID</span>
                                                                    <strong>business@codesclue.com</strong>
                                                                </div>
                                                            </a>
                                                            <a target="_blank"
                                                                href="https://www.linkedin.com/company/codesclue/posts/?feedView=all"
                                                                class="social-details d-flex gap-sm-3 gap-1 align-items-center">
                                                                <img loading="lazy"
                                                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/header/social_icon/codesclue_linkedin.svg"
                                                                    class="size-32" alt="skype-logo" />
                                                                <div class="d-flex flex-column gap-1">
                                                                    <span class="gray-text mb-0">linkedin</span>
                                                                    <strong>CodesClue</strong>
                                                                </div>
                                                            </a>
                                                            <a target="_blank" href="https://wa.me/+919998977764"
                                                                class="social-details d-flex gap-sm-3 gap-1 align-items-center">
                                                                <img loading="lazy"
                                                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/header/social_icon/codesclue_whatsapp.svg"
                                                                    class="size-32" alt="whatsapp-logo" />
                                                                <div class="d-flex flex-column gap-1">
                                                                    <span class="gray-text mb-0">WhatsApp
                                                                        Number</span>
                                                                    <strong>+91
                                                                        99989
                                                                        77764</strong>
                                                                </div>
                                                            </a>
                                                            <a target="_blank" href="https://dribbble.com/CodesClue"
                                                                class="social-details d-flex gap-sm-3 gap-1 align-items-center">
                                                                <img loading="lazy"
                                                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/new/dribble.svg"
                                                                    class="size-32" alt="insta-logo" />
                                                                <div class="d-flex flex-column gap-1">
                                                                    <span class="gray-text mb-0">Dribbble</span>
                                                                    <strong>CodesClue</strong>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>


                        <li class="nav-item dropdown has_submenu d-xl-flex d-none <?php if ( is_page( array(
                                'android', 'react-native', 'flutter', 'ios', 'ipad', 'pwa', 'kotlin', 'swift',
                                'html-page', 'css', 'js', 'angular', 'react-js', 'vue-js',
                                'laravel', 'php', 'node-js', 'java', 'ror', 'mongo-db', 'dotnet',
                                'auto-mated-testing', 'manual-testing', 'api-testing', 'mobile-testing', 
                                'software-testing', 'support-testing', 'performance-testing'
                            ) ) ) echo 'active'; ?>">
                            <a class="nav-link dropdown-toggle" id="ServiceDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Services
                            </a>
                            <div class="dropdown-menu" aria-labelledby="ServiceDropdown">
                                <div class="outer-dropdown">
                                    <div class="dropdown-box">
                                        <div class="dropdown-content-box d-grid grid-4 ">
                                            <div class="link-box px-xl-1">
                                                <div
                                                    class="nav-heading d-flex align-items-center text-uppercase bold-text justify-content-between mb-xl-3 mb-2 ps-xl-2 ps-0">
                                                    Mobile Development
                                                </div>

                                                <div
                                                    class="dropdown-single-item d-flex flex-row justify-content-sm-start justify-content-between gap-5 flex-wrap">
                                                    <div class="inner-services">
                                                        <a class="nav-link dropdown-item d-flex gap-lg-3 gap-2 align-items-center"
                                                            href="<?php echo home_url('/android/'); ?>">
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_android.svg"
                                                                class="black-logo icon-menu-size-20"
                                                                alt="android-logo" />
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/blue_icon/codesclue_blue_android.svg"
                                                                class="blue-logo icon-menu-size-20"
                                                                alt="android-blue-logo" />
                                                            Android</a>
                                                        <a class="nav-link dropdown-item d-flex gap-lg-3 gap-2 align-items-center"
                                                            href="<?php echo home_url('/react-native/'); ?>">
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_react.svg"
                                                                class="black-logo icon-menu-size-20"
                                                                alt="reactjs-logo" />
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/blue_icon/codesclue_blue_react.svg"
                                                                class="blue-logo icon-menu-size-20"
                                                                alt="reactjs-blue-logo" />
                                                            React
                                                            Native</a>
                                                        <a class="nav-link dropdown-item d-flex gap-lg-3 gap-2 align-items-center"
                                                            href="<?php echo home_url('/flutter/'); ?>">
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_flutter.svg"
                                                                class="black-logo icon-menu-size-20"
                                                                alt="flutter-logo" />
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/blue_icon/codesclue_blue_flutter.svg"
                                                                class="blue-logo icon-menu-size-20"
                                                                alt="flutter-blue-logo" />
                                                            Flutter</a>
                                                        <a class="nav-link dropdown-item d-flex gap-lg-3 gap-2 align-items-center"
                                                            href="<?php echo home_url('/ios/'); ?>">
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_ios.svg"
                                                                class="black-logo icon-menu-size-20" alt="ios-logo" />
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/blue_icon/codesclue_blue_ios.svg"
                                                                class="blue-logo icon-menu-size-20"
                                                                alt="ios-blue-logo" />
                                                            iOS</a>
                                                        <a class="nav-link dropdown-item d-flex gap-lg-3 gap-2 align-items-center"
                                                            href="<?php echo home_url('/ipad/'); ?>">
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_ipad.svg"
                                                                class="black-logo icon-menu-size-20" alt="ipad-logo" />
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/blue_icon/codesclue_blue_ipad.svg"
                                                                class="blue-logo icon-menu-size-20"
                                                                alt="ipad-blue-logo" />
                                                            iPad</a>
                                                        <a class="nav-link dropdown-item d-flex gap-lg-3 gap-2 align-items-center"
                                                            href="<?php echo home_url('/pwa/'); ?>">
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_pwa.svg"
                                                                class="black-logo icon-menu-size-20" alt="pwa-logo" />
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/blue_icon/codesclue_blue_pwa.svg"
                                                                class="blue-logo icon-menu-size-20"
                                                                alt="pwa-blue-logo" />
                                                            PWA</a>
                                                        <a class="nav-link dropdown-item d-flex gap-lg-3 gap-2 align-items-center"
                                                            href="<?php echo home_url('/kotlin/'); ?>">
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_kotlin.svg"
                                                                class="black-logo icon-menu-size-20"
                                                                alt="kotlin-logo" />
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/blue_icon/codesclue_blue_kotlin.svg"
                                                                class="blue-logo icon-menu-size-20"
                                                                alt="kotlin-blue-logo" />
                                                            Kotlin</a>
                                                        <a class="nav-link dropdown-item d-flex gap-lg-3 gap-2 align-items-center"
                                                            href="<?php echo home_url('/swift/'); ?>">
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_swift.svg"
                                                                class="black-logo icon-menu-size-20" alt="swift-logo" />
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/blue_icon/codesclue_blue_swift.svg"
                                                                class="blue-logo icon-menu-size-20"
                                                                alt="swift-blue-logo" />
                                                            Swift</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="link-box px-xl-5">
                                                <div
                                                    class="nav-heading d-flex align-items-center text-uppercase bold-text justify-content-between mb-xl-3 mb-2 ps-xl-2 ps-0">
                                                    Frontend Development
                                                </div>

                                                <div
                                                    class="dropdown-single-item d-flex flex-row justify-content-sm-start justify-content-between gap-5 flex-wrap">
                                                    <div class="inner-services">
                                                        <a class="nav-link dropdown-item d-flex gap-lg-3 gap-2 align-items-center"
                                                            href="<?php echo home_url('/html-page/'); ?>">
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_html.svg"
                                                                class="black-logo icon-menu-size-20"
                                                                alt="htmlpage-logo" />
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/blue_icon/codesclue_blue_html.svg"
                                                                class="blue-logo icon-menu-size-20"
                                                                alt="htmlpage-blue-logo" />
                                                            Html</a>
                                                        <a class="nav-link dropdown-item d-flex gap-lg-3 gap-2 align-items-center"
                                                            href="<?php echo home_url('/css/'); ?>">
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_css.svg"
                                                                class="black-logo icon-menu-size-20" alt="css-logo" />
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/blue_icon/codesclue_blue_css.svg"
                                                                class="blue-logo icon-menu-size-20"
                                                                alt="css-blue-logo" />
                                                            CSS</a>
                                                        <a class="nav-link dropdown-item d-flex gap-lg-3 gap-2 align-items-center"
                                                            href="<?php echo home_url('/js/'); ?>">
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_js.svg"
                                                                class="black-logo icon-menu-size-20" alt="js-logo" />
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/blue_icon/codesclue_blue_js.svg"
                                                                class="blue-logo icon-menu-size-20"
                                                                alt="js-blue-logo" />
                                                            Javascript</a>
                                                        <a class="nav-link dropdown-item d-flex gap-lg-3 gap-2 align-items-center"
                                                            href="<?php echo home_url('/angular/'); ?>">
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_angular.svg"
                                                                class="black-logo icon-menu-size-20"
                                                                alt="angular-logo" />
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/blue_icon/codesclue_blue_angular.svg"
                                                                class="blue-logo icon-menu-size-20"
                                                                alt="angular-blue-logo" />
                                                            Angular</a>
                                                        <a class="nav-link dropdown-item d-flex gap-lg-3 gap-2 align-items-center"
                                                            href="<?php echo home_url('/react-js/'); ?>">
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_react.svg"
                                                                class="black-logo icon-menu-size-20"
                                                                alt="reactjs-logo" />
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/blue_icon/codesclue_blue_react.svg"
                                                                class="blue-logo icon-menu-size-20"
                                                                alt="reactjs-blue-logo" />
                                                            React.js</a>
                                                        <a class="nav-link dropdown-item d-flex gap-lg-3 gap-2 align-items-center"
                                                            href="<?php echo home_url('/vue-js/'); ?>">
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_vue.svg"
                                                                class="black-logo icon-menu-size-20" alt="vuejs-logo" />
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/blue_icon/codesclue_blue_vue.svg"
                                                                class="blue-logo icon-menu-size-20"
                                                                alt="vuejs-blue-logo" />
                                                            Vue.JS</a>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="link-box px-xl-5">
                                                <div
                                                    class="nav-heading d-flex align-items-center text-uppercase bold-text justify-content-between mb-xl-3 mb-2 ps-xl-2 ps-0">
                                                    Backend Development
                                                </div>

                                                <div
                                                    class="dropdown-single-item d-flex flex-row justify-content-sm-start justify-content-between gap-5 flex-wrap">
                                                    <div class="inner-services">
                                                        <a class="nav-link dropdown-item d-flex gap-lg-3 gap-2 align-items-center"
                                                            href="<?php echo home_url('/laravel/'); ?>">
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_laravel.svg"
                                                                class="black-logo icon-menu-size-20"
                                                                alt="laravel-logo" />
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/blue_icon/codesclue_blue_laravel.svg"
                                                                class="blue-logo icon-menu-size-20"
                                                                alt="laravel-blue-logo" />
                                                            Laravel</a>
                                                        <a class="nav-link dropdown-item d-flex gap-lg-3 gap-2 align-items-center"
                                                            href="<?php echo home_url('/php/'); ?>">
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_php.svg"
                                                                class="black-logo icon-menu-size-20" alt="php-logo" />
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/blue_icon/codesclue_blue_php.svg"
                                                                class="blue-logo icon-menu-size-20"
                                                                alt="php-blue-logo" />
                                                            PHP</a>
                                                        <a class="nav-link dropdown-item d-flex gap-lg-3 gap-2 align-items-center"
                                                            href="<?php echo home_url('/node-js/'); ?>">
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_node.svg"
                                                                class="black-logo icon-menu-size-20" alt="node-logo" />
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/blue_icon/codesclue_blue_node.svg"
                                                                class="blue-logo icon-menu-size-20"
                                                                alt="node-blue-logo" />
                                                            Node.js</a>
                                                        <a class="nav-link dropdown-item d-flex gap-lg-3 gap-2 align-items-center"
                                                            href="<?php echo home_url('/java/'); ?>">
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_java.svg"
                                                                class="black-logo icon-menu-size-20" alt="java-logo" />
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/blue_icon/codesclue_blue_java.svg"
                                                                class="blue-logo icon-menu-size-20"
                                                                alt="java-blue-logo" />
                                                            Java</a>
                                                        <a class="nav-link dropdown-item d-flex gap-lg-3 gap-2 align-items-center"
                                                            href="<?php echo home_url('/ror/'); ?>">
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_rails.svg"
                                                                class="black-logo icon-menu-size-20" alt="ruby-logo" />
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/blue_icon/codesclue_blue_rails.svg"
                                                                class="blue-logo icon-menu-size-20"
                                                                alt="ruby-blue-logo" />
                                                            Ruby on
                                                            Rails</a>
                                                        <a class="nav-link dropdown-item d-flex gap-lg-3 gap-2 align-items-center"
                                                            href="<?php echo home_url('/mongo-db/'); ?>">
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_mongodb.svg"
                                                                class="black-logo icon-menu-size-20"
                                                                alt="mongodb-logo" />
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/blue_icon/codesclue_blue_mongodb.svg"
                                                                class="blue-logo icon-menu-size-20"
                                                                alt="mongodb-blue-logo" />
                                                            MongoDB</a>
                                                        <a class="nav-link dropdown-item d-flex gap-lg-3 gap-2 align-items-center"
                                                            href="<?php echo home_url('/dotnet/'); ?>">
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_dotnet.svg"
                                                                class="black-logo icon-menu-size-20"
                                                                alt="dotnet-logo" />
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/blue_icon/codesclue_blue_dotnet.svg"
                                                                class="blue-logo icon-menu-size-20"
                                                                alt="dotnet-blue-logo" />
                                                            .NET</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="link-box px-xl-5">
                                                <div
                                                    class="nav-heading d-flex align-items-center text-uppercase bold-text justify-content-between mb-xl-3 mb-2 ps-xl-2 ps-0">
                                                    Testing & QA
                                                </div>

                                                <div
                                                    class="dropdown-single-item d-flex flex-row justify-content-sm-start justify-content-between gap-5 flex-wrap">
                                                    <div class="inner-services">
                                                        <a class="nav-link dropdown-item d-flex gap-lg-3 gap-2 align-items-center"
                                                            href="<?php echo home_url('/auto-mated-testing/'); ?>">
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_auto.svg"
                                                                class="black-logo icon-menu-size-20"
                                                                alt="automatedtesting-logo" />
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/blue_icon/codesclue_blue_auto.svg"
                                                                class="blue-logo icon-menu-size-20"
                                                                alt="automatedtesting-blue-logo" />
                                                            Automated
                                                            Testing</a>
                                                        <a class="nav-link dropdown-item d-flex gap-lg-3 gap-2 align-items-center"
                                                            href="<?php echo home_url('/manual-testing/'); ?>">
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_manual.svg"
                                                                class="black-logo icon-menu-size-20"
                                                                alt="manualtesting-logo" />
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/blue_icon/codesclue_blue_manual.svg"
                                                                class="blue-logo icon-menu-size-20"
                                                                alt="manualtesting-blue-logo" />
                                                            Manual
                                                            Testing</a>
                                                        <a class="nav-link dropdown-item d-flex gap-lg-3 gap-2 align-items-center"
                                                            href="<?php echo home_url('/api-testing/'); ?>">
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_api.svg"
                                                                class="black-logo icon-menu-size-20"
                                                                alt="apitesting-logo" />
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/blue_icon/codesclue_blue_api.svg"
                                                                class="blue-logo icon-menu-size-20"
                                                                alt="apitesting-blue-logo" />
                                                            API
                                                            Testing</a>
                                                        <a class="nav-link dropdown-item d-flex gap-lg-3 gap-2 align-items-center"
                                                            href="<?php echo home_url('/mobile-testing/'); ?>"">
                                                            <img loading=" lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_mobile.svg"
                                                            class="black-logo icon-menu-size-20"
                                                            alt="mobiletesting-logo" />
                                                        <img loading="lazy"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/header/blue_icon/codesclue_blue_mobile.svg"
                                                            class="blue-logo icon-menu-size-20"
                                                            alt="mobiletesting-blue-logo" />
                                                        Mobile
                                                        Testing</a>
                                                        <a class="nav-link dropdown-item d-flex gap-lg-3 gap-2 align-items-center"
                                                            href="<?php echo home_url('/software-testing/'); ?>">
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_software.svg"
                                                                class="black-logo icon-menu-size-20"
                                                                alt="softwaretesting-logo" />
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/blue_icon/codesclue_blue_software.svg"
                                                                class="blue-logo icon-menu-size-20"
                                                                alt="softwaretesting-blue-logo" />
                                                            Software
                                                            Testing</a>
                                                        <a class="nav-link dropdown-item d-flex gap-lg-3 gap-2 align-items-center"
                                                            href="<?php echo home_url('/support-testing/'); ?>">
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_support.svg"
                                                                class="black-logo icon-menu-size-20"
                                                                alt="supporttesting-logo" />
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/blue_icon/codesclue_blue_support.svg"
                                                                class="blue-logo icon-menu-size-20"
                                                                alt="supporttesting-blue-logo" />
                                                            Support
                                                            Testing</a>
                                                        <a class="nav-link dropdown-item d-flex gap-lg-3 gap-2 align-items-center"
                                                            href="<?php echo home_url('/performance-testing/'); ?>">
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_performance.svg"
                                                                class="black-logo icon-menu-size-20"
                                                                alt="performancetesting-logo" />
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/blue_icon/codesclue_blue_performance.svg"
                                                                class="blue-logo icon-menu-size-20"
                                                                alt="performancetesting-blue-logo" />
                                                            Performance
                                                            Testing</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li
                            class="nav-item dropdown has_submenu d-xl-flex d-none <?php if ( is_page( array('our-portfolio','case-studies','blog') ) ) echo 'active'; ?>">
                            <a class="nav-link dropdown-toggle " id="OurWorkDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Our Work
                            </a>
                            <div class="dropdown-menu w-auto" aria-labelledby="OurWorkDropdown">
                                <div class="outer-dropdown">
                                    <div class="dropdown-box">
                                        <div class="dropdown-content-box d-grid grid-2 gap-xxl-5 gap-sm-3 gap-1">
                                            <div class="link-box">
                                                <div
                                                    class=" nav-heading d-flex align-items-center text-uppercase bold-text justify-content-between mb-xl-3 mb-2 ps-xl-2 ps-0">
                                                    Our Work
                                                </div>

                                                <div
                                                    class="dropdown-single-item d-flex flex-row justify-content-sm-start justify-content-between gap-5 flex-wrap">
                                                    <div class="inner-services">
                                                        <a class="nav-link dropdown-item d-flex gap-lg-3 gap-2 align-items-center"
                                                            href="<?php echo home_url('/our-portfolio/'); ?>">
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_portfolio.svg"
                                                                class="black-logo icon-menu-size-20"
                                                                alt="portfolio-logo" />
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/blue_icon/codesclue_blue_portfolio.svg"
                                                                class="blue-logo icon-menu-size-20"
                                                                alt="portfolio-blue-logo" />
                                                            Our
                                                            Portfolio</a>
                                                        <a class="nav-link dropdown-item d-flex gap-lg-3 gap-2 align-items-center"
                                                            href="<?php echo home_url('/case-studies/'); ?>">
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_case.svg"
                                                                class="black-logo icon-menu-size-20" alt="case-logo" />
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/blue_icon/codesclue_blue_case.svg"
                                                                class="blue-logo icon-menu-size-20"
                                                                alt="case-blue-logo" />
                                                            Case
                                                            Studies</a>
                                                    </div>
                                                    <div class="inner-services">

                                                        <a class="nav-link dropdown-item d-flex gap-lg-3 gap-2 align-items-center"
                                                            href="<?php echo home_url('/blog/'); ?>">
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_blog.svg"
                                                                class="black-logo icon-menu-size-20" alt="blog-logo" />
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/blue_icon/codesclue_blue_blog.svg"
                                                                class="blue-logo icon-menu-size-20"
                                                                alt="blog-blue-logo" />
                                                            Blog</a>
                                                    </div>
                                                    <div class="inner-services">
                                                        <div
                                                            class="d-sm-flex d-none flex-wrap gap-sm-4 gap-2 align-items-center justify-content-lg-start justify-content-center">

                                                            <div class="goodfirm-widget">
                                                                <a href="https://www.goodfirms.co/company/codesclue-technologies#review_analytics"
                                                                    rel="nofollow" target="_blank" class="content">
                                                                    <div class="stamp-widget_top">
                                                                        <div class="stamp-widget_rating">
                                                                            <span>5.0</span><span
                                                                                class="font-18">/</span>5
                                                                        </div>
                                                                        <p class="stamp-widget_reviews">
                                                                            7
                                                                            reviews
                                                                        </p>
                                                                    </div>
                                                                    <div class="stamp-widget_bottom">

                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            height="10" width="70"
                                                                            viewBox="0 0 140.8 21">
                                                                            <path
                                                                                d="M8.633 7.385s-1.166-.116-1.166.923v4.615h7.7v1.385s.023.692-.7.692h-7v6h8.4s5.086-.785 5.133-6V7.385zM20.766 0H5.6C.116 1.292 0 5.792 0 5.792V21h5.834V7.154C5.834 5.977 7 5.77 7 5.77h13.767V0zm20.022 16.648l-.905.588c-.748.463-1.461.82-2.122 1.105-.957.392-1.81.588-2.575.588-2.627 0-4.802-.802-6.56-2.424S26 12.852 26 10.393c0-2.37.783-4.42 2.366-6.167s3.497-2.602 5.759-2.602c.94 0 1.948.16 2.992.5 1.357.427 2.453 1.069 3.323 1.906l-1.514 1.675c-.643-.623-1.478-1.087-2.453-1.10-.73-.214-1.53-.32-2.418-.32-1.583 0-2.923.64-3.984 1.906-1.061 1.283-1.6 2.798-1.6 4.58 0 1.765.608 3.208 1.826 4.367s2.766 1.746 4.645 1.746c.783 0 1.584-.25 2.401-.73l1.044-.785v-3.653h-5.08l.73-2.281h6.751zm15.345-4.456c0 1.764-.626 3.297-1.879 4.58s-2.801 1.943-4.645 1.943c-1.705 0-3.201-.642-4.489-1.907s-1.914-2.798-1.914-4.598c0-1.782.61-3.315 1.827-4.634a5.84 5.84 0 0 1 4.471-1.96c1.949 0 3.532.624 4.767 1.889 1.236 1.23 1.862 2.798 1.862 4.687zm-2.384.036c0-1.194-.4-2.21-1.2-3.03-.8-.838-1.792-1.248-2.975-1.248-1.113 0-2.053.428-2.836 1.284s-1.166 1.835-1.166 2.94c0 1.159.4 2.139 1.183 2.959a3.9 3.9 0 0 0 2.94 1.247c1.097 0 2.036-.41 2.837-1.23a4 4 0 0 0 1.218-2.922zm17.52-.036c0 1.764-.626 3.297-1.879 4.58s-2.801 1.943-4.645 1.943c-1.705 0-3.201-.642-4.489-1.907a6.19 6.19 0 0 1-1.914-4.598c0-1.782.61-3.315 1.827-4.634a5.84 5.84 0 0 1 4.471-1.96c1.949 0 3.532.624 4.767 1.889 1.236 1.23 1.862 2.798 1.862 4.687zm-2.384.036c0-1.194-.4-2.21-1.2-3.03-.8-.838-1.792-1.248-2.975-1.248-1.113 0-2.053.428-2.836 1.284s-1.166 1.835-1.166 2.94c0 1.159.4 2.139 1.184 2.959s1.757 1.247 2.94 1.247c1.096 0 2.035-.41 2.836-1.23a4 4 0 0 0 1.218-2.922zm16.39 6.13l-2.192.339v-2.121l-.47.534a5.76 5.76 0 0 1-1.392.963 5.616 5.616 0 0 1-2.383.517 5.73 5.73 0 0 1-4.35-1.89c-1.183-1.266-1.774-2.762-1.774-4.508 0-1.8.591-3.35 1.757-4.634s2.592-1.925 4.297-1.925c.975 0 1.827.16 2.54.481a4.31 4.31 0 0 1 1.305.91l.366.498v-5.56l2.33-.339zm-2.053-6.006c0-1.247-.418-2.299-1.27-3.154-.852-.874-1.81-1.301-2.905-1.301-1.218 0-2.192.41-2.94 1.23-.697.783-1.062 1.746-1.062 2.869 0 1.265.365 2.316 1.096 3.136s1.653 1.23 2.784 1.23c1.113 0 2.088-.374 2.958-1.14.887-.785 1.34-1.747 1.34-2.87zM97.575 4.28h-6.524v4.437h5.062v2.281h-5.062v7.343l-2.54.374V1.98h8.559zm5.237-1.302l-1.566 1.978-1.496-1.978 1.583-1.96zm-.47 15.38l-2.331.321V6.293l2.331-.356v12.422zm10.526-12.546l-1.096 2.53a3.014 3.014 0 0 0-.435-.035c-.226 0-.452.018-.679.053s-.47.125-.73.25c-.487.214-.905.677-1.27 1.372a5.55 5.55 0 0 0-.61 2.549v5.81l-2.33.374V6.293l2.157-.392v2.584l.852-1.354c.4-.464.87-.802 1.392-.999.278-.106.783-.196 1.548-.267zm17.362 12.546l-2.331.339v-8.501c0-.785-.174-1.355-.522-1.711s-.87-.535-1.549-.535c-.817 0-1.444.339-1.861 1.016-.279.463-.435.962-.435 1.461v7.913l-2.331.428v-8.519c0-.748-.174-1.319-.505-1.71-.348-.393-.8-.589-1.392-.589h-.226c-.818 0-1.41.339-1.775 1.034-.278.517-.417 1.176-.417 1.978v7.378l-2.418.428V6.293l2.174-.374v1.586c.244-.375.487-.678.714-.891a3.08 3.08 0 0 1 2.174-.874c.922 0 1.6.143 2.07.446.4.25.783.748 1.166 1.461.8-1.265 1.931-1.907 3.428-1.907 1.426 0 2.488.446 3.183 1.355.575.748.853 1.853.853 3.297zm10.65-3.76c0 1.14-.4 2.085-1.2 2.816-.8.748-1.81 1.105-3.028 1.105a4.89 4.89 0 0 1-2.488-.642c-.748-.427-1.304-.909-1.67-1.479l1.636-1.461c.121.178.226.32.33.427.61.624 1.34.945 2.192.945.592 0 1.062-.16 1.392-.463.348-.303.505-.731.505-1.284 0-.623-.4-1.051-1.2-1.283l-2.558-.802c-.731-.374-1.253-.766-1.584-1.212-.365-.517-.556-1.194-.556-2.067a3.47 3.47 0 0 1 1.183-2.673c.783-.713 1.722-1.052 2.8-1.052.819 0 1.584.178 2.28.553s1.2.766 1.496 1.23l-1.392 1.514a5.11 5.11 0 0 0-.678-.57c-.557-.392-1.096-.588-1.6-.588-.488 0-.888.107-1.201.32-.366.268-.557.66-.557 1.177 0 .499.174.873.54 1.105.313.196.974.41 2.018.641 1.043.25 1.844.678 2.418 1.284.644.641.922 1.443.922 2.459z"
                                                                                fill="#fff" />
                                                                        </svg>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="goodfirm-widget">
                                                                <a href="https://clutch.co/profile/codesclue-technologies?utm_source=widget&utm_medium=9&utm_campaign=widget&utm_content=num_reviews&utm_term=127.0.0.1#reviews"
                                                                    rel="nofollow" target="_blank" class="content">
                                                                    <div class="stamp-widget_top">
                                                                        <div class="stamp-widget_rating">
                                                                            <span>5.0</span><span
                                                                                class="font-18">/</span>5
                                                                        </div>
                                                                        <p class="stamp-widget_reviews">
                                                                            4
                                                                            reviews
                                                                        </p>
                                                                    </div>
                                                                    <div class="stamp-widget_bottom">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            height="10" width="70"
                                                                            viewBox="0 0 87.861 25">
                                                                            <path fill="#FFFFFF"
                                                                                d="M22.861 0h4v25h-4zm18 17.025c0 3.826-3.217 4.131-4.174 4.131-2.391 0-2.826-2.238-2.826-3.588V8h-4v9.548c0 2.37.744 4.326 2.048 5.63 1.152 1.153 2.878 1.783 4.748 1.783 1.326 0 3.204-.413 4.204-1.326V25h4V8h-4zM52.861 2h-4v6h-3v4h3v13h4V12h3V8h-3zm15.597 17.917c-.871.783-2.021 1.217-3.283 1.217-2.782 0-4.825-2.043-4.825-4.848s1.978-4.762 4.825-4.762c1.24 0 2.412.413 3.305 1.196l.607.522 2.697-2.696-.675-.609C69.522 8.504 67.415 7.7 65.174 7.7c-5 0-8.631 3.608-8.631 8.565 0 4.936 3.718 8.673 8.631 8.673 2.283 0 4.412-.804 5.979-2.26l.652-.609-2.739-2.694zM86.061 9.482C84.909 8.33 83.559 7.7 81.689 7.7c-1.326 0-2.828.413-3.828 1.325V0h-4v25h4v-9.365c0-3.826 2.718-4.13 3.675-4.13 2.391 0 2.325 2.239 2.325 3.587V25h4v-9.887c0-2.37-.495-4.326-1.8-5.631" />
                                                                            <path fill="#FF3D2E"
                                                                                d="M65.043 13.438a2.891 2.891 0 1 1 0 5.784 2.891 2.891 0 0 1 0-5.784" />
                                                                            <path fill="#FFF"
                                                                                d="M17.261 18.721c-1.521 1.565-3.587 2.413-5.761 2.413-4.456 0-7.696-3.5-7.696-8.304 0-4.826 3.24-8.326 7.696-8.326 2.153 0 4.196.847 5.74 2.391l.608.609 2.674-2.674-.587-.609C17.718 1.938 14.718.7 11.5.7 4.935.7 0 5.917 0 12.851 0 19.764 4.957 24.96 11.5 24.96c3.24 0 6.24-1.26 8.457-3.543l.587-.609-2.652-2.717z" />
                                                                        </svg>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </li>

                        <li
                            class="nav-item dropdown has_submenu d-xl-flex d-none <?php if ( is_page( array(
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
                            ) ) ) echo 'active'; ?>">
                            <a class="nav-link dropdown-toggle" id="HireDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Hire Developer
                            </a>
                            <div class="dropdown-menu" aria-labelledby="HireDropdown">
                                <div class="outer-dropdown">
                                    <div class="dropdown-box">
                                        <div class="dropdown-content-box d-grid grid-4 ">

                                            <div class="link-box px-xl-1">
                                                <div
                                                    class="nav-heading d-flex align-items-center text-uppercase bold-text justify-content-between mb-xl-3 mb-2 ps-xl-2 ps-0">
                                                    Mobile Developer
                                                </div>

                                                <div
                                                    class="dropdown-single-item d-flex flex-row justify-content-sm-start justify-content-between gap-5 flex-wrap">
                                                    <div class="inner-services">
                                                        <a class="nav-link dropdown-item d-flex gap-lg-3 gap-2 align-items-center"
                                                            href="<?php echo home_url('/hire-android-developer/'); ?>">
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_android.svg"
                                                                class="black-logo icon-menu-size-20"
                                                                alt="android-logo" />
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/blue_icon/codesclue_blue_android.svg"
                                                                class="blue-logo icon-menu-size-20"
                                                                alt="android-blue-logo" />
                                                            Hire
                                                            Android
                                                            developers</a>
                                                        <a class="nav-link dropdown-item d-flex gap-lg-3 gap-2 align-items-center"
                                                            href="<?php echo home_url('/hire-react-native-developer/'); ?>">
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_react.svg"
                                                                class="black-logo icon-menu-size-20"
                                                                alt="reactjs-logo" />
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/blue_icon/codesclue_blue_react.svg"
                                                                class="blue-logo icon-menu-size-20"
                                                                alt="reactjs-blue-logo" />
                                                            Hire
                                                            React
                                                            Native
                                                            Developer</a>
                                                        <a class="nav-link dropdown-item d-flex gap-lg-3 gap-2 align-items-center"
                                                            href="<?php echo home_url('/hire-flutter-developer/'); ?>">
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_flutter.svg"
                                                                class="black-logo icon-menu-size-20"
                                                                alt="flutter-logo" />
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/blue_icon/codesclue_blue_flutter.svg"
                                                                class="blue-logo icon-menu-size-20"
                                                                alt="flutter-blue-logo" />
                                                            Hire
                                                            Flutter
                                                            Developer</a>
                                                        <a class="nav-link dropdown-item d-flex gap-lg-3 gap-2 align-items-center"
                                                            href="<?php echo home_url('/hire-ios-developer/'); ?>">
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_ios.svg"
                                                                class="black-logo icon-menu-size-20" alt="ios-logo" />
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/blue_icon/codesclue_blue_ios.svg"
                                                                class="blue-logo icon-menu-size-20"
                                                                alt="ios-blue-logo" />
                                                            Hire iOS
                                                            Developer</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="link-box px-xl-3">
                                                <div
                                                    class="nav-heading d-flex align-items-center text-uppercase bold-text justify-content-between mb-xl-3 mb-2 ps-xl-2 ps-0">
                                                    Frontend
                                                    Development
                                                </div>

                                                <div
                                                    class="dropdown-single-item d-flex flex-row justify-content-sm-start justify-content-between gap-5 flex-wrap">
                                                    <div class="inner-services">
                                                        <a class="nav-link dropdown-item d-flex gap-lg-3 gap-2 align-items-center"
                                                            href="<?php echo home_url('/hire-angular-developer/'); ?>">
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_angular.svg"
                                                                class="black-logo icon-menu-size-20"
                                                                alt="angular-logo" />
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/blue_icon/codesclue_blue_angular.svg"
                                                                class="blue-logo icon-menu-size-20"
                                                                alt="angular-blue-logo" />
                                                            Hire
                                                            Angular
                                                            Developer</a>
                                                        <a class="nav-link dropdown-item d-flex gap-lg-3 gap-2 align-items-center"
                                                            href="<?php echo home_url('/hire-react-js-developer/'); ?>">
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_react.svg"
                                                                class="black-logo icon-menu-size-20"
                                                                alt="reactjs-logo" />
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/blue_icon/codesclue_blue_react.svg"
                                                                class="blue-logo icon-menu-size-20"
                                                                alt="reactjs-blue-logo" />
                                                            Hire
                                                            React.js
                                                            Developer
                                                        </a>
                                                        <a class="nav-link dropdown-item d-flex gap-lg-3 gap-2 align-items-center"
                                                            href="<?php echo home_url('/hire-javascript-developer/'); ?>">
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_js.svg"
                                                                class="black-logo icon-menu-size-20" alt="js-logo" />
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/blue_icon/codesclue_blue_js.svg"
                                                                class="blue-logo icon-menu-size-20"
                                                                alt="js-blue-logo" />
                                                            Hire
                                                            Javascript
                                                            Developer</a>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="link-box px-xl-3">
                                                <div
                                                    class="nav-heading d-flex align-items-center text-uppercase bold-text justify-content-between mb-xl-3 mb-2 ps-xl-2 ps-0">
                                                    Backend
                                                    Development
                                                </div>

                                                <div
                                                    class="dropdown-single-item d-flex flex-row justify-content-sm-start justify-content-between gap-5 flex-wrap">
                                                    <div class="inner-services">
                                                        <a class="nav-link dropdown-item d-flex gap-lg-3 gap-2 align-items-center"
                                                            href="<?php echo home_url('/hire-php-developer/'); ?>">
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_php.svg"
                                                                class="black-logo icon-menu-size-20" alt="php-logo" />
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/blue_icon/codesclue_blue_php.svg"
                                                                class="blue-logo icon-menu-size-20"
                                                                alt="php-blue-logo" />
                                                            Hire PHP
                                                            Developer</a>
                                                        <a class="nav-link dropdown-item d-flex gap-lg-3 gap-2 align-items-center"
                                                            href="<?php echo home_url('/hire-node-js-developer/'); ?>">
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_node.svg"
                                                                class="black-logo icon-menu-size-20" alt="node-logo" />
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/blue_icon/codesclue_blue_node.svg"
                                                                class="blue-logo icon-menu-size-20"
                                                                alt="node-blue-logo" />
                                                            Hire
                                                            Node.js
                                                            Developer</a>
                                                        <a class="nav-link dropdown-item d-flex gap-lg-3 gap-2 align-items-center"
                                                            href="<?php echo home_url('/hire-ror-developers/'); ?>">
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_rails.svg"
                                                                class="black-logo icon-menu-size-20" alt="ruby-logo" />
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/blue_icon/codesclue_blue_rails.svg"
                                                                class="blue-logo icon-menu-size-20"
                                                                alt="ruby-blue-logo" />
                                                            Hire RoR
                                                            Developer</a>
                                                        <a class="nav-link dropdown-item d-flex gap-lg-3 gap-2 align-items-center"
                                                            href="<?php echo home_url('/hire-java-developer/'); ?>">
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_java.svg"
                                                                class="black-logo icon-menu-size-20" alt="java-logo" />
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/blue_icon/codesclue_blue_java.svg"
                                                                class="blue-logo icon-menu-size-20"
                                                                alt="java-blue-logo" />
                                                            Hire
                                                            Java
                                                            Developer</a>
                                                        <a class="nav-link dropdown-item d-flex gap-lg-3 gap-2 align-items-center"
                                                            href="<?php echo home_url('/hire-dotnet-developer/'); ?>">
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_dotnet.svg"
                                                                class="black-logo icon-menu-size-20"
                                                                alt="dotnet-logo" />
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/blue_icon/codesclue_blue_dotnet.svg"
                                                                class="blue-logo icon-menu-size-20"
                                                                alt="dotnet-blue-logo" />
                                                            Hire
                                                            .NET
                                                            Developer</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="link-box px-xl-3">
                                                <div
                                                    class="nav-heading d-flex align-items-center text-uppercase bold-text justify-content-between mb-xl-3 mb-2 ps-xl-2 ps-0">
                                                    Quality
                                                    Assurance
                                                </div>

                                                <div
                                                    class="dropdown-single-item d-flex flex-row justify-content-sm-start justify-content-between gap-5 flex-wrap">
                                                    <div class="inner-services">
                                                        <a class="nav-link dropdown-item d-flex gap-lg-3 gap-2 align-items-center"
                                                            href="<?php echo home_url('/hire-automated-qa/'); ?>">
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_auto.svg"
                                                                class="black-logo icon-menu-size-20"
                                                                alt="automated-qa-logo" />
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/blue_icon/codesclue_blue_auto.svg"
                                                                class="blue-logo icon-menu-size-20"
                                                                alt="automated-qa-blue-logo" />
                                                            Hire
                                                            Automated
                                                            QA</a>
                                                        <a class="nav-link dropdown-item d-flex gap-lg-3 gap-2 align-items-center"
                                                            href="<?php echo home_url('/hire-manual-qa/'); ?>">
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_manual.svg"
                                                                class="black-logo icon-menu-size-20"
                                                                alt="manual-qa-logo" />
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/blue_icon/codesclue_blue_manual.svg"
                                                                class="blue-logo icon-menu-size-20"
                                                                alt="manual-qa-blue-logo" />
                                                            Hire
                                                            Manual
                                                            QA</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>



                        <li
                            class="nav-item dropdown has_submenu d-xl-flex d-none <?php if ( is_page( array(
                            'cannabis',
                            'healthcare',
                            'ecommerce',
                            'financial'
                        ) ) ) echo 'active'; ?>">
                            <a class="nav-link dropdown-toggle" id="IndustriesDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Industries
                            </a>
                            <div class="dropdown-menu" aria-labelledby="IndustriesDropdown">
                                <div class="outer-dropdown">
                                    <div class="dropdown-box">
                                        <div class="dropdown-content-box d-grid grid-2 gap-1">
                                            <div class="link-box">
                                                <div class>
                                                    <div
                                                        class="d-flex align-items-center text-uppercase bold-text justify-content-between mb-xl-3 mb-2 ps-xl-2 ps-0 nav-heading">
                                                        Industries
                                                    </div>
                                                </div>
                                                <div
                                                    class="dropdown-single-item d-flex justify-content-sm-start justify-content-between g-lg-5 flex-md-row flex-column">
                                                    <div class="inner-services">
                                                        <a class="nav-link dropdown-item d-flex gap-lg-3 gap-2 align-items-center"
                                                            href="<?php echo home_url('/cannabis/'); ?>">
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_cannabis.svg"
                                                                class="black-logo icon-menu-size-20" alt="about-logo" />
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/blue_icon/codesclue_blue_cannabis.svg"
                                                                class="blue-logo icon-menu-size-20"
                                                                alt="about-blue-logo" />
                                                            Cannabis</a>
                                                        <a class="nav-link dropdown-item d-flex gap-lg-3 gap-2 align-items-center"
                                                            href="<?php echo home_url('/healthcare/'); ?>">
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_healthcare.svg"
                                                                class="black-logo icon-menu-size-20" alt="about-logo" />
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/blue_icon/codesclue_healthcare_blue.svg"
                                                                class="blue-logo icon-menu-size-20"
                                                                alt="about-blue-logo" />
                                                            Health Care</a>
                                                         <a class="nav-link dropdown-item d-flex gap-lg-3 gap-2 align-items-center"
                                                            href="<?php echo home_url('/food-service/'); ?>">
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue__foodservices.svg"
                                                                class="black-logo icon-menu-size-20" alt="about-logo" />
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/blue_icon/codesclue_blue_foodservices.svg"
                                                                class="blue-logo icon-menu-size-20"
                                                                alt="about-blue-logo" />
                                                            Food Service</a> 
                                                    </div>
                                                    <div class="inner-services">
                                                        <a class="nav-link dropdown-item d-flex gap-lg-3 gap-2 align-items-center"
                                                            href="<?php echo home_url('/ecommerce/'); ?>">
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_E-Commerce.svg"
                                                                class="black-logo icon-menu-size-20"
                                                                alt="privacy-logo" />
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/blue_icon/codesclue_blue_E-Commerce.svg"
                                                                class="blue-logo icon-menu-size-20"
                                                                alt="privacy-blue-logo" />
                                                            E-Commerce</a>
                                                             <a class="nav-link dropdown-item d-flex gap-lg-3 gap-2 align-items-center"
                                                            href="<?php echo home_url('/financial/'); ?>">
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codescluefinancial-performancial.svg"
                                                                class="black-logo icon-menu-size-20"
                                                                alt="privacy-logo" />
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/blue_icon/codescluefinancial-performancial-blue.svg"
                                                                class="blue-logo icon-menu-size-20"
                                                                alt="privacy-blue-logo" />
                                                            Financial</a> 
                                                             <a class="nav-link dropdown-item d-flex gap-lg-3 gap-2 align-items-center"
                                                            href="<?php echo home_url('/media-and-entertainment/'); ?>">
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue__media_and_entertainment.svg"
                                                                class="black-logo icon-menu-size-20"
                                                                alt="privacy-logo" />
                                                            <img loading="lazy"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/blue_icon/codesclue_blue__media_and_entertainment.svg"
                                                                class="blue-logo icon-menu-size-20"
                                                                alt="privacy-blue-logo" />
                                                            Media & Entertainment</a> 
                                                    </div>
                                                          
                                                    <div class="inner-services">
                                                        <div
                                                            class="bg-light-blue p-xxl-4 d-sm-grid d-flex flex-sm-row flex-column grid-2 gap-xl-4 gap-2 p-sm-3 p-2">
                                                            <a target="_blank" href="mailto:business@codesclue.com"
                                                                class="social-details d-flex gap-sm-3 gap-1 align-items-center">
                                                                <img loading="lazy"
                                                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/header/social_icon/codesclue_mail.svg"
                                                                    class="size-32" alt="mail-logo" />
                                                                <div class="d-flex flex-column gap-1">
                                                                    <span class="gray-text mb-0">Email
                                                                        ID</span>
                                                                    <strong>business@codesclue.com</strong>
                                                                </div>
                                                            </a>
                                                            <a target="_blank"
                                                                href="https://www.linkedin.com/company/codesclue/posts/?feedView=all"
                                                                class="social-details d-flex gap-sm-3 gap-1 align-items-center">
                                                                <img loading="lazy"
                                                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/header/social_icon/codesclue_linkedin.svg"
                                                                    class="size-32" alt="skype-logo" />
                                                                <div class="d-flex flex-column gap-1">
                                                                    <span class="gray-text mb-0">linkedin</span>
                                                                    <strong>CodesClue</strong>
                                                                </div>
                                                            </a>
                                                            <a target="_blank" href="https://wa.me/+919998977764"
                                                                class="social-details d-flex gap-sm-3 gap-1 align-items-center">
                                                                <img loading="lazy"
                                                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/header/social_icon/codesclue_whatsapp.svg"
                                                                    class="size-32" alt="whatsapp-logo" />
                                                                <div class="d-flex flex-column gap-1">
                                                                    <span class="gray-text mb-0">WhatsApp
                                                                        Number</span>
                                                                    <strong>+91
                                                                        99989
                                                                        77764</strong>
                                                                </div>
                                                            </a>
                                                            <a target="_blank" href="https://dribbble.com/CodesClue"
                                                                class="social-details d-flex gap-sm-3 gap-1 align-items-center">
                                                                <img loading="lazy"
                                                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/new/dribble.svg"
                                                                    class="size-32" alt="insta-logo" />
                                                                <div class="d-flex flex-column gap-1">
                                                                    <span class="gray-text mb-0">Dribbble</span>
                                                                    <strong>CodesClue</strong>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>

                    <a class="btn btn-primary d-xl-flex d-none me-2" href="<?php echo home_url('/contact-us/'); ?>"
                        type="submit">Contact
                        us</a>
                </div>
            </div>
        </nav>

        <!-- Mobile Header Bar -->
        <div class="mobile-header nav-mobile pt-3">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/codesclue_Logo.png" alt="Logo"
                class="mobile-menu-logo">
            <button class="btn-menu" id="openMenu"><img
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/menu-mobile.png"
                    class="new-mobile-menu-icon"></button>
        </div>

        <div class="nav-mobile pt-3">
            <div class="mobile-menu" id="mainMenu">
                <!-- Top Bar -->
                <div class="menu-top pt-3">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/codesclue_Logo.png" alt="Logo"
                        class="mobile-menu-logo">
                    <button class="btn-menu" id="closeMenu"><img
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/close.png"
                            class="new-mobile-menu-icon"></button>
                </div>

                <!-- Scrollable Content -->
                <div class="menu-content">
                    <div class="menu-list">
                        <ul>
                            <li><a href="<?php echo home_url(''); ?>">Home</a></li>
                            <li><button class="submenu-btn" data-submenu="aboutSubmenu">About +</button></li>
                            <li><button class="submenu-btn" data-submenu="servicesSubmenu">Services +</button></li>
                            <li><button class="submenu-btn" data-submenu="ourWorkSubmenu">Our Work +</button></li>
                            <li><button class="submenu-btn" data-submenu="hireSubmenu">Hire Developer +</button></li>
                            <li><button class="submenu-btn" data-submenu="industriesSubmenu">Industries +</button></li>
                        </ul>
                    </div>

                    <!-- Buttons at end of list -->
                    <div class="menu-buttons d-flex align-items-left justify-content-center"
                        style="overflow-x: auto; width: 100%;">
                        <div class="d-flex gap-2 flex-nowrap" style="min-width: 280px;">
                            <a href="<?php echo home_url('/ai-software-development/'); ?>"
                                class="d-flex justify-content-center align-items-center gap-2 border rounded-pill text-decoration-none same-btn">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/codesclue-ai.svg"
                                    class="btn-img-20" alt="codesclue-ai">
                                <p class="mb-0 content-desc-2">AI-Powered Growth</p>
                            </a>
                            <a href="<?php echo home_url('/contact-us/'); ?>"
                                class="btn btn-primary d-flex justify-content-center align-items-center text-white text-decoration-none same-btn">
                                Contact Us
                            </a>

                        </div>
                    </div>





                </div>
            </div>

            <!-- About Submenu -->
            <div class="mobile-submenu" id="aboutSubmenu">
                <div class="submenu-header">
                    <button class="btn-menu submenu-back" data-close="aboutSubmenu"><img
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue-back-header.png"
                            class="new-mobile-menu-icon"></button>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/codesclue_Logo.png" alt="Logo">
                    <button class="btn-menu" id="closeMenu2"><img
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/close.png"
                            class="new-mobile-menu-icon"></button>
                </div>
                <div class="submenu-list">
                    <ul>
                        <li class="sub-menu-2"><a href="<?php echo home_url('/about-us/'); ?>"><img loading="lazy"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_about.svg"
                                    class="me-3 icon-menu-size-20" alt="about-logo" />About us</a></li>
                        <li class="sub-menu-2"><a href="<?php echo home_url('/privacy/'); ?>"><img loading="lazy"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_privacy.svg"
                                    class="me-3 icon-menu-size-20" alt="privacy-logo" />Privacy Policy</a></li>
                        <li class="sub-menu-2"><a href="<?php echo home_url('/meet-our-team/'); ?>"><img loading="lazy"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_meet team.svg"
                                    class="me-3 icon-menu-size-20" alt="meet-logo" />Meet Our Team</a></li>
                        <li class="sub-menu-2"><a href="<?php echo home_url('/clinet-testimonials/'); ?>"><img loading="lazy"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_testimonial.svg"
                                    class="me-3 icon-menu-size-20" alt="testimonial-logo" />Client Testimonial</a></li>
                        <li class="sub-menu-2"><a href="<?php echo home_url('/faq/'); ?>"><img loading="lazy"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_faq.svg"
                                    class="me-3 icon-menu-size-20" alt="faq-logo" />FAQs</a></li>
                        <li class="sub-menu-2"><a href="<?php echo home_url('/our-company/'); ?>"> <img loading="lazy"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_Our_Company.svg"
                                    class="me-3 icon-menu-size-20" alt="faq-logo" />Our Company</a></li>
                    </ul>
                </div>
            </div>

            <!-- Services Submenu -->
            <div class="mobile-submenu" id="servicesSubmenu">
                <div class="submenu-header">
                    <button class="btn-menu submenu-back" data-close="servicesSubmenu"><img
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue-back-header.png"
                            class="new-mobile-menu-icon"></button>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/codesclue_Logo.png" alt="Logo">
                    <button class="btn-menu" id="closeMenu3"><img
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/close.png"
                            class="new-mobile-menu-icon"></button>
                </div>
                <div class="submenu-list">
                    <div class="submenu-section">
                        <h6>Mobile Development</h6>
                        <ul>
                            <li><a href="<?php echo home_url('/android/'); ?>"> <img loading="lazy"
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_android.svg"
                                        class="me-3 icon-menu-size-20" alt="android-logo" />Android</a></li>
                            <li><a href="<?php echo home_url('/react-native/'); ?>"><img
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_react.svg"
                                        loading="lazy" class="me-3" alt="React Native">React Native</a></li>
                            <li><a href="<?php echo home_url('/flutter/'); ?>"><img
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_flutter.svg"
                                        loading="lazy" class="me-3" alt="React Native">Flutter</a></li>
                            <li><a href="<?php echo home_url('/ios/'); ?>"><img
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_ios.svg"
                                        loading="lazy" class="me-3" alt="React Native">iOS</a></li>
                            <li><a href="<?php echo home_url('/ipad/'); ?>"><img
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_ipad.svg"
                                        loading="lazy" class="me-3" alt="React Native">iPad</a></li>
                            <li><a href="<?php echo home_url('/pwa/'); ?>"><img
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_pwa.svg"
                                        loading="lazy" class="me-3" alt="React Native">PWA</a></li>
                            <li><a href="<?php echo home_url('/kotlin/'); ?>"><img
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_kotlin.svg"
                                        loading="lazy" class="me-3" alt="React Native">Kotlin</a></li>
                            <li><a href="<?php echo home_url('/swift/'); ?>"><img
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_swift.svg"
                                        loading="lazy" class="me-3" alt="React Native">Swift</a></li>
                        </ul>
                    </div>
                    <div class="submenu-section">
                        <h6>Frontend Development</h6>
                        <ul>
                            <li><a href="<?php echo home_url('/html-page/'); ?>"> <img loading="lazy"
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_html.svg"
                                        class="me-3 icon-menu-size-20" alt="html-logo" />HTML</a></li>
                            <li><a href="<?php echo home_url('/css/'); ?>"> <img loading="lazy"
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_css.svg"
                                        class="me-3 icon-menu-size-20" alt="html-logo" />CSS</a></li>
                            <li><a href="<?php echo home_url('/js/'); ?>"><img loading="lazy"
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_js.svg"
                                        class="me-3 icon-menu-size-20" alt="html-logo" />JavaScript</a></li>
                            <li><a href="<?php echo home_url('/angular/'); ?>"> <img loading="lazy"
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_angular.svg"
                                        class="me-3 icon-menu-size-20" alt="html-logo" />Angular</a></li>
                            <li><a href="<?php echo home_url('/react-js/'); ?>"> <img loading="lazy"
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_react.svg"
                                        class="me-3 icon-menu-size-20" alt="html-logo" />React.js</a></li>
                            <li><a href="<?php echo home_url('/vue-js/'); ?>"> <img loading="lazy"
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_vue.svg"
                                        class="me-3 icon-menu-size-20" alt="html-logo" />Vue.js</a></li>
                        </ul>
                    </div>
                    <div class="submenu-section">
                        <h6>Backend Development</h6>
                        <ul>
                            <li><a href="<?php echo home_url('/laravel/'); ?>"> <img loading="lazy"
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_laravel.svg"
                                        class="me-3 icon-menu-size-20" alt="html-logo" />Laravel</a></li>
                            <li><a href="<?php echo home_url('/php/'); ?>"> <img loading="lazy"
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_php.svg"
                                        class="me-3 icon-menu-size-20" alt="html-logo" />PHP</a></li>
                            <li><a href="<?php echo home_url('/node-js/'); ?>"> <img loading="lazy"
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_node.svg"
                                        class="me-3 icon-menu-size-20" alt="html-logo" />Node.js</a></li>
                            <li><a href="<?php echo home_url('/java/'); ?>"> <img loading="lazy"
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_java.svg"
                                        class="me-3 icon-menu-size-20" alt="html-logo" />Java</a></li>
                            <li><a href="<?php echo home_url('/ror/'); ?>"> <img loading="lazy"
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_rails.svg"
                                        class="me-3 icon-menu-size-20" alt="html-logo" />Ruby on Rails</a></li>
                            <li><a href="<?php echo home_url('/mongo-db/'); ?>"> <img loading="lazy"
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_mongodb.svg"
                                        class="me-3 icon-menu-size-20" alt="html-logo" />MongoDB</a></li>
                            <li><a href="<?php echo home_url('/dotnet/'); ?>"> <img loading="lazy"
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_dotnet.svg"
                                        class="me-3 icon-menu-size-20" alt="html-logo" />.NET</a></li>
                        </ul>
                    </div>
                    <div class="submenu-section">
                        <h6>Testing & QA</h6>
                        <ul>
                            <li><a href="<?php echo home_url('/auto-mated-testing/'); ?>"> <img loading="lazy"
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_auto.svg"
                                        class="me-3 icon-menu-size-20" alt="html-logo" />Automated Testing</a></li>
                            <li><a href="<?php echo home_url('/manual-testing/'); ?>"> <img loading="lazy"
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_manual.svg"
                                        class="me-3 icon-menu-size-20" alt="html-logo" />Manual Testing</a></li>
                            <li><a href="<?php echo home_url('/api-testing/'); ?>"> <img loading="lazy"
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_api.svg"
                                        class="me-3 icon-menu-size-20" alt="html-logo" />API Testing</a></li>
                            <li><a href="<?php echo home_url('/mobile-testing/'); ?>""> <img loading=" lazy"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_mobile.svg"
                                    class="me-3 icon-menu-size-20" alt="html-logo" />Mobile Testing</a></li>
                            <li><a href="<?php echo home_url('/software-testing/'); ?>"> <img loading="lazy"
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_software.svg"
                                        class="me-3 icon-menu-size-20" alt="html-logo" />Software Testing</a></li>
                            <li><a href="<?php echo home_url('/support-testing/'); ?>"> <img loading="lazy"
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_support.svg"
                                        class="me-3 icon-menu-size-20" alt="html-logo" />Support Testing</a></li>
                            <li><a href="<?php echo home_url('/performance-testing/'); ?>"> <img loading="lazy"
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_performance.svg"
                                        class="me-3 icon-menu-size-20" alt="html-logo" />Performance Testing</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Our Work Submenu -->
            <div class="mobile-submenu" id="ourWorkSubmenu">
                <div class="submenu-header">
                    <button class="btn-menu submenu-back" data-close="ourWorkSubmenu" class="new-mobile-menu-icon"><img
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue-back-header.png"></button>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/codesclue_Logo.png" alt="Logo">
                    <button class="btn-menu" id="closeMenu4"><img
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/close.png"
                            class="new-mobile-menu-icon"></button>
                </div>
                <div class="submenu-list">
                    <ul>
                        <li class="sub-menu-2"><a href="<?php echo home_url('/our-portfolio/'); ?>"><img loading="lazy"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_portfolio.svg"
                                    class="me-3 icon-menu-size-20" alt="html-logo" />Our Portfolio</a></li>
                        <li class="sub-menu-2"><a href="<?php echo home_url('/case-studies/'); ?>"><img loading="lazy"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_case.svg"
                                    class="me-3 icon-menu-size-20" alt="html-logo" />Case Studies</a></li>
                        <li class="sub-menu-2"><a href="<?php echo home_url('/blog/'); ?>"><img loading="lazy"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_blog.svg"
                                    class="me-3 icon-menu-size-20" alt="html-logo" />Blog</a></li>
                    </ul>
                </div>
            </div>

            <!-- Hire Developer Submenu -->
            <div class="mobile-submenu" id="hireSubmenu">
                <div class="submenu-header">
                    <button class="btn-menu submenu-back" data-close="hireSubmenu"><img
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue-back-header.png"
                            class="new-mobile-menu-icon"></button>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/codesclue_Logo.png" alt="Logo">
                    <button class="btn-menu" id="closeMenu5"><img
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/close.png"
                            class="new-mobile-menu-icon"></button>
                </div>
                <div class="submenu-list">
                    <div class="submenu-section">
                        <h6>Mobile Developers</h6>
                        <ul>
                            <li><a href="<?php echo home_url('/hire-android-developer/'); ?>"><img loading="lazy"
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_android.svg"
                                        class="me-3 icon-menu-size-20" alt="html-logo" />Hire Android developers</a>
                            </li>
                            <li><a href="<?php echo home_url('/hire-react-native-developer/'); ?>"><img loading="lazy"
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_react.svg"
                                        class="me-3 icon-menu-size-20" alt="html-logo" />Hire React Native Developer</a>
                            </li>
                            <li><a href="<?php echo home_url('/hire-flutter-developer/'); ?>"><img loading="lazy"
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_flutter.svg"
                                        class="me-3 icon-menu-size-20" alt="html-logo" />Hire Flutter Developer</a></li>
                            <li><a href="<?php echo home_url('/hire-ios-developer/'); ?>"><img loading="lazy"
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_ios.svg"
                                        class="me-3 icon-menu-size-20" alt="html-logo" />Hire iOS Developer</a></li>
                        </ul>
                    </div>
                    <div class="submenu-section">
                        <h6>Frontend Developers</h6>
                        <ul>
                            <li><a href="<?php echo home_url('/hire-angular-developer/'); ?>"><img loading="lazy"
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_angular.svg"
                                        class="me-3 icon-menu-size-20" alt="html-logo" />Hire Angular Developer</a></li>
                            <li><a href="<?php echo home_url('/hire-react-js-developer/'); ?>"><img loading="lazy"
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_react.svg"
                                        class="me-3 icon-menu-size-20" alt="html-logo" />Hire React.js Developer</a>
                            </li>
                            <li><a href="<?php echo home_url('/hire-javascript-developer/'); ?>"><img loading="lazy"
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_java.svg"
                                        class="me-3 icon-menu-size-20" alt="html-logo" />Hire Javascript Developer</a>
                            </li>
                        </ul>
                    </div>
                    <div class="submenu-section">
                        <h6>Backend Developers</h6>
                        <ul>
                            <li><a href="<?php echo home_url('/hire-php-developer/'); ?>"><img loading="lazy"
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_php.svg"
                                        class="me-3 icon-menu-size-20" alt="html-logo" />Hire PHP Developer</a></li>
                            <li><a href="<?php echo home_url('/hire-node-js-developer/'); ?>"><img loading="lazy"
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_node.svg"
                                        class="me-3 icon-menu-size-20" alt="html-logo" />Hire Node.js Developer</a></li>
                            <li><a href="<?php echo home_url('/hire-ror-developers/'); ?>"><img loading="lazy"
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_rails.svg"
                                        class="me-3 icon-menu-size-20" alt="html-logo" />Hire RoR Developer</a></li>
                            <li><a href="<?php echo home_url('/hire-java-developer/'); ?>"><img loading="lazy"
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_java.svg"
                                        class="me-3 icon-menu-size-20" alt="html-logo" />Hire Java Developer</a></li>
                            <li><a href="<?php echo home_url('/hire-dotnet-developer/'); ?>"><img loading="lazy"
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_dotnet.svg"
                                        class="me-3 icon-menu-size-20" alt="html-logo" />Hire .NET Developer</a></li>
                        </ul>
                    </div>
                    <div class="submenu-section">
                        <h6>Quality Assurance</h6>
                        <ul>
                            <li><a href="<?php echo home_url('/hire-automated-qa/'); ?>"><img loading="lazy"
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_auto.svg"
                                        class="me-3 icon-menu-size-20" alt="html-logo" />Hire Automated QA</a></li>
                            <li><a href="<?php echo home_url('/hire-manual-qa/'); ?>"><img loading="lazy"
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_manual.svg"
                                        class="me-3 icon-menu-size-20" alt="html-logo" />Hire Manual QA</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Industries Submenu -->
            <div class="mobile-submenu" id="industriesSubmenu">
                <div class="submenu-header">
                    <button class="btn-menu submenu-back" data-close="industriesSubmenu"><img
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue-back-header.png"
                            class="new-mobile-menu-icon"></button>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/codesclue_Logo.png" alt="Logo">
                    <button class="btn-menu" id="closeMenu2"><img
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/close.png"
                            class="new-mobile-menu-icon"></button>
                </div>
                <div class="submenu-list">
                    <ul>
                        <li class="sub-menu-2"><a href="<?php echo home_url('/cannabis/'); ?>"><img loading="lazy"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_cannabis.svg"
                                    class="me-3 icon-menu-size-20" alt="html-logo" />Cannabis</a></li>
                        <li class="sub-menu-2"><a href="<?php echo home_url('/healthcare/'); ?>"><img loading="lazy"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_healthcare.svg"
                                    class="me-3 icon-menu-size-20" alt="html-logo" />Health Care</a></li>
                        <li class="sub-menu-2"><a href="<?php echo home_url('/ecommerce/'); ?>"><img loading="lazy"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_E-Commerce.svg"
                                    class="me-3 icon-menu-size-20" alt="html-logo" />E-Commerce</a></li>
                        <li class="sub-menu-2"><a class="nav-link dropdown-item d-flex gap-lg-3 gap-2 align-items-center" href="<?php echo home_url('/financial/'); ?>">
                                    <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codescluefinancial-performancial.svg"  class="black-logo icon-menu-size-20" alt="privacy-logo" />
                                     Financial</a></li>
                     <li class="sub-menu-2"><a href="<?php echo home_url('/food-service/'); ?>"><img loading="lazy"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue__foodservices.svg"
                                    class="me-3 icon-menu-size-20" alt="html-logo" />Food Service</a></li>   
                    <li class="sub-menu-2"><a href="<?php echo home_url('/media-and-entertainment/'); ?>"><img loading="lazy"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue__media_and_entertainment.svg"
                                    class="me-3 icon-menu-size-20" alt="html-logo" />Media & Entertainment</a></li>                              
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <?php
    // Fallback menu function
    function codesclue_fallback_menu()
    {
        echo '<ul class="navbar-nav g-nav-5">';
        echo '<li class="nav-item"><a class="nav-link" href="' . esc_url(home_url('/')) . '">Home</a></li>';
        echo '<li class="nav-item"><a class="nav-link" href="' . esc_url(home_url('/about-us.html')) . '">About</a></li>';
        echo '<li class="nav-item"><a class="nav-link" href="' . esc_url(home_url('/services/')) . '">Services</a></li>';
        echo '<li class="nav-item"><a class="nav-link" href="' . esc_url(home_url('/portfolio.html')) . '">Portfolio</a></li>';
        echo '<li class="nav-item"><a class="nav-link" href="' . esc_url(home_url('/contact-us.html')) . '">Contact</a></li>';
        echo '</ul>';
    }

    // Custom Walker for Bootstrap Navigation
    class CodesClue_Walker_Nav_Menu extends Walker_Nav_Menu
    {
        function start_lvl(&$output, $depth = 0, $args = null)
        {
            $indent = str_repeat("\t", $depth);
            $submenu = ($depth > 0) ? ' sub-menu' : '';
            $output .= "\n$indent<ul class=\"dropdown-menu$submenu\">\n";
        }

        function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
        {
            $indent = ($depth) ? str_repeat("\t", $depth) : '';

            $li_attributes = '';
            $class_names = $value = '';

            $classes = empty($item->classes) ? array() : (array) $item->classes;
            $classes[] = ($args->walker->has_children) ? 'dropdown' : '';
            $classes[] = ($item->current || $item->current_item_ancestor) ? 'active' : '';
            $classes[] = 'nav-item';

            $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
            $class_names = ' class="' . esc_attr($class_names) . '"';

            $id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args);
            $id = strlen($id) ? ' id="' . esc_attr($id) . '"' : '';

            $output .= $indent . '<li' . $id . $value . $class_names . $li_attributes . '>';

            $attributes = !empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
            $attributes .= !empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
            $attributes .= !empty($item->xfn) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
            $attributes .= !empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';

            $item_output = $args->before;
            $item_output .= '<a class="nav-link' . ($args->walker->has_children ? ' dropdown-toggle' : '') . '"' . $attributes . '>';
            $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
            $item_output .= '</a>';
            $item_output .= $args->after;

            $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
        }
    }
    ?>