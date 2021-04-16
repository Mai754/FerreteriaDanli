<?php

namespace App\Models\produccion;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre_cliente', 
        'apellido_cliente', 
        'numero_de_telefono',
    ];
    protected $guarded = ['id'];
    protected $table = 'cliente';
}
