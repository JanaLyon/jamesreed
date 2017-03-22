<div class="recent-posts-block" id="recent-posts">
    <h3>Recent posts</h3>
    <?php
    $recentPostArgs = array(
        'posts_per_page' => 3,
        'orderby' => 'date',
        'cat' => 0
    );
    $recent_query = new WP_Query($recentPostArgs);
    while ($recent_query->have_posts()) {
    $recent_query->the_post();
    ?>
    <div class="date-container">
        <p><?php echo get_the_date(); ?></p>
    </div>
    <div class="title-container">
        <a class="title" href="<?php the_permalink(); ?>">
            <h4><?php the_title(); ?></h4>
        </a>
    </div>
    <div class="button-container">
        <a href="<?php the_permalink(); ?>" class="btn btn-link">
            Read Article <i class="fa fa-chevron-right" aria-hidden="true"></i>
        </a>
    </div>
        <?php
    }
    wp_reset_postdata();
    ?>
</div>
<div class="button-container view-all">
    <a href="/james-reed/blog" class="btn btn-link">
        View all <i class="fa fa-chevron-right" aria-hidden="true"></i>
    </a>
</div>