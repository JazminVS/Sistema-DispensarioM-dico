<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Citas extends Model
{
    //
    protected $fillable = ['horacita','diacita','asuntocita','estado'];

    protected $table = 'cita_medica';
}
