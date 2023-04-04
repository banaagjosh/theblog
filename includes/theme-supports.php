<?php

function theBlog_support(){
    register_nav_menus(array(
        'header_menu' => __('Header Menu', 'text-domain')
    ));
    add_theme_support('menus');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme','theBlog_support');