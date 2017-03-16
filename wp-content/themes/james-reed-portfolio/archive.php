<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package James_Reed_Portfolio
 */

get_header(); ?>


    <div class="container">
        <div class="row">
            <div id="primary" class="content-area col-xs-12 col-md-9">
                <main id="main" class="site-main" role="main">


                    <section class="error-404 not-found">
                        <header class="page-header">
                            <h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'james-reed-portfolio' ); ?></h1>
                        </header><!-- .page-header -->
                    </section>
                </main><!-- #main -->
            </div><!-- #primary -->
            <div class="col-xs-12 col-md-3">
                <?php get_sidebar(); ?>
            </div><!-- col -->
        </div><!-- .row -->
    </div><!-- .container -->
<?php get_footer(); ?>