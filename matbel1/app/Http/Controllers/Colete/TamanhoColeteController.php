<?php

namespace App\Http\Controllers\Colete;

use App\Http\Controllers\CrudController;
use Illuminate\Http\Request;

use App\Models\Colete\TamanhoColete;

class TamanhoColeteController extends CrudController
{
    
    public function __construct(){
        $this->permissao('tamanho_colete');  //chama funcao Premissao de CrudController para carregar todos middlewares
        $this->classe = new TamanhoColete();
        $this->caminho = 'colete.tamanho_colete';
        $this->rota = 'tamanho_colete';
        $this->cabecalho = 'Tamanho Colete';
        $this->validacoes_incluir = [
            'nome' => 'required|min:2|max:5|unique:tamanhos_colete',
        ];
        $this->validacoes_editar = [
            'nome' => 'required|min:2|max:5',
        ];

    }
}
