<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\CarroGolf;
use Carbon\Carbon;

class ReservaCarrosController extends Controller
{
    public function index(){
        return 'index';
    }

    public function store(Request $request){
        $carro = CarroGolf::find($request->input('tipocarro'));

        if ($carro != null) {
            $carro->users()->attach(2, 
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
                'bandera' => 'bandera',
                'tour' => $request->all()
            ]);
    }

    public function create(){
        //$carros =  ['' => ''] + CarroGolf::orderBy('tipo')->lists('tipo', 'id')->all();
        $carros = CarroGolf::orderBy('tipo')->lists('tipo', 'id')->all();
        return view('carros.reserva.crear-reserva', compact('carros'));
    }
}
