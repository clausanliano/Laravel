<?php

namespace App\Http\Controllers\Opm;

use App\Http\Controllers\CrudController;
use Illuminate\Http\Request;

use App\Models\Opm\Opm;


class OpmController extends CrudController
{
    
    public function __construct(){
        $this->permissao('opm');  //chama funcao Premissao de CrudController para carregar todos middlewares
        $this->classe = new Opm();
        $this->caminho = 'opm.opm';
        $this->rota = 'opm';
        $this->cabecalho = 'Opm';
        $this->validacoes_incluir = [
            'nome' => 'required|min:3|unique:opms',
        ];
        $this->validacoes_editar = [
            'nome' => 'required|min:3',
        ];

    }

    public function ajax(Request $request){
        $data = Opm::select("id","nome", "nome_pais")->get();

        if($request->has('q')){
            $search = $request->q;
            $data = Opm::select("id","nome", "nome_pais")
                    ->where('nome','LIKE',"%$search%")
            		->get();
        }

        return response()->json($data);
    }
}
