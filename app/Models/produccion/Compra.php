<?php

namespace App\Models\produccion;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = "compras";

    public function inventario()
    {
        return $this->hasMany(ProductoComprado::class, 'id_compra');
    }

    public function proveedor()
    {
        return $this->belongsToMany(Proveedor::class, 'id_proveedor');
    }

    public function empleado()
    {
        return $this->belongsToMany(Proveedor::class, 'id_empleado');
    }
}
