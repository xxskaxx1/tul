<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product_carts extends Model{
    protected $fillable =
        [
            'product_id',
            'cart_id',
            'quantity',
        ];
    protected $table = 'product_cars';
    public $timestamps = false;
    protected $guarded = [];
}
