<?php

namespace App\Http\Controllers\Arma;

use App\Http\Controllers\CrudController;
use Illuminate\Http\Request;

use App\Models\Arma\Arma;



class ArmaController extends CrudController
{
    
    public function __construct(){
        
        $this->permissao('arma');  //chama funcao Premissao de CrudController para carregar todos middlewares

        $this->classe = new Arma();
        $this->caminho = 'arma.arma';
        $this->rota = 'arma';
        $this->cabecalho = 'Arma';
        $this->validacoes_incluir = [
            'numero_serie' => 'required|unique:armas',
            'modelo_arma_id' => 'required',
            'opm_id' => 'required',
        ];
        $this->validacoes_editar = [
            'numero_serie' => 'required',
            'modelo_arma_id' => 'required',
            'opm_id' => 'required',
        ];
    }

       
    public function ajax(Request $request){
        $data = Arma::select("id","numero_serie")->get();

        if($request->has('q')){
            $search = $request->q;
            $data = Arma::select("id","numero_serie")
                    ->where('numero_serie','LIKE',"%$search%")
            		->get();
        }

        return response()->json($data);
    }

}