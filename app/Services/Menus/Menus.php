<?php

namespace App\Services\Menus;

use App\Menu;

class Menus {


    static function getAll() {
        return \App\Menu::orderBy('sorting_order', 'ASC')->get();
    }

    static function renderMenuNav($activeMenu) {

        $chunkSize = 6;
        $menus = self::getAll();
        $html = '';

        foreach($menus->chunk($chunkSize) as $menuChunks) {
            $html .= '<ul class="menu-buttons">';
            foreach($menuChunks as $menu) {

                $active = $activeMenu->slug == $menu->slug ? 'active' : '';
                $url = route('menus.show', $menu->slug);

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
