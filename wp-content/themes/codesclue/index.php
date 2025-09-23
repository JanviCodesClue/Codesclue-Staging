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
    <style>

            .error-container {
      max-width: 600px;
    }
    .error-code {
      font-size: 8rem;
      font-weight: 700;
      color: #0d6efd;
    }
    .error-message {
      font-size: 1.5rem;
      margin-bottom: 20px;
    }
    .btn-custom {
      padding: 12px 30px;
      font-size: 1.1rem;
      border-radius: 50px;
    }
    </style>
</head>

<body>
    <!-- Main -->
    <main>
  <div class="container text-center mb-3">
    <div class="d-flex justify-content-center my-3">
 <img src="<?php echo get_template_directory_uri(); ?>/assets/images/new/404.png" class="imh-fluid" >
    </div>
   
    <p class="text-muted mb-4">
      The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.
    </p>
    <a href="<?php echo home_url(''); ?>" class="btn btn-primary btn-custom">Go Back Home</a>
  </div>


    </main>

    <!-- Scroll Top -->
    <div id="scrollToTopBtn" class="scrollToTop">
        <svg width="20" height="30" viewBox="0 0 48 54" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M24.0001 0.359375L21.4062 2.57812L0.40625 20.5781L5.59395 26.6719L20.0001 14.3281V53.6406H28.0001V14.3281L42.4062 26.6719L47.5939 20.5781L26.5938 2.57812L24.0001 0.359375Z"
                fill="white"></path>
        </svg>
    </div>

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