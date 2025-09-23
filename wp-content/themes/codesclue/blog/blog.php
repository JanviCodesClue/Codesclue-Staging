<?php
/**
 * Template Name: Blog Page
 *
 * @package CodesClue
 */
get_header(); ?>

<main>
    <section class="main-hero-section section-40 bg-blue">
        <div class="container">
            <div class="row mx-0 px-0 align-items-center">
                <div class="col-xl-6 px-xl-2 px-0">
                    <div class="main-descriptions text-center">
                        <h1 class="h1-font-style text-white">Blog</h1>
                        <p class="hero_description text-white">Stay updated with the latest trends in IT, software
                            development, AI, and cloud computing. Explore expert insights, best practices, and
                            innovative solutions for modern businesses.</p>
                        <a class="btn btn-secondary reverse-cus mt-md-4 mt-2 d-inline-block w-auto"
                            href="<?php echo home_url('/contact-us/'); ?>">
                            Contact Us
                        </a>

                    </div>
                </div>
                <div class="col-xl-6 px-xl-2 px-0">
                    <div class="main-hero-img z-1 text-center blog-main-banner">
                        <div class="main-hero-inner-img">
                            <img loading="lazy" alt="blog-hero-design"
                                class="main-hero-right-img blog-banner-img mt-xl-0 mt-2"
                                src="<?php echo get_template_directory_uri(); ?>/assets/images//blog/codesclue_blog-main-banner-img.webp" />

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog detail section -->
        <div class="container px-md-3 px-2 pt-5 mt-cus-5">
            <strong class="section-sub-title text-left mb-0 ">Our Recent Blog Post</strong>
            <div class="row mx-0 px-0">
                <div class="col-12 px-0 d-flex flex-wrap mt-4 mb-0 py-0">
                    <div class="col-xl-7 col-lg-5 col-12">
                        <img loading="lazy" alt="mongo_blog" class="img-fluid border-radius"
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/codesClue_Dutchi.jpg" />
                    </div>
                    <div
                        class="col-xl-5 col-lg-7 col-12 px-xl-3 mt-lg-0 mt-4 d-flex flex-column justify-content-between">
                        <div class="px-lg-4">
                            <p class="content-title text-left mb-3">
                                🌿 How We Built GreenReleaf Dispensary with Dutchie POS APIs</span>
                            <p class="content-desc my-2">
                                At CodesClue, we specialize in cannabis eCommerce development and creating powerful,
                                user focused digital solutions for dispensaries.
                                One of our flagship projects is GreenReleaf Dispensary,
                                an advanced and compliant dispensary eCommerce platform
                                designed to help cannabis businesses grow their online presence.
                            </p>
                            <p class="content-desc my-2">In this post, we’ll share how we designed and developed
                                GreenReleaf using the [Dutchie POS API, ensuring seamless
                                integration between the physical store and the digital storefront.</p>
                        </div>
                        <div class="d-flex gap-lg-5 gap-3 px-lg-4 mt-lg-0 mt-2 align-items-center flex-wrap">
                            <a href="<?php echo home_url('/greenreleaf-dutchie-blog/'); ?>"
                                class="btn btn-primary py-2 px-md-4 px-3">Read
                                More</a>
                            <div class="d-flex gap-md-3 gap-2  align-items-center">
                                <i class="fa-solid fa-calendar-days font-24 text-primary"></i>
                                <p class="gray-text">September 07, 2025</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    <!-- Multiple Blogs -->

        <div class="container px-0 py-4 ">
            <div class="pt-5 pt-cus-5">
                <div
                    class="blog-filter-buttons d-flex justify-content-lg-center justify-content-start mb-md-4 mb-2 gap-3 px-lg-0 px-md-3">
                    <button class="blog-filter-btn blog-btn active" data-filter="all">All</button>
                    <button class="blog-filter-btn blog-btn" data-filter="cannabis">Cannabis</button>
                    <button class="blog-filter-btn blog-btn" data-filter="healthcare">Healthcare</button>
                    <button class="blog-filter-btn blog-btn" data-filter="taxiapp">Taxi App</button>
                    <button class="blog-filter-btn blog-btn" data-filter="digital">Digital Business</button>
                    <button class="blog-filter-btn blog-btn" data-filter="uiux">UI/UX</button>
                    <button class="blog-filter-btn blog-btn" data-filter="other">Other</button>
                </div>
                <div class="row-mx-0 px-0">
                    <div class="col-12 px-0 d-flex flex-wrap justify-content-start">

                        <!-- Last Latest Blog -->

                        <article
                            class="col-lg-4 col-sm-12 blog-item col-12 p-sm-3 py-1 px-1 flex-column justify-content-between"
                            data-category="other">
                            <div class="p-sm-0 p-2 px-0">
                                <img loading="lazy" alt="blog-img" class="img-fluid border-radius"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/codesclue_Express.JSBlogs.webp" />
                                <h3 class="content-title text-left mt-3">
                                    🚀 Everything You Need to Know About Express.js
                                </h3>
                                <p class="content-desc mb-2">Are you a developer or business looking for a fast
                                    and efficient way to build web applications? Express.js is one of the most
                                    popular frameworks for Node.js, making backend development
                                    simpler and more scalable. Let's dive into...
                                </p>
                            </div>
                            <div
                                class="d-flex justify-content-sm-between gap-lg-3 gap-2 mt-sm-4 mt-2 align-items-center flex-wrap px-0">
                                <a href="<?php echo home_url('/expressjs-blog/'); ?>"
                                    class="btn btn-primary py-2 px-sm-4 px-3">Read
                                    More</a>
                                <div class="d-flex gap-sm-3 gap-2  align-items-center">
                                    <i class="fa-solid fa-calendar-days font-24 text-primary"></i>
                                    <p class="gray-text">March 13, 2025</p>
                                </div>
                            </div>
                        </article>

                        <article
                            class="col-lg-4 col-sm-12 blog-item col-12 p-sm-3 py-1 px-1 flex-column justify-content-between"
                            data-category="other">
                            <div class="p-sm-0 p-2 px-0">
                                <img loading="lazy" alt="blog-img" class="img-fluid border-radius"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/codesclue_iosUpdate.webp" />
                                <h3 class="content-title text-left mt-3">
                                    🚀 Your App Stays Compliant with iOS 18 & Xcode 16
                                </h3>
                                <p class="content-desc mb-2">Apple continuously evolves its ecosystem to
                                    enhance security,
                                    performance, and user experience. As part of its latest update, Apple has
                                    announced that
                                    starting April 24, 2025...
                                </p>
                            </div>
                            <div
                                class="d-flex justify-content-sm-between gap-lg-3 gap-2 mt-sm-4 mt-2 align-items-center flex-wrap px-0">
                                <a href="<?php echo home_url('/iosupdate-blog/'); ?>"
                                    class="btn btn-primary py-2 px-sm-4 px-3">Read
                                    More</a>
                                <div class="d-flex gap-sm-3 gap-2  align-items-center">
                                    <i class="fa-solid fa-calendar-days font-24 text-primary"></i>
                                    <p class="gray-text">March 10, 2025</p>
                                </div>
                            </div>
                        </article>
                        <article
                            class="col-lg-4 col-sm-12 blog-item col-12 p-sm-3 py-1 px-1 flex-column justify-content-between"
                            data-category="healthcare">
                            <div class="p-sm-0 p-2 px-0">
                                <img loading="lazy" alt="blog-img" class="img-fluid border-radius"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/codesclue_therapix-blog.webp" />
                                <h3 class="content-title text-left mt-3">
                                    Why therapix industry digitaliztion with web/mobile app and AI?
                                </h3>
                                <p class="content-desc mb-2">Digital transformation is rapidly reshaping
                                    industries, and the Therapix sector is
                                    no exception. Incorporating web/mobile applications and AI into therapy services
                                    offers a comprehensive upgrade...
                                </p>
                            </div>
                            <div
                                class="d-flex justify-content-sm-between gap-lg-3 gap-2 mt-sm-4 mt-2 align-items-center flex-wrap px-0">
                                <a href="<?php echo home_url('/therapix-web-app-blog/'); ?>"
                                    class="btn btn-primary py-2 px-sm-4 px-3">Read
                                    More</a>
                                <div class="d-flex gap-sm-3 gap-2  align-items-center">
                                    <i class="fa-solid fa-calendar-days font-24 text-primary"></i>
                                    <p class="gray-text">February 26, 2025</p>
                                </div>
                            </div>
                        </article>
                        <article
                            class="col-lg-4 col-sm-12 blog-item col-12 p-sm-3 py-1 px-1 flex-column justify-content-between"
                            data-category="other">
                            <div class="p-sm-0 p-2 px-0">
                                <img loading="lazy" alt="blog-img" class="img-fluid border-radius"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/codesclue_mongo_blog.webp" />
                                <h3 class="content-title text-left mt-3">
                                    Advantages & Disadvantages of MongoDB
                                </h3>
                                <p class="content-desc mb-2">MongoDB is a widely adopted NoSQL database
                                    known
                                    for its flexibility, scalability, and high performance. Unlike traditional
                                    relational databases, MongoDB uses a document-oriented structure...
                                </p>
                            </div>
                            <div
                                class="d-flex justify-content-sm-between gap-lg-3 gap-2 mt-sm-4 mt-2 align-items-center flex-wrap px-0">
                                <a href="<?php echo home_url('/mongodb-blog/'); ?>"
                                    class="btn btn-primary py-2 px-sm-4 px-3">Read
                                    More</a>
                                <div class="d-flex gap-sm-3 gap-2  align-items-center">
                                    <i class="fa-solid fa-calendar-days font-24 text-primary"></i>
                                    <p class="gray-text">February 22, 2025</p>
                                </div>
                            </div>
                        </article>
                        <article
                            class="col-lg-4 col-sm-12 blog-item col-12 p-sm-3 py-1 px-1 flex-column justify-content-between"
                            data-category="uiux">
                            <div class="p-sm-0 p-2 px-0">
                                <img loading="lazy" alt="blog-img" class="img-fluid border-radius"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/codesclue_blog_7.webp" />
                                <h3 class="content-title text-left mt-3">
                                    Why Wireframes Are Essential Before Starting a New Project?
                                </h3>
                                <p class="content-desc mb-2">Why Wireframes Are Essential Before
                                    Starting a New Project?
                                    Wireframes are a critical step in the project planning process. Here's why
                                    they are necessary:
                                    1. This is the first item in the list.
                                </p>
                            </div>
                            <div
                                class="d-flex justify-content-sm-between gap-lg-3 gap-2 mt-sm-4 mt-2 align-items-center flex-wrap px-0">
                                <a href="<?php echo home_url('/wireframe-project-blog/'); ?>"
                                    class="btn btn-primary py-2 px-sm-4 px-3">Read
                                    More</a>
                                <div class="d-flex gap-sm-3 gap-2  align-items-center">
                                    <i class="fa-solid fa-calendar-days font-24 text-primary"></i>
                                    <p class="gray-text">December 10, 2024</p>
                                </div>
                            </div>
                        </article>
                        <!-- Blog 1 -->
                        <article
                            class="col-lg-4 col-sm-12 blog-item col-12 p-sm-3 py-1 px-1 flex-column justify-content-between"
                            data-category="digital">
                            <div class="p-sm-0 p-2 px-0">
                                <img loading="lazy" alt="blog-img" class="img-fluid border-radius"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/codesclue_blog_1.webp" />
                                <h3 class="content-title text-left mt-3">
                                    Why Move to a Digital Business with Web and Mobile Apps?
                                </h3>
                                <p class="content-desc mb-2">In today's fast-paced
                                    world, having a digital presence is no longer a luxury it's a necessity.
                                    Here's
                                    why transitioning to web and mobile apps can transform your business.
                                </p>
                            </div>
                            <div
                                class="d-flex justify-content-sm-between gap-lg-3 gap-2 mt-sm-4 mt-2 align-items-center flex-wrap px-0">
                                <a href="<?php echo home_url('/move-digital-business-blog/'); ?>"
                                    class="btn btn-primary py-2 px-sm-4 px-3">Read
                                    More</a>
                                <div class="d-flex gap-sm-3 gap-2  align-items-center">
                                    <i class="fa-solid fa-calendar-days font-24 text-primary"></i>
                                    <p class="gray-text">December 03, 2024</p>
                                </div>
                            </div>
                        </article>
                        <!-- Blog 2 -->
                        <article
                            class="col-lg-4 col-sm-12 blog-item col-12 p-sm-3 py-1 px-1 flex-column justify-content-between"
                            data-category="cannabis">
                            <div class="p-sm-0 p-2 px-0">
                                <img loading="lazy" alt="blog-img" class="img-fluid border-radius"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/codesclue_blog_2.webp" />
                                <h3 class="content-title text-left mt-3">
                                    Key Learnings from a Cannabis Production Deployment
                                </h3>
                                <p class="content-desc mb-2">Deploying a production
                                    system in the cannabis industry is unlike any other sector, blending
                                    intricate
                                    regulatory frameworks with the need for seamless technological integration.
                                </p>
                            </div>
                            <div
                                class="d-flex justify-content-sm-between gap-lg-3 gap-2 mt-sm-4 mt-2 align-items-center flex-wrap px-0">
                                <a href="<?php echo home_url('/cannabis-production-blog/'); ?>"
                                    class="btn btn-primary py-2 px-sm-4 px-3">Read
                                    More</a>
                                <div class="d-flex gap-sm-3 gap-2  align-items-center">
                                    <i class="fa-solid fa-calendar-days font-24 text-primary"></i>
                                    <p class="gray-text">November 26, 2024</p>
                                </div>
                            </div>
                        </article>
                        <!-- Blog 3 -->
                        <article
                            class="col-lg-4 col-sm-12 blog-item col-12 p-sm-3 py-1 px-1 flex-column justify-content-between"
                            data-category="digital">
                            <div class="p-sm-0 p-2 px-0">
                                <img loading="lazy" alt="blog-img" class="img-fluid border-radius"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/codesclue_blog_3.webp" />
                                <h3 class="content-title text-left mt-3">
                                    CodesClue helped SaaS software company to scale</h3>
                                <p class="content-desc mb-2">Success Story: Scaling
                                    Beyond Borders! We at CodesClue are
                                    proud to have partnered with a leading SaaS software
                                    company, helping them scale their operations and achieve global reach. </p>
                            </div>
                            <div
                                class="d-flex justify-content-sm-between gap-lg-3 gap-2 mt-sm-4 mt-2 align-items-center flex-wrap px-0">
                                <a href="<?php echo home_url('/saas-software-blog/'); ?>"
                                    class="btn btn-primary py-2 px-sm-4 px-3">Read
                                    More</a>
                                <div class="d-flex gap-sm-3 gap-2  align-items-center">
                                    <i class="fa-solid fa-calendar-days font-24 text-primary"></i>
                                    <p class="gray-text">November 22, 2024</p>
                                </div>
                            </div>
                        </article>
                        <!-- Blog 4 -->
                        <article
                            class="col-lg-4 col-sm-12 blog-item col-12 p-sm-3 py-1 px-1 flex-column justify-content-between"
                            data-category="ai cannabis">
                            <div class="p-sm-0 p-2 px-0">
                                <img loading="lazy" alt="blog-img" class="img-fluid border-radius"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/codesclue_blog_4.webp" />
                                <h3 class="content-title text-left mt-3">
                                    The Future Cannabis Artificial Intelligence Revolution</h3>
                                <p class="content-desc mb-2">2024
                                    🌿 The Future of Cannabis Meets Artificial Intelligence! 🤖 The cannabis
                                    industry is
                                    evolving at an unprecedented pace, and AI is leading the revolution.</p>
                            </div>
                            <div
                                class="d-flex justify-content-sm-between gap-lg-3 gap-2 mt-sm-4 mt-2 align-items-center flex-wrap px-0">
                                <a href="<?php echo home_url('/future-cannabis-ai-blog/'); ?>"
                                    class="btn btn-primary py-2 px-sm-4 px-3">Read
                                    More</a>
                                <div class="d-flex gap-sm-3 gap-2  align-items-center">
                                    <i class="fa-solid fa-calendar-days font-24 text-primary"></i>
                                    <p class="gray-text">November 15, 2024</p>
                                </div>
                            </div>
                        </article>
                        <!-- Blog 5 -->
                        <article
                            class="col-lg-4 col-sm-12 blog-item col-12 p-sm-3 py-1 px-1 flex-column justify-content-between"
                            data-category="taxiapp">
                            <div class="p-sm-0 p-2 px-0">
                                <img loading="lazy" alt="blog-img" class="img-fluid border-radius"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/codesclue_blog_5.webp" />
                                <h3 class="content-title text-left mt-3">
                                    Unlocking High ROI with Expert Taxi App Development Solutions...</h3>
                                <p class="content-desc mb-2">🚖 Experience Taxi Like
                                    Never Before! Say goodbye to generic
                                    apps and step into a new era of ride-hailing with our next-gen,
                                    Figma-designed
                                    Taxi App where aesthetics meet innovation! 🌌✨</p>
                            </div>
                            <div
                                class="d-flex justify-content-sm-between gap-lg-3 gap-2 mt-sm-4 mt-2 align-items-center flex-wrap px-0">
                                <a href="<?php echo home_url('/taxiapp-blog/'); ?>"
                                    class="btn btn-primary py-2 px-sm-4 px-3">Read
                                    More</a>
                                <div class="d-flex gap-sm-3 gap-2  align-items-center">
                                    <i class="fa-solid fa-calendar-days font-24 text-primary"></i>
                                    <p class="gray-text">November 14, 2024</p>
                                </div>
                            </div>
                        </article>
                        <!-- Blog 6 -->
                        <article
                            class="col-lg-4 col-sm-12 blog-item col-12 p-sm-3 py-1 px-1 flex-column justify-content-between"
                            data-category="cannabis">
                            <div class="p-sm-0 p-2 px-0">
                                <img loading="lazy" alt="blog-img" class="img-fluid border-radius"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/codesclue_blog_6.webp" />
                                <h3 class="content-title text-left mt-3">
                                    Why PWA app for Cannabis product???</h3>
                                <p class="content-desc mb-2">Creating a PWA
                                    (Progressive Web App) for a cannabis product offers several advantages that
                                    align with both industry challenges and modern user expectations.
                                </p>
                            </div>
                            <div
                                class="d-flex justify-content-sm-between gap-lg-3 gap-2 mt-sm-4 mt-2 align-items-center flex-wrap px-0">
                                <a href="<?php echo home_url('/pwa-app-cannabis-blog/'); ?>"
                                    class="btn btn-primary py-2 px-sm-4 px-3">Read
                                    More</a>
                                <div class="d-flex gap-sm-3 gap-2  align-items-center">
                                    <i class="fa-solid fa-calendar-days font-24 text-primary"></i>
                                    <p class="gray-text">November 13, 2024</p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
   


</main>


<?php get_footer(); ?>