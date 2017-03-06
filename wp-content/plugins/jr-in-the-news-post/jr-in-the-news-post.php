<?php

/*
Plugin Name: James Reed In the News Post
Plugin URI:
Description: A custom post plugin for James Reed
Author: Jana Lyon
Version: 1.0
Author URI: http://janalyon.com
*/


//Exit if accessed directly.
if( !defined( 'ABSPATH' ) ) exit;

//Register recipe post type
function jr_register_post_type(){

    $labels = array(
        'name'                  => _x( "In the News", 'Post type general name', 'in-the-news' ),
        'singular_name'         => _x( "In the News", 'Post type singular name', 'in-the-news' ),
        'menu_name'             => _x( "In the News", 'Admin Menu text', 'in-the-news' ),
        'name_admin_bar'        => _x( "In the News", 'Add New on Toolbar', 'in-the-news' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'in-the-news' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'author', 'thumbnail' ),
        'menu_icon'			 => 'dashicons-format-video',
        'register_meta_box_cb' => 'add_news_metaboxes',
    );

    register_post_type( 'jr_inthenews', $args );
}

add_action( 'init', 'jr_register_post_type' );

//Register item type taxonomy

function jr_create_taxonomy(){

    $labels = array(
        'name'              => _x( 'Item Types', 'taxonomy general name', 'in-the-news' ),
        'singular_name'     => _x( 'Item Type', 'taxonomy singular name', 'in-the-news' ),
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'in-the-news' ),
    );
    register_taxonomy( 'jr_item_type', 'jr_inthenews', $args );

}
add_action( 'init', 'jr_create_taxonomy' );


function add_news_metaboxes(){
    add_meta_box( 'jr_create_inthenews', 'Create new "In the News" post', 'jr_create_inthenews', 'jr_inthenews', 'normal', 'high' );
}
add_action( 'add_meta_boxes', 'add_inthenews_metaboxes' );

function jr_create_inthenews($post) {
    wp_nonce_field( 'jr_create_inthenews_meta_box', 'jr_create_inthenews_nonce' );

    $publication_name_value = get_post_meta( $post->ID, '_jr_create_inthenews_publication_name', true );
    $date_published_value = get_post_meta( $post->ID, '_jr_create_inthenews_date_published', true );
    $link_to_article_value = get_post_meta( $post->ID, '_jr_create_inthenews_link_to_article', true );
    $is_selected_value = get_post_meta( $post->ID, '_jr_create_inthenews_is_post_selected', true );

    echo '<label for="inthenews-pub_name">'. 'Publication Name' .'</label><br>';
    echo '<p class="howto">'. 'Add publication name' .'</p>';
    echo '<input type="text" id="inthenews-pub_name" name="publication_name" placeholder="Business Insider" value="'.$publication_name_value
        .'" size="50"/><br><br>';

    echo '<label for="inthenews-date_published">'. 'Date article was published' .'</label><br>';
    echo '<p class="howto">'. 'Add the date article was published' .'</p>';
    echo '<input type="text" id="inthenews-date_published" name="date_published" placeholder="1st January, 2017" value="'.$date_published_value
        .'" size="50"/><br><br>';

    echo '<label for="inthenews-link_to_article">'. 'Link to Article' .'</label><br>';
    echo '<p class="howto">'. 'Add the link to the article' .'</p>';
    echo '<input type="text" id="inthenews-link_to_article" name="link_to_article" placeholder="https://reed.co.uk" value="'.$link_to_article_value
        .'" size="50"/><br><br>';

    echo '<label for="inthenews-is_selected">'. 'Is this a "selected" article?' .'</label><br>';
    echo '<p class="howto">'. '' .'</p>';
    echo "<input type='radio' id='inthenews-is_selected' name='is_post_selected' value='yes' " . checked( $is_selected_value, "yes" ) ."> Selected<br>";
    echo "<input type='radio' name='is_post_selected' value='no'" . checked( $is_selected_value, "no" ) ."> Not Selected<br>";

}
function save_inthenews_metaboxes($post_id){
    //check whether the user has the ability to edit a post
    if ( ! current_user_can( 'edit_post', $post_id ) ) {
        return;
    }

    //check if the Nonce is set
    if ( ! isset( $_POST['jr_create_inthenews_nonce'] ) ) {
        return;
    }
    if ( ! wp_verify_nonce( $_POST['jr_create_inthenews_nonce'], 'jr_create_inthenews_meta_box' ) ) {
        return;
    }

    //prevent the data from being auto-saved. Saving to be done once the "Save" or "Update" button has been clicked
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }

    //ensure our three inputs, publication_name, link_to_article and method, are set and ready before we submit the
    // entries
    if ( ! isset( $_POST['publication_name'] ) || ! isset( $_POST['link_to_article'] ) || ! isset( $_POST['date_published'] ) || ! isset( $_POST['is_post_selected'] ) ) {
        return;
    }

    //check the entry is free from any unexpected characters that may compromise website security
    $publication_name = sanitize_text_field( $_POST['publication_name'] );
    $date_published = sanitize_text_field( $_POST['date_published'] );
    $link_to_article = sanitize_text_field( esc_url_raw($_POST['link_to_article']) );
    $is_post_selected = sanitize_text_field( $_POST['is_post_selected'] );

    //save the entries into the database
    update_post_meta( $post_id, '_jr_create_inthenews_publication_name', $publication_name );
    update_post_meta( $post_id, '_jr_create_inthenews_date_published', $date_published );
    update_post_meta( $post_id, '_jr_create_inthenews_link_to_article', $link_to_article );
    update_post_meta( $post_id, '_jr_create_inthenews_is_post_selected', $is_post_selected );

}
add_action( 'save_post', 'save_inthenews_metaboxes' );


function jr_custom_template($single) {

    global $wp_query, $post;

    /* Checks for single template by post type */
    if ($post->post_type == "jr_inthenews"){
        if(file_exists(plugin_dir_path( __FILE__ ) . '/jr_inthenews.php'))
            return plugin_dir_path( __FILE__ ) . '/jr_inthenews.php';
    }
    return $single;
}

/* Filter the single_template with our custom function*/
add_filter('single_template', 'jr_custom_template', 999);

register_deactivation_hook( __FILE__, 'flush_rewrite_rules' );
register_activation_hook( __FILE__, 'myplugin_flush_rewrites' );
function myplugin_flush_rewrites() {
    // call your CPT registration function here (it should also be hooked into 'init')
    jr_register_post_type();
    flush_rewrite_rules();
}