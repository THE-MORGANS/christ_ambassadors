<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class event extends Model
{
    use HasFactory; 

    protected $fillable = [
        'admin_id',
        'event_title',
        'event_content',
        'event_date',
        'event_time',
        'event_venue',
        'event_image',
        'status',
    ];
}
