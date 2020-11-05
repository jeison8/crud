<?php

namespace App;

use App\Notifications\ResetPasswordNotification;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{

    protected $table = 'usuarios';

    protected $fillable = [
         'nombre','email','sexo','area_id','boletin','descripcion'
    ];

    public $timestamps = true;

    public function area()
    {
        return $this->belongsTo('App\Area');
    }

}
