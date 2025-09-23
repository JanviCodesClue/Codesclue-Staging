<?php
/**
 * The sidebar containing the main widget area
 *
 * @package CodesClue
 */

if (!is_active_sidebar('sidebar-1')) {
    return;
}
?>

<aside id="secondary" class="widget-area">
    <?php dynamic_sidebar('sidebar-1'); ?>
    
    <!-- Search Widget -->
    <div class="widget search-widget">
        <h3 class="widget-title">Search</h3>
        <form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
            <div class="input-group">
                <input type="search" class="form-control" placeholder="Search..." value="<?php echo get_search_query(); ?>" name="s">
                <button class="btn btn-primary" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </form>
    </div>
    
    <!-- Recent Posts Widget -->
    <div class="widget recent-posts-widget">
        <h3 class="widget-title">Recent Posts</h3>
        <?php
        $recent_posts = new WP_Query(array(
            'posts_per_page' => 5,
            'post_status' => 'publish'
        ));
        
        if ($recent_posts->have_posts()) :
            echo '<ul class="recent-posts-list">';
            while ($recent_posts->have_posts()) : $recent_posts->the_post();
                ?>
                <li class="recent-post-item">
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="recent-post-thumbnail">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('thumbnail', array('class' => 'img-fluid')); ?>
                            </a>
                        </div>
                    <?php endif; ?>
                    <div class="recent-post-content">
                        <h4 class="recent-post-title">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h4>
                        <span class="recent-post-date"><?php echo get_the_date(); ?></span>
                    </div>
                </li>
                <?php
            endwhile;
            echo '</ul>';
            wp_reset_postdata();
        endif;
        ?>
    </div>
    
    <!-- Categories Widget -->
    <div class="widget categories-widget">
        <h3 class="widget-title">Categories</h3>
        <ul class="categories-list">
            <?php
            $categories = get_categories(array(
                'orderby' => 'name',
                'order' => 'ASC',
                'hide_empty' => true
            ));
            
            foreach ($categories as $category) :
                ?>
                <li class="category-item">
                    <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>">
                        <?php echo esc_html($category->name); ?>
                        <span class="category-count">(<?php echo $category->count; ?>)</span>
                    </a>
                </li>
                <?php
            endforeach;
            ?>
        </ul>
    </div>
    
    <!-- Services Widget -->
    <div class="widget services-widget">
        <h3 class="widget-title">Our Services</h3>
        <ul class="services-list">
            <?php
            $services = new WP_Query(array(
                'post_type' => 'services',
                'posts_per_page' => 5,
                'orderby' => 'title',
                'order' => 'ASC'
            ));
            
            if ($services->have_posts()) :
                while ($services->have_posts()) : $services->the_post();
                    ?>
                    <li class="service-item">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </li>
                    <?php
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </ul>
    </div>
    
    <!-- Contact Widget -->
    <div class="widget contact-widget">
        <h3 class="widget-title">Contact Info</h3>
        <div class="contact-info">
            <?php if (get_theme_mod('codesclue_phone')) : ?>
                <div class="contact-item">
                    <i class="fas fa-phone"></i>
                    <span><?php echo esc_html(get_theme_mod('codesclue_phone')); ?></span>
                </div>
            <?php endif; ?>
            
            <?php if (get_theme_mod('codesclue_email')) : ?>
                <div class="contact-item">
                    <i class="fas fa-envelope"></i>
                    <span><?php echo esc_html(get_theme_mod('codesclue_email')); ?></span>
                </div>
            <?php endif; ?>
            
            <?php if (get_theme_mod('codesclue_address')) : ?>
                <div class="contact-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <span><?php echo esc_html(get_theme_mod('codesclue_address')); ?></span>
                </div>
            <?php endif; ?>
        </div>
    </div>
</aside> 