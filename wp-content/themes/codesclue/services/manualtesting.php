          <?php
/*
Template Name: Manual Testing Template
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
                                    <span class="section-subtitle char-anim" data-delay="0.75">Manual Testing 
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="breadcrumb-wrapper fade-anim" data-direction="left" data-offset="100"
                            data-delay="0.90">
                            <ul class="breadcrumb">
                                <li><a href="<?php echo home_url(''); ?>">HOME</a></li>
                                <li>Manual Testing </li>
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
                                    <h2 class="section-title mb-0">Manual Testing Services</h2>
                                </div>
                                <div class="subtitle-wrapper fade-anim py-4">
                                    <span class="section-subtitle"> Ensuring the stability, performance, and user experience of your application is crucial for long-term success. 
                                Our manual testing services provide real-user scenario testing, detailed bug detection, and comprehensive quality assurance to 
                                ensure your software functions flawlessly across all devices and platforms.
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
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/services/ManualTesting (1).jpg" alt="Team Working"
                        class="img-fluid float-up-down d-sm-none">
                </div>

                <!-- Text Content -->
                <div class="col-lg-6 col-md-10 text-services">
                    <h2> Enhance Your Software Quality with Manual Testing</h2>
                    <p>
                        Manual testing is essential for delivering high-quality, user-friendly, and thoroughly validated software. 
                                It ensures accurate real-world testing, uncovers complex issues, and guarantees seamless functionality across various platforms. 
                                By manually testing applications, businesses can identify usability flaws, improve user experience, and maintain software reliability.
                    </p><br>
                    <p>
                       At CodesClue, we specialize in manual testing services, conducting rigorous functional, usability, exploratory, 
                                and regression testing. Our QA experts simulate real-user interactions to detect hidden bugs, UI inconsistencies, and performance issues 
                                that automated tests might overlook.
                    </p><br>
                    <p>
                         Whether you're launching a web application, mobile app, or enterprise software, our manual testing solutions guarantee precision, 
                                reliability, and long-term software quality. Let us help you deliver flawless, user-centric applications with meticulous manual testing methodologies.
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
                                <p class="content-sub-title text-left text-white mb-0">Cloud-Based Test Automation</p>
                                <span class="small-text text-white">We run scalable test suites on cloud
                                    testing platforms like BrowserStack, Sauce Labs, and LambdaTest.</span>
                            </div>

                            <div class="benifit-details py-xxl-0 py-md-3 py-2 d-flex flex-column gap-2">
                                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/white-manual.svg" class="card-32 p-2 border-radius bg-white"
                                alt="white-manual.svg" width="20px" height="20px" />
                                <p class="content-sub-title text-left text-white mb-0">Expert of Manual Testing</p>
                                <span class="small-text text-white">With 6+ years of expertise, we provide
                                    continuous monitoring and support to ensure smooth software performance, security,
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
                                <i class="fa-solid fa-plug-circle-check text-primary font-24 bg-white rounded-2"></i>
                                <p class="content-sub-title text-left text-white mb-0">API & Integration Testing</p>
                                <span class="small-text text-white">
                                    Ensuring smooth data exchange and integration between services with thorough manual API validation.
                                </span>
                            </div>
                            
                            <div class="benifit-details py-xxl-0 py-md-3 py-2 d-flex flex-column gap-2">
                                <i class="fa-solid fa-rotate text-primary font-24 bg-white rounded-2"></i>
                                <p class="content-sub-title text-left text-white mb-0">Regression & Re-Testing</p>
                                <span class="small-text text-white">
                                    We ensure new updates don't break existing functionality through detailed regression testing.
                                </span>
                            </div>
                            
                            <div class="benifit-details py-xxl-0 py-md-3 py-2 d-flex flex-column gap-2">
                                <i class="fa-solid fa-gauge-high text-primary font-24 bg-white rounded-2"></i>
                                <p class="content-sub-title text-left text-white mb-0">Performance & Load Testing</p>
                                <span class="small-text text-white">
                                    We conduct rigorous performance and stress testing to ensure stability and responsiveness under high traffic.
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section>
  <div class="container mt-5">
    <div class="row justify-content-center align-items-center">
      <div class="col-lg-7 col-md-10">
        <div>
          <h2><b> Ensure Stability & Quality with Expert Manual Testing</b></h2>
          <p class="mt-4">
            Ensuring the stability, performance, and security of your application after deployment is crucial for long-term success. Our manual testing services provide in-depth analysis, real-user simulation, and detailed bug reporting, guaranteeing a flawless user experience.
          </p><br>
          <p>
           At CodesClue, our QA experts conduct rigorous functional, usability, and exploratory
                                testing to identify potential issues that automated tests might overlook.
                                We focus on real-world scenarios to ensure your application meets user expectations.
          </p><br>
          <p>
            From UI/UX validation to regression and cross-platform testing, our manual testing
                                approach ensures your software remains reliable,
                                intuitive, and fully optimized for performance across all devices.
          </p>
        </div>
      </div>
      <div class="col-lg-5 col-md-10 mt-sm-services">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/services/ManualTesting (2).jpg" class="img-fluid rounded">
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
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/services/ManualTesting (3).jpg" class="services-circle-img active" alt="Image 4">
                            </div>
                        </div>

                    </div>
                </div>
            </div>



    </main>


<?php get_footer(); ?>