<?php
/**
 * Template Name: Our Portfolio Page
 *
 * @package CodesClue
 */
get_header(); ?>

    <main>
        <!-- page title area start  -->
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
                                    <h1 class="section-title char-anim">CodesClue</h1>
                                </div>
                                <div class="subtitle-wrapper">
                                    <span class="section-subtitle char-anim" data-delay="0.75">Portfolio
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="breadcrumb-wrapper fade-anim" data-direction="left" data-offset="100"
                            data-delay="0.90">
                            <ul class="breadcrumb">
                                <li><a href="<?php echo home_url(''); ?>">HOME</a></li>
                                <li> PORTFOLIO</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- page title area end  -->

        <!-- Client Info section -->
        <!-- about area start  -->

        <section class="about-area page-about mt-4">
            <div class="container">
                <div class="about-area-inner section-spacing">
                    <div class="section-content">
                        <div class="section-title-wrapper">
                            <div class="d-flex align-items-center justify-content-md-start gap-4 mb-xl-4 mb-0">
                            <dotlottie-player
    src="https://lottie.host/98bcbfce-9bcd-40d1-9a8d-0ce2a79b2797/TDZTFKUzdG.lottie"
    background="transparent"
    speed="1"
    style="width: 70px; height: 70px"
    autoplay
    loop>
</dotlottie-player>

                                <h2 class="section-title text-left mt-0 mb-0">Our
                                    Story</h2>

                            </div>
                            <p class=" fade-anim">At CodesClue, we don’t just build Websites and apps we create digital
                                solutions that empower businesses to scale, innovate, and lead in their industries. From
                                startups to enterprises, our portfolio showcases a diverse range of projects where
                                technology meets creativity.</p>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-lg-6">

                            <h2 class="my-4">What We’ve Built</h2>

                            <div class="accordion" id="faqAccordion">

                                <!-- Accordion 1 -->
                                <div class="accordion-item my-4">
                                    <h2 class="accordion-header m-xm-cus " id="headingOne">
                                        <button class="accordion-button px-2" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true">
                                            Cannabis Industry Solutions
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            Custom eCommerce platforms, PWA apps, and SEO driven Websites for
                                            dispensaries.
                                        </div>
                                    </div>
                                </div>

                                <!-- Accordion 2 -->
                                <div class="accordion-item my-4">
                                    <h2 class="accordion-header m-xm-cus" id="headingTwo">
                                        <button class="accordion-button collapsed px-2" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                            Healthcare Platforms
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            Intuitive web and mobile apps for patient care and appointment management.
                                        </div>
                                    </div>
                                </div>

                                <!-- Accordion 3 -->
                                <div class="accordion-item my-4">
                                    <h2 class="accordion-header m-xm-cus" id="headingThree">
                                        <button class="accordion-button collapsed px-2" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree">
                                            E-Commerce Stores
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            High converting online stores with seamless user experience and advanced
                                            payment integrations.
                                        </div>
                                    </div>
                                </div>

                                <!-- Accordion 4 -->
                                <div class="accordion-item my-4">
                                    <h2 class="accordion-header m-xm-cus" id="headingFour">
                                        <button class="accordion-button collapsed px-2" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFour">
                                            Mobile Apps
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse"
                                        data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            iOS and Android applications that deliver performance and functionality.
                                        </div>
                                    </div>
                                </div>

                                <!-- Accordion 5 -->
                                <div class="accordion-item my-4">
                                    <h2 class="accordion-header m-xm-cus" id="headingFive">
                                        <button class="accordion-button collapsed px-2" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFive">
                                            AI-Powered Tools
                                        </button>
                                    </h2>
                                    <div id="collapseFive" class="accordion-collapse collapse"
                                        data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            Smart, data driven solutions to automate processes and engage users
                                            intelligently.
                                        </div>
                                    </div>
                                </div>

                            </div>


                        </div>
                        <div class="col-lg-6">
                            <div class="about-thumb fade-anim mt-sm-5">

                                <div class="image img_anim_reveal">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/new/OURSTORY.png" alt="image" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">

                        </div>
                    </div>

                    <div class="counter-wrapper-box">
                        <div class="counter-wrapper">
                            <div class="counter-item fade-anim" data-delay="0.30">
                                <h3 class="number t-counter">15+</h3>
                                <p class="text">Our Happy Clients</p>
                            </div>
                            <div class="counter-item fade-anim" data-delay="0.45">
                                <h3 class="number t-counter">1M+</h3>
                                <p class="text">Active Platform
                                    Users</p>
                            </div>
                            <div class="counter-item fade-anim" data-delay="0.60">
                                <h3 class="number t-counter">20+</h3>
                                <p class="text">Technologies We Used</p>
                            </div>
                            <div class="counter-item fade-anim" data-delay="0.75">
                                <h3 class="number t-counter">25+</h3>
                                <p class="text">Successful Projects</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- about area end  -->

