<?php

namespace App\Models\Arma;

use Illuminate\Database\Eloquent\Model;

class ModeloArma extends Model
{
    protected $table = 'modelos_arma';

    protected $fillable = ['nome', 'comprimento_cano', 'observacao', 'calibre_id', 'tipo_arma_id', 'fabricante_id'];

    public function tipo_arma(){
        return $this->belongsTo('App\Models\Arma\TipoArma', 'tipo_arma_id', 'id');
    }

    public function fabricante(){
        return $this->belongsTo('App\Models\Arma\Fabricante', 'fabricante_id', 'id');
    }

    public function calibre(){
        return $this->belongsTo('App\Models\Arma\Calibre', 'calibre_id', 'id');
    }

}
