<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Vehiculo extends Model
{
    use HasFactory;

    protected $table = 'vehiculos';

    public function fletes() {
        return $this->hasMany(Flete::class);
    }

    public function estados() {
        return $this->belongsToMany(Estado::class)
                    ->withTimestamps();
    }

    public static function guardar(Request $request) {
        $vehiculo = new Vehiculo;
        $vehiculo->marca    = $request['marca'];
        $vehiculo->placa    = $request['placa'];
        $vehiculo->modelo   = $request['modelo'];
        $vehiculo->pasajeros = $request['pasajeros'];
        $vehiculo->kilometraje = $request['kilometraje'];
        $vehiculo->monto    = $request['monto'];
        $vehiculo->save();
        return $vehiculo;
    }

}
