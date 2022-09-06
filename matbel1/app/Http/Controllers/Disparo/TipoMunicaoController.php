<?php

namespace App\Http\Controllers\Disparo;

use App\Http\Controllers\CrudController;
use Illuminate\Http\Request;

use App\Models\Disparo\TipoMunicao;

class TipoMunicaoController extends CrudController
{    
    public function __construct(){
        $this->permissao('tipo_municao');  //chama funcao Premissao de CrudController para carregar todos middlewares
        $this->classe = new TipoMunicao();
        $this->caminho = 'disparo.tipo_municao';
        $this->rota = 'tipo_municao';
        $this->cabecalho = 'Tipo Munição';
        $this->validacoes_incluir = [
            'nome' => 'required|min:3|unique:tipos_municao',
        ];
        $this->validacoes_editar = [
            'nome' => 'required|min:3',
        ];

    }
    
}
