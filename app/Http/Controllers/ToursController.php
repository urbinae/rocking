<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Tour;

class ToursController extends Controller
{
    public function index(){
    	$tours = Tour::all();
    	//dd($tours);
    	return view('tours.index', compact('tours'));
    }

    public function store(Request $request){
    	$tour = new Tour();
    }

    public function reservar(Request $request){
    	$tour = Tour::find(1);

    	if ($tour != null) {
    		$tour->users()->attach(2, 
                ['fecha_reserva' => Carbon::now(), 
                'desde' => Carbon::now(),
                'hora_desde'=>'01:00',
                'hasta' => Carbon::now(),
                'hora_hasta'=>'02:00',
                'cantidad' => 2,
                'costo' => 320.5]);
    		dd('no null', $tour);
    	}
    	dd('null', $tour);

    }

}
