<?php

	//Customizer
	require( 'functions/customizer/customizer-service.php');
	require('functions/customizer/customizer-header-contact.php');
	require('functions/customizer/customizer-banner-one.php');
	require('functions/customizer/customizer-count.php');
	require('functions/customizer/customizer-practice-area.php');

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
    function themename_custom_logo_setup() {
        $defaults = array(

            'header-text' => array( 'site-title', 'site-description' ),
        );
        add_theme_support( 'navbar-brand', $defaults );
    }
    add_action( 'after_setup_theme', 'themename_custom_logo_setup' );

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
    add_action('wp_enqueue_scripts', 'cssmenumaker_scripts_styles' );
    function cssmenumaker_scripts_styles()
    {
        wp_enqueue_style( 'cssmenu-styles', get_template_directory_uri() . '/cssmenu/styles.css', '', '1.0.5');
    }



class CSS_Menu_Maker_Walker extends Walker {

    var $db_fields = array( 'parent' => 'menu_item_parent', 'id' => 'db_id' );

    function start_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul>\n";
    }

    function end_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul>\n";
    }

    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {

        global $wp_query;
        $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
        $class_names = $value = '';
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;

        /* Add active class */
        if(in_array('current-menu-item', $classes)) {
            $classes[] = 'active';
            unset($classes['current-menu-item']);
        }

        /* Check for children */
        $children = get_posts(array('post_type' => 'nav_menu_item', 'nopaging' => true, 'numberposts' => 1, 'meta_key' => '_menu_item_menu_item_parent', 'meta_value' => $item->ID));
        if (!empty($children)) {
            $classes[] = 'dropdown-toggle';
        }

        $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
        $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

        $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
        $id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

        $output .= $indent . '<li' . $id . $value . $class_names .'>';

        $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
        $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
        $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
        $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';

        $item_output = $args->before;
        $item_output .= '<a'. $attributes .'><span>';
        $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
        $item_output .= '</span></a>';
        $item_output .= $args->after;

        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }

    function end_el( &$output, $item, $depth = 0, $args = array() ) {
        $output .= "</li>\n";
    }
}

?>