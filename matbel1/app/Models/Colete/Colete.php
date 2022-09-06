<?php

namespace App\Models\Colete;

use Illuminate\Database\Eloquent\Model;

class Colete extends Model
{
    protected $table = 'coletes';

    protected $fillable = [ 'numero_serie', 
                            'tombo', 
                            'validade',
                            'observacao', 
                            'fabricante_id', 
                            'opm_id', 
                            'subunidade', 
                            'tamanho_colete_id', 
                            'nivel_colete_id', 
                            'situacao_colete_id', 
                            'genero_colete_id'];

    public function opm()
    {
        return $this->belongsTo('App\Models\Opm\Opm', 'opm_id', 'id');
    }

    public function fabricante()
    {
        return $this->belongsTo('App\Models\Arma\Fabricante', 'fabricante_id', 'id');
    }
    
    public function situacao_colete()
    {
        return $this->belongsTo('App\Models\Colete\SituacaoColete', 'situacao_colete_id', 'id');
    }
    
    public function tamanho_colete()
    {
        return $this->belongsTo('App\Models\Colete\TamanhoColete', 'tamanho_colete_id', 'id');
    }
    
    public function nivel_colete()
    {
        return $this->belongsTo('App\Models\Colete\NivelColete', 'nivel_colete_id', 'id');
    }
    
    public function genero_colete()
    {
        return $this->belongsTo('App\Models\Colete\GeneroColete', 'genero_colete_id', 'id');
    }

}