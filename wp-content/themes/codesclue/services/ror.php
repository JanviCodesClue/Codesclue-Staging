   <?php
/*
Template Name: ROR Template
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
                                    <span class="section-subtitle char-anim" data-delay="0.75">RoR
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="breadcrumb-wrapper fade-anim" data-direction="left" data-offset="100"
                            data-delay="0.90">
                            <ul class="breadcrumb">
                                <li><a href="<?php echo home_url(''); ?>">HOME</a></li>
                                <li>RoR</li>
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
                                    <h2 class="section-title mb-0">RoR App Development Services</h2>
                                </div>
                                <div class="subtitle-wrapper fade-anim py-4">
                                    <span class="section-subtitle">We are a premier Ruby on Rails
                                (RoR) development company, specializing in building powerful, scalable, and maintainable
                                web applications. Our team of experienced RoR developers ensures that your business.
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
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/services/ror (1).jpg" alt="Team Working"
                        class="img-fluid float-up-down d-sm-none">
                </div>

                <!-- Text Content -->
                <div class="col-lg-6 col-md-10 text-services">
                    <h2> Ruby on Rails Consulting Services</h2>
                    <p>
                       Our expert Ruby on Rails (RoR) consultants offer comprehensive, end-to-end consulting
                                services to help you design, build, and scale your web applications. We are committed to
                                ensuring the success of your projects through a deep understanding of RoR's power and
                                capabilities. Whether you're launching a new app or optimizing an existing one, our RoR
                                expertise guarantees a smooth and efficient development process.
                    </p><br>
                    <p>
                       Leverage the flexibility and speed of Ruby on Rails to create robust and scalable
                                applications. Our experienced team specializes in crafting intuitive user interfaces,
                                seamless back-end functionality, and efficient code that meets your business objectives.
                                With a strong focus on security, maintainability, and performance, we ensure that your
                                RoR application remains future-proof and adaptable to evolving business needs.
                    </p><br>
                    <p>
                        Simplify your cloud migration process with our RoR cloud hosting and migration services.
                                We offer scalable, reliable, and performance-optimized hosting solutions tailored
                                specifically to meet the needs of your Ruby on Rails applications. Whether you're
                                looking for dedicated cloud hosting, containerization, or serverless solutions, our RoR
                                hosting expertise ensures seamless deployment and minimal downtime.
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
                                <p class="content-sub-title text-left text-white mb-0">Creative and Tailored Solutions
                                </p>
                                <span class="small-text text-white">At CodesClue, we believe in offering
                                    creative and tailored RoR web and app development solutions. Every project is
                                    personalized to fit your business needs and goals, ensuring a unique and innovative
                                    product.</span>
                            </div>
                            <div class="benifit-details py-xxl-0 py-md-3 py-2 d-flex flex-column gap-2">
                                <i class="fa-solid fa-gem text-primary font-24 bg-white rounded-2"></i>
                                <p class="content-sub-title text-left text-white mb-0">Expert Team of RoR Developers
                                </p>
                                <span class="small-text text-white">With 4+ years of expertise, we build
                                    secure and scalable applications with RoR's powerful framework.</span>
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
                                <p class="content-sub-title text-left text-white mb-0">Strategic Approach for Market
                                    Relevance</p>
                                <span class="small-text text-white">Staying ahead of the competition is
                                    crucial in the fast-paced app world. At CodesClue, we ensure that every RoR app we
                                    develop is strategically positioned to succeed, both in functionality and market
                                    relevance.</span>
                            </div>
                            <div class="benifit-details py-xxl-0 py-md-3 py-2 d-flex flex-column gap-2">
                                <i class="fa-solid fa-people-arrows text-primary font-24 bg-white rounded-2"></i>
                                <p class="content-sub-title text-left text-white mb-0">Committed to Innovation and
                                    Quality</p>
                                <span class="small-text text-white">Innovation and excellence are at the core
                                    of what we do. Our Ruby on Rails development services are focused on creating
                                    high-quality, forward-thinking apps that meet your business needs and exceed your
                                    expectations.</span>
                            </div>
                            <div class="benifit-details py-xxl-0 py-md-3 py-2 d-flex flex-column gap-2">
                                <i class="fa-solid fa-business-time text-primary font-24 bg-white rounded-2"></i>
                                <p class="content-sub-title text-left text-white mb-0">Reliable Business and Startup
                                    Partner</p>
                                <span class="small-text text-white">Whether you're a startup or an established
                                    enterprise, CodesClue is the trusted RoR development partner you need. We work
                                    closely with you to grow your business and enhance your digital presence with our
                                    proven Ruby on Rails expertise.</span>
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
          <h2><b>Build High-Performance Backend Solutions with Our Ruby on Rails
                                Development Services</b></h2>
          <p class="mt-4">
             Ruby on Rails (RoR) is a powerful and flexible web application framework built on Ruby,
                                designed to make the process of building complex applications easier and more efficient.
                                Known for its speed, simplicity, and scalability, RoR is a great choice for developing
                                high-performance backend systems. It enables the rapid development of secure and robust
                                applications with a strong emphasis on convention over configuration.
          </p><br>
          <p>
             At appxing, we specialize in delivering expert Ruby on Rails development services. Our
                                team of skilled RoR developers has years of experience in building scalable, secure, and
                                dynamic backend systems that align with your business objectives. Whether you're looking
                                for a custom web application, an eCommerce platform, or an enterprise-level solution,
                                our RoR expertise ensures that your project meets your business needs with high-quality
                                results.
          </p>
        </div>
      </div>
      <div class="col-lg-5 col-md-10 mt-sm-services">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/services/ror (2).jpg" class="img-fluid rounded">
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
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/services/ror (3).jpg" class="services-circle-img active" alt="Image 4">
                            </div>
                        </div>

                    </div>
                </div>
            </div>



    </main>

<?php get_footer(); ?>