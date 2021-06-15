<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Illuminate\Support\Carbon;

class AdminAddProductComponent extends Component
{
    use WithFileUploads; 
    public $name;
    public $slug;
    public $description;
    public $price;
    public $SKU;
    public $stock_status;
    public $featured;
    public $quantity;
    public $image;
    public $category_id;

    public function mount(){
        $this->stock_status = 'instock';
        $this->featured = 0;
    }

    public function generateSlug(){
        $this->slug = Str::slug($this->name);

    }


public function updated($fields){
    $this->validateOnly($fields,[
        'name'=> 'required', 
            'slug' => 'required|unique:products',
            'description' => 'required',
            'price' => 'required|numeric',
            'SKU' => 'required',
            'stock_status' => 'required',
            'quantity' => 'required|numeric',
            'image' => 'required|mimes:jpeg,png',
            'category_id' => 'required',
            


    ]);
}

    public function addProduct(){
        $this->validate([
            'name'=> 'required', 
            'slug' => 'required|unique:products',
            'description' => 'required',
            'price' => 'required|numeric',
            'SKU' => 'required',
            'stock_status' => 'required',
            'quantity' => 'required|numeric',
            'image' => 'required|mimes:jpeg,png',
            'category_id' => 'required',
            


        ]);


        $product = new Product();
        $product->name = $this->name;
        $product->slug = $this->slug;
        $product->description = $this->description;
        $product->regular_price = $this->price;
        $product->SKU = $this->SKU;
        $product->stock_status = $this->stock_status;
        $product->featured = $this->featured;
        $product->quantity = $this->quantity;
        $imageName = Carbon::now()->timestamp . '.' . $this->image->extension();
        $this->image->storeAs('products',$imageName);
        $product->image = $imageName;
        $product->category_id = $this->category_id;
        $product->save();
        session()->flash('message','Product added successfully!');

    }

    public function render()
    { 
        $categories = Category::all();
        return view('livewire.admin.admin-add-product-component',['categories'=>$categories])->layout('layouts.base');
    }
}
