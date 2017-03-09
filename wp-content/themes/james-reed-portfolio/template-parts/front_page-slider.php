<?php
$this_query = new WP_Query(array( 'posts_per_page' => 5, 'category_name' => 'blog'));
?>

<div class="row">
    <div class="col-xs-9">
        <h2>Latest blog posts</h2>
    </div>
    <div class="col-xs-3" style="position: relative;">
        <button class="prev carousel-control"></button>
        <button class="next carousel-control"></button>
    </div>
</div>
<div class="row">
    <div class="col-xs-12">
        <div class="front-page-slider">
            <ul>
                <?php
                while ($this_query->have_posts()) {
                        if ($this_query->have_posts()) {
                            $this_query->the_post();  ?>
                            <li class='hero-module'><?php get_template_part('template-parts/article_module', 'latest_posts') ?></li>
                            <?php
                        } //endwhile
                    } //if ($this_query)
                wp_reset_query(); // Restore global post data stored by the_post().*/
                ?>
            </ul>
        </div>
    </div>
</div>

<script>

    jQuery(function () {
        jQuery(".front-page-slider").jCarouselLite({
            btnNext: ".next",
            btnPrev: ".prev",
            visible: 2.8,
            circular: false
        });
    });
</script>
<div class="row">
    <div class="col-xs-12">
        <a class="btn btn-action slider-btn-margin">View all articles</a>
    </div>
</div>