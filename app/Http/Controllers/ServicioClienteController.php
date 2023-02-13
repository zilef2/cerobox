<?php

namespace App\Http\Controllers;

use App\Models\Servicio_cliente;
use App\Http\Requests\StoreServicio_clienteRequest;
use App\Http\Requests\UpdateServicio_clienteRequest;

class ServicioClienteController extends Controller
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
     * @param  \App\Http\Requests\StoreServicio_clienteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreServicio_clienteRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Servicio_cliente  $servicio_cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Servicio_cliente $servicio_cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Servicio_cliente  $servicio_cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Servicio_cliente $servicio_cliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateServicio_clienteRequest  $request
     * @param  \App\Models\Servicio_cliente  $servicio_cliente
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateServicio_clienteRequest $request, Servicio_cliente $servicio_cliente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Servicio_cliente  $servicio_cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Servicio_cliente $servicio_cliente)
    {
        //
    }
}
