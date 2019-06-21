<?php

add_action('admin_menu', function() {
    add_menu_page('网站设置', '网站设置', 'manage_options', 'frame', function() {
        echo view('wp.plugin.demo');
    }, 'dashicons-tickets', 6);
    
    add_submenu_page('frame', '权限设置', '权限设置', 'manage_options', 'frame.sub', function() {
        echo view('wp.plugin.demo', ['url' => '/admin']);
    });
});
