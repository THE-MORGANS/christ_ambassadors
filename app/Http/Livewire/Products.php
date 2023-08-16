<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use Auth;

class Products extends Component
{
    public function render()
    {
      
        return view('livewire.products',[
            'products' => auth()->user()->type == 1 ? Product::all() : Product::where('admin_id', auth()->id())->get()
        ]);
    } 
} 
