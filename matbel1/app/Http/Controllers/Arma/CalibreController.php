<?php

namespace App\Http\Controllers\Arma;

use App\Http\Controllers\CrudController;
use Illuminate\Http\Request;

use App\Models\Arma\Calibre;


class CalibreController extends CrudController
{

    public function __construct(){
        $this->permissao('calibre');  //chama funcao Premissao de CrudController para carregar todos middlewares
        $this->classe = new Calibre();
        $this->caminho = 'arma.calibre';
        $this->rota = 'calibre';
        $this->cabecalho = 'Calibre';
        $this->validacoes_incluir = [
            'nome' => 'required|min:2|unique:calibres',
        ];
        $this->validacoes_editar = [
            'nome' => 'required|min:2',
           ];
    }

}
