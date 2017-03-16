<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package James_Reed_Portfolio
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="icon" type="image/jpg" href="/james-reed/wp-content/themes/james-reed-portfolio/img/reed-icon-57x57.jpg">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700|Open+Sans:400,700" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<nav id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content">
        <?php esc_html_e('Skip to content', 'james-reed-portfolio'); ?>
    </a>
    <header id="masthead" class="site-header" role="banner">
        <div class="site-group-nav">
            <div class="container">
                <nav class="row">
                    <div class="col-xs-12">
                        <ul id="menu-top-menu" class="nav nav-custom navbar-nav menu">
                            <li class="menu-item">
                                <a class="logo"><img src="/james-reed/wp-content/themes/james-reed-portfolio/img/reedlogo.svg"
                                                     width="110px" height="auto" alt="Reed logo"/></a>
                                <a class="logo-sm"><img
                                            src="/james-reed/wp-content/themes/james-reed-portfolio/img/reed-r-logo.svg"
                                            width="29px" height="auto" alt="Reed logo"/></a>
                            </li>
                            <li class="menu-item">
                                <a class="global-nav-txt-active" href="http://www.reed.co.uk/">Jobs</a>
                            </li>
                            <li class="menu-item item1">
                                <a href="http://www.reed.co.uk/courses/">Courses</a>
                            </li>
                            <li class="menu-item item2">
                                <a href="http://www.reed.co.uk/career-advice/">Career
                                    Advice</a>
                            </li>
                        </ul>
                    </div><!-- .col -->
                </nav><!-- nav.row -->
            </div><!-- .container -->
        </div><!-- .site-group-nav -->
        <nav class="site-main-nav">
            <nav id="site-navigation" class="main-navigation" role="navigation">
                <div class="bg-darkBlue">
                    <div class="container burger-menu">
                        <div class="row">
                            <div class="col-xs-12">
                                <a class="home-btn" href="/"><span
                                            class="glyphicon glyphicon-home glyph-padding burger-header"></span></a>
                                <div class="home-text burger-header">James Reed</div>
                                <div class="burger menu menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                                    <div class="icon"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 no-min-height">
                            <?php wp_nav_menu(array('theme_location' => 'primary', 'menu_id' => 'primary-menu')); ?>
                        </div>
                    </div>
                </div>

                <script>
                    jQuery(document).ready(function ($) {
                        $(".burger").click(function () {
                            $(".burger").toggleClass("open");
                            $(".menu-main-menu-container").toggleClass("show-menu");
                        })
                    })
                </script>
            </nav><!-- nav -->
        </nav><!-- nav -->
    </header><!-- #masthead-->
</nav><!-- nav.site -->
<div id="content" class="site-content">
