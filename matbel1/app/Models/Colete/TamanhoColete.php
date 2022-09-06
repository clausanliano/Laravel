<?php

namespace App\Models\Colete;

use Illuminate\Database\Eloquent\Model;

class TamanhoColete extends Model
{
    protected $table = 'tamanhos_colete';
    
    protected $fillable = ['nome'];
}
