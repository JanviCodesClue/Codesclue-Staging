<?php
/**
 * Template Name: Home Page
 *
 * @package CodesClue
 */

get_header(); ?>

<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="hero-content">
                    <h1 class="hero-title">
                        Premium Web & Mobile App Development for Businesses
                    </h1>
                    <p class="hero-description">
                        Leading Software Development Company - Delivering custom software development services and solutions to build intelligent enterprises with speed and agility.
                    </p>
                    <div class="hero-buttons">
                        <a href="<?php echo esc_url(home_url('/contact-us')); ?>" class="btn btn-primary">Get Started</a>
                        <a href="<?php echo esc_url(home_url('/portfolio')); ?>" class="btn btn-outline-primary">View Our Work</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="hero-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/codesclue_hero_image.svg" alt="CodesClue Hero" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="services-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="section-title">Our Services</h2>
                <p class="section-description">Comprehensive software development solutions for your business</p>
            </div>
        </div>
        
        <div class="row">
            <?php
            $services = new WP_Query(array(
                'post_type' => 'services',
                'posts_per_page' => 6,
                'orderby' => 'meta_value_num',
                'meta_key' => 'service_order',
                'order' => 'ASC'
            ));
            
            if ($services->have_posts()) :
                while ($services->have_posts()) : $services->the_post();
                    $service_icon = get_post_meta(get_the_ID(), 'service_icon', true);
                    $service_link = get_post_meta(get_the_ID(), 'service_link', true);
                    ?>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="service-card">
                            <?php if ($service_icon) : ?>
                                <div class="service-icon">
                                    <i class="<?php echo esc_attr($service_icon); ?>"></i>
                                </div>
                            <?php endif; ?>
                            <h3 class="service-title"><?php the_title(); ?></h3>
                            <div class="service-description"><?php the_excerpt(); ?></div>
                            <?php if ($service_link) : ?>
                                <a href="<?php echo esc_url($service_link); ?>" class="service-link">Learn More</a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="about-section py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-content">
                    <h2 class="section-title">About CodesClue</h2>
                    <p class="about-description">
                        We are a leading software development company specializing in custom web and mobile applications. 
                        Our team of experienced developers and designers work together to deliver innovative solutions 
                        that help businesses grow and succeed in the digital world.
                    </p>
                    <div class="about-stats">
                        <div class="stat-item">
                            <h3>100+</h3>
                            <p>Projects Completed</p>
                        </div>
                        <div class="stat-item">
                            <h3>50+</h3>
                            <p>Happy Clients</p>
                        </div>
                        <div class="stat-item">
                            <h3>5+</h3>
                            <p>Years Experience</p>
                        </div>
                    </div>
                    <a href="<?php echo esc_url(home_url('/about-us')); ?>" class="btn btn-primary">Learn More</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-us/codesclue_about_img.webp" alt="About CodesClue" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Portfolio Section -->
<section class="portfolio-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="section-title">Our Latest Work</h2>
                <p class="section-description">Explore our recent projects and success stories</p>
            </div>
        </div>
        
        <div class="row">
            <?php
            $portfolio = new WP_Query(array(
                'post_type' => 'portfolio',
                'posts_per_page' => 6,
                'orderby' => 'date',
                'order' => 'DESC'
            ));
            
            if ($portfolio->have_posts()) :
                while ($portfolio->have_posts()) : $portfolio->the_post();
                    $client_name = get_post_meta(get_the_ID(), 'client_name', true);
                    $project_url = get_post_meta(get_the_ID(), 'project_url', true);
                    ?>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="portfolio-card">
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="portfolio-image">
                                    <?php the_post_thumbnail('codesclue-medium', array('class' => 'img-fluid')); ?>
                                </div>
                            <?php endif; ?>
                            <div class="portfolio-content">
                                <h3 class="portfolio-title"><?php the_title(); ?></h3>
                                <?php if ($client_name) : ?>
                                    <p class="portfolio-client">Client: <?php echo esc_html($client_name); ?></p>
                                <?php endif; ?>
                                <div class="portfolio-description"><?php the_excerpt(); ?></div>
                                <?php if ($project_url) : ?>
                                    <a href="<?php echo esc_url($project_url); ?>" class="portfolio-link" target="_blank">View Project</a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <?php
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </div>
        
        <div class="row">
            <div class="col-12 text-center">
                <a href="<?php echo esc_url(home_url('/portfolio')); ?>" class="btn btn-primary">View All Projects</a>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="testimonials-section py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="section-title">What Our Clients Say</h2>
                <p class="section-description">Testimonials from satisfied clients</p>
            </div>
        </div>
        
        <div class="row">
            <?php
            $testimonials = new WP_Query(array(
                'post_type' => 'testimonials',
                'posts_per_page' => 3,
                'orderby' => 'date',
                'order' => 'DESC'
            ));
            
            if ($testimonials->have_posts()) :
                while ($testimonials->have_posts()) : $testimonials->the_post();
                    $client_company = get_post_meta(get_the_ID(), 'client_company', true);
                    $client_position = get_post_meta(get_the_ID(), 'client_position', true);
                    $rating = get_post_meta(get_the_ID(), 'rating', true);
                    ?>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="testimonial-card">
                            <div class="testimonial-content">
                                <div class="testimonial-text"><?php the_content(); ?></div>
                                <div class="testimonial-rating">
                                    <?php for ($i = 1; $i <= 5; $i++) : ?>
                                        <i class="fas fa-star <?php echo $i <= $rating ? 'text-warning' : 'text-muted'; ?>"></i>
                                    <?php endfor; ?>
                                </div>
                            </div>
                            <div class="testimonial-author">
                                <h4 class="author-name"><?php the_title(); ?></h4>
                                <?php if ($client_position) : ?>
                                    <p class="author-position"><?php echo esc_html($client_position); ?></p>
                                <?php endif; ?>
                                <?php if ($client_company) : ?>
                                    <p class="author-company"><?php echo esc_html($client_company); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <?php
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="cta-title">Ready to Start Your Project?</h2>
                <p class="cta-description">Let's discuss how we can help bring your ideas to life</p>
                <a href="<?php echo esc_url(home_url('/contact-us')); ?>" class="btn btn-primary btn-lg">Get Free Consultation</a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?> 