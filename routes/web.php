<?php

use Illuminate\Support\Facades\Route;

Route::get('/','TiendaController@indexTienda');
Route::post('AdicionarProducto','TiendaController@adicionarProducto')->name('AdicionarProducto');


