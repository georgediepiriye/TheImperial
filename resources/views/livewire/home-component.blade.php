
 <div>
 <div id="slides-shop" class="cover-slides">
    <ul class="slides-container">
        <li class="text-left">
            <img src="{{ asset('assets/images/banner-01.jpg') }}" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="m-b-20"><strong>Welcome To <br> The Imperial</strong></h1>
                        <p class="m-b-40">Where designs meet comfort...</p>
                        <p><a class="btn hvr-hover" href="#">Shop Now</a></p>
                    </div>
                </div>
            </div>
        </li>
        <li class="text-center">
            <img src="{{ asset('assets/images/banner-02.jpg') }}" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="m-b-20"><strong>Welcome To <br> The Imperial</strong></h1>
                        <p class="m-b-40">Where designs meet comfort....</p>
                        <p><a class="btn hvr-hover" href="#">Shop Now</a></p>
                    </div>
                </div>
            </div>
        </li>
        <li class="text-right">
            <img src="{{ asset('assets/images/banner-03.jpg') }}" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="m-b-20"><strong>Welcome To <br> The Imperial</strong></h1>
                        <p class="m-b-40">Where designs meet comfort...</p>
                        <p><a class="btn hvr-hover" href="#">Shop Now</a></p>
                    </div>
                </div>
            </div>
        </li>
    </ul>
    <div class="slides-navigation">
        <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
        <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
    </div>
</div>
<!-- End Slider -->

<!-- Start Categories  -->
<div class="categories-shop">
    <div class="container">
        <div class="title-all text-center">
            <h1>Our Products Categories</h1>
        </div>
       
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="shop-cat-box">
                    <img class="img-fluid" src="{{ asset('assets/images/sofa.jpg') }}" alt="" />
                    <a class="btn hvr-hover" href="#">Sofa</a>
                </div>
                
            
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="shop-cat-box">
                    <img class="img-fluid" src="{{ asset('assets/images/table.jpg') }}" alt="" />
                    <a class="btn hvr-hover" href="#">Table</a>
                </div>
                
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="shop-cat-box">
                    <img class="img-fluid" src="{{ asset('assets/images/chair.jpg') }}" alt="" />
                    <a class="btn hvr-hover" href="#">Chair</a>
                </div>
              
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="shop-cat-box">
                    <img class="img-fluid" src="{{ asset('assets/images/bed.jpg') }}" alt="" />
                    <a class="btn hvr-hover" href="#">Bed</a>
                </div>
               
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="shop-cat-box">
                    <img class="img-fluid" src="{{ asset('assets/images/lightening.jpg') }}" alt="" />
                    <a class="btn hvr-hover" href="#">Lightening</a>
                </div>
               
            </div>
            
        </div>
    </div>
</div>
<!-- End Categories -->

<!-- Start Products  -->
<div class="products-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-all text-center">
                    <h1>Featured Products</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="special-menu text-center">
                    <div class="button-group filter-button-group">
                        <button class="active" data-filter="*">All</button>
                        <button data-filter=".top-featured">Top featured</button>
                        <button data-filter=".best-seller">Best seller</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row special-list">
            <div class="col-lg-3 col-md-6 special-grid best-seller">
                <div class="products-single fix">
                    <div class="box-img-hover">
                        <div class="type-lb">
                            <p class="sale">Sale</p>
                        </div>
                        <img src="{{ asset('assets/images/chair1.jpg') }}" class="img-fluid" alt="Image">
                        <div class="mask-icon">
                            <ul>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                            </ul>
                            <a class="cart" href="#">Add to Cart</a>
                        </div>
                    </div>
                    <div class="why-text">
                        <h4>Single Irish chair</h4>
                        <h5> ₦160,000</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 special-grid top-featured">
                <div class="products-single fix">
                    <div class="box-img-hover">
                        <div class="type-lb">
                            <p class="new">New</p>
                        </div>
                        <img src="{{ asset('assets/images/table1.jpg') }}" class="img-fluid" alt="Image">
                        <div class="mask-icon">
                            <ul>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                            </ul>
                            <a class="cart" href="#">Add to Cart</a>
                        </div>
                    </div>
                    <div class="why-text">
                        <h4>Irish bed-side table</h4>
                        <h5> ₦140,000</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 special-grid top-featured">
                <div class="products-single fix">
                    <div class="box-img-hover">
                        <div class="type-lb">
                            <p class="sale">Sale</p>
                        </div>
                        <img src="{{ asset('assets/images/bed1.jpg') }}" class="img-fluid" alt="Image">
                        <div class="mask-icon">
                            <ul>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                            </ul>
                            <a class="cart" href="#">Add to Cart</a>
                        </div>
                    </div>
                    <div class="why-text">
                        <h4>Calwood Bed BW027-18</h4>
                        <h5> ₦350,000</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 special-grid best-seller">
                <div class="products-single fix">
                    <div class="box-img-hover">
                        <div class="type-lb">
                            <p class="sale">Sale</p>
                        </div>
                        <img src="{{ asset('assets/images/light1.jpg') }}" class="img-fluid" alt="Image">
                        <div class="mask-icon">
                            <ul>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                            </ul>
                            <a class="cart" href="#">Add to Cart</a>
                        </div>
                    </div>
                    <div class="why-text">
                        <h4>Classic Italian light</h4>
                        <h5> ₦125,000</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Products  -->

