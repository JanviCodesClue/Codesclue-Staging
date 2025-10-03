<?php
/**
 * The front page template file
 *
 * @package CodesClue
 */

get_header(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
    <title>CodesClue | Custom Software, Web & Mobile App Development Company</title>
    <meta name="description"
        content="CodesClue is a leading custom software development company delivering innovative web, mobile, and enterprise solutions. We help startups and businesses turn ideas into reality through tech.">
    <meta name="keywords"
        content="custom software development, mobile app development, web development company, enterprise solutions, UI/UX design, full-stack development, tech partner, software company India, CodesClue">
    <meta name="author" content="CodesClue">
    <meta property="og:type" content="website">
    <meta property="og:title" content="CodesClue – Innovating with Custom Web & Mobile Solutions">
    <meta property="og:description"
        content="Build smarter digital products with CodesClue. We specialize in software, app, and web development tailored for startups, enterprises, and fast-scaling businesses.">
    <meta property="og:url" content="https://www.codesclue.com/">
    <meta property="og:site_name" content="CodesClue">
    <meta property="og:image" content="https://www.codesclue.com/assets/images/codesclue_Logo_meta.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/codesclue_favicon.png">
    <link rel="sitemap" type="application/xml" title="Sitemap" href="https://www.codesclue.com/sitemap.xml">
    <meta name="robots" content="index, follow">
    <meta name="GOOGLEBOT" content="INDEX, FOLLOW">
    <meta name="geo.placename" content="STC 915, Cross, Road, near Ambli - Bopal Road, Ambli, Ahmedabad">
    <meta name="geo.region" content="IN-GJ">

    <!-- Open Publisher Meta -->
    <meta property="article:publisher" content="https://www.instagram.com/codesclue/">
    <meta name="publisher" content="CodesClue Technologies">

    <!-- Canonical Tag -->
    <link rel="canonical" href="https://www.codesclue.com/index.html">

    <!-- Open Graph Meta Tags (Instagram) -->
    <meta name="instagram:creator" content="@codesclue">
    <meta name="instagram:site" content="@codesclue">

    <!-- Additional Meta Tags -->
    <meta name="author" content="CodesClue">
    <meta name="theme-color" content="#108aff">

    <!-- DMCA -->
    <meta name='dmca-site-verification' content='cytwbzFKS2lwYVE2c0piMDhlSDJZbGUvT21CZXNlcThyZ3JUaHlITGVuRT01' />

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="https://twitter.com/CodesClue">
    <meta name="twitter:title" content="CodesClue | Custom Software, Web & Mobile App Development Company">
    <meta name="twitter:description"
        content="CodesClue is a leading custom software development company delivering innovative web, mobile, and enterprise solutions. We help startups and businesses turn ideas into reality through tech.">
    <meta name="twitter:site" content="@CodesClue">
    <meta name="twitter:image" content="https://www.codesclue.com/assets/images/codesclue_Logo_meta.png">

    <!-- Links -->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/aos.css">
    
    <!-- Custom FAQ Styles -->
    <style>
        .accordion-button:not(.collapsed) {
            background-color: #f8f9fa;
            color: #0c63e4;
        }
        .accordion-button:focus {
            box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
        }
        .accordion-collapse {
            transition: all 0.3s ease;
        }
        .accordion-body {
            padding: 1rem 1.25rem;
            background-color: #fff;
        }
        .faq-desc {
            margin-bottom: 0;
            line-height: 1.6;
        }
        
        /* Fix AOS opacity issue for FAQ section */
        .faq-section [data-aos^="fade"] {
            opacity: 1 !important;
        }
        
        .faq-section .accordion-body {
            opacity: 1 !important;
            visibility: visible !important;
        }
        
        .faq-section .accordion-collapse.show {
            opacity: 1 !important;
            visibility: visible !important;
        }
        
        /* Override any AOS animations that might interfere */
        .faq-section * {
            opacity: 1 !important;
        }
        
        /* Ensure FAQ content is always visible */
        .faq-section .content-desc,
        .faq-section .content-title {
            opacity: 1 !important;
            visibility: visible !important;
        }
        

    </style>

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/header.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/home.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/new.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/footer.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Favicon-icon -->
    <link rel="icon" type="image/webp" href="<?php echo get_template_directory_uri(); ?>/assets/images/codesclue_favicon.png" />

    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/counter.js" defer></script>

    <script type="application/ld+json" class="yoast-schema-graph">
        {
            "@context": "https://schema.org",
            "@type": "SoftwareCompany",
            "name": "CodesClue",
            "title": "[CodesClue | Custom Software, Web & Mobile App Development Company](https://www.codesclue.com/)",
            "description": "CodesClue is a leading custom software development company delivering innovative web, mobile, and enterprise solutions. We help startups and businesses turn ideas into reality through tech.",
            "image": "https://www.codesclue.com/assets/images/codesclue_Logo.png",
            "@id": "https://www.codesclue.com/",
            "telephone": "+91-99989-77764",
            "address": {
              "@type": "PostalAddress",
              "streetAddress": "STC-915",
              "addressLocality": "Bopal, Ahmedabad",
              "addressRegion": "GJ",
              "postalCode": "380058",
              "addressCountry": "India"
            },
            "geo": {
              "@type": "GeoCoordinates",
              "latitude": 23.0225,
              "longitude": 72.5714
            },
            "openingHoursSpecification": [
              {
                "@type": "OpeningHoursSpecification",
                "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
                "opens": "07:00",
                "closes": "21:00"
              }
            ]
          }
          
    </script>
    <!-- Google tag (gtag.js) -->
    <script>
        const disabledEnvironments = ['staging.codesclue.com', '127.0.0.1', 'localhost'];

        // Get the current hostname
        const currentHost = window.location.hostname;

        // Only load Google Analytics if the site is NOT in a disabled environment
        if (!disabledEnvironments.includes(currentHost)) {
            (function () {
                var script = document.createElement('script');
                script.async = true;
                script.src = "https://www.googletagmanager.com/gtag/js?id=G-1GMX7Q7FMN";
                document.head.appendChild(script);

                script.onload = function () {
                    window.dataLayer = window.dataLayer || [];
                    function gtag() { dataLayer.push(arguments); }
                    gtag('js', new Date());
                    gtag('config', 'G-1GMX7Q7FMN');
                };
            })();
        } else {
            console.log("Google Analytics disabled on this environment:", currentHost);
        }
    </script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/cacheBuster.js" defer></script>
</head>

<body>
    <!-- Main -->
    <main>
        <section class="ai-section">
            <div class="container">
                <div class="row align-items-center gy-5">
                    <!-- Left Text Section -->
                    <div class="col-md-7">
                        <div class="sub-icon text-muted">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/new/heroicon.svg">
                            <p class="ps-2">Empowering Growth Through
                                Intelligent AI Solutions</p>
                        </div>

                        <h1 class="ai-title">Get AI-Ready with</h1>
                        <div>
                            <span class="brand-highlight">Codes</span><span class="brand-text">Clue</span>
                        </div>
                        <p class="ai-subtitle">
                            CodesClue helps you embrace the future with
                            AI-powered platforms designed for growth and
                            agility. We turn your data into intelligent
                            systems built to adapt, learn, and lead.
                        </p>
                        <a href="<?php echo home_url('/ai-software-development/'); ?>" class="get-started-btn">Get
                            Started
                            <img src="<?php echo get_template_directory_uri(); ?>/assets//images/new/arrow.svg" class="btn-arrow" />
                        </a>
                    </div>

                    <!-- Right Image Section -->
                    <div class="col-md-5 ai-images">
                        <div class="row g-3">
                            <div class="col-12">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets//images/new/hero.png" alt="AI Concept" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
       <!-- <div class="parallax"> -->
<div class="parallax" data-speed="0.3"></div>

</div>



        <section class="expertise-section ">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h2 class="pt-3">Innovative Expertise</h2>
                        <div class="social-description">
                            <p> Dive into our world of creativity where
                                design meets purpose. Explore
                                thoughtfully
                                crafted visuals, UI concepts, and
                                branding experiences on platforms like
                                Dribbble and
                                Behance—each piece reflecting our
                                commitment to design excellence.</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <!-- Dribbble Button -->
                                <div class="btn-share mt-3">
                                    <span class="btn-text">Dribbble</span>
                                    <ul class="social-icons">
                                        <li>
                                            <a href="https://dribbble.com/CodesClue" target="_blank"
                                                rel="noopener noreferrer">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/new/dribble.svg" class="btn-img-40"
                                                    alt="Dribbble" />
                                            </a>
                                        </li>
                                    </ul>
                                    <a href="https://dribbble.com/CodesClue" class="btn-mobile-link" target="_blank"
                                        rel="noopener noreferrer"></a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <!-- Behance Button -->
                                <div class="btn-share mt-3">
                                    <span class="btn-text">Behance</span>
                                    <ul class="social-icons">
                                        <li>
                                            <a href="https://www.behance.net/codesclue" target="_blank"
                                                rel="noopener noreferrer">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/new/behance-1.svg" class="btn-img-40"
                                                    alt="Behance" />
                                            </a>
                                        </li>
                                    </ul>
                                    <a href="https://www.behance.net/codesclue" class="btn-mobile-link" target="_blank"
                                        rel="noopener noreferrer"></a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-8">
                        <p class="description">
                            CodesClue delivers smart, AI-driven
                            solutions that power business growth. We
                            build adaptive
                            systems designed for agility, innovation,
                            and lasting impact.
                        </p>

                        <div class="row custom-grid">
                            <div class="custom-col my-3">
                                <div >
                                    <h3>5+</h3>
                                    <p>Years of experience</p>
                                </div>
                            </div>

                            <div class="custom-col my-3">
                                <div >
                                    <h3>20+</h3>
                                    <p>Professional Teams</p>
                                </div>
                            </div>

                            <div class="custom-col my-3">
                                <div >
                                    <h3>12+</h3>
                                    <p>Successful Projects</p>
                                </div>
                            </div>

                            <div class="custom-col my-3">
                                <div >
                                    <h3>10+</h3>
                                    <p>Countries Globally</p>
                                </div>
                            </div>

                            <div class="custom-col my-3">
                                <div class="rating"><h3>5</h3> <span class="star">★</span></div>
                                <p>GoodFirm</p>
                            </div>

                            <div class="custom-col my-3">
                                <div class="rating"><h3>5</h3> <span class="star">★</span></div>
                                <p>Clutch</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </section>

        <div class="service-area-4 mt-5">
            <div class="service-area-4-inner section-spacing">
                <div class="container">
                    <div class="section-header">
                        <div class="section-title-wrapper fade-anim">
                            <div class="title-wrapper">
                                <h2 class="section-title aos-init aos-animate mb-0">AI
                                    Services That Connects the Future
                                </h2>
                            </div>
                            <div class="subtitle-wrapper">
                                <span class="section-subtitle">Our team
                                    build scalable, ethical, and
                                    adaptable AI that
                                    not only transforms operations but
                                    redefines customer
                                    experience.</span>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="services-wrapper-box fade-anim">
                    <div class="container">
                        <div class="services-wrapper">
                            <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="pills-Artificial-Intelligence-tab"
                                        data-bs-toggle="pill" href="#pills-Artificial-Intelligence" role="tab"
                                        aria-controls="pills-Artificial-Intelligence" aria-selected="true">
                                        <div class="service-name">
                                            <span class="title">Artificial
                                                Intelligence</span>

                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="pills-Blockchain-tab" data-bs-toggle="pill"
                                        href="#pills-Blockchain" role="tab" aria-controls="pills-Blockchain"
                                        aria-selected="false">
                                        <div class="service-name">
                                            <span class="title">Blockchain</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="pills-Big-Data-tab" data-bs-toggle="pill"
                                        href="#pills-Big-Data" role="tab" aria-controls="pills-Big-Data"
                                        aria-selected="false">
                                        <div class="service-name">
                                            <span class="title">Big
                                                Data</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="pills-Computer-Vision-tab" data-bs-toggle="pill"
                                        href="#pills-Computer-Vision" role="tab" aria-controls="pills-Computer-Vision"
                                        aria-selected="false">
                                        <div class="service-name">
                                            <span class="title">Computer
                                                Vision</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="pills-Mixed-Reality-tab" data-bs-toggle="pill"
                                        href="#pills-Mixed-Reality" role="tab" aria-controls="pills-Mixed-Reality"
                                        aria-selected="false">
                                        <div class="service-name">
                                            <span class="title">Mixed
                                                Reality</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="pills-Internet-Things-tab" data-bs-toggle="pill"
                                        href="#pills-Internet-Things" role="tab" aria-controls="pills-Internet-Things"
                                        aria-selected="false">
                                        <div class="service-name">
                                            <span class="title">Internet
                                                of Things</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>

                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane  show active" id="pills-Artificial-Intelligence" role="tabpanel"
                                    aria-labelledby="pills-Artificial-Intelligence-tab" tabindex="0">
                                    <div class="service-box-4">
                                        <div class="content-ai">
                                            <h3 class="title">Artificial
                                                Intelligence</h3>
                                            <p class="text-ai">In
                                                today's fast-paced
                                                digital landscape,
                                                leveraging
                                                Artificial Intelligence
                                                isn't a luxury, it's a
                                                necessity. If you're not
                                                tapping into AI's full
                                                potential, chances
                                                are your competitors
                                                already are.</p>
                                            <ul>
                                                <li class="text-ai">AI
                                                    is no longer
                                                    optional – it's
                                                    essential
                                                    for modern
                                                    business
                                                    success.</li>
                                                <li class="text-ai">Your
                                                    competitors are
                                                    likely already using
                                                    AI to gain an
                                                    edge.</li>
                                                <li class="text-ai">Suitable
                                                    for startups, SMEs,
                                                    and large
                                                    enterprises
                                                    alike.</li>
                                                <li class="text-ai">Drives
                                                    operational
                                                    efficiency and
                                                    smarter
                                                    decision-making.</li>
                                                <li class="text-ai">Seamlessly
                                                    integrates into your
                                                    existing
                                                    tech
                                                    infrastructure.</li>
                                                <li class="text-ai">Acts
                                                    as a powerful
                                                    extension of your
                                                    current systems.
                                                </li>
                                                <li class="text-ai">Helps
                                                    future-proof your
                                                    business with
                                                    scalable
                                                    intelligence.</li>
                                                <li class="text-ai">Enables
                                                    automation,
                                                    insights, and
                                                    innovation across
                                                    functions.</li>
                                                <li class="text-ai">Fast-track
                                                    digital
                                                    transformation
                                                    without
                                                    rebuilding
                                                    from scratch.</li>
                                                <li class="text-ai">Stay
                                                    ahead of the curve
                                                    with tailored AI
                                                    solutions.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane " id="pills-Blockchain" role="tabpanel"
                                    aria-labelledby="pills-Blockchain-tab" tabindex="0">
                                    <div class="service-box-4">
                                        <div class="content-ai">
                                            <h3 class="title">Blockchain</h3>
                                            <p class="text-ai">Empower
                                                your business with
                                                transparency, security,
                                                and
                                                decentralization.
                                                Blockchain is
                                                revolutionizing how
                                                industries handle data,
                                                transactions, and
                                                trust.</p>
                                            <ul>
                                                <li class="text-ai">Enhances
                                                    data transparency
                                                    and traceability.
                                                </li>
                                                <li class="text-ai">
                                                    Eliminates
                                                    intermediaries,
                                                    reducing costs
                                                    and delays.
                                                </li>
                                                <li class="text-ai">Ensures
                                                    secure and immutable
                                                    transactions.
                                                </li>
                                                <li class="text-ai">Ideal
                                                    for supply chain,
                                                    finance, and
                                                    identity
                                                    systems.
                                                </li>
                                                <li class="text-ai">Supports
                                                    smart contract
                                                    automation.</li>
                                                <li class="text-ai">Increases
                                                    customer and partner
                                                    trust.
                                                </li>
                                                <li class="text-ai">Decentralized
                                                    systems with
                                                    enhanced control.
                                                </li>
                                                <li class="text-ai">Scalable
                                                    for enterprise-grade
                                                    applications.
                                                </li>
                                                <li class="text-ai">Reduces
                                                    fraud and enhances
                                                    accountability.
                                                </li>
                                                <li class="text-ai">Next-gen
                                                    tech for digital
                                                    trust and
                                                    compliance.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane " id="pills-Big-Data" role="tabpanel"
                                    aria-labelledby="pills-Big-Data-tab" tabindex="0">
                                    <div class="service-box-4">
                                        <div class="content-ai">
                                            <h3 class="title">Big
                                                Data</h3>
                                            <p class="text-ai">Unlock
                                                the power of your data.
                                                Our Big Data
                                                solutions help
                                                you collect, process,
                                                and analyze vast volumes
                                                of
                                                information to uncover
                                                hidden patterns and
                                                actionable
                                                insights. Make data your
                                                most valuable asset.</p>
                                            <ul>
                                                <li class="text-ai">Manage
                                                    and process massive
                                                    datasets with
                                                    ease.</li>
                                                <li class="text-ai">Extract
                                                    meaningful insights
                                                    from complex
                                                    data.
                                                </li>
                                                <li class="text-ai">Real-time
                                                    analytics for
                                                    smarter decisions.
                                                </li>
                                                <li class="text-ai">Improves
                                                    operational
                                                    efficiency.
                                                </li>
                                                <li class="text-ai">Supports
                                                    machine learning and
                                                    AI integration.
                                                </li>
                                                <li class="text-ai">Optimize
                                                    customer experiences
                                                    and retention.
                                                </li>
                                                <li class="text-ai">Drive
                                                    revenue growth
                                                    through data-driven
                                                    strategies.
                                                </li>
                                                <li class="text-ai">Handle
                                                    structured and
                                                    unstructured data
                                                    effectively.
                                                </li>
                                                <li class="text-ai">Scale
                                                    effortlessly as your
                                                    data grows.</li>
                                                <li class="text-ai">Make
                                                    confident, informed
                                                    business decisions.
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane " id="pills-Computer-Vision" role="tabpanel"
                                    aria-labelledby="pills-Computer-Vision-tab" tabindex="0">
                                    <div class="service-box-4">
                                        <div class="content-ai">
                                            <h3 class="title">Computer
                                                Vision</h3>
                                            <p class="text-ai">Give your
                                                applications the power
                                                to see and
                                                interpret the
                                                world. Our computer
                                                vision systems enable
                                                real-time object
                                                recognition, facial
                                                analysis, scene
                                                understanding, and
                                                more-transforming
                                                industries like
                                                retail.</p>
                                            <ul>
                                                <li class="text-ai">Real-time
                                                    object and facial
                                                    recognition.</li>
                                                <li class="text-ai">Enhance
                                                    automation in
                                                    surveillance and
                                                    retail.
                                                </li>
                                                <li class="text-ai">Streamline
                                                    operations with
                                                    visual data
                                                    analytics.</li>
                                                <li class="text-ai">Improve
                                                    quality control in
                                                    manufacturing.
                                                </li>
                                                <li class="text-ai">Enable
                                                    AR experiences with
                                                    environment
                                                    tracking.</li>
                                                <li class="text-ai">Boost
                                                    safety through
                                                    intelligent
                                                    monitoring.
                                                </li>
                                                <li class="text-ai">Optimize
                                                    medical imaging
                                                    diagnostics.</li>
                                                <li class="text-ai">Bridge
                                                    digital and physical
                                                    worlds with
                                                    vision AI.</li>
                                                <li class="text-ai">Custom
                                                    models for
                                                    industry-specific
                                                    needs.
                                                </li>
                                                <li class="text-ai">Transform
                                                    cameras into smart
                                                    data sensors.
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane " id="pills-Mixed-Reality" role="tabpanel"
                                    aria-labelledby="pills-Mixed-Reality-tab" tabindex="0">
                                    <div class="service-box-4">
                                        <div class="content-ai">
                                            <h3 class="title">Mixed
                                                Reality</h3>
                                            <p class="text-ai">Blend
                                                physical and digital
                                                experiences to create
                                                immersive environments
                                                for training,
                                                collaboration, and
                                                product
                                                visualization. Mixed
                                                Reality opens new
                                                dimensions in user
                                                interaction
                                                how we learn and
                                                engage.</p>
                                            <ul>
                                                <li class="text-ai">Bridge
                                                    the physical and
                                                    digital worlds.</li>
                                                <li class="text-ai">Train
                                                    employees in
                                                    risk-free virtual
                                                    environments.
                                                </li>
                                                <li class="text-ai">Enhance
                                                    collaboration
                                                    through spatial
                                                    computing.</li>
                                                <li class="text-ai">Visualize
                                                    products in
                                                    real-world settings.
                                                </li>
                                                <li class="text-ai">Create
                                                    immersive brand
                                                    experiences.</li>
                                                <li class="text-ai">Increase
                                                    engagement and
                                                    retention through
                                                    interactivity.
                                                </li>
                                                <li class="text-ai">Supports
                                                    AR/VR hardware like
                                                    HoloLens,
                                                    Oculus, and
                                                    more.</li>
                                                <li class="text-ai">Ideal
                                                    for real estate,
                                                    education, and
                                                    healthcare.</li>
                                                <li class="text-ai">Custom
                                                    simulations for
                                                    enterprise
                                                    applications.</li>
                                                <li class="text-ai">Drive
                                                    innovation with
                                                    interactive
                                                    technology.
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane " id="pills-Internet-Things" role="tabpanel"
                                    aria-labelledby="pills-Internet-Things-tab" tabindex="0">
                                    <div class="service-box-4">
                                        <div class="content-ai">
                                            <h3 class="title">Internet
                                                of Things</h3>
                                            <p class="text-ai">In
                                                today's fast-paced
                                                digital landscape,
                                                leveraging
                                                Artificial Intelligence
                                                isn't a luxury, it's a
                                                necessity. If you're not
                                                tapping into AI's full
                                                potential, chances
                                                are your competitors
                                                already are.</p>
                                            <ul>
                                                <li class="text-ai">AI
                                                    is no longer
                                                    optional - it's
                                                    essential for modern
                                                    business
                                                    success.</li>
                                                <li class="text-ai">Your
                                                    competitors are
                                                    likely already using
                                                    AI to gain
                                                    an edge.
                                                </li>
                                                <li class="text-ai">Suitable
                                                    for startups, SMEs,
                                                    and large
                                                    enterprises
                                                    alike.</li>
                                                <li class="text-ai">Drives
                                                    operational
                                                    efficiency and
                                                    smarter
                                                    decision-making.</li>
                                                <li class="text-ai">Seamlessly
                                                    integrates into your
                                                    existing tech
                                                    infrastructure.</li>
                                                <li class="text-ai">Acts
                                                    as a powerful
                                                    extension of your
                                                    current
                                                    systems.</li>
                                                <li class="text-ai">Helps
                                                    future-proof your
                                                    business with
                                                    scalable
                                                    intelligence.</li>
                                                <li class="text-ai">Enables
                                                    automation,
                                                    insights, and
                                                    innovation across
                                                    functions.</li>
                                                <li class="text-ai">Fast-track
                                                    digital
                                                    transformation
                                                    without rebuilding
                                                    from scratch.</li>
                                                <li class="text-ai">Stay
                                                    ahead of the curve
                                                    with tailored AI
                                                    solutions.
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Services -->
        <section class="tech-showcase py-5">
            <div class="container position-relative">

                <!-- Radio Buttons (Hidden) -->
                <input type="radio" name="tab" id="tab-1" checked class="d-none">
                <input type="radio" name="tab" id="tab-2" class="d-none">
                <input type="radio" name="tab" id="tab-3" class="d-none">
                <input type="radio" name="tab" id="tab-4" class="d-none">

                <div class="row align-items-end flex-column flex-lg-row ">
                    <!-- Left Side -->
                    <div class="custom-col-lg-4">
                        <h2 class="mb-5 fs-2 fw-bold aos-init aos-animate">Explore
                            the Technologies Behind Our
                            Solutions</h2>
                        <div class="d-flex flex-wrap gap-2">
                            <label for="tab-1" class="btn-tab">Frontend</label>
                            <label for="tab-2" class="btn-tab">Backend</label>
                            <label for="tab-3" class="btn-tab">Database</label>
                            <label for="tab-4" class="btn-tab">UI/UX &
                                Graphics Design</label>
                        </div>
                    </div>

                    <!-- Right Side -->
                    <div class="custom-col-lg-6">
                        <div class="tab-box shadow-sm rounded p-4 bg-white">

                            <!-- Frontend -->
                            <div class="tab-content tab-1 d-flex flex-wrap gap-4 justify-content-start">

                                <a href="<?php echo home_url('/technology-ios/'); ?>" class="tech-pill"
                                    data-desc="10+ years crafting intuitive, high-quality iOS apps aligned with Apple's ecosystem.">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets//images/header/main_icon/codesclue_ios.svg" loading="lazy"
                                        alt="iOS">
                                    <span class="pill-content">iOS</span>
                                </a>
                                <a href="<?php echo home_url('/technology-android/'); ?>" class="tech-pill"
                                    data-desc="8+ years building fast, scalable Android apps for business growth.">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets//images/header/main_icon/codesclue_android.svg" loading="lazy"
                                        alt="Android">
                                    <span class="pill-content">Android</span>
                                </a>
                                <a href="<?php echo home_url('/technology-react-native/'); ?>" class="tech-pill"
                                    data-desc="5+ years creating cross-platform apps with native-like experience.">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets//images/header/main_icon/codesclue_react.svg" loading="lazy"
                                        alt="React Native">
                                    <span class="pill-content">React
                                        Native</span>
                                </a>
                                <a href="<?php echo home_url('/technology-flutter/'); ?>" class="tech-pill"
                                    data-desc="5+ years building dynamic, scalable Flutter apps with great UX.">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets//images/header/main_icon/codesclue_flutter.svg" loading="lazy"
                                        alt="Flutter">
                                    <span class="pill-content">Flutter</span>
                                </a>
                                <a href="<?php echo home_url('/html-page/'); ?>" class="tech-pill"
                                    data-desc="5+ years crafting responsive UIs using modern HTML frameworks.">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets//images/header/main_icon/codesclue_html.svg" loading="lazy"
                                        alt="HTML">
                                    <span class="pill-content">HTML</span>
                                </a>
                                <a href="<?php echo home_url('/css/'); ?>" class="tech-pill"
                                    data-desc="5+ years designing with CSS and SASS.">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets//images/header/main_icon/codesclue_css.svg" loading="lazy"
                                        alt="CSS">
                                    <span class="pill-content">CSS</span>
                                </a>
                                <a class="tech-pill" data-desc="3+ years building fast, Designing with Talwin CSS.">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets//images/header/main_icon/codesclue_talwind css.svg" loading="lazy"
                                        alt="Talwin">
                                    <span class="pill-content">Talwin
                                        CSS</span>
                                </a>
                                <a class="tech-pill" data-desc="5+ years building fast,style with Bootstrap.">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets//images/header/main_icon/codesclue_bootstap.svg" loading="lazy"
                                        alt="Bootstrap">
                                    <span class="pill-content">Bootstrap</span>
                                </a>
                                <a href="<?php echo home_url('/technology-angular/'); ?>" class="tech-pill"
                                    data-desc="6+ years creating dynamic, enterprise-grade Angular applications.">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets//images/header/main_icon/codesclue_angular.svg" loading="lazy"
                                        alt="Angular">
                                    <span class="pill-content">Angular</span>
                                </a>
                                <a href="<?php echo home_url('/technology-reactjs/'); ?>" class="tech-pill"
                                    data-desc="6+ years building fast, modern UIs with React.js.">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets//images/header/main_icon/codesclue_react.svg" loading="lazy"
                                        alt="ReactJS">
                                    <span class="pill-content">React.js</span>
                                </a>
                                <a href="<?php echo home_url('/vue-js/'); ?>" class="tech-pill"
                                    data-desc="5+ years building fast Programing with Vue JS.">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets//images/header/main_icon/codesclue_vue js.svg" loading="lazy"
                                        alt="Vue">
                                    <span class="pill-content">Vue.js</span>
                                </a>
                                <a class="tech-pill" data-desc="3+ years building fast website with Next JS.">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets//images/header/main_icon/codesclue_next js.svg" loading="lazy"
                                        alt="next">
                                    <span class="pill-content">Next.js</span>
                                </a>

                            </div>

                            <!-- Backend -->
                            <div class="tab-content tab-2 d-none flex-wrap gap-4">
                                <a href="<?php echo home_url('/php/'); ?>" class="tech-pill"
                                    data-desc="8+ years developing robust web apps with PHP and its frameworks.">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets//images/header/main_icon/codesclue_php.svg" loading="lazy"
                                        alt="PHP">
                                    <span class="pill-content">PHP</span>
                                </a>
                                <a href="<?php echo home_url('/dotnet/'); ?>" class="tech-pill"
                                    data-desc="4+ years building secure, scalable apps with .NET technologies.">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets//images/header/main_icon/codesclue_dotnet.svg" loading="lazy"
                                        alt=".NET">
                                    <span class="pill-content">.NET</span>
                                </a>
                                <a href="<?php echo home_url('/technology-nodejs/'); ?>" class="tech-pill"
                                    data-desc="5+ years developing real-time, high-performance Node.js apps.">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets//images/header/main_icon/codesclue_node.svg" loading="lazy"
                                        alt="NodeJS">
                                    <span class="pill-content">Node.js</span>
                                </a>
                                <a href="<?php echo home_url('/technology-ror/'); ?>" class="tech-pill"
                                    data-desc="4+ years building secure, scalable apps with Ruby on Rails.">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets//images/header/main_icon/codesclue_ror.svg" loading="lazy"
                                        alt="RoR">
                                    <span class="pill-content">Ruby on
                                        Rails</span>
                                </a>
                                <a href="<?php echo home_url('/swift/'); ?>" class="tech-pill"
                                    data-desc="6+ years developing high-performance iOS apps using Swift.">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets//images/header/main_icon/codesclue_swift.svg" loading="lazy"
                                        alt="Swift">
                                    <span class="pill-content">Swift</span>
                                </a>
                                <a href="<?php echo home_url('/kotlin/'); ?>" class="tech-pill"
                                    data-desc="8+ years crafting efficient Android apps using Kotlin.">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets//images/header/main_icon/codesclue_kotlin.svg" loading="lazy"
                                        alt="Kotlin">
                                    <span class="pill-content">Kotlin</span>
                                </a>
                                <a href="<?php echo home_url('/java/'); ?>" class="tech-pill"
                                    data-desc="3+ years building secure, scalable Java apps with Spring, Hibernate.">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets//images/header/main_icon/codesclue_java.svg" loading="lazy"
                                        alt="Java">
                                    <span class="pill-content">Java</span>
                                </a>
                                <a class="tech-pill" data-desc="2+ years build a programing with Python.">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets//images/header/main_icon/codesclue_python.svg" loading="lazy"
                                        alt="python">
                                    <span class="pill-content">Python</span>
                                </a>
                                <a class="tech-pill" data-desc="3+ years build a programing with C++.">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets//images/header/main_icon/codesclue_c-plus.svg" loading="lazy"
                                        alt="C++">
                                    <span class="pill-content">C++</span>
                                </a>
                            </div>

                            <!-- Database -->
                            <div class="tab-content tab-3 d-none flex-wrap gap-4">
                                <a href="<?php echo home_url('/mongo-db/'); ?>" class="tech-pill"
                                    data-desc="4+ years designing flexible, fast solutions with MongoDB.">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets//images/header/main_icon/codesclue_mongodb.svg" loading="lazy"
                                        alt="MongoDB">
                                    <span class="pill-content">MongoDB</span>
                                </a>
                                <a class="tech-pill" data-desc="4+ years designing fast solutions with Firbase.">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets//images/header/main_icon/codesclue_firebase.svg" loading="lazy"
                                        alt="firebase">
                                    <span class="pill-content">Firebase</span>
                                </a>
                                <a class="tech-pill" data-desc="4+ years build a programing with My SQL.">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets//images/header/main_icon/codesclue_sql.svg" loading="lazy"
                                        alt="SQL">
                                    <span class="pill-content">My
                                        SQL</span>
                                </a>
                                <a class="tech-pill" data-desc="3+ years build a programing with MSQL.">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets//images/header/main_icon/codesclue_msql.svg" loading="lazy"
                                        alt="msql">
                                    <span class="pill-content">M-SQL</span>
                                </a>
                                <a class="tech-pill" data-desc="3+ years build a programing with SQL Lite.">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets//images/header/main_icon/codesclue_sqllite.svg" loading="lazy"
                                        alt="sqlLite">
                                    <span class="pill-content">SQL
                                        Lite</span>
                                </a>
                                <a class="tech-pill" data-desc="3+ years build a programing with PgSQL.">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets//images/header/main_icon/codesclue_pgsql.svg" loading="lazy"
                                        alt="pgsql">
                                    <span class="pill-content">Pg
                                        SQL</span>
                                </a>
                            </div>

                            <!-- UI/UX -->
                            <div class="tab-content tab-4 d-none flex-wrap gap-4">
                                <a class="tech-pill"
                                    data-desc="4+ years designing seamless UI/UX experiences with Figma.">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets//images/header/main_icon/codesclue_figma.svg" loading="lazy"
                                        alt="Figma">
                                    <span class="pill-content">Figma</span>
                                </a>
                                <a class="tech-pill"
                                    data-desc="3+ years building interactive prototypes with Adobe XD.">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets//images/header/main_icon/codesclue_xd.svg" loading="lazy" alt="XD">
                                    <span class="pill-content">Adobe
                                        XD</span>
                                </a>
                                <a class="tech-pill"
                                    data-desc="5+ years crafting pixel-perfect visuals with Photoshop.">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets//images/header/main_icon/codesclue_ps.svg" loading="lazy"
                                        alt="Photoshop">
                                    <span class="pill-content">Adobe
                                        Photoshop</span>
                                </a>
                                <a class="tech-pill"
                                    data-desc="5+ years creating scalable vector magic with Illustrator.">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets//images/header/main_icon/codesclue_illustrator.svg" loading="lazy"
                                        alt="Illustrator">
                                    <span class="pill-content">Adobe
                                        Illustrator</span>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="container mb-3 py-2 border-bottom border-dark">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-6">
                    <p class="text-muted mb-1">The Technologies Behind
                        Our Solutions</p>
                    <h2 class="section-title">Solution Stack</h2>
                </div>
                <div class="col-md-5 d-flex justify-content-md-end justify-content-start my-3  mt-md-0 gap-2">

                    <a href="<?php echo home_url('/our-portfolio/'); ?>" class="get-started-btn">View All
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/new/arrow.svg" class="btn-arrow" />
                    </a>
                </div>
            </div>
        </div>

        <div class="container py-4">
            <div class="row gy-4">
                <div class="col-md-6">

                    <a href="https://greenreleafdispensary.com/" class="fs-4 ps-2 text-decoration-underline"
                        target="_blank" style="color: #2bb34b !important;">GreenReleaf</a>

                    <div class="project-card">
                        <div class="media-wrapper">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/new/Cannabis.png" alt="Project Image" class="project-img">

                            <div class="video-overlay">
                                <video class="project-video" muted loop playsinline>
                                    <source src="<?php echo get_template_directory_uri(); ?>/assets/videos/Green-Releaf.mp4" type="video/mp4">
                                    Your browser does not support the
                                    video tag.
                                </video>
                            </div>
                        </div>

                        <div class="glass-info position-absolute bottom-0 text-white">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">AI-Driven Smart
                                    Search</h5>
                                <a href="<?php echo home_url('/greenreleaf/'); ?>" class="circle-btn">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/new/arrow.svg" width="20" height="20" alt="Arrow">
                                </a>
                            </div>
                            <div class="info-description">
                                <p class="mb-0">We developed a cannabis
                                    e-commerce platform and PWA with an
                                    AI-powered
                                    search engine that understands
                                    natural language like "chill edibles
                                    under $30."</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project Card 2 -->
                <div class="col-md-6">
                    <a href="https://therapix.ai/" class="fs-4 ps-2 text-decoration-underline" target="_blank"
                        style="color: #0c316b !important;">Therapix</a>

                    <div class="project-card">
                        <div class="media-wrapper">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/new/Therapix.png" alt="Project Image" class="project-img">

                            <div class="video-overlay">
                                <video class="project-video" muted loop playsinline>
                                    <source src="<?php echo get_template_directory_uri(); ?>/assets/videos/Therapix.mp4" type="video/mp4">
                                    Your browser does not support the
                                    video tag.
                                </video>
                            </div>
                        </div>

                        <div class="glass-info position-absolute bottom-0 text-white">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">AI-Powered Clinical
                                    Insights</h5>
                                <a href="<?php echo home_url('/therapix/'); ?>" class="circle-btn">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/new/arrow.svg" width="20" height="20" alt="Arrow">
                                </a>
                            </div>
                            <div class="info-description">
                                <p class="mb-0">Therapix helps
                                    physiotherapists work smarter with
                                    AI that records
                                    sessions, extracts key insights,
                                    suggests treatments, and offers
                                    real-time support.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Our trusted Client -->
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
                            <img src="<?php echo get_template_directory_uri(); ?>/assets//images/client-logo/codesclue_GR_Icon.webp" class="clients-logo"
                                alt="client-logo" />
                            <img src="<?php echo get_template_directory_uri(); ?>/assets//images/client-logo/codesclue_therapix-02.svg" class="clients-logo"
                                alt="client-logo" />
                            <img src="<?php echo get_template_directory_uri(); ?>/assets//images/client-logo/codesclue_client-01.webp" class="clients-logo"
                                alt="client-logo" />
                            <img src="<?php echo get_template_directory_uri(); ?>/assets//images/client-logo/codesclue_NLB_Icon.webp" class="clients-logo"
                                alt="client-logo" />
                            <img src="<?php echo get_template_directory_uri(); ?>/assets//images/client-logo/codesclue_RideReachLogo.webp" class="clients-logo"
                                alt="client-logo" />    
                            <img src="<?php echo get_template_directory_uri(); ?>/assets//images/client-logo/codesclue_AZER_Icon.webp" class="clients-logo"
                                alt="client-logo" />
                            <img src="<?php echo get_template_directory_uri(); ?>/assets//images/client-logo/codesclue_Trackntake.webp" class="clients-logo"
                                alt="client-logo" />
                            <img src="<?php echo get_template_directory_uri(); ?>/assets//images/client-logo/codesclue_MAZADY_Icon.webp" class="clients-logo"
                                alt="client-logo" />
                            <img src="<?php echo get_template_directory_uri(); ?>/assets//images/client-logo/codesclue_VERKOOP_Icon.webp" class="clients-logo"
                                alt="client-logo" />
                            <img src="<?php echo get_template_directory_uri(); ?>/assets//images/client-logo/codesclue_mrbolat.webp" class="clients-logo"
                                alt="client-logo" />
                            <img src="<?php echo get_template_directory_uri(); ?>/assets//images/client-logo/codesclue_TFL_Icon.webp" class="clients-logo"
                                alt="client-logo" />

                            <!-- Add more logos here -->
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- FAQ Section-->
        <section class="faq-section section-40 bg-linear-white" id="faqSection">
            <div class="container z-11">
                <div class="row mx-0 px-0">
                    <div class="col-lg-7 px-lg-0 px-0">
                        <h2 class="section-title">FAQs</h2>
                    </div>
                    <div class="col-lg-5 px-lg-0 px-0">
                        <p class="section-description">Our
                            expert advisors can help you find the right
                            workplace
                            solution for you and your team.</p>
                    </div>
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h3 class="accordion-header content-title mb-0">
                                <button class="accordion-button collapsed fw-semibold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    Why should you consider
                                    investing in app development
                                    services?
                                </button>
                            </h3>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p class="faq-desc content-desc text-left" data-aos="fade-up">
                                        Mobile app development can
                                        help businesses be more
                                        visible and capture a
                                        larger market.
                                        As it caters to immediate
                                        gratification, you will
                                        notice increased
                                        conversions.
                                        The mobile app is accessible
                                        and usable, so more people
                                        can use it on
                                        the go, even when the
                                        Internet is unavailable.
                                        You can boost customer
                                        engagement with mobile app
                                        solutions, eventually
                                        increasing retention.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-aos="fade-down">
                            <h3 class="accordion-header content-title mb-0">
                                <button class="accordion-button collapsed fw-semibold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    How much does it cost to make a
                                    Mobile & Web App?
                                </button>
                            </h3>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p class="faq-desc content-desc text-left" data-aos="fade-up">
                                        The approximate cost of app
                                        development software is
                                        between $5000 and $50000.
                                        The app development cost
                                        depends on the type of
                                        application, i.e., web
                                        or mobile
                                        application.<br><br>
                                        It also differs according to
                                        the complexity of the
                                        software application.
                                        If you are planning a simple
                                        application, it will take
                                        approximately two
                                        months to go from ideation
                                        to completion.
                                        The development cost starts
                                        at $5000. For a highly
                                        advanced solution, the
                                        development cost goes up to
                                        $50000.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-aos="fade-down">
                            <h3 class="accordion-header content-title mb-0">
                                <button class="accordion-button collapsed fw-semibold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                    aria-expanded="false" aria-controls="flush-collapseThree">
                                    How can I hire app developers
                                    from CodesClue?
                                </button>
                            </h3>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p class="faq-desc content-desc text-left" data-aos="fade-up">
                                        After scouting the profiles,
                                        you can choose the
                                        developers and designers
                                        that fit your development
                                        requirements.
                                        Once you have the team, you
                                        can connect with the client
                                        service team to
                                        identify the best engagement
                                        model for you.
                                        You can then sign a contract
                                        with NDA to ensure both
                                        parties agree on
                                        maintaining the records.
                                        It is very crucial to ensure
                                        all the requirements and
                                        work scope is
                                        defined before proceeding
                                        with the contract signing.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-aos="fade-down">
                            <h3 class="accordion-header content-title mb-0">
                                <button class="accordion-button collapsed fw-semibold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false"
                                    aria-controls="flush-collapseFour">
                                    Do you allow flexible hiring
                                    models?
                                </button>
                            </h3>
                            <div id="flush-collapseFour" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p class="faq-desc content-desc text-left" data-aos="fade-up">
                                        We offer flexible hiring
                                        models as a leading offshore
                                        app development
                                        company.
                                        We offer three types of
                                        models. In the first one,
                                        you can hire the
                                        developer/designer by
                                        offering them hourly
                                        rates.<br><br>
                                        In the fixed model, you will
                                        hire them as a retainer. You
                                        can offer them
                                        a fixed price for your
                                        defined work scope.
                                        Lastly, you can hire a
                                        dedicated team of developers
                                        for the software
                                        solution.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-aos="fade-down">
                            <h3 class="accordion-header content-title mb-0">
                                <button class="accordion-button collapsed fw-semibold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false"
                                    aria-controls="flush-collapseFive">
                                    Which Industry-Specific App
                                    Development Services are you
                                    providing?
                                </button>
                            </h3>
                            <div id="flush-collapseFive" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p class="faq-desc content-desc text-left" data-aos="fade-up">
                                        We offer comprehensive
                                        software development
                                        solutions, including AI app
                                        development,
                                        Blockchain development, and
                                        mobile app development
                                        solutions.<br><br>
                                        As a trusted name in IT-based
                                        app development, we serve a wide
                                        range of
                                        industries with tailored digital
                                        solutions:<br>
                                    <ul class="custom-bullets">
                                        <li class="custom-bullets">Healthcare</li>
                                        <li class="custom-bullets">Retail</li>
                                        <li class="custom-bullets">Finance
                                            and Banking</li>
                                        <li class="custom-bullets">Technology</li>
                                        <li class="custom-bullets">IT
                                            Services</li>
                                        <li class="custom-bullets">eCommerce</li>
                                    </ul>

                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-aos="fade-down">
                            <h3 class="accordion-header content-title mb-0">
                                <button class="accordion-button collapsed fw-semibold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false"
                                    aria-controls="flush-collapseSix">
                                    Will I be getting any support
                                    after project completion?
                                </button>
                            </h3>
                            <div id="flush-collapseSix" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p class="faq-desc content-desc text-left" data-aos="fade-up">
                                        Our team will take care of
                                        the complete knowledge
                                        transfer at the end of
                                        the project.
                                        We will provide your team
                                        with training to use the
                                        application
                                        effectively.<br><br>
                                        Our team will also include a
                                        mobile app maintenance and
                                        support package
                                        with the other aspects.
                                        We will extend complete
                                        support for the specified
                                        period.
                                        Once the period is over, we
                                        extend to help with
                                        maintenance.
                                        This includes regular
                                        support, updates, and
                                        upgrades needed to improve
                                        the app experience.
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

    <!-- Scroll Top -->


    <!-- Load cacheBuster first -->
    <!-- <script src="<?php echo get_template_directory_uri(); ?>/assets/js/cacheBuster.js" defer></script> -->

    <!-- Load jQuery first -->
    <!-- jQuery (optional) -->
    <!-- <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-3.6.0.min.js" defer></script> -->

    <!-- Bootstrap bundle -->
    <!-- <script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.bundle.js"></script> -->

    <!-- Plugins -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.js" defer></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.waypoints.js" defer></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.rcounter.js" defer></script>

    <!-- AOS Animation -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/aos-animation.js" defer></script>
    
    <!-- FAQ Accordion Initialization -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Fix AOS opacity issues for FAQ section
            const faqSection = document.querySelector('.faq-section');
            if (faqSection) {
                // Remove any AOS attributes that might cause opacity issues
                faqSection.querySelectorAll('[data-aos]').forEach(element => {
                    element.removeAttribute('data-aos');
                    element.style.opacity = '1';
                    element.style.visibility = 'visible';
                });
                
                // Ensure all FAQ content is visible
                faqSection.querySelectorAll('*').forEach(element => {
                    element.style.opacity = '1';
                    element.style.visibility = 'visible';
                });
            }
            
            // Initialize Bootstrap accordion functionality
            const accordionButtons = document.querySelectorAll('.accordion-button');
            
            accordionButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const targetId = this.getAttribute('data-bs-target');
                    const target = document.querySelector(targetId);
                    
                    if (target) {
                        // Toggle the collapse state
                        if (target.classList.contains('show')) {
                            target.classList.remove('show');
                            this.classList.add('collapsed');
                            this.setAttribute('aria-expanded', 'false');
                        } else {
                            // Close all other open accordion items
                            document.querySelectorAll('.accordion-collapse.show').forEach(openItem => {
                                if (openItem !== target) {
                                    openItem.classList.remove('show');
                                    const openButton = openItem.previousElementSibling.querySelector('.accordion-button');
                                    if (openButton) {
                                        openButton.classList.add('collapsed');
                                        openButton.setAttribute('aria-expanded', 'false');
                                    }
                                }
                            });
                            
                            // Open current item
                            target.classList.add('show');
                            this.classList.remove('collapsed');
                            this.setAttribute('aria-expanded', 'true');
                        }
                    }
                });
            });
            
            // Ensure accordion bodies are visible when expanded
            document.querySelectorAll('.accordion-collapse').forEach(collapse => {
                if (collapse.classList.contains('show')) {
                    collapse.style.display = 'block';
                    collapse.style.opacity = '1';
                    collapse.style.visibility = 'visible';
                }
            });
            
            // Force FAQ section visibility
            setTimeout(() => {
                if (faqSection) {
                    faqSection.style.opacity = '1';
                    faqSection.style.visibility = 'visible';
                    faqSection.querySelectorAll('*').forEach(element => {
                        element.style.opacity = '1';
                        element.style.visibility = 'visible';
                    });
                }
            }, 100);
        });
    </script>

    <!-- External Scripts -->
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/widget.min.js" defer></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/clutch-widget.js" defer></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/DMCABadgeHelper.min.js" defer></script>
    <!-- Particle JS -->
    <!-- <script src="<?php echo get_template_directory_uri(); ?>/assets/js/particle.min.js" defer></script> -->
    <!-- <script src="<?php echo get_template_directory_uri(); ?>/assets/js/script-particle.js" defer></script> -->

    <!-- Custom Scripts (move new.js BELOW gsap scripts if it uses gsap) -->

    <!-- ✅ Load GSAP FIRST before any custom gsap code -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

    <!-- ✅ Then load your custom code that uses GSAP -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/new.js"></script>

    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/scripts.js" defer></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/sitemap.js" defer></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/ainavtab.js" defer></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/cacheBuster.js" defer></script>

    <!-- Mobile Menu Script - Load last to ensure DOM is ready -->

</body>

</html>

<?php get_footer(); ?> 