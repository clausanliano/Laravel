<?php

namespace App\Http\Controllers\Policial;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\Policial\PolicialSisautarm;

class PolicialSisautarmController extends Controller
{
    protected $classe, $caminho, $rota, $cabecalho, $validacoes, $permissao;
    
    protected function permissao($nome){
        $this->middleware('permission:'.$nome.'-list');
        $this->middleware('permission:'.$nome.'-create', ['only' => ['create','store']]);
        $this->middleware('permission:'.$nome.'-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:'.$nome.'-delete', ['only' => ['destroy']]);
    }
    
    public function __construct(){
        $this->permissao('policial_sisautarm');  //chama funcao Premissao de CrudSisautarmController para carregar todos middlewares
        $this->classe = new PolicialSisautarm();
        $this->caminho = 'policial.policial_sisautarm';
        $this->rota = 'policial_sisautarm';
        $this->cabecalho = 'Policial Sisaurm';
        $this->validacoes_incluir = [
            'nome' => 'required',
        ];
        $this->validacoes_editar = [
            'nome' => 'required',
        ];
    }

}