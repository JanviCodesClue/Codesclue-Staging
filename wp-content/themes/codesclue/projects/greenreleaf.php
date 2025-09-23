<?php
/**
 * Template Name: Greenreleaf Page
 *
 * @package CodesClue
 */
get_header(); ?>

    <main class="main">
        <section class="greenreleaf-bg hero-section">
            <div class="container py-5">
            <div class="row align-items-center  flex-lg-row">
                
                <div class="col-lg-6 col-md-12 text-center text-lg-start mb-5 mb-lg-0">
                <div class="greenreleaf-border-part p-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio-img/project-assets/codesclue_black_GR.svg"
                    alt="greenreleaf-logo" class="greenreleaf-hero-logo mb-4" />

                    <h1 class="section-title fw-bold mb-3">
                    Smarter Cannabis Product Shopping Powered by AI
                    </h1>

                    <p class="section-description">
                    We've reimagined cannabis shopping with an AI-powered product search engine.  
                    Just type what you’re looking for in natural phrases like  
                    <em>“strong hybrid with fruity flavor”</em> or  
                    <em>“chill edibles under $30.”</em>  
                    Instantly get accurate, relevant, and personalized results.  
                    A smarter, faster, and more intuitive way to find the right cannabis products.
                    </p>
                </div>
                </div>

                <div class="col-lg-6 col-md-12 text-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio-img/project-assets/codesclue_gr-mobile.webp"
                    alt="greenreleaf-app" class="greenreleaf-mobile img-fluid mb-4" />

              
                </div>

            </div>

              <div class="row g-3 greenreleaf-details-section">
                    <div class="col-6 col-md-3 col-lg-3">
                    <div class="greenreleaf-box h-100">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio-img/project-assets/codesclue_gr-tech.svg" alt="tech" />
                        <p><strong>Technology:</strong><br>Angular, Node.js, MongoDB, OpenAI</p>
                    </div>
                    </div>
                    <div class="col-6 col-md-3 col-lg-3">
                    <div class="greenreleaf-box h-100">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio-img/project-assets/codesclue_gr-indus.svg" alt="industry" />
                        <p><strong>Industry:</strong><br>Cannabis Product</p>
                    </div>
                    </div>
                    <div class="col-6 col-md-3 col-lg-3">
                    <div class="greenreleaf-box h-100">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio-img/project-assets/codesclue_gr-built.svg" alt="built-for" />
                        <p><strong>Built For:</strong><br>Mobile & Web</p>
                    </div>
                    </div>
                    <div class="col-6 col-md-3 col-lg-3">
                    <div class="greenreleaf-box h-100">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio-img/project-assets/codesclue_gr-world.svg" alt="worldwide" />
                        <p><strong>Access:</strong><br>Worldwide</p>
                    </div>
                    </div>
                </div>
            </div>

        </section>



        <section class="section-40 gr-bg-color">
            <div class="container">
                <div class="row mx-0 px-0">
                    <div class="d-flex gap-lg-3 gap-2 align-items-center justify-content-center title-part px-0">
                        <i class="fa-solid fa-cannabis"></i>
                        <h2 class="section-title text-success mb-0">Smart Cannabis Shopping Platform</h2>
                    </div>
                    <p class="section-description px-0">The platform is also built as a
                        Progressive Web App (PWA), ensuring users enjoy a native app-like experience with
                        offline access, push notifications, and blazing-fast load times across all devices.</p>
                </div>
                <div class="row mx-0 px-0 gx-2 mt-2">
                    <!-- 01 -->
                    <div class="col-lg-6 col-12 px-lg-2 px-0 pt-lg-3 pt-2 card-stretch d-flex">
                        <article class="card gr-about-card z-11">
                            <div class="card-title d-flex gap-3 align-items-center mb-0">
                                <strong class="content-title">01</strong>
                                <h3 class="content-title d-flex align-items-center">AI-Driven Intent Recognition</h3>
                            </div>
                            <div class="card-body pt-3 px-0">
                                <p class="content-desc mb-0">We integrated OpenAI's advanced language models to parse
                                    natural language into structured search intents. This allows users to type
                                    conversational phrases, and our engine returns highly relevant product suggestions
                                    in real-time - making search feel effortless.</p>
                            </div>
                        </article>
                    </div>

                    <!-- 02 -->
                    <div class="col-lg-6 col-12 px-lg-2 px-0 pt-lg-3 pt-2 card-stretch d-flex">
                        <article class="card gr-about-card z-11">
                            <div class="card-title d-flex gap-3 align-items-center mb-0">
                                <strong class="content-title">02</strong>
                                <h3 class="content-title d-flex align-items-center">Dynamic Search Engine Integration
                                </h3>
                            </div>
                            <div class="card-body pt-3 px-0">
                                <p class="content-desc mb-0">Our custom search pipeline maps AI-extracted tags to
                                    product attributes using MongoDB queries. Combined with optional Algolia fallback,
                                    the system delivers accurate and fast search results based on effects, strains,
                                    budget, and flavor preferences.</p>
                            </div>
                        </article>
                    </div>

                    <!-- 03 -->
                    <div class="col-lg-6 col-12 px-lg-2 px-0 pt-lg-3 pt-2 card-stretch d-flex">
                        <article class="card gr-about-card z-11">
                            <div class="card-title d-flex gap-3 align-items-center mb-0">
                                <strong class="content-title">03</strong>
                                <h3 class="content-title d-flex align-items-center">PWA Optimization</h3>
                            </div>
                            <div class="card-body pt-3 px-0">
                                <p class="content-desc mb-0">We built the platform as a fully functional Progressive Web
                                    App (PWA), enabling offline access, push notifications, and installable mobile
                                    experiences - all while maintaining fast performance and native-like responsiveness
                                    across browsers and devices.</p>
                            </div>
                        </article>
                    </div>

                    <!-- 04 -->
                    <div class="col-lg-6 col-12 px-lg-2 px-0 pt-lg-3 pt-2 card-stretch d-flex">
                        <article class="card gr-about-card z-11">
                            <div class="card-title d-flex gap-3 align-items-center mb-0">
                                <strong class="content-title">04</strong>
                                <h3 class="content-title d-flex align-items-center">Responsive, Mobile-First UI</h3>
                            </div>
                            <div class="card-body pt-3 px-0">
                                <p class="content-desc mb-0">Crafted with Angular and Bootstrap 5, the UI follows a
                                    mobile-first design strategy. Every component is responsive and modular, offering an
                                    intuitive browsing experience with adaptive layouts for smartphones, tablets, and
                                    desktops.</p>
                            </div>
                        </article>
                    </div>

                    <!-- 05 -->
                    <div class="col-lg-6 col-12 px-lg-2 px-0 pt-lg-3 pt-2 card-stretch d-flex">
                        <article class="card gr-about-card z-11">
                            <div class="card-title d-flex gap-3 align-items-center mb-0">
                                <strong class="content-title">05</strong>
                                <h3 class="content-title d-flex align-items-center">Secure Backend API Layer</h3>
                            </div>
                            <div class="card-body pt-3 px-0">
                                <p class="content-desc mb-0">Built on Node.js and Express, our backend ensures secure
                                    data flow with token-based authentication, role-based access control, and API
                                    rate-limiting - enabling scalable performance while protecting user data and
                                    transaction integrity.</p>
                            </div>
                        </article>
                    </div>

                    <!-- 06 -->
                    <div class="col-lg-6 col-12 px-lg-2 px-0 pt-lg-3 pt-2 card-stretch d-flex">
                        <article class="card gr-about-card z-11">
                            <div class="card-title d-flex gap-3 align-items-center mb-0">
                                <strong class="content-title">06</strong>
                                <h3 class="content-title d-flex align-items-center">Third-Party API Ecosystem</h3>
                            </div>
                            <div class="card-body pt-3 px-0">
                                <p class="content-desc mb-0">We seamlessly integrated Stripe, Twilio, Firebase, and
                                    OpenAI to handle payments, notifications, push services, and natural language search
                                    - allowing us to deliver enterprise-grade features without added infrastructure
                                    overhead.</p>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-4 gr-bg-secondary-color h-100vh">
            <div class="container">
                <div class="col-xl-9 col-sm-7 col-12 px-0 mx-auto">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio-img/project-assets/codesclue_gr-responsive.svg"
                        alt="codesclue_gr-responsive" class="img-fluid object-fit-cover w-100" />
                </div>
            </div>
        </section>

        <section class="section-40 gr-bg-img">
            <div class="container">
                <div class="row mx-0 px-0">
                    <div class="d-flex gap-lg-3 gap-2 align-items-center justify-content-center title-part px-0">
                        <i class="fa-solid fa-cannabis"></i>
                        <h2 class="section-title text-success mb-0">Green Releaf & CodesClue</h2>
                    </div>
                    <p class="section-description px-0">A Partnership of Vision and Expertise</p>
                </div>
                <div class="row mx-0 px-0 gx-2 mt-2">
                    <!-- 01 -->
                    <div class="col-lg-6 col-12 px-lg-2 px-0 pt-lg-3 pt-2 card-stretch d-flex">
                        <article class="card gr-card z-11">
                            <div class="card-title d-flex gap-3 align-items-center mb-0">
                                <strong class="content-title">01</strong>
                                <h3 class="content-title d-flex align-items-center">Shared Mission, Bold Goals</h3>
                            </div>
                            <div class="card-body pt-1 px-0">
                                <p class="content-desc mb-0 text-center">Green Releaf envisioned a smarter, more
                                    intuitive way for customers to explore cannabis products. CodesClue stepped in with
                                    the technical expertise to turn that vision.</p>
                            </div>
                        </article>
                    </div>

                    <!-- 02 -->
                    <div class="col-lg-6 col-12 px-lg-2 px-0 pt-lg-3 pt-2 card-stretch d-flex">
                        <article class="card gr-card z-11">
                            <div class="card-title d-flex gap-3 align-items-center mb-0">
                                <strong class="content-title">02</strong>
                                <h3 class="content-title d-flex align-items-center">AI Meets User-Centered Design</h3>
                            </div>
                            <div class="card-body pt-1 px-0">
                                <p class="content-desc mb-0 text-center">Together, we designed a platform where real
                                    human behavior drives product discovery. Our AI-powered natural language search
                                    ensures users find exactly what they need.</p>
                            </div>
                        </article>
                    </div>

                    <!-- 03 -->
                    <div class="col-lg-6 col-12 px-lg-2 px-0 pt-lg-3 pt-2 card-stretch d-flex">
                        <article class="card gr-card z-11">
                            <div class="card-title d-flex gap-3 align-items-center mb-0">
                                <strong class="content-title">03</strong>
                                <h3 class="content-title d-flex align-items-center">Built for Today, Ready for Tomorrow
                                </h3>
                            </div>
                            <div class="card-body pt-1 px-0">
                                <p class="content-desc mb-0 text-center">While Green Releaf brought deep market insight,
                                    CodesClue delivered future-ready tech - PWA architecture, smart search engines, and
                                    a backend that scales with growth.</p>
                            </div>
                        </article>
                    </div>

                    <!-- 04 -->
                    <div class="col-lg-6 col-12 px-lg-2 px-0 pt-lg-3 pt-2 card-stretch d-flex">
                        <article class="card gr-card z-11">
                            <div class="card-title d-flex gap-3 align-items-center mb-0">
                                <strong class="content-title">04</strong>
                                <h3 class="content-title d-flex align-items-center">Trust, Transparency & Collaboration
                                </h3>
                            </div>
                            <div class="card-body pt-1 px-0">
                                <p class="content-desc mb-0 text-center">This project was a true partnership, rooted in
                                    open communication and agile development. Every milestone was co-shaped, tested
                                    through continuous feedback from Green Releaf's leadership.</p>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-40 gr-bg-color">
            <div class="container">
                <div class="row mx-0 px-0">
                    <div class="d-flex gap-lg-3 gap-2 align-items-center justify-content-center title-part px-0">
                        <i class="fa-solid fa-cannabis"></i>
                        <h2 class="section-title text-success mb-0">CodesClue's Technical Mastery</h2>
                    </div>
                    <p class="section-description px-0">Powering Green Releaf's Digital Ambitions</p>
                </div>
                <div class="row mx-0 px-0 g-2 mt-lg-4 mt-3 justify-content-between gr-steps">
                    <div class="col-lg-6 col-12 px-lg-3 px-0">
                        <div class="step-wrapper">
                            <div class="step-indicator">
                                <div class="step-circle">01</div>
                                <span class="content-desc bold-text">Understanding the Vision</span>
                            </div>
                            <div class="step-line-arrow">
                                <div class="line"></div>
                                <div class="arrow"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 px-lg-3 px-0">
                        <p class="content-desc">We started by aligning with Green Releaf's goal: to simplify cannabis
                            discovery using natural language, intuitive UX, and high-speed performance.</p>
                    </div>
                </div>
                <div class="row mx-0 px-0 g-2 mt-lg-4 mt-3 justify-content-between gr-steps">
                    <div class="col-lg-6 col-12 px-lg-3 px-0">
                        <p class="content-desc">Our team crafted a custom search pipeline powered by OpenAI that
                            translates conversational phrases into structured product filters in real time.</p>
                    </div>
                    <div class="col-lg-6 col-12 px-lg-3 px-0">
                        <div class="step-wrapper">
                            <div class="step-line-arrow">
                                <div class="arrow"></div>
                                <div class="line"></div>
                            </div>
                            <div class="step-indicator">
                                <div class="step-circle">02</div>
                                <span class="content-desc bold-text">Designing the AI Search Flow</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mx-0 px-0 g-2 mt-lg-4 mt-3 justify-content-between gr-steps">
                    <div class="col-lg-6 col-12 px-lg-3 px-0">
                        <div class="step-wrapper">
                            <div class="step-indicator">
                                <div class="step-circle">03</div>
                                <span class="content-desc bold-text">Building a Scalable Backend</span>
                            </div>
                            <div class="step-line-arrow">
                                <div class="line"></div>
                                <div class="arrow"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 px-lg-3 px-0">
                        <p class="content-desc">Using Node.js and MongoDB, we built a secure and modular backend
                            architecture, supporting seamless product management, orders, and AI integration.</p>
                    </div>
                </div>
                <div class="row mx-0 px-0 g-2 mt-lg-4 mt-3 justify-content-between gr-steps">
                    <div class="col-lg-6 col-12 px-lg-3 px-0">
                        <p class="content-desc">We used Angular 16 with SSR to create a fast, responsive, and
                            installable Progressive Web App, ensuring smooth user experiences across all devices.</p>
                    </div>
                    <div class="col-lg-6 col-12 px-lg-3 px-0">
                        <div class="step-wrapper">
                            <div class="step-line-arrow">
                                <div class="arrow"></div>
                                <div class="line"></div>
                            </div>
                            <div class="step-indicator">
                                <div class="step-circle">04</div>
                                <span class="content-desc bold-text">Developing the Frontend PWA</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mx-0 px-0 g-2 mt-lg-4 mt-3 justify-content-between gr-steps">
                    <div class="col-lg-6 col-12 px-lg-3 px-0">
                        <div class="step-wrapper">
                            <div class="step-indicator">
                                <div class="step-circle">05</div>
                                <span class="content-desc bold-text">Integrating Key APIs & Services</span>
                            </div>
                            <div class="step-line-arrow">
                                <div class="line"></div>
                                <div class="arrow"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 px-lg-3 px-0">
                        <p class="content-desc">Third-party APIs like Stripe (payments), Twilio (alerts), OpenAI
                            (search), and Firebase (push notifications) were integrated for end-to-end functionality.
                        </p>
                    </div>
                </div>
                <div class="row mx-0 px-0 g-2 mt-lg-4 mt-3 justify-content-between gr-steps">
                    <div class="col-lg-6 col-12 px-lg-3 px-0">
                        <p class="content-desc">The system underwent thorough testing for mobile responsiveness, load
                            speed, security, and regional compliance, ensuring it was user-ready.</p>
                    </div>
                    <div class="col-lg-6 col-12 px-lg-3 px-0">
                        <div class="step-wrapper">
                            <div class="step-line-arrow">
                                <div class="arrow"></div>
                                <div class="line"></div>
                            </div>
                            <div class="step-indicator">
                                <div class="step-circle">06</div>
                                <span class="content-desc bold-text">Testing, Optimization & Compliance</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mx-0 px-0 g-2 mt-lg-4 mt-3 justify-content-between gr-steps">
                    <div class="col-lg-6 col-12 px-lg-3 px-0">
                        <div class="step-wrapper">
                            <div class="step-indicator">
                                <div class="step-circle">07</div>
                                <span class="content-desc bold-text">Launching & Scaling with Confidence</span>
                            </div>
                            <div class="step-line-arrow">
                                <div class="line"></div>
                                <div class="arrow"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 px-lg-3 px-0">
                        <p class="content-desc">After a successful rollout, the platform is live with a strong
                            foundation ready for future expansion, multi-location support, and evolving customer needs.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-40 gr-bg-color position-relative h-gr-90vh">
            <strong class="section-title-300">Feature</strong>
            <div class="container">
                <div class="row mx-0 px-0">
                    <div class="d-flex gap-lg-3 gap-2 align-items-center justify-content-center title-part px-0">
                        <i class="fa-solid fa-cannabis"></i>
                        <h2 class="section-title text-success mb-0 ms-lg-0 ms-3">Digital Blueprint</h2>
                    </div>
                    <p class="section-description px-0">A Deep Dive into the Architecture and Core Features</p>
                </div>
                <div
                    class="row mx-0 px-0 gx-4 mt-lg-4 flex-lg-row flex-column-reverse mt-2 gap-lg-4 gap-3 justify-content-xxl-between justify-content-lg-around justify-content-center">
                    <div class="col-xxl-7 col-lg-6 col-12 px-lg-2 px-0">
                        <div class="d-flex flex-column gap-lg-3 gap-2 mb-lg-3 mb-2">
                            <div class="d-flex align-items-center">
                                <span class="content-sub-title px-3 green-border-1">01</span>
                                <h3 class="content-desc bold-text px-3 green-border-1">AI-Powered Natural Language
                                    Product Search</h3>
                            </div>
                            <div class="d-flex gap-3 align-items-start">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio-img/project-assets/codesclue_weed-leaf.svg"
                                    alt="codesclue_weed-leaf" class="img-30" />
                                <p class="content-desc mb-0">Our platform redefines search by allowing users to type
                                    naturally—like “sleep gummies under $25” or “strong hybrid for creativity.”</p>
                            </div>
                            <div class="d-flex gap-3 align-items-start">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio-img/project-assets/codesclue_weed-leaf.svg"
                                    alt="codesclue_weed-leaf" class="img-30" />
                                <p class="content-desc mb-0">Using OpenAI's NLP, the system extracts the user's intent,
                                    effect, budget, and strain type, instantly matching it with products in the
                                    database.</p>
                            </div>
                        </div>
                        <div class="d-flex flex-column gap-lg-3 gap-2 mb-lg-3 mb-2">
                            <div class="d-flex align-items-center">
                                <span class="content-sub-title px-3 green-border-1">02</span>
                                <h3 class="content-desc bold-text px-3 green-border-1">PWA Experience</h3>
                            </div>
                            <div class="d-flex gap-3 align-items-start">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio-img/project-assets/codesclue_weed-leaf.svg"
                                    alt="codesclue_weed-leaf" class="img-30" />
                                <p class="content-desc mb-0">Built as a Progressive Web App (PWA), the platform provides
                                    a smooth, installable experience right from the browser.</p>
                            </div>
                            <div class="d-flex gap-3 align-items-start">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio-img/project-assets/codesclue_weed-leaf.svg"
                                    alt="codesclue_weed-leaf" class="img-30" />
                                <p class="content-desc mb-0">Users benefit from offline access, background caching,
                                    faster load times, and push notifications—without needing to download from the app
                                    store.</p>
                            </div>
                        </div>
                        <div class="d-flex flex-column gap-lg-3 gap-2 mb-lg-3 mb-2">
                            <div class="d-flex align-items-center">
                                <span class="content-sub-title px-3 green-border-1">03</span>
                                <h3 class="content-desc bold-text px-3 green-border-1">Dynamic Product Filtering &
                                    Tagging</h3>
                            </div>
                            <div class="d-flex gap-3 align-items-start">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio-img/project-assets/codesclue_weed-leaf.svg"
                                    alt="codesclue_weed-leaf" class="img-30" />
                                <p class="content-desc mb-0">Each product is categorized by AI and admin rules across
                                    multiple attributes: strain type, flavor profile, effects, THC/CBD percentage, price
                                    range, and more.</p>
                            </div>
                        </div>
                        <div class="d-flex flex-column gap-lg-3 gap-2 mb-lg-3 mb-2">
                            <div class="d-flex align-items-center">
                                <span class="content-sub-title px-3 green-border-1">04</span>
                                <h3 class="content-desc bold-text px-3 green-border-1">Personalized Recommendations</h3>
                            </div>
                            <div class="d-flex gap-3 align-items-start">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio-img/project-assets/codesclue_weed-leaf.svg"
                                    alt="codesclue_weed-leaf" class="img-30" />
                                <p class="content-desc mb-0">The platform learns from users' search history, product
                                    views, and previous orders to recommend more relevant products.</p>
                            </div>
                        </div>
                        <div class="d-flex flex-column gap-lg-3 gap-2 mb-lg-3 mb-2">
                            <div class="d-flex align-items-center">
                                <span class="content-sub-title px-3 green-border-1">05</span>
                                <h3 class="content-desc bold-text px-3 green-border-1">Smart Inventory & Order
                                    Management</h3>
                            </div>
                            <div class="d-flex gap-3 align-items-start">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio-img/project-assets/codesclue_weed-leaf.svg"
                                    alt="codesclue_weed-leaf" class="img-30" />
                                <p class="content-desc mb-0">Designed with dispensary operations in mind, our system
                                    offers real-time inventory updates, SKU-based tracking, and region-specific
                                    availability rules.</p>
                            </div>
                            <div class="d-flex gap-3 align-items-start">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio-img/project-assets/codesclue_weed-leaf.svg"
                                    alt="codesclue_weed-leaf" class="img-30" />
                                <p class="content-desc mb-0">Admins can define delivery zones, pick-up windows, and even
                                    set rules by state or product type.</p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-xxl-4 col-lg-5 col-12 px-lg-2 px-0 d-flex justify-content-center align-items-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio-img/project-assets/codesclue_gr-feature.webp"
                            alt="codesclue_gr-feature" class="img-fluid gr-feature-mobile" />
                    </div>
                </div>
            </div>
        </section>

        <section class="section-40 gr-bg-color">
            <div class="container">
                <div class="col-12 px-0 d-flex justify-content-center z-11">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio-img/project-assets/codesclue_weed-multi-leaf.svg"
                        class="multi-leaf" alt="codesclue_weed-multi-leaf" />
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio-img/project-assets/codesclue_weed-multi-leaf.svg"
                        class="multi-leaf" alt="codesclue_weed-multi-leaf" />
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio-img/project-assets/codesclue_gr_mobile-2.webp"
                        alt="codesclue_gr_mobile-2.webp" class="img-multi" />
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio-img/project-assets/codesclue_weed-multi-leaf.svg"
                        class="multi-leaf" alt="codesclue_weed-multi-leaf" />
                </div>
            </div>
        </section>

        <section class="section-40 gr-bg-color">
            <div class="container">
                <div class="row mx-0 px-0">
                    <div class="d-flex gap-lg-3 gap-2 align-items-center justify-content-center title-part px-0">
                        <i class="fa-solid fa-cannabis"></i>
                        <h2 class="section-title text-success mb-0">How It Works</h2>
                    </div>
                    <p class="section-description px-0">From Thought to Purchase Effortlessly</p>
                </div>
                <div
                    class="row mx-0 px-0 mt-lg-4 gx-4 flex-lg-row flex-column-reverse mt-2 justify-content-xxl-between justify-content-lg-around justify-content-center">
                    <div class="col-lg-6 col-12 px-lg-4 px-0">
                        <div class="gr-method-card border-0 z-11">
                            <div class="card-title d-flex gap-4">
                                <div class="circle one">
                                    <div class="circle two">
                                        <strong class="content-sub-title">01</strong>
                                    </div>
                                </div>
                                <p class="content-desc mb-0">Users type casual, everyday phrases like “chill edibles for
                                    weekend” or “pre-rolls for anxiety relief.”</p>
                            </div>
                        </div>
                        <div class="gr-method-card border-0 z-11">
                            <div class="card-title d-flex gap-4">
                                <div class="circle one">
                                    <div class="circle two">
                                        <strong class="content-sub-title">02</strong>
                                    </div>
                                </div>
                                <p class="content-desc mb-0">Our NLP engine decodes the phrase—detecting product type,
                                    effects, flavor, potency, and price preferences.</p>
                            </div>
                        </div>
                        <div class="gr-method-card border-0 z-11">
                            <div class="card-title d-flex gap-4">
                                <div class="circle one">
                                    <div class="circle two">
                                        <strong class="content-sub-title">03</strong>
                                    </div>
                                </div>
                                <p class="content-desc mb-0">The system transforms intent into dynamic search filters
                                    and queries the product database in real time.</p>
                            </div>
                        </div>
                        <div class="gr-method-card border-0 z-11">
                            <div class="card-title d-flex gap-4">
                                <div class="circle one">
                                    <div class="circle two">
                                        <strong class="content-sub-title">04</strong>
                                    </div>
                                </div>
                                <p class="content-desc mb-0">Behind the scenes, relevant tags like “indica,” “sleep,” or
                                    “under $30” are matched—no manual selection needed.</p>
                            </div>
                        </div>
                        <div class="gr-method-card border-0 z-11">
                            <div class="card-title d-flex gap-4">
                                <div class="circle one">
                                    <div class="circle two">
                                        <strong class="content-sub-title">05</strong>
                                    </div>
                                </div>
                                <p class="content-desc mb-0">AI ranks and displays products based on relevance,
                                    availability, and past user behavior for faster discovery.</p>
                            </div>
                        </div>
                        <div class="gr-method-card border-0 z-11">
                            <div class="card-title d-flex gap-4">
                                <div class="circle one">
                                    <div class="circle two">
                                        <strong class="content-sub-title">06</strong>
                                    </div>
                                </div>
                                <p class="content-desc mb-0">Users can instantly checkout, schedule in-store pickup, or
                                    request home delivery based on location and regulations.</p>
                            </div>
                        </div>
                        <div class="gr-method-card border-0 z-11">
                            <div class="card-title d-flex gap-4">
                                <div class="circle one">
                                    <div class="circle two">
                                        <strong class="content-sub-title">07</strong>
                                    </div>
                                </div>
                                <p class="content-desc mb-0">User behavior is remembered—suggestions improve with each
                                    visit through behavioral learning and micro-targeting.</p>
                            </div>
                        </div>
                        <div class="gr-method-card border-0 z-11">
                            <div class="card-title d-flex gap-4">
                                <div class="circle one">
                                    <div class="circle two">
                                        <strong class="content-sub-title">08</strong>
                                    </div>
                                </div>
                                <p class="content-desc mb-0">Age verification, region checks, and compliance rules
                                    ensure everything is safe, legal, and ready to ship.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 px-lg-4 px-0 mobile-mockup border-radius mb-0"></div>
                </div>
            </div>
        </section>

        <section class="gr-bg-img-secondary">
            <div class="section-40">
                <div class="container">
                    <div class="row mx-0 px-0">
                        <div class="d-flex gap-lg-3 gap-2 align-items-center justify-content-center title-part px-0">
                            <i class="fa-solid fa-cannabis"></i>
                            <h2 class="section-title text-success mb-0">Green Releaf's Branding</h2>
                        </div>
                        <p class="section-description px-0">Typography & Colors</p>
                    </div>

                    <div class="row mx-0 px-0 gx-3 section-40 pb-0">
                        <div class="col-lg-5 col-12 px-lg-3 px-0 pt-lg-0 pt-3">
                            <h3 class="content-title text-center">Typography</h3>
                            <div class="d-flex grid-bg justify-content-center">
                                <strong class="section-title-300">Aa</strong>
                            </div>
                            <p class="content-sub-title mt-2">Font-Family: <span class="fw-400">Poppins</span></p>
                        </div>
                        <div class="col-lg-7 col-12 px-lg-3 px-0 pt-lg-0 pt-3">
                            <h3 class="content-title text-center">Colors</h3>
                            <div class="d-flex flex-wrap leaf-section mt-3 gap-sm-0 row-gap-2">
                                <div class="col-sm-6 col-6 px-0 d-flex gap-0 flex-column align-items-center">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio-img/project-assets/codesclue_weed-9dcc3f.svg"
                                        alt="codesclue_weed-9dcc3f" loading="lazy" />
                                    <h4 class="content-sub-title text-white p-2 border-radius">#9dcc3f</h4>
                                </div>
                                <div class="col-sm-6 col-6 px-0 d-flex gap-0 flex-column align-items-center">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio-img/project-assets/codesclue_weed-2a602c.svg"
                                        alt="codesclue_weed-2a602c" loading="lazy" />
                                    <h4 class="content-sub-title text-white p-2 border-radius">#2a602c</h4>
                                </div>
                                <div class="col-sm-6 col-6 px-0 d-flex gap-0 flex-column align-items-center">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio-img/project-assets/codesclue_weed-2bb34b.svg"
                                        alt="codesclue_weed-2bb34b" loading="lazy" />
                                    <h4 class="content-sub-title text-white p-2 border-radius">#2bb34b</h4>
                                </div>
                                <div class="col-sm-6 col-6 px-0 d-flex gap-0 flex-column align-items-center">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio-img/project-assets/codesclue_weed-222222.svg"
                                        alt="codesclue_weed-000000" loading="lazy" />
                                    <h4 class="content-sub-title text-white p-2 border-radius">#222222</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="gr-bg-color mb-5">
            <div class="section-40 pb-0">
                <div class="container">
                    <div class="row mx-0 px-0">
                        <div class="d-flex gap-lg-3 gap-2 align-items-center justify-content-center title-part px-0">
                            <i class="fa-solid fa-cannabis"></i>
                            <h2 class="section-title text-success mb-0">Technologies We Use</h2>
                        </div>
                        <p class="section-description px-0">Tech Stack & Third-party APIs</p>
                    </div>

                    <div class="col-12 d-flex flex-wrap tech-stack-section mt-3 row-gap-3 justify-content-center">
                        <div class="col-xl-4 col-md-6 col-12 px-md-2 px-0">
                            <article class="gr-tech-card p-md-3 p-2 border-radius">
                                <h3 class="content-sub-title text-white">Angular 16</h3>
                                <p class="content-desc text-center text-white">For building responsive, modular frontend
                                    components with powerful reactive forms.</p>
                            </article>
                        </div>
                        <div class="col-xl-4 col-md-6 col-12 px-md-2 px-0">
                            <article class="gr-tech-card p-md-3 p-2 border-radius">
                                <h3 class="content-sub-title text-white">Node.js + Express</h3>
                                <p class="content-desc text-center text-white">High-performance backend handling API
                                    requests, authentication, and server-side logic.</p>
                            </article>
                        </div>
                        <div class="col-xl-4 col-md-6 col-12 px-md-2 px-0">
                            <article class="gr-tech-card p-md-3 p-2 border-radius">
                                <h3 class="content-sub-title text-white">MongoDB Atlas</h3>
                                <p class="content-desc text-center text-white">Cloud-hosted NoSQL database for storing
                                    product data, user profiles, documents.</p>
                            </article>
                        </div>
                        <div class="col-xl-4 col-md-6 col-12 px-md-2 px-0">
                            <article class="gr-tech-card p-md-3 p-2 border-radius">
                                <h3 class="content-sub-title text-white">Firebase Notification</h3>
                                <p class="content-desc text-center text-white">Facilitates sending messages and
                                    notifications across to PWA application.</p>
                            </article>
                        </div>
                        <div class="col-xl-4 col-md-6 col-12 px-md-2 px-0">
                            <article class="gr-tech-card p-md-3 p-2 border-radius">
                                <h3 class="content-sub-title text-white">SCSS / Bootstrap 5</h3>
                                <p class="content-desc text-center text-white">Styling framework for consistent,
                                    responsive UI design.</p>
                            </article>
                        </div>
                        <div class="col-xl-4 col-md-6 col-12 px-md-2 px-0">
                            <article class="gr-tech-card p-md-3 p-2 border-radius">
                                <h3 class="content-sub-title text-white">AWS (EC2, S3, Route 53)</h3>
                                <p class="content-desc text-center text-white">Hosting, file storage, and DNS routing
                                    configured with scalability and uptime in mind.</p>
                            </article>
                        </div>
                    </div>

                    <div class="col-12 d-flex flex-wrap api-stack-section mt-3 row-gap-3 justify-content-center">
                        <div class="col-xl-4 col-md-6 col-12 px-md-2 px-0">
                            <article class="gr-tech-card p-md-3 p-2 border-radius">
                                <h3 class="content-sub-title">OpenAI API</h3>
                                <p class="content-desc text-center">Powers natural language search and product
                                    recommendation through conversational AI.</p>
                            </article>
                        </div>
                        <div class="col-xl-4 col-md-6 col-12 px-md-2 px-0">
                            <article class="gr-tech-card p-md-3 p-2 border-radius">
                                <h3 class="content-sub-title">Mapbox / Google Maps API</h3>
                                <p class="content-desc text-center">Enables store locator with state-wise filtering and
                                    geo-based discovery.</p>
                            </article>
                        </div>
                        <div class="col-xl-4 col-md-6 col-12 px-md-2 px-0">
                            <article class="gr-tech-card p-md-3 p-2 border-radius">
                                <h3 class="content-sub-title">Twilio / SendGrid</h3>
                                <p class="content-desc text-center">For OTP-based verification, email triggers, and user
                                    notifications.</p>
                            </article>
                        </div>
                        <div class="col-xl-4 col-md-6 col-12 px-md-2 px-0">
                            <article class="gr-tech-card p-md-3 p-2 border-radius">
                                <h3 class="content-sub-title">Stripe (or Alt Payment Gateway)</h3>
                                <p class="content-desc text-center">Supports secure checkout and digital payment
                                    processing (if integrated or planned).</p>
                            </article>
                        </div>
                        <div class="col-xl-4 col-md-6 col-12 px-md-2 px-0">
                            <article class="gr-tech-card p-md-3 p-2 border-radius">
                                <h3 class="content-sub-title">AWS SES / SNS</h3>
                                <p class="content-desc text-center">Handles bulk email delivery and push notifications.
                                </p>
                            </article>
                        </div>
                        <div class="col-xl-4 col-md-6 col-12 px-md-2 px-0">
                            <article class="gr-tech-card p-md-3 p-2 border-radius">
                                <h3 class="content-sub-title">Firebase Storage API</h3>
                                <p class="content-desc text-center">Handles document/image uploads for patient
                                    verification and onboarding.</p>
                            </article>
                        </div>
                        <div class="col-12 px-md-2 px-0">
                            <article class="gr-tech-card p-md-3 p-2 border-radius">
                                <h3 class="content-sub-title">Medical ID Verification API</h3>
                                <p class="content-desc text-center">External API for validating patient documents during
                                    onboarding (e.g., GreenID, Veriff).</p>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </main>

<?php get_footer(); ?> 