<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vehicle;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dati_vehicles = Vehicle::All();
        $data = [
            'Veicoli' => $dati_vehicles
        ];
        return view('vehicles.index', $data);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vehicles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $data = $request->all();
        //validiamo
        
        $VehicleNew = new Vehicle();
        $VehicleNew -> marca = $data['marca'];
        $VehicleNew -> modello = $data['modello'];
        $VehicleNew -> anno = $data['anno'];
        $VehicleNew -> cilindrata = $data['cilindrata'];
 

        $VehicleNew->save();

        $Vehicle = Vehicle::orderBy('id', 'desc')->first();

        return redirect()->route('vehicles.index', $VehicleNew);
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $vehicle_selected = Vehicle::find($id);
        $data = [
            'Veicoli' => $vehicle_selected
        ];
        
        return view('vehicles.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
