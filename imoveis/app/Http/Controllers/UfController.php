<?php

namespace App\Http\Controllers;

use App\Models\Uf;
use App\Http\Requests\StoreUfRequest;
use App\Http\Requests\UpdateUfRequest;

class UfController extends Controller
{
    public function index()
    {
        $collection = Uf::all();
        return view('uf.index')->with(compact('collection'));
    }

    public function ajax()
    {
        $collection = Uf::all();
        // return view('uf.index')->with(compact('collection'));
        return response()->json($collection);
    }

    public function create()
    {
        $objeto = new Uf();
        return view('uf.edit')->with(compact('objeto'));
    }

    public function store(StoreUfRequest $request)
    {
        Uf::create($request->validated());
        return redirect(route('uf.index'))->with(['mensagem' => 'Registro criado com sucesso']);
    }

    public function show(Uf $uf)
    {
        $objeto = $uf;
        return view('uf.show')->with(compact('objeto'));
    }

    public function edit(Uf $uf)
    {
        $objeto = $uf;
        return view('uf.edit')->with(compact('objeto'));
    }

    public function update(UpdateUfRequest $request, Uf $uf)
    {
        $uf->update($request->validated());
        return redirect(route('uf.index'))->with(['mensagem' => 'Registro criado com sucesso']);
    }

    public function destroy(Uf $uf)
    {
        $uf->delete();
        return redirect(route('uf.index'))->with(['mensagem' => 'Registro criado com sucesso']);
    }
}
