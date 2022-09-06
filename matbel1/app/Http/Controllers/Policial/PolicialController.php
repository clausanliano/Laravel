<?php

namespace App\Http\Controllers\Policial;

use App\Http\Controllers\CrudController;

use Illuminate\Http\Request;

use App\Models\Policial\Policial;

class PolicialController extends CrudController
{
    protected $classe, $caminho, $rota, $cabecalho, $validacoes, $permissao;
    
    protected function permissao($nome){
        $this->middleware('permission:'.$nome.'-list');
        $this->middleware('permission:'.$nome.'-create', ['only' => ['create','store']]);
        $this->middleware('permission:'.$nome.'-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:'.$nome.'-delete', ['only' => ['destroy']]);
    }

    public function __construct(){
        $this->permissao('policial');  //chama funcao Premissao de CrudController para carregar todos middlewares
        $this->classe = new Policial();
        $this->caminho = 'policial.policial';
        $this->rota = 'policial';
        $this->cabecalho = 'Policial';
        $this->validacoes_incluir = [
            'nome' => 'required',
            'nome_guerra' => 'required',
            'cpf' => 'required|min:11|max:11|unique:policiais',
            'matricula' => 'required|min:7|max:8|unique:policiais',
            'opm_id' => 'required',
            'posto_graduacao_id' => 'required',
        ];
        $this->validacoes_editar = [
            'nome' => 'required',
            'nome_guerra' => 'required',
            'cpf' => 'required|min:11|max:11',
            'matricula' => 'required|min:7|max:8',
            'opm_id' => 'required',
            'posto_graduacao_id' => 'required',
        ];
    }

    public function ajax(Request $request){
        $data = Policial::select("id", "matricula", "cpf", "nome")->get();

        if($request->has('q')){
            $search = $request->q;
            $data = Policial::select("id","matricula", "cpf", "nome")
                    ->where('matricula','LIKE',"%$search%")
                    ->orwhere('cpf','LIKE',"%$search%")
                    ->orwhere('nome','LIKE',"%$search%")
            		->get();
        }

        return response()->json($data);
    }

}