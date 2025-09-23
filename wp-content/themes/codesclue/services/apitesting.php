<?php
/*
Template Name: API Testing Template
*/
get_header(); ?>

    <!-- Main -->
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
                                    <span class="section-subtitle char-anim" data-delay="0.75">API Testing
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="breadcrumb-wrapper fade-anim" data-direction="left" data-offset="100"
                            data-delay="0.90">
                            <ul class="breadcrumb">
                                <li><a href="<?php echo home_url(''); ?>">HOME</a></li>
                                <li>API Testing</li>
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
                                    <h2 class="section-title mb-0">API Testing Services</h2>
                                </div>
                                <div class="subtitle-wrapper fade-anim py-4">
                                    <span class="section-subtitle">APIs are the backbone of modern applications,
                                        enabling seamless communication between services. Our API testing services
                                        ensure functionality, security, and performance, preventing vulnerabilities and
                                        integration failures. </span>
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
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/services/API-1.jpg" alt="Team Working"
                        class="img-fluid float-up-down d-sm-none">
                </div>

                <!-- Text Content -->
                <div class="col-lg-6 text-services">
                    <h2>Ensure Seamless Integration with API Testing</h2>
                    <p>
                        API testing is critical to verifying that software components interact correctly. By thoroughly
                        testing APIs, we identify defects, security loopholes, and performance issues before they impact
                        end users. Our approach ensures seamless data exchange and system reliability.
                    </p><br>
                    <p>
                        At CodesClue, we specialize in API testing services, using tools like Postman, RestAssured,
                        SoapUI, and JMeter. Our testing strategies include functional, performance, and security testing
                        to deliver robust and efficient APIs.
                    </p><br>
                    <p>
                        Whether you have RESTful, SOAP, or GraphQL APIs, our API testing solutions ensure they function
                        flawlessly, handle errors gracefully, and perform optimally. Let us help you build highly
                        reliable and scalable applications with expert API testing.
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
                                <i class="fa-solid fa-cloud text-primary font-24 bg-white rounded-2"></i>
                                <p class="content-sub-title text-left text-white mb-0">API Testing in Cloud
                                    Environments</p>
                                <span class="small-text text-white">
                                    Testing API behavior in cloud platforms like AWS, Azure, and Google Cloud for
                                    scalability and resilience.
                                </span>
                            </div>

                            <div class="benifit-details py-xxl-0 py-md-3 py-2 d-flex flex-column gap-2">
                                <i
                                    class="fa-solid fa-magnifying-glass-chart text-primary font-24 bg-white rounded-2"></i>
                                <p class="content-sub-title text-left text-white mb-0">Expert Team of API Testing
                                </p>
                                <span class="small-text text-white">With 4+ years of expertise, we provide
                                    continuous monitoring and support to ensure API stability, security, and
                                    performance.</span>
                            </div>
                        </div>

                        <div class="benifits-img">
                            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/react-native/codesclue_benefits-mobile.webp"
                                alt="benefits-mobile-image" />
                        </div>

                        <div
                            class="d-flex flex-column justify-content-md-around justify-content-center mt-md-4 text-justify">
                            <div class="benifit-details py-xxl-0 py-md-3 py-2 d-flex flex-column gap-2">
                                <i class="fa-solid fa-shield-alt text-primary font-24 bg-white rounded-2"></i>
                                <p class="content-sub-title text-left text-white mb-0">Security & Authentication
                                    Testing</p>
                                <span class="small-text text-white">
                                    Identifying vulnerabilities, testing authentication mechanisms (OAuth, JWT, API
                                    Keys), and ensuring data protection.
                                </span>
                            </div>

                            <div class="benifit-details py-xxl-0 py-md-3 py-2 d-flex flex-column gap-2">
                                <i class="fa-solid fa-plug text-primary font-24 bg-white rounded-2"></i>
                                <p class="content-sub-title text-left text-white mb-0">Integration & Compatibility
                                    Testing</p>
                                <span class="small-text text-white">
                                    Ensuring smooth API integration with databases, third-party services, and
                                    microservices environments.
                                </span>
                            </div>

                            <div class="benifit-details py-xxl-0 py-md-3 py-2 d-flex flex-column gap-2">
                                <i class="fa-solid fa-rotate text-primary font-24 bg-white rounded-2"></i>
                                <p class="content-sub-title text-left text-white mb-0">Regression & Error Handling
                                    Testing</p>
                                <span class="small-text text-white">
                                    Validating API updates, preventing breaking changes, and ensuring robust
                                    error-handling mechanisms.
                                </span>
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
                            <h2><b> Keep Your API Ecosystem Reliable with Ongoing Testing</b></h2>
                            <p class="mt-4">
                                APIs evolve with software updates, and ensuring their continuous functionality is
                                crucial.
                                Our ongoing API testing services validate performance, security, and integration with
                                each release.
                            </p><br>
                            <p>
                                At CodesClue, we offer long-term API testing support to ensure that your APIs remain
                                stable, responsive, and secure as your application scales.
                                Our proactive approach prevents failures, detects vulnerabilities, and optimizes API
                                response times.
                            </p><br>
                            <p>
                                Our dedicated testing experts monitor and refine your API ecosystem, ensuring seamless
                                connectivity between applications,
                                databases, and third-party services. Trust us to keep your APIs running smoothly with
                                continuous validation and monitoring.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-10  mt-sm-services">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/services/API-2.jpg" class="img-fluid rounded">
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
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/services/API.jpg"
                                class="services-circle-img active" alt="Image 4">
                        </div>
                    </div>

                </div>
            </div>
        </div>


    </main>




<?php get_footer(); ?>