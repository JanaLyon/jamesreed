<?php

/*
Plugin Name: James Reed Recent Posts
Plugin URI:
Description: A custom recent posts widget for James Reed
Author: Jana Lyon
Version: 1.0
Author URI: http://janalyon.com
*/

class recent_posts_widget extends WP_Widget
{

    function __construct()
    {
        parent::__construct(
// Base ID of your widget
            'recent_posts_widget',
// Widget name
            __('James Reed Custom Recent Posts Widget', 'recent_posts_widget_domain'),
// Widget description
            array('description' => __('Recent posts for sidebar.', 'recent_posts_widget_domain'),)
        );
    }

// Creating widget front-end
// This is where the action happens
    public function widget($args, $instance)
    {
// before and after widget arguments are defined by themes
        echo $args['before_widget'];

        include 'recent_posts-main.php';

        echo $args['after_widget'];
    }
} // Class recent_posts_widget ends here
// Register and load the widget
function recent_posts_load_widget()
{
    register_widget('recent_posts_widget');
}

add_action('widgets_init', 'recent_posts_load_widget');
