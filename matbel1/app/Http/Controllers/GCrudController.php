<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Gate;

class GCrudController extends Controller
{
    protected $classe, $caminho, $rota, $cabecalho, $validacoes, $permissao, $validacoes_incluir, $validacoes_editar;
  
    protected function permissao($nome){
        $this->middleware('permission:'.$nome.'-list');
    	$this->middleware('permission:'.$nome.'-create', ['only' => ['create','store']]);
    	$this->middleware('permission:'.$nome.'-edit', ['only' => ['edit','update']]);
    	$this->middleware('permission:'.$nome.'-delete', ['only' => ['destroy']]);
    }
    
    private $totalPage = 1000;

    public function index()
    {       

        $lista = $this->classe::paginate($this->totalPage);
        $rota = $this->rota;
        $cabecalho = $this->cabecalho;
        return view($this->caminho.'.lista', compact('lista','rota', 'cabecalho'));
    }
    
    public function create()
    {

        $objeto = $this->classe;
        $rota = $this->rota;
        $cabecalho = $this->cabecalho;
        return view($this->caminho.'.editar', compact('objeto','rota', 'cabecalho'));
    }
    
    public function store(Request $request)
    {       

        $request->validate($this->validacoes_incluir);

        $this->classe::create($request->all());
        return redirect()->route($this->rota.'.index')->with('message', 'Cadastrado realizado com sucesso!');
    }
      
    public function edit($id)
    {

        $objeto = $this->classe::findOrFail($id);        
        $rota = $this->rota;
        $cabecalho = $this->cabecalho;
        return view($this->caminho.'.editar', compact('objeto','rota', 'cabecalho'));
    }
    
    public function update(Request $request, $id)
    {       

        $request->validate($this->validacoes_editar);

        $this->classe::findOrFail($id)->update($request->all());
        return redirect()->route($this->rota.'.index')->with('message', 'Edição realizada com sucesso!');
    }
    
    public function destroy($id)
    {

        $this->classe::findOrFail($id)->delete();
        return redirect()->route($this->rota.'.index')->with('message', 'Exclusão realizada com sucesso!');
    }

}
