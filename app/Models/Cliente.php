<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Cliente extends Model
{
    use HasFactory;

    protected $table = 'clientes';

    public function user() {
        return $this->hasOne(User::class);
    }

    public function fletes() {
        return $this->hasMany(Flete::class);
    }

    public static function guardar(Request $request) {
        $c = new Cliente;
        $c->nombres = $request['nombres'];
        $c->ci = $request['ci'];
        $c->celular = $request['celular'];
        $c->direccion = $request['direccion'];
        $c->estado = $request['estado'];
        $c->save();
        return $c;
    }

}
