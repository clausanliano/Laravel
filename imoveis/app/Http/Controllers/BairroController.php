<?php

namespace App\Http\Controllers;

use App\Models\Bairro;
use App\Http\Requests\StoreBairroRequest;
use App\Http\Requests\UpdateBairroRequest;
use App\Models\Cidade;

class BairroController extends Controller
{
    public function index()
    {
        $collection = Bairro::all();
        return view('bairro.index')->with(compact('collection'));
    }

    public function create()
    {
        $objeto = new Bairro();
        $cidades = Cidade::all();
        return view('bairro.edit')->with(compact('objeto', 'cidades'));
    }

    public function store(StoreBairroRequest $request)
    {
        Bairro::create($request->validated());
        return redirect(route('bairro.index'))->with(['mensagem' => 'Registro CRIADO com sucesso']);
    }

    public function show(Bairro $bairro)
    {
        $objeto = $bairro;
        return view('bairro.show')->with(compact('objeto'));
    }


    public function edit(Bairro $bairro)
    {
        $objeto = $bairro;
        $cidades = Cidade::all();
        return view('bairro.edit')->with(compact('objeto', 'cidades'));
    }

    public function update(UpdateBairroRequest $request, Bairro $bairro)
    {
        $bairro->uPdate($request->validated());
        return redirect(route('bairro.index'))->with(['mensagem' => 'Registro ALTERADO com sucesso']);
    }

    public function destroy(Bairro $bairro)
    {
        $bairro->delete();
        return redirect(route('bairro.index'))->with(['mensagem' => 'Registro EXCLUÍDO com sucesso']);
    }

}
