<div>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Edit Product

                            </div>
                            <div class="col-md-6" style="text-align: right;">
                                <a href="{{ route('admin.products') }}" class="btn btn-success pull-right" >All Products</a>

                            </div>

                        </div>

                    </div>
                    <div class="panel-body">
                        @if (Session::has('message'))
                            <div class="alert alert-success">
                                {{ Session::get('message') }}

                            </div>
                            
                        @endif
                        <form class="form-horizontal" wire:submit.prevent="updateProduct" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label class="col-md-4">Product Name</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Product Name" class="form-control input-md" wire:model='name' wire:keyup="generateSlug">
                                    @error('name')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4"> Product Slug</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Product Slug" class="form-control input-md" wire:model="slug">
                                    @error('slug')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4"> Description</label>
                                <div class="col-md-4">
                                    <textarea placeholder="Description" class="form-control input-md" wire:model="description"></textarea>
                                    @error('description')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4"> Price:</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Price" class="form-control input-md" wire:model="price">
                                    @error('price')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4">SKU</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="SKU" class="form-control input-md" wire:model="SKU" >
                                    @error('SKU')
                                      <p class="text-danger">{{ $message }}</p>
                                @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4"> Stock status</label>
                                <div class="col-md-4">
                                    <select class="form-control" id="" wire:model="stock_status">
                                        <option value="instock">Instock</option>
                                        <option value="outofstock">Out of Stock</option>

                                    </select>
                                    @error('stock_status')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4"> Featured</label>
                                <div class="col-md-4">
                                    <select class="form-control" id="" wire:model="featured">
                                        <option value=0>No</option>
                                        <option value=1>Yes</option>

                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4">Quantiy</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Quantity" class="form-control input-md" wire:model="quantity">
                                    @error('quantity')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4">Product Image</label>
                                <div class="col-md-4">
                                    <input type="file" class="input-file" wire:model="newImage">
                                </div>
                                @if ($newImage)
                                    <img src="{{ $newImage->temporaryUrl() }}" width="120" alt="">
                                @else
                                    <img src="{{ asset('assets/images/products') }}/{{ $image }}" width="120"  alt=""/>   
                                @endif
                                @error('newImage')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4">Category</label>
                                <div class="col-md-4">
                                    <select class="form-control" id="" wire:model="category_id">
                                        <option value="">Select Category</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            
                                        @endforeach
                                        
                                      
                                    </select>
                                    @error('category_id')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row" >
                                <label class="col-md-4"></label>
                                <div class="col-md-4">
                                   <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>
</div>
