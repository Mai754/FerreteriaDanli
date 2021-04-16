<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permiso extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'slug'];
    protected $guarded = ['id'];
    protected $table = "permiso";

    public function roles(){
        return $this->belongsToMany(Rol::class, 'permiso_rol');
    }
}
