<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Cart;

class CartComponent extends Component
{
 

    public function increaseQuantity($rowId)
    {
        $product = Cart::get($rowId);
        $qty = $product->qty + 1;
        Cart::update($rowId, $qty);
       // session()->flash('success_message', 'Item added in cart');
        return redirect()->route('shop.cart');
    }

    public function decreaseQuantity($rowId)
    { 
        $product = Cart::get($rowId);
        $qty = $product->qty - 1;
        Cart::update($rowId, $qty);
       // session()->flash('success_message', 'Item added in cart');
        return redirect()->route('shop.cart');
    }

    public function destroy($id){
        Cart::remove($id);
        session()->flash('success_message', 'Item has been removed!');
        return redirect()->route('shop.cart');
    }

    public function clearAll(){
        Cart::destroy();
    }

    public function render()
    {
        return view('livewire.cart-component');
    }
}
