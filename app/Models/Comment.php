<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'commenter_name',
        'commenter_email',
        'content',
        'blog_id',
        'parent_id',
    ];

    public function blog(){
        return $this->belongsTo(Blog::class);
    }

    // Define the relationship for replies (child comments)
    public function replies()
    {
        return $this->hasMany(Comment::class, 'parent_id');
    }

   
}
