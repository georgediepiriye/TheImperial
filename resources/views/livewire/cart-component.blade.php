 <main>
 <div class="cart-box-main">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                @if (Session::has('message'))
                    <div class="alert alert-success">
                        <strong>{{Session::get('message')}}</strong>

                    </div>
                   
                    
                @endif

                @if (Cart::instance('cart')->count() > 0)
                    <div class="table-main table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Images</th>
                                    <th>Product Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th>Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach (Cart::instance('cart')->content() as $item )
                                    <tr>
                                        <td class="thumbnail-img">
                                            <a href="{{ route('product.details',['slug'=>$item->model->slug]) }}">
                                                <img class="img-fluid" src="assets/images/products/{{ $item->model->image }}" alt="" />
                                            </a>
                                        </td>
                                        <td class="name-pr">
                                            <a href="{{ route('product.details',['slug'=>$item->model->slug]) }}">
                                                 {{Str::ucfirst($item->model->name ) }}
                                            </a>
                                        </td>
                                        <td class="price-pr">
                                            <p>₦{{ number_format($item->model->regular_price) }}</p>
                                        </td>
                                        <td class="quantity-box">
                                            <a href="" class="btn btn-reduce" wire:click.prevent="decreaseQuantity('{{ $item->rowId }}')">-</a>
                                            <input type="text" value="{{ $item->qty }}" data-max='120' pattern="[0-9">
                                            <a href="" class="btn btn-increase" wire:click.prevent="increaseQuantity('{{ $item->rowId }}')">+</a>
                                           
                                        </td>
                                        <td class="total-pr">
                                            <p>₦{{ number_format($item->subtotal)  }}</p>
                                        </td>
                                        <td class="remove-pr">
                                            <a href="#"><i class="fas fa-times" wire:click.prevent="removeItem('{{ $item->rowId }}')"></i> </a>
                                        </td>
                                    </tr>
                                    
                                @endforeach
                                
                               
                               
                            </tbody>
                        </table>
                    </div>
                @else
                    <p>No item in Cart</p>
                @endif
            </div>
        </div>

        <div class="row my-5">
            <div class="col-lg-4 col-sm-4">
                <div class="coupon-box">
                    <div class="input-group input-group-sm">
                        <input class="form-control" placeholder="Enter your coupon code" aria-label="Coupon code" type="text">
                        <div class="input-group-append">
                            <button class="btn btn-theme" type="button">Apply Coupon</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="update-box">
                    <a href="">Update Cart</a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="update-box">
                    <a href="" wire:click.prevent='clearCart()'>Clear Shopping Cart</a>
                </div>
            </div>
        </div>

        <div class="row my-5">
            <div class="col-lg-8 col-sm-12"></div>
            <div class="col-lg-4 col-sm-12">
                <div class="order-box">
                    <h3>Order summary</h3>
                    <div class="d-flex">
                        <h4>Sub Total</h4>
                        <div class="ml-auto font-weight-bold">₦{{ Cart::instance('cart')->subtotal() }} </div>
                    </div>
                    
                    <hr class="my-1">
          
                    <div class="d-flex">
                        <h4>Tax</h4>
                        <div class="ml-auto font-weight-bold"> ₦{{ Cart::instance('cart')->tax() }}</div>
                    </div>
                    <div class="d-flex">
                        <h4>Delivery Cost</h4>
                        <div class="ml-auto font-weight-bold"> Free </div>
                    </div>
                    <hr>
                    <div class="d-flex gr-total">
                        <h5>Grand Total</h5>
                        <div class="ml-auto h5"> ₦ {{Cart::instance('cart')->total()}} </div>
                    </div>
                    <hr> </div>
            </div>
            <div class="col-12 d-flex shopping-box"><a href="checkout.html" class="ml-auto btn hvr-hover" wire:click.prevent='checkout'>Checkout</a> </div>
        </div>

    </div>
</div>
</main>
