<?php

namespace App\Models\produccion;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = "ventas";

    public function inventario()
    {
        return $this->hasMany(ProductoVendido::class, 'id_venta');
    }

    public function cliente()
    {
        return $this->belongsToMany(Cliente::class, 'id_cliente');
    }
}
