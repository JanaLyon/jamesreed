<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
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

                    get_template_part('template-parts/content', 'page');

                endwhile; // End of the loop.
                ?>
            </main><!-- #main -->
        </div><!-- #primary -->
        <div class="col-xs-12 col-md-3">
            <?php get_sidebar(); ?>
        </div><!-- col -->
    </div><!-- .row -->
</div><!-- .container -->
<?php get_footer(); ?>
