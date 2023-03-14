<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehiculo;
use App\Models\Estado;

class VehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehiculos = Vehiculo::all()->sortBy('modelo');
        return view('vehiculos.lista')->with('vehiculos', $vehiculos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estados = Estado::all();
        return view('vehiculos.nuevo')->with('estados', $estados);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vehiculo = Vehiculo::guardar($request);
        //$vehiculo = Vehiculo::find(3);
        if ($request['estados']) {
            $estados = $request['estados'];
            foreach ($estados as $estado) {
                $vehiculo->estados()->attach($estado);
            }
        }
        return redirect('vehiculos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vehiculo = Vehiculo::find($id);
        return view('vehiculos.editar')->with('vehiculo',$vehiculo);
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
        $vehiculo = Vehiculo::find($id);
        $vehiculo->marca = $request['marca'];
        $vehiculo->placa = $request['placa'];
        $vehiculo->modelo = $request['modelo'];
        $vehiculo->pasajeros = $request['pasajeros'];
        $vehiculo->Kilometraje = $request['kilometraje'];
        $vehiculo->monto = $request['monto'];
        $estados = $request['estados'];
        foreach ($estados as $estado) {
            $vehiculo->estados()->detach($vehiculo->estados()->first()->id);
            $vehiculo->estados()->attach($estado);
        }
        $vehiculo->save();
        return redirect('vehiculos');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vehiculo = Vehiculo::find($id);
        $vehiculo->estados()->detach($vehiculo->estados()->first()->id);
        $vehiculo->delete();
        return redirect('vehiculos');
    }
}
