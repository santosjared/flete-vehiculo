<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Flete extends Model
{
    use HasFactory;

    protected $table = 'fletes';

    public function cliente() {
        return $this->belongsTo(Cliente::class);
    }

    public function vehiculo() {
        return $this->belongsTo(Vehiculo::class);
    }

    public static function guardar(Request $request, $id) {
        if ($request['vehiculos']) {
            foreach ($request['vehiculos'] as $vehiculo) {
                $flete = new Flete;
                $flete->inicio = $request['inicio'];
                $flete->fin = $request['fin'];
                $flete->pago = $request['pago'];
                $flete->cliente_id = $id;
                $flete->vehiculo_id = $vehiculo;
                $flete->save();
                return $flete;
            }
        }
    }

}
