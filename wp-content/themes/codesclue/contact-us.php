<?php
/**
 * Template Name: Contact Us Page
 *
 * @package CodesClue
 */
get_header(); ?>

    <main>
        <section class="main-hero-section section-40 bg-blue mb-0 pb-md-5 pb-4 h-auto">
            <div class="container">
                <div class="row mx-0 px-0 align-items-center">
                    <div class="col-xl-8 px-xl-2 px-0 mx-auto">
                        <div class="main-descriptions text-center">
                            <h1 class="h1-font-style text-white">Contact Us</h1>
                            <p class="hero_description text-white">Our team is here to help you every step of the way.
                                Whether it's a project inquiry, support request, or partnership opportunity,
                                we'd love to hear from you.
                                Reach out today, and let's start the conversation!</p>
                            <a class="btn btn-secondary reverse-cus mt-md-4 mt-2 d-inline-block w-auto" href="<?php echo home_url('/our-portfolio/'); ?>">View Projects</a>
                        </div>
                    </div>
                    <!-- <div class="col-xl-6 px-xl-2 px-0">
                        <div class="main-hero-img z-1 text-center d-flex justify-content-center">
                            <img loading="lazy" alt="contact-banner" class="main-hero-right-img h-400px py-lg-0 py-1"
                                src="<?php echo get_template_directory_uri(); ?>/assets/images/codesclue_contact-banner.webp" />
                        </div>
                    </div> -->
                </div>
            </div>
        </section>

        <!-- Our trusted Client -->
        <section class="section-40 bg-linear-white">
            <div class="container">
                <h2 class="section-title" data-aos="fade-down">Our Trusted Client</h2>
                <p class="col-xl-9 col-md-11 col-12 section-description" data-aos="fade-down">We collaborate
                    with startups, enterprises, and everything in between. Here are some of the amazing clients who have
                    chosen to grow with us.</p>
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

        <!-- Schedule a Call -->
        <section class="section-40 blue-bg " id="scheduleMeeting">
            <div class="container">
                <h2 class="section-title text-white mb-lg-0 mb-4">Let's Schedule a meeting</h2>
                <!-- Calendly link widget begin -->
<div class="calendly-inline-widget" 
     data-url="https://calendly.com/ketan-codesclue/30min" 
     style="min-width:320px; height:700px;">
</div>
<script type="text/javascript" 
        src="https://assets.calendly.com/assets/external/widget.js" async>
