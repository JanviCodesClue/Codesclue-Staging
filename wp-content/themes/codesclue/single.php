<?php
/**
 * The template for displaying all single posts
 *
 * @package CodesClue
 */

get_header(); ?>

<main id="main" class="site-main">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <?php while (have_posts()) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('single-post'); ?>>
                        <header class="entry-header">
                            <?php codesclue_breadcrumbs(); ?>
                            
                            <h1 class="entry-title"><?php the_title(); ?></h1>
                            
                            <div class="entry-meta">
                                <span class="posted-on">
                                    <i class="far fa-calendar-alt"></i>
                                    <?php echo get_the_date(); ?>
                                </span>
                                <span class="byline">
                                    <i class="far fa-user"></i>
                                    <?php the_author(); ?>
                                </span>
                                <span class="comments-link">
                                    <i class="far fa-comments"></i>
                                    <?php comments_number('0', '1', '%'); ?>
                                </span>
                                <?php if (has_category()) : ?>
                                    <span class="cat-links">
                                        <i class="fas fa-folder"></i>
                                        <?php the_category(', '); ?>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </header>
                        
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="post-thumbnail">
                                <?php the_post_thumbnail('codesclue-large', array('class' => 'img-fluid')); ?>
                            </div>
                        <?php endif; ?>
                        
                        <div class="entry-content">
                            <?php
                            the_content();
                            
                            wp_link_pages(array(
                                'before' => '<div class="page-links">' . esc_html__('Pages:', 'codesclue'),
                                'after'  => '</div>',
                            ));
                            ?>
                        </div>
                        
                        <footer class="entry-footer">
                            <?php if (has_tag()) : ?>
                                <div class="tags-links">
                                    <h4><?php _e('Tags:', 'codesclue'); ?></h4>
                                    <?php the_tags('<div class="tag-list">', '', '</div>'); ?>
                                </div>
                            <?php endif; ?>
                            
                            <?php codesclue_social_share(); ?>
                        </footer>
                    </article>
                    
                    <?php
                    // Author bio
                    codesclue_author_bio();
                    
                    // Related posts
                    codesclue_related_posts();
                    
                    // If comments are open or we have at least one comment, load up the comment template.
                    if (comments_open() || get_comments_number()) :
                        comments_template();
                    endif;
                    ?>
                <?php endwhile; ?>
            </div>
            
            <div class="col-lg-4">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?> 