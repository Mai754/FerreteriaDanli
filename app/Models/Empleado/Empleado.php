<?php

namespace App\Models\Empleado;

use App\Models\produccion\Compras;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'empleado';

    public function compra(){
        return $this->hasMany(Compras::class);
    }

    public function nacionalidads()
    {
        return $this->belongsToMany(Nacionalidad::class, 'empleado_nacionalidad');
    }

    public function sexos()
    {
        return $this->belongsToMany(Sexo::class, 'empleado_sexo');
    }
}
