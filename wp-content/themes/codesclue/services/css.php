<?php
/*
Template Name: Css Template
*/
get_header(); ?>  
  
    <main>

        <section class="page-title-area">
            <div class="container">
                <div class="page-title-area-inner section-spacing-top">

                    <div class="section-content-wrapper">
                        <div class="content-shape-1 fade-anim" data-direction="top" data-ease="bounce.out"
                            data-delay="0.60" data-offset="100" data-rotate="360">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/new/shape-36.webp" alt="image">
                        </div>

                        <div class="section-content">
                            <div class="section-title-wrapper">
                                <div class="title-wrapper">
                                    <h1 class="section-title char-anim">CodesClue Services</h1>
                                </div>
                                <div class="subtitle-wrapper">
                                    <span class="section-subtitle char-anim" data-delay="0.75">CSS
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="breadcrumb-wrapper fade-anim" data-direction="left" data-offset="100"
                            data-delay="0.90">
                            <ul class="breadcrumb">
                                <li><a href="<?php echo home_url(''); ?>">HOME</a></li>
                                <li>CSS </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section class="team-area my-5-cus">
            <div class="team-area-inner section-spacing">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="section-title-wrapper my-4">
                                <div class="title-wrapper fade-anim">
                                    <h2 class="section-title mb-0">CSS Web Development Services</h2>
                                </div>
                                <div class="subtitle-wrapper fade-anim py-4">
                                    <span class="section-subtitle">CodesClue offers expert CSS development services to
                                        create
                                        visually stunning, responsive, and user-friendly web designs. Enhance your
                                        website’s
                                        aesthetics, performance, and functionality with modern CSS solutions. Get
                                        started today!
                                    </span>
                                </div>
                                <a href="<?php echo home_url('/contact-us/'); ?>" class="get-started-btn">Contact Us
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/new/arrow.svg" class="btn-arrow">
                                </a>
                            </div>

                        </div>
                        <div class="col-lg-4 text-center align-items-center d-flex  justify-content-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/services/codesclue-services-hero.png" class="img-fluid img-sm">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="container">
            <div class="row justify-content-center align-items-center  mt-sm-services">

                <!-- Top Left Image -->
                <div class="col-lg-6">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/services/CSS.jpg" alt="Team Working"
                        class="img-fluid float-up-down d-sm-none">
                </div>

                <!-- Text Content -->
                <div class="col-lg-6 col-md-10 text-services">
                    <h2> CSS Development Company in India</h2>
                    <p>
                        CSS is the key to visually stunning and engaging websites, enabling seamless design,
                        animations, and responsiveness across all devices. As a crucial part of front-end
                        development, CSS ensures that your website not only looks great, but also enhances user
                        experience with smooth interactions and performance.
                    </p><br>
                    <p>
                        Whether you're a startup looking for a fresh design or an enterprise needing a scalable
                        and maintainable CSS architecture, our expertise ensures that your website remains fast,
                        visually appealing, and highly interactive. Let us help you elevate your brand with
                        high-quality, performance-driven CSS styling.
                    </p><br>
                    <p>
                        Our approach to CSS development is rooted in modern standards, accessibility guidelines,
                        and performance optimization. By utilizing semantic CSS, structured content, and
                        adaptive design techniques.
                    </p>
                </div>
            </div>
        </section>


        <!-- section for choose app for daily life :- "not it is empty for figma update" -->
        <section class="app-benefits-section black-bg section-40 mt-sm-services">
            <div class="container">
                <div class="row mx-0 px-0">
                    <div class="grid-3 service-grid px-md-2 px-0">
                        <div
                            class="d-flex flex-column justify-content-md-around justify-content-center mt-md-4 text-justify">
                            <!-- <h2 class="section-title d-md-flex d-none text-left text-white">
                                Why choose <br /> appxing for <br /> your daily life?</h2> -->
                            <!-- for small screen -->
                            <h2 class="section-title d-flex  text-left text-white">
                                Why choose appxing for your daily life?</h2>
                            <div class="benifit-details py-xxl-0 py-md-3 py-2 d-flex flex-column gap-2">
                                <i class="fa-solid fa-rocket text-primary font-24 bg-white rounded-2"></i>
                                <p class="content-sub-title text-left text-white mb-0">High-Performance & SEO-Friendly
                                    Styling</p>
                                <span class="small-text text-white">Our optimized CSS techniques improve load
                                    speeds and accessibility, boosting SEO rankings and user engagement.</span>
                            </div>
                            <div class="benifit-details py-xxl-0 py-md-3 py-2 d-flex flex-column gap-2">
                                <i class="fa-brands fa-css3 text-primary font-24 bg-white rounded-2"></i>
                                <p class="content-sub-title text-left text-white mb-0">Expert CSS Developers
                                </p>
                                <span class="small-text text-white">With 5+ years of experience, our
                                    CSS professionals excel in front-end styling using the
                                    latest frameworks like, Bootstrap, Tailwind CSS, SASS etc.</span>
                            </div>
                        </div>
                        <div class="benifits-img">
                            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/react-native/codesclue_benefits-mobile.webp"
                                alt="benefits-mobile-image" />
                        </div>
                        <div
                            class="d-flex flex-column justify-content-md-around justify-content-center mt-md-4 text-justify">
                            <div class="benifit-details py-xxl-0 py-md-3 py-2 d-flex flex-column gap-2">
                                <i class="fa-solid fa-ruler-combined text-primary font-24 bg-white rounded-2"></i>
                                <p class="content-sub-title text-left text-white mb-0">Pixel-Perfect UI & UX</p>
                                <span class="small-text text-white">Using Flexbox, Grid, and animations, we
                                    ensure that your website is visually stunning, structured, and intuitive for users.
                                </span>
                            </div>

                            <div class="benifit-details py-xxl-0 py-md-3 py-2 d-flex flex-column gap-2">
                                <i class="fa-solid fa-film text-primary font-24 bg-white rounded-2"></i>
                                <p class="content-sub-title text-left text-white mb-0">Advanced Animations &
                                    Interactivity</p>
                                <span class="small-text text-white">We bring web pages to life with CSS
                                    animations, transitions, and hover effects, creating an engaging user experience.
                                </span>
                            </div>

                            <div class="benifit-details py-xxl-0 py-md-3 py-2 d-flex flex-column gap-2">
                                <i class="fa-solid fa-wrench text-primary font-24 bg-white rounded-2"></i>
                                <p class="content-sub-title text-left text-white mb-0">Custom Tailored CSS Solutions
                                </p>
                                <span class="small-text text-white">From custom themes to scalable design
                                    systems, we deliver maintainable and modular CSS for long-term flexibility.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section>
            <div class="container mt-5">
                <div class="row justify-content-center">
                    <div class="col-lg-7 col-md-10">
                        <div>
                            <h2><b>Elevate Your Business with Modern & Scalable CSS Development</b></h2>
                            <p class="mt-4">
                                CSS is the heart of web design, bringing structure, style, and interactivity to web
                                applications. It ensures responsive layouts, seamless user experiences, and visually
                                appealing designs that adapt to any screen size or device.
                            </p><br>
                            <p>
                                At CodesClue, we specialize in CSS development, leveraging CSS3, Flexbox, Grid, and
                                pre-processors like SASS & LESS to create pixel-perfect, high-performance, and
                                maintainable designs. Our expertise ensures your website is not only aesthetically
                                stunning but also optimized for speed, accessibility, and cross-browser compatibility.
                            </p><br>
                            <p>
                                Whether you need a sleek, modern UI for a startup or a scalable, enterprise-level CSS
                                architecture, our team ensures your website remains fast, engaging, and future-proof.
                                Let us help you craft a visually striking and high-performance web experience with the
                                latest CSS solutions.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-10 mt-sm-services">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/services/CSS1.jpg" class="img-fluid rounded">
                    </div>
                </div>
            </div>
        </section>


        <div class="services-contact container-fluid py-5 my-5">
            <div class="container">
                <div class="row align-items-center">

                    <!-- LEFT TEXT -->
                    <div class="col-lg-5 col-md-5 text-center pt-xsm-cus">
                        <h2 class="services-contact-title">
                            Projects That Define Us
                        </h2>
                        <a href="<?php echo home_url('/our-portfolio/'); ?>" target="_blank" class="services-btn mt-3 d-inline-block">View all
                            Projects</a>
                    </div>

                    <!-- RIGHT CIRCLE IMAGE -->
                    <div class="col-lg-7 col-md-7 text-center pt-xsm-cus">
                        <div class="services-circle">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/services/CSS2.jpg" class="services-circle-img active"
                                alt="Image 4">
                        </div>
                    </div>

                </div>
            </div>
        </div>





    </main>


    <?php get_footer(); ?>