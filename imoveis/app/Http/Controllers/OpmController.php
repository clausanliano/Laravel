<?php

namespace App\Http\Controllers;

use App\Models\Opm;
use App\Http\Requests\StoreOpmRequest;
use App\Http\Requests\UpdateOpmRequest;
use App\Models\Imovel;

class OpmController extends Controller
{
    public function index()
    {
        $collection = Opm::all();
        return view('opm.index')->with(compact('collection'));
    }


    public function create()
    {
        $objeto = new Opm();
        $opms = Opm::all();
        $imoveis = Imovel::all();
        return view('opm.edit')->with(compact('objeto', 'opms', 'imoveis'));
    }

    public function store(StoreOpmRequest $request)
    {
        Opm::create($request->validated());
        return redirect(route('opm.index'))->with(['mensagem' => 'Registro CRIADO com sucesso']);
    }

    public function show(Opm $opm)
    {
        $objeto = $opm;
        return view('opm.show')->with(compact('objeto'));
    }

    public function edit(Opm $opm)
    {
        $objeto = $opm;
        $opms = Opm::all();
        $imoveis = Imovel::all();
        return view('opm.edit')->with(compact('objeto', 'opms', 'imoveis'));
    }

    public function update(UpdateOpmRequest $request, Opm $opm)
    {
        $opm->update($request->validated());
        return redirect(route('opm.index'))->with(['mensagem' => 'Registro CRIADO com sucesso']);
    }

    public function destroy(Opm $opm)
    {
        $opm->delete();
        return redirect(route('opm.index'))->with(['mensagem' => 'Registro CRIADO com sucesso']);
    }
}
