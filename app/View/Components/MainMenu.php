<?php

namespace App\View\Components;


use App\Models\Menu;
use Illuminate\View\Component;

class MainMenu extends Component
{
    public function __construct()
    {

    }


    public function render()
    {
        $args = [
            ['position', '=', 'mainmenu'],
            ['status', '=', 1],
            ['parent_id', '=', 0]            
        ];
        $list_menu= Menu::where($args)
        ->orderBy('sort_order','ASC')
        ->get();
        return view('components.main-menu',compact('list_menu'));
    }
} 