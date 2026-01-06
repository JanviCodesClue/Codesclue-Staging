<?php
/*
Template Name: Clinet Testimonials Template
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
                                    <span class="section-subtitle char-anim" data-delay="0.75">Clinet Testimonials
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="breadcrumb-wrapper fade-anim" data-direction="left" data-offset="100"
                            data-delay="0.90">
                            <ul class="breadcrumb">
                                <li><a href="<?php echo home_url(''); ?>">HOME</a></li>
                                <li>Clinet Testimonials</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<section class="testimonial-section">
    <div class="container h-100">
        <div class="row align-items-center">

            <!-- LEFT -->
            <div class="col-lg-6 col-md-6 col-12 text-white left-box">
                <h2 class="fw-bold mb-3">Client Testimonial</h2>

                <p class="testimonial-desc">
                    Welcome to the CodesClue Client Testimonial section!
                    Discover how our expertise and innovative solutions
                    have empowered businesses through digital transformation.
                </p>

                <!-- CARDS ROW -->
                <div class="row g-3 mt-4 cards-row">

                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="review-glass">
                            <div class="d-flex align-items-center js-sm">
                                <span class="review-dot"></span>
                                <span class="ms-2 fw-semibold">GoodFirm</span>
                            </div>
                            <div class="stars mt-2">★★★★★</div>
                            <p class="small mb-0 mt-1">8 Reviews</p>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="review-glass">
                            <div class="d-flex align-items-center js-sm">
                                <span class="review-dot"></span>
                                <span class="ms-2 fw-semibold">Clutch</span>
                            </div>
                            <div class="stars mt-2">★★★★★</div>
                            <p class="small mb-0 mt-1">5 Reviews</p>
                        </div>
                    </div>

                </div>
            </div>

            <!-- RIGHT -->
            <div class="col-lg-6 col-md-6 col-12 position-relative right-box">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonials/testimonials-hero.png"
                     class="testimonial-man img-fluid"
                     alt="Client Testimonial">
            </div>

        </div>
    </div>
</section>

<section class="reviews-section-v3">
    <div class="container">

        <h5 class="reviews-subtitle">What our customers say about us</h5>
        <h2 class="reviews-title">Testimonials</h2>

        <!-- Cards Wrapper -->
        <div id="reviewsWrapper" class="row g-4 reviews-grid"></div>

        <!-- Pagination Arrows -->
        <div class="reviews-arrows">
            <button class="arrow-btn" id="prevBtn">❮❮</button>
            <button class="arrow-btn" id="nextBtn">❯❯</button>
        </div>

    </div>
</section>





<!-- Niche ka Testimonial Slider Section (Bottom Section) -->
<section class="gf-section">
    <div class="container">
        <h2 class="gf-title">What Our Clients Say</h2>

        <div class="gf-slider-wrapper">
            <div id="gfSlider" class="row"></div>

            <div class="gf-nav-btn-container">
                <button id="gfPrev" class="gf-nav-btn">❮❮</button>
                <button id="gfNext" class="gf-nav-btn">❯❯</button>
            </div>

        </div>
    </div>
</section>






    </main>




<?php get_footer(); ?>