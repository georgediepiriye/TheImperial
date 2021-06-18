<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Cart;
use Illuminate\Support\Facades\Auth;


class CartComponent extends Component
{
    //function to increase quantity of item in the cart
    public function increaseQuantity($rowId){
        $product = Cart::instance('cart')->get($rowId);
        $qty = $product->qty + 1;
        Cart::instance('cart')->update($rowId,$qty);
        $this->emitTo('cart-count-component','refreshComponent');
    }

    //function to decrease quantity of item in the cart
    public function decreaseQuantity($rowId){
        $product = Cart::instance('cart')->get($rowId);
        $qty = $product->qty - 1;
        Cart::instance('cart')->update($rowId,$qty);
        $this->emitTo('cart-count-component','refreshComponent');
    }

    //function to remove single item from cart
    public function removeItem($rowId){
        Cart::instance('cart')->remove($rowId);
        $this->emitTo('cart-count-component','refreshComponent');
        session()->flash('message','Item has been deleted!');

    }

    //function to clear all cart items
    public function clearCart(){
        Cart::instance('cart')->destroy();
        $this->emitTo('cart-count-component','refreshComponent');
        session()->flash('message','All items removed Successfully!');
    }


    public function checkout(){
        if(Auth::check()){
            return redirect()->route('checkout');
        }else{
            return redirect()->route('login');
        }
    }

    public function setAmountForCheckout(){
        session()->put('checkout',[
            'dicount' => 0,
            'subtotal' => Cart::instance('cart')->subtotal(),
            'tax' => Cart::instance('cart')->tax(),
            'total' => Cart::instance('cart')->total(),
        ]);
    }



    public function render()
    {
        $this->setAmountForCheckout();
        return view('livewire.cart-component')->layout('layouts.base');
    }
}
