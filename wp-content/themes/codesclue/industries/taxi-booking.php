<?php
/**
 * Template Name: Taxi Booking Page
 *
 * @package CodesClue
 */
get_header(); ?>

    <main>
        <section class="taxi-booking-hero-bg">
            <div class="container">
               <div class="row d-flex align-items-center">
                   <div class="col-lg-7">
                       <p class="tb-dec">
                          Taxi Booking Service
                       </p>
                       <h1 class="hero-tb-h1 tb-mt-16">On Demand Taxi Booking App</h1>
                       <p class="hero-tb-p tb-mt-16">Compliment your business by acquiring the on-demand taxi booking app with power-packed elements and the latest features, leveraging opportunities for business expansion</p>
                       <div class="tb-mt-16">
                            <a href="<?php echo home_url('/contact-us/'); ?>" class="btn tb-btn-custom">LET'S CONNECT →</a>
                        </div>
                   </div>
                   <div class="col-lg-5">
                       <img src="<?php echo get_template_directory_uri(); ?>/assets/images/taxi-booking/taxi-app-mockup.png" alt="blog-img" class="img-fluid">
                   </div>
               </div>
            </div>
        </section>
        <section>
            <div class="taxi-banner">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/taxi-booking/tb-banner.png" alt="blog-img" class="img-fluid">
            </div>
        </section>

        <section class="tb-mt-40">
            <div class="container">
                <h2 class="tb-section-h2 text-center">What is an On-demand Taxi Booking App? Why Should You Adopt the Platform?</h2>
                <p class="tb-mt-16 tb-dec text-center">Mobile apps are supporting the business demands with an excellent tech stack implementation today. Taxi-hailing businesses are taking the braces from the digital platforms extending their boundaries of business without much hassle.An on-demand taxi booking app is a platform providing online services to its users and ride-hailing companies. Customers can book rides through their smartphones, drivers can get the rides requests from an app or panel, and taxi managing niches can operate the business tasks online.</p>
                <div class="row">
                    <div class="col-lg-6 tb-mt-16 d-flex align-items-stretch">
                        <div>
                            <div>
                                    <h3 class="inner-tb-heading">1. Growing Market Demand</h3>
                                    <P class="tb-mt-16 tb-dec">More people prefer convenient, fast, and affordable travel options. On-demand ride services are rapidly replacing traditional taxis because they:</P>
                                    <div class="d-flex tb-mt-16">
                                        <i class="fa-regular fa-circle-check font-20"></i>
                                        <p class="b-dec ms-2">Are easier to book</p>
                                    </div>
                                    <div class="d-flex tb-mt-16">
                                        <i class="fa-regular fa-circle-check font-20"></i>
                                        <p class="b-dec ms-2">Offer transparent pricing</p>
                                    </div>
                                    <div class="d-flex tb-mt-16">
                                        <i class="fa-regular fa-circle-check font-20"></i>
                                        <p class="b-dec ms-2">Provide real-time ride tracking</p>
                                    </div>
                                    <div class="tb-border tb-mt-16"></div>
                            </div>
                            <div class="tb-mt-16">
                                    <h3 class="inner-tb-heading">2. Boost Revenue & Scalability</h3>
                                    <P class="tb-mt-16 tb-dec">The platform can generate income through:</P>
                                    <div class="d-flex tb-mt-16">
                                        <i class="fa-regular fa-circle-check font-20"></i>
                                        <p class="b-dec ms-2">Ride commissions</p>
                                    </div>
                                    <div class="d-flex tb-mt-16">
                                        <i class="fa-regular fa-circle-check font-20"></i>
                                        <p class="b-dec ms-2">Surge pricing</p>
                                    </div>
                                    <div class="d-flex tb-mt-16">
                                        <i class="fa-regular fa-circle-check font-20"></i>
                                        <p class="b-dec ms-2">Subscriptions for drivers</p>
                                    </div>
                                    <div class="d-flex tb-mt-16">
                                        <i class="fa-regular fa-circle-check font-20"></i>
                                        <p class="b-dec ms-2">In-app ads or partnerships</p>
                                    </div>
                                    <div class="tb-border tb-mt-16"></div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6 tb-mt-16 d-flex align-items-stretch">
                        <div class="bg-green-tb">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/taxi-booking/inner-img.png" alt="blog-img" class="img-fluid mx-auto">
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

<?php get_footer(); ?>