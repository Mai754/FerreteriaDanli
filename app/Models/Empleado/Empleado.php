<?php

namespace App\Models\Empleado;

use App\Models\produccion\Compras;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;
    protected $fillable = [
        'foto', 
        'DNI_empleado', 
        'primer_nombre', 
        'segundo_nombre',
        'primer_apellido',
        'segundo_apellido',
        'fecha_de_nacimiento',
        'direccion',
        'nacionalidad',
        'contacto_de_emergencia',
        'sexo'
    ];
    protected $guarded = ['id'];
    protected $table = 'empleado';

    public function compra(){
        return $this->hasMany(Compras::class);
    }
}
