<?php

	//Customizer
	require( 'functions/customizer/customizer-service.php');
	require('functions/customizer/customizer-header-contact.php');
	require('functions/customizer/customizer-banner-one.php');
	require('functions/customizer/customizer-count.php');

	//Widgets
    require( 'functions/widgets/sidebar.php');
    require( 'functions/widgets/categories.php');
    require( 'functions/widgets/posts_recentes.php');

	function cooprotec_setup()
	{
        add_theme_support( 'post-thumbnails' ); //supports featured image
        // Register primary menu
        register_nav_menu( 'primary', __('Primary Menu', 'appointment' ) );

        //Add Theme Support Title Tag
        add_theme_support( "title-tag" );

        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );
        // Set the content_width with 900
        if ( ! isset( $content_width ) ) $content_width = 900;
        require_once('theme_setup_data.php');
	}
    add_action( 'after_setup_theme', 'cooprotec_setup' );

	/* Custom Logo */
    add_theme_support( 'custom-logo' );
    function themename_custom_logo_setup()
    {
        $defaults = array(
            'height'      => '100',
            'width'       => '100',
            'header-text' => array( 'site-title', 'site-description' ),
        );
        add_theme_support( 'custom-logo', $defaults );
    }

    /* Custom Menu */
    add_action( 'init', 'wpb_custom_new_menu' );
    function wpb_custom_new_menu() {
        register_nav_menu('my-custom-menu',__( 'My Custom Menu' ));
    }

    add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
    function special_nav_class ($classes, $item)
    {
        if (in_array('current-menu-item', $classes) )
        {
            $classes[] = 'active ';
        }
        return $classes;
    }

    /* Auto resumo */

    function excerpt($limit) {
        $excerpt = explode(' ', get_the_excerpt(), $limit);
        if (count($excerpt)>=$limit) {
            array_pop($excerpt);
            $excerpt = implode(" ",$excerpt).'...';
        } else {
            $excerpt = implode(" ",$excerpt);
        }
        $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
        return $excerpt;
    }

    function content($limit) {
        $content = explode(' ', get_the_content(), $limit);
        if (count($content)>=$limit) {
            array_pop($content);
            $content = implode(" ",$content).'...';
        } else {
            $content = implode(" ",$content);
        }
        $content = preg_replace('/[.+]/','', $content);
        $content = apply_filters('the_content', $content);
        $content = str_replace(']]>', ']]&gt;', $content);
        return $content;
    }

    //Autoload de CSS
    wp_register_style('wp-style',get_template_directory_uri() . '/style.css', '1.0.0', 'screen');

    wp_register_style(
        'wp-style2',
        get_template_directory_uri() . '/style1.css',
        '1.0.0',
        'screen'
    );

    wp_enqueue_style( ['wp-style', 'wp-style2'] );

?>