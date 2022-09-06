<?php

namespace App\Http\Controllers\Colete;

use App\Http\Controllers\CrudController;
use Illuminate\Http\Request;

use App\Models\Colete\GeneroColete;

class GeneroColeteController extends CrudController
{
    
    public function __construct(){
        $this->permissao('genero_colete');  //chama funcao Premissao de CrudController para carregar todos middlewares
        $this->classe = new GeneroColete();
        $this->caminho = 'colete.genero_colete';
        $this->rota = 'genero_colete';
        $this->cabecalho = 'Gênero do Colete';
        $this->validacoes_incluir = [
            'nome' => 'required|unique:generos_colete',
        ];
        $this->validacoes_editar = [
            'nome' => 'required',
        ];
    }
}
