<?php
namespace App;

use App\Models\Product;

class Cart 
{
    public $product = null;
    public $totalPrice = 0;
    public $totalQuanty = 0;

    public function __construct($cart)
    {
        if($cart)
        {
            $this->product = $cart->product;
            $this->totalPrice = $cart->totalPrice;
            $this->totalQuanty = $cart->totalQuanty;
        }
    }

    public function AddCart($product, $id)
    {
        $newProduct = ['quanty' => 0, 'price' => $product->price, 'productInfo' => $product];
        if($this->product)
        {
            if(array_key_exists($id, $product))
            {
                $newProduct = $product[$id];
            }
            $newProduct['quanty']++;
            $newProduct['price'] = $newProduct['quanty'] * $product->price;
            $this->product[$id] = $newProduct;
            $this->totalPrice += $product->price;
            $this->totalQuanty++;
        }
    }
}
?>