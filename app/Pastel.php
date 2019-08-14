<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pastel extends Model
{
    protected $fillable = ['nombre','sabor','descripcion','image','id_receta'];
}
