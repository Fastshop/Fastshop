<?php

add_action('admin_menu', 'my_admin_menu');

function my_admin_menu() {
    add_menu_page('My Top Level Menu Example', 'Top Level Menu', 'manage_options', 'myplugin-admin-page.php', 'myplguin_admin_page', 'dashicons-tickets', 6);
    add_submenu_page('myplugin-admin-page.php', 'My Sub Level Menu Example', 'Sub Level Menu', 'manage_options', 'myplugin-admin-sub-page.php', 'myplguin_admin_sub_page');
}

function myplguin_admin_page() {
    echo view('wp.plugin.demo');
}

function myplguin_admin_sub_page() {
    ?>
    <div class="wrap">
        <h2>Welcome To My Plugin</h2>
    </div>
    <?php
}
