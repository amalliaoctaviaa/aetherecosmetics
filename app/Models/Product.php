<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'product_name', 'product_foto', 'product_desc', 'product_varian', 'product_varian_desc', 'product_price', 'product_stock'
    ];
}
