<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class Page extends Controller
{
    public static function getChildren($ID)
    {
        $children = get_posts([
            'post_type'      => 'page',
            'posts_per_page' => -1,
            'post_parent'    => $ID,
            'order'          => 'ASC',
            'orderby'        => 'menu_order'
        ]);
    
        return array_map(function ($child) {
            return [
                'ID'=>  $child->ID,
                'slug' => $child->post_name,
                'title' => $child->post_title,
                'content' => apply_filters('the_content', $child->post_content),
            ];
        }, $children);
    }
}