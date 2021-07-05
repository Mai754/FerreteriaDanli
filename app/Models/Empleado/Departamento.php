<?php

namespace App\Models\Empleado;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'departamento';

    public function empleados()
    {
        return $this->belongsToMany(Empleado::class, 'empleado_departamento');
    }
}
