<?php

namespace App\Models\Colete;

use Illuminate\Database\Eloquent\Model;

class GeneroColete extends Model
{
    protected $table = 'generos_colete';
    
    protected $fillable = ['nome'];
}
