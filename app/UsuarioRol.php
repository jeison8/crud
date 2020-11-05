<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsuarioRol extends Model
{
    protected $table = 'usuario_rol';

    protected $fillable = [
        'usu_id','rol_id'
    ];

    public $timestamps = false;

}
