<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productcategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_name',
    ]; 

    public function blogcategories(){
        // return $this->hasMany(blogcategory::class, 'id', 'id');
         return $this->belongsTo(blogcategory::class, 'category', 'id');
     } 
}
