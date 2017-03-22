<?php

$videoURL = array(
    $videoURl1 = get_post_meta(get_the_ID(), "1-embedded_video", true),
    $videoURl2 = get_post_meta(get_the_ID(), "2-embedded_video", true),
    $videoURl3 = get_post_meta(get_the_ID(), "3-embedded_video", true),
    $videoURl4 = get_post_meta(get_the_ID(), "4-embedded_video", true),
    $videoURl5 = get_post_meta(get_the_ID(), "5-embedded_video", true)
);
$videoLabel = array(
    $videoLabel1 = get_post_meta(get_the_ID(), "1-video_label", true),
    $videoLabel2 = get_post_meta(get_the_ID(), "2-video_label", true),
    $videoLabel3 = get_post_meta(get_the_ID(), "3-video_label", true),
    $videoLabel4 = get_post_meta(get_the_ID(), "4-video_label", true),
    $videoLabel5 = get_post_meta(get_the_ID(), "5-video_label", true)
);

?>

<section class="video-tabs">
    <div class="row">
        <div class="tab-content col-md-8">
            <?php $i = 0;
            while ($i < count($videoURL)) {
                if ($i == 0) {
                    $activeClass = " active";
                } else {
                    $activeClass = "";
                }
                if ($videoURL[$i] != "") {
                    ?>
                    <div id="tab<?php echo $i; ?>" class="video-container tab-pane fade in<?php echo $activeClass; ?>">
                        <iframe class="js_iframe" width="100%" height="422px"
                                src="<?php echo $videoURL[$i] ?>?enablejsapi=1" frameborder="0"
                                allowfullscreen></iframe>
                    </div>
                <?php }
                $i++;
            } ?>
        </div>

        <ul class="nav nav-pills nav-stacked col-md-4">
            <?php $j = 0;
            while ($j < count($videoURL)) {
                if ($j == 0) {
                    $activeClass = " active";
                } else {
                    $activeClass = "";
                }
                if ($videoLabel[$j] != "") {
                    ?>
                    <li class="<?php echo $activeClass; ?>">
                        <a data-toggle="tab" href="#tab<?php echo $j; ?>">
                            <?php echo $videoLabel[$j]; ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/play_icon.svg" width="25px"
                                 height="25px" class="play-icon"/>
                        </a>
                    </li>
                <?php }
                $j++;
            } ?>
        </ul>
        <div class="more-videos col-xs-12">
            <a href="https://www.youtube.com/channel/UCScUiNVwSgZ8bt0lujsAjeA" class="btn btn-link text-right">View more
                videos <i class="fa fa-external-link" aria-hidden="true"></i></a>
        </div>
    </div>
</section>
<script>
    jQuery(function () {
        jQuery('.nav li').click(function () {
            if (!jQuery(this).hasClass("active")) {
                videos = document.querySelectorAll('.video-container .js_iframe');
                videos.forEach(function (video) {
                    video.contentWindow.postMessage('{"event":"command","func":"stopVideo","args":""}', '*');
                })
            }
        })
    });

</script>
