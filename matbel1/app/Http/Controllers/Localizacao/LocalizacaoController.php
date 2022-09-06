<?php

namespace App\Http\Controllers\Localizacao;

use App\Http\Controllers\CrudController;
use Illuminate\Http\Request;

use App\Models\Localizacao\Localizacao;


class LocalizacaoController extends CrudController
{
    
    public function __construct(){
        $this->permissao('localizacao');  //chama funcao Premissao de CrudController para carregar todos middlewares
        $this->classe = new Localizacao();
        $this->caminho = 'localizacao.localizacao';
        $this->rota = 'localizacao';
        $this->cabecalho = 'Localizacao';
        $this->validacoes_incluir = [
            'nome' => 'required|min:3|unique:localizacoes',
        ];
        $this->validacoes_editar = [
            'nome' => 'required|min:3',
        ];

    }
}
