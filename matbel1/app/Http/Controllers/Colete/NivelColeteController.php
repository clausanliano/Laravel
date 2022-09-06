<?php

namespace App\Http\Controllers\Colete;

use App\Http\Controllers\CrudController;
use Illuminate\Http\Request;

use App\Models\Colete\NivelColete;

class NivelColeteController extends CrudController
{
    
    public function __construct(){
        $this->permissao('nivel_colete');  //chama funcao Premissao de CrudController para carregar todos middlewares
        $this->classe = new NivelColete();
        $this->caminho = 'colete.nivel_colete';
        $this->rota = 'nivel_colete';
        $this->cabecalho = 'Tamanho Colete';
        $this->validacoes_incluir = [
            'nome' => 'required|min:2|max:5|unique:niveis_colete',
        ];
        $this->validacoes_editar = [
            'nome' => 'required|min:2|max:5',
        ];

    }
}
