<?php

namespace App\Models\Empleado;

use App\Models\produccion\Cliente;
use Illuminate\Contracts\Session\Session;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    use HasFactory;
    protected $remember_token = false;
    protected $guarded = ['id'];
    protected $table = 'proyecto';

    public function empleados()
    {
        return $this->belongsToMany(Empleado::class, 'proyecto_empleado');
    }

    public function clientes()
    {
        return $this->belongsToMany(Cliente::class, 'proyecto_cliente');
    }

    public function estados()
    {
        return $this->belongsToMany(Estado::class, 'proyecto_estado');
    }
}
