<?php

//Customizer
require( 'functions/customizer/customizer-service.php');
require('functions/customizer/customizer-header-contact.php');
require('functions/customizer/customizer-banner-one.php');
require('functions/customizer/customizer-count.php');
require('functions/customizer/customizer-practice-area.php');
require('functions/customizer/customizer-contact.php');

//Widgets
require( 'functions/widgets/sidebar.php');
require( 'functions/widgets/categories.php');
require( 'functions/widgets/posts_recentes.php');

//Classes
require( 'functions/CSS_COOP_Walker.class.php');

//Autoload de CSS
add_action('wp_enqueue_scripts', 'cssmenumaker_scripts_styles' );
function cssmenumaker_scripts_styles()
{
    wp_enqueue_style( 'cssmenu-styles', get_template_directory_uri() . '/cssmenu/styles.css', '', '1.0.16   ');
}

function cooprotec_setup()
{
    //Add Theme Support Title Tag
    add_theme_support( "title-tag" );

    require_once('theme_setup_data.php');
}
add_action( 'after_setup_theme', 'cooprotec_setup' );

/* Custom Logo */
add_theme_support( 'custom-logo' );
function themename_custom_logo_setup()
{
    $defaults = array(

        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'navbar-brand', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );

/* Custom Menu */
add_action( 'init', 'wpb_custom_new_menu' );
function wpb_custom_new_menu()
{
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
function excerpt($limit)
{
    $excerpt = explode(' ', get_the_excerpt(), $limit);
    if (count($excerpt)>=$limit)
    {
        array_pop($excerpt);
        $excerpt = implode(" ",$excerpt).'...';
    }
    else
    {
        $excerpt = implode(" ",$excerpt);
    }
    $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
    return $excerpt;
}

function content($limit)
{
    $content = explode(' ', get_the_content(), $limit);
    if (count($content)>=$limit)
    {
        array_pop($content);
        $content = implode(" ",$content).'...';
    }
    else
    {
        $content = implode(" ",$content);
    }
    $content = preg_replace('/[.+]/','', $content);
    $content = apply_filters('the_content', $content);
    $content = str_replace(']]>', ']]&gt;', $content);
    return $content;
}

function url()
{
    return $actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
}

function redirect($link)
{
    echo '<script>location.href="'.$link.'"</script>';
}

function danger($mensagem)
{
    echo "<br><span id='msg'></span><br><div class='alert alert-danger' style=\"text-align: center;\">$mensagem</div>";
}

function success($mensagem)
{
    echo "<br><span id='msg'></span><br><div class='alert alert-success' style=\"text-align: center;\">$mensagem</div>";
}

function info($mensagem)
{
    echo "<br><span id='msg'></span><br><div class='alert alert-info' style=\"text-align: center;\">$mensagem</div>";
}

function warning($mensagem)
{
    echo "<br><span id='msg'></span><br><div class='alert alert-warning' style=\"text-align: center;\">$mensagem</div>";
}

?>