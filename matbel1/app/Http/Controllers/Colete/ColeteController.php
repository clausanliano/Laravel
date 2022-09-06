<?php

namespace App\Http\Controllers\Colete;

use App\Http\Controllers\GCrudController;
use Illuminate\Http\Request;

use App\Models\Colete\Colete;

class ColeteController extends GCrudController
{
    
    public function __construct(){
        
        $this->permissao('colete');  //chama funcao Premissao de CrudController para carregar todos middlewares

        $this->classe = new Colete();
        $this->caminho = 'colete.colete';
        $this->rota = 'colete';
        $this->cabecalho = 'Colete';

        $this->validacoes_incluir = [
            'numero_serie' => 'required|unique:coletes', 
            'opm_id' => 'required',            
        ];
        $this->validacoes_editar = [
            'numero_serie' => 'required', 
            'opm_id' => 'required',            
           ];

    }

}