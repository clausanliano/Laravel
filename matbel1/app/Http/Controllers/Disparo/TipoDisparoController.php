<?php

namespace App\Http\Controllers\Disparo;

use App\Http\Controllers\CrudController;
use Illuminate\Http\Request;

use App\Models\Disparo\TipoDisparo;

class TipoDisparoController extends CrudController
{    
    public function __construct(){
        $this->permissao('tipo_disparo');  //chama funcao Premissao de CrudController para carregar todos middlewares
        $this->classe = new TipoDisparo();
        $this->caminho = 'disparo.tipo_disparo';
        $this->rota = 'tipo_disparo';
        $this->cabecalho = 'Tipo Disparo';
        $this->validacoes_incluir = [
            'nome' => 'required|min:3|unique:tipos_disparo',
        ];
        $this->validacoes_editar = [
            'nome' => 'required|min:3',
        ];
    }
    
}
