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
        'Cname',
        'country',
        'Orderoption',
        'inputAddress',
        'differentaddress',
        'inputAddress2',
        'city',
        'state',
        'zipcode',
        'pnumber' ,
        'email',
        'product_name',
        'product_amount',
        'subtotalamount',
        'totalamount',
    ];
}
