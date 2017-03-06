<?php

$in_the_news_box_text = get_post_meta(get_the_ID(), "2-in_the_news_box_text", true);
$ask_james_box_text = get_post_meta(get_the_ID(), "3-ask_james_box_text", true);
$press_enquiries_box_text = get_post_meta(get_the_ID(), "4-press_enquiries_box_text", true);

?>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-4">
            <div class="media-box text-center">
                <div class="media-icon-container">
                    <div class="media-icon in-the-news-icon">
                        <img src="wp-content/themes/james-reed-portfolio/img/news-icon.svg" width="100px"
                             height="auto"/>
                    </div>
                </div>
                <div class="media-text-container">
                    <h3>In the news</h3>
                    <p><?php echo $in_the_news_box_text; ?></p>
                </div>
                <div class="media-button-container">
                    <a class="btn-action">Find out more</a>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-4">
            <div class="media-box text-center">
                <div class="media-icon-container">
                    <div class="media-icon ask-james-icon">
                        <img src="wp-content/themes/james-reed-portfolio/img/ask-icon.svg" width="100px" height="auto"/>
                    </div>
                </div>
                <div class="media-text-container">
                    <h3>Ask James</h3>
                    <p><?php echo $ask_james_box_text; ?></p>
                </div>
                <div class="media-button-container">
                    <a class="btn-action">Find out more</a>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-4">
            <div class="media-box text-center">
                <div class="media-icon-container">
                    <div class="media-icon press-enquiries-icon">
                        <img src="wp-content/themes/james-reed-portfolio/img/press-icon.svg" width="100px"
                             height="auto"/>
                    </div>
                </div>
                <div class="media-text-container">
                    <h3>Press Enquiries</h3>
                    <p><?php echo $press_enquiries_box_text; ?></p>
                </div>
                <div class="media-button-container">
                    <a class="btn-action">Find out more</a>
                </div>
            </div>
        </div>
    </div>
</div>