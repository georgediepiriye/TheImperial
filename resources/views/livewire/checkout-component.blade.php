
 <div class="cart-box-main">
    <div class="container">
        @if (Cart::instance('cart')->count() > 0 )
            <form action="" wire:submit.prevent="placeOrder">
                <div class="row">
                
                    <div class="col-sm-6 col-lg-6 mb-3">
                        <div class="checkout-address">
                            <div class="title-left">
                                <h3>Billing address</h3>
                            </div>
                            <div class="needs-validation" novalidate>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="firstName">First name *</label>
                                        <input type="text" class="form-control"  placeholder="" value="" required wire:model='firstname'>
                                        @error('firstname') <span class="text-danger"> {{ $message }}</span>@enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="lastName">Last name *</label>
                                        <input type="text" class="form-control" placeholder="" value="" required wire:model='lastname'>
                                        @error('lastname') <span class="text-danger"> {{ $message }}</span>@enderror
                                    </div>
                                </div>
                                
                                <div class="mb-3">
                                    <label for="email">Email Address *</label>
                                    <input type="email" class="form-control"  placeholder="" wire:model='email'>
                                    @error('email') <span class="text-danger"> {{ $message }}</span>@enderror
                                </div>
                                <div class="mb-3">
                                    <label for="address">Address *</label>
                                    <input type="text" class="form-control" placeholder="" required wire:model='address'>
                                    @error('address') <span class="text-danger"> {{ $message }}</span>@enderror
                                </div>
                                <div class="mb-3">
                                    <label for="address2">Line 1 *</label>
                                    <input type="text" class="form-control"  placeholder="" wire:model='line1'> 
                                    @error('line1') <span class="text-danger"> {{ $message }}</span>@enderror
                                </div>
                                <div class="mb-3">
                                    <label for="address2">Line 2 *</label>
                                    <input type="text" class="form-control"  placeholder="" wire:model='line2'> 
                                </div>
                                <div class="row">
                                    <div class="col-md-5 mb-3">
                                        <label for="country">Country *</label>
                                        <input type="text" class="form-control" placeholder="" required wire:model='country'>
                                        @error('country') <span class="text-danger"> {{ $message }}</span>@enderror
                                        
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="state">State *</label>
                                        <input type="text" class="form-control" placeholder="" required wire:model='state'>
                                        @error('state') <span class="text-danger"> {{ $message }}</span>@enderror
                                       
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="zip">Zip *</label>
                                        <input type="text" class="form-control" placeholder="" required wire:model='zipcode'>
                                        @error('zipcode') <span class="text-danger"> {{ $message }}</span>@enderror
                                    </div>
                                </div>
                                <hr class="mb-4">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="same-address" wire:model="shipping_is_different">
                                    <label class="custom-control-label" for="same-address">Shipping address is different from billing address</label>
                                </div>
              
                                <hr class="mb-4">
                                @if ($shipping_is_different)
                                    <div>
                                        <div class="title-left">
                                            <h3>Shipping address</h3>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="firstName">First name *</label>
                                                <input type="text" class="form-control"  placeholder="" value="" required wire:model='s_firstname'>
                                                @error('s_firstname') <span class="text-danger"> {{ $message }}</span>@enderror
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="lastName">Last name *</label>
                                                <input type="text" class="form-control" placeholder="" value="" required wire:model='s_lastname'>
                                                @error('s_lastname') <span class="text-danger"> {{ $message }}</span>@enderror
                                            </div>
                                        </div>
                                       
                                        <div class="mb-3">
                                            <label for="email">Email Address *</label>
                                            <input type="email" class="form-control"  placeholder="" wire:model='s_email'>
                                            @error('s_email') <span class="text-danger"> {{ $message }}</span>@enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="address">Address *</label>
                                            <input type="text" class="form-control" placeholder="" required wire:model='s_address'>
                                            @error('address') <span class="text-danger"> {{ $message }}</span>@enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="address2">Line 1 *</label>
                                            <input type="text" class="form-control"  placeholder="" wire:model='s_line1'> 
                                            @error('s_line1') <span class="text-danger"> {{ $message }}</span>@enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="address2">Line 2 *</label>
                                            <input type="text" class="form-control"  placeholder="" wire:model='s_line2'> 
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5 mb-3">
                                                <label for="country">Country *</label>
                                                <input type="text" class="form-control" placeholder="" required wire:model='s_country'>
                                                @error('s_country') <span class="text-danger"> {{ $message }}</span>@enderror
                                                
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="state">State *</label>
                                                <input type="text" class="form-control" placeholder="" required wire:model='s_state'>
                                                @error('s_state') <span class="text-danger"> {{ $message }}</span>@enderror
                                               
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label for="zip">Zip *</label>
                                                <input type="text" class="form-control" placeholder="" required wire:model='s_zipcode'>
                                                @error('s_zipcode') <span class="text-danger"> {{ $message }}</span>@enderror
                                            </div>
                                        </div>   
    
                                    </div>
                                    
                                @endif
                                
                                
                                    <div class="title"> <span>Payment</span> </div>
                                    <div class="d-block my-3">
                                        <div class="custom-control custom-radio">
                                            <input id="cod" name="paymentMethod" type="radio" class="custom-control-input" checked required wire:model='paymentmode'>
                                            <label class="custom-control-label" for="cod">Cash on Delivery</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" required wire:model='paymentmode'>
                                            <label class="custom-control-label" for="credit">Credit card</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required wire:model='paymentmode'>
                                            <label class="custom-control-label" for="debit">Debit card</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required wire:model='paymentmode'>
                                            <label class="custom-control-label" for="paypal">Paypal</label>
                                        </div>
                                    </div>
                                    @error('paymentmode') <span class="text-danger"> {{ $message }}</span>@enderror
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="cc-name">Name on card</label>
                                            <input type="text" class="form-control" id="cc-name" placeholder="" required> <small class="text-muted">Full name as displayed on card</small>
                                            <div class="invalid-feedback"> Name on card is required </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="cc-number">Credit card number</label>
                                            <input type="text" class="form-control" id="cc-number" placeholder="" required>
                                            <div class="invalid-feedback"> Credit card number is required </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3 mb-3">
                                            <label for="cc-expiration">Expiration</label>
                                            <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                                            <div class="invalid-feedback"> Expiration date required </div>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="cc-expiration">CVV</label>
                                            <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                                            <div class="invalid-feedback"> Security code required </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="payment-icon">
                                                <ul>
                                                    <li><img class="img-fluid" src="{{ asset('assets/images/payment-icon/1.png') }}" alt=""></li>
                                                    <li><img class="img-fluid" src="{{ asset('assets/images/payment-icon/2.png') }}" alt=""></li>
                                                    <li><img class="img-fluid" src="{{ asset('assets/images/payment-icon/3.png') }}" alt=""></li>
                                                    <li><img class="img-fluid" src="{{ asset('assets/images/payment-icon/5.png') }}" alt=""></li>
                                                    <li><img class="img-fluid" src="{{ asset('assets/images/payment-icon/7.png') }}" alt=""></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                <hr class="mb-1"> 
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-6 mb-3">
                        <div class="row">
                            <div class="col-md-12 col-lg-12">
                                <div class="shipping-method-box">
                                    <div class="title-left">
                                        <h3>Shipping Method</h3>
                                    </div>
                                    <div class="mb-4">
                                        <div class="custom-control custom-radio">
                                            <input id="shippingOption1" name="shipping-option" class="custom-control-input" checked="checked" type="radio">
                                            <label class="custom-control-label" for="shippingOption1">Standard Delivery</label> <span class="float-right font-weight-bold">FREE</span> </div>
                                        <div class="ml-4 mb-2 small">(3-7 business days)</div>
                                        <div class="custom-control custom-radio">
                                            <input id="shippingOption2" name="shipping-option" class="custom-control-input" type="radio">
                                            <label class="custom-control-label" for="shippingOption2">Express Delivery</label> <span class="float-right font-weight-bold">$10.00</span> </div>
                                        <div class="ml-4 mb-2 small">(2-4 business days)</div>
                                        <div class="custom-control custom-radio">
                                            <input id="shippingOption3" name="shipping-option" class="custom-control-input" type="radio">
                                            <label class="custom-control-label" for="shippingOption3">Next Business day</label> <span class="float-right font-weight-bold">$20.00</span> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-12">
                                <div class="odr-box">
                                    <div class="title-left">
                                        <h3>Shopping cart</h3>
                                    </div>
                                    <div class="rounded p-2 bg-light">
                                        @foreach (Cart::instance('cart')->content() as $item )
                                            
                                            <div class="media mb-2 border-bottom">
                                                <div class="media-body"> <a href="{{ route('product.details',['slug'=>$item->model->slug]) }}"> {{Str::ucfirst($item->model->name ) }}</a>
                                                    <div class="small text-muted">Price: ₦{{ number_format($item->model->regular_price) }} <span class="mx-2">|</span> Qty:{{ $item->qty }} <span class="mx-2">|</span> Subtotal: ₦{{ number_format($item->subtotal)  }}</div>
                                                </div>
                                            </div>
                                        @endforeach
                                    
                                    </div>
                                </div>
                            </div>
                            @if (Session::has('checkout'))
                                <div class="col-md-12 col-lg-12">
                                    <div class="order-box">
                                        <div class="title-left">
                                            <h3>Your order</h3>
                                        </div>
                                        <div class="d-flex">
                                            <div class="font-weight-bold">Product</div>
                                            <div class="ml-auto font-weight-bold">Total</div>
                                        </div>
                                        <hr class="my-1">
                                        <div class="d-flex">
                                            <h4>Sub Total</h4>
                                            <div class="ml-auto font-weight-bold"> ₦ {{Session::get('checkout')['subtotal'] }} </div>
                                        </div>
                                        
                                        <hr class="my-1">
                                    
                                        <div class="d-flex">
                                            <h4>Tax</h4>
                                            <div class="ml-auto font-weight-bold"> ₦ {{Session::get('checkout')['tax'] }}</div>
                                        </div>
                                        <div class="d-flex">
                                            <h4>Shipping Cost</h4>
                                            <div class="ml-auto font-weight-bold"> Free </div>
                                        </div>
                                        <hr>
                                        <div class="d-flex gr-total">
                                        
                                                <h5>Grand Total</h5>
                                                <div class="ml-auto h5"> ₦ {{ Session::get('checkout')['total'] }} </div>
                                                
                                            
                                        
                                        </div>
                                        <hr> </div>
                                </div>
                            @endif
                            <div class="col-12 d-flex shopping-box"> <button type="submit" class="ml-auto btn hvr-hover">Place Order</button> </div>
                        </div>
                    </div>
                </div>

            </form>
            
        @else
            <div class="row">
                <h1>Your cart is empty,Please add items to Cart</h1>
               
            </div>  
            <div class="row shopping-box"> <a href="{{ route('shop') }}" class="ml-auto btn hvr-hover">Shop</a> </div>  
            
        @endif
       

    </div>
</div>
<!-- End Cart -->