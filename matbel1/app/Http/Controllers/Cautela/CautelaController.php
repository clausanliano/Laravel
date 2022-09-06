<?php

namespace App\Http\Controllers\Cautela;

use App\Http\Controllers\CrudController;
use Illuminate\Http\Request;

use App\Models\Cautela\Cautela;

class CautelaController extends CrudController
{
    
    public function __construct(){
        $this->permissao('cautela');  //chama funcao Premissao de CrudController para carregar todos middlewares
        $this->classe = new Cautela();
        $this->caminho = 'cautela.cautela';
        $this->rota = 'cautela';
        $this->cabecalho = 'Cautelas';
        $this->validacoes_incluir = [
            'opm_id' => 'required',            
            'policial_id' => 'required',
            'arma_id' => 'required',
        ];
        $this->validacoes_editar = [
            'opm_id' => 'required',            
            'policial_id' => 'required',
            'arma_id' => 'required',
           ];

    }
}