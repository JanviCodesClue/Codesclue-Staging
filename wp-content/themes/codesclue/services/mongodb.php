             <?php
/*
Template Name: Mongo BD Template
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
                                    <span class="section-subtitle char-anim" data-delay="0.75">MongoDB
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="breadcrumb-wrapper fade-anim" data-direction="left" data-offset="100"
                            data-delay="0.90">
                            <ul class="breadcrumb">
                                <li><a href="<?php echo home_url(''); ?>">HOME</a></li>
                                <li>MongoDB</li>
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
                                    <h2 class="section-title mb-0">MongoDB Web Development Services</h2>
                                </div>
                                <div class="subtitle-wrapper fade-anim py-4">
                                    <span class="section-subtitle">With features like schema-less data modeling and
                                        real-time
                                        analytics, MongoDB enables businesses to handle large volumes of data
                                        efficiently while
                                        ensuring high availability and seamless scalability.
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
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/services/MongoDB (1).jpg" alt="Team Working"
                        class="img-fluid float-up-down d-sm-none">
                </div>

                <!-- Text Content -->
                <div class="col-lg-6 col-md-10 text-services">
                    <h2> MongoDB Development Company in India</h2>
                    <p>
                        MongoDB is a NoSQL database designed for speed, scalability, and flexibility, making it
                        ideal for modern web, mobile, and cloud-based applications. With its schema-less
                        architecture, MongoDB enables businesses to handle large volumes of data efficiently
                        while supporting real-time analytics and high-performance queries.
                    </p><br>
                    <p>
                        At CodesClue, we specialize in MongoDB development, ensuring fast, secure, and scalable
                        database solutions for businesses of all sizes. Our expertise in MongoDB Atlas,
                        Aggregation Framework, and advanced indexing ensures optimized performance and seamless
                        data management.
                    </p><br>
                    <p>
                        Whether you're building a real-time application, a cloud-based solution, or a
                        high-traffic platform, our MongoDB services guarantee scalability, flexibility, and
                        reliability to support your business growth.
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
                                <i class="fa-solid fa-database text-primary font-24 bg-white rounded-2"></i>
                                <p class="content-sub-title text-left text-white mb-0">MongoDB Database Design &
                                    Optimization</p>
                                <span class="small-text text-white">We design scalable and high-performance
                                    MongoDB databases with efficient indexing, schema modeling, and data partitioning.
                                </span>
                            </div>
                            <div class="benifit-details py-xxl-0 py-md-3 py-2 d-flex flex-column gap-2">
                                <i class="fa-solid fa-leaf text-primary font-24 bg-white rounded-2"></i>
                                <p class="content-sub-title text-left text-white mb-0">Expert MongoDB Developers</p>
                                <span class="small-text text-white">With 4+ years of experience, our MongoDB
                                    professionals specialize in designing scalable, high-performance NoSQL databases
                                    optimized for flexibility, speed, and seamless data management.</span>
                            </div>
                        </div>
                        <div class="benifits-img">
                            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/react-native/codesclue_benefits-mobile.webp"
                                alt="benefits-mobile-image" />
                        </div>
                        <div
                            class="d-flex flex-column justify-content-md-around justify-content-center mt-md-4 text-justify">
                            <div class="benifit-details py-xxl-0 py-md-3 py-2 d-flex flex-column gap-2">
                                <i class="fa-solid fa-bolt text-primary font-24 bg-white rounded-2"></i>
                                <p class="content-sub-title text-left text-white mb-0">High-Speed Data Processing &
                                    Aggregation</p>
                                <span class="small-text text-white">We optimize MongoDB queries and use the
                                    Aggregation Framework for fast, real-time data analytics and reporting.</span>
                            </div>

                            <div class="benifit-details py-xxl-0 py-md-3 py-2 d-flex flex-column gap-2">
                                <i class="fa-solid fa-plug text-primary font-24 bg-white rounded-2"></i>
                                <p class="content-sub-title text-left text-white mb-0">MongoDB Integration & API
                                    Development</p>
                                <span class="small-text text-white">Our experts seamlessly integrate MongoDB
                                    with Node.js, Python, Java, and other back-end technologies, ensuring smooth data
                                    flow.</span>
                            </div>

                            <div class="benifit-details py-xxl-0 py-md-3 py-2 d-flex flex-column gap-2">
                                <i class="fa-solid fa-cloud text-primary font-24 bg-white rounded-2"></i>
                                <p class="content-sub-title text-left text-white mb-0">MongoDB Cloud & DevOps Solutions
                                </p>
                                <span class="small-text text-white">We deploy and manage MongoDB on AWS,
                                    Azure, and Google Cloud, ensuring high availability, auto-scaling, and backup
                                    solutions.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section>
            <div class="container mt-5">
                <div class="row justify-content-center">
                    <div class="col-lg-7 col-md-10">
                        <div>
                            <h2><b>Power Your Business with Flexible & Scalable MongoDB Development</b></h2>
                            <p class="mt-4">
                                MongoDB is the go-to NoSQL database for businesses looking for scalability, flexibility,
                                and high-speed data processing. As a document-oriented database, it efficiently handles
                                structured and unstructured data, making it ideal for modern web, mobile, and cloud
                                applications.
                            </p><br>
                            <p>
                                At CodesClue, we specialize in MongoDB development, leveraging MongoDB Atlas,
                                Aggregation Framework, and advanced indexing to create high-performance, scalable, and
                                secure database solutions. Our expertise ensures that your data is optimized for speed,
                                security, and seamless integration with your applications.
                            </p><br>
                            <p>
                                Whether you're building a real-time application, an enterprise solution, or a
                                cloud-based system, our MongoDB services provide efficiency, reliability, and
                                future-proof performance. Let us help you build next-generation applications with
                                cutting-edge MongoDB technologies.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-10 mt-sm-services">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/services/MongoDB (2).jpg" class="img-fluid rounded">
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
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/services/MongoDB (3).jpg"
                                class="services-circle-img active" alt="Image 4">
                        </div>
                    </div>

                </div>
            </div>
        </div>



    </main>


<?php get_footer(); ?>