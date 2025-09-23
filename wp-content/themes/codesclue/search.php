<?php
/**
 * The template for displaying search results pages
 *
 * @package CodesClue
 */

get_header(); ?>

<main id="main" class="site-main">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <header class="page-header">
                    <?php codesclue_breadcrumbs(); ?>
                    
                    <h1 class="page-title">
                        <?php
                        printf(
                            /* translators: %s: search query. */
                            esc_html__('Search Results for: %s', 'codesclue'),
                            '<span>' . get_search_query() . '</span>'
                        );
                        ?>
                    </h1>
                </header>
                
                <?php if (have_posts()) : ?>
                    <div class="search-results">
                        <?php while (have_posts()) : the_post(); ?>
                            <article id="post-<?php the_ID(); ?>" <?php post_class('search-result mb-4'); ?>>
                                <div class="row">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <div class="col-md-4">
                                            <div class="post-thumbnail">
                                                <a href="<?php the_permalink(); ?>">
                                                    <?php the_post_thumbnail('codesclue-medium', array('class' => 'img-fluid')); ?>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                    <?php else : ?>
                                        <div class="col-12">
                                    <?php endif; ?>
                                    
                                    <div class="post-content">
                                        <h2 class="entry-title">
                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </h2>
                                        
                                        <div class="entry-meta">
                                            <span class="posted-on">
                                                <i class="far fa-calendar-alt"></i>
                                                <?php echo get_the_date(); ?>
                                            </span>
                                            <span class="byline">
                                                <i class="far fa-user"></i>
                                                <?php the_author(); ?>
                                            </span>
                                            <?php if (has_category()) : ?>
                                                <span class="cat-links">
                                                    <i class="fas fa-folder"></i>
                                                    <?php the_category(', '); ?>
                                                </span>
                                            <?php endif; ?>
                                            <span class="post-type">
                                                <i class="fas fa-file-alt"></i>
                                                <?php echo get_post_type_object(get_post_type())->labels->singular_name; ?>
                                            </span>
                                        </div>
                                        
                                        <div class="entry-summary">
                                            <?php the_excerpt(); ?>
                                        </div>
                                        
                                        <div class="entry-footer">
                                            <a href="<?php the_permalink(); ?>" class="btn btn-primary btn-sm"><?php _e('Read More', 'codesclue'); ?></a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        <?php endwhile; ?>
                    </div>
                    
                    <?php
                    // Pagination
                    codesclue_pagination();
                    ?>
                <?php else : ?>
                    <div class="no-results">
                        <h2><?php _e('No results found', 'codesclue'); ?></h2>
                        <p><?php _e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'codesclue'); ?></p>
                        
                        <div class="search-form-wrapper">
                            <?php get_search_form(); ?>
                        </div>
                        
                        <div class="suggestions">
                            <h3><?php _e('Suggestions:', 'codesclue'); ?></h3>
                            <ul>
                                <li><?php _e('Make sure all words are spelled correctly.', 'codesclue'); ?></li>
                                <li><?php _e('Try different keywords.', 'codesclue'); ?></li>
                                <li><?php _e('Try more general keywords.', 'codesclue'); ?></li>
                                <li><?php _e('Try fewer keywords.', 'codesclue'); ?></li>
                            </ul>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
            
            <div class="col-lg-4">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?> 