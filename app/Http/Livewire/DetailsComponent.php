<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Cart;

class DetailsComponent extends Component
{
     public $slug;

    public function mount($slug){
        $this->$slug = $slug;
    }

    //function to store product is cart
    public function store($product_id,$product_name,$product_price){
        Cart::add($product_id,$product_name,1,$product_price)->associate('App\Models\Product');
        session()->flash('message','Item added Successfully!');
        return redirect()->route('product.cart');

    }

    public function render()
    {
        $product = Product::where('slug',$this->slug)->first();
      //  $featured_products = Product::inRandomOrder()->limit(7)->get();
      $related_products = Product::where('category_id', $product->category_id)->inRandomOrder()->limit(7)->get();
        return view('livewire.details-component',['product'=>$product,'related_products'=>$related_products])->layout('layouts.base');
    }
}
