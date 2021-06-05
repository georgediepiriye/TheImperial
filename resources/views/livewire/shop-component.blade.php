
 <div class="all-title-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Shop</h2>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Shop</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End All Title Box -->

<!-- Start Shop Page  -->
<div class="shop-box-inner">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-sm-12 col-xs-12 sidebar-shop-left">
                <div class="product-categori">
                    <div class="search-product">
                        <form action="#">
                            <input class="form-control" placeholder="Search here..." type="text">
                            <button type="submit"> <i class="fa fa-search"></i> </button>
                        </form>
                    </div>
                    <div class="filter-sidebar-left">
                        <div class="title-left">
                            <h3>Categories</h3>
                        </div>
                        <div class="list-group list-group-collapse list-group-sm list-group-tree" id="list-group-men" data-children=".sub-men">
                          
                            <a class="list-group-item list-group-item-action" href="#sub-men1" data-toggle="collapse" aria-expanded="true" aria-controls="sub-men1">Sofa</a>
                            <a class="list-group-item list-group-item-action" href="#sub-men1" data-toggle="collapse" aria-expanded="true" aria-controls="sub-men1">Table</a>
                            <a class="list-group-item list-group-item-action" href="#sub-men1" data-toggle="collapse" aria-expanded="true" aria-controls="sub-men1">Chair</a>
                            <a class="list-group-item list-group-item-action" href="#sub-men1" data-toggle="collapse" aria-expanded="true" aria-controls="sub-men1">Bed</a>
                            <a class="list-group-item list-group-item-action" href="#sub-men1" data-toggle="collapse" aria-expanded="true" aria-controls="sub-men1">Lightening</a>
                          
                        </div>     
                              
                            
                             
                    </div>
                    <div class="filter-price-left">
                        <div class="title-left">
                            <h3>Price</h3>
                        </div>
                        <div class="price-box-slider">
                            <div id="slider-range"></div>
                            <p>
                                <input type="text" id="amount" readonly style="border:0; color:#fbb714; font-weight:bold;">
                                <button class="btn hvr-hover" type="submit">Filter</button>
                            </p>
                        </div>
                    </div>
                    <div class="filter-brand-left">
                        <div class="title-left">
                            <h3>Brand</h3>
                        </div>
                        <div class="brand-box">
                            <ul>
                                <li>
                                    <div class="radio radio-danger">
                                        <input name="survey" id="Radios1" value="Yes" type="radio">
                                        <label for="Radios1"> Supreme </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio radio-danger">
                                        <input name="survey" id="Radios2" value="No" type="radio">
                                        <label for="Radios2"> A Bathing Ape </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio radio-danger">
                                        <input name="survey" id="Radios3" value="declater" type="radio">
                                        <label for="Radios3"> The Hundreds </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio radio-danger">
                                        <input name="survey" id="Radios4" value="declater" type="radio">
                                        <label for="Radios4"> Alife </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio radio-danger">
                                        <input name="survey" id="Radios5" value="declater" type="radio">
                                        <label for="Radios5"> Neighborhood </label>
                                    </div>
                                </li>
                               
                               
                                <li>
                                    <div class="radio radio-danger">
                                        <input name="survey" id="Radios8" value="declater" type="radio">
                                        <label for="Radios8"> UNDFTD </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio radio-danger">
                                        <input name="survey" id="Radios9" value="declater" type="radio">
                                        <label for="Radios9"> Mighty Healthy </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio radio-danger">
                                        <input name="survey" id="Radios10" value="declater" type="radio">
                                        <label for="Radios10"> Fiberops </label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-xl-9 col-lg-9 col-sm-12 col-xs-12 shop-content-right">
                <div class="right-product-box">
                    <div class="product-item-filter row">
                        <div class="col-12 col-sm-8 text-center text-sm-left">
                            <div class="toolbar-sorter-right">
                                <span>Sort by </span>
                                <select id="basic" class="selectpicker show-tick form-control" data-placeholder="$ USD">
                                <option data-display="Select">Nothing</option>
                                <option value="1">Popularity</option>
                                <option value="2">High Price → High Price</option>
                                <option value="3">Low Price → High Price</option>
                                <option value="4">Best Selling</option>
                            </select>
                            </div>
                            <p>Showing all 4 results</p>
                        </div>
                        <div class="col-12 col-sm-4 text-center text-sm-right">
                            <ul class="nav nav-tabs ml-auto">
                                <li>
                                    <a class="nav-link active" href="#grid-view" data-toggle="tab"> <i class="fa fa-th"></i> </a>
                                </li>
                                <li>
                                    <a class="nav-link" href="#list-view" data-toggle="tab"> <i class="fa fa-list-ul"></i> </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="row product-categorie-box">
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade show active" id="grid-view">
                                <div class="row">
                                    @foreach ($products as $product)
                                 
                                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                        <div class="products-single fix">
                                            <div class="box-img-hover">
                                                <div class="type-lb">
                                                    <p class="sale">Sale</p>
                                                </div>
                                                <img src="assets/images/{{ $product->image }}" class="img-fluid" alt="Image">
                                                <div class="mask-icon">
                                                    <ul>
                                                        <li><a href="{{ route('product.details',['slug'=>$product->slug]) }}" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                                    </ul>
                                                    <a class="cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="why-text">
                                                <h4>{{ $product->name }}</h4>
                                                <h5> ₦{{ number_format($product->regular_price) }}</h5>
                                            </div>
                                        </div>
                                    </div>
                                           
                                    @endforeach
                                    
                                        {{ $products->links('pagination::bootstrap-4') }}

                                </div>
                            </div>


                        </div>
                       
                    </div>
                    
                        
                </div>
                
            </div>
        </div>
    </div>
</div>

<!-- End Shop Page -->