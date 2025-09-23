<?php
/*
Template Name: PHP Template
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
                                    <span class="section-subtitle char-anim" data-delay="0.75">PHP
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="breadcrumb-wrapper fade-anim" data-direction="left" data-offset="100"
                            data-delay="0.90">
                            <ul class="breadcrumb">
                                <li><a href="<?php echo home_url(''); ?>">HOME</a></li>
                                <li>PHP</li>
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
                                    <h2 class="section-title mb-0">PHP Web Development Services</h2>
                                </div>
                                <div class="subtitle-wrapper fade-anim py-4">
                                    <span class="section-subtitle"> Our team of expert PHP developers specializes in creating dynamic, secure, and scalable
                                web applications. We use PHP's versatility and powerful frameworks to deliver custom
                                solutions that enhance your digital presence, ensuring high performance.
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
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/services/php (1).jpg" alt="Team Working"
                        class="img-fluid float-up-down d-sm-none">
                </div>

                <!-- Text Content -->
                <div class="col-lg-6 col-md-10 text-services">
                    <h2>Comprehensive PHP Development Solutions</h2>
                    <p>
                         If you're looking to build dynamic, scalable, and secure web applications, PHP is the
                                perfect solution for your project. At CodesClue, we provide expert PHP development
                                services tailored to your specific business requirements. Our team works closely with
                                you to build custom applications that drive growth, enhance user experience, and deliver
                                high-performance results. With PHP's flexibility, we create web solutions that are both
                                powerful and easy to maintain.
                    </p><br>
                    <p>
                        With years of experience in PHP development, our team creates custom solutions across
                                various industries. From small websites to large-scale enterprise applications, we
                                leverage PHP's versatility and robust frameworks like Laravel and CodeIgniter to ensure
                                high-quality results that align with your business goals and objectives. Our expertise
                                in database integration, API development, and scalable architectures ensures a seamless
                                and efficient web application.
                    </p><br>
                    <p>
                        At CodesClue, we go beyond development; we focus on performance optimization, security
                                enhancements, and future-proofing your PHP applications. Whether you need a custom
                                content management system, an e-commerce platform, or a powerful business web
                                application, we deliver solutions that are reliable, scalable, and tailored to meet your
                                evolving business needs.
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
                                <p class="content-sub-title text-left text-white mb-0">Custom and Scalable
                                    Solutions</p>
                                <span class="small-text text-white">At appxing, we specialize in
                                    building custom PHP solutions that cater to the unique needs of your
                                    business. Our scalable applications are designed to grow with you, ensuring
                                    they perform seamlessly over time.</span>
                            </div>
                            <div class="benifit-details py-xxl-0 py-md-3 py-2 d-flex flex-column gap-2">
                                <i class="fa-brands fa-php text-primary font-24 bg-white rounded-2"></i>
                                <p class="content-sub-title text-left text-white mb-0">Expert PHP Development
                                    Team</p>
                                <span class="small-text text-white">Our PHP developers, with 8+ years of
                                    experience, create robust and feature-rich web applications.</span>
                            </div>
                        </div>
                        <div class="benifits-img">
                            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/react-native/codesclue_benefits-mobile.webp"
                                alt="benefits-mobile-image" />
                        </div>
                        <div
                            class="d-flex flex-column justify-content-md-around justify-content-center mt-md-4 text-justify">
                            <div class="benifit-details py-xxl-0 py-md-3 py-2 d-flex flex-column gap-2">
                                <i class="fa-solid fa-chess text-primary font-24 bg-white rounded-2"></i>
                                <p class="content-sub-title text-left text-white mb-0">Strategic Development Approach
                                </p>
                                <span class="small-text text-white">Our strategic approach to PHP development
                                    ensures that your application is optimized for performance, security, and
                                    scalability, ensuring it remains competitive in a fast-evolving market.</span>
                            </div>
                            <div class="benifit-details py-xxl-0 py-md-3 py-2 d-flex flex-column gap-2">
                                <i class="fa-solid fa-people-arrows text-primary font-24 bg-white rounded-2"></i>
                                <p class="content-sub-title text-left text-white mb-0">Commitment to Innovation and
                                    Excellence</p>
                                <span class="small-text text-white">At appxing, we are dedicated to delivering
                                    innovative and top-notch PHP solutions that set new industry standards. We focus on
                                    ensuring your application's longevity and relevance with cutting-edge
                                    features.</span>
                            </div>
                            <div class="benifit-details py-xxl-0 py-md-3 py-2 d-flex flex-column gap-2">
                                <i class="fa-solid fa-business-time text-primary font-24 bg-white rounded-2"></i>
                                <p class="content-sub-title text-left text-white mb-0">Reliable Partner for Your
                                    Business Growth</p>
                                <span class="small-text text-white">Whether you're a startup or an established
                                    business, appxing is your trusted partner in PHP development, helping you accelerate
                                    growth and expand your digital presence.</span>
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
          <h2><b> Build High-Performance Backend Solutions with Our PHP Development Services</b></h2>
          <p class="mt-4">
           PHP is a powerful and widely-used server-side scripting language known for its
                                flexibility, scalability, and extensive feature set. With its rich ecosystem of
                                frameworks and libraries, PHP makes it easy to build dynamic, secure, and
                                high-performance web applications. Its versatility allows it to be used for
                                everything from simple websites to complex enterprise-level solutions.
          </p><br>
          <p>
            At appxing, we specialize in providing expert PHP development services. With years
                                of experience and a skilled team, we focus on delivering robust, scalable, and
                                secure backend solutions that support your business growth. Whether you need a
                                custom web application, an eCommerce solution, or a complex enterprise system, our
                                PHP expertise ensures that your project aligns with your unique business
                                requirements.
          </p>
        </div>
      </div>
      <div class="col-lg-5 col-md-10 mt-sm-services">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/services/php (2).jpg" class="img-fluid rounded">
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
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/services/php (3).jpg" class="services-circle-img active" alt="Image 4">
                            </div>
                        </div>

                    </div>
                </div>
            </div>



    </main>

<?php get_footer(); ?>