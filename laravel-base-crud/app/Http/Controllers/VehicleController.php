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
        
        
        $VehicleNew = new Vehicle();

        // mi deve ritornare un array con il valore marca
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
    public function show(Vehicle $Vehicle)
    {
        
        $vehicle_selected = $Vehicle;
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
    public function edit(Vehicle $Vehicle)
    {
        
        $data = [
            'Veicoli' => $Vehicle
        ];
        
        return view('vehicles.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vehicle $Vehicle)
    {
        
        $data = $request->all();
        $Vehicle->update($data);

        return redirect()->route('vehicles.show', $data);

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