<section class="section-40 bg-linear-white">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h2 class="section-title" data-aos="fade-down">Our Trusted Client</h2>
                    </div>
                    <div class="col-md-5">
                        <p class=" mx-auto section-description" data-aos="fade-down">We
                            collaborate
                            with startups, enterprises, and everything
                            in between. Here are some of the amazing
                            clients
                            who have
                            chosen to grow with us.</p>
                    </div>
                </div>
                <div class="section6">
                    <div class="logo-track">
                        <div class="logos" id="logos">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/client-logo/codesclue_GR_Icon.webp" class="clients-logo"
                                alt="client-logo" />
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/client-logo/codesclue_therapix-02.svg" class="clients-logo"
                                alt="client-logo" />
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/client-logo/codesclue_client-01.webp" class="clients-logo"
                                alt="client-logo" />
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/client-logo/codesclue_NLB_Icon.webp" class="clients-logo"
                                alt="client-logo" />
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/client-logo/codesclue_AZER_Icon.webp" class="clients-logo"
                                alt="client-logo" />
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/client-logo/codesclue_Trackntake.webp" class="clients-logo"
                                alt="client-logo" />
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/client-logo/codesclue_MAZADY_Icon.webp" class="clients-logo"
                                alt="client-logo" />
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/client-logo/codesclue_VERKOOP_Icon.webp" class="clients-logo"
                                alt="client-logo" />
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/client-logo/codesclue_mrbolat.webp" class="clients-logo"
                                alt="client-logo" />
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/client-logo/codesclue_TFL_Icon.webp" class="clients-logo"
                                alt="client-logo" />
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/client-logo/codesclue_RideReachLogo.webp" class="clients-logo"
                                alt="client-logo" />

                            <!-- Add more logos here -->
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section class="container" id="projectDefine">
            <div class="row mx-0 px-0">
                <div class="col-12 d-flex flex-column gap-lg-3 gap-2 px-0">
                    <h2 class="section-title mb-0">Projects That
                        Define Us</h2>
                    <p class="section-description mt-0">Our Journey,
                        Your Success</p>
                </div>


                <ul class="nav nav-tabs mt-4 d-flex w-100 p-0" id="myTab" role="tablist">
                    <li class="nav-item flex-fill text-center" role="presentation">
                        <button class="nav-link active w-100" id="all-tab" data-bs-toggle="tab" data-bs-target="#all"
                            type="button" role="tab" aria-controls="all" aria-selected="true">All</button>
                    </li>
                    <li class="nav-item flex-fill text-center" role="presentation">
                        <button class="nav-link w-100" id="mobile-tab" data-bs-toggle="tab" data-bs-target="#mobile"
                            type="button" role="tab" aria-controls="mobile" aria-selected="false">Mobile App</button>
                    </li>
                    <li class="nav-item flex-fill text-center" role="presentation">
                        <button class="nav-link w-100" id="Website-tab" data-bs-toggle="tab" data-bs-target="#Website"
                            type="button" role="tab" aria-controls="Website" aria-selected="false">Website</button>
                    </li>
                    <li class="nav-item flex-fill text-center" role="presentation">
                        <button class="nav-link w-100" id="webapp-tab" data-bs-toggle="tab" data-bs-target="#webapp"
                            type="button" role="tab" aria-controls="webapp" aria-selected="false">Web/App</button>
                    </li>
                </ul>


                <div class="tab-content mb-5" id="myTabContent">


                    <div class="tab-pane fade show all active" id="all" role="tabpanel" aria-labelledby="all-tab">
                        <div class="row g-4 all">
                            <div class="col-md-6">
                                <div class="work-box-7">
                                    <div class="thumb">
                                        <div class="meta"><span class="tag">Green Releaf </span><span
                                                class="tag">Cannabis</span><span class="tag">WEB/APP</span></div>
                                        <a href="<?php echo home_url('/greenreleaf/'); ?>" target="_blank">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/new/CodesClue Webapp-greenreleafdispensary.png"
                                                class="img-fluid" alt="image" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="work-box-7">
                                    <div class="thumb">
                                        <div class="meta"><span class="tag">Therapix</span><span class="tag">Health and
                                                care</span><span class="tag">WEB/APP</span></div>
                                        <a href="<?php echo home_url('/therapix/'); ?>" target="_blank">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/new/CodesClue Webapp-therapix-.png"
                                                class="img-fluid" alt="image" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="work-box-7">
                                    <div class="thumb">
                                        <div class="meta"><span class="tag">Track N' Take</span><span
                                                class="tag">E-Commerce</span><span class="tag">Mobile
                                                App</span>
                                        </div>
                                        <a href="<?php echo home_url('/trackntake/'); ?>" target="_blank">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/new/CodesClue Webappp-TrackNTake.png"
                                                class="img-fluid opecity" alt="image" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="work-box-7">
                                    <div class="thumb">
                                        <div class="meta"><span class="tag">The Fit Level</span><span class="tag">Gym
                                                and Fitness</span><span class="tag">WEB/APP</span></div>
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/new/codesclue_TFL.png" class="img-fluid"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="work-box-7">
                                    <div class="thumb">
                                        <div class="meta"><span class="tag">My Farm </span><span
                                                class="tag">E-Commerce</span><span class="tag">WEB/APP</span></div>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/new/codesclue_MF.png" class="img-fluid"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="work-box-7">
                                    <div class="thumb">
                                        <div class="meta"><span class="tag">Arcelor Mittal</span><span
                                                class="tag">Manufacturer</span><span class="tag">WEB/APP</span></div>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/new/codesclue_AM.png" class="img-fluid"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="work-box-7">
                                    <div class="thumb">
                                        <div class="meta"><span class="tag">Mr. Bolat</span><span class="tag">Food
                                                Delivery</span><span class="tag">Mobile
                                                App</span>
                                        </div>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/new/codesclue_MB.png" class="img-fluid opecity"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="work-box-7">
                                    <div class="thumb">
                                        <div class="meta"><span class="tag">Aazer</span><span
                                                class="tag">Advertising</span><span class="tag">Mobile
                                                App</span>
                                        </div>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/new/codesclue_AZ.png" class="img-fluid opecity"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="work-box-7">
                                    <div class="thumb">
                                        <div class="meta"><span class="tag">Snakz </span><span
                                                class="tag">E-Commerce</span><span class="tag">Mobile
                                                App</span>
                                        </div>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/new/CodesClue Webapp-NEXTLIFEBOOK (2).png"
                                                class="img-fluid opecity"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="work-box-7">
                                    <div class="thumb">
                                        <div class="meta"><span class="tag">Next Life Book </span><span
                                                class="tag">Asset Management</span><span class="tag">Mobile App</span>
                                        </div>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/new/CodesClue WebApp-nextlifebook.png"
                                                class="img-fluid opecity"/>
                                    </div>
                                </div>
                            </div>
                             <div class="col-md-6">
                                <div class="work-box-7">
                                    <div class="thumb">
                                        <div class="meta"><span class="tag">Ride Reach</span><span class="tag">van advertising</span><span class="tag">Website</span></div>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio-img/codesclue-ridereach.png"
                                                class="img-fluid"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="tab-pane fade" id="mobile" role="tabpanel" aria-labelledby="mobile-tab">
                        <div class="row g-4">

                            <div class="col-md-6">
                                <div class="work-box-7">
                                    <div class="thumb">
                                        <div class="meta"><span class="tag">Green Releaf </span><span
                                                class="tag">Cannabis</span><span class="tag">Mobile
                                                App</span></div>
                                        <a href="<?php echo home_url('/greenreleaf/'); ?>" target="_blank">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/new/CodesClue GreenReleaf.png"
                                                class="img-fluid opecity" alt="image" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="work-box-7">
                                    <div class="thumb">
                                        <div class="meta"><span class="tag">Therapix</span><span class="tag">Health and
                                                care</span><span class="tag">Mobile
                                                App</span>
                                        </div>
                                        <a href="<?php echo home_url('/therapix/'); ?>" target="_blank">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/new/CodesClue therapix.png"
                                                class="img-fluid opecity" alt="image" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="work-box-7">
                                    <div class="thumb">
                                        <div class="meta"><span class="tag">Track N' Take</span><span
                                                class="tag">E-Commerce</span><span class="tag">Mobile
                                                App</span>
                                        </div>
                                        <a href="<?php echo home_url('/trackntake/'); ?>" target="_blank">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/new/codesclue_TT.png" class="img-fluid opecity"
                                                alt="image" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="work-box-7">
                                    <div class="thumb">
                                        <div class="meta"><span class="tag">My Farm </span><span
                                                class="tag">E-Commerce</span><span class="tag">WEB/APP</span></div>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/new/codesclue_MF.png" class="img-fluid"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="work-box-7">
                                    <div class="thumb">
                                        <div class="meta"><span class="tag">Arcelor Mittal</span><span
                                                class="tag">Manufacturer</span><span class="tag">WEB/APP</span></div>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/new/codesclue_AM.png" class="img-fluid"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt-project">
                                <div class="work-box-7">
                                    <div class="thumb">
                                        <div class="meta"><span class="tag">The Fit Level</span><span class="tag">Gym
                                                and Fitness</span><span class="tag">WEB/APP</span></div>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/new/codesclue_TFL.png" class="img-fluid"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="work-box-7">
                                    <div class="thumb">
                                        <div class="meta"><span class="tag">Mr. Bolat</span><span class="tag">Food
                                                Delivery</span><span class="tag">Mobile
                                                App</span>
                                        </div>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/new/codesclue_MB.png" class="img-fluid opecity"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="work-box-7">
                                    <div class="thumb">
                                        <div class="meta"><span class="tag">Aazer</span><span
                                                class="tag">Advertising</span><span class="tag">Mobile
                                                App</span>
                                        </div>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/new/codesclue_AZ.png" class="img-fluid opecity"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="work-box-7">
                                    <div class="thumb">
                                        <div class="meta"><span class="tag">Snakz </span><span
                                                class="tag">E-Commerce</span><span class="tag">Mobile
                                                App</span>
                                        </div>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/new/codesclue_SN.png" class="img-fluid opecity"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="work-box-7">
                                    <div class="thumb">
                                        <div class="meta"><span class="tag">Next Life Book </span><span
                                                class="tag">Asset Management</span><span class="tag">Mobile App</span>
                                        </div>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/new/codesclue_NLB.png" class="img-fluid opecity"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="tab-pane fade" id="Website" role="tabpanel" aria-labelledby="Website-tab">
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="work-box-7">
                                    <div class="thumb">
                                        <div class="meta"><span class="tag">Green Releaf </span><span
                                                class="tag">Cannabis</span><span class="tag">Website</span></div>
                                        <a href="<?php echo home_url('/greenreleaf/'); ?>" target="_blank">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/new/codesclue-gr-web.png" class="img-fluid"
                                                alt="image" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="work-box-7">
                                    <div class="thumb">
                                        <div class="meta"><span class="tag">Therapix</span><span class="tag">Health and
                                                care</span><span class="tag">Website</span></div>
                                        <a href="<?php echo home_url('/therapix/'); ?>" target="_blank">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/new/CodesClue therapix-web.png" class="img-fluid"
                                                alt="image" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="work-box-7">
                                    <div class="thumb">
                                        <div class="meta"><span class="tag">Track N' Take</span><span
                                                class="tag">E-Commerce</span><span class="tag">Website</span></div>
                                        <a href="<?php echo home_url('/trackntake/'); ?>" target="_blank">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/new/codesclue-trackntake.png" class="img-fluid"
                                                alt="image" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="work-box-7">
                                    <div class="thumb">
                                        <div class="meta"><span class="tag">Snakz</span><span
                                                class="tag">E-Commerce</span><span class="tag">Website</span></div>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/new/CODESCLUE-web-snakz.png" class="img-fluid"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="work-box-7">
                                    <div class="thumb">
                                        <div class="meta"><span class="tag">NEXTLIFEBOOK</span><span class="tag">Asset
                                                Management</span><span class="tag">Website</span></div>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/new/codesclue-web-nextlifebook.png"
                                                class="img-fluid"/>
                                    </div>
                                </div>
                            </div>
                             <div class="col-md-6">
                                <div class="work-box-7">
                                    <div class="thumb">
                                        <div class="meta"><span class="tag">Ride Reach</span><span class="tag">van advertising</span><span class="tag">Website</span></div>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio-img/codesclue-ridereach.png"
                                                class="img-fluid"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="webapp" role="tabpanel" aria-labelledby="webapp-tab">
                        <div class="row g-4">

                            <div class="col-md-6 mt-project">
                                <div class="work-box-7">
                                    <div class="thumb">
                                        <div class="meta"><span class="tag">Green Releaf </span><span
                                                class="tag">Cannabis</span><span class="tag">WEB/APP</span></div>
                                        <a href="<?php echo home_url('/greenreleaf/'); ?>" target="_blank">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/new/CodesClue Webapp-greenreleafdispensary.png"
                                                class="img-fluid" alt="image" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="work-box-7">
                                    <div class="thumb">
                                        <div class="meta"><span class="tag">Therapix</span><span class="tag">Health and
                                                care</span><span class="tag">WEB/APP</span></div>
                                        <a href="<?php echo home_url('/therapix/'); ?>" target="_blank">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/new/CodesClue Webapp-therapix-.png"
                                                class="img-fluid" alt="image" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="work-box-7">
                                    <div class="thumb">
                                        <div class="meta"><span class="tag">Track N' Take</span><span
                                                class="tag">E-Commerce</span><span class="tag">WEB/APP</span></div>
                                        <a href="<?php echo home_url('/trackntake/'); ?>" target="_blank">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/new/CodesClue Webappp-TrackNTake.png"
                                                class="img-fluid" alt="image" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="work-box-7">
                                    <div class="thumb">
                                        <div class="meta"><span class="tag">Snakz</span><span
                                                class="tag">E-Commerce</span><span class="tag">WEB/APP</span></div>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/new/CodesClue Webapp-NEXTLIFEBOOK (2).png"
                                                class="img-fluid"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="work-box-7">
                                    <div class="thumb">
                                        <div class="meta"><span class="tag">NEXTLIFEBOOK</span><span class="tag">Asset
                                                Management</span><span class="tag">WEB/APP</span></div>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/new/CodesClue WebApp-nextlifebook.png"
                                                class="img-fluid"/>
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