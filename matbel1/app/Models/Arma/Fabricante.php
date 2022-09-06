<?php

namespace App\Models\Arma;

use Illuminate\Database\Eloquent\Model;

class Fabricante extends Model
{
    protected $table = 'fabricantes';
    
    protected $fillable = ['nome'];
}
