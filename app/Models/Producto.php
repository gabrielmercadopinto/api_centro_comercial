<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $fillable = [
        "nombre",
        "categoria_id"
    ];

    public function categoria(){
        return $this->belongsTo(Categoria::class, 'categoria_id');
    }

    public function puestos(){
        return $this->belongsToMany(Puesto::class, 'producto_puesto', 'producto_id', 'puesto_id')->withPivot('imagen', 'precio');
    }
}
