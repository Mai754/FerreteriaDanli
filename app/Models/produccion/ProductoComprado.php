<?php

namespace App\Models\produccion;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductoComprado extends Model
{
    use HasFactory;
    protected $fillable = [
        'cantidad', 
        'precio'
    ];
    protected $guarded = ['id'];
    protected $table = "producto_comprado";

    public function producC(){
        return $this->belongsToMany(Inventario::class, 'comprado_producto');
    }
}
