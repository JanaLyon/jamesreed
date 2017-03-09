<?php
/*
Template Name: Ask James
Template Post Type: page
*/

//bring in meta box content
$picture_side = get_post_meta(get_the_ID(), "picture_side", true);

$dateArray = array(
    $Career_advice_article_date1 = get_post_meta(get_the_ID(), "1-Career_advice_article_date", true),
    $Career_advice_article_date2 = get_post_meta(get_the_ID(), "2-Career_advice_article_date", true),
    $Career_advice_article_date3 = get_post_meta(get_the_ID(), "3-Career_advice_article_date", true),
    $Career_advice_article_date4 = get_post_meta(get_the_ID(), "4-Career_advice_article_date", true),
    $Career_advice_article_date5 = get_post_meta(get_the_ID(), "5-Career_advice_article_date", true),
    $Career_advice_article_date6 = get_post_meta(get_the_ID(), "6-Career_advice_article_date", true)
);

$imageArray = array(
    $Career_advice_article_image1 = get_post_meta(get_the_ID(), "1-Career_advice_article_image", true),
    $Career_advice_article_image2 = get_post_meta(get_the_ID(), "2-Career_advice_article_image", true),
    $Career_advice_article_image3 = get_post_meta(get_the_ID(), "3-Career_advice_article_image", true),
    $Career_advice_article_image4 = get_post_meta(get_the_ID(), "4-Career_advice_article_image", true),
    $Career_advice_article_image5 = get_post_meta(get_the_ID(), "5-Career_advice_article_image", true),
    $Career_advice_article_image6 = get_post_meta(get_the_ID(), "6-Career_advice_article_image", true)
);
$titleArray = array(
    $Career_advice_article_title1 = get_post_meta(get_the_ID(), "1-Career_advice_article_title", true),
    $Career_advice_article_title2 = get_post_meta(get_the_ID(), "2-Career_advice_article_title", true),
    $Career_advice_article_title3 = get_post_meta(get_the_ID(), "3-Career_advice_article_title", true),
    $Career_advice_article_title4 = get_post_meta(get_the_ID(), "4-Career_advice_article_title", true),
    $Career_advice_article_title5 = get_post_meta(get_the_ID(), "5-Career_advice_article_title", true),
    $Career_advice_article_title6 = get_post_meta(get_the_ID(), "6-Career_advice_article_title", true)
);
$urlArray = array(
    $Career_advice_article_url1 = get_post_meta(get_the_ID(), "1-Career_advice_article_url", true),
    $Career_advice_article_url2 = get_post_meta(get_the_ID(), "2-Career_advice_article_url", true),
    $Career_advice_article_url3 = get_post_meta(get_the_ID(), "3-Career_advice_article_url", true),
    $Career_advice_article_url4 = get_post_meta(get_the_ID(), "4-Career_advice_article_url", true),
    $Career_advice_article_url5 = get_post_meta(get_the_ID(), "5-Career_advice_article_url", true),
    $Career_advice_article_url6 = get_post_meta(get_the_ID(), "6-Career_advice_article_url", true)
);

get_header();
?>

        <div id="primary" class="content-area">
            <div class="light-blue-bg">
            <main id="main" class="site-main" role="main">
                    <div class="container">
                        <div class="row">
                    <?php
                    while (have_posts()) : the_post();
                        ?>

                        <section id="post-<?php the_ID(); ?>" class="top-box">
                            <div class="header-container col-xs-12">
                                <?php the_post_thumbnail('header'); ?>
                                <div class="text-overlay">
                                <?php if($picture_side == "left") {?>
                                    <div class="col-sm-6"></div>
                                    <?php } ?>
                                    <div class="col-sm-6">
                                        <?php the_title('<h1 class="entry-title">', '</h2>'); ?>
                                        <?php the_content(); ?>
                                    </div>
                                    <?php if($picture_side == "right") {?>
                                        <div class="col-sm-6"></div>
                                    <?php } ?>
                                </div>
                            </div>
                        </section><!-- #post-## -->
                        </div>
                        <div class="row">
                        <section>
                            <div class="entry-content">
                                <div class="col-xs-12">
                                    <h2 class="h2-ask-james">Career Advice from James</h2>
                                </div>
                                <?php
                                $i = 0;
                                while ($i <= 5) { ?>
                                    <div class="col-xs-12 col-sm-6 col-md-4 career-advice-content">
                                        <div class="article-module">

                                            <div class="image-container">
                                                <a href="<?php echo $urlArray[$i]; ?>">
                                                    <img src='<?php echo $imageArray[$i]; ?>'/>
                                                </a>
                                                <div class="title-container">
                                                    <p><?php echo $dateArray[$i]; ?></p>
                                                    <a class="title"
                                                       href="<?php echo $urlArray[$i]; ?>">
                                                        <h4><?php echo $titleArray[$i]; ?></h4>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="button-container">
                                                <a href="<?php echo $urlArray[$i]; ?>"
                                                   class="btn btn-link">
                                                    Read Article <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    $i++;
                                }
                                ?>

                            </div>
                        </section>

                        <?php
                    endwhile; // End of the loop.
                    ?>
                        </div><!-- .row -->
                        <div class="row">
                            <div class="col-xs-12 text-center">
                                <a href="https://www.reed.co.uk/career-advice/life-at-work/ask-james/" class="btn-action">View more articles</a>
                            </div>
                        </div><!-- .row -->
                    </div><!-- .container -->
            </main><!-- #main -->
        </div><!-- .light-blue-bg -->
        </div><!-- #primary -->
<?php get_footer(); ?>
