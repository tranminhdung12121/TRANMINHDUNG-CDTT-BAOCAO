<?php

namespace App\View\Components;


use Illuminate\View\Component;
use App\Models\Category;

class ListCategory extends Component
{
    public function __construct()
    {

    }


    public function render()
    {
        $list_category = Category::where([['parent_id', '=', 0], ['status', '=', 1]])
        ->orderBy('sort_order', 'asc')
        ->get();
        return view('components.list-category',compact('list_category'));
    }
} 