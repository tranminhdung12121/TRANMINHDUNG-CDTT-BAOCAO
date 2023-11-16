<?php

namespace App\View\Components;


use Illuminate\View\Component;
use App\Models\Brand;

class ListBrand extends Component
{
    public function __construct()
    {

    }


    public function render()
    {
        $list_brand = Brand::where('status', '=', 1)->orderBy('sort_order', 'asc')->get();       
        return view('components.list-brand',compact('list_brand'));
    }
} 