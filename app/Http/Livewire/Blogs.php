<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Blog;

class Blogs extends Component
{
    public function render()
    {
        return view('livewire.blogs',[
            'blogs' => auth()->user()->type == 1 ? Blog::all() : Blog::where('admin_id', auth()->id())->get()
        ]);
    }
}
