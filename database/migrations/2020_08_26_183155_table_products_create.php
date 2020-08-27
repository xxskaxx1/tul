<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableProductsCreate extends Migration{
    public function up(){
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->bigInteger('sku')->nullable();
            $table->string('descripcion',500)->nullable();
        });
    }
    public function down(){
        Schema::dropIfExists('products');
    }
}
