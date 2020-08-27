<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableProductCarsCreate extends Migration{
    public function up(){
        Schema::create('product_cars', function (Blueprint $table) {
            $table->bigIncrements('product_id');
            $table->integer('cart_id');
            $table->integer('quantity')->default(1);
        });
    }

    public function down(){
        Schema::dropIfExists('product_cars');
    }
}
