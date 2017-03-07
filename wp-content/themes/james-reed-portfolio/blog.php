<?php
/*
Template Name: blog
Template Post Type: page
*/
get_header();

$paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;

$customArgs = array(
    'post_type'      => 'post',
    'posts_per_page' => 12,
    'paged'			 => $paged,
    'category_name'  => 'blog'
);

$wp_query = new WP_Query($customArgs);

$this_query = new WP_Query('category_name=blog');

if ($wp_query->have_posts()) {

    $number_of_posts = $wp_query->post_count;
    $counter = 0;
    $count_posts = 0;

?>
    <div class="light-blue-bg">
        <div class="container">
            <div id="primary" class="content-area">
                <main id="main" class="site-main" role="main">
                    <div class="row">
                        <header class="entry-header col-xs-12">
                            <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
                        </header><!-- .entry-header -->
                    </div><!-- .row -->

                    <div class="row">
                        <div class="entry-content flex_posts">
                            <?php while ($wp_query->have_posts()) {
                                $wp_query->the_post();
                                get_template_part('template-parts/article_module', "blog");
                            } //end if count posts
                            } //if ($this_query)
                            ?>
                        </div>
                    </div><!-- .row -->

                    <div class="row">
                        <?php
                            get_template_part('template-parts/pagination', 'none');
                            wp_reset_query(); // Restore global post data stored by the_post().
                        ?>
                    </div><!-- .row -->
                </main><!-- #main -->
            </div><!-- #primary -->
        </div><!-- .container -->
    </div><!-- .light-blue-bg -->
<?php get_footer(); ?>