<?php

namespace App\Http\Controllers;

use App\Models\Cidade;
use App\Http\Requests\StoreCidadeRequest;
use App\Http\Requests\UpdateCidadeRequest;
use App\Models\Uf;

class CidadeController extends Controller
{
    public function index()
    {
        $collection = Cidade::all();
        return view('cidade.index')->with(compact('collection'));
    }

    public function create()
    {
        $objeto = new Cidade();
        $ufs = Uf::all();
        return view('cidade.edit')->with(compact('objeto', 'ufs'));
    }

    public function store(StoreCidadeRequest $request)
    {
        Cidade::create($request->validated());
        return redirect(route('cidade.index'))->with(['mensagem' => 'Registro criado com sucesso']);
    }

    public function show(Cidade $cidade)
    {
        $objeto = $cidade;
        return view('cidade.show')->with(compact('objeto'));
    }

    public function edit(Cidade $cidade)
    {
        $objeto = $cidade;
        $ufs = Uf::all();
        return view('cidade.edit')->with(compact('objeto', 'ufs'));
    }

    public function update(UpdateCidadeRequest $request, Cidade $cidade)
    {
        $cidade->update($request->validated());
        return redirect(route('cidade.index'))->with(['mensagem' => 'Registro criado com sucesso']);
    }

    public function destroy(Cidade $cidade)
    {
        $cidade->delete();
        return redirect(route('cidade.index'))->with(['mensagem' => 'Registro criado com sucesso']);
    }
}
