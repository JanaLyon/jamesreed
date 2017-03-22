<?php
/*
Template Name: In the News All Articles
Template Post Type: page
*/
get_header();

$inthenews_query = new WP_Query(array('post_type' => 'jr_inthenews'));

?>
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <a class="btn-link space-top-40" href="/james-reed/in-the-news-hub/"><i class="fa fa-chevron-left"
                                                                        aria-hidden="true"></i> Back to In the news</a>
                    </div>
                </div>
                <div class="row">
                    <header class="entry-header col-xs-12">
                        <?php the_title('<h1 class="entry-title h1-inthenews">', '</h1>'); ?>
                    </header><!-- .entry-header -->
                </div>

                <div class="all-news-module">
                    <div class="row">
                        <?php
                        while ($inthenews_query->have_posts()) {
                            $inthenews_query->the_post();
                            get_template_part('template-parts/article_module', "in_the_news_all");
                        } //if ($this_query)
                        wp_reset_query(); // Restore global post data stored by the_post().
                        ?>
                    </div>
                </div>
            </div><!-- .container -->
        </main><!-- #main -->
    </div><!-- #primary -->
<?php get_footer(); ?>