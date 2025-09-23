<?php
/**
 * Template Name: Hire Angular Developer Page
 *
 * @package CodesClue
 */
get_header(); ?>    
    
    
    <main>
        <!-- Hero section -->
        <section class="main-hero-section angular-bg d-flex align-items-center py-cus" id="heroSection">
            <div class="container">
                <div class="row align-items-center g-4">
                    <div class="col-xl-7 col-lg-7 col-md-12 text-lg-start">
                        <h1 class="h1-font-style font-48 mb-2 text-white text-left">Hire Angular Developers
                        </h1>
                        <p class="hero_description fw-500 text-white mb-0 mt-0 text-left">Looking to build dynamic and
                            scalable web applications? Our skilled Angular developers create high-performance,
                            interactive, and secure web solutions tailored to your business needs. Hire dedicated
                            Angular experts from CodesClue to enhance your project with modern front-end
                            technologies.</p>
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
                            <h3 class="content-title mb-3 text-white">Get Free Consultation</h3>
                            <form id="AngularhiringForm">
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
                                            <input type="checkbox" name="job-type[]" id="hourly" value="Hourly hire">
                                            <label for="hourly" itemprop="name">Hourly hire</label>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-secondary border-radius w-100 reverse col-12" type="submit">Hire
                                    Developer</button>
                            </form>
                            <div class="position-fixed top-0 end-0 p-3" style="z-index: 1050;">
                                <div id="toastContainer" class="toast align-items-center text-white bg-success border-0"
                                    role="alert" aria-live="assertive" aria-atomic="true">
                                    <div class="d-flex">
                                        <div class="toast-body" id="toastMessage">Your message here.</div>
                                        <button type="button" class="btn-close btn-close-white me-2 m-auto"
                                            data-bs-dismiss="toast" aria-label="Close"></button>
                                    </div>
                                </div>
                            </div>
                            </aritcle>
                        </div>
                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/codesclue_black-plane.webp" alt="black-plane"
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

        <!-- <section class="tech-stack__section section-40">
            <div class="container">
                <div class="row mx-0 px-0">
                    <div class="col-12 px-0 d-flex justify-content-xl-between flex-wrap mt-0 mb-0 py-0">
                        <div class="col-xl-9 col-12 pe-xl-4">
                            <div
                                class="content-desc text-dark fst-italic d-flex justify-content-start align-items-center mb-md-4 mb-2">
                                <div class="line"></div>
                                Hire Best Resources
                            </div>
                            <h2 class="section-sub-title mb-md-4 mb-3">Our Dedicated Angular Developers Hiring
                                Models
                            </h2>
                            <div class="d-flex flex-wrap justify-content-xxl-between justify-content-center gap-4">
                                <div class="md-w-100">
                                    <div class="d-flex gap-3 align-items-center rounded-up-5 py-2 px-3 bg-yellow">
                                        <i class="fa-regular fa-clock font-24 my-2"></i>
                                        <strong class="content-sub-title mb-0">Full Time Monthly Hire
                                        </strong>
                                    </div>
                                    <div class="d-flex border-yellow d-flex justify-content-between p-4">
                                        <div class="d-flex flex-column">
                                            <h3 class="content-title">8</h3>
                                            <p class="content-desc">Hours per Day</p>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <h3 class="content-title">160</h3>
                                            <p class="content-desc">Hours</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="md-w-100">
                                    <div class="d-flex gap-3 align-items-center rounded-up-5 py-2 px-3 bg-pink">
                                        <i class="fa-solid fa-clock-rotate-left font-24 my-2"></i>
                                        <strong class="content-sub-title mb-0">Part Time Monthly Hire
                                        </strong>
                                    </div>
                                    <div class="d-flex border-pink d-flex justify-content-between p-4">
                                        <div class="d-flex flex-column">
                                            <h3 class="content-title">4</h3>
                                            <p class="content-desc">Hours per Day</p>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <h3 class="content-title">80</h3>
                                            <p class="content-desc">Hours</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6 md-w-100">
                                    <div class="d-flex gap-3 align-items-center rounded-up-5 py-2 px-3 bg-orange">
                                        <i class="fa-solid fa-circle-dollar-to-slot font-24 my-2"></i>
                                        <strong class="content-sub-title mb-0">Hourly Hire
                                        </strong>
                                    </div>
                                    <div class="d-flex border-orange d-flex justify-content-between p-4 gap-xl-0 gap-3">
                                        <div class="d-flex flex-column">
                                            <h3 class="content-title">100/50</h3>
                                            <p class="content-desc">Hours</p>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <h3 class="content-title">Flexible</h3>
                                            <p class="content-desc">Maintenance service</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center mt-3">
                                <a href="./angular.html"
                                    class="btn btn-secondary angular-bg text-white py-md-3 px-md-5 py-2 px-4 border-0"
                                    type="submit">
                                    Hire Angular Developer
                                </a>
                            </div>
                        </div>
                        <div
                            class="col-xl-3 col-12 ps-xl-4 mt-xl-0 mt-4 mb-md-0 mb-3 row-gap-4 d-flex flex-xl-column flex-column-reverse justify-content-xxl-end">
                            <div class="d-flex gap-4 flex-wrap">
                                <div class="ai-plateform-list pt-xl-4">
                                    <h3 class="content-sub-title mb-0 text-left">Benefits</h3>
                                    <div class="d-flex gap-3 align-items-center">
                                        <i class="fa-regular fa-circle-check font-18 my-2"></i>
                                        <p class="content-desc my-0">No Charges for Project Manager
                                        </p>
                                    </div>
                                    <div class="d-flex gap-3 align-items-center">
                                        <i class="fa-regular fa-circle-check font-18 my-2"></i>
                                        <p class="content-desc my-0">Direct Communication</p>
                                    </div>
                                    <div class="d-flex gap-3 align-items-center">
                                        <i class="fa-regular fa-circle-check font-18 my-2"></i>
                                        <p class="content-desc my-0">Daily Reporting & Code Push

                                        </p>
                                    </div>
                                    <div class="d-flex gap-3 align-items-center">
                                        <i class="fa-regular fa-circle-check font-18 my-2"></i>
                                        <p class="content-desc my-0">Project Management Tools

                                        </p>
                                    </div>
                                    <div class="d-flex gap-3 align-items-center">
                                        <i class="fa-regular fa-circle-check font-18 my-2"></i>
                                        <p class="content-desc my-0">Version Control Implementation
                                        </p>
                                    </div>
                                    <div class="d-flex gap-3 align-items-center">
                                        <i class="fa-regular fa-circle-check font-18 my-2"></i>
                                        <p class="content-desc my-0">SCRUM Based Execution</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section> -->

        <!-- Slider content - Expertise -->
        <!-- <section class="expertise__section section-40" id="expertiseSection">
            <div class="container">
                <div class="d-flex gap-3 flex-column  mb-4">

                    <h2 class="section-sub-title mb-0">Our Expertise In Frontend Development</h2>
                    <p class="section-description">Our team of agile web developers are
                        highly skilled in modern web technologies, enabling us to create
                        powerful and unique websites, web portals, and progressive web
                        applications to ensure your business can differentiate itself in
                        a highly competitive market.</p>
                </div>
                <div id="expertiseCarousel" class="mt-lg-4 mt-3 mb-2 carousel  slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        
                        <div class="carousel-item active">
                            <div class="d-flex flex-wrap">
                                <a href="<?php echo home_url('/hire-react-js-developer/'); ?>" class="col-md-6 col-12  py-2 px-2">
                                    <article class="card d-flex flex-column gap-md-4 gap-2 border-radius py-3">
                                        <div class="d-flex gap-4">
                                            <h3 class="content-title">React.js <br />
                                                Web Development
                                            </h3>

                                        </div>
                                        <p class="content-desc">
                                            Leverage the power of React.js with our experienced developers who build
                                            fast, responsive, and intuitive user interfaces. Whether you need a
                                            single-page application or a complex web solution, our React.js developers
                                            deliver seamless and scalable applications.
                                        </p>
                                        <div class="tags d-flex flex-wrap">
                                            <span class="small-text badge active">Web Development</span>
                                            <span class="small-text badge">React.js</span>
                                        </div>
                                    </article>
                                </a>
                                <a href="<?php echo home_url('/hire-javascript-developer/'); ?>" class="col-md-6 col-12  py-2 px-2">
                                    <article class="card d-flex flex-column gap-md-4 gap-2 border-radius py-3">
                                        <div class="d-flex gap-4">
                                            <h3 class="content-title">Javascript <br />
                                                Web Development
                                            </h3>

                                        </div>
                                        <p class="content-desc">
                                            Enhance your web and mobile applications with our expert JavaScript
                                            developers. With deep expertise in front-end and back-end development, our
                                            JavaScript professionals build high-performing and interactive solutions
                                            tailored to your vision.
                                        </p>
                                        <div class="tags d-flex flex-wrap">
                                            <span class="small-text badge active">Web Development</span>
                                            <span class="small-text badge">JavaScript</span>
                                        </div>
                                    </article>
                                </a>
                            </div>
                        </div>
                        
                        <div class="carousel-item">
                            <div class="d-flex flex-wrap">
                                <a href="<?php echo home_url('/hire-dotnet-developer/'); ?>" class="col-md-6 col-12  py-2 px-2">
                                    <article class="card d-flex flex-column gap-md-4 gap-2 border-radius py-3">
                                        <div class="d-flex gap-4">
                                            <h3 class="content-title">.NET <br />
                                                Web Development
                                            </h3>

                                        </div>
                                        <p class="content-desc">
                                            Hire dedicated .NET developers from CodesClue to accelerate your project
                                            with cutting-edge Microsoft technologies. Build secure, scalable, and
                                            high-performance applications with our expert .NET developers.
                                        </p>
                                        <div class="tags d-flex flex-wrap">
                                            <span class="small-text badge active">Web Development</span>
                                            <span class="small-text badge">.NET</span>
                                        </div>
                                    </article>
                                </a>
                                <a href="<?php echo home_url('/hire-angular-developer/'); ?>" class="col-md-6 col-12  py-2 px-2">
                                    <article class="card d-flex flex-column gap-md-4 gap-2 border-radius py-3">
                                        <div class="d-flex gap-4">
                                            <h3 class="content-title">Angular <br />
                                                Web Development
                                            </h3>

                                        </div>
                                        <p class="content-desc">
                                            Develop high-quality, robust, and
                                            scalable Angular applications
                                            with our proficient Angular programmers. We, at CodesClue, provide the
                                            best Angular
                                            developers team with innovative
                                        </p>
                                        <div class="tags d-flex flex-wrap">
                                            <span class="small-text badge active">Web Development</span>
                                            <span class="small-text badge">Angular</span>
                                        </div>
                                    </article>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex w-100 justify-content-center gap-4">
                        <button class="carousel-control-prev" type="button" data-bs-target="#expertiseCarousel"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#expertiseCarousel"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </section> -->

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
                        <h2 class="section-sub-title text-left">Hire Angular Developers in just 4
                            Steps</h2>
                        <p class="conten-desc text-left my-3">Looking to hire a frontend
                            developer
                            for your unique project?
                            Look no further, as CodesClue offers a quick and easy 4-step
                            process to connect you with the best talent that meets your
                            requirements.</p>
                        <div class="tags_step_section mt-4 mb-3">
                            <span class="tag_step">
                                <i class="fa-solid fa-cube font-18"></i> Frontend Development
                            </span>
                            <span class="tag_step">
                                <i class="fa-solid fa-cube font-18"></i> Full Stack Development
                            </span>
                            <span class="tag_step">
                                <i class="fa-solid fa-cube font-18"></i> Responsive Web Design
                            </span>
                            <span class="tag_step">
                                <i class="fa-solid fa-cube font-18"></i> UI/UX Design
                            </span>
                            <span class="tag_step">
                                <i class="fa-solid fa-cube font-18"></i> Progressive Web Apps (PWA)
                            </span>
                            <span class="tag_step">
                                <i class="fa-solid fa-cube font-18"></i> CMS Development
                            </span>
                            <span class="tag_step">
                                <i class="fa-solid fa-cube font-18"></i> E-commerce Development
                            </span>
                            <span class="tag_step">
                                <i class="fa-solid fa-cube font-18"></i> Web App Security
                            </span>
                        </div>
                        <a href="<?php echo home_url('/hire-angular-developer/'); ?>"
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
                <h2 class="section-title text-left ">Our Expertise In Angular</h2>
                <div class="d-flex mt-md-4  mb-md-0 my-2 justify-content-lg-start justify-content-center flex-wrap">
                    <div class="col-xl-3 col-lg-4  col-sm-12 col-12 p-md-2 py-2 px-sm-2 px-0">
                        <div class="expertise_tab d-flex align-items-center justify-content-center">
                            <h3 class="number-main mb-0 text-center">01</h3>
                            <div class="pink-bg mb-0 mt-0 d-flex px-3 align-items-center">
                                <span class="content-desc text-center py-2">Custom Angular Development</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4  col-sm-12 col-12 p-md-2 py-2 px-sm-2 px-0">
                        <div class="expertise_tab d-flex align-items-center justify-content-center">
                            <h3 class="number-main mb-0 text-center">02</h3>
                            <div class="pink-bg mb-0 mt-0 d-flex px-3 align-items-center">
                                <span class="content-desc text-center py-2">Single Page Application (SPA)
                                    Development</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4  col-sm-12 col-12 p-md-2 py-2 px-sm-2 px-0">
                        <div class="expertise_tab d-flex align-items-center justify-content-center">
                            <h3 class="number-main mb-0 text-center">03</h3>
                            <div class="pink-bg mb-0 mt-0 d-flex px-3 align-items-center">
                                <span class="content-desc text-center py-2">Progressive Web Application (PWA)</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4  col-sm-12 col-12 p-md-2 py-2 px-sm-2 px-0">
                        <div class="expertise_tab d-flex align-items-center justify-content-center">
                            <h3 class="number-main mb-0 text-center">04</h3>
                            <div class="pink-bg mb-0 mt-0 d-flex px-3 align-items-center">
                                <span class="content-desc text-center py-2">Custom Angular Component Development</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4  col-sm-12 col-12 p-md-2 py-2 px-sm-2 px-0">
                        <div class="expertise_tab d-flex align-items-center justify-content-center">
                            <h3 class="number-main mb-0 text-center">05</h3>
                            <div class="pink-bg mb-0 mt-0 d-flex px-3 align-items-center">
                                <span class="content-desc text-center py-2">Custom Dashboard Development</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4  col-sm-12 col-12 p-md-2 py-2 px-sm-2 px-0">
                        <div class="expertise_tab d-flex align-items-center justify-content-center">
                            <h3 class="number-main mb-0 text-center">06</h3>
                            <div class="pink-bg mb-0 mt-0 d-flex px-3 align-items-center">
                                <span class="content-desc text-center py-2">Migrations to MEAN Stack</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4  col-sm-12 col-12 p-md-2 py-2 px-sm-2 px-0">
                        <div class="expertise_tab d-flex align-items-center justify-content-center">
                            <h3 class="number-main mb-0 text-center">07</h3>
                            <div class="pink-bg mb-0 mt-0 d-flex px-3 align-items-center">
                                <span class="content-desc text-center py-2">Angular Upgrade Service</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4  col-sm-12 col-12 p-md-2 py-2 px-sm-2 px-0">
                        <div class="expertise_tab d-flex align-items-center justify-content-center">
                            <h3 class="number-main mb-0 text-center">08</h3>
                            <div class="pink-bg mb-0 mt-0 d-flex px-3 align-items-center">
                                <span class="content-desc text-center py-2">Automated Testing (QA) in Angular</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4  col-sm-12 col-12 p-md-2 py-2 px-sm-2 px-0">
                        <div class="expertise_tab d-flex align-items-center justify-content-center">
                            <h3 class="number-main mb-0 text-center">09</h3>
                            <div class="pink-bg mb-0 mt-0 d-flex px-3 align-items-center">
                                <span class="content-desc text-center py-2">Implementing Angular with Three JS</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4  col-sm-12 col-12 p-md-2 py-2 px-sm-2 px-0">
                        <div class="expertise_tab d-flex align-items-center justify-content-center">
                            <h2 class="number-main mb-0 text-center">10</h3>
                                <div class="pink-bg mb-0 mt-0 d-flex px-3 align-items-center">
                                    <span class="content-desc text-center py-2">Code Audit in Angular Application</span>
                                </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4  col-sm-12 col-12 p-md-2 py-2 px-sm-2 px-0">
                        <div class="expertise_tab d-flex align-items-center justify-content-center">
                            <h2 class="number-main mb-0 text-center">11</h3>
                                <div class="pink-bg mb-0 mt-0 d-flex px-3 align-items-center">
                                    <span class="content-desc text-center py-2">Performance Optimization in Angular
                                        Application</span>
                                </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4  col-sm-12 col-12 p-md-2 py-2 px-sm-2 px-0">
                        <div class="expertise_tab d-flex align-items-center justify-content-center">
                            <h2 class="number-main mb-0 text-center">12</h3>
                                <div class="pink-bg mb-0 mt-0 d-flex px-3 align-items-center">
                                    <span class="content-desc text-center py-2">Third API Party Integrations in Angular
                                        App</span>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Benefit section -->
        <section class="section-40 benefit__section" id="benefitSection">
            <div class="container">
                <p class="small-service-text mb-3">• Why Hire Developers?</p>
                <span class="section-title mb-md-3 mb-2">How Hiring Web Developers Can Benefit
                    Your Business?</span>
                <div class="benefit__card__section section-40 mt-2 gap-md-4 gap-3 pb-0">
                    <div class="benefit__card  p-md-3 p-2 border-radius">
                        <div class="d-flex align-items-center gap-3">
                            <div class="benefit-img">
                                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/codesclue_Combined Shape.webp"
                                    alt="Combined Shape" />
                            </div>
                            <h3 class="content-sub-title mb-0 text-left">Flexible Hiring Models</h3>
                        </div>
                        <p class="content-desc mb-0 mt-md-3 mt-2 text-lg-start ">To meet your project needs
                            and work
                            schedules, CodesClue offers flexible hiring models. Reduce frontend development costs by up
                            to
                            40% with our dedicated Angular developers. At CodesClue, we offer flexible hiring models
                            tailored to your specific Angular development needs to build a cost-effective product or web
                            apps.</p>

                    </div>
                    <div class="benefit__card  p-md-3 p-2 border-radius">
                        <div class="d-flex align-items-center gap-3">
                            <div class="benefit-img">
                                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/codesclue_Combined Shape.webp"
                                    alt="Combined Shape" />
                            </div>
                            <h3 class="content-sub-title mb-0 text-left">Cost-Effective Solutions</h3>
                        </div>
                        <p class="content-desc mb-0 mt-md-3 mt-2 text-lg-start ">We are aware of how crucial
                            cost-effectiveness is for companies. You can obtain cost-effective Angular solutions and
                            applications without sacrificing quality or performance by hiring Angular developers from
                            CodesClue. Our developers use resource optimization techniques, adhere to effective
                            development
                            procedures, and provide value for your money, guaranteeing that you receive the results you
                            want.</p>
                    </div>
                    <div class="benefit__card  p-md-3 p-2 border-radius">
                        <div class="d-flex align-items-center gap-3">
                            <div class="benefit-img">
                                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/codesclue_Combined Shape.webp"
                                    alt="Combined Shape" />
                            </div>
                            <h3 class="content-sub-title mb-0 text-left">Quality Standards</h3>
                        </div>
                        <p class="content-desc mb-0 mt-md-3 mt-2 text-lg-start ">You can count on the
                            highest caliber of
                            code when you engage Angular full-stack developers from CodesClue. Our dedicated Angular
                            developers can create excellent web applications with flawless code because of Angular's
                            strong unit testing method. Our developers make sure that your web app satisfies the highest
                            standards of quality, dependability, and maintainability by utilizing Angular's testing
                            features.</p>
                    </div>
                    <div class="benefit__card  p-md-3 p-2 border-radius">
                        <div class="d-flex align-items-center gap-3">
                            <div class="benefit-img">
                                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/codesclue_Combined Shape.webp"
                                    alt="Combined Shape" />
                            </div>
                            <h3 class="content-sub-title mb-0 text-left">Strong Technical Skills</h3>
                        </div>
                        <p class="content-desc mb-0 mt-md-3 mt-2 text-lg-start ">At CodesClue, our dedicated
                            Angular
                            developers bring a wealth of technical knowledge and proficiency to the table. They can
                            enhance the creativity, originality, and innovation of your Angular open-source
                            customization work thanks to their in-depth expertise in the framework. Their mastery of the
                            framework enables them to produce high-quality code, use best practices, and create
                            outstanding apps.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Service Portfolio section -->
        <section class="container section tech-stack__section section-40 mt-4" id="techStackSection">
            <div class=" pb-0">
                <div class="container content-desc text-dark fst-italic d-flex align-items-center mb-2">
                    <div class="line"></div>
                    Discover Our
                </div>
                <div class="container">
                    <h2 class="section-title mb-4">Service Portfolio</h3>
                </div>

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
                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio-img/codesclue_Green Relef.webp"
                            alt="Green Relef.webp" class="border-radius img-fluid hire-portfolio-img" />
                        <div class="card_details d-flex flex-column gap-3 border-radius  mb-md-0 mb-2">
                            <h2 class="section-title text-primary mb-0">15+</h2>
                            <p class="content-desc text-primary mb-0">Project Delivered</p>
                        </div>
                    </div>
                    <div class="work__card d-flex flex-column gap-md-5 gap-3">
                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio-img/codesclue_Aazer.webp" alt="Aazer.webp"
                            class="border-radius img-fluid hire-portfolio-img" />
                        <div class="card_details d-flex flex-column gap-3 border-radius  mb-md-0 mb-2">
                            <h2 class="section-title text-primary mb-0">12+</h2>
                            <p class="content-desc text-primary mb-0">Happy Clients</p>
                        </div>
                    </div>
                    <div class="work__card d-flex flex-column gap-md-5 gap-3">
                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio-img/codesclue_Mazady.webp" alt="Mazady.webp"
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