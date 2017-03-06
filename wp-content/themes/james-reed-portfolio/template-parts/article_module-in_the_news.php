<?php

$publisher_name = get_post_meta(get_the_ID(), "_jr_create_inthenews_publication_name", true);
$date_published = get_post_meta(get_the_ID(), "_jr_create_inthenews_date_published", true);
$link_to_article = get_post_meta(get_the_ID(), "_jr_create_inthenews_link_to_article", true);
$is_selected = get_post_meta(get_the_ID(), "_jr_create_inthenews_is_post_selected", true);
?>
<?php if ($is_selected == 'yes') { ?>
    <div class="col-xs-12 col-sm-6 col-md-4">
        <div class="news-module">
            <div class="tab-top"></div>
            <div class="news-container">
                <div class="publisher-container">
                    <a class="publisher" href="<?php echo $link_to_article; ?>">
                        <h3><?php echo $publisher_name; ?></h3>
                    </a>
                </div>
                <div class="date-container">
                    <p><?php echo $date_published; ?></p>
                </div>
                <div class="title-container">
                    <a class="title" href="<?php echo $link_to_article; ?>">
                        <h4><?php the_title(); ?></h4>
                    </a>
                </div>
                <div class="button-container">
                    <a class="btn-link" href="<?php echo $link_to_article; ?>">Read article <i class="fa fa-external-link" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>
<?php } ?>