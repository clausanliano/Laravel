<?php

namespace App\Http\Controllers\ModelHasRoles;

use App\Http\Controllers\CrudController; 
use Illuminate\Http\Request;

use App\Models\ModelHasRoles\ModelHasRoles;


class ModelHasRolesController extends CrudController
{
    
    public function __construct(){
        $this->permissao('model_has_roles');  //chama funcao Premissao de CrudController para carregar todos middlewares
        $this->classe = new ModelHasRoles();
        $this->caminho = 'model_has_roles.model_has_roles';
        $this->rota = 'model_has_roles';
        $this->cabecalho = 'Administrador de Regras por Usuario';
        $this->validacoes = [
         ];
    }

}
