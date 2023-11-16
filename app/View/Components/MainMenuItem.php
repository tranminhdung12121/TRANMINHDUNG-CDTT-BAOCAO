<?php

namespace App\View\Components;

use App\Models\Menu;
use Illuminate\View\Component;

class MainMenuItem extends Component
{
    public $menu_item = null;
    public function  __construct($rowmenu)
    {
        $this->menu_item = $rowmenu;
    }


    public function render()
    {
        $menu = $this->menu_item;
        $args = [
            ['status', '=', 1],
            ['parent_id', '=', $menu->id],
            ['position', '=','mainmenu']
        ];
        $list_menu2= Menu::where($args)
        ->orderBy('sort_order','ASC')
        ->get();
        $menusub=false;
        if(count($list_menu2)>0)
        { 
            $menusub=true;
        }
        return view('components.main-menu-item',compact('menu','list_menu2','menusub'));
    }
}