<?php
$james_job_title = get_post_meta(get_the_ID(), "0-james_job_title", true);
$ask_james_image_url = get_post_meta(get_the_ID(), "1-ask_james_image_url", true);

?>

<?php
while (have_posts()) : the_post();
    ?>
    <section id="post-<?php the_ID(); ?>" class="top-box">
        <div class="container">
            <div class="row">
                <div class="header-container col-xs-12">
                    <?php the_post_thumbnail('header'); ?>
                    <div class="text-overlay-mobile">
                            <h1 class="h1-large hidden-md hidden-lg">James Reed</h1>
                            <h3 class="hidden-md hidden-lg"><?php echo $james_job_title; ?></h3>
                    </div>
                    <div class="text-overlay">
                        <?php if ($picture_side == "left") { ?>
                            <div class="hidden-sm col-md-6"></div>
                        <?php } ?>
                        <div class="col-sm-12 col-md-6">
                            <div class="ask-james-content text-center">
                                <h1 class="h1-large hidden-xs hidden-sm">James Reed</h1>
                                <h3 class="hidden-xs hidden-sm"><?php echo $james_job_title; ?></h3>
                                <?php the_content(); ?>
                            </div>
                        </div>
                        <?php if ($picture_side == "right") { ?>
                            <div class="hidden-sm col-md-6"></div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- #post-## -->

    <?php
endwhile; // End of the loop.
?>