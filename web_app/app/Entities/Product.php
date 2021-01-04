<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
      'product_sku', 'manufacturer_id', 'slug', 'name', 'image', 'price', 'cost_price', 'short_description', 'long_description', 'vote', 'quantity', 'status'
    ];
}
