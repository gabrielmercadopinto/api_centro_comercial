<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Puesto extends Model
{
    use HasFactory;
    protected $fillable = [
        "nombre",
        "nro",
        "longitud",
        "latitud"
    ];

    public function productos(){
        return $this->belongsToMany(Producto::class, 'producto_puesto', 'puesto_id', 'producto_id')->withPivot('imagen', 'precio');
    }
}
