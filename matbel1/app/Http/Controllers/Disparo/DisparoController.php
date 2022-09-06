<?php

namespace App\Http\Controllers\Disparo;

use App\Http\Controllers\CrudController;
use Illuminate\Http\Request;

use App\Models\Disparo\Disparo;

class DisparoController extends CrudController
{
    
    public function __construct(){
        $this->permissao('disparo');  //chama funcao Premissao de CrudController para carregar todos middlewares
        $this->classe = new Disparo();
        $this->caminho = 'disparo.disparo';
        $this->rota = 'disparo';
        $this->cabecalho = 'Disparos';
        $this->validacoes_incluir = [
            'opm_id' => 'required',            
            'policial_id' => 'required',
            'arma_id' => 'required',
            'tipo_municao_id' => 'required',
            'tipo_disparo_id' => 'required',
        ];
        $this->validacoes_editar = [
            'opm_id' => 'required',            
            'policial_id' => 'required',
            'arma_id' => 'required',
            'tipo_municao_id' => 'required',
            'tipo_disparo_id' => 'required',
        ];

    }
}