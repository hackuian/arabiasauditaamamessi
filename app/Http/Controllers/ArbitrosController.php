<?php

namespace App\Http\Controllers;

use App\arbitros;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArbitrosController extends Controller
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
        // formulario dnd se agregan los datos
        return view('/admin/arbitros/creararbitros');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\arbitros  $arbitros
     * @return \Illuminate\Http\Response
     */
    public function show(arbitros $arbitros)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\arbitros  $arbitros
     * @return \Illuminate\Http\Response
     */
    public function edit(arbitros $arbitros)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\arbitros  $arbitros
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, arbitros $arbitros)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\arbitros  $arbitros
     * @return \Illuminate\Http\Response
     */
    public function destroy(arbitros $arbitros)
    {
        //
    }
}
