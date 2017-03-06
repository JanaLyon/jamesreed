<?php
/*
Template Name: About James
*/
get_header();
?>
    <div class="container">
        <div class="row">
            <div id="primary" class="content-area col-xs-12 col-md-9">
                <main id="main" class="site-main" role="main">
                    <article>
                        <?php while (have_posts()) : the_post(); ?>
                            <header class="entry-header">
                                <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
                            </header><!-- .entry-header -->

                            <?php the_post_thumbnail(); ?>
                            <div class="entry-content">
                                <?php the_content(); ?>
                            </div>
                        <?php endwhile; ?>
                    </article>
                </main><!-- #main -->
            </div><!-- #primary -->
            <div class="col-xs-12 col-md-3">
                <?php get_sidebar(); ?>
            </div><!-- col -->
        </div><!-- .row -->
    </div><!-- .container -->
<?php get_footer(); ?>
