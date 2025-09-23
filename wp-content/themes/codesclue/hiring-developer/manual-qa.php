<?php
/**
 * Template Name: Hire Manual QA Page
 *
 * @package CodesClue
 */
get_header(); ?>

  
    <main>
        <!-- Hero section -->
        <section class="main-hero-section qa-bg d-flex align-items-center py-cus" id="heroSection">
            <div class="container">
                <div class="row align-items-center g-4">

                    <div class="col-xl-7 col-lg-7 col-md-12 text-lg-start">

                        <h1 class="h1-font-style font-48 mb-2 text-white text-left">Hire Manual QA
                        </h1>
                        <p class="hero_description fw-500 text-white mb-0 mt-0 text-left">Detect usability and
                            functionality
                            issues before they impact your users! Our expert Manual QA testers conduct thorough,
                            hands-on testing to identify bugs, performance bottlenecks, and security vulnerabilities
                            across your application. With meticulous attention to detail, we assess every feature,
                            ensuring your software delivers a flawless, intuitive, and high-performing user experience.
                        </p>
                        <div class="row mt-5-cus-services  gx-2 gy-2">
                            <div class="col-lg-4 col-md-4 col-sm-12 ">
                                <div class="feature-box">
                                    <i class="fa-solid fa-sack-dollar"></i>
                                    <p class="content-desc">No Charges for Project Manager</p>
                                </div>

                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <div class="feature-box"><i class="fa-solid fa-users"></i>
                                    <p class="content-desc">Pre-vetted Inhouse Sr. Developer(s)</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <div class="feature-box"><i class="fa-solid fa-shield-halved"></i>
                                    <p class="content-desc">100% Risk Free Trial Service</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5 col-md-12">
                        <div class="bg-custom bg-opacity-75 p-4 rounded">

                            <h3 class="content-title mb-3 text-white">Get Free Consultation</h2>
                                <form id="manualQAhiringForm">
                                    <div class="form-group mb-2 mt-2">
                                        <label for="name" class="text-light">Full Name</label>
                                        <input type="text" class="form-control" id="name" placeholder="Full Name"
                                            required />
                                    </div>
                                    <div class="form-group mb-2 mt-2">
                                        <label for="email" class="text-light">Email</label>
                                        <input type="email" class="form-control" id="email" placeholder="Email Address"
                                            required />
                                    </div>
                                    <div class="form-group mb-2 mt-2">
                                        <label for="phone" class="text-light">Phone No</label>
                                        <input type="number" id="phone" class="form-control" name="phone" required
                                            minlength="8" maxlength="12" placeholder="Phone No." />
                                    </div>

                                    <div class="form-group mb-3 hiring-checks">
                                        <label for="exampleInput1" class="text-light">Choose one hiring model</label>
                                        <div class="d-flex gap-2 flex-wrap">
                                            <div class="bagdehire" data-service="Full Time">
                                                <input type="checkbox" name="job-type[]" id="full" value="Full time">
                                                <label for="full" itemprop="name">Full time</label>
                                            </div>
                                            <div class="bagdehire" data-service="Part Time">
                                                <input type="checkbox" name="job-type[]" id="part" value="Part time">
                                                <label for="part" itemprop="name">Part time</label>
                                            </div>
                                            <div class="bagdehire" data-service="Hourly Hire">
                                                <input type="checkbox" name="job-type[]" id="hourly"
                                                    value="Hourly hire">
                                                <label for="hourly" itemprop="name">Hourly hire</label>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-secondary border-radius w-100 reverse col-12"
                                        type="submit">Hire
                                        Developer</button>
                                </form>
                                <div class="position-fixed top-0 end-0 p-3" style="z-index: 1050;">
                                    <div id="toastContainer"
                                        class="toast align-items-center text-white bg-success border-0" role="alert"
                                        aria-live="assertive" aria-atomic="true">
                                        <div class="d-flex">
                                            <div class="toast-body" id="toastMessage">Your message here.</div>
                                            <button type="button" class="btn-close btn-close-white me-2 m-auto"
                                                data-bs-dismiss="toast" aria-label="Close"></button>
                                        </div>
                                    </div>
                                </div>
                                </aritcle>
                        </div>
                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/codesclue_white-plane.webp" alt="white-plane"
                            class="hero-bg-img" />
                    </div>
                </div>
            </div>
            </div>
        </section>

        <section class="tech-slack__section section-40">
            <div class="container">
                <div class="row mx-0 px-0">
                    <h2 class="section-sub-title mb-lg-4 mb-3">Our Dedicated Developer Hiring Models</h2>
                </div>
                <div class="row mx-0 px-0 gx-lg-3 gx-0 gy-lg-0 gy-3 justify-content-between">
                    <div class="col-lg-6 col-12">
                        <article class="time-card card-1 my-0 w-100 mb-lg-0 mb-3">
                            <div class="d-flex gap-3 card-title align-items-center justify-content-center">
                                <i class="fa-solid fa-clock-rotate-left font-24"></i>
                                <h3 class="content-sub-title mb-0 text-left">
                                    Full Time Monthly Hire
                                </h3>
                            </div>
                            <div class="card-body pt-lg-3 pt-2 px-lg-3 px-2 pb-0">
                                <div class="d-flex align-items-center pb-1 border-bottom-1 mb-2">
                                    <strong class="content-desc bold-text">Hours:</strong>
                                    <p class="content-desc ms-2">160 hours / 4 weeks</p>
                                </div>
                                <div class="d-flex align-items-center pb-1 border-bottom-1 mb-2">
                                    <strong class="content-desc bold-text">Minimum Duration:</strong>
                                    <p class="content-desc ms-2">1 Month</p>
                                </div>
                                <div class="d-flex align-items-center pb-1 border-bottom-1 mb-2">
                                    <strong class="content-desc bold-text">Methodology:</strong>
                                    <p class="content-desc ms-2">Agile/ SCRUM</p>
                                </div>
                                <div class="d-flex align-items-center pb-1">
                                    <strong class="content-desc bold-text">Communication:</strong>
                                    <p class="content-desc ms-2"> eMail, Chat, Phone</p>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-lg-6 col-12">
                        <article class="time-card card-2 my-0 w-100 mb-lg-0 mb-3">
                            <div class="d-flex gap-3 card-title align-items-center justify-content-center">
                                <i class="fa-regular fa-clock font-24"></i>
                                <h3 class="content-sub-title mb-0 text-left">
                                    Hourly Hire
                                </h3>
                            </div>
                            <div class="card-body pt-lg-3 pt-2 px-lg-3 px-2 pb-0">
                                <div class="d-flex align-items-center pb-1 border-bottom-1 mb-2">
                                    <strong class="content-desc bold-text">Hours:</strong>
                                    <p class="content-desc ms-2">Flexible</p>
                                </div>
                                <div class="d-flex align-items-center pb-1 border-bottom-1 mb-2">
                                    <strong class="content-desc bold-text">Minimum Duration:</strong>
                                    <p class="content-desc ms-2">1 Month</p>
                                </div>
                                <div class="d-flex align-items-center pb-1 border-bottom-1 mb-2">
                                    <strong class="content-desc bold-text">Methodology:</strong>
                                    <p class="content-desc ms-2">Agile/ SCRUM</p>
                                </div>
                                <div class="d-flex align-items-center pb-1">
                                    <strong class="content-desc bold-text">Communication:</strong>
                                    <p class="content-desc ms-2"> eMail, Chat, Phone</p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="row mx-0 px-0 mt-3">
                    <div class="col-12 px-lg-2 px-0">
                        <article class="time-card card-3 my-0 w-100 mb-lg-0 mb-3">
                            <div class="d-flex gap-3 card-title align-items-center">
                                <h3 class="content-sub-title mb-0 text-left">
                                    Benifits
                                </h3>
                            </div>
                            <div class="card-body px-lg-3 px-2 d-grid team-grid-3 flex-wrap">
                                <div class="d-flex align-items-center gap-3 pb-1 mb-sm-2 mb-0">
                                    <i class="fa-regular fa-handshake"></i>
                                    <p class="small-service-text">Zero Charges for Project Management</p>
                                </div>
                                <div class="d-flex align-items-center gap-3 pb-1 mb-sm-2 mb-0">
                                    <i class="fa-regular fa-handshake"></i>
                                    <p class="small-service-text">Flexible Engagement Models</p>
                                </div>
                                <div class="d-flex align-items-center gap-3 pb-1 mb-sm-2 mb-0">
                                    <i class="fa-regular fa-handshake"></i>
                                    <p class="small-service-text">Rapid Onboarding Process</p>
                                </div>
                                <div class="d-flex align-items-center gap-3 pb-1 mb-sm-2 mb-0">
                                    <i class="fa-regular fa-handshake"></i>
                                    <p class="small-service-text">Direct & Transparent Communication</p>
                                </div>
                                <div class="d-flex align-items-center gap-3 pb-1 mb-sm-2 mb-0">
                                    <i class="fa-regular fa-handshake"></i>
                                    <p class="small-service-text">Daily Progress Updates & Code Releases</p>
                                </div>
                                <div class="d-flex align-items-center gap-3 pb-1 mb-sm-2 mb-0">
                                    <i class="fa-regular fa-handshake"></i>
                                    <p class="small-service-text">Advanced Project Management Tools</p>
                                </div>
                                <div class="d-flex align-items-center gap-3 pb-1 mb-sm-2 mb-0">
                                    <i class="fa-regular fa-handshake"></i>
                                    <p class="small-service-text">Agile & SCRUM-Based Development</p>
                                </div>
                                <div class="d-flex align-items-center gap-3 pb-1 mb-sm-2 mb-0">
                                    <i class="fa-regular fa-handshake"></i>
                                    <p class="small-service-text">Time Zone Aligned Collaboration</p>
                                </div>
                                <div class="d-flex align-items-center gap-3 pb-1 mb-sm-2 mb-0">
                                    <i class="fa-regular fa-handshake"></i>
                                    <p class="small-service-text">Robust Version Control & Code Security</p>
                                </div>
                                <div class="d-flex align-items-center gap-3 pb-1 mb-sm-2 mb-0">
                                    <i class="fa-regular fa-handshake"></i>
                                    <p class="small-service-text">Effortless Team Scaling</p>
                                </div>
                                <div class="d-flex align-items-center gap-3 pb-1 mb-sm-2 mb-0">
                                    <i class="fa-regular fa-handshake"></i>
                                    <p class="small-service-text">Exclusive Developer(s) Allocation</p>
                                </div>
                                <div class="d-flex align-items-center gap-3 pb-1 mb-sm-2 mb-0">
                                    <i class="fa-regular fa-handshake"></i>
                                    <p class="small-service-text">Complete Code Ownership & IP Protection</p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>

    

        <!-- Hire Section -->
        <section class="hire__section section-40">
            <div class="container">
                <div class="row mx-0 px-0">
                    <div class="col-lg-7 col-12 mb-xl-0 mb-4 pe-lg-4 px-0">
                        <div class="steps-container p-sm-5 p-2 bg-lightpink">
                            <div class="step ps-5 border-radius" id="step1">
                                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/fi-rr-share.svg" alt="share.webp"
                                    height="30px" />
                                <h3 class="content-sub-title ps-sm-5 ps-4 text-left mb-3">1. Share Your
                                    Requirements</h3>
                                <p class="gray-text text-left ps-sm-5 ps-4 mb-0">To help us
                                    understand your needs, give us a brief synopsis of your project and the particular
                                    abilities you are searching for.</p>
                            </div>
                            <div class="step ps-5 border-radius" id="step2">
                                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/fi-rr-credit-card.svg" alt="address-card.webp"
                                    height="30px" />
                                <h3 class="content-sub-title ps-sm-5 ps-4 text-left mb-3">2. Identify Suitable
                                    Candidates</h3>
                                <p class="gray-text text-left ps-sm-5 ps-4 mb-0">We will select
                                    developers from our talent pool based on the need of the project and relevant
                                    experience level.</p>
                            </div>
                            <div class="step ps-5 border-radius" id="step3">
                                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/fi-rr-user-time.svg" alt="user.webp"
                                    height="30px" />
                                <h3 class="content-sub-title ps-sm-5 ps-4 text-left mb-3">3. Conduct Interviews
                                </h3>
                                <p class="gray-text text-left ps-sm-5 ps-4 mb-0">Choose the
                                    shortlisted candidates to interview so you can evaluate their work styles and skills
                                    and determine which is the best fit for your project.</p>
                            </div>
                            <div class="step ps-5 border-radius" id="step4">
                                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/fi-rr-chart-tree.svg" alt="chart.webp"
                                    height="30px" />
                                <h3 class="content-sub-title ps-sm-5 ps-4 text-left mb-3">4. Onboarding and Start
                                    the Project</h3>
                                <p class="gray-text text-left ps-sm-5 ps-4 mb-0">After you have
                                    selected the best applicant, we will help with the onboarding procedure and provide
                                    support to you remotely.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-12 ps-lg-4 px-0">
                        <h2 class="section-sub-title text-left">Hire Manual QA in Just 4
                            Steps</h2>
                        <p class="conten-desc text-left my-3">Looking to hire a QA
                            for your unique project?
                            Look no further, as CodesClue offers a quick and easy 4-step
                            process to connect you with the best talent that meets your
                            requirements.</p>
                        <div class="tags_step_section mt-4 mb-3">
                            <span class="tag_step">
                                <i class="fa-solid fa-cube font-18"></i> Automation Testing
                            </span>
                            <span class="tag_step">
                                <i class="fa-solid fa-cube font-18"></i> Manual Testing
                            </span>
                            <span class="tag_step">
                                <i class="fa-solid fa-cube font-18"></i> Performance Testing
                            </span>
                            <span class="tag_step">
                                <i class="fa-solid fa-cube font-18"></i> API Testing
                            </span>
                            <span class="tag_step">
                                <i class="fa-solid fa-cube font-18"></i> Usability Testing
                            </span>
                            <span class="tag_step">
                                <i class="fa-solid fa-cube font-18"></i> Regression Testing
                            </span>
                            <span class="tag_step">
                                <i class="fa-solid fa-cube font-18"></i> Load Testing
                            </span>
                        </div>
                        <a href="<?php echo home_url('/hire-manual-qa/'); ?>"
                            class="btn btn-secondary-outliner export_btn d-inline-flex justify-content-between align-items-center px-md-5 px-4 mt-3 py-md-3 py-2 gap-3 bg-black text-white">
                            <i class="fa-solid fa-arrow-up-right-from-square font-24 rotate-90"></i>
                            Hire Developer Now
                        </a>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/codesclue_hiredeveloper.svg" class="d-none" height="300px"
                            alt="hire-developer" loading="lazy" />
                    </div>
                </div>
            </div>
        </section>



        <!-- Our Expertise section -->
        <section class="section-40 pt-0 service__section" id="serviceSection">
            <div class="container">
                <h2 class="section-title text-left pb-2">Our Expertise In Manual QA</h2>
                <div class="d-flex mt-md-4  mb-md-0 my-2 justify-content-lg-start justify-content-center flex-wrap">
                    <div class="col-xl-3 col-lg-4  col-sm-12 col-12 p-md-2 py-2 px-sm-2 px-0">
                        <div class="expertise_tab bg-qa d-flex align-items-center justify-content-between">
                            <h3 class="number-main mb-0 text-center">01</h3>
                            <div
                                class="qa-expertise-bg text-center mb-0 mt-0 d-flex px-3 align-items-center justify-content-center">
                                <span class="content-desc text-center py-2">Functionality and Usability testing</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4  col-sm-12 col-12 p-md-2 py-2 px-sm-2 px-0">
                        <div class="expertise_tab bg-qa d-flex align-items-center justify-content-between">
                            <h3 class="number-main mb-0 text-center">02</h3>
                            <div
                                class="qa-expertise-bg text-center mb-0 mt-0 d-flex px-3 align-items-center justify-content-center">
                                <span class="content-desc text-center py-2">Interface and Compatibility testing</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4  col-sm-12 col-12 p-md-2 py-2 px-sm-2 px-0">
                        <div class="expertise_tab bg-qa d-flex align-items-center justify-content-between">
                            <h3 class="number-main mb-0 text-center">03</h3>
                            <div
                                class="qa-expertise-bg text-center mb-0 mt-0 d-flex px-3 align-items-center justify-content-center">
                                <span class="content-desc text-center py-2">Cross browsers and Cross device
                                    testing</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4  col-sm-12 col-12 p-md-2 py-2 px-sm-2 px-0">
                        <div class="expertise_tab bg-qa d-flex align-items-center justify-content-between">
                            <h3 class="number-main mb-0 text-center">04</h3>
                            <div
                                class="qa-expertise-bg text-center mb-0 mt-0 d-flex px-3 align-items-center justify-content-center">
                                <span class="content-desc text-center py-2">Security Testing</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4  col-sm-12 col-12 p-md-2 py-2 px-sm-2 px-0">
                        <div class="expertise_tab bg-qa d-flex align-items-center justify-content-between">
                            <h3 class="number-main mb-0 text-center">05</h3>
                            <div
                                class="qa-expertise-bg text-center mb-0 mt-0 d-flex px-3 align-items-center justify-content-center">
                                <span class="content-desc text-center py-2">Creating Comprehensive Test Cases</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4  col-sm-12 col-12 p-md-2 py-2 px-sm-2 px-0">
                        <div class="expertise_tab bg-qa d-flex align-items-center justify-content-between">
                            <h3 class="number-main mb-0 text-center">06</h3>
                            <div
                                class="qa-expertise-bg text-center mb-0 mt-0 d-flex px-3 align-items-center justify-content-center">
                                <span class="content-desc text-center py-2">Implementing Unit Testing</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4  col-sm-12 col-12 p-md-2 py-2 px-sm-2 px-0">
                        <div class="expertise_tab bg-qa d-flex align-items-center justify-content-between">
                            <h3 class="number-main mb-0 text-center">07</h3>
                            <div
                                class="qa-expertise-bg text-center mb-0 mt-0 d-flex px-3 align-items-center justify-content-center">
                                <span class="content-desc text-center py-2">Implementing A/B Testing</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4  col-sm-12 col-12 p-md-2 py-2 px-sm-2 px-0">
                        <div class="expertise_tab bg-qa d-flex align-items-center justify-content-between">
                            <h3 class="number-main mb-0 text-center">08</h3>
                            <div
                                class="qa-expertise-bg text-center mb-0 mt-0 d-flex px-3 align-items-center justify-content-center">
                                <span class="content-desc text-center py-2">Regression Testing</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4  col-sm-12 col-12 p-md-2 py-2 px-sm-2 px-0">
                        <div class="expertise_tab bg-qa d-flex align-items-center justify-content-between">
                            <h3 class="number-main mb-0 text-center">09</h3>
                            <div
                                class="qa-expertise-bg text-center mb-0 mt-0 d-flex px-3 align-items-center justify-content-center">
                                <span class="content-desc text-center py-2">Design implementation verification by pixel
                                    perfect
                                    testing</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4  col-sm-12 col-12 p-md-2 py-2 px-sm-2 px-0">
                        <div class="expertise_tab bg-qa d-flex align-items-center justify-content-between">
                            <h2 class="number-main mb-0 text-center">10</h3>
                                <div
                                    class="qa-expertise-bg text-center mb-0 mt-0 d-flex px-3 align-items-center justify-content-center">
                                    <span class="content-desc text-center py-2">iOS and Android Mobile App
                                        Testing</span>
                                </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4  col-sm-12 col-12 p-md-2 py-2 px-sm-2 px-0">
                        <div class="expertise_tab bg-qa d-flex align-items-center justify-content-between">
                            <h2 class="number-main mb-0 text-center">11</h3>
                                <div
                                    class="qa-expertise-bg text-center mb-0 mt-0 d-flex px-3 align-items-center justify-content-center">
                                    <span class="content-desc text-center py-2">Performance Testing</span>
                                </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4  col-sm-12 col-12 p-md-2 py-2 px-sm-2 px-0">
                        <div class="expertise_tab bg-qa d-flex align-items-center justify-content-between">
                            <h2 class="number-main mb-0 text-center">12</h3>
                                <div
                                    class="qa-expertise-bg text-center mb-0 mt-0 d-flex px-3 align-items-center justify-content-center">
                                    <span class="content-desc text-center py-2">Test cases Documentation</span>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Benefit section -->
        <section class="section-40 benefit__section qa-part" id="benefitSection">
            <div class="container">
                <p class="small-service-text mb-3">• Why Hire QA?</p>
                <span class="section-title mb-md-3 mb-2">How Hiring QA Can Benefit
                    Your Business?</span>
                <div class="benefit__card__section section-40 mt-2 gap-md-4 gap-3 pb-0">
                    <div class="benefit__card  p-md-3 p-2 border-radius">
                        <div class="d-flex align-items-center gap-3">
                            <div class="benefit-img">
                                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/codesclue_Combined Shape.webp"
                                    alt="Combined Shape" />
                            </div>
                            <h3 class="content-sub-title mb-0 text-left">Result-Oriented Approach</h3>
                        </div>
                        <p class="content-desc mb-0 mt-md-3 mt-2 text-lg-start ">Quality Assurance is the most important
                            part of the SDLC life cycle. We are never satisfied with building a good product. Our
                            passion is towards taking active steps on making it great. This is where Quality Assurance
                            plays a crucial role.</p>

                    </div>
                    <div class="benefit__card  p-md-3 p-2 border-radius">
                        <div class="d-flex align-items-center gap-3">
                            <div class="benefit-img">
                                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/codesclue_Combined Shape.webp"
                                    alt="Combined Shape" />
                            </div>
                            <h3 class="content-sub-title mb-0 text-left">Communication And Transparency</h3>
                        </div>
                        <p class="content-desc mb-0 mt-md-3 mt-2 text-lg-start ">Our QA team works as integral part of
                            development team ensuring seamless correlation of functional requirements and it's technical
                            implementation, thereby reducing communication overhead among all stakeholders.</p>
                    </div>
                    <div class="benefit__card  p-md-3 p-2 border-radius">
                        <div class="d-flex align-items-center gap-3">
                            <div class="benefit-img">
                                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/codesclue_Combined Shape.webp"
                                    alt="Combined Shape" />
                            </div>
                            <h3 class="content-sub-title mb-0 text-left">Precision-Driven Manual QA</h3>
                        </div>
                        <p class="content-desc mb-0 mt-md-3 mt-2 text-lg-start ">Our skilled manual testing team
                            meticulously evaluates
                            applications in real-world scenarios, ensuring seamless functionality, intuitive user
                            experience, and flawless performance. By focusing on usability, responsiveness, and
                            edge-case scenarios, we guarantee a polished and reliable product before it reaches your
                            users.</p>
                    </div>
                    <div class="benefit__card  p-md-3 p-2 border-radius">
                        <div class="d-flex align-items-center gap-3">
                            <div class="benefit-img">
                                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/codesclue_Combined Shape.webp"
                                    alt="Combined Shape" />
                            </div>
                            <h3 class="content-sub-title mb-0 text-left">End-to-End Engineering</h3>
                        </div>
                        <p class="content-desc mb-0 mt-md-3 mt-2 text-lg-start ">We take turnkey responsibility for the
                            success of a client's web platform, desktop or custom mobile app. Ensuring successful
                            project delivery with end to end software engineering is our forte.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Service Portfolio section -->
        <section class="section tech-stack__section section-40" id="techStackSection">
            <div class="container">
                <div class="content-desc text-dark fst-italic d-flex align-items-center mb-2">
                    <div class="line"></div>
                    Discover Our
                </div>
                <h3 class="section-title mb-4">Service Portfolio</h3>
            </div>
            <div class="container">
                <div class="col-12 mx-auto px-0 d-flex flex-wrap">
                    <div class="col-xl-7 col-12 mb-4 px-xxl-3 px-lg-2">
                        <div class="card">
                            <h3 class="content-title mb-3">Mobile</h3>
                            <ul class="grid-3">
                                <a href="<?php echo home_url('/android/'); ?>">
                                    <li class="font-18">
                                        <img loading="lazy"
                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_android.svg"
                                            class="black-logo" width="18px" height="18px" alt="android-logo" /><img
                                            loading="lazy"
                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/header/blue_icon/codesclue_blue_android.svg"
                                            class="blue-logo" width="18px" height="18px"
                                            alt="android-blue-logo" />Android
                                    </li>
                                </a>
                                <a href="<?php echo home_url('/react-native/'); ?>">
                                    <li class="font-18"><i class="card-icon fab fa-react"></i>React
                                        Native</li>
                                </a>
                                <a href="<?php echo home_url('/ios/'); ?>">
                                    <li class="font-18">
                                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_ios.svg"
                                            class="black-logo" width="18px" height="18px" alt="ios-logo" /><img
                                            loading="lazy"
                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/header/blue_icon/codesclue_blue_ios.svg"
                                            class="blue-logo" width="18px" height="18px" alt="ios-blue-logo" />iOS
                                    </li>
                                </a>
                                <a href="<?php echo home_url('/flutter/'); ?>">
                                    <li class="font-18">
                                        <img loading="lazy"
                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_flutter.svg"
                                            class="black-logo" width="18px" height="18px" alt="flutter-logo" /><img
                                            loading="lazy"
                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/header/blue_icon/codesclue_blue_flutter.svg"
                                            class="blue-logo" width="18px" height="18px"
                                            alt="flutter-blue-logo" />Flutter
                                    </li>
                                </a>
                                <a href="<?php echo home_url('/pwa/'); ?>">
                                    <li class="font-18"><img loading="lazy"
                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_pwa.svg"
                                            class="black-logo" alt="pwa-logo" width="24px" height="24px" /><img
                                            loading="lazy"
                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/header/blue_icon/codesclue_blue_pwa.svg"
                                            class="blue-logo" alt="pwa-logo" width="24px" height="24px" />PWA
                                    </li>
                                </a>
                                <a href="<?php echo home_url('/kotlin/'); ?>">
                                    <li class="font-18"><img loading="lazy"
                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_kotlin.svg"
                                            class="black-logo" width="18px" height="18px" alt="kotline-logo" /><img
                                            loading="lazy"
                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/header/blue_icon/codesclue_blue_kotlin.svg"
                                            class="blue-logo" width="18px" height="18px" alt="kotline-logo" />Kotlin
                                    </li>
                                </a>
                                <a href="<?php echo home_url('/ipad/'); ?>">
                                    <li class="font-18">
                                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_ipad.svg"
                                            class="black-logo" width="18px" height="18px" alt="ipad-logo" /><img
                                            loading="lazy"
                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/header/blue_icon/codesclue_blue_ipad.svg"
                                            class="blue-logo" width="18px" height="18px" alt="ipad-blue-logo" />iPad
                                    </li>
                                </a>
                                <a href="<?php echo home_url('/swift/'); ?>">
                                    <li class="font-18">
                                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_swift.svg"
                                            class="black-logo" width="18px" height="18px" alt="swift-logo" /><img
                                            loading="lazy"
                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/header/blue_icon/codesclue_blue_swift.svg"
                                            class="blue-logo" width="18px" height="18px" alt="swift-blue-logo" />Swift
                                    </li>
                                </a>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-5 col-12 mb-4 px-xxl-2 px-lg-2">
                        <div class="card">
                            <h3 class="content-title mb-3">Frontend</h3>
                            <ul class="grid-3">
                                <a href="<?php echo home_url('/angular/'); ?>">
                                    <li class="font-18"><img loading="lazy"
                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_angular.svg"
                                            class="black-logo" width="18px" height="18px" alt="angular-logo" /><img
                                            loading="lazy"
                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/header/blue_icon/codesclue_blue_angular.svg"
                                            class="blue-logo" width="18px" height="18px"
                                            alt="angular-blue-logo" />Angular
                                    </li>
                                </a>
                                <a href="<?php echo home_url('/react-js/'); ?>">
                                    <li class="font-18"><i class="card-icon fab fa-react"></i>React.js
                                    </li>
                                </a>
                                <a href="<?php echo home_url('/vue-js/'); ?>">
                                    <li class="font-18">
                                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_vue.svg"
                                            class="black-logo" width="18px" height="18px" alt="vue-logo" /><img
                                            loading="lazy"
                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/header/blue_icon/codesclue_blue_vue.svg"
                                            class="blue-logo" width="18px" height="18px" alt="vue-blue-logo" />Vue.js
                                    </li>
                                </a>
                                <a href="<?php echo home_url('/js/'); ?>">
                                    <li class="font-18"><img loading="lazy"
                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_js.svg" class="black-logo"
                                            width="18px" height="18px" alt="js-logo" /><img loading="lazy"
                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/header/blue_icon/codesclue_blue_js.svg"
                                            class="blue-logo" width="18px" height="18px" alt="js-blue-logo" />Javascript
                                    </li>
                                </a>
                                <a href="<?php echo home_url('/dotnet/'); ?>">
                                    <li class="font-18"><img loading="lazy"
                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_dotnet.svg"
                                            class="black-logo" width="18px" height="18px" alt="dotnet-logo" /><img
                                            loading="lazy"
                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/header/blue_icon/codesclue_blue_dotnet.svg"
                                            class="blue-logo" width="18px" height="18px" alt="dotnet-blue-logo" />.NET
                                    </li>
                                </a>
                                <a href="<?php echo home_url('/html-page/'); ?>">
                                    <li class="font-18"><img loading="lazy"
                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_html.svg"
                                            class="black-logo" width="18px" height="18px" alt="html-logo" /><img
                                            loading="lazy"
                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/header/blue_icon/codesclue_blue_html.svg"
                                            class="blue-logo" width="18px" height="18px" alt="html-blue-logo" />Html
                                    </li>
                                </a>
                                <a href="<?php echo home_url('/css/'); ?>">
                                    <li class="font-18"><img loading="lazy"
                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_css.svg"
                                            class="black-logo" width="18px" height="18px" alt="css-logo" /><img
                                            loading="lazy"
                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/header/blue_icon/codesclue_blue_css.svg"
                                            class="blue-logo" width="18px" height="18px" alt="css-blue-logo" />CSS
                                    </li>
                                </a>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-5 col-12 mb-xl-0 mb-4 px-xxl-3 px-lg-2">
                        <div class="card">
                            <h3 class="content-title mb-3">Backend</h3>
                            <ul class="grid-2">
                                <a href="<?php echo home_url('/laravel/'); ?>">
                                    <li class="font-18"><img loading="lazy"
                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_laravel.svg"
                                            class="black-logo" width="18px" height="18px" alt="laravel-logo" /><img
                                            loading="lazy"
                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/header/blue_icon/codesclue_blue_laravel.svg"
                                            class="blue-logo" width="18px" height="18px"
                                            alt="laravel-blue-logo" />Laravel
                                    </li>
                                </a>
                                <a href="<?php echo home_url('/node-js/'); ?>">
                                    <li class="font-18"><img loading="lazy"
                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_node.svg"
                                            class="black-logo" width="18px" height="18px" alt="node-logo" /><img
                                            loading="lazy"
                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/header/blue_icon/codesclue_blue_node.svg"
                                            class="blue-logo" width="18px" height="18px" alt="node-blue-logo" />Node.js
                                    </li>
                                </a>
                                <a href="<?php echo home_url('/php/'); ?>">
                                    <li class="font-18"><img loading="lazy"
                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_php.svg"
                                            class="black-logo" width="18px" height="18px" alt="php-logo" /><img
                                            loading="lazy"
                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/header/blue_icon/codesclue_blue_php.svg"
                                            class="blue-logo" width="18px" height="18px" alt="php-blue-logo" />PHP</li>
                                </a>
                                <a href="<?php echo home_url('/ror/'); ?>">
                                    <li class="font-18"><img loading="lazy"
                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_rails.svg"
                                            class="black-logo" width="18px" height="18px" alt="ror-logo" /><img
                                            loading="lazy"
                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/header/blue_icon/codesclue_blue_rails.svg"
                                            class="blue-logo" width="18px" height="18px" alt="ror-blue-logo" />RoR
                                    </li>
                                </a>
                                <a href="<?php echo home_url('/mongo-db/'); ?>">
                                    <li class="font-18"><img loading="lazy"
                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_mongodb.svg"
                                            class="black-logo" width="18px" height="18px" alt="mongodb-logo" /><img
                                            loading="lazy"
                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/header/blue_icon/codesclue_blue_mongodb.svg"
                                            class="blue-logo" width="18px" height="18px"
                                            alt="mongodb-blue-logo" />MongoDB
                                    </li>
                                </a>
                                <a href="<?php echo home_url('/java/'); ?>">
                                    <li class="font-18"><img loading="lazy"
                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_java.svg"
                                            class="black-logo" width="18px" height="18px" alt="java-logo" /><img
                                            loading="lazy"
                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/header/blue_icon/codesclue_blue_java.svg"
                                            class="blue-logo" width="18px" height="18px" alt="java-blue-logo" />Java
                                    </li>
                                </a>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-7 col-12 mb-xl-0 mb-4 ]pe-xxl-0 px-lg-2">
                        <div class="d-flex gap-4 flex-column third-grid">
                            <div class="card">
                                <h3 class="content-title mb-3">Testing</h3>
                                <ul class="grid-3">
                                    <a href="<?php echo home_url('/auto-mated-testing/'); ?>">
                                        <li class="font-18"><img loading="lazy"
                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_auto.svg"
                                                class="black-logo" width="18px" height="18px" alt="auto-logo" /><img
                                                loading="lazy"
                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/blue_icon/codesclue_blue_auto.svg"
                                                class="blue-logo" width="18px" height="18px"
                                                alt="auto-blue-logo" />Automated
                                            Test</li>
                                    </a>
                                    <a href="<?php echo home_url('/manual-testing/'); ?>">
                                        <li class="font-18"><img loading="lazy"
                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_manual.svg"
                                                class="black-logo" width="18px" height="18px" alt="manual-logo" /><img
                                                loading="lazy"
                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/blue_icon/codesclue_blue_manual.svg"
                                                class="blue-logo" width="18px" height="18px"
                                                alt="manual-blue-logo" />Manual
                                            Test</li>
                                    </a>
                                    <a href="<?php echo home_url('/api-testing/'); ?>">
                                        <li class="font-18"><img loading="lazy"
                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_api.svg"
                                                class="black-logo" width="18px" height="18px" alt="api-logo" /><img
                                                loading="lazy"
                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/blue_icon/codesclue_blue_api.svg"
                                                class="blue-logo" width="18px" height="18px" alt="api-blue-logo" />Api
                                            Test</li>
                                    </a>
                                    <a href="<?php echo home_url('/mobile-testing/'); ?>">
                                        <li class="font-18"><img loading="lazy"
                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_mobile.svg"
                                                class="black-logo" width="18px" height="18px" alt="mobile-logo" /><img
                                                loading="lazy"
                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/blue_icon/codesclue_blue_mobile.svg"
                                                class="blue-logo" width="18px" height="18px"
                                                alt="mobile-blue-logo" />Mobile
                                            Test</li>
                                    </a>
                                    <a href="<?php echo home_url('/software-testing/'); ?>">
                                        <li class="font-18"><img loading="lazy"
                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_software.svg"
                                                class="black-logo" width="18px" height="18px" alt="software-logo" /><img
                                                loading="lazy"
                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/blue_icon/codesclue_blue_software.svg"
                                                class="blue-logo" width="18px" height="18px"
                                                alt="software-blue-logo" />Software
                                            Test</li>
                                    </a>
                                    <a href="<?php echo home_url('/support-testing/'); ?>">
                                        <li class="font-18"><img loading="lazy"
                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_support.svg"
                                                class="black-logo" width="18px" height="18px" alt="support-logo" /><img
                                                loading="lazy"
                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/blue_icon/codesclue_blue_support.svg"
                                                class="blue-logo" width="18px" height="18px"
                                                alt="support-blue-logo" />Support
                                            Test</li>
                                    </a>
                                    <a href="<?php echo home_url('/performance-testing/'); ?>">
                                        <li class="font-18"><img loading="lazy"
                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/black_icon/codesclue_performance.svg"
                                                class="black-logo" width="18px" height="18px"
                                                alt="performance-logo" /><img loading="lazy"
                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header/blue_icon/codesclue_blue_performance.svg"
                                                class="blue-logo" width="18px" height="18px"
                                                alt="performance-blue-logo" />Performance
                                            Test</li>
                                    </a>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Work section -->
        <section class="section-40 work__section px-4 mb-5" id="workSection">
            <div class="container px-0">
                <div
                    class="d-flex flex-wrap justify-content-md-between justify-content-center align-items-md-start align-items-center">
                    <div
                        class="col-xxl-5 col-lg-7 col-md-6 col-12 px-0 d-flex flex-column align-items-md-start align-items-center">
                        <h2 class="section-title mb-3 text-left text-white">Our Recent Work</h3>
                            <p class="section-description text-left text-white">Explore our latest projects,
                                testaments
                                to our commitment to delivering
                                transformative digital solutions.</p>
                    </div>
                    <div
                        class="col-xxl-7 col-lg-5 col-md-6 col-12 px-0 d-flex justify-content-md-end  justify-content-sm-start  justify-content-center mt-md-0 mt-3">
                        <a href="<?php echo home_url('/our-portfolio/'); ?>"
                            class="btn btn-secondary-outliner export_btn d-inline-flex align-items-center justify-content-between px-lg-4 px-3 py-lg-3 py-2 gap-3">
                            <i class="fa-solid fa-arrow-up-right-from-square font-24 rotate-90"></i>
                            View Portfolio
                        </a>
                    </div>
                </div>
                <div class="work__card__section section-40 pb-0">
                    <div class="work__card d-flex flex-column gap-md-5 gap-3">
                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio-img/codesclue_Mazady.webp" alt="Mazady.webp"
                            class="border-radius img-fluid hire-portfolio-img" />
                        <div class="card_details d-flex flex-column gap-3 border-radius  mb-md-0 mb-2">
                            <h2 class="section-title text-primary mb-0">15+</h2>
                            <p class="content-desc text-primary mb-0">Project Delivered</p>
                        </div>
                    </div>
                    <div class="work__card d-flex flex-column gap-md-5 gap-3">
                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio-img/codesclue_The Fit Level.webp"
                            alt="The Fit Level.webp" class="border-radius img-fluid hire-portfolio-img" />
                        <div class="card_details d-flex flex-column gap-3 border-radius  mb-md-0 mb-2">
                            <h2 class="section-title text-primary mb-0">12+</h2>
                            <p class="content-desc text-primary mb-0">Happy Clients</p>
                        </div>
                    </div>
                    <div class="work__card d-flex flex-column gap-md-5 gap-3">
                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio-img/codesclue_Aazer.webp" alt="Aazer.webp"
                            class="border-radius img-fluid hire-portfolio-img" />
                        <div class="d-flex justify-content-center align-items-center flex-column pt-3 mt-1 gap-3">
                            <p class="content-title text-white mb-0">View our case study?</p>
                            <a href="<?php echo home_url('/case-studies/'); ?>"
                                class="btn btn-secondary-outliner export_btn d-inline-flex align-items-center justify-content-between px-4 py-2 gap-3 bg-black text-white">
                                <i class="fa-solid fa-arrow-up-right-from-square font-18 rotate-90"></i>
                                View Case Study
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>



    </main>



<?php get_footer(); ?> 