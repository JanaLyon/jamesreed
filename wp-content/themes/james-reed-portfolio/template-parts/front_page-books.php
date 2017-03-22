<?php

$james_books_text = get_post_meta(get_the_ID(), "5-james_books_text", true);

?>

<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-6">
                <div class="book-container text-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/books.png" alt="James Reed" width="100%"
                         height="auto" class=""/>
                </div>
            </div>
            <div class="col-xs-12 col-md-6">
                <div class="book-container text-center">
                    <h2>James's books</h2>
                    <p><?php echo $james_books_text; ?></p>
                    <a href="/james-reed/books/"class="btn-action">Find out more</a>
                </div>
            </div>
        </div>
    </div>
</div>