<div class="article-module">
    <div class="image-container">
        <a href="<?php the_permalink(); ?>">
            <?php
            if (has_post_thumbnail()) {
                the_post_thumbnail('article-module-large');
            } else {
                echo "<img src='/wp-content/themes/reed-career-advice/img/fallback_image.jpg' />";
            }
            ?>
        </a>
        <div class="title-container">
            <a class="date" href="<?php the_permalink(); ?>"><?php echo get_the_date(); ?></a>
            <a class="title" href="<?php the_permalink(); ?>">
                <h4><?php the_title(); ?></h4>
            </a>
        </div>
    </div>
    <div class="text-container">
            <?php the_excerpt(); ?>
    </div>
    <div class="button-container">
        <?php get_template_part("template-parts/more_button", "blog"); ?>
    </div>

</div>