<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\CarroGolf;

class CarroGolfController extends Controller
{
    public function index(){
    	$carros = CarroGolf::all();
    	//dd($carros);
    	return view('carros.index', compact('carros'));
    }

    public function store(Request $request){
    	$carro = new CarroGolf();
    }
}
