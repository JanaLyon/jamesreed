<?php
/*
Template Name: In the News
Template Post Type: page
*/
get_header();

$inthenews_query = new WP_Query(array('post_type' => 'jr_inthenews'));

?>
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <div class="container-fluid dark-background space-bottom-25">
                <div class="container">
                    <div class="row">
                        <header class="entry-header col-xs-12">
                            <?php the_title('<h1 class="entry-title white">', '</h1>'); ?>
                        </header><!-- .entry-header -->
                    </div><!-- .row -->
                    <?php get_template_part('template-parts/video', 'tabs'); ?>
                </div><!-- .container -->
            </div><!-- .container-fluid -->

            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h2>Selected articles</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="entry-content flex_posts">
                        <?php
                        while ($inthenews_query->have_posts()) {
                            $inthenews_query->the_post();
                            get_template_part('template-parts/article_module', "in_the_news");
                        } //if ($this_query)
                        wp_reset_query(); // Restore global post data stored by the_post().
                        ?>
                    </div>
                </div><!-- .row -->
                <div class="row">
                    <div class="button-container text-center space-top-20">
                        <a class="btn-action" href="/in-the-news-all-articles/">View all articles</a>
                    </div>
                </div>
            </div><!-- .container -->
        </main><!-- #main -->
    </div><!-- #primary -->
<?php get_footer(); ?>