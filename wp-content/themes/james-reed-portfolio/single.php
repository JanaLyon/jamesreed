<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package James_Reed_Portfolio
 */

get_header(); ?>


<div class="container">
    <div class="row">
        <div id="primary" class="content-area col-xs-12 col-md-9">
            <main id="main" class="site-main" role="main">

                <?php
                while (have_posts()) : the_post();

                    get_template_part('template-parts/content', get_post_format());

                endwhile; // End of the loop.
                ?>
                <nav class="post-navigation">
                    <span class="prev-post"><?php previous_post_link('%link', '<  Prev', TRUE); ?></span>
                    <span class="next-post"><?php next_post_link( '%link', 'Next  >', TRUE ); ?> </span>
                </nav>
            </main><!-- #main -->
        </div><!-- #primary -->
        <div class="col-xs-12 col-md-3">
            <?php get_sidebar(); ?>
        </div><!-- col -->
    </div><!-- .row -->
</div><!-- .container -->
<?php get_footer(); ?>

