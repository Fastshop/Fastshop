<?php

use Encore\Admin\Tree;
use model\admin\admin_menu;

add_action('admin_menu', function() {
    add_menu_page('网站设置', '网站设置', 'manage_options', 'frame', function() {
        echo view('wp.plugin.demo');
    }, 'dashicons-tickets', 6);
    
    add_submenu_page('frame', '权限设置', '权限设置', 'manage_options', 'frame.sub', function() {
        echo view('wp.plugin.demo', ['url' => '/admin']);
    });
    
    admin_menu::tree(function(Tree $tree) use (&$wp_admin_bar) {
        $tree->disableCreate();
        // kd($tree);
        $all = $tree->getModel()->get()->keyBy('id')->toArray();
        //krumo($all);
        
        $tree->branch(function($branch) use ($all) {
            /** @var \WP_Admin_Bar $wp_admin_bar */
            // global $wp_admin_bar;
            $data = admin_menu::as($branch);
            //$data->extra = (array)$data->extra;
            $group = $data->extra['group'] ?: $data->title;
            
            if(empty($data->parent_id)) {
                // $wp_admin_bar->add_menu([
                //     'id' => "group-{$group}",
                //     'title' => __($data->title),
                //     //'group' => 'main',
                //     'meta' => [
                //         "data-group" => $group,
                //         "class" => "group-{$group} group",
                //     ],
                //     'href' => '#',
                // ]);
                
                add_menu_page(
                    $data->title,
                    "<i class='fa {$data->icon}'></i> <span class='group group-{$group}'>{$data->title}</span>",
                    'manage_options',
                    str_replace('/', '-', "admin/" . $data->uri),
                    function() use ($data) {
                        echo view('wp.plugin.demo', ['url' => "/admin/" . $data->uri]);
                    }, null, 6);
            } elseif($all[ $data->parent_id ]['parent_id'] === 0) {
                // krumo($data->toArray());
                
                add_submenu_page(
                    str_replace('/', '-', "admin/" . $all[ $data->parent_id ]['uri']),
                    $data->title,
                    "<i class='fa {$data->icon}'></i> <span class='group group-{$group}'>{$data->title}</span>",
                    'manage_options',
                    str_replace('/', '-', "admin/" . $data->uri),
                    function() use ($data) {
                        echo view('wp.plugin.demo', ['url' => '/admin/' . $data->uri]);
                    });
            }
            // elseif($all[ $all[$data->parent_id ]['parent_id'] ]['parent_id'] === 0) {
            //     krumo($data->toArray());
            //
            //
            // }
            
            //krumo($all);
            
            //krumo($data->parent_id, $data->toArray());
            // $payload = "<i class='fa {$branch['icon']}'></i>&nbsp;<strong>{$branch['title']}</strong>";
            //
            // if( !isset($branch['children'])) {
            //     if(url()->isValidUrl($branch['uri'])) {
            //         $uri = $branch['uri'];
            //     } else {
            //         $uri = admin_base_path($branch['uri']);
            //     }
            //
            //     $payload .= "&nbsp;&nbsp;&nbsp;<a href=\"$uri\" class=\"dd-nodrag\">$uri</a>";
            // }
            //
            // return $payload;
        });
        
        $html = $tree->render();
        //echo $html;
        //ob_get_clean();
        //echo $tree->render();
        //exit;
    });
});
