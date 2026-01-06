/**
 * Home New Page JavaScript
 * GSAP Animations and Interactions
 * Fully Custom - No Bootstrap Dependencies
 */

(function() {
    'use strict';

    // Wait for DOM to be ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }

    function init() {
        // Check if GSAP is available
        if (typeof gsap === 'undefined') {
            console.warn('GSAP is not loaded. Some animations may not work.');
            initBasicAnimations();
            return;
        }

        // Register ScrollTrigger plugin
        if (typeof ScrollTrigger !== 'undefined') {
            gsap.registerPlugin(ScrollTrigger);
        }

        // Initialize all animations
        initHeroAnimations();
        initScrollAnimations();
        initParallaxEffects();
        initCounterAnimations();
        initHoverEffects();
        initSmoothScroll();
        initPortfolioAnimations();
    }

    /**
     * Hero Section Animations
     */
    function initHeroAnimations() {
        const heroSection = document.querySelector('.home-new-hero');
        if (!heroSection) return;

        const heroTitle = heroSection.querySelector('.home-new-hero-title');
        const heroDescription = heroSection.querySelector('.home-new-hero-description');
        const heroButtons = heroSection.querySelector('.home-new-hero-buttons');
        const heroStats = heroSection.querySelector('.home-new-hero-stats');
        const heroImage = heroSection.querySelector('.home-new-hero-main-image');
        const floatingShapes = heroSection.querySelectorAll('.home-new-shape');

        // Create timeline for hero animations
        const heroTL = gsap.timeline({ defaults: { ease: 'power3.out' } });

        if (heroTitle) {
            heroTL.from(heroTitle, {
                opacity: 0,
                y: 50,
                duration: 1
            });
        }

        if (heroDescription) {
            heroTL.from(heroDescription, {
                opacity: 0,
                y: 30,
                duration: 0.8
            }, '-=0.5');
        }

        if (heroButtons) {
            heroTL.from(heroButtons.children, {
                opacity: 0,
                y: 20,
                duration: 0.6,
                stagger: 0.2
            }, '-=0.4');
        }

        if (heroStats) {
            heroTL.from(heroStats.children, {
                opacity: 0,
                scale: 0.8,
                duration: 0.5,
                stagger: 0.1
            }, '-=0.3');
        }

        if (heroImage) {
            gsap.from(heroImage, {
                opacity: 0,
                scale: 0.9,
                duration: 1.2,
                delay: 0.3,
                ease: 'power2.out'
            });
        }

        // Animate floating shapes
        floatingShapes.forEach((shape, index) => {
            gsap.to(shape, {
                y: 'random(-30, 30)',
                x: 'random(-30, 30)',
                rotation: 'random(-15, 15)',
                duration: 'random(3, 5)',
                repeat: -1,
                yoyo: true,
                ease: 'sine.inOut',
                delay: index * 0.5
            });
        });
    }

    /**
     * Scroll-triggered Animations
     */
    function initScrollAnimations() {
        if (typeof ScrollTrigger === 'undefined') return;

        // Animate service cards on scroll
        const serviceCards = document.querySelectorAll('.home-new-service-card');
        serviceCards.forEach((card, index) => {
            gsap.from(card, {
                scrollTrigger: {
                    trigger: card,
                    start: 'top 85%',
                    end: 'top 50%',
                    toggleActions: 'play none none none'
                },
                opacity: 0,
                y: 50,
                duration: 0.8,
                delay: index * 0.1,
                ease: 'power2.out'
            });
        });

        // Animate workflow steps
        const workflowSteps = document.querySelectorAll('.home-new-workflow-step');
        workflowSteps.forEach((step, index) => {
            gsap.from(step, {
                scrollTrigger: {
                    trigger: step,
                    start: 'top 85%',
                    toggleActions: 'play none none none'
                },
                opacity: 0,
                x: -50,
                duration: 0.8,
                delay: index * 0.15,
                ease: 'power2.out'
            });
        });

        // Animate portfolio items
        const portfolioItems = document.querySelectorAll('.home-new-portfolio-item');
        portfolioItems.forEach((item, index) => {
            gsap.from(item, {
                scrollTrigger: {
                    trigger: item,
                    start: 'top 85%',
                    toggleActions: 'play none none none'
                },
                opacity: 0,
                scale: 0.9,
                duration: 0.8,
                delay: index * 0.1,
                ease: 'power2.out'
            });
        });

        // Animate achievement cards
        const achievementCards = document.querySelectorAll('.home-new-achievement-card');
        achievementCards.forEach((card, index) => {
            gsap.from(card, {
                scrollTrigger: {
                    trigger: card,
                    start: 'top 85%',
                    toggleActions: 'play none none none'
                },
                opacity: 0,
                y: 30,
                scale: 0.9,
                duration: 0.6,
                delay: index * 0.1,
                ease: 'back.out(1.7)'
            });
        });

        // Animate testimonial cards
        const testimonialCards = document.querySelectorAll('.home-new-testimonial-card');
        testimonialCards.forEach((card, index) => {
            gsap.from(card, {
                scrollTrigger: {
                    trigger: card,
                    start: 'top 85%',
                    toggleActions: 'play none none none'
                },
                opacity: 0,
                y: 40,
                duration: 0.8,
                delay: index * 0.15,
                ease: 'power2.out'
            });
        });

        // Animate tech logos
        const techLogos = document.querySelectorAll('.home-new-tech-logo-item');
        techLogos.forEach((logo, index) => {
            gsap.from(logo, {
                scrollTrigger: {
                    trigger: logo,
                    start: 'top 90%',
                    toggleActions: 'play none none none'
                },
                opacity: 0,
                scale: 0.8,
                rotation: -10,
                duration: 0.5,
                delay: index * 0.05,
                ease: 'back.out(1.7)'
            });
        });

        // Animate section headers
        const sectionHeaders = document.querySelectorAll('.home-new-section-header');
        sectionHeaders.forEach(header => {
            gsap.from(header, {
                scrollTrigger: {
                    trigger: header,
                    start: 'top 90%',
                    toggleActions: 'play none none none'
                },
                opacity: 0,
                y: 30,
                duration: 0.8,
                ease: 'power2.out'
            });
        });
    }

    /**
     * Parallax Effects
     */
    function initParallaxEffects() {
        if (typeof ScrollTrigger === 'undefined') return;

        const heroImage = document.querySelector('.home-new-hero-main-image');
        if (heroImage) {
            gsap.to(heroImage, {
                scrollTrigger: {
                    trigger: '.home-new-hero',
                    start: 'top top',
                    end: 'bottom top',
                    scrub: true
                },
                y: 100,
                scale: 1.1,
                ease: 'none'
            });
        }

        const floatingShapes = document.querySelectorAll('.home-new-shape');
        floatingShapes.forEach((shape, index) => {
            gsap.to(shape, {
                scrollTrigger: {
                    trigger: '.home-new-hero',
                    start: 'top top',
                    end: 'bottom top',
                    scrub: true
                },
                y: (index + 1) * 50,
                rotation: (index + 1) * 10,
                ease: 'none'
            });
        });
    }

    /**
     * Counter Animations
     */
    function initCounterAnimations() {
        if (typeof ScrollTrigger === 'undefined') return;

        // Hero stats counters
        const heroStatNumbers = document.querySelectorAll('.home-new-hero-stats .home-new-stat-number');
        heroStatNumbers.forEach(stat => {
            const text = stat.textContent.trim();
            const number = parseFloat(text.replace(/[^0-9.]/g, ''));
            
            if (isNaN(number)) return;

            const hasPlus = text.includes('+');
            
            ScrollTrigger.create({
                trigger: stat,
                start: 'top 85%',
                onEnter: () => {
                    gsap.to({ value: 0 }, {
                        value: number,
                        duration: 2,
                        ease: 'power2.out',
                        onUpdate: function() {
                            let displayValue = Math.floor(this.targets()[0].value);
                            if (hasPlus) {
                                stat.textContent = displayValue + '+';
                            } else {
                                stat.textContent = displayValue;
                            }
                        }
                    });
                }
            });
        });

        // Achievement counters
        const achievementNumbers = document.querySelectorAll('.home-new-achievement-number');
        achievementNumbers.forEach(stat => {
            const count = parseInt(stat.getAttribute('data-count')) || 0;
            
            if (count === 0) return;

            ScrollTrigger.create({
                trigger: stat,
                start: 'top 85%',
                onEnter: () => {
                    gsap.to({ value: 0 }, {
                        value: count,
                        duration: 2,
                        ease: 'power2.out',
                        onUpdate: function() {
                            stat.textContent = Math.floor(this.targets()[0].value);
                        }
                    });
                }
            });
        });
    }

    /**
     * Hover Effects
     */
    function initHoverEffects() {
        // Service cards hover effect
        const serviceCards = document.querySelectorAll('.home-new-service-card');
        serviceCards.forEach(card => {
            card.addEventListener('mouseenter', function() {
                gsap.to(this, {
                    scale: 1.02,
                    duration: 0.3,
                    ease: 'power2.out'
                });
            });

            card.addEventListener('mouseleave', function() {
                gsap.to(this, {
                    scale: 1,
                    duration: 0.3,
                    ease: 'power2.out'
                });
            });
        });

        // Portfolio items hover effect
        const portfolioItems = document.querySelectorAll('.home-new-portfolio-item');
        portfolioItems.forEach(item => {
            const overlay = item.querySelector('.home-new-portfolio-overlay');
            const image = item.querySelector('.home-new-portfolio-image');
            
            item.addEventListener('mouseenter', function() {
                gsap.to(overlay, {
                    opacity: 1,
                    duration: 0.3,
                    ease: 'power2.out'
                });
                gsap.to(image, {
                    scale: 1.1,
                    duration: 0.5,
                    ease: 'power2.out'
                });
            });

            item.addEventListener('mouseleave', function() {
                gsap.to(overlay, {
                    opacity: 0,
                    duration: 0.3,
                    ease: 'power2.out'
                });
                gsap.to(image, {
                    scale: 1,
                    duration: 0.5,
                    ease: 'power2.out'
                });
            });
        });

        // Button hover effects
        const buttons = document.querySelectorAll('.home-new-btn');
        buttons.forEach(button => {
            button.addEventListener('mouseenter', function() {
                gsap.to(this, {
                    y: -2,
                    duration: 0.2,
                    ease: 'power2.out'
                });
            });

            button.addEventListener('mouseleave', function() {
                gsap.to(this, {
                    y: 0,
                    duration: 0.2,
                    ease: 'power2.out'
                });
            });
        });

        // Tech logo hover effects
        const techLogos = document.querySelectorAll('.home-new-tech-logo-item');
        techLogos.forEach(logo => {
            logo.addEventListener('mouseenter', function() {
                gsap.to(this, {
                    scale: 1.1,
                    y: -4,
                    duration: 0.3,
                    ease: 'power2.out'
                });
            });

            logo.addEventListener('mouseleave', function() {
                gsap.to(this, {
                    scale: 1,
                    y: 0,
                    duration: 0.3,
                    ease: 'power2.out'
                });
            });
        });
    }

    /**
     * Portfolio Animations
     */
    function initPortfolioAnimations() {
        const portfolioItems = document.querySelectorAll('.home-new-portfolio-item');
        
        portfolioItems.forEach(item => {
            const link = item.querySelector('.home-new-portfolio-link');
            
            if (link) {
                link.addEventListener('mouseenter', function() {
                    gsap.to(this, {
                        scale: 1.05,
                        duration: 0.2,
                        ease: 'power2.out'
                    });
                });

                link.addEventListener('mouseleave', function() {
                    gsap.to(this, {
                        scale: 1,
                        duration: 0.2,
                        ease: 'power2.out'
                    });
                });
            }
        });
    }

    /**
     * Smooth Scroll
     */
    function initSmoothScroll() {
        // Smooth scroll for anchor links
        document.querySelectorAll('.home-new-page a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                if (href === '#' || href === '#!') return;
                
                const target = document.querySelector(href);
                if (target) {
                    e.preventDefault();
                    
                    if (typeof gsap !== 'undefined' && typeof ScrollToPlugin !== 'undefined') {
                        gsap.to(window, {
                            duration: 1,
                            scrollTo: {
                                y: target,
                                offsetY: 80
                            },
                            ease: 'power2.inOut'
                        });
                    } else {
                        // Fallback smooth scroll
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                }
            });
        });
    }

    /**
     * Basic Animations (Fallback when GSAP is not available)
     */
    function initBasicAnimations() {
        // Use Intersection Observer for basic fade-in animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        // Observe all animatable elements
        const animatableElements = document.querySelectorAll(
            '.home-new-service-card, .home-new-workflow-step, .home-new-portfolio-item, .home-new-achievement-card, .home-new-testimonial-card, .home-new-tech-logo-item'
        );

        animatableElements.forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(30px)';
            el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(el);
        });
    }

    /**
     * Scroll to Top Indicator
     */
    const scrollIndicator = document.querySelector('.home-new-scroll-indicator');
    if (scrollIndicator) {
        window.addEventListener('scroll', function() {
            if (window.scrollY > 100) {
                gsap.to(scrollIndicator, {
                    opacity: 0,
                    duration: 0.3,
                    pointerEvents: 'none'
                });
            } else {
                gsap.to(scrollIndicator, {
                    opacity: 1,
                    duration: 0.3,
                    pointerEvents: 'auto'
                });
            }
        });
    }

    // Refresh ScrollTrigger on window resize
    let resizeTimer;
    window.addEventListener('resize', function() {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(function() {
            if (typeof ScrollTrigger !== 'undefined') {
                ScrollTrigger.refresh();
            }
        }, 250);
    });

})();
