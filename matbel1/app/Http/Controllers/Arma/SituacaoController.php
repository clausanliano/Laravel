<?php

namespace App\Http\Controllers\Arma;

use App\Http\Controllers\CrudController;
use Illuminate\Http\Request;

use App\Models\Arma\Situacao;

class SituacaoController extends CrudController
{
    
    public function __construct(){
        $this->permissao('situacao');  //chama funcao Premissao de CrudController para carregar todos middlewares
        $this->classe = new Situacao();
        $this->caminho = 'arma.situacao';
        $this->rota = 'situacao';
        $this->cabecalho = 'Situacao';
        $this->validacoes_incluir = [
            'nome' => 'required|min:3|unique:situacoes',
        ];
        $this->validacoes_editar = [
            'nome' => 'required|min:3',
           ];

    }
}
