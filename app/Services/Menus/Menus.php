<?php

namespace App\Services\Menus;

use App\Menu;

class Menus {


    static function getAll() {
        return \App\Menu::orderBy('sorting_order', 'ASC')->get();
    }

    static function getMenus($type) {

        if($type === 'default')
            return \App\Menu::normal()->orderBy('sorting_order', 'ASC')->get();

        if($type === 'wedding')
            return \App\Menu::wedding()->orderBy('sorting_order', 'ASC')->get();

        return \App\Menu::orderBy('sorting_order', 'ASC')->get();
    }

    static function renderMenuNav($type = 'default', $activeMenu) {

        $chunkSize = 6;
        $menus = self::getMenus($type);
        $html = '';

        foreach($menus->chunk($chunkSize) as $menuChunks) {
            $html .= '<ul class="menu-buttons">';
            foreach($menuChunks as $menu) {

                $active = $activeMenu->slug == $menu->slug ? 'active' : '';
                $url = $type === 'default' ? route('menus.show', $menu->slug) : route('wedding.menus.show', $menu->slug);

                $html .= '<li style="width: '. 100/$chunkSize .'%;">';
                    if($menu->is_coming_soon) {
                        $html .= '<button class="coming-soon" data-toggle="tooltip" data-placement="top" title="Coming Soon">'. $menu->name .'</button>';
                    }
                    else {
                        $html .= '<a href="'. $url .'" class="'. $active .'">'. $menu->name .'</a>';
                    }
                $html .= '</li>';
            }
            $html .= '</ul>';
        }

        return $html;
    }
}
