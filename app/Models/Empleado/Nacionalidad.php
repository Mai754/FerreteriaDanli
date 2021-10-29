<?php

namespace App\Models\Empleado;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nacionalidad extends Model
{
    use HasFactory;
    protected $fillable = [
        'Nacionalidad'
    ];
    protected $guarded = ['id'];
    protected $table = 'nacionalidad';
}
