<?php

namespace App\Models\produccion;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    use HasFactory;
    protected $fillable = [
        'codigo_producto', 
        'Nombre_del_producto', 
        'descripcion_del_producto', 
        'marcar_del_producto',
        'foto'
    ];
    protected $guarded = ['id'];
    protected $table = "inventario";
}
