<?php
/**
 * The template for displaying all pages
 *
 * @package CodesClue
 */

get_header(); ?>

<main id="main" class="site-main">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <?php while (have_posts()) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('page-content'); ?>>
                        <header class="entry-header">
                            <?php codesclue_breadcrumbs(); ?>
                            
                            <h1 class="entry-title"><?php the_title(); ?></h1>
                        </header>
                        
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="page-thumbnail">
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
                        
                        <?php if (comments_open() || get_comments_number()) : ?>
                            <div class="comments-area">
                                <?php comments_template(); ?>
                            </div>
                        <?php endif; ?>
                    </article>
                <?php endwhile; ?>
            </div>
            
            <div class="col-lg-4">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?> 