<?php
$this_query = new WP_Query(array( 'posts_per_page' => 5, 'category_name' => 'blog'));
?>

<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>

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
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
<script>

    jQuery(function () {
        jQuery('.front-page-slider ul').slick({
            dots: false,
//            arrows: false,
            prevArrow:jQuery(".prev"),
            nextArrow:jQuery(".next"),
            infinite: false,
            speed: 300,
            slidesToShow: 3.5,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 2.5,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1.5,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1.2,
                        slidesToScroll: 1
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });
    });
</script>
<div class="row">
    <div class="col-xs-12">
        <a href="/blog/" class="btn btn-action slider-btn-margin">View all articles</a>
    </div>
</div>