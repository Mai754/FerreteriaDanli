<?php

namespace App\Models\produccion;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductoComprado extends Model
{
    use HasFactory;
    protected $table = "productos_comprados";
    protected $fillable = ["id_compra", "codigo_producto", "nombre_producto", "precio", "cantidad", "marca"];
}
