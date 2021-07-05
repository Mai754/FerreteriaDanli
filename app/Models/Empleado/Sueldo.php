<?php

namespace App\Models\Empleado;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sueldo extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'sueldo';

    public function departamentos()
    {
        return $this->belongsToMany(Departamento::class, 'sueldo_departamento');
    }

    public function tipos()
    {
        return $this->belongsToMany(Tipo::class, 'tipo_sueldo');
    }

    public function empleados()
    {
        return $this->belongsToMany(Empleado::class, 'sueldo_empleado');
    }
}
