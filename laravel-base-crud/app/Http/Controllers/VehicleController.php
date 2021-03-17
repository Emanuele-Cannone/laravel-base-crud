<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vehicle;

class VehicleController extends Controller
{
    public function indexVehicle(){
        $dati_vehicles = Vehicle::All();
        $data = [
            'Veicoli' => $dati_vehicles
        ];
        return view('auto', $data);
    }
}
