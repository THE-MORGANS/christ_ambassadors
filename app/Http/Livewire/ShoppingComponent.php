<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use Cart;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Session;


class ShoppingComponent extends Component
{
    use WithPagination;


   
    public function decrementQuantity()
    {
        dd('ok');
    }
  
    public function store($product_id,$product_name,$product_price)
    {
        $product = Product::whereId($product_id)->first();
       
        Cart::add([
            'id' => $product->id,
            'price' => $product->productamount,
            'name' => $product->productname, 
            'qty' => 1   
        ])->associate('App\Models\Product');
        //return redirect()->route('shop.cart')->with('success','Item added in cart');
        session()->flash('success_message', 'Item added in cart');
        return redirect()->route('shop.cart');
    }

    public function render()
    {
        $products = Product::paginate(12);
        return view('livewire.shopping-component', ['products'=>$products]);
    }
}
