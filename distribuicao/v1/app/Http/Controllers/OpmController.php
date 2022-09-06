<?php

namespace App\Http\Controllers;

use App\Models\Opm;
use App\Http\Requests\StoreOpmRequest;
use App\Http\Requests\UpdateOpmRequest;

class OpmController extends Controller
{
    public function index()
    {
        $collection = Opm::all();
        return view('opms.index')->with(compact('collection'));
    }

    public function create()
    {
        $objeto = new Opm();
        return view('opms.editar')->with(compact('objeto'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreOpmRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOpmRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Opm  $opm
     * @return \Illuminate\Http\Response
     */
    public function show(Opm $opm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Opm  $opm
     * @return \Illuminate\Http\Response
     */
    public function edit(Opm $opm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOpmRequest  $request
     * @param  \App\Models\Opm  $opm
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOpmRequest $request, Opm $opm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Opm  $opm
     * @return \Illuminate\Http\Response
     */
    public function destroy(Opm $opm)
    {
        //
    }
}
