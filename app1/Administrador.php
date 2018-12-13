<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Administrador extends Model
{
    protected $fillable = [
        'name', 'email', 'password','nombres','apellidos','CI',
    ];


    protected $hidden = [
        'password', 'remember_token',
    ];
}