</script>
<!-- Calendly link widget end -->

            </div>
        </section>

        <!-- Contact details -->
        <section class="whychoose-section section-40">
            <div class="container">
                <div class="whychoose-list">
                    <div class="row mx-0 px-0 contact-box">
                        <div class="col-12 col-md-12 col-lg-4 px-md-2 px-0 py-lg-0 py-2">
                            <a href="https://wa.me/+919998977764" target="_blank" class="whychoose-item">
                                <div
                                    class="whychoose-inner-item contact-card bg-white box-shadow-md d-flex gap-md-3 flex-column justify-content-xl-between justify-content-centerp-xl-5 p-lg-4 p-3">
                                    <svg height="100%" width="100%" xmlns="http://www.w3.org/2000/svg">
                                        <rect rx="8" ry="8" class="line" height="100%" width="100%"
                                            stroke-linejoin="round" />
                                    </svg>
                                    <div class="whychoose-icon d-flex justify-content-center align-items-center">
                                        <i class="fa-brands fa-whatsapp"></i>
                                    </div>
                                    <div class="whychoose-info d-flex flex-column justify-content-center text-center">
                                        <h2 class="content-sub-title text-center my-3">Chat with us</h2>
                                        <p class="content-desc text-center">
                                            We have live Social Experts ready to help you 24/7. Get instant support
                                            whenever you need it.
                                        </p>
                                        <strong class="mt-lg-4 mt-md-3 mt-2 text-primary">+91 99989 77764</strong>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-md-12 col-lg-4 px-md-2 px-0 py-lg-0 py-2">
                            <a target="_blank" href="mailto:business@codesclue.com" class="whychoose-item">
                                <div
                                    class="whychoose-inner-item contact-card bg-white box-shadow-md d-flex gap-md-3 flex-column justify-content-xl-between justify-content-centerp-xl-5 p-lg-4 p-3">
                                    <svg height="100%" width="100%" xmlns="http://www.w3.org/2000/svg">
                                        <rect rx="8" ry="8" class="line" height="100%" width="100%"
                                            stroke-linejoin="round" />
                                    </svg>
                                    <div class="whychoose-icon d-flex justify-content-center align-items-center">
                                        <i class="fa-solid fa-envelope"></i>
                                    </div>
                                    <div class="whychoose-info d-flex flex-column justify-content-center text-center">
                                        <h2 class="content-sub-title text-center my-3">Email Us</h2>
                                        <p class="content-desc text-center">
                                            Simple drop us an email at <strong>business@codesclue.com</strong> and you
                                            will receive
                                            a reply within 24 hours.
                                        </p>
                                        <strong class="mt-lg-4 mt-md-3 mt-2 text-primary">business@codesclue.com</strong>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-md-12 col-lg-4 px-md-2 px-0 py-lg-0 py-2">
                            <a target="_blank" href="tel:+919998977764" class="whychoose-item">
                                <div
                                    class="whychoose-inner-item contact-card bg-white box-shadow-md d-flex gap-md-3 flex-column justify-content-xl-between justify-content-centerp-xl-5 p-lg-4 p-3">
                                    <svg height="100%" width="100%" xmlns="http://www.w3.org/2000/svg">
                                        <rect rx="8" ry="8" class="line" height="100%" width="100%"
                                            stroke-linejoin="round" />
                                    </svg>
                                    <div class="whychoose-icon d-flex justify-content-center align-items-center">
                                        <i class="fa-solid fa-phone-volume icon"></i>
                                    </div>
                                    <div class="whychoose-info d-flex flex-column justify-content-center text-center">
                                        <h2 class="content-sub-title text-center my-3">Give us a call</h2>
                                        <p class="content-desc text-center">Need assistance? Our experts are available
                                            24/7! Call us anytime for expert support whenever you need it.
                                        </p>
                                        <strong class="mt-lg-4 mt-md-3 mt-2 text-primary">+91 99989 77764</strong>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact us Section -->
        <section class="contactus-section section-40" id="contactMainForm">
            <div class="container box-shadow-md col-xl-auto col-lg-10 col-11 border-radius px-4 section-40 mb-lg-4 mb-lg-2 mb-0"
                id="contactFormSection">
                <h2 class="section-title">CONTACT US</h2>
                <div class="row mx-0 px-0 pt-2 gap-md-0 gap-4">
                    <!-- Left Column -->
                    <div class="col-xl-6 px-0">
                        <form id="contactForm">
                            <div class="form-floating mb-3">
                                <input type="text" id="name" class="form-control" placeholder="First Name Last Name"
                                    required>
                                <label for="name">Name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" id="email" class="form-control" placeholder="Email Address"
                                    required>
                                <label for="email">Email Address</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="number" id="phone" class="form-control" name="phone" required minlength="8"
                                    maxlength="12" placeholder="Phone No.">
                                <label for="phone">Phone No</label>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea id="message" class="form-control" placeholder="Your Message"
                                    style="height: 170px;" required></textarea>
                                <label for="message">Your Message</label>
                            </div>

                            <div class="checkform servicesList" itemscope="">
                                <p class="content-sub-title fw-500 text-left mb-0">Services:</p>
                                <div class="d-flex gap-2 flex-wrap mt-3 mb-4">
                                    <div class="formServiceItem" data-service="Hire Developer(s)">
                                        <input type="checkbox" name="services[]" id="hiredeveloper"
                                            value="Hire Developer(s)">
                                        <label for="hiredeveloper" itemprop="name">Hire Developer(s)</label>
                                    </div>
                                    <div class="formServiceItem" data-service="Web Development">
                                        <input type="checkbox" name="services[]" id="webdevelopment"
                                            value="Web Development">
                                        <label for="webdevelopment" itemprop="name">Web Development</label>
                                    </div>
                                    <div class="formServiceItem" data-service="Mobile App Development">
                                        <input type="checkbox" name="services[]" id="mobileappdevelopment"
                                            value="Mobile App Development">
                                        <label for="mobileappdevelopment" itemprop="name">Mobile App Development</label>
                                    </div>
                                    <div class="formServiceItem" data-service="UI/UX Design">
                                        <input type="checkbox" name="services[]" id="uiuxservices" value="UI/UX Design">
                                        <label for="uiuxservices" itemprop="name">UI/UX Design</label>
                                    </div>
                                    <div class="formServiceItem" data-service="Maintenance & Support">
                                        <input type="checkbox" name="services[]" id="maintenancesupport"
                                            value="Maintenance & Support">
                                        <label for="maintenancesupport" itemprop="name">Maintenance & Support</label>
                                    </div>
                                    <div class="formServiceItem" data-service="Custom Software Development">
                                        <input type="checkbox" name="services[]" id="customsoftwaredevelopment"
                                            value="Custom Software Development">
                                        <label for="customsoftwaredevelopment" itemprop="name">Custom Software
                                            Development</label>
                                    </div>
                                    <div class="formServiceItem" data-service="QA Service">
                                        <input type="checkbox" name="services[]" id="qaservice" value="QA Service">
                                        <label for="qaservice" itemprop="name">QA Service</label>
                                    </div>
                                    <div class="formServiceItem" data-service="Digital Marketing">
                                        <input type="checkbox" name="services[]" id="digitalmarketing"
                                            value="Digital Marketing">
                                        <label for="digitalmarketing" itemprop="name">Digital Marketing</label>
                                    </div>
                                    <div class="formServiceItem" data-service="Code Audit">
                                        <input type="checkbox" name="services[]" id="codeaudit" value="Code Audit">
                                        <label for="codeaudit" itemprop="name">Code Audit</label>
                                    </div>
                                    <div class="formServiceItem" data-service="Other Services">
                                        <input type="checkbox" name="services[]" id="otherservices"
                                            value="Other Services">
                                        <label for="otherservices" itemprop="name">Other Services</label>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary w-100">Send</button>
                        </form>

                        <div aria-live="polite" aria-atomic="true" class="position-fixed top-0 end-0 p-3"
                            style="z-index: 1050">
                            <div id="toastContainer" class="toast align-items-center text-white bg-success border-0"
                                role="alert" aria-live="assertive" aria-atomic="true">
                                <div class="d-flex">
                                    <div class="toast-body" id="toastMessage">Your message here.</div>
                                    <button type="button" class="btn-close btn-close-white me-2 m-auto"
                                        data-bs-dismiss="toast" aria-label="Close"></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Right Column -->
                    <div class="col-xl-6 px-xl-3 px-lg-2 px-0 pt-lg-0 pt-xl-0 pt-3">
                        <div class="contact-info d-flex flex-column gap-3">
                            <p class="content-sub-title fw-500 text-left mb-0"><strong>Address</strong></p>
                            <p class="content-desc lh-base">915-STC (Shivam
                                Trade Center),<br />
                                Near Bopal-Ambli Cross Road,<br />
                                Near Vakil Saheb Bridge,<br />
                                Ahmedabad, Gujarat, 380058</p>
                            <!-- <div class="d-flex gap-4 flex-wrap">
                                <a href="tel:+919998977764" class="contact__us d-flex gap-4 align-items-center">
                                    <i class="fa-solid fa-phone-volume icon"></i>
                                    <p class="list__text mb-0">(+91) 99989 77764
                                    </p>
                                </a>
                                <a target="_blank" href="mailto:business@codesclue.com"
                                    class="contact__us d-flex gap-4 align-items-center">
                                    <i class="fa-solid fa-envelope icon"></i>
                                    <p class="list__text mb-0">business@codesclue.com</p>
                                </a>
                            </div> -->
                            <div class="follow__us d-flex gap-3 align-items-center">
                                <a target="_blank" href="https://www.linkedin.com/company/codesclue/"
                                    class="social__link">
                                    <i class="fa-brands fa-linkedin font-20"></i>
                                </a>
                                <a target="_blank" href="https://www.instagram.com/codesclue/" class="social__link">
                                    <i class="fa-brands fa-instagram font-20"></i>
                                </a>
                                <a target="_blank" href="https://www.google.com/search?q=codesclue"
                                    class="social__link">
                                    <i class="fa-brands fa-google font-20"></i>
                                </a>
                            </div>
                        </div>
                        <div class="mapouter">
                            <div class="gmap_canvas">
                                <iframe class="gmap_iframe" style="height: 420px;" frameborder="0" scrolling="no"
                                    marginheight="0" marginwidth="0" sandbox="allow-scripts allow-same-origin"
                                    src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=codesclue&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



    </main>

<?php get_footer(); ?> 