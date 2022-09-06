<?php

namespace App\Http\Controllers;

use App\Models\Imovel;
use App\Http\Requests\StoreImovelRequest;
use App\Http\Requests\UpdateImovelRequest;
use App\Models\Bairro;

class ImovelController extends Controller
{
    public function index()
    {
        $collection = Imovel::all();
        return view('imovel.index')->with(compact('collection'));
    }

    public function create()
    {
        $objeto = new Imovel();
        $bairros = Bairro::all();
        return view('imovel.edit')->with(compact('objeto', 'bairros'));
    }

    public function store(StoreImovelRequest $request)
    {
        Imovel::create($request->validated());
        return redirect(route('imovel.index'))->with(['mensagem' => 'Registro CRIADO com sucesso']);
    }

    public function show(Imovel $imovel)
    {
        $objeto = $imovel;
        $bairros = Bairro::all();
        return view('imovel.show')->with(compact('objeto', 'bairros'));
    }

    public function edit(Imovel $imovel)
    {
        $objeto = $imovel;
        $bairros = Bairro::all();
        return view('imovel.edit')->with(compact('objeto', 'bairros'));
    }

    public function update(UpdateImovelRequest $request, Imovel $imovel)
    {
        $imovel->update($request->validated());
        return redirect(route('imovel.index'))->with(['mensagem' => 'Registro ALTERADO com sucesso']);
    }

    public function destroy(Imovel $imovel)
    {
        $imovel->delete();
        return redirect(route('imovel.index'))->with(['mensagem' => 'Registro EXCLUÍDO com sucesso']);
    }
}
