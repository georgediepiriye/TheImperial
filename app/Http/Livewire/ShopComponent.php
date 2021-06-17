<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;
use Cart;
use App\Models\Category;

class ShopComponent extends Component{  

    public $sorting;
    public function mount(){
        $this->sorting = 'default';
    }
    //function to store product is cart
    public function store($product_id,$product_name,$product_price){
        Cart::instance('cart')->add($product_id,$product_name,1,$product_price)->associate('App\Models\Product');
        session()->flash('message','Item added Successfully!');
        return redirect()->route('product.cart');
    }

    public function addToWishlist($product_id,$product_name,$product_price){
        Cart::instance('wishlist')->add($product_id,$product_name,1,$product_price)->associate('App\Models\Product');


    }

    public function removeFromWishlist($product_id){
        foreach(Cart::instance('wishlist') as $wishitem){
            if($wishitem->id === $product_id){
                Cart::instance('wishlist')->remove($wishitem->rowId);
               return;
            }

        }
    }



    use WithPagination;
    public function render()
    {
        
        if($this->sorting==='date'){
            $products = Product::orderBy('created_at','DESC')->paginate(12);
        }elseif($this->sorting==='price'){
            $products = Product::orderBy('regular_price','ASC')->paginate(12);
        }elseif($this->sorting==='price_desc'){
            $products = Product::orderBy('regular_price','DESC')->paginate(12);
        }else{
            $products = Product::Paginate(12);
        }

        $categories = Category::all();


        
        return view('livewire.shop-component',['products'=>$products,'categories'=>$categories])->layout('layouts.base');
    }
}
