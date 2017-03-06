<?php
/*
Template Name: Front page
*/
get_header();
?>

    <main id="primary" class="site-main" role="main">

        <!-- James Reed -->
        <section id="james_reed">
            <h1 class="hidden">James Reed</h1>
            <?php get_template_part("template-parts/front_page", "ask_james"); ?>
        </section>

        <!-- Media -->
        <section id="media">
            <?php get_template_part("template-parts/front_page", "media"); ?>
        </section>

        <!-- Latest blog posts -->
        <section id="latest_posts">
            <h1 class="hidden">Latest blog posts</h1>
            <?php get_template_part("template-parts/front_page", "latest_posts"); ?>
        </section>

        <!-- Books -->
        <section id="books">
            <h1 class="hidden">Books</h1>
            <?php get_template_part("template-parts/front_page", "books"); ?>
        </section>

    </main>
<?php get_footer(); ?>