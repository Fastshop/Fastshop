<?php


//First solution : one file
//If you're using a child theme you could use:
// get_stylesheet_directory_uri() instead of get_template_directory_uri()
add_action('admin_enqueue_scripts', function() {
    wp_enqueue_script('jquery');
    wp_enqueue_style('admin', Less::url('home/assets/admin.css'), false, filemtime(public_path('/home/assets/admin.css')));
    wp_enqueue_style('font-awesome', 'https://cdnjs.loli.net/ajax/libs/font-awesome/5.8.2/css/all.min.css', false, '5.8.2');
    wp_enqueue_script('admin', env('APP_URL').'/home/assets/admin.js', false, filemtime(public_path('/home/assets/admin.js')));
});
