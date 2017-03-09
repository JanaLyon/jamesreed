<?php

extract($wp_query->query_vars);
$bookHTML = '<div class="col-sm-4 hidden-xs"><img class="center-block" src="'. $bookImage .'" alt="'. $bookTitle .'" class="book-image '. $bookClass .'" /></div >';
if($imageSide == 'left') {
    $bookTextPadding = "book-text-padding-left";
}
if ($imageSide == 'right'){
    $bookTextPadding = "book-text-padding-right";
}
?>


<section class="book_entry row hidden-xs">
    <? if($imageSide == 'left') {
        $bookClass = "pull-left";
    echo $bookHTML;
    } ?>
    <div class="col-sm-8 hidden-xs">
        <div class="<?php echo $bookTextPadding; ?>">
        <h2><?php echo $bookTitle; ?></h2>
        <p><?php echo $bookBlurb; ?></p>
        <a href="<?php echo $buyBook; ?>" class="btn-top-action">Buy the book <i class="fa fa-external-link" aria-hidden="true"></i></a>
    </div></div>
    <?php if ($imageSide == 'right'){
        $bookClass = "pull-right";
       echo $bookHTML;
    }?>
</section>
<!--
book title
blurb
button centered

-->
<?php

extract($wp_query->query_vars);
$bookHTML = '<div class="col-xs-4 hidden-sm hidden-md hidden-lg"><img class="center-block book-img" src="'. $bookImage .'" alt="'. $bookTitle .'" class="book-image '. $bookClass .'" /></div >';
?>
<section class="book_entry row hidden-sm hidden-md hidden-lg">
    <div class="book-title-align">
    <div class="col-xs-8  hidden-sm hidden-md hidden-lg">
        <div class="title-container">
            <h2><?php echo $bookTitle; ?></h2>
        </div>
    </div>
    <? echo $bookHTML; ?>
    </div>
    <div class="col-xs-12 hidden-sm hidden-md hidden-lg">
        <div>
            <p><?php echo $bookBlurb; ?></p>
            <a  href="<?php echo $buyBook; ?>" class="btn-top-action">Buy the book <i class="fa fa-external-link" aria-hidden="true"></i></a>
        </div>
    </div>
</section>