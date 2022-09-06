<?php

namespace App\Http\Controllers\Permission;

use App\Http\Controllers\CrudController; 
use Illuminate\Http\Request;

use App\Models\Permission\Permission;


class PermissionController extends CrudController
{
    
    public function __construct(){
        $this->permissao('permission');  //chama funcao Premissao de CrudController para carregar todos middlewares
        $this->classe = new Permission();
        $this->caminho = 'permission.permission';
        $this->rota = 'permission';
        $this->cabecalho = 'Permissão';
        $this->validacoes_incluir = [
            'name' => 'required|min:3|unique:permissions',
        ];
        $this->validacoes_editar = [
            'name' => 'required|min:3',
        ];
    }

    public function ajax(Request $request){
        $data = Permission::select("id","name")->get();


        if($request->has('q')){
            $search = $request->q;
            $data = Permission::select("id","name")
                    ->where('name','LIKE',"%$search%")
            		->get();
        }

        return response()->json($data);
    }

}
