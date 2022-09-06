<?php

namespace App\Http\Controllers;

use App\Models\Policial;
use App\Http\Requests\StorePolicialRequest;
use App\Http\Requests\UpdatePolicialRequest;

class PolicialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePolicialRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePolicialRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Policial  $policial
     * @return \Illuminate\Http\Response
     */
    public function show(Policial $policial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Policial  $policial
     * @return \Illuminate\Http\Response
     */
    public function edit(Policial $policial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePolicialRequest  $request
     * @param  \App\Models\Policial  $policial
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePolicialRequest $request, Policial $policial)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Policial  $policial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Policial $policial)
    {
        //
    }
}
