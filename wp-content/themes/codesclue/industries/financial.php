<?php
/*
Template Name: Financial Template
*/
get_header(); ?>  
    
    
    <main>
        <section class="hero-section-financial">
            <div class="container">
                <div class="row align-items-center">
                
                <!-- Left Image Section -->
                <div class="col-lg-6 col-md-12 d-flex justify-content-center align-items-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/industries/financial-hero.png" 
                        alt="Financial Hero" class="financial-hero-img">
                </div>
                
                <!-- Right Text Section -->
                <div class="col-lg-6 col-md-12 hero-text">
                    <h1>Financial & <br> Forex Software <br> Development Company</h1>
                    <p>
                    Explore your digital marketplace with CMARIX, a leading eCommerce software
                    development company in USA and India.
                    </p>
                    <a href="<?php echo home_url('/contact-us/'); ?>" class="btn btn-custom">LET'S CONNECT →</a>
                </div>
                
                </div>
            </div>
        </section>


        <section class="finance-section text-center">
        <div class="container">
            <!-- Heading -->
            <h2 class="pb-3">Empowering Finance with Cutting-Edge Software Development</h2>
            <p>
            We offer top forex trading software development services focused on scalability, security, 
            and seamless integration to empower your financial business. 
            We help you stay ahead of the evolving financial landscape by offering a range of services, 
            including custom fintech app development to modernization to compliance.
            </p>

            <div class="row align-items-center">
            
            <!-- Left Accordion -->
            <div class="col-lg-6 col-md-12 text-start">
                <div class="accordion" id="financeAccordion">
                <div class="accordion-item mb-3">
                    <h2 class="accordion-header">
                    <button class="accordion-button collapsed px-5" type="button" data-bs-toggle="collapse" data-bs-target="#item1">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/industries/empowering.png" alt="icon" class="me-2">
                        Custom Financial Software Development
                    </button>
                    </h2>
                    <div id="item1" class="accordion-collapse collapse" data-bs-parent="#financeAccordion">
                    <div class="accordion-body">
                        Detailed content about financial software development services.
                    </div>
                    </div>
                </div>

                <div class="accordion-item mb-3">
                    <h2 class="accordion-header">
                    <button class="accordion-button collapsed px-5" type="button" data-bs-toggle="collapse" data-bs-target="#item2">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/industries/empowering.png" alt="icon" class="me-2">
                        Custom Financial Software Development
                    </button>
                    </h2>
                    <div id="item2" class="accordion-collapse collapse" data-bs-parent="#financeAccordion">
                    <div class="accordion-body">
                        More details here...
                    </div>
                    </div>
                </div>

                <div class="accordion-item mb-3">
                    <h2 class="accordion-header">
                    <button class="accordion-button collapsed px-5" type="button" data-bs-toggle="collapse" data-bs-target="#item3">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/industries/empowering.png" alt="icon" class="me-2">
                        Custom Financial Software Development
                    </button>
                    </h2>
                    <div id="item3" class="accordion-collapse collapse" data-bs-parent="#financeAccordion">
                    <div class="accordion-body">
                        More details here...
                    </div>
                    </div>
                </div>

                <!-- Repeat more items as needed -->
                </div>
            </div>

            <!-- Right Sliced Image -->
            <div class="col-lg-6 col-md-12">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/industries/finance-secound-section.png" alt="icon" class="me-2">
            </div>

            </div>
        </div>
        </section>


        <section class="services-section text-center">
                <div class="container">
                    <h2 class="mb-5">Innovative Financial Software Development Services</h2>

                    <!-- Desktop Layout -->
                    <div class="desktop-layout">
                    <div class="row align-items-center">
                        
                        <!-- Left Services -->
                        <div class="col-lg-4 text-start">
                        <div class="service-box" data-detail="detail1">
                            <div class="service-number">01</div>
                            <div>Custom FinTech Software Development</div>
                        </div>
                        <div class="service-box" data-detail="detail2">
                            <div class="service-number">02</div>
                            <div>Custom FinTech Software Development</div>
                        </div>
                        <div class="service-box" data-detail="detail3">
                            <div class="service-number">03</div>
                            <div>Custom FinTech Software Development</div>
                        </div>
                        </div>

                        <!-- Center Preview -->
                        <div class="col-lg-4">
                        <div class="service-preview">
                            <div id="detail1" class="service-detail active">
                            Ensure better health outcomes with healthcare solutions through faster diagnosis.
                            </div>
                            <div id="detail2" class="service-detail">
                            Streamline financial operations with modern software solutions for businesses.
                            </div>
                            <div id="detail3" class="service-detail">
                            Advanced trading systems for forex & finance enterprises.
                            </div>
                            <div id="detail4" class="service-detail">
                            Secure payment gateway integration for fintech companies.
                            </div>
                            <div id="detail5" class="service-detail">
                            Risk management and compliance automation solutions.
                            </div>
                            <div id="detail6" class="service-detail">
                            AI-powered analytics and customer engagement platforms.
                            </div>
                        </div>
                        </div>

                        <!-- Right Services -->
                        <div class="col-lg-4 text-start">
                        <div class="service-box" data-detail="detail4">
                            <div class="service-number">04</div>
                            <div>Custom FinTech Software Development</div>
                        </div>
                        <div class="service-box" data-detail="detail5">
                            <div class="service-number">05</div>
                            <div>Custom FinTech Software Development</div>
                        </div>
                        <div class="service-box" data-detail="detail6">
                            <div class="service-number">06</div>
                            <div>Custom FinTech Software Development</div>
                        </div>
                        </div>

                    </div>
                    </div>

                    <!-- Mobile Layout -->
                    <div class="mobile-layout">
                    <div class="row">
                        <div class="col-12 mb-3">
                        <div class="card p-3">
                            <h5><span class="badge bg-primary me-2">01</span> Custom FinTech Software Development</h5>
                            <p class="mt-2">Ensure better health outcomes with healthcare solutions through faster diagnosis.</p>
                        </div>
                        </div>
                        <div class="col-12 mb-3">
                        <div class="card p-3">
                            <h5><span class="badge bg-primary me-2">02</span> Custom FinTech Software Development</h5>
                            <p class="mt-2">Streamline financial operations with modern software solutions for businesses.</p>
                        </div>
                        </div>
                        <div class="col-12 mb-3">
                        <div class="card p-3">
                            <h5><span class="badge bg-primary me-2">03</span> Custom FinTech Software Development</h5>
                            <p class="mt-2">Advanced trading systems for forex & finance enterprises.</p>
                        </div>
                        </div>
                        <div class="col-12 mb-3">
                        <div class="card p-3">
                            <h5><span class="badge bg-primary me-2">04</span> Custom FinTech Software Development</h5>
                            <p class="mt-2">Secure payment gateway integration for fintech companies.</p>
                        </div>
                        </div>
                        <div class="col-12 mb-3">
                        <div class="card p-3">
                            <h5><span class="badge bg-primary me-2">05</span> Custom FinTech Software Development</h5>
                            <p class="mt-2">Risk management and compliance automation solutions.</p>
                        </div>
                        </div>
                        <div class="col-12 mb-3">
                        <div class="card p-3">
                            <h5><span class="badge bg-primary me-2">06</span> Custom FinTech Software Development</h5>
                            <p class="mt-2">AI-powered analytics and customer engagement platforms.</p>
                        </div>
                        </div>
                    </div>
                    </div>

                </div>
        </section>






        <section class="solutions-section">
        <div class="container">
            <div class="text-center mb-5">
            <h2 class="fw-bold">Advanced FinTech Solutions: Pioneering the Future of Finance</h2>
            <p class="text-muted">
                As a leading custom banking and financial software development company in USA and India, we bring exceptional technical expertise with extensive experience in the banking and financial sector.
            </p>
            </div>

            <div class="row g-4">
            <!-- Card 1 -->
            <div class="col-xl-4 col-lg-4 col-md-4 col-12">
                <div class="solution-card bg1">
                <div class="solution-icon">💡</div>
                <h5>AI AND ML FINTECH SOLUTIONS</h5>
                <p>Ensure better outcomes with AI-powered fintech tools for automation, fraud detection, and predictive analytics.</p>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-xl-4 col-lg-4 col-md-4 col-12">
                <div class="solution-card bg2">
                <div class="solution-icon">📷</div>
                <h5>IOT-ENABLED SECURITY CAMERAS</h5>
                <p>Enhance security with IoT-powered surveillance ensuring smart monitoring and risk prevention.</p>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-xl-4 col-lg-4 col-md-4 col-12">
                <div class="solution-card bg3">
                <div class="solution-icon">👩‍⚕️</div>
                <h5>IMPROVED PATIENT CARE</h5>
                <p>Seamless healthcare fintech solutions for faster diagnosis, patient communication, and data integration.</p>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col-xl-4 col-lg-4 col-md-4 col-12">
                <div class="solution-card bg4">
                <div class="solution-icon">🏦</div>
                <h5>CUSTOM BANKING SOFTWARE</h5>
                <p>Tailored solutions for banks to optimize operations, compliance, and customer engagement.</p>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="col-xl-4 col-lg-4 col-md-4 col-12">
                <div class="solution-card bg5">
                <div class="solution-icon">🔐</div>
                <h5>SECURE PAYMENT SOLUTIONS</h5>
                <p>Advanced payment gateways with encryption and fraud detection systems for safer transactions.</p>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="col-xl-4 col-lg-4 col-md-4 col-12">
                <div class="solution-card bg6">
                <div class="solution-icon">📊</div>
                <h5>RISK MANAGEMENT TOOLS</h5>
                <p>Develop risk prediction tools and compliance automation for smarter financial decisions.</p>
                </div>
            </div>
            </div>
        </div>
        </section>
    



        <section>
            <div class="container ">
                <div class="row gy-4">
                    <div class="col-lg-12">
                        <h2 class="section-title mb-0">
                            Our Projects
                        </h2>
                    </div>
                    <div class="col-md-6">
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
                                        natural language like “chill edibles
                                        under $30.”</p>
                                </div>
                            </div>
                        </div>
                        <a href="https://greenreleafdispensary.com/" class="fs-4 ps-2 text-decoration-underline"
                            target="_blank" style="color: #2bb34b !important;">GreenReleaf</a>
                    </div>

                    <!-- Project Card 2 -->
                    <div class="col-md-6">
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
                        <a href="https://therapix.ai/" class="fs-4 ps-2 text-decoration-underline" target="_blank"
                            style="color: #0c316b !important;">Therapix</a>
                    </div>
                </div>
            </div>
        </section>



        

            <section class="tech-showcase py-5 container">
                <div class="position-relative">

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

                                    <a href="<?php echo home_url('/ios/'); ?>" class="tech-pill"
                                        data-desc="10+ years crafting intuitive, high-quality iOS apps aligned with Apple's ecosystem.">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header/main_icon/codesclue_ios.svg" loading="lazy"
                                            alt="iOS">
                                        <span class="pill-content">iOS</span>
                                    </a>
                                    <a href="<?php echo home_url('/android/'); ?>" class="tech-pill"
                                        data-desc="8+ years building fast, scalable Android apps for business growth.">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header/main_icon/codesclue_android.svg" loading="lazy"
                                            alt="Android">
                                        <span class="pill-content">Android</span>
                                    </a>
                                    <a href="<?php echo home_url('/react-native/'); ?>" class="tech-pill"
                                        data-desc="5+ years creating cross-platform apps with native-like experience.">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header/main_icon/codesclue_react.svg" loading="lazy"
                                            alt="React Native">
                                        <span class="pill-content">React
                                            Native</span>
                                    </a>
                                    <a href="<?php echo home_url('/flutter/'); ?>" class="tech-pill"
                                        data-desc="5+ years building dynamic, scalable Flutter apps with great UX.">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header/main_icon/codesclue_flutter.svg" loading="lazy"
                                            alt="Flutter">
                                        <span class="pill-content">Flutter</span>
                                    </a>
                                    <a href="<?php echo home_url('/html-page/'); ?>" class="tech-pill"
                                        data-desc="5+ years crafting responsive UIs using modern HTML frameworks.">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header/main_icon/codesclue_html.svg" loading="lazy"
                                            alt="HTML">
                                        <span class="pill-content">HTML</span>
                                    </a>
                                    <a href="<?php echo home_url('/css/'); ?>" class="tech-pill"
                                        data-desc="5+ years designing with CSS and SASS.">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header/main_icon/codesclue_css.svg" loading="lazy"
                                            alt="CSS">
                                        <span class="pill-content">CSS</span>
                                    </a>
                                    <a class="tech-pill" data-desc="3+ years building fast, Designing with Talwin CSS.">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header/main_icon/codesclue_talwind css.svg"
                                            loading="lazy" alt="Talwin">
                                        <span class="pill-content">Talwin
                                            CSS</span>
                                    </a>
                                    <a class="tech-pill" data-desc="5+ years building fast,style with Bootstrap.">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header/main_icon/codesclue_bootstap.svg" loading="lazy"
                                            alt="Bootstrap">
                                        <span class="pill-content">Bootstrap</span>
                                    </a>
                                    <a href="<?php echo home_url('/angular/'); ?>" class="tech-pill"
                                        data-desc="6+ years creating dynamic, enterprise-grade Angular applications.">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header/main_icon/codesclue_angular.svg" loading="lazy"
                                            alt="Angular">
                                        <span class="pill-content">Angular</span>
                                    </a>
                                    <a href="<?php echo home_url('/react-js/'); ?>" class="tech-pill"
                                        data-desc="6+ years building fast, modern UIs with React.js.">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header/main_icon/codesclue_react.svg" loading="lazy"
                                            alt="ReactJS">
                                        <span class="pill-content">React.js</span>
                                    </a>
                                    <a href="<?php echo home_url('/vue-js/'); ?>" class="tech-pill"
                                        data-desc="5+ years building fast Programing with Vue JS.">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header/main_icon/codesclue_vue js.svg" loading="lazy"
                                            alt="Vue">
                                        <span class="pill-content">Vue.js</span>
                                    </a>
                                    <a class="tech-pill" data-desc="3+ years building fast website with Next JS.">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header/main_icon/codesclue_next js.svg" loading="lazy"
                                            alt="next">
                                        <span class="pill-content">Next.js</span>
                                    </a>

                                </div>

                                <!-- Backend -->
                                <div class="tab-content tab-2 d-none flex-wrap gap-4">
                                    <a href="<?php echo home_url('/php/'); ?>" class="tech-pill"
                                        data-desc="8+ years developing robust web apps with PHP and its frameworks.">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header/main_icon/codesclue_php.svg" loading="lazy"
                                            alt="PHP">
                                        <span class="pill-content">PHP</span>
                                    </a>
                                    <a href="<?php echo home_url('/dotnet/'); ?>" class="tech-pill"
                                        data-desc="4+ years building secure, scalable apps with .NET technologies.">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header/main_icon/codesclue_dotnet.svg" loading="lazy"
                                            alt=".NET">
                                        <span class="pill-content">.NET</span>
                                    </a>
                                    <a href="<?php echo home_url('/node-js/'); ?>" class="tech-pill"
                                        data-desc="5+ years developing real-time, high-performance Node.js apps.">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header/main_icon/codesclue_node.svg" loading="lazy"
                                            alt="NodeJS">
                                        <span class="pill-content">Node.js</span>
                                    </a>
                                    <a href="<?php echo home_url('/ror/'); ?>" class="tech-pill"
                                        data-desc="4+ years building secure, scalable apps with Ruby on Rails.">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header/main_icon/codesclue_ror.svg" loading="lazy"
                                            alt="RoR">
                                        <span class="pill-content">Ruby on
                                            Rails</span>
                                    </a>
                                    <a href="<?php echo home_url('/swift/'); ?>" class="tech-pill"
                                        data-desc="6+ years developing high-performance iOS apps using Swift.">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header/main_icon/codesclue_swift.svg" loading="lazy"
                                            alt="Swift">
                                        <span class="pill-content">Swift</span>
                                    </a>
                                    <a href="<?php echo home_url('/kotlin/'); ?>" class="tech-pill"
                                        data-desc="8+ years crafting efficient Android apps using Kotlin.">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header/main_icon/codesclue_kotlin.svg" loading="lazy"
                                            alt="Kotlin">
                                        <span class="pill-content">Kotlin</span>
                                    </a>
                                    <a href="<?php echo home_url('/java/'); ?>" class="tech-pill"
                                        data-desc="3+ years building secure, scalable Java apps with Spring, Hibernate.">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header/main_icon/codesclue_java.svg" loading="lazy"
                                            alt="Java">
                                        <span class="pill-content">Java</span>
                                    </a>
                                    <a class="tech-pill" data-desc="2+ years build a programing with Python.">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header/main_icon/codesclue_python.svg" loading="lazy"
                                            alt="python">
                                        <span class="pill-content">Python</span>
                                    </a>
                                    <a class="tech-pill" data-desc="3+ years build a programing with C++.">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header/main_icon/codesclue_c-plus.svg" loading="lazy"
                                            alt="C++">
                                        <span class="pill-content">C++</span>
                                    </a>
                                </div>

                                <!-- Database -->
                                <div class="tab-content tab-3 d-none flex-wrap gap-4">
                                    <a href="<?php echo home_url('/mongo-db/'); ?>" class="tech-pill"
                                        data-desc="4+ years designing flexible, fast solutions with MongoDB.">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header/main_icon/codesclue_mongodb.svg" loading="lazy"
                                            alt="MongoDB">
                                        <span class="pill-content">MongoDB</span>
                                    </a>
                                    <a class="tech-pill" data-desc="4+ years designing fast solutions with Firbase.">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header/main_icon/codesclue_firebase.svg" loading="lazy"
                                            alt="firebase">
                                        <span class="pill-content">Firebase</span>
                                    </a>
                                    <a class="tech-pill" data-desc="4+ years build a programing with My SQL.">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header/main_icon/codesclue_sql.svg" loading="lazy"
                                            alt="SQL">
                                        <span class="pill-content">My
                                            SQL</span>
                                    </a>
                                    <a class="tech-pill" data-desc="3+ years build a programing with MSQL.">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header/main_icon/codesclue_msql.svg" loading="lazy"
                                            alt="msql">
                                        <span class="pill-content">M-SQL</span>
                                    </a>
                                    <a class="tech-pill" data-desc="3+ years build a programing with SQL Lite.">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header/main_icon/codesclue_sqllite.svg" loading="lazy"
                                            alt="sqlLite">
                                        <span class="pill-content">SQL
                                            Lite</span>
                                    </a>
                                    <a class="tech-pill" data-desc="3+ years build a programing with PgSQL.">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header/main_icon/codesclue_pgsql.svg" loading="lazy"
                                            alt="pgsql">
                                        <span class="pill-content">Pg
                                            SQL</span>
                                    </a>
                                </div>

                                <!-- UI/UX -->
                                <div class="tab-content tab-4 d-none flex-wrap gap-4">
                                    <a class="tech-pill"
                                        data-desc="4+ years designing seamless UI/UX experiences with Figma.">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header/main_icon/codesclue_figma.svg" loading="lazy"
                                            alt="Figma">
                                        <span class="pill-content">Figma</span>
                                    </a>
                                    <a class="tech-pill"
                                        data-desc="3+ years building interactive prototypes with Adobe XD.">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header/main_icon/codesclue_xd.svg" loading="lazy"
                                            alt="XD">
                                        <span class="pill-content">Adobe
                                            XD</span>
                                    </a>
                                    <a class="tech-pill"
                                        data-desc="5+ years crafting pixel-perfect visuals with Photoshop.">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header/main_icon/codesclue_ps.svg" loading="lazy"
                                            alt="Photoshop">
                                        <span class="pill-content">Adobe
                                            Photoshop</span>
                                    </a>
                                    <a class="tech-pill"
                                        data-desc="5+ years creating scalable vector magic with Illustrator.">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header/main_icon/codesclue_illustrator.svg"
                                            loading="lazy" alt="Illustrator">
                                        <span class="pill-content">Adobe
                                            Illustrator</span>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section class="container faq-section section-40 bg-linear-white" id="faqSection">
               
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
                                    <button class="accordion-button collapsed px-5 fw-semibold" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                        aria-expanded="false" aria-controls="flush-collapseOne">
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
                                    <button class="accordion-button collapsed px-5 fw-semibold" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                        aria-expanded="false" aria-controls="flush-collapseTwo">
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
                                    <button class="accordion-button collapsed px-5 fw-semibold" type="button"
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
                                    <button class="accordion-button collapsed px-5 fw-semibold" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseFour"
                                        aria-expanded="false" aria-controls="flush-collapseFour">
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
                                    <button class="accordion-button collapsed px-5 fw-semibold" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseFive"
                                        aria-expanded="false" aria-controls="flush-collapseFive">
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
                                    <button class="accordion-button collapsed px-5 fw-semibold" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseSix"
                                        aria-expanded="false" aria-controls="flush-collapseSix">
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

            </section>


    </main>




<?php get_footer(); ?>