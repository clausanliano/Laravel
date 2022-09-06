<?php

namespace App\Http\Controllers\Unidade;

use App\Http\Controllers\CrudController;
use Illuminate\Http\Request;

use App\Models\Unidade\Unidade;


class UnidadeController extends CrudController
{
    
    public function __construct(){
        $this->permissao('unidade');  //chama funcao Premissao de CrudController para carregar todos middlewares
        $this->classe = new Unidade();
        $this->caminho = 'unidade.unidade';
        $this->rota = 'unidade';
        $this->cabecalho = 'Unidade';
        $this->validacoes_incluir = [
            'nome' => 'required|min:2|unique:unidades',        ];
        $this->validacoes_editar = [
            'nome' => 'required|min:2',        ];

    }

    public function ajax(Request $request){
        $data = Unidade::select("id","nome_pais")->get();

        if($request->has('q')){
            $search = $request->q;
            $data = Unidade::select("id","nome_pais")
                    ->where('nome_pais','LIKE',"%$search%")
            		->get();
        }

        return response()->json($data);
    }

}
