<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model{
    protected $fillable =
        [
            'id',
            'nombre',
            'sku',
            'descripcion',
        ];
    protected $table = 'products';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $guarded = [];
}
