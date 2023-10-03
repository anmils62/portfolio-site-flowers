<?php 
    add_action('wp_enqueue_scripts', 'flowers_styles');

    function flowers_styles() {
        wp_enqueue_style ('normalize-style', get_template_directory_uri() . '/assets/css/normalize.min.css' );
        wp_enqueue_style ('flowers-style', get_stylesheet_uri() );
        wp_enqueue_style ('catalog-style', get_template_directory_uri() . '/assets/css/page.min.css' );
        // чтобы подключить вторые стили

        wp_enqueue_script('flowers-scripts', get_template_directory_uri() . '/assets/js/main.min.js', array(), null, true);
    }

    add_theme_support( 'custom-logo' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'menus' );

    add_filter('nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 3);
    function filter_nav_menu_link_attributes($atts, $item, $args) {
        if ($args->menu === 'Main') {
            $atts['class'] = 'header__nav-item';
        }

        return $atts;
    }
?>