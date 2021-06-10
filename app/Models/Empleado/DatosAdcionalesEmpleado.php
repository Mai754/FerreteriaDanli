<?php

namespace App\Models\Empleado;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DatosAdcionalesEmpleado extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'datos_empleados';
}
