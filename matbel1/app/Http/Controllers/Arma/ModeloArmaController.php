<?php

namespace App\Http\Controllers\Arma;

use App\Http\Controllers\CrudController;
use Illuminate\Http\Request;

use App\Models\Arma\ModeloArma;

class ModeloArmaController extends CrudController
{
    
    public function __construct(){
        $this->permissao('modelo_arma');  //chama funcao Premissao de CrudController para carregar todos middlewares
        $this->classe = new ModeloArma();
        $this->caminho = 'arma.modelo_arma';
        $this->rota = 'modelo_arma';
        $this->cabecalho = 'Modelos de Arma';
        $this->validacoes_incluir = [
            'nome' => 'required|min:3|unique:modelos_arma',         
            'comprimento_cano' => 'required',
            'calibre_id' => 'required',
            'tipo_arma_id' => 'required',
            'fabricante_id' => 'required'       ];
        
            $this->validacoes_editar = [
            'nome' => 'required|min:3',         
            'comprimento_cano' => 'required',
            'calibre_id' => 'required',
            'tipo_arma_id' => 'required',
            'fabricante_id' => 'required'
           ];
    }

   
    public function ajax(Request $request){
        $data = ModeloArma::select("id","nome")->get();

        if($request->has('q')){
            $search = $request->q;
            $data = ModeloArma::select("id","nome")
                    ->where('nome','LIKE',"%$search%")
            		->get();
        }

        return response()->json($data);
    }
}