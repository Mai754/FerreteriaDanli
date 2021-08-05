<?php

namespace App\Models\produccion;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductoVendido extends Model
{
    use HasFactory;
    protected $table = "productos_vendidos";
    protected $fillable = ["id_venta", "codigo_producto", "nombre_producto", "precio", "cantidad"];
}
