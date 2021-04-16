<?php

namespace App\Models\produccion;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TotalCompra extends Model
{
    use HasFactory;
    protected $fillable = [
        'subtotal', 
        'impuesto',
        'transporte',
        'total'
    ];
    protected $guarded = ['id'];
    protected $table = "totalpago_compra";

    public function total(){
        return $this->hasOne(Compras::class);
    }
}
