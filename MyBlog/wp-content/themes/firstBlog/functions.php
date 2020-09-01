<?php
function myBlog_files()
{
    // Get library;
    wp_enqueue_style('myBlog_main_styles', get_stylesheet_uri(), NULL,  microtime());
}

add_action('wp_enqueue_scripts', 'myBlog_files');