<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Cart;

class CartComponent extends Component
{
    //function to increase quantity of item in the cart
    public function increaseQuantity($rowId){
        $product = Cart::get($rowId);
        $qty = $product->qty + 1;
        Cart::update($rowId,$qty);
    }

    //function to decrease quantity of item in the cart
    public function decreaseQuantity($rowId){
        $product = Cart::get($rowId);
        $qty = $product->qty - 1;
        Cart::update($rowId,$qty);
    }

    //function to remove single item from cart
    public function removeItem($rowId){
        Cart::remove($rowId);
        session()->flash('message','Item has been deleted!');

    }

    //function to clear all cart items
    public function clearCart(){
        Cart::destroy();
        session()->flash('message','All items removed Successfully!');
    }



    public function render()
    {
        return view('livewire.cart-component')->layout('layouts.base');
    }
}
