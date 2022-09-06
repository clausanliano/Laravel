<?php

namespace App\Http\Controllers\Arma;

use App\Http\Controllers\CrudController;
use Illuminate\Http\Request;

use App\Models\Arma\TipoArma;

class TipoArmaController extends CrudController
{    
    public function __construct(){
        $this->permissao('tipo_arma');  //chama funcao Premissao de CrudController para carregar todos middlewares
        $this->classe = new TipoArma();
        $this->caminho = 'arma.tipo_arma';
        $this->rota = 'tipo_arma';
        $this->cabecalho = 'Tipo Arma';
        $this->validacoes_incluir = [
            'nome' => 'required|min:3|unique:tipos_arma',
        ];
        $this->validacoes_editar = [
            'nome' => 'required|min:3',
           ];
    }
    
}
