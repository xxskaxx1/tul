<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Carts extends Model{
    protected $fillable =
        [
            'id',
            'status',
        ];
    protected $table = 'carts';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $guarded = [];
}
