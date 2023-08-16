<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'admin_id',
        'posttitle', 
        'shortwriteup',
        'content',
        'reference',
        'author', 
        'featured_image',
    ]; 

    public function blogcategories(){
       // return $this->hasMany(blogcategory::class, 'id', 'id');
        return $this->belongsTo(blogcategory::class, 'category', 'id');
    } 
     /**
        * Get the user that owns the Blog
        *
        * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
        */
    public function user()
    {
        return $this->belongsTo(User::class, 'foreign_key', 'other_key');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    
}
