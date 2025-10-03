<?php
/*
Template Name: DevSecOps & SRE Template
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
                                    <span class="section-subtitle char-anim" data-delay="0.75"> DevSecOps & SRE
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="breadcrumb-wrapper fade-anim" data-direction="left" data-offset="100"
                            data-delay="0.90">
                            <ul class="breadcrumb">
                                <li><a href="<?php echo home_url(''); ?>">HOME</a></li>
                                <li> DevSecOps & SRE</li>
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
                                    <h2 class="section-title mb-0">Engineering for Security & Reliability</h2>
                                </div>
                                <div class="subtitle-wrapper fade-anim py-4">
                                    <p class="section-subtitle">Integrating DevSecOps and Site Reliability to build secure, scalable systems.
                                    </p>
                                    <p class="section-subtitle">At CodesClue, we fuse DevSecOps principles with Site Reliability Engineering (SRE) practices to ensure your systems are not only secure but also resilient, scalable, and highly available. From embedding security into every step of your CI/CD pipeline to automating reliability checks and incident response, we make sure your infrastructure and applications meet both compliance and uptime goals.
                                    </p>
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


      <section class="third-party-apis py-5">
            <div class="container">
                <h2 class="text-center mb-5">What We Offer</h2>
                <div class="row g-4">

                <!-- Card 1 -->
                <div class="col-lg-6 col-md-6">
                    <div class="offer-service-card">
                    <h3 class="pb-3">Secure & Reliable CI/CD Pipelines</h3>
                    <div class="d-flex align-items-top"><i class="fa-solid fa-arrow-circle-right fa-size pe-2 pt-1"></i><p>Integrate security scanning, compliance checks, and automated testing into your release process.</p></div>
                    <div class="d-flex align-items-top"><i class="fa-solid fa-arrow-circle-right fa-size pe-2 pt-1"></i><p>Implement canary, blue-green, and zero-downtime deployment strategies.</p></div>
                    <p class="pt-3"><strong>Benefit :</strong> Deploy faster with fewer incidents and vulnerabilities.</p>
                    </div>
                </div>

                <!-- Card 2 -->
               <div class="col-lg-6 col-md-6">
                    <div class="offer-service-card">
                    <h3 class="pb-3">Infrastructure & Application Reliability Engineering</h3>
                    <div class="d-flex align-items-top"><i class="fa-solid fa-arrow-circle-right fa-size pe-2 pt-1"></i><p>Design fault-tolerant architectures with high availability and disaster recovery.</p></div>
                    <div class="d-flex align-items-top"><i class="fa-solid fa-arrow-circle-right fa-size pe-2 pt-1"></i><p>Establish Service Level Objectives (SLOs) and Error Budgets for critical systems.</p></div>
                    <p class="pt-3"><strong>Benefit :</strong>Improve uptime and system performance while balancing innovation.</p>
                    </div>
               </div>

               <div class="col-lg-6 col-md-6">
                    <div class="offer-service-card">
                    <h3 class="pb-3">Automated Vulnerability Management & Observability</h3>
                    <div class="d-flex align-items-top"><i class="fa-solid fa-arrow-circle-right fa-size pe-2 pt-1"></i><p>Continuously scan infrastructure, containers, and applications for threats.</p></div>
                    <div class="d-flex align-items-top"><i class="fa-solid fa-arrow-circle-right fa-size pe-2 pt-1"></i><p>Implement unified observability (logs, metrics, traces) for rapid incident detection.</p></div>
                    <p class="pt-3"><strong>Benefit :</strong>Detect and resolve issues before they impact users.</p>
                    </div>
              </div>


              <div class="col-lg-6 col-md-6">
                    <div class="offer-service-card">
                    <h3 class="pb-3">Incident Response & Chaos Engineering</h3>
                    <div class="d-flex align-items-top"><i class="fa-solid fa-arrow-circle-right fa-size pe-2 pt-1"></i><p>Build automated runbooks and escalation workflows.</p></div>
                    <div class="d-flex align-items-top"><i class="fa-solid fa-arrow-circle-right fa-size pe-2 pt-1"></i><p>Simulate failures to validate system resilience under stress.</p></div>
                    <p class="pt-3"><strong>Benefit :</strong>Reduce mean time to recovery (MTTR) and improve operational readiness.</p>
                    </div>
              </div>


                </div>
            </div>
      </section>

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
                                Why choose CodesClue?</h2>
                            <div class="benifit-details py-xxl-0 py-md-3 py-2 d-flex flex-column gap-2">
                                <i class="fa-regular fa-lightbulb text-primary font-24 bg-white rounded-2"></i>
                                <p class="content-sub-title text-left text-white mb-0">Reliability & Security Expertise
                                </p>
                                <span class="small-text text-white">Deployed 100+ secure, highly available architectures.</span>
                            </div>
                            <div class="benifit-details py-xxl-0 py-md-3 py-2 d-flex flex-column gap-2">
                                <i class="fa-brands fa-android text-primary font-24 bg-white rounded-2"></i>
                                <p class="content-sub-title text-left text-white mb-0">Compliance-First Approach</p>
                                <span class="small-text text-white">ISO 27001, SOC 2, GDPR, HIPAA-ready implementations</span>
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
                                <p class="content-sub-title text-left text-white mb-0">Automation at the Core</p>
                                <span class="small-text text-white">Security, testing, and monitoring baked into every workflow</span>
                            </div>
                            <div class="benifit-details py-xxl-0 py-md-3 py-2 d-flex flex-column gap-2">
                                <i class="fa-solid fa-people-arrows text-primary font-24 bg-white rounded-2"></i>
                                <p class="content-sub-title text-left text-white mb-0">Global SRE Experience
                                </p>
                                <span class="small-text text-white">Reliable systems delivered across 30+ countries</span>
                            </div>
                            <!-- <div class="benifit-details py-xxl-0 py-md-3 py-2 d-flex flex-column gap-2">
                                <i class="fa-solid fa-business-time text-primary font-24 bg-white rounded-2"></i>
                                <p class="content-sub-title text-left text-white mb-0">Reliable Business and Startup
                                    Partner
                                </p>
                                <span class="small-text text-white">CodesClue is the Android app development
                                    company you can rely on, whether you're a
                                    startup trying to be noticed or an
                                    established business hoping to increase your
                                    online presence.</span>
                            </div> -->
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
            <h2 class="pb-4"><b>Innovating Solutions for Your Business</b></h2>
            <div class="d-flex align-items-top text-primary"><i class="fa-solid fa-arrow-circle-right fa-size pe-2 pt-1"></i><h5>End-to-End Security & Reliability</h5></div>
            <p class="border-bottom border-primary mb-4 pt-1">From code to production</p>
            <div class="d-flex align-items-top text-primary"><i class="fa-solid fa-arrow-circle-right fa-size pe-2 pt-1"></i><h5>Faster Deployments</h5></div>
            <p class="border-bottom border-primary mb-4 pt-1">Without compromising uptime or compliance</p>
            <div class="d-flex align-items-top text-primary"><i class="fa-solid fa-arrow-circle-right fa-size pe-2 pt-1"></i><h5>Reduced Incident Impact</h5></div>
            <p class="border-bottom border-primary mb-4 pt-1">Proactive detection and resolution</p>
            <div class="d-flex align-items-top text-primary"><i class="fa-solid fa-arrow-circle-right fa-size pe-2 pt-1"></i><h5>Empowered Teams</h5></div>
            <p class="border-bottom border-primary mb-4 pt-1">Culture of shared responsibility for both security and reliability</p>
            </div>
        </div>
        <div class="col-lg-5 col-md-10 mt-sm-services">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/services/devsecops-sre.jpg" class="img-fluid rounded">
        </div>
        </div>
    </div>
    </section>


    <div class="services-contact container-fluid py-5 my-5">
                    <div class="container">
                        <div class="row align-items-center">

                            <!-- LEFT TEXT -->
                            <div class="col-lg-5 col-md-5 text-white">
                                <h2 class="services-contact-title">
                                    Projects That Define Us
                                </h2>
                                <a href="<?php echo home_url('/our-portfolio/'); ?>" target="_blank" class="services-btn mt-3 d-inline-block">View all
                        Projects</a>
                            </div>

                            <!-- RIGHT CIRCLE IMAGE -->
                            <div class="col-lg-7 col-md-7 text-center pt-xsm-cus">
                                <div class="services-circle">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/services/Android-App-Development-Services-trust-Projects.jpg" class="services-circle-img active" alt="Image 4">
                                </div>
                            </div>
                        </div>
                    </div>
    </div>


            <section class="faq-section section-40 bg-linear-white" id="faqSection">
            <div class="container z-11">
                <div class="row mx-0 px-0">
                    <div class="col-lg-12 px-lg-0 px-0">
                        <h2 class="section-title text-center">Quick Answers to Your Questions</h2>
                    </div>
                    
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h3 class="accordion-header content-title mb-0">
                                <button class="accordion-button collapsed fw-semibold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    How is DevSecOps different from SRE? 
                                </button>
                            </h3>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p class="faq-desc content-desc text-left" data-aos="fade-up">
                                        DevSecOps focuses on embedding security into development and operations, while SRE focuses on reliability, uptime, and performance. We integrate both to maximize system trustworthiness.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-aos="fade-down">
                            <h3 class="accordion-header content-title mb-0">
                                <button class="accordion-button collapsed fw-semibold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    Can you help us meet both compliance and uptime SLAs? 
                                </button>
                            </h3>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p class="faq-desc content-desc text-left" data-aos="fade-up">
                                        Yes — our approach ensures systems meet strict compliance requirements while achieving high availability.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-aos="fade-down">
                            <h3 class="accordion-header content-title mb-0">
                                <button class="accordion-button collapsed fw-semibold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                    aria-expanded="false" aria-controls="flush-collapseThree">
                                      Do you offer training for DevSecOps and SRE best practices? 
                                </button>
                            </h3>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p class="faq-desc content-desc text-left" data-aos="fade-up">
                                       Absolutely — we run workshops to embed both security and reliability culture across teams.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>

        
    </main>




<?php get_footer(); ?>