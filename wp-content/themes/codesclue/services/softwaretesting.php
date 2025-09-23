  <?php
/*
Template Name: Software Testing Template
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
                                    <span class="section-subtitle char-anim" data-delay="0.75">Software Testing
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="breadcrumb-wrapper fade-anim" data-direction="left" data-offset="100"
                            data-delay="0.90">
                            <ul class="breadcrumb">
                                <li><a href="<?php echo home_url(''); ?>">HOME</a></li>
                                <li>Software Testing</li>
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
                                    <h2 class="section-title mb-0">Software Testing Services</h2>
                                </div>
                                <div class="subtitle-wrapper fade-anim py-4">
                                    <span class="section-subtitle">Our expert software testing services ensure that your applications are bug-free, secure,
                                and perform optimally across all environments. With a focus on quality, we test for
                                usability, functionality, and security.
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
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/services/Software (1).jpg" alt="Team Working"
                        class="img-fluid float-up-down d-sm-none">
                </div>

                <!-- Text Content -->
                <div class="col-lg-6 col-md-10 text-services">
                    <h2>Expert Software Testing Services for Quality Assurance</h2>
                    <p> Deliver flawless software products with our comprehensive software testing services. We
                                ensure that your application is free from bugs, meets industry standards, and offers an
                                exceptional user experience. Our meticulous testing approach helps identify potential
                                issues early, reducing development costs and improving software reliability.
                    </p><br>
                    <p>
                         From functional testing to security assessments, our expert testers use the latest tools
                                and techniques to thoroughly evaluate your software's performance and stability. We
                                conduct rigorous testing across various devices, platforms, and environments to ensure
                                seamless functionality and optimal performance.
                    </p><br>
                    <p>
                        We provide both manual and automated testing solutions tailored to your project's needs.
                                Our testing framework ensures scalability, performance, and security are fully optimized
                                before launch. With CodesClue, you can confidently deploy high-quality, bug-free
                                software that meets your business goals and exceeds user expectations.
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
                                <i class="fa-regular fa-lightbulb text-primary font-24 bg-white rounded-2"></i>
                                <p class="content-sub-title text-left text-white mb-0">End-to-End Software Testing</p>
                                <span class="small-text text-white">We provide comprehensive testing services
                                    for all types of software, ensuring quality from the design phase through to
                                    deployment and post-launch support.</span>
                            </div>

                            <div class="benifit-details py-xxl-0 py-md-3 py-2 d-flex flex-column gap-2">
                                <i class="fa-solid fa-cogs text-primary font-24 bg-white rounded-2"></i>
                                <p class="content-sub-title text-left text-white mb-0">Expert Team of Software Testing
                                </p>
                                <span class="small-text text-white">Our testing team, with 5+ years of
                                    experience, ensures bug-free and high-performing software solutions.
                                </span>
                            </div>
                        </div>

                        <div class="benifits-img">
                            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/react-native/codesclue_benefits-mobile.webp"
                                alt="Software Testing Benefits">
                        </div>

                        <div
                            class="d-flex flex-column justify-content-md-around justify-content-center mt-md-4 text-justify">
                            <div class="benifit-details py-xxl-0 py-md-3 py-2 d-flex flex-column gap-2">
                                <i class="fa-solid fa-chart-line text-primary font-24 bg-white rounded-2"></i>
                                <p class="content-sub-title text-left text-white mb-0">Quality Assurance and
                                    Reliability</p>
                                <span class="small-text text-white">Our software testing services help you
                                    deliver a product that meets the highest quality standards, ensuring reliability and
                                    optimal performance under all conditions.</span>
                            </div>

                            <div class="benifit-details py-xxl-0 py-md-3 py-2 d-flex flex-column gap-2">
                                <i class="fa-solid fa-people-arrows text-primary font-24 bg-white rounded-2"></i>
                                <p class="content-sub-title text-left text-white mb-0">Early Bug Detection</p>
                                <span class="small-text text-white">We identify and resolve potential issues
                                    early in the development cycle, reducing the risk of bugs and minimizing costs
                                    associated with fixing post-launch problems.</span>
                            </div>

                            <div class="benifit-details py-xxl-0 py-md-3 py-2 d-flex flex-column gap-2">
                                <i class="fa-solid fa-shield-alt text-primary font-24 bg-white rounded-2"></i>
                                <p class="content-sub-title text-left text-white mb-0">Security Testing</p>
                                <span class="small-text text-white">We perform thorough security testing to
                                    ensure your software is protected against vulnerabilities and cyber threats,
                                    providing peace of mind for both your business and users.</span>
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
          <h2><b>Ensure Your Software is Bug-Free & Secure</b></h2>
          <p class="mt-4">
           Software bugs can be detrimental to the user experience and business operations. At
                                CodesClue, we specialize in comprehensive software testing to identify, fix, and prevent
                                issues before they reach your end-users.
          </p><br>
          <p>
           Our expert team conducts thorough functionality, integration, and security testing to
                                ensure that your software operates flawlessly under different environments and stress
                                conditions. We offer both manual and automated testing solutions tailored to your
                                specific needs.
          </p><br>
          <p>
            Whether you are launching a new software or looking to enhance an existing one, our
                                testing services help ensure a smooth, secure, and reliable experience for your users.
          </p>
        </div>
      </div>
      <div class="col-lg-5 col-md-10 mt-sm-services">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/services/Software (2).jpg" class="img-fluid rounded">
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
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/services/Software (3).jpg" class="services-circle-img active" alt="Image 4">
                            </div>
                        </div>

                    </div>
                </div>
            </div>



    </main>

<?php get_footer(); ?>