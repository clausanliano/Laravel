<?php

namespace App\Models\Colete;

use Illuminate\Database\Eloquent\Model;

class SituacaoColete extends Model
{
    protected $table = 'situacoes_colete';
    
    protected $fillable = ['nome'];
}
