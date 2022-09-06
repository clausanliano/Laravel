<?php

namespace App\Models\Unidade;

use Illuminate\Database\Eloquent\Model;

class Unidade extends Model
{
    protected $table = 'unidades';
    
    protected $fillable = [ 'nome', 
                            'codigo', 
                            'tipo', 
                            'unidade_id', 
                            'pais', 
                            'cod_temp', 
                            'cod_sub_temp', 
                            'nome_pais'];
 
    public function unidade()

    {
        return $this->belongsTo('App\Models\Unidade\Unidade', 'unidade_id', 'id');
    }

}
