<?php

use Illuminate\Support\Facades\Route;

Route::get('/','TiendaController@indexTienda');
Route::post('AdicionarProducto','TiendaController@adicionarProducto')->name('AdicionarProducto');
Route::post('EliminarProducto','TiendaController@eliminarProducto')->name('EliminarProducto');
Route::post('ConfirmarCompra','TiendaController@confirmarCompra')->name('ConfirmarCompra');


