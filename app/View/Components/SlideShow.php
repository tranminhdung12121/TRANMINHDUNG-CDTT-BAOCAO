<?php

namespace App\View\Components;


use Illuminate\View\Component;
use App\Models\Slider;

class SlideShow extends Component
{
    public function __construct()
    {

    }


    public function render()
    {
        $args = [
            ['status', '=', 1],
            ['position', '=', 'slideshow']
        ];
        $list_slider = Slider::where($args)
        ->orderBy('sort_order','ASC')
        ->get();
        return view('components.slide-show',compact('list_slider'));
    }
} 