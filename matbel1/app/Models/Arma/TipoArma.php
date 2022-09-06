<?php

namespace App\Models\Arma;

use Illuminate\Database\Eloquent\Model;

class TipoArma extends Model
{
    protected $table = 'tipos_arma';

    protected $fillable = ['nome'];

}
