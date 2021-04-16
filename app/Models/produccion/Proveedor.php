<?php

namespace App\Models\produccion;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;
    protected $fillable = [
        'DNI', 
        'nombre_encargado', 
        'apellido_encargado', 
        'nombre_empresa',
        'dirección_empresa',
        'numero_encargado',
        'numero_empresa'
    ];
    protected $guarded = ['id'];
    protected $table = 'proveedores';

    public function venta(){
        return $this->hasMany(Compras::class);
    }
}
