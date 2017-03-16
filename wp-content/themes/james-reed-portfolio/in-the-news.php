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
                </div><!-- .row -->
                <div class="row">
                    <section class="press-enquiries space-top-40">
                        <div class="col-xs-12 col-md-2">
                            <img src="/james-reed/wp-content/themes/james-reed-portfolio/img/press-icon.svg" width="100px" height="auto" />
                            </div>
                        <div class="col-xs-12 col-md-8">
                        <p>If you’re a member of the media and you’d like to interview James or receive a comment for a story you’re covering, click here to get in touch with a member of our press team.</p>
                        </div>
                        <div class="col-xs-12 col-md-2">
                            <a href="mailto:press.enquiries@reedonline.co.uk" class="btn-action">Press enquiries</a>
                        </div>
                    </section>
                </div><!-- .row -->
            </div><!-- .container -->
        </main><!-- #main -->
    </div><!-- #primary -->
<?php get_footer(); ?>