    <?php
/*
Template Name: DotNet Template
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
                                    <span class="section-subtitle char-anim" data-delay="0.75">.NET 
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="breadcrumb-wrapper fade-anim" data-direction="left" data-offset="100"
                            data-delay="0.90">
                            <ul class="breadcrumb">
                                <li><a href="<?php echo home_url(''); ?>">HOME</a></li>
                                <li>.NET</li>
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
                                    <h2 class="section-title mb-0">.NET Web Development Services</h2>
                                </div>
                                <div class="subtitle-wrapper fade-anim py-4">
                                    <span class="section-subtitle">Build secure, high-performance, and scalable web, desktop, and
                                cloud-based applications with cutting-edge .NET solutions.
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
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/services/dotnet.jpg" alt="Team Working"
                        class="img-fluid float-up-down d-sm-none">
                </div>

                <!-- Text Content -->
                <div class="col-lg-6 col-md-10 text-services">
                    <h2>Top .NET Development Company</h2>
                    <p>
                        As a leading .NET development company, we provide scalable, secure, and high-performance solutions for web, desktop, and cloud-based applications. Our dedicated .NET developers utilize Microsoft's robust framework to create enterprise-grade applications that enhance business efficiency and innovation.
                    </p><br>
                    <p>
                       We specialize in ASP.NET, .NET Core, and cloud-based solutions with Azure, ensuring high-performance applications with seamless integration capabilities. By leveraging MVC architecture, microservices, and cloud-native development, we craft reliable and future-ready applications tailored to your industry needs.
                    </p><br>
                    <p>
                       Our user-focused approach ensures that every .NET application we build is optimized for speed, security, and maintainability. Whether you require a robust enterprise application, a feature-rich web portal, or a scalable cloud solution, our expert .NET team is ready to deliver cutting-edge solutions that drive success.
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
                                <p class="content-sub-title text-left text-white mb-0">Innovative and Scalable .NET
                                    Solutions</p>
                                <span class="small-text text-white">We leverage cutting-edge Microsoft
                                    technologies to build innovative, scalable, and high-performance applications
                                    tailored to your business needs.</span>
                            </div>
                            <div class="benifit-details py-xxl-0 py-md-3 py-2 d-flex flex-column gap-2">
                                <i class="fa-brands fa-microsoft text-primary font-24 bg-white rounded-2"></i>
                                <p class="content-sub-title text-left text-white mb-0">Expert .NET Developers</p>
                                <span class="small-text text-white">With 4+ years of expertise, our skilled
                                    .NET developers create secure, efficient, and dynamic web, mobile, and cloud-based
                                    applications.</span>
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
                                <span class="small-text text-white">Our development strategy ensures that your
                                    .NET applications are optimized for performance, security, and scalability, meeting
                                    industry standards.</span>
                            </div>
                            <div class="benifit-details py-xxl-0 py-md-3 py-2 d-flex flex-column gap-2">
                                <i class="fa-solid fa-people-arrows text-primary font-24 bg-white rounded-2"></i>
                                <p class="content-sub-title text-left text-white mb-0">Committed to Quality and
                                    Innovation</p>
                                <span class="small-text text-white">Our dedication to top-tier development
                                    practices ensures that your .NET solutions remain innovative, robust, and
                                    future-proof.</span>
                            </div>
                            <div class="benifit-details py-xxl-0 py-md-3 py-2 d-flex flex-column gap-2">
                                <i class="fa-solid fa-business-time text-primary font-24 bg-white rounded-2"></i>
                                <p class="content-sub-title text-left text-white mb-0">Reliable Business and Startup
                                    Partner</p>
                                <span class="small-text text-white">CodesClue is the .NET development company
                                    you can trust, whether you're a startup looking to make an impact or an established
                                    business aiming to enhance your digital presence.</span>
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
          <h2><b>Build Scalable & Secure .NET Applications for Your Business</b></h2>
          <p class="mt-4">
            .NET is a powerful framework developed by Microsoft, known for its flexibility,
                                security, and ability to build scalable web, desktop, and cloud-based applications.
                                Whether you're looking for enterprise-grade solutions or feature-rich applications, .NET
                                provides a robust foundation.
          </p><br>
          <p>
            CodesClue is a trusted .NET development company with years of expertise in delivering
                                tailored solutions. Our .NET developers specialize in building enterprise applications,
                                web portals, and cloud-based platforms that drive business growth and efficiency.
          </p><br>
          <p>
 With a strong focus on security, scalability, and performance, our .NET development
                                services ensure seamless integration, high-speed performance, and long-term
                                sustainability. Hire our experienced .NET developers to bring your vision to life with
                                cutting-edge Microsoft technologies.
          </p>
        </div>
      </div>
      <div class="col-lg-5 col-md-10 mt-sm-services">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/services/dotnet1.jpg" class="img-fluid rounded">
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
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/services/dotnet2.jpg" class="services-circle-img active" alt="Image 4">
                            </div>
                        </div>

                    </div>
                </div>
            </div>



    </main>


 <?php get_footer(); ?>