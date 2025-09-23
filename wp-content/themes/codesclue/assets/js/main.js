/**
 * CodesClue Theme Main JavaScript
 * 
 * @package CodesClue
 */

(function($) {
    'use strict';

    // Document ready
    $(document).ready(function() {
        
        // Initialize all functions
        initMobileMenu();
        initSmoothScrolling();
        initScrollToTop();
        initStickyHeader();
        initAnimations();
        initTabs();
        initModals();
        initForms();
        initLazyLoading();
        initTooltips();
        
    });

    // Mobile menu functionality
    function initMobileMenu() {
        $('.navbar-toggler').on('click', function() {
            $(this).toggleClass('active');
            $('.navbar-collapse').toggleClass('show');
        });

        // Close mobile menu when clicking on a link
        $('.navbar-nav .nav-link').on('click', function() {
            $('.navbar-collapse').removeClass('show');
            $('.navbar-toggler').removeClass('active');
        });

        // Close mobile menu when clicking outside
        $(document).on('click', function(e) {
            if (!$(e.target).closest('.navbar').length) {
                $('.navbar-collapse').removeClass('show');
                $('.navbar-toggler').removeClass('active');
            }
        });
    }

    // Smooth scrolling for anchor links
    function initSmoothScrolling() {
        $('a[href^="#"]').on('click', function(e) {
            e.preventDefault();
            
            var target = $(this.getAttribute('href'));
            if (target.length) {
                $('html, body').stop().animate({
                    scrollTop: target.offset().top - 80
                }, 1000);
            }
        });
    }

    // Scroll to top button
    // function initScrollToTop() {
    //     var $scrollTop = $('<button class="scroll-to-top"><i class="fas fa-chevron-up"></i></button>');
    //     $('body').append($scrollTop);

    //     $(window).on('scroll', function() {
    //         if ($(this).scrollTop() > 300) {
    //             $scrollTop.addClass('show');
    //         } else {
    //             $scrollTop.removeClass('show');
    //         }
    //     });

    //     $scrollTop.on('click', function() {
    //         $('html, body').animate({
    //             scrollTop: 0
    //         }, 800);
    //     });
    // }

    // Sticky header
    function initStickyHeader() {
        var $header = $('.navbar');
        var headerOffset = $header.offset().top;

        $(window).on('scroll', function() {
            if ($(this).scrollTop() > headerOffset) {
                $header.addClass('sticky');
            } else {
                $header.removeClass('sticky');
            }
        });
    }

    // Animations on scroll
    function initAnimations() {
        // Animate elements when they come into view
        function animateOnScroll() {
            $('.animate-on-scroll').each(function() {
                var elementTop = $(this).offset().top;
                var elementBottom = elementTop + $(this).outerHeight();
                var viewportTop = $(window).scrollTop();
                var viewportBottom = viewportTop + $(window).height();

                if (elementBottom > viewportTop && elementTop < viewportBottom) {
                    $(this).addClass('animated');
                }
            });
        }

        // Initial check
        animateOnScroll();

        // Check on scroll
        $(window).on('scroll', animateOnScroll);
    }

    // Tab functionality
    function initTabs() {
        $('.nav-tabs .nav-link').on('click', function(e) {
            e.preventDefault();
            
            var target = $(this).data('bs-target');
            var $tabContent = $(target);
            
            // Remove active class from all tabs and content
            $('.nav-tabs .nav-link').removeClass('active');
            $('.tab-pane').removeClass('show active');
            
            // Add active class to clicked tab and content
            $(this).addClass('active');
            $tabContent.addClass('show active');
        });
    }

    // Modal functionality
    function initModals() {
        // Open modal
        $('[data-bs-toggle="modal"]').on('click', function(e) {
            e.preventDefault();
            var target = $(this).data('bs-target');
            $(target).modal('show');
        });

        // Close modal
        $('.modal .close, .modal .btn-close').on('click', function() {
            $(this).closest('.modal').modal('hide');
        });
    }

    // Form handling
    function initForms() {
        // Contact form submission
        $('.contact-form').on('submit', function(e) {
            e.preventDefault();
            
            var $form = $(this);
            var $submitBtn = $form.find('button[type="submit"]');
            var originalText = $submitBtn.text();
            
            // Show loading state
            $submitBtn.prop('disabled', true).text('Sending...');
            
            // Simulate form submission (replace with actual AJAX call)
            setTimeout(function() {
                $submitBtn.prop('disabled', false).text(originalText);
                $form.find('.form-control').val('');
                alert('Thank you for your message! We will get back to you soon.');
            }, 2000);
        });

        // Form validation
        $('.needs-validation').on('submit', function(e) {
            if (!this.checkValidity()) {
                e.preventDefault();
                e.stopPropagation();
            }
            $(this).addClass('was-validated');
        });
    }

    // Lazy loading for images
    function initLazyLoading() {
        if ('IntersectionObserver' in window) {
            const imageObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const img = entry.target;
                        img.src = img.dataset.src;
                        img.classList.remove('lazy');
                        imageObserver.unobserve(img);
                    }
                });
            });

            document.querySelectorAll('img[data-src]').forEach(img => {
                imageObserver.observe(img);
            });
        }
    }

    // Tooltips
    function initTooltips() {
        $('[data-bs-toggle="tooltip"]').tooltip();
    }

    // Counter animation
    function initCounters() {
        $('.counter').each(function() {
            var $this = $(this);
            var countTo = $this.attr('data-count');
            
            $({ countNum: $this.text() }).animate({
                countNum: countTo
            }, {
                duration: 2000,
                easing: 'swing',
                step: function() {
                    $this.text(Math.floor(this.countNum));
                },
                complete: function() {
                    $this.text(this.countNum);
                }
            });
        });
    }

    // Initialize counters when they come into view
    function initCounterOnScroll() {
        $('.counter').each(function() {
            var elementTop = $(this).offset().top;
            var elementBottom = elementTop + $(this).outerHeight();
            var viewportTop = $(window).scrollTop();
            var viewportBottom = viewportTop + $(window).height();

            if (elementBottom > viewportTop && elementTop < viewportBottom) {
                if (!$(this).hasClass('counted')) {
                    $(this).addClass('counted');
                    initCounters();
                }
            }
        });
    }

    // Call counter function on scroll
    // $(window).on('scroll', initCounterOnScroll);

    // function initParallax() {
    //     $(window).on('scroll', function() {
    //         var scrolled = $(this).scrollTop();
    //         $('.parallax').each(function() {
    //             var speed = $(this).data('speed') || 0.5;
    //             var yPos = -(scrolled * speed);
    //             $(this).css('transform', 'translateY(' + yPos + 'px)');
    //         });
    //     });
    // }
    // if ($('.parallax').length) {
    //     initParallax();
    // }

    // Search functionality
    function initSearch() {
        $('.search-toggle').on('click', function(e) {
            e.preventDefault();
            $('.search-form').toggleClass('active');
            $('.search-form input').focus();
        });

        // Close search on escape key
        $(document).on('keydown', function(e) {
            if (e.keyCode === 27) {
                $('.search-form').removeClass('active');
            }
        });
    }

    // Initialize search
    initSearch();

    // Back to top button styles
    $('<style>')
        .prop('type', 'text/css')
        .html(`
            .scroll-to-top {
                position: fixed;
                bottom: 20px;
                right: 20px;
                width: 50px;
                height: 50px;
                background: var(--primary-color);
                color: white;
                border: none;
                border-radius: 50%;
                cursor: pointer;
                opacity: 0;
                visibility: hidden;
                transition: all 0.3s ease;
                z-index: 1000;
            }
            .scroll-to-top.show {
                opacity: 1;
                visibility: visible;
            }
            .scroll-to-top:hover {
                background: var(--secondary-color);
                transform: translateY(-3px);
            }
            .navbar.sticky {
                position: fixed;
                top: 0;
                width: 100%;
                z-index: 1000;
                box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            }
            .animate-on-scroll {
                opacity: 0;
                transform: translateY(30px);
                transition: all 0.6s ease;
            }
            .animate-on-scroll.animated {
                opacity: 1;
                transform: translateY(0);
            }
        `)
        .appendTo('head');

})(jQuery); 