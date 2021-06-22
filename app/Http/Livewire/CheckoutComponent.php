<?php

namespace App\Http\Livewire;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Shipping;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CheckoutComponent extends Component
{

    public $shipping_is_different;
    public $firstname;
    public $lastname;
    public $email;
    public $address;
    public $line1;
    public $line2;
    public $city;
    public $province;
    public $country;
    public $zipcode;
    public $paymentmode;
    public $thankyou;

    public $s_firstname;
    public $s_lastname;
    public $s_email;
    public $s_address;
    public $s_line1;
    public $s_line2;
    public $s_city;
    public $s_province;
    public $s_country;
    public $s_zipcode;

    public function updated($fields){
        $this->validateOnly($fields,[
            's_firstname'=> 'required',
            's_lastname' => 'required',
            's_email' => 'required|email',
            '_s_address' => 'required',
            's_line1' => 'required|numeric',
            's_city' => 'required',
            's_province' => 'required',
            's_country' => 'required',
            's_zipcode' => 'required',
            'paymentmode' => 'required'
            
        ]);

        if($this->shipping_is_different){
            $this->validateOnly($fields,[
                's_firstname'=> 'required',
                's_lastname' => 'required',
                's_email' => 'required|email',
                's_address' => 'required',
                's_line1' => 'required|numeric',
                's_city' => 'required',
                's_province' => 'required',
                's_country' => 'required',
                's_zipcode' => 'required'

                ]);

        }
        
    }

    public function placeOrder(){
        $this->validate([
            'firstname'=> 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'line1' => 'required|numeric',
            'city' => 'required',
            'province' => 'required',
            'country' => 'required',
            'zipcode' => 'required',
            'paymentmode' => 'required'
        ]);

        $order = new Order();
        $order->user_id = Auth::user()->id;
        $order->subtotal = session()->get('checkout')['subtotal'];
        $order->subtotal = session()->get('checkout')['tax'];
        $order->subtotal = session()->get('checkout')['total'];
        $order->firstname = $this->firstname;
        $order->lastname = $this->lastname;
        $order->email = $this->email;
        $order->address = $this->address;
        $order->line1 = $this->line1;
        $order->line2 = $this->line2;
        $order->city = $this->city;
        $order->province = $this->province;
        $order->country = $this->country;
        $order->zipcode = $this->zipcode;
        $order->status = 'ordered';
        $order->is_shipping_different = $this->is_shipping_different;
        $order->save();
        

        foreach(Cart::instance('cart')->content() as $item){
            $orderItem = new OrderItem();
            $orderItem->product_id = $item_id;
            $orderItem->order->id = $order->id;
            $orderItem->price = $item->price;
            $orderItem->quantity = $item->qty;
            $orderItem->save();
        }

        if($shipping_is_different){
            $this->validate([
                's_firstname'=> 'required',
                's_lastname' => 'required',
                's_email' => 'required|email',
                's_address' => 'required',
                's_line1' => 'required|numeric',
                's_city' => 'required',
                's_province' => 'required',
                's_country' => 'required',
                's_zipcode' => 'required'
            ]);

            $shipping = new Shipping();
            $shipping->firstname = $this->s_firstname;
            $shipping->lastname = $this->s_lastname;
            $shipping->email = $this->s_email;
            $shipping->address = $this->s_address;
            $shipping->line1 = $this->s_line1;
            $shipping->line2 = $this->s_line2;
            $shipping->city = $this->s_city;
            $shipping->province = $this->s_province;
            $shipping->country = $this->s_country;
            $shipping->zipcode = $this->s_zipcode;
            $shipping->order_id = $order->id;
            $shipping->save();


        }

        if($this->paymentmode === 'cod'){
            $transaction = new Transaction();
            $transaction->user_id = Auth::user()->id;
            $transaction->order_id = $order->id;
            $transaction->mode= 'cod';
            $transaction->status = 'pending';
            $transaction->save();
         }
         $this->thankyou= 1;
         Cart::instance('cart')->destroy();
         session()->forget('checkout');


    }

    public function verifyForCheckout(){
        if(!Auth::check()){
            return redirect()->route('login');
        }elseif($this->thankyou){
            return redirect()->route('thankyou');
        }elseif(!session()->get('checkout')){
            return redirect()->route('product.cart');
        }
    }

    public function render()
    {
        $this->verifyForCheckout();
        return view('livewire.checkout-component')->layout('layouts.base');
    }
}
