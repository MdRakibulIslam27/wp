<?php

if( site_url() == "http://demo.lwhh.com" ){
    define('VERSION', time() );
}else {
    define( 'VERSION', wp_get_theme()->get( "Version" ) );
}

function philosophy_theme_setup() {
    
    load_theme_textdomain('philosophy');
    add_theme_support( 'post-thumbnails' );  	
    add_theme_support( 'title-tag' );
    add_theme_support( 'html5', array('search_form', 'comment_list') );
    add_theme_support( 'post_formats', array('image', 'gallery', 'quote', 'audio', 'video', 'link') );
    add_editor_style('assets/css/editor-style.css');
    
}
add_action('after_setup_theme', 'philosophy_theme_setup');


function philosophy_scripts() {
    wp_enqueue_style('font_awesome_css', get_template_directory_uri() . '/assets/font-awesome/css/font-awesome.min.css', null, 1.0 );
    wp_enqueue_style('fonts', get_template_directory_uri() . '/assets/css/fonts.css', null, 1.0 );
    wp_enqueue_style('base-css', get_template_directory_uri() . '/assets/css/base.css', null, 1.0 );
    wp_enqueue_style('vendor-css', get_template_directory_uri() . '/assets/css/vendor.css', null, 1.0 );
    wp_enqueue_style('main-css', get_template_directory_uri() . '/assets/css/main.css', null, 1.0 );
    
    wp_enqueue_scripts('modernizr-js', get_template_directory_uri() . '/assets/js/modernizr.js', null, 1.0);
    wp_enqueue_scripts('pace-js', get_template_directory_uri() . '/assets/js/pace.min.js', null, 1.0);
    wp_enqueue_scripts('plugins-js', get_template_directory_uri() . '/assets/js/plugins.js', 'jquery', 1.0, true);
    wp_enqueue_scripts('main-js', get_template_directory_uri() . '/assets/js/main.js', 'jquery', 1.0, true);
}
add_action('wp_enqueue_scripts', "philosophy_scripts");
