<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Tour;
use Carbon\Carbon;

class ReservaToursController extends Controller
{
    public function index(){
    	return 'index';
    }

    public function store(Request $request){
    	$tour = Tour::find($request->input('tour'));

        if ($tour != null) {
            $tour->users()->attach(2, 
                ['fecha_reserva' => Carbon::now(), 
                'desde' => $request->input('desde'),
                'hora_desde'=>$request->input('hora_desde'),
                'hasta' => $request->input('hasta'),
                'hora_hasta'=>$request->input('hora_hasta'),
                'cantidad' => $request->input('cant'),
                'costo' => $request->input('costo')]);
        }
        return response()->json([
                'success' => 'Reserva guardada con éxito',
                'error' => 'error',
                'tour' => $request->all()
            ]);
    }

    public function create(){
        $tours =  ['' => ''] + Tour::orderBy('nombre')->lists('nombre', 'id')->all();
        return view('tours.reserva.crear-reserva', compact('tours'));
    }
}
