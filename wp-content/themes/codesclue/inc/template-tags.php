<?php
/**
 * Custom template tags for this theme
 *
 * @package CodesClue
 */

if (!function_exists('codesclue_posted_on')) :
    /**
     * Prints HTML with meta information for the current post-date/time.
     */
    function codesclue_posted_on() {
        $time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
        if (get_the_time('U') !== get_the_modified_time('U')) {
            $time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
        }

        $time_string = sprintf(
            $time_string,
            esc_attr(get_the_date(DATE_W3C)),
            esc_html(get_the_date()),
            esc_attr(get_the_modified_date(DATE_W3C)),
            esc_html(get_the_modified_date())
        );

        $posted_on = sprintf(
            /* translators: %s: post date. */
            esc_html_x('Posted on %s', 'post date', 'codesclue'),
            '<a href="' . esc_url(get_permalink()) . '" rel="bookmark">' . $time_string . '</a>'
        );

        echo '<span class="posted-on">' . $posted_on . '</span>'; // WPCS: XSS OK.
    }
endif;

if (!function_exists('codesclue_posted_by')) :
    /**
     * Prints HTML with meta information for the current author.
     */
    function codesclue_posted_by() {
        $byline = sprintf(
            /* translators: %s: post author. */
            esc_html_x('by %s', 'post author', 'codesclue'),
            '<span class="author vcard"><a class="url fn n" href="' . esc_url(get_author_posts_url(get_the_author_meta('ID'))) . '">' . esc_html(get_the_author()) . '</a></span>'
        );

        echo '<span class="byline"> ' . $byline . '</span>'; // WPCS: XSS OK.
    }
endif;

if (!function_exists('codesclue_entry_footer')) :
    /**
     * Prints HTML with meta information for the categories, tags and comments.
     */
    function codesclue_entry_footer() {
        // Hide category and tag text for pages.
        if ('post' === get_post_type()) {
            /* translators: used between list items, there is a space after the comma */
            $categories_list = get_the_category_list(esc_html__(', ', 'codesclue'));
            if ($categories_list) {
                /* translators: 1: list of categories. */
                printf('<span class="cat-links">' . esc_html__('Posted in %1$s', 'codesclue') . '</span>', $categories_list); // WPCS: XSS OK.
            }

            /* translators: used between list items, there is a space after the comma */
            $tags_list = get_the_tag_list('', esc_html_x(', ', 'list item separator', 'codesclue'));
            if ($tags_list) {
                /* translators: 1: list of tags. */
                printf('<span class="tags-links">' . esc_html__('Tagged %1$s', 'codesclue') . '</span>', $tags_list); // WPCS: XSS OK.
            }
        }

        if (!is_single() && !post_password_required() && (comments_open() || get_comments_number())) {
            echo '<span class="comments-link">';
            comments_popup_link(
                sprintf(
                    wp_kses(
                        /* translators: %s: post title */
                        __('Leave a Comment<span class="screen-reader-text"> on %s</span>', 'codesclue'),
                        array(
                            'span' => array(
                                'class' => array(),
                            ),
                        )
                    ),
                    wp_kses_post(get_the_title())
                )
            );
            echo '</span>';
        }

        edit_post_link(
            sprintf(
                wp_kses(
                    /* translators: %s: Name of current post. Only visible to screen readers */
                    __('Edit <span class="screen-reader-text">%s</span>', 'codesclue'),
                    array(
                        'span' => array(
                            'class' => array(),
                        ),
                    )
                ),
                wp_kses_post(get_the_title())
            ),
            '<span class="edit-link">',
            '</span>'
        );
    }
endif;

if (!function_exists('codesclue_post_thumbnail')) :
    /**
     * Displays an optional post thumbnail.
     *
     * Wraps the post thumbnail in an anchor element on index views, or a div
     * element when on single views.
     */
    function codesclue_post_thumbnail() {
        if (post_password_required() || is_attachment() || !has_post_thumbnail()) {
            return;
        }

        if (is_singular()) :
            ?>
            <div class="post-thumbnail">
                <?php the_post_thumbnail(); ?>
            </div><!-- .post-thumbnail -->
        <?php else : ?>
            <a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
                <?php
                the_post_thumbnail(
                    'post-thumbnail',
                    array(
                        'alt' => the_title_attribute(
                            array(
                                'echo' => false,
                            )
                        ),
                    )
                );
                ?>
            </a>
            <?php
        endif; // End is_singular().
    }
endif;

if (!function_exists('codesclue_pagination')) :
    /**
     * Display pagination
     */
    function codesclue_pagination() {
        the_posts_pagination(array(
            'mid_size' => 2,
            'prev_text' => '<i class="fas fa-chevron-left"></i> ' . __('Previous', 'codesclue'),
            'next_text' => __('Next', 'codesclue') . ' <i class="fas fa-chevron-right"></i>',
            'screen_reader_text' => __('Posts navigation', 'codesclue'),
        ));
    }
endif;

