<main>
    <div class="top-search">
        <div class="container">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
        </div>
    </div>
    <!-- End Top Search -->

    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Product Detail</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Product</a></li>
                        <li class="breadcrumb-item active">Product Detail </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Shop Detail  -->
    <div class="shop-detail-box-main">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-6">
                    <img class="d-block w-100" src="{{asset('assets/images')}}/{{ $product->image }}" }}>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-6">
                    <div class="single-product-details">
                        <h2>{{ Str::ucfirst($product->name)}}</h2>
                        <h5>  ₦{{ number_format($product->regular_price) }}</h5>
                        <p class="available-stock"><span>Availability: <a href="#">{{ $product->stock_status }}</a></span>
                            <p>
                                <h4>Description:</h4>
                                <p>{{$product->description}} </p>
                                

                                <div class="price-box-bar">
                                    <div class="cart-and-bay-btn">
                                        <a class="btn hvr-hover" data-fancybox-close="" href="#">Buy New</a>
                                        <a class="btn hvr-hover" data-fancybox-close="" href="#" wire:click.prevent="store({{ $product->id}},'{{ $product->name }}',{{ $product->regular_price }})">Add to cart</a>
                                    </div>
                                </div>

                                <div class="add-to-btn">
                                    <div class="add-comp">
                                        <a class="btn hvr-hover" href="#"><i class="fas fa-heart"></i> Add to wishlist</a>

                                    </div>
                                    <div class="share-bar">
                                        <a class="btn hvr-hover" href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a>
                                        <a class="btn hvr-hover" href="#"><i class="fab fa-google-plus" aria-hidden="true"></i></a>
                                        <a class="btn hvr-hover" href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                                        <a class="btn hvr-hover" href="#"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a>
                                        <a class="btn hvr-hover" href="#"><i class="fab fa-whatsapp" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                    </div>
                </div>
            </div>

            <div class="row my-5">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Related Products</h1>
                    
                    </div>
                    <div class="featured-products-box owl-carousel owl-theme">
                        @foreach ($related_products as $related_product )
                            
                        
                            <div class="item">
                                <div class="products-single fix">
                                    <div class="box-img-hover">
                                        <img src="{{asset('assets/images/products')}}/{{ $related_product->image }}" class="img-fluid" alt="Image">
                                        <div class="mask-icon">
                                            <ul>
                                                <li><a href="{{ route('product.details',['slug'=>$related_product->slug]) }}" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                            </ul>
                                            <a class="cart" href="" wire:click.prevent="store({{ $product->id}},'{{ $product->name }}',{{ $product->regular_price }})">Add to Cart</a>
                                        </div>
                                    </div>
                                    <div class="why-text">
                                        <h4>{{ Str::ucfirst($related_product->name)  }}</h4>
                                        <h5>  ₦{{ number_format($related_product->regular_price) }}</h5>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </div>

</main>