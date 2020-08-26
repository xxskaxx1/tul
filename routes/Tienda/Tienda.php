<?php
Route::group(['prefix' => 'CondicionesSalud','middleware' => 'auth'], function(){
	Route::get('IndexTienda','CondicionesSalud\indexTienda@IndexTienda');
	//Route::post('ConsultarCondicionesSalud','CondicionesSalud\ReporteCondicionesSaludController@consultarCondicionesSalud')->name('ConsultarCondicionesSalud');
	//Route::post('ConsultarFirma','CondicionesSalud\ReporteCondicionesSaludController@consultarFirma')->name('ConsultarFirma');
});
?>
