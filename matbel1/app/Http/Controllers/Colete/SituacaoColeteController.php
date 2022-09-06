<?php

namespace App\Http\Controllers\Colete;

use App\Http\Controllers\CrudController;
use Illuminate\Http\Request;

use App\Models\Colete\SituacaoColete;

class SituacaoColeteController extends CrudController
{
    
    public function __construct(){
        $this->permissao('situacao_colete');  //chama funcao Premissao de CrudController para carregar todos middlewares
        $this->classe = new SituacaoColete();
        $this->caminho = 'colete.situacao_colete';
        $this->rota = 'situacao_colete';
        $this->cabecalho = 'Situação do Colete';
        $this->validacoes_incluir = [
            'nome' => 'required|unique:situacoes_colete',
        ];
        $this->validacoes_editar = [
            'nome' => 'required',
        ];

    }
}
