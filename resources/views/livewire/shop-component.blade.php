<main>
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
                         

                            @foreach ($categories as $category)
                                <a class="list-group-item list-group-item-action" href="{{ route('product.category',['category_slug'=>$category->slug]) }}">{{ Str::ucfirst($category->name)}}</a>   
                            @endforeach
                            
                        </div>     
                              
                            
                             
                    </div>
              
                   

                </div>
            </div>
            <div class="col-xl-9 col-lg-9 col-sm-12 col-xs-12 shop-content-right">
                <div class="right-product-box">
                    <div class="product-item-filter row">
                        <div class="col-12 col-sm-12 text-center text-sm-left">
                            <div class="toolbar-sorter-right">
                                <span>Sort by </span>

                                <div wire:ignore >
                                    <select id="basic" class="selectpicker show-tick form-control" wire:model='sorting' >
                                        <option value="default" data-display="Select">Nothing</option>
                                        <option value="price_desc">High Price → Low Price</option>
                                        <option value="price">Low Price → High Price</option>
                                        <option value="date">Newness</option>  
                                    </select>

                                </div>
                                
                                
                            </div>
                           
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
                                                <img src="{{ asset('assets/images/products') }}/{{ $product->image }}" class="img-fluid" alt="Image">
                                                <div class="mask-icon">
                                                    <ul>
                                                        <li><a href="{{ route('product.details',['slug'=>$product->slug]) }}" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                                    </ul>
                                                    <a class="cart" href="#"  wire:click.prevent="store({{ $product->id}},'{{ $product->name }}',{{ $product->regular_price }})">Add to Cart</a>
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
</main>