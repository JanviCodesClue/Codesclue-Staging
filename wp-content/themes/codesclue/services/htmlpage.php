<?php
/*
Template Name: HTML page Template
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
                                    <span class="section-subtitle char-anim" data-delay="0.75">HTML
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="breadcrumb-wrapper fade-anim" data-direction="left" data-offset="100"
                            data-delay="0.90">
                            <ul class="breadcrumb">
                                <li><a href="<?php echo home_url(''); ?>">HOME</a></li>
                                <li>HTML</li>
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
                                    <h2 class="section-title mb-0">HTML Web Development Services</h2>
                                </div>
                                <div class="subtitle-wrapper fade-anim py-4">
                                    <span class="section-subtitle">At CodesClue, we specialize in delivering top-tier
                                        HTML
                                        development services that bring your digital vision to life. With deep expertise
                                        in
                                        front-end and back-end development, our JavaScript professionals build
                                        high-performing
                                        and interactive solutions tailored to your specific needs.
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
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/services/HTML.jpg" alt="Team Working"
                        class="img-fluid float-up-down d-sm-none">
                </div>

                <!-- Text Content -->
                <div class="col-lg-6 col-md-10 text-services">
                    <h2>HTML Development Company in India</h2>
                    <p>
                        HTML forms the foundation of every web application, ensuring a well-structured, accessible, and
                        responsive digital experience. As the backbone of web content, HTML works seamlessly with CSS
                        and JavaScript to create visually appealing and high-performance websites.
                    </p><br>
                    <p>
                        At CodesClue, we specialize in HTML development, crafting clean, semantic, and SEO-friendly
                        markup that enhances user experience and performance. Our expertise in HTML5, CSS3, and modern
                        front-end frameworks ensures that your website is not only visually stunning but also optimized
                        for speed, accessibility, and cross-device compatibility.
                    </p><br>
                    <p>
                        Whether you need a simple landing page or a complex, multipage web application, our HTML
                        development services guarantee a solid foundation for your digital presence. Let us help you
                        build a fast, responsive, and future-proof website with cutting-edge HTML solutions.
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
                                <i class="fa-solid fa-code text-primary font-24 bg-white rounded-2"></i>
                                <p class="content-sub-title text-left text-white mb-0">Dynamic & Responsive HTML
                                    Development</p>
                                <span class="small-text text-white">We build clean, semantic, and responsive
                                    HTML structures that ensure seamless performance across all devices.</span>
                            </div>
                            <div class="benifit-details py-xxl-0 py-md-3 py-2 d-flex flex-column gap-2">
                                <i class="fa-brands fa-html5 text-primary font-24 bg-white rounded-2"></i>
                                <p class="content-sub-title text-left text-white mb-0">Expert HTML Developers
                                </p>
                                <span class="small-text text-white">With 5+ years of experience, our
                                    HTML professionals excel in front-end using the
                                    latest frameworks.</span>
                            </div>
                        </div>
                        <div class="benifits-img">
                            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/react-native/codesclue_benefits-mobile.webp"
                                alt="benefits-mobile-image" />
                        </div>
                        <div
                            class="d-flex flex-column justify-content-md-around justify-content-center mt-md-4 text-justify">
                            <div class="benifit-details py-xxl-0 py-md-3 py-2 d-flex flex-column gap-2">
                                <i class="fa-solid fa-palette text-primary font-24 bg-white rounded-2"></i>
                                <p class="content-sub-title text-left text-white mb-0">Pixel-Perfect HTML Design
                                </p>
                                <span class="small-text text-white">Our team creates visually stunning and
                                    well-optimized HTML layouts that align with your brand identity.</span>
                            </div>
                            <div class="benifit-details py-xxl-0 py-md-3 py-2 d-flex flex-column gap-2">
                                <i class="fa-solid fa-bolt text-primary font-24 bg-white rounded-2"></i>
                                <p class="content-sub-title text-left text-white mb-0">High-Performance & SEO-Friendly
                                    Code</p>
                                <span class="small-text text-white">We ensure lightweight, fast-loading HTML
                                    structures optimized for search engines and user experience.</span>
                            </div>
                            <div class="benifit-details py-xxl-0 py-md-3 py-2 d-flex flex-column gap-2">
                                <i class="fa-solid fa-handshake text-primary font-24 bg-white rounded-2"></i>
                                <p class="content-sub-title text-left text-white mb-0">Reliable HTML Development
                                    Partner</p>
                                <span class="small-text text-white">CodesClue is your trusted partner for
                                    building well-structured, high-quality HTML solutions, catering to both startups and
                                    enterprises aiming for digital success.</span>
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
                            <h2><b>Enhance Your Business with Clean & Responsive HTML Development</b></h2>
                            <p class="mt-4">
                                HTML forms the foundation of every web application, ensuring a well-structured,
                                accessible, and responsive digital experience. As the backbone of web content, HTML
                                works seamlessly with CSS and JavaScript to create visually appealing and
                                high-performance websites.
                            </p><br>
                            <p>
                                At CodesClue, we specialize in HTML development, crafting clean, semantic, and
                                SEO-friendly markup that enhances user experience and performance. Our expertise in
                                HTML5, CSS3, and modern front-end frameworks ensures that your website is not only
                                visually stunning but also optimized for speed, accessibility, and cross-device
                                compatibility.
                            </p><br>
                            <p>
                                Whether you need a simple landing page or a complex, multi-page web application, our
                                HTML development services guarantee a solid foundation for your digital presence. Let us
                                help you build a fast, responsive, and future-proof website with cutting-edge HTML
                                solutions.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-10 mt-sm-services">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/services/HTML1.jpg" class="img-fluid rounded">
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
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/services/HTML2.jpg"
                                class="services-circle-img active" alt="Image 4">
                        </div>
                    </div>

                </div>
            </div>
        </div>



    </main>

<?php get_footer(); ?>