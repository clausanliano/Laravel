<?php

namespace App\Models\Disparo;

use Illuminate\Database\Eloquent\Model;

class Disparo extends Model
{
    protected $table = 'disparos';

    protected $fillable = ['data_hora', 'quantidade', 'observacao', 'opm_id', 'policial_id', 'arma_id', 'tipo_municao_id', 'tipo_disparo_id', 'localizacao_id'];

    public function opm()
    {
        return $this->belongsTo('App\Models\Opm\Opm', 'opm_id', 'id');
    }

    public function policial()
    {
        return $this->belongsTo('App\Models\Policial\Policial', 'policial_id', 'id');
    }
 
    public function arma()
    {
        return $this->belongsTo('App\Models\Arma\Arma', 'arma_id', 'id');
    }

    public function tipo_municao()
    {
        return $this->belongsTo('App\Models\Disparo\TipoMunicao', 'tipo_municao_id', 'id');
    }

    public function tipo_disparo()
    {
        return $this->belongsTo('App\Models\Disparo\TipoDisparo', 'tipo_disparo_id', 'id');
    }

}
