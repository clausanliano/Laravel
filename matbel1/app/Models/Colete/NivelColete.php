<?php

namespace App\Models\Colete;

use Illuminate\Database\Eloquent\Model;

class NivelColete extends Model
{
    protected $table = 'niveis_colete';
    
    protected $fillable = ['nome'];
}
