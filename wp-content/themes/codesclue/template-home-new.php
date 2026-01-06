<?php
/**
 * Template Name: Home Page New
 * 
 * Custom homepage template with full design control
 * All HTML is in the template - Gutenberg editor stays empty
 *
 * @package CodesClue
 */

get_header(); ?>

<main id="home-new" class="home-new-page">
    
    <!-- Hero Section -->
    <section class="home-new-hero" id="home-new-hero">
        <div class="home-new-container">
            <div class="home-new-hero-content">
                <div class="home-new-hero-text">
                    <div class="home-new-hero-badge">
                        <span class="home-new-badge-text">Premium Development Solutions</span>
                    </div>
                    <h1 class="home-new-hero-title">
                        Transform Your Vision into
                        <span class="home-new-gradient-text">Digital Excellence</span>
                    </h1>
                    <p class="home-new-hero-description">
                        CodesClue Technologies delivers cutting-edge web, mobile, and AI solutions that drive business growth. We turn innovative ideas into scalable, intelligent systems powered by modern technology.
                    </p>
                    <div class="home-new-hero-buttons">
                        <a href="<?php echo esc_url(home_url('/contact-us')); ?>" class="home-new-btn home-new-btn-primary">
                            <span>Get Started</span>
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M7.5 15L12.5 10L7.5 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                        <a href="<?php echo esc_url(home_url('/our-portfolio')); ?>" class="home-new-btn home-new-btn-secondary">
                            <span>View Portfolio</span>
                        </a>
                    </div>
                    <div class="home-new-hero-stats">
                        <div class="home-new-stat-item">
                            <div class="home-new-stat-number" data-count="5">0</div>
                            <p class="home-new-stat-label">Years Experience</p>
                        </div>
                        <div class="home-new-stat-item">
                            <div class="home-new-stat-number" data-count="30">0</div>
                            <p class="home-new-stat-label">Expert Team</p>
                        </div>
                        <div class="home-new-stat-item">
                            <div class="home-new-stat-number" data-count="20">0</div>
                            <p class="home-new-stat-label">Projects Delivered</p>
                        </div>
                    </div>
                </div>
                <div class="home-new-hero-image">
                    <div class="home-new-hero-image-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/codesclue_hero_image.svg" 
                             alt="CodesClue Technologies" class="home-new-hero-main-image">
                        <div class="home-new-floating-shapes">
                            <div class="home-new-shape home-new-shape-1"></div>
                            <div class="home-new-shape home-new-shape-2"></div>
                            <div class="home-new-shape home-new-shape-3"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="home-new-scroll-indicator">
            <span>Scroll to explore</span>
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                <path d="M8 12L4 8L5.4 6.6L8 9.2L10.6 6.6L12 8L8 12Z" fill="currentColor"/>
            </svg>
        </div>
    </section>

    <!-- Services Section -->
    <section class="home-new-services" id="home-new-services">
        <div class="home-new-container">
            <div class="home-new-section-header">
                <span class="home-new-section-label">Our Services</span>
                <h2 class="home-new-section-title">Comprehensive Development Solutions</h2>
                <p class="home-new-section-description">
                    We offer end-to-end services from concept to deployment, ensuring your digital products are built to scale and succeed in today's competitive market.
                </p>
            </div>
            <div class="home-new-services-grid">
                <div class="home-new-service-card">
                    <div class="home-new-service-icon">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none">
                            <path d="M16 2L2 8V16C2 23.73 8.27 30 16 30C23.73 30 30 23.73 30 16V8L16 2Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <h3 class="home-new-service-title">Web Development</h3>
                    <p class="home-new-service-description">
                        Custom web applications built with modern frameworks, ensuring scalability, performance, and exceptional user experience across all devices.
                    </p>
                    <a href="<?php echo esc_url(home_url('/services')); ?>" class="home-new-service-link">
                        <span>Learn More</span>
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path d="M6 12L10 8L6 4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                </div>
                <div class="home-new-service-card">
                    <div class="home-new-service-icon">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none">
                            <rect x="8" y="4" width="16" height="24" rx="2" stroke="currentColor" stroke-width="2"/>
                            <path d="M12 8H20" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <h3 class="home-new-service-title">Mobile App Development</h3>
                    <p class="home-new-service-description">
                        Native and cross-platform mobile applications for iOS and Android, delivering seamless experiences that users love.
                    </p>
                    <a href="<?php echo esc_url(home_url('/services')); ?>" class="home-new-service-link">
                        <span>Learn More</span>
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path d="M6 12L10 8L6 4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                </div>
                <div class="home-new-service-card">
                    <div class="home-new-service-icon">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none">
                            <path d="M16 2C8.27 2 2 8.27 2 16C2 23.73 8.27 30 16 30C23.73 30 30 23.73 30 16C30 8.27 23.73 2 16 2Z" stroke="currentColor" stroke-width="2"/>
                            <path d="M16 8V16L20 20" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <h3 class="home-new-service-title">AI Solutions</h3>
                    <p class="home-new-service-description">
                        Intelligent systems powered by machine learning and AI, helping businesses automate processes and gain actionable insights.
                    </p>
                    <a href="<?php echo esc_url(home_url('/ai-software-development')); ?>" class="home-new-service-link">
                        <span>Learn More</span>
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path d="M6 12L10 8L6 4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                </div>
                <div class="home-new-service-card">
                    <div class="home-new-service-icon">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none">
                            <path d="M16 2L2 8L16 14L30 8L16 2Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M2 16L16 22L30 16" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M2 24L16 30L30 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <h3 class="home-new-service-title">SaaS Development</h3>
                    <p class="home-new-service-description">
                        Scalable Software-as-a-Service platforms designed for growth, with robust architecture and seamless integrations.
                    </p>
                    <a href="<?php echo esc_url(home_url('/services')); ?>" class="home-new-service-link">
                        <span>Learn More</span>
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path d="M6 12L10 8L6 4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                </div>
                <div class="home-new-service-card">
                    <div class="home-new-service-icon">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none">
                            <path d="M16 2L4 8V16C4 22.63 9.37 28 16 28C22.63 28 28 22.63 28 16V8L16 2Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M16 12V20M12 16H20" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <h3 class="home-new-service-title">Startup Engineering</h3>
                    <p class="home-new-service-description">
                        End-to-end product development for startups, from MVP to scale, with agile methodologies and rapid iteration.
                    </p>
                    <a href="<?php echo esc_url(home_url('/services')); ?>" class="home-new-service-link">
                        <span>Learn More</span>
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path d="M6 12L10 8L6 4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                </div>
                <div class="home-new-service-card">
                    <div class="home-new-service-icon">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none">
                            <path d="M16 4L4 10V18C4 24.63 9.37 30 16 30C22.63 30 28 24.63 28 18V10L16 4Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M12 16L14 18L20 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <h3 class="home-new-service-title">UI/UX Design</h3>
                    <p class="home-new-service-description">
                        User-centered design that combines aesthetics with functionality, creating intuitive and engaging digital experiences.
                    </p>
                    <a href="<?php echo esc_url(home_url('/services')); ?>" class="home-new-service-link">
                        <span>Learn More</span>
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path d="M6 12L10 8L6 4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Company Section -->
    <section class="home-new-about" id="home-new-about">
        <div class="home-new-container">
            <div class="home-new-about-content">
                <div class="home-new-about-text">
                    <span class="home-new-section-label">About CodesClue</span>
                    <h2 class="home-new-section-title">Building Tomorrow's Digital Solutions Today</h2>
                    <p class="home-new-about-description">
                        CodesClue Technologies is a leading software development company specializing in web, mobile, AI, and SaaS solutions. We partner with startups and enterprises to transform innovative ideas into scalable, intelligent systems.
                    </p>
                    <p class="home-new-about-description">
                        Our team of expert developers, designers, and strategists work collaboratively to deliver solutions that not only meet current needs but anticipate future growth. We combine technical excellence with business acumen to ensure your digital products drive real value.
                    </p>
                    <div class="home-new-about-features">
                        <div class="home-new-feature-item">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M16.67 5L7.5 14.17L3.33 10" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span>Agile Development Methodology</span>
                        </div>
                        <div class="home-new-feature-item">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M16.67 5L7.5 14.17L3.33 10" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span>Enterprise-Grade Security</span>
                        </div>
                        <div class="home-new-feature-item">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M16.67 5L7.5 14.17L3.33 10" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span>24/7 Support & Maintenance</span>
                        </div>
                        <div class="home-new-feature-item">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M16.67 5L7.5 14.17L3.33 10" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span>Scalable Architecture</span>
                        </div>
                    </div>
                    <a href="<?php echo esc_url(home_url('/about-us')); ?>" class="home-new-btn home-new-btn-primary">
                        <span>Learn More About Us</span>
                    </a>
                </div>
                <div class="home-new-about-image">
                    <div class="home-new-about-image-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/codesclue_hero_image.svg" 
                             alt="CodesClue Team" class="home-new-about-main-image">
                        <div class="home-new-experience-badge">
                            <div class="home-new-badge-number">5+</div>
                            <div class="home-new-badge-label">Years of Excellence</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Experience & Achievement Section -->
    <section class="home-new-achievements" id="home-new-achievements">
        <div class="home-new-container">
            <div class="home-new-achievements-grid">
                <div class="home-new-achievement-card">
                    <div class="home-new-achievement-icon">
                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none">
                            <path d="M20 3.33L6.67 10V20C6.67 29.66 14.34 37.33 20 37.33C25.66 37.33 33.33 29.66 33.33 20V10L20 3.33Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="home-new-achievement-number" data-count="5">0</div>
                    <p class="home-new-achievement-label">Years of Experience</p>
                </div>
                <div class="home-new-achievement-card">
                    <div class="home-new-achievement-icon">
                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none">
                            <path d="M20 20C24.14 20 27.5 16.64 27.5 12.5C27.5 8.36 24.14 5 20 5C15.86 5 12.5 8.36 12.5 12.5C12.5 16.64 15.86 20 20 20Z" stroke="currentColor" stroke-width="2"/>
                            <path d="M5 35C5 28.37 11.37 23 20 23C28.63 23 35 28.37 35 35" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <div class="home-new-achievement-number" data-count="30">0</div>
                    <p class="home-new-achievement-label">Expert Team Members</p>
                </div>
                <div class="home-new-achievement-card">
                    <div class="home-new-achievement-icon">
                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none">
                            <path d="M33.33 15L20 8.33L6.67 15L20 21.67L33.33 15Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M6.67 20L20 26.67L33.33 20" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M6.67 25L20 31.67L33.33 25" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="home-new-achievement-number" data-count="20">0</div>
                    <p class="home-new-achievement-label">Projects Completed</p>
                </div>
                <div class="home-new-achievement-card">
                    <div class="home-new-achievement-icon">
                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none">
                            <path d="M20 3.33L6.67 10V20C6.67 29.66 14.34 37.33 20 37.33C25.66 37.33 33.33 29.66 33.33 20V10L20 3.33Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M20 13.33V20L25 23.33" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <div class="home-new-achievement-number" data-count="10">0</div>
                    <p class="home-new-achievement-label">Countries Served</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Workflow Section -->
    <section class="home-new-workflow" id="home-new-workflow">
        <div class="home-new-container">
            <div class="home-new-section-header">
                <span class="home-new-section-label">Our Process</span>
                <h2 class="home-new-section-title">How We Work</h2>
                <p class="home-new-section-description">
                    A proven methodology that ensures successful project delivery from concept to launch.
                </p>
            </div>
            <div class="home-new-workflow-steps">
                <div class="home-new-workflow-step">
                    <div class="home-new-step-number">01</div>
                    <div class="home-new-step-content">
                        <h3 class="home-new-step-title">Discovery & Planning</h3>
                        <p class="home-new-step-description">
                            We begin by understanding your business goals, target audience, and technical requirements to create a comprehensive project roadmap.
                        </p>
                    </div>
                </div>
                <div class="home-new-workflow-step">
                    <div class="home-new-step-number">02</div>
                    <div class="home-new-step-content">
                        <h3 class="home-new-step-title">Design & Prototyping</h3>
                        <p class="home-new-step-description">
                            Our design team creates intuitive user interfaces and interactive prototypes, ensuring the product meets user expectations.
                        </p>
                    </div>
                </div>
                <div class="home-new-workflow-step">
                    <div class="home-new-step-number">03</div>
                    <div class="home-new-step-content">
                        <h3 class="home-new-step-title">Development & Testing</h3>
                        <p class="home-new-step-description">
                            Agile development with continuous testing ensures high-quality code delivery and early issue detection.
                        </p>
                    </div>
                </div>
                <div class="home-new-workflow-step">
                    <div class="home-new-step-number">04</div>
                    <div class="home-new-step-content">
                        <h3 class="home-new-step-title">Deployment & Support</h3>
                        <p class="home-new-step-description">
                            Smooth deployment followed by ongoing maintenance, updates, and support to keep your product running optimally.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Slider Section -->
    <section class="home-new-portfolio" id="home-new-portfolio">
        <div class="home-new-container">
            <div class="home-new-portfolio-header">
                <div class="home-new-portfolio-header-text">
                    <span class="home-new-section-label">Our Work</span>
                    <h2 class="home-new-section-title">Portfolio Highlights</h2>
                    <p class="home-new-section-description">
                        Showcasing innovative solutions we've built for clients across various industries.
                    </p>
                </div>
                <a href="<?php echo esc_url(home_url('/our-portfolio')); ?>" class="home-new-btn home-new-btn-secondary">
                    <span>View All Projects</span>
                </a>
            </div>
            <div class="home-new-portfolio-grid">
                <div class="home-new-portfolio-item">
                    <div class="home-new-portfolio-image-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/new/Cannabis.png" 
                             alt="GreenReleaf Project" class="home-new-portfolio-image">
                        <div class="home-new-portfolio-overlay">
                            <div class="home-new-portfolio-content">
                                <h3 class="home-new-portfolio-title">GreenReleaf</h3>
                                <p class="home-new-portfolio-category">E-Commerce Platform</p>
                                <a href="<?php echo esc_url(home_url('/greenreleaf')); ?>" class="home-new-portfolio-link">
                                    <span>View Project</span>
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <path d="M6 12L10 8L6 4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="home-new-portfolio-item">
                    <div class="home-new-portfolio-image-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/new/Therapix.png" 
                             alt="Therapix Project" class="home-new-portfolio-image">
                        <div class="home-new-portfolio-overlay">
                            <div class="home-new-portfolio-content">
                                <h3 class="home-new-portfolio-title">Therapix</h3>
                                <p class="home-new-portfolio-category">AI-Powered Healthcare</p>
                                <a href="<?php echo esc_url(home_url('/therapix')); ?>" class="home-new-portfolio-link">
                                    <span>View Project</span>
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <path d="M6 12L10 8L6 4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="home-new-portfolio-item">
                    <div class="home-new-portfolio-image-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio-img/codesclue-ridereach 1.png" 
                             alt="RideReach Project" class="home-new-portfolio-image">
                        <div class="home-new-portfolio-overlay">
                            <div class="home-new-portfolio-content">
                                <h3 class="home-new-portfolio-title">RideReach</h3>
                                <p class="home-new-portfolio-category">Advertising Technology</p>
                                <a href="<?php echo esc_url(home_url('/ride-reach')); ?>" class="home-new-portfolio-link">
                                    <span>View Project</span>
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <path d="M6 12L10 8L6 4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tech Stack Section -->
    <section class="home-new-tech-stack" id="home-new-tech-stack">
        <div class="home-new-container">
            <div class="home-new-section-header">
                <span class="home-new-section-label">Technologies</span>
                <h2 class="home-new-section-title">Our Technology Stack</h2>
                <p class="home-new-section-description">
                    We leverage cutting-edge technologies to build robust, scalable, and future-proof solutions.
                </p>
            </div>
            <div class="home-new-tech-logos">
                <div class="home-new-tech-logo-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header/main_icon/codesclue_react.svg" alt="React">
                </div>
                <div class="home-new-tech-logo-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header/main_icon/codesclue_angular.svg" alt="Angular">
                </div>
                <div class="home-new-tech-logo-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header/main_icon/codesclue_vue js.svg" alt="Vue.js">
                </div>
                <div class="home-new-tech-logo-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header/main_icon/codesclue_node.svg" alt="Node.js">
                </div>
                <div class="home-new-tech-logo-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header/main_icon/codesclue_python.svg" alt="Python">
                </div>
                <div class="home-new-tech-logo-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header/main_icon/codesclue_react.svg" alt="React Native">
                </div>
                <div class="home-new-tech-logo-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header/main_icon/codesclue_flutter.svg" alt="Flutter">
                </div>
                <div class="home-new-tech-logo-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header/main_icon/codesclue_mongodb.svg" alt="MongoDB">
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="home-new-testimonials" id="home-new-testimonials">
        <div class="home-new-container">
            <div class="home-new-section-header">
                <span class="home-new-section-label">Testimonials</span>
                <h2 class="home-new-section-title">What Our Clients Say</h2>
                <p class="home-new-section-description">
                    Don't just take our word for it. Here's what our clients have to say about working with CodesClue.
                </p>
            </div>
            <div class="home-new-testimonials-grid">
                <div class="home-new-testimonial-card">
                    <div class="home-new-testimonial-rating">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor"><path d="M10 1L12.5 7.5L20 8.5L15 13.5L16.5 20L10 16.5L3.5 20L5 13.5L0 8.5L7.5 7.5L10 1Z"/></svg>
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor"><path d="M10 1L12.5 7.5L20 8.5L15 13.5L16.5 20L10 16.5L3.5 20L5 13.5L0 8.5L7.5 7.5L10 1Z"/></svg>
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor"><path d="M10 1L12.5 7.5L20 8.5L15 13.5L16.5 20L10 16.5L3.5 20L5 13.5L0 8.5L7.5 7.5L10 1Z"/></svg>
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor"><path d="M10 1L12.5 7.5L20 8.5L15 13.5L16.5 20L10 16.5L3.5 20L5 13.5L0 8.5L7.5 7.5L10 1Z"/></svg>
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor"><path d="M10 1L12.5 7.5L20 8.5L15 13.5L16.5 20L10 16.5L3.5 20L5 13.5L0 8.5L7.5 7.5L10 1Z"/></svg>
                    </div>
                    <p class="home-new-testimonial-text">
                        "CodesClue transformed our vision into a reality. Their team's expertise in AI and mobile development helped us launch a product that exceeded our expectations. Highly professional and results-driven."
                    </p>
                    <div class="home-new-testimonial-author">
                        <div class="home-new-author-info">
                            <h4 class="home-new-author-name">Client Name</h4>
                            <p class="home-new-author-role">CEO, Company Name</p>
                        </div>
                    </div>
                </div>
                <div class="home-new-testimonial-card">
                    <div class="home-new-testimonial-rating">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor"><path d="M10 1L12.5 7.5L20 8.5L15 13.5L16.5 20L10 16.5L3.5 20L5 13.5L0 8.5L7.5 7.5L10 1Z"/></svg>
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor"><path d="M10 1L12.5 7.5L20 8.5L15 13.5L16.5 20L10 16.5L3.5 20L5 13.5L0 8.5L7.5 7.5L10 1Z"/></svg>
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor"><path d="M10 1L12.5 7.5L20 8.5L15 13.5L16.5 20L10 16.5L3.5 20L5 13.5L0 8.5L7.5 7.5L10 1Z"/></svg>
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor"><path d="M10 1L12.5 7.5L20 8.5L15 13.5L16.5 20L10 16.5L3.5 20L5 13.5L0 8.5L7.5 7.5L10 1Z"/></svg>
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor"><path d="M10 1L12.5 7.5L20 8.5L15 13.5L16.5 20L10 16.5L3.5 20L5 13.5L0 8.5L7.5 7.5L10 1Z"/></svg>
                    </div>
                    <p class="home-new-testimonial-text">
                        "Working with CodesClue has been an exceptional experience. They delivered our SaaS platform on time and within budget. Their attention to detail and commitment to quality is outstanding."
                    </p>
                    <div class="home-new-testimonial-author">
                        <div class="home-new-author-info">
                            <h4 class="home-new-author-name">Client Name</h4>
                            <p class="home-new-author-role">CTO, Company Name</p>
                        </div>
                    </div>
                </div>
                <div class="home-new-testimonial-card">
                    <div class="home-new-testimonial-rating">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor"><path d="M10 1L12.5 7.5L20 8.5L15 13.5L16.5 20L10 16.5L3.5 20L5 13.5L0 8.5L7.5 7.5L10 1Z"/></svg>
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor"><path d="M10 1L12.5 7.5L20 8.5L15 13.5L16.5 20L10 16.5L3.5 20L5 13.5L0 8.5L7.5 7.5L10 1Z"/></svg>
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor"><path d="M10 1L12.5 7.5L20 8.5L15 13.5L16.5 20L10 16.5L3.5 20L5 13.5L0 8.5L7.5 7.5L10 1Z"/></svg>
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor"><path d="M10 1L12.5 7.5L20 8.5L15 13.5L16.5 20L10 16.5L3.5 20L5 13.5L0 8.5L7.5 7.5L10 1Z"/></svg>
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor"><path d="M10 1L12.5 7.5L20 8.5L15 13.5L16.5 20L10 16.5L3.5 20L5 13.5L0 8.5L7.5 7.5L10 1Z"/></svg>
                    </div>
                    <p class="home-new-testimonial-text">
                        "The team at CodesClue understood our startup's needs perfectly. They built our MVP quickly and helped us scale as we grew. Their agile approach and technical expertise made all the difference."
                    </p>
                    <div class="home-new-testimonial-author">
                        <div class="home-new-author-info">
                            <h4 class="home-new-author-name">Client Name</h4>
                            <p class="home-new-author-role">Founder, Startup Name</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="home-new-cta" id="home-new-cta">
        <div class="home-new-container">
            <div class="home-new-cta-content">
                <h2 class="home-new-cta-title">Ready to Build Something Amazing?</h2>
                <p class="home-new-cta-description">
                    Let's discuss how CodesClue can help transform your ideas into powerful digital solutions. Get in touch today for a free consultation.
                </p>
                <div class="home-new-cta-buttons">
                    <a href="<?php echo esc_url(home_url('/contact-us')); ?>" class="home-new-btn home-new-btn-primary home-new-btn-large">
                        <span>Start Your Project</span>
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M7.5 15L12.5 10L7.5 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                    <a href="<?php echo esc_url(home_url('/our-portfolio')); ?>" class="home-new-btn home-new-btn-secondary home-new-btn-large">
                        <span>View Our Work</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>

