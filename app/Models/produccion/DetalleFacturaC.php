<?php

namespace App\Models\produccion;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleFacturaC extends Model
{
    use HasFactory;
    protected $fillable = [
        'Nombre_del_producto', 
        'descripcion_del_producto',
        'marcar_del_producto'
    ];
    protected $guarded = ['id'];
    protected $table = "detallefactura_compra";

    public function produc(){
        return $this->belongsToMany(Inventario::class, 'detalleFacur_producto');
    }
}
