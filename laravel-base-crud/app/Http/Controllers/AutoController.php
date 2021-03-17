<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AutoController extends Controller
{
    public function indexAuto(){
        $dati_vehicles = vehicles::all();
        $data=[
            'Veicoli' => $vehicles
        ];
        return view('auto', $data);
    }
}
