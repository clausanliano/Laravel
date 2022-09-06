<?php

namespace App\Models\Arma;

use Illuminate\Database\Eloquent\Model;

class Arma extends Model
{
    protected $table = 'armas';

    protected $fillable = ['numero_serie', 'modelo_arma_id', 'opm_id', 'situacao_id', 'numero_tombo', 'carregador', 'subunidade', 'observacao'];
    
    public function modelo_arma()
    {
        return $this->belongsTo('App\Models\Arma\ModeloArma', 'modelo_arma_id', 'id');
    }
    public function opm()
    {
        return $this->belongsTo('App\Models\Opm\Opm', 'opm_id', 'id');
    }
    public function situacao()
    {
        return $this->belongsTo('App\Models\Arma\Situacao', 'situacao_id', 'id');
    }
 
}