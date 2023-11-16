<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Product;
use App\Models\Category;


class HomeProduct extends Component
{
    public $rowcat = null;
    public function __construct($catitem)
    {
        $this->rowcat = $catitem;
    }


    public function render()
    { 
        $cat = $this->rowcat;
        $listcatid = array();
        array_push($listcatid,$cat->id);
        $args1 = [
            ['parent_id', '=', $cat->id],
            ['status', '=', 1]         
        ];
        $list_category1 = Category::where($args1)->get();
        if(count($list_category1)>0)
        {
            foreach($list_category1 as $cat1)
            {
                array_push($listcatid,$cat1->id);
                $args2 = [
                    ['parent_id', '=', $cat1->id],
                    ['status', '=', 1]         
                ];
                $list_category2 = Category::where($args2)->get();
                if(count($list_category2)>0)
                { 
                    foreach($list_category2 as $cat2)
                    {
                        array_push($listcatid,$cat2->id);
                    }
                }        
            }
        }
        $list_product = Product::where('status','=',1)
        ->whereIn('category_id',$listcatid)
        ->orderBy('created_at','DESC')
        ->take(4)
        ->get();
        return view('components.home-product',compact('cat','list_product'));
    }
}