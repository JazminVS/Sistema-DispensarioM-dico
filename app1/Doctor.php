<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = [
        'name', 'email', 'password','nombres','apellidos','CI','lugar_nacimiento','domicilio'
    ];


    protected $hidden = [
        'password', 'remember_token',
    ];

}
