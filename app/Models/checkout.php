<?php

namespace App\Models;
use App\Models\Gallery;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class checkout extends Model
{
    use HasFactory; 
 
    protected $fillable = [
        'order_number',
        'Fname',
        'Lname',
        'inputAddress',
        'city' ,
        'state',
        'zipcode',
        'email',
        'pnumber',
        'country',
        'subtotalamount',
        'totalamount' ,
    ];
}