if (!function_exists('codesclue_breadcrumbs')) :
    /**
     * Display breadcrumbs
     */
    function codesclue_breadcrumbs() {
        if (is_front_page()) {
            return;
        }

        echo '<nav class="breadcrumb-nav" aria-label="' . __('Breadcrumb', 'codesclue') . '">';
        echo '<ol class="breadcrumb">';
        
        echo '<li class="breadcrumb-item"><a href="' . esc_url(home_url('/')) . '">' . __('Home', 'codesclue') . '</a></li>';
        
        if (is_category() || is_single()) {
            $category = get_the_category();
            if ($category) {
                echo '<li class="breadcrumb-item"><a href="' . esc_url(get_category_link($category[0]->term_id)) . '">' . esc_html($category[0]->name) . '</a></li>';
            }
        }
        
        if (is_single()) {
            echo '<li class="breadcrumb-item active" aria-current="page">' . get_the_title() . '</li>';
        }
        
        if (is_page()) {
            echo '<li class="breadcrumb-item active" aria-current="page">' . get_the_title() . '</li>';
        }
        
        if (is_archive()) {
            echo '<li class="breadcrumb-item active" aria-current="page">' . get_the_archive_title() . '</li>';
        }
        
        echo '</ol>';
        echo '</nav>';
    }
endif;

if (!function_exists('codesclue_social_share')) :
    /**
     * Display social share buttons
     */
    function codesclue_social_share() {
        if (!is_singular()) {
            return;
        }
        
        $url = urlencode(get_permalink());
        $title = urlencode(get_the_title());
        
        echo '<div class="social-share">';
        echo '<h4>' . __('Share this post', 'codesclue') . '</h4>';
        echo '<div class="social-share-buttons">';
        
        // Facebook
        echo '<a href="https://www.facebook.com/sharer/sharer.php?u=' . $url . '" target="_blank" class="social-share-btn facebook">';
        echo '<i class="fab fa-facebook-f"></i>';
        echo '</a>';
        
        // Twitter
        echo '<a href="https://twitter.com/intent/tweet?url=' . $url . '&text=' . $title . '" target="_blank" class="social-share-btn twitter">';
        echo '<i class="fab fa-twitter"></i>';
        echo '</a>';
        
        // LinkedIn
        echo '<a href="https://www.linkedin.com/sharing/share-offsite/?url=' . $url . '" target="_blank" class="social-share-btn linkedin">';
        echo '<i class="fab fa-linkedin-in"></i>';
        echo '</a>';
        
        // WhatsApp
        echo '<a href="https://wa.me/?text=' . $title . '%20' . $url . '" target="_blank" class="social-share-btn whatsapp">';
        echo '<i class="fab fa-whatsapp"></i>';
        echo '</a>';
        
        echo '</div>';
        echo '</div>';
    }
endif;

if (!function_exists('codesclue_related_posts')) :
    /**
     * Display related posts
     */
    function codesclue_related_posts() {
        if (!is_singular('post')) {
            return;
        }
        
        $categories = get_the_category();
        if (!$categories) {
            return;
        }
        
        $category_ids = array();
        foreach ($categories as $category) {
            $category_ids[] = $category->term_id;
        }
        
        $related_posts = new WP_Query(array(
            'category__in' => $category_ids,
            'post__not_in' => array(get_the_ID()),
            'posts_per_page' => 3,
            'orderby' => 'rand'
        ));
        
        if ($related_posts->have_posts()) :
            echo '<section class="related-posts">';
            echo '<h3>' . __('Related Posts', 'codesclue') . '</h3>';
            echo '<div class="row">';
            
            while ($related_posts->have_posts()) : $related_posts->the_post();
                ?>
                <div class="col-md-4">
                    <article class="related-post">
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="related-post-thumbnail">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('codesclue-thumbnail', array('class' => 'img-fluid')); ?>
                                </a>
                            </div>
                        <?php endif; ?>
                        <div class="related-post-content">
                            <h4 class="related-post-title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h4>
                            <div class="related-post-meta">
                                <span class="related-post-date"><?php echo get_the_date(); ?></span>
                            </div>
                        </div>
                    </article>
                </div>
                <?php
            endwhile;
            
            echo '</div>';
            echo '</section>';
            wp_reset_postdata();
        endif;
    }
endif;

if (!function_exists('codesclue_author_bio')) :
    /**
     * Display author bio
     */
    function codesclue_author_bio() {
        if (!is_singular('post')) {
            return;
        }
        
        $author_id = get_the_author_meta('ID');
        $author_description = get_the_author_meta('description');
        
        if (!$author_description) {
            return;
        }
        
        ?>
        <div class="author-bio">
            <div class="author-avatar">
                <?php echo get_avatar($author_id, 100); ?>
            </div>
            <div class="author-info">
                <h3 class="author-name"><?php the_author(); ?></h3>
                <p class="author-description"><?php echo esc_html($author_description); ?></p>
                <div class="author-links">
                    <?php if (get_the_author_meta('url')) : ?>
                        <a href="<?php echo esc_url(get_the_author_meta('url')); ?>" target="_blank" class="author-website">
                            <i class="fas fa-globe"></i>
                        </a>
                    <?php endif; ?>
                    
                    <?php if (get_the_author_meta('twitter')) : ?>
                        <a href="https://twitter.com/<?php echo esc_attr(get_the_author_meta('twitter')); ?>" target="_blank" class="author-twitter">
                            <i class="fab fa-twitter"></i>
                        </a>
                    <?php endif; ?>
                    
                    <?php if (get_the_author_meta('linkedin')) : ?>
                        <a href="<?php echo esc_url(get_the_author_meta('linkedin')); ?>" target="_blank" class="author-linkedin">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <?php
    }
endif; 