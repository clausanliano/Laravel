<?php

namespace App\Http\Controllers\Arma;

use App\Http\Controllers\CrudController;
use Illuminate\Http\Request;

use App\Models\Arma\Fabricante;

class FabricanteController extends CrudController
{
    
    public function __construct(){
        $this->permissao('fabricante');  //chama funcao Premissao de CrudController para carregar todos middlewares
        $this->classe = new Fabricante();
        $this->caminho = 'arma.fabricante';
        $this->rota = 'fabricante';
        $this->cabecalho = 'Fabricante';
        $this->validacoes_incluir = [
            'nome' => 'required|min:3|unique:fabricantes',
        ];
        $this->validacoes_editar = [
            'nome' => 'required|min:3',
           ];
    }
}
