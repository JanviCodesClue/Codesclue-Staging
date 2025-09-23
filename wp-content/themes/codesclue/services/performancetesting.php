           <?php
/*
Template Name: Performance Testing Template
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
                                    <span class="section-subtitle char-anim" data-delay="0.75">Performance Testing
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="breadcrumb-wrapper fade-anim" data-direction="left" data-offset="100"
                            data-delay="0.90">
                            <ul class="breadcrumb">
                                <li><a href="<?php echo home_url(''); ?>">HOME</a></li>
                                <li>Performance Testing</li>
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
                                    <h2 class="section-title mb-0">Performance Testing Services</h2>
                                </div>
                                <div class="subtitle-wrapper fade-anim py-4">
                                    <span class="section-subtitle"> Performance is a critical factor in delivering seamless user experiences and maintaining
                                business operations. Our Performance Testing Services identify bottlenecks, enhance
                                responsiveness, and optimize system stability under various load conditions.
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
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/services/Performance (1).jpg" alt="Team Working"
                        class="img-fluid float-up-down d-sm-none">
                </div>

                <!-- Text Content -->
                <div class="col-lg-6 col-md-10 text-services">
                    <h2> Maximize System Efficiency with Performance Testing</h2>
                    <p>
                       Performance is the backbone of any successful digital application. Ensuring that your
                                system can handle heavy traffic, high data loads, and peak usage times without crashes
                                or slowdowns is essential. Our Performance Testing Services help identify bottlenecks,
                                optimize speed, and enhance reliability.
                    </p><br>
                    <p>
                         At CodesClue, we leverage industry-leading tools like JMeter, LoadRunner, Gatling, and
                                k6 to conduct in-depth performance assessments. Our tailored testing strategies
                                guarantee that your application remains fast, scalable, and resilient under all
                                conditions.
                    </p><br>
                    <p>
                       With CodesClue's performance testing services, you can confidently deploy scalable
                                applications that deliver a flawless user experience. Whether you're launching a new
                                product or optimizing an existing system, our experts help you identify weaknesses,
                                improve infrastructure, and prevent costly downtime. Let us ensure that your software
                                runs at its best every time, everywhere.
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
                                <p class="content-sub-title text-left text-white mb-0">Load Testing</p>
                                <span class="small-text text-white">Simulate real-world traffic to evaluate
                                    application behavior under expected and peak loads.</span>
                            </div>

                            <div class="benifit-details py-xxl-0 py-md-3 py-2 d-flex flex-column gap-2">
                                <i class="fa-solid fa-chart-simple text-primary font-24 bg-white rounded-2"></i>
                                <p class="content-sub-title text-left text-white mb-0">Expert Team of Performance
                                    Testing
                                </p>
                                <span class="small-text text-white">With 4+ years of expertise, we provide
                                    continuous monitoring and support to ensure Performance stability, security, and
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
                                <i class="fa-solid fa-hourglass-half text-primary font-24 bg-white rounded-2"></i>
                                <p class="content-sub-title text-left text-white mb-0">Endurance Testing</p>
                                <span class="small-text text-white">Verify long-term system stability and
                                    sustained high performance over extended periods.</span>
                            </div>

                            <div class="benifit-details py-xxl-0 py-md-3 py-2 d-flex flex-column gap-2">
                                <i class="fa-solid fa-chart-bar text-primary font-24 bg-white rounded-2"></i>
                                <p class="content-sub-title text-left text-white mb-0">Spike Testing</p>
                                <span class="small-text text-white">Examine system response to sudden,
                                    unexpected traffic surges.</span>
                            </div>

                            <div class="benifit-details py-xxl-0 py-md-3 py-2 d-flex flex-column gap-2">
                                <i class="fa-solid fa-cloud text-primary font-24 bg-white rounded-2"></i>
                                <p class="content-sub-title text-left text-white mb-0">Cloud-Based Performance Testing
                                </p>
                                <span class="small-text text-white">Test application performance across AWS,
                                    Azure, and Google Cloud environments.</span>
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
          <h2><b>Keep Your API Ecosystem Reliable with Ongoing Testing</b></h2>
          <p class="mt-4">
           In today's fast-paced digital landscape, application performance is crucial for user
                                satisfaction and business success. Performance testing ensures that your software can
                                handle expected workloads while maintaining speed, stability, and responsiveness. By
                                proactively identifying bottlenecks and inefficiencies, we help optimize your system for
                                seamless operation under any condition.
          </p><br>
          <p>
             At CodesClue, we specialize in end-to-end performance testing, leveraging
                                industry-leading tools like JMeter, LoadRunner, and Gatling. Our team conducts rigorous
                                load, stress, endurance, and scalability testing to evaluate your application's behavior
                                under varying conditions. We simulate real-world user interactions to ensure that your
                                software remains stable, even under peak demand.
          </p><br>
          <p>
             Performance is more than just speed; it's about efficiency and reliability. Our testing
                                approach goes beyond basic benchmarking, focusing on response time optimization,
                                resource utilization, and system recovery. We work closely with development teams to
                                fine-tune applications, ensuring they perform optimally across web, mobile, and cloud
                                environments.
          </p>
        </div>
      </div>
      <div class="col-lg-5 col-md-10 mt-sm-services">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/services/Performance (2).jpg" class="img-fluid rounded">
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
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/services/Performance (3).jpg" class="services-circle-img active" alt="Image 4">
                            </div>
                        </div>

                    </div>
                </div>
            </div>



    </main>


<?php get_footer(); ?>