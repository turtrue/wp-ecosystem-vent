<?php
add_action('wp_enqueue_scripts', 'my_scripts');

function my_scripts()
{
    wp_enqueue_style('my-bootstrap-reboot', get_template_directory_uri() . '/libs/bootstrap/css/bootstrap-reboot.min.css');
    wp_enqueue_style('my-bootstrap-grid', get_template_directory_uri() . '/libs/bootstrap/css/bootstrap-grid.min.css');
    wp_enqueue_style('my-style', get_stylesheet_uri());
    wp_enqueue_style('my-media', get_template_directory_uri() . '/css/media.css');

    wp_enqueue_script('my-script', get_template_directory_uri() . '/js/common.js', array(), null, true);
    // wp_enqueue_script('my-jquery', get_template_directory_uri() . '/libs/jquery/jquery-3.6.0.min.js');
}
