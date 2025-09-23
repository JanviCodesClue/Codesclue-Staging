<?php
/*
Template Name: Auto Mated testing Template
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
                                    <span class="section-subtitle char-anim" data-delay="0.75"> Automated Testing
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="breadcrumb-wrapper fade-anim" data-direction="left" data-offset="100"
                            data-delay="0.90">
                            <ul class="breadcrumb">
                                <li><a href="<?php echo home_url(''); ?>">HOME</a></li>
                                <li> Automated Testing </li>
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
                                    <h2 class="section-title mb-0"> Automated Testing Services</h2>
                                </div>
                                <div class="subtitle-wrapper fade-anim py-4">
                                    <span class="section-subtitle">Ensuring the stability, performance, and security of
                                        your application after deployment
                                        is crucial for long-term success. Our automated testing services provide
                                        continuous
                                        monitoring, bug detection, and performance optimization.
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
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/services/automatedtesting.jpg" alt="Team Working"
                        class="img-fluid float-up-down d-sm-none">
                </div>

                <!-- Text Content -->
                <div class="col-lg-6 col-md-10 text-services">
                    <h2>Enhance Your Software Quality with Automated Testing</h2>
                    <p>
                        Automated testing is essential for delivering high-quality, bug-free, and efficient
                        software. It accelerates development, improves accuracy, and ensures seamless
                        performance across various environments. By automating repetitive test cases, businesses
                        can reduce costs, increase efficiency, and enhance software reliability.
                    </p><br>
                    <p>
                        At CodesClue, we specialize in automated testing services, leveraging tools like
                        Selenium, Cypress, JUnit, TestNG, and Appium to provide fast, scalable, and accurate
                        testing solutions. Our expertise ensures that your software is optimized for
                        performance, security, and seamless functionality across platforms.
                    </p><br>
                    <p>
                        Whether you're developing a web application, mobile app, or enterprise software, our
                        automated testing solutions guarantee efficiency, reliability, and long-term software
                        stability. Let us help you build error-free, high-performing applications with
                        cutting-edge automated testing technologies.
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
                                <p class="content-sub-title text-left text-white mb-0">Cloud-Based Test Automation
                                </p>
                                <span class="small-text text-white">We run scalable test suites on cloud
                                    testing platforms like BrowserStack, Sauce Labs, and LambdaTest.</span>
                            </div>

                            <div class="benifit-details py-xxl-0 py-md-3 py-2 d-flex flex-column gap-2">
                                <i class="fa-solid fa-shield-halved text-primary font-24 bg-white rounded-2"></i>
                                <p class="content-sub-title text-left text-white mb-0">Reliable Automated Testing &
                                    Monitoring</p>
                                <span class="small-text text-white">With 2+ years of expertise, we provide
                                    continuous monitoring and support to ensure smooth software performance,
                                    security,
                                    and reliability.</span>

                            </div>
                        </div>

                        <div class="benifits-img">
                            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/react-native/codesclue_benefits-mobile.webp"
                                alt="benefits-mobile-image" />
                        </div>

                        <div
                            class="d-flex flex-column justify-content-md-around justify-content-center mt-md-4 text-justify">
                            <div class="benifit-details py-xxl-0 py-md-3 py-2 d-flex flex-column gap-2">
                                <i class="fa-solid fa-wrench text-primary font-24 bg-white rounded-2"></i>
                                <p class="content-sub-title text-left text-white mb-0">Test Automation Strategy &
                                    Implementation</p>
                                <span class="small-text text-white">We design custom test automation
                                    frameworks that fit your business needs, ensuring maximum test coverage and
                                    efficiency.</span>
                            </div>

                            <div class="benifit-details py-xxl-0 py-md-3 py-2 d-flex flex-column gap-2">
                                <i class="fa-solid fa-desktop text-primary font-24 bg-white rounded-2"></i>
                                <p class="content-sub-title text-left text-white mb-0">Web & Mobile Test Automation
                                </p>
                                <span class="small-text text-white">Our experts use Selenium, Cypress, and
                                    Appium to automate tests across browsers, operating systems, and mobile platforms.
                                </span>
                            </div>

                            <div class="benifit-details py-xxl-0 py-md-3 py-2 d-flex flex-column gap-2">
                                <i class="fa-solid fa-arrows-rotate text-primary font-24 bg-white rounded-2"></i>
                                <p class="content-sub-title text-left text-white mb-0">CI/CD Integration & Continuous
                                    Testing</p>
                                <span class="small-text text-white">Implementing automated testing in DevOps
                                    pipelines for faster releases using Jenkins, GitHub Actions, and Azure
                                    DevOps.</span>
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
                            <h2><b>Keep Your System Running Smoothly with Automated Testing & Ongoing Support</b></h2>
                            <p class="mt-4">
                                Software doesn't stop at launch : continuous automated testing is key to maintaining
                                performance
                                and user satisfaction. We provide comprehensive testing solutions to ensure your system
                                remains stable and performs optimally as you implement updates or changes.
                            </p><br>
                            <p>
                                At CodesClue, we specialize in automated testing support, covering system updates,
                                integration
                                testing, and post-launch performance checks. Our team ensures that new features and
                                modifications
                                function seamlessly, without causing disruptions or downtime.
                            </p><br>
                            <p>
                                Our proactive, AI-driven automated testing approach identifies and resolves issues
                                before they
                                impact users, guaranteeing a smooth, secure, and scalable digital experience for your
                                business.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-10 mt-sm-services">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/services/automatedtesting1.jpg" class="img-fluid rounded">
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
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/services/automatedtesting2.jpg" class="services-circle-img active"
                                alt="Image 4">
                        </div>
                    </div>

                </div>
            </div>
        </div>



    </main>




<?php get_footer(); ?>