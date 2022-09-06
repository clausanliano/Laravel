<?php

namespace App\Models\Localizacao;

use Illuminate\Database\Eloquent\Model;

class Localizacao extends Model
{
    protected $table = 'localizacoes';

    protected $fillable = ['nome', 'observacao', 'posicao', 'localizacao_id'];

    public function localizacao(){
        
        return $this->belongsTo('App\Models\Localizacao\Localizacao', 'localizacao_id', 'id');

    }
}
