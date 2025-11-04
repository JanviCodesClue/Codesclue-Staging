<?php
/**
 * Template Name: Blog Page
 *
 * @package CodesClue
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
                                    <span class="section-subtitle char-anim" data-delay="0.75">Blog
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="breadcrumb-wrapper fade-anim" data-direction="left" data-offset="100"
                            data-delay="0.90">
                            <ul class="breadcrumb">
                                <li><a href="<?php echo home_url(''); ?>">HOME</a></li>
                                <li>Blog</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="mt-blog-40">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <h1 class="heading-blog">Our Recent Blog Post</h1>
                        <h4 class="subheading-blog blog-mt-16">Powering the Next Digital Wave 🌊💻</h4>
                        <p class="dec-blog blog-mt-16">In the past decade, the world has witnessed a complete digital overhaul. From automation in manufacturing and AI in healthcare to blockchain in finance and cloud-based entertainment platforms — the pace of innovation has been extraordinary.</p>
                        <div class="d-flex blog-mt-16 align-items-center flex-wrap justify-content-between">
                            <a href="<?php echo home_url('/next-wave-tech/'); ?>"
                                class="btn btn-primary py-2 px-md-4 px-3">Read
                                More</a>
                            <div class="d-flex gap-md-3 gap-2  align-items-center date-blog">
                                <i class="fa-solid fa-calendar-days font-24 text-dark"></i>
                                <p class="gray-text">October 9, 2025</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 blog-mt-16-sm">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images//blog/next-wave-tech-2.png" alt="blog-img" class="border-16-blog">
                    </div>
                </div>
            </div>
        </section>



            <div class="container px-0 mb-40-m">
            <div class="pt-5 pt-cus-5">
                <div
                    class="blog-filter-buttons d-flex justify-content-lg-center justify-content-start gap-3">
                    <button class="blog-filter-btn blog-btn active" data-filter="all">All</button>
                    <button class="blog-filter-btn blog-btn" data-filter="cannabis">Cannabis</button>
                    <button class="blog-filter-btn blog-btn" data-filter="healthcare">Healthcare</button>
                    <button class="blog-filter-btn blog-btn" data-filter="taxiapp">Taxi App</button>
                    <button class="blog-filter-btn blog-btn" data-filter="digital">Digital Business</button>
                    <button class="blog-filter-btn blog-btn" data-filter="uiux">UI/UX</button>
                    <button class="blog-filter-btn blog-btn" data-filter="other">Other</button>
                </div>
                <div class="row">
                         <div class="col-lg-4 col-sm-12 col-12 d-flex align-content-stretch blog-mt-16 blog-item-add">
                            <article
                                class="blog-item"
                                data-category="cannabis">
                                <div class="blog-body">
                                    <img loading="lazy" alt="blog-img" class="img-fluid border-radius"
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/codesClue_Dutchi.jpg" />
                                    <h3 class="content-title text-left blog-mt-16">
                                        🌿 How We Built GreenReleaf Dispensary with Dutchie POS APIs
                                    </h3>
                                    <p class="content-desc blog-mt-16"> At CodesClue, we specialize in cannabis eCommerce development and creating powerful, user focused digital solutions for dispensaries. One of our flagship projects is ...
                                    </p>
                                </div>
                                    <div class="d-flex-blog justify-content-between blog-mt-16">
                                         <a href="<?php echo home_url('/greenreleaf-dutchie-blog/'); ?>"
                                        class="btn btn-dark py-2 px-sm-4 px-3">Read
                                        More</a>
                                    <div class="d-flex date-blog align-items-center blog-mt-16-xsm">
                                        <i class="fa-solid fa-calendar-days font-24"></i>
                                        <p class="gray-text ms-3">September 07, 2025</p>
                                    </div>
                                    </div>
                            </article>
                         </div>
                         <div class="col-lg-4 col-sm-12 col-12 d-flex align-content-stretch blog-mt-16 blog-item-add">
                            <article
                                class="blog-item"
                                data-category="other">
                                <div class="blog-body">
                                    <img loading="lazy" alt="blog-img" class="img-fluid border-radius"
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/codesclue_Express.JSBlogs.webp" />
                                    <h3 class="content-title text-left blog-mt-16">
                                        🚀 Everything You Need to Know About Express.js
                                    </h3>
                                    <p class="content-desc blog-mt-16">Are you a developer or business looking for a fast
                                        and efficient way to build web applications? Express.js is one of the most
                                        popular frameworks for Node.js, making backend development
                                        simpler and more scalable. Let's dive into...
                                    </p>
                                </div>
                                    <div class="d-flex-blog justify-content-between blog-mt-16">
                                    <a href="<?php echo home_url('/expressjs-blog/'); ?>"
                                        class="btn btn-dark py-2 px-sm-4 px-3">Read
                                        More</a>
                                    <div class="d-flex date-blog align-items-center blog-mt-16-xsm">
                                        <i class="fa-solid fa-calendar-days font-24"></i>
                                        <p class="gray-text ms-3">March 13, 2025</p>
                                    </div>
                                    </div>
                            </article>
                         </div>
                         <div class="col-lg-4 col-sm-12 col-12 d-flex align-content-stretch blog-mt-16 blog-item-add">
                            <article
                                class="blog-item "
                                data-category="other">
                                <div class="blog-body">
                                    <img loading="lazy" alt="blog-img" class="img-fluid border-radius"
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/codesclue_iosUpdate.webp" />
                                    <h3 class="content-title text-left blog-mt-16">
                                        🚀 Your App Stays Compliant with iOS 18 & Xcode 16
                                    </h3>
                                    <p class="content-desc blog-mt-16">Apple continuously evolves its ecosystem to
                                        enhance security,
                                        performance, and user experience. As part of its latest update, Apple has
                                        announced that
                                        starting April 24, 2025...
                                    </p>
                                </div>
                                <div class="blog-mt-16 d-flex-blog justify-content-between">
                                    <a href="<?php echo home_url('/iosupdate-blog/'); ?>"
                                        class="btn btn-dark py-2 px-sm-4 px-3">Read
                                        More</a>
                                    <div class="d-flex date-blog align-items-center blog-mt-16-xsm">
                                        <i class="fa-solid fa-calendar-days font-24"></i>
                                        <p class="gray-text ms-3">March 10, 2025</p>
                                    </div>
                                </div>
                            </article>
                         </div>
                         <div class="col-lg-4 col-sm-12 col-12 d-flex align-content-stretch blog-mt-16 blog-item-add">
                            <article
                                class="blog-item"
                                data-category="healthcare">
                                <div class="blog-body">
                                    <img loading="lazy" alt="blog-img" class="img-fluid border-radius"
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/codesclue_therapix-blog.webp" />
                                    <h3 class="content-title text-left blog-mt-16">
                                        Why therapix industry digitaliztion with web/mobile app and AI?
                                    </h3>
                                    <p class="content-desc blog-mt-16">Digital transformation is rapidly reshaping
                                        industries, and the Therapix sector is
                                        no exception. Incorporating web/mobile applications and AI into therapy services
                                        offers a comprehensive upgrade...
                                    </p>
                                </div>
                                 <div class="blog-mt-16 d-flex-blog justify-content-between">
                                    <a href="<?php echo home_url('/therapix-web-app-blog/'); ?>"
                                        class="btn btn-dark py-2 px-sm-4 px-3">Read
                                        More</a>
                                    <div class="d-flex date-blog align-items-center blog-mt-16-xsm">
                                        <i class="fa-solid fa-calendar-days font-24"></i>
                                        <p class="gray-text ms-3">February 26, 2025</p>
                                    </div>
                                </div>
                            </article>
                         </div>
                         <div class="col-lg-4 col-sm-12 col-12 d-flex align-content-stretch blog-mt-16 blog-item-add">
                            <article
                                class="blog-item"
                                data-category="other">
                                <div class="blog-body">
                                    <img loading="lazy" alt="blog-img" class="img-fluid border-radius"
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/codesclue_mongo_blog.webp" />
                                    <h3 class="content-title text-left blog-mt-16">
                                        Advantages & Disadvantages of MongoDB
                                    </h3>
                                    <p class="content-desc blog-mt-16">MongoDB is a widely adopted NoSQL database
                                        known
                                        for its flexibility, scalability, and high performance. Unlike traditional
                                        relational databases, MongoDB uses a document-oriented structure...
                                    </p>
                                </div>
                                <div class="blog-mt-16 d-flex-blog justify-content-between">
                                    <a href="<?php echo home_url('/mongodb-blog/'); ?>"
                                        class="btn btn-dark py-2 px-sm-4 px-3">Read
                                        More</a>
                                    <div class="d-flex date-blog align-items-center blog-mt-16-xsm">
                                        <i class="fa-solid fa-calendar-days font-24"></i>
                                        <p class="gray-text ms-3">February 22, 2025</p>
                                    </div>
                                </div>
                            </article>
                         </div>
                         <div class="col-lg-4 col-sm-12 col-12 d-flex align-content-stretch blog-mt-16 blog-item-add">
                            <article
                                class="blog-item"
                                data-category="uiux">
                                <div class="blog-body">
                                    <img loading="lazy" alt="blog-img" class="img-fluid border-radius"
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/codesclue_blog_7.webp" />
                                    <h3 class="content-title text-left blog-mt-16">
                                        Why Wireframes Are Essential Before Starting a New Project?
                                    </h3>
                                    <p class="content-desc blog-mt-16">Why Wireframes Are Essential Before
                                        Starting a New Project?
                                        Wireframes are a critical step in the project planning process. Here's why
                                        they are necessary:
                                        1. This is the first item in the list.
                                    </p>
                                </div>
                                <div class="blog-mt-16 d-flex-blog justify-content-between">
                                    <a href="<?php echo home_url('/wireframe-project-blog/'); ?>"
                                        class="btn btn-dark py-2 px-sm-4 px-3">Read
                                        More</a>
                                    <div class="d-flex date-blog align-items-center blog-mt-16-xsm">
                                        <i class="fa-solid fa-calendar-days font-24"></i>
                                        <p class="gray-text ms-3">December 10, 2024</p>
                                    </div>
                                </div>
                            </article>
                         </div>
                        <!-- Blog 1 -->
                         <div class="col-lg-4 col-sm-12 col-12 d-flex align-content-stretch blog-mt-16 blog-item-add">
                            <article
                                class="blog-item"
                                data-category="digital">
                                <div class="blog-body">
                                    <img loading="lazy" alt="blog-img" class="img-fluid border-radius"
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/codesclue_blog_1.webp" />
                                    <h3 class="content-title text-left blog-mt-16">
                                        Why Move to a Digital Business with Web and Mobile Apps?
                                    </h3>
                                    <p class="content-desc blog-mt-16">In today's fast-paced
                                        world, having a digital presence is no longer a luxury it's a necessity.
                                        Here's
                                        why transitioning to web and mobile apps can transform your business.
                                    </p>
                                </div>
                                <div class="blog-mt-16 d-flex-blog justify-content-between">
                                    <a href="<?php echo home_url('/move-digital-business-blog/'); ?>"
                                        class="btn btn-dark py-2 px-sm-4 px-3">Read
                                        More</a>
                                    <div class="d-flex date-blog align-items-center blog-mt-16-xsm">
                                        <i class="fa-solid fa-calendar-days font-24"></i>
                                        <p class="gray-text ms-3">December 03, 2024</p>
                                    </div>
                                </div>
                            </article>
                         </div>
                        <!-- Blog 2 -->
                         <div class="col-lg-4 col-sm-12 col-12 d-flex align-content-stretch blog-mt-16 blog-item-add">
                            <article
                                class="blog-item"
                                data-category="cannabis">
                                <div class="blog-body">
                                    <img loading="lazy" alt="blog-img" class="img-fluid border-radius"
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/codesclue_blog_2.webp" />
                                    <h3 class="content-title text-left blog-mt-16">
                                        Key Learnings from a Cannabis Production Deployment
                                    </h3>
                                    <p class="content-desc blog-mt-16">Deploying a production
                                        system in the cannabis industry is unlike any other sector, blending
                                        intricate
                                        regulatory frameworks with the need for seamless technological integration.
                                    </p>
                                </div>
                                <div class="blog-mt-16 d-flex-blog justify-content-between">
                                    <a href="<?php echo home_url('/cannabis-production-blog/'); ?>"
                                        class="btn btn-dark py-2 px-sm-4 px-3">Read
                                        More</a>
                                    <div class="d-flex date-blog align-items-center blog-mt-16-xsm">
                                        <i class="fa-solid fa-calendar-days font-24"></i>
                                        <p class="gray-text ms-3">November 26, 2024</p>
                                    </div>
                                </div>
                            </article>
                         </div>
                        <!-- Blog 3 -->
                         <div class="col-lg-4 col-sm-12 col-12 d-flex align-content-stretch blog-mt-16 blog-item-add">
                            <article
                                class="blog-item"
                                data-category="digital">
                                <div class="blog-body">
                                    <img loading="lazy" alt="blog-img" class="img-fluid border-radius"
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/codesclue_blog_3.webp" />
                                    <h3 class="content-title text-left blog-mt-16">
                                        CodesClue helped SaaS software company to scale</h3>
                                    <p class="content-desc blog-mt-16">Success Story: Scaling
                                        Beyond Borders! We at CodesClue are
                                        proud to have partnered with a leading SaaS software
                                        company, helping them scale their operations and achieve global reach. </p>
                                </div>
                                <div class="blog-mt-16 d-flex-blog justify-content-between">
                                    <a href="<?php echo home_url('/saas-software-blog/'); ?>"
                                        class="btn btn-dark py-2 px-sm-4 px-3">Read
                                        More</a>
                                    <div class="d-flex date-blog align-items-center blog-mt-16-xsm">
                                        <i class="fa-solid fa-calendar-days font-24"></i>
                                        <p class="gray-text ms-3">November 22, 2024</p>
                                    </div>
                                </div>
                            </article>
                         </div>
                         <!-- Blog 4 -->
                        <div class="col-lg-4 col-sm-12 col-12 d-flex align-content-stretch blog-mt-16 blog-item-add">
                            <article class="blog-item d-flex flex-column" data-category="ai cannabis">
                                <div class="blog-body">
                                <img loading="lazy" alt="blog-img" class="img-fluid border-radius"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/codesclue_blog_4.webp" />
                                <h3 class="content-title text-left blog-mt-16">
                                    The Future Cannabis Artificial Intelligence Revolution
                                </h3>
                                <p class="content-desc blog-mt-16">
                                    2024 🌿 The Future of Cannabis Meets Artificial Intelligence! 🤖 The cannabis
                                    industry is evolving at an unprecedented pace, and AI is leading the revolution.
                                </p>
                                </div>

                                <div class="blog-mt-16 d-flex-blog justify-content-between">
                                <a href="<?php echo home_url('/future-cannabis-ai-blog/'); ?>"
                                    class="btn btn-dark py-2 px-sm-4 px-3">Read More</a>
                                <div class="d-flex date-blog align-items-center blog-mt-16-xsm">
                                    <i class="fa-solid fa-calendar-days font-24"></i>
                                    <p class="gray-text ms-3 mb-0">November 15, 2024</p>
                                </div>
                                </div>
                            </article>
                        </div>

                        <!-- Blog 5 -->
                        <div class="col-lg-4 col-sm-12 col-12 d-flex align-content-stretch blog-mt-16 blog-item-add">
                            <article class="blog-item d-flex flex-column" data-category="taxiapp">
                                <div class="blog-body">
                                <img loading="lazy" alt="blog-img" class="img-fluid border-radius"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/codesclue_blog_5.webp" />
                                <h3 class="content-title text-left blog-mt-16">
                                    Unlocking High ROI with Expert Taxi App Development Solutions...
                                </h3>
                                <p class="content-desc blog-mt-16">
                                    🚖 Experience Taxi Like Never Before! Say goodbye to generic apps and step into a new era of ride-hailing
                                    with our next-gen, Figma-designed Taxi App where aesthetics meet innovation! 🌌✨
                                </p>
                                </div>

                                <div class="blog-mt-16 d-flex-blog justify-content-between">
                                <a href="<?php echo home_url('/taxiapp-blog/'); ?>"
                                    class="btn btn-dark py-2 px-sm-4 px-3">Read More</a>
                                <div class="d-flex date-blog align-items-center blog-mt-16-xsm">
                                    <i class="fa-solid fa-calendar-days font-24"></i>
                                    <p class="gray-text ms-3 mb-0">November 14, 2024</p>
                                </div>
                                </div>
                            </article>
                        </div>

                        <!-- Blog 6 -->
                        <div class="col-lg-4 col-sm-12 col-12 d-flex align-content-stretch blog-mt-16 blog-item-add">
                            <article class="blog-item d-flex flex-column" data-category="cannabis">
                                <div class="blog-body">
                                <img loading="lazy" alt="blog-img" class="img-fluid border-radius"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/codesclue_blog_6.webp" />
                                <h3 class="content-title text-left blog-mt-16">
                                    Why PWA app for Cannabis product???
                                </h3>
                                <p class="content-desc blog-mt-16">
                                    Creating a PWA (Progressive Web App) for a cannabis product offers several advantages that align with both
                                    industry challenges and modern user expectations.
                                </p>
                                </div>

                                <div class="blog-mt-16 d-flex-blog justify-content-between">
                                <a href="<?php echo home_url('/pwa-app-cannabis-blog/'); ?>"
                                    class="btn btn-dark py-2 px-sm-4 px-3">Read More</a>
                                <div class="d-flex date-blog align-items-center blog-mt-16-xsm">
                                    <i class="fa-solid fa-calendar-days font-24"></i>
                                    <p class="gray-text ms-3 mb-0">November 13, 2024</p>
                                </div>
                                </div>
                            </article>
                        </div>

                </div>
            </div>



</main>


<?php get_footer(); ?>