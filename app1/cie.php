<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cie extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = ['codigo','descripcion','campo'];
    protected $table = 'cie';
}
