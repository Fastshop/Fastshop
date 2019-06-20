<?php


//First solution : one file
//If you're using a child theme you could use:
// get_stylesheet_directory_uri() instead of get_template_directory_uri()
add_action('admin_enqueue_scripts', function() {
    wp_enqueue_script('jquery');
    wp_enqueue_style('admin', env('APP_URL').'/home/assets/admin.css', false, filemtime(public_path('/home/assets/admin.css')));
    wp_enqueue_script('admin', env('APP_URL').'/home/assets/admin.js', false, filemtime(public_path('/home/assets/admin.js')));
});
