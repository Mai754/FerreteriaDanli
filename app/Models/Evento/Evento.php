<?php

namespace App\Models\Evento;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;
    protected $fillable=[
        'title', 
        'descripcion', 
        'start', 
        'end'
    ];
    protected $guarded = ['id'];
    protected $table = 'evento';

    static $rules = [
        'title'=>'required',
        'descripcion'=>'required',
        'start'=>'required',
        'end'=>'required'
    ];
}
