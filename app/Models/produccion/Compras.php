<?php

namespace App\Models\produccion;

use App\Models\Empleado\Empleado;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compras extends Model
{
    use HasFactory;
    protected $fillable = [
        'codigo_factura'
    ];
    protected $guarded = ['id'];
    protected $table = "factura_compra";

    public function empleados(){
        return $this->belongsToMany(Empleado::class, 'factura_compra');
    }

    public function proveedores(){
        return $this->belongsToMany(Proveedor::class, 'factura_compra');
    }
}
