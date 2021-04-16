<?php

namespace App\Models\produccion;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImpuestoCompra extends Model
{
    use HasFactory;
    protected $fillable = [
        'impuesto'
    ];
    protected $guarded = ['id'];
    protected $table = "impuesto_compra";

    public function producI(){
        return $this->belongsToMany(Inventario::class, 'impuesto_producto');
    }
}
