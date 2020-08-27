<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carts;
use App\Models\Product_carts;
use App\Models\Products;

class TiendaController extends Controller{
    public function indexTienda(){
    	$objProductos=\DB::select("select * from products");
    	$tabla = new Carts;
        $tabla->save();
        $Cart = $tabla->id;
    	return view('Inicio',compact('objProductos','Cart'));
    }
    public function adicionarProducto(Request $request){
    	$objExisteProducto=\DB::select("select * from product_cars where product_id = ".$request->id." and cart_id = ".$request->cart);
    	if(sizeof($objExisteProducto)<1){
    		$tabla = new Product_carts;
	        $tabla->product_id = $request->id;
	        $tabla->cart_id = $request->cart;
	        $tabla->save();
	        $objProducto=\DB::select("select nombre from products where id = ".$request->id);
	        $respuesta = array(
			    "respuesta" => "true",
			    "nombre" => $objProducto[0]->nombre,
			);
	        return json_encode($respuesta);
    	}else{
    		$suma = $objExisteProducto[0]->quantity+1;
    		$objSumar=\DB::select("update product_cars set quantity = ".$suma." where product_id = ".$request->id." and cart_id = ".$request->cart);
            $respuesta = array(
			    "respuesta" => "adicionar",
			    "cantidad" => $suma,
			);
    		return json_encode($respuesta);
    	}
    }
    public function eliminarProducto(Request $request){
    	$objSumar=\DB::select("delete from product_cars where product_id = ".$request->id." and cart_id = ".$request->cart);
    	return json_encode('true');
    }
    public function confirmarCompra(Request $request){
    	try{
	    	$tabla=Carts::find($request->cart);
	        $tabla->status='completed';
	        $tabla->save();
	        return json_encode('true');
	    }catch(\Exception $e){
	    	\DB::rollBack();
	    }
    }
}
