<?php
/**
 * James Reed Portfolio functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package James_Reed_Portfolio
 */

if ( ! function_exists( 'james_reed_portfolio_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function james_reed_portfolio_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on James Reed Portfolio, use a find and replace
	 * to change 'james-reed-portfolio' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'james-reed-portfolio', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Site menu', 'james-reed-portfolio' ),
		'secondary' => esc_html__( 'Reed site menu', 'james-reed-portfolio' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'james_reed_portfolio_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'james_reed_portfolio_setup' );

/**
 * Add custom image sizes
 */
add_action( 'after_setup_theme', 'custom_img_size_setup' );
function custom_img_size_setup() {
    add_image_size( 'header', 1200, 530, array('center', 'center') );
    add_image_size( 'article-module-responsive', 720, 460, array('center', 'center') );
    add_image_size( 'article-module-large', 460, 259, array('center', 'center') );
    add_image_size( 'article-module-small', 360, 203, array('center', 'center') );
}

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function james_reed_portfolio_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'james_reed_portfolio_content_width', 640 );
}
add_action( 'after_setup_theme', 'james_reed_portfolio_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function james_reed_portfolio_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'james-reed-portfolio' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'james-reed-portfolio' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'james_reed_portfolio_widgets_init' );



/**
 * Hide editor on specific pages.
 */
add_action( 'admin_init', 'hide_editor' );
function hide_editor() {
    // Get the Post ID.
    $post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
    if( !isset( $post_id ) ) return;
    // Hide the editor on the page titled 'Front page'
    $homepgname = get_the_title($post_id);
    if($homepgname == "In the News" || $homepgname == "Blog"){
        remove_post_type_support('page', 'editor');
    }
    // Hide the editor on a page with a specific page template
    // Get the name of the Page Template file.
    /*$template_file = get_post_meta($post_id, '_wp_page_template', true);
    if($template_file == 'my-page-template.php'){ // the filename of the page template
        remove_post_type_support('page', 'editor');
    }*/
}

/**
 * Enqueue scripts and styles.
 */
function james_reed_portfolio_scripts() {
    wp_enqueue_style( 'bootstrap-styles', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.5', 'all' );

    wp_enqueue_style( 'james-reed-portfolio-style', get_stylesheet_uri() );

	wp_enqueue_script( 'james-reed-portfolio-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '3.3.5', true );

	wp_enqueue_script( 'jcarousel-lite-js', get_template_directory_uri() . '/js/jCarouselLite.min.js', array('jquery'), '1.1', true );

	wp_enqueue_script( 'hammer-js', get_template_directory_uri() . '/js/hammer.min.js', array(), '20160206', true );

	wp_enqueue_script( 'picturefill-js', get_template_directory_uri() . '/js/picturefill.min.js', array(), '20160206',
		true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'james_reed_portfolio_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load pagination file.
 */
require get_template_directory() . '/inc/posts_nav_func.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/*
 * Short code
 */
//[book_entry image_url="" title="" side=""]content[/book_entry]
function create_book($atts, $content = null)
{
    ob_start();

    $a = shortcode_atts(array(
        'image_url' => '',
        'title' => '',
        'buy_book' => '',
        'side' => 'left'
    ), $atts);

    set_query_var('bookImage', $a['image_url']);
    set_query_var('bookTitle', $a['title']);
    set_query_var('buyBook', $a['buy_book']);
    set_query_var('imageSide', $a['side']);
    set_query_var('bookBlurb', $content);

    get_template_part('template-parts/module', 'book_entry');
    return ob_get_clean();
}

add_shortcode('book_entry', 'create_book');