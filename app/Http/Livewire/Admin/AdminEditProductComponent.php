<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Livewire\WithFileUploads;

class AdminEditProductComponent extends Component
{   use WithFileUploads;

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
    public $newImage;
    public $product_id;

    public function mount($product_slug){
        $product = Product::where('slug',$product_slug)->first();
        $this->name=$product->name;
        $this->slug = $product->slug;
        $this->description = $product->description;
        $this->price=$product->regular_price;
        $this->SKU=$product->SKU;
        $this->stock_status=$product->stock_status;
        $this->featured=$product->featured;
        $this->quantity=$product->quantity;
        $this->image=$product->image;
        $this->category_id=$product->category_id;
        $this->product_id=$product->id;

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
                'category_id' => 'required'
                
                
    
    
        ]);
    }

    public function updateProduct(){
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



        $product = Product::find($this->product_id);
        $product->name = $this->name;
        $product->slug = $this->slug;
        $product->description = $this->description;
        $product->regular_price = $this->price;
        $product->SKU = $this->SKU;
        $product->stock_status = $this->stock_status;
        $product->featured = $this->featured;
        $product->quantity = $this->quantity;
        if($this->newImage){
            $imageName = Carbon::now()->timestamp . '.' . $this->newImage->extension();
            $this->newImage->storeAs('products',$imageName);
            $product->image = $imageName;

        }
        
        $product->category_id = $this->category_id;
        $product->save();
        session()->flash('message','Product Updated successfully!');
    } 

    public function render()
    {
        $categories = Category::all();
        return view('livewire.admin.admin-edit-product-component',['categories'=>$categories])->layout('layouts.base');
    }
}
