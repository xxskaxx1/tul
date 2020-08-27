<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TiendaController extends Controller{
    public function indexTienda(){
    	$objProductos=\DB::select("select * from products");
    	return view('Inicio',compact('objProductos'));
    	//return view('TecnicoPlus.Ranking.AccidentesLaborales.Index',compact('objTecnicos'));
    	//return view('Inicio');
    }
    public function adicionarProducto(Request $request){
    	dd($request);
    }
}
