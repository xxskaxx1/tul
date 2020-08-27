<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableCartsCreate extends Migration{
    public function up(){
        Schema::create('carts', function (Blueprint $table){
            $table->bigIncrements('id');
            $table->string('status')->default('pending');
        });
    }

    public function down(){
        Schema::dropIfExists('carts');
    }
}
