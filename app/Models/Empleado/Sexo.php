<?php

namespace App\Models\Empleado;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sexo extends Model
{
    use HasFactory;
    protected $fillable = [
        'Sexo'
    ];
    protected $guarded = ['id'];
    protected $table = 'sexo';
}
