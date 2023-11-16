<?php

namespace App\View\Components;


use App\Models\Menu;
use Illuminate\View\Component;

class MenuFooter extends Component
{
    public function __construct()
    {

    }


    public function render()
    {
        $args = [
            ['position', '=', 'footermenu'],
            ['status', '=', 1]           
        ];
        $list_menufooter= Menu::where($args)
        ->orderBy('sort_order','ASC')
        ->get();
        return view('components.menu-footer',compact('list_menufooter'));
    }
} 