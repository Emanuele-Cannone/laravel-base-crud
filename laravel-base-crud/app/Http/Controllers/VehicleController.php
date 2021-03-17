<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VehicleController extends Controller
{
    public function indexVehicle(){
        $dati_vehicles = vehicle::All();
        $data = [
            'Veicoli' => $dati_vehicles
        ];
        return view('auto', $data);
    }
}
