<?php

function create_dwb_menu() {
    /** @var \WP_Admin_Bar $wp_admin_bar */ global $wp_admin_bar;
    
    $menu_id = 'dwb';
    $wp_admin_bar->add_menu([
        'id'    => 'group-main',
        'title' => __('网站设置'),
        //'group' => 'main',
        'meta'  => [
            "data-group" => 'main',
            "class" => 'group-main group',
        ],
        'href' => '#',
    ]);
    $wp_admin_bar->add_menu([
        //'parent' => $menu_id,
        'title' => __('内容'),
        'id'    => 'group-content',
        'href'  => '#',
        'meta'  => [
            "data-group" => 'content',
            "class" => 'group-content group',
            //'target' => '_blank'
        ],
    ]);
    // $wp_admin_bar->add_menu([
    //     //'parent' => $menu_id,
    //     'title' => __('Drafts'),
    //     'id'    => 'dwb-drafts',
    //     'href'  => 'edit.php?post_status=draft&post_type=post',
    // ]);
    // $wp_admin_bar->add_menu([
    //     //'parent' => $menu_id,
    //     'title' => __('Pending Comments'),
    //     'id'    => 'dwb-pending',
    //     'href'  => 'edit-comments.php?comment_status=moderated',
    // ]);
}

add_action('admin_bar_menu', 'create_dwb_menu', 50);
