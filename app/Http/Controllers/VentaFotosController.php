<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Foto;
use App\Venta;
use Carbon\Carbon;

class VentaFotosController extends Controller
{
    public function index(){
    	return 'index';
    }

    public function store(Request $request){
    	return 'reserva';
    }
    public function venta(Request $request){
    	$fotos = Foto::where('grupo_id', '=', 1)->get();
    	//dd($foto->count());
    	if ($fotos != null) {
    		$venta = new Venta();
	    	$venta->cant_fotos = $fotos->count();
	    	$venta->costo_total = $fotos->count()*10;
	    	$venta->fecha_venta = Carbon::now();
	    	$venta->user_id = 1;
	    	//dd('venta', $venta);
	    	$bool_venta = $venta->save();
	    	//dd($bool_venta);
	    	if ($bool_venta) {
		    	foreach ($fotos as $foto) {
	    			$foto->ventas()->attach($venta->id);
	    		}
    			dd('no null', $fotos);
    		}
    		dd('null', $fotos);
    	}
    	
    }
}
