<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Cliente;
use App\Http\Requests\StoreClienteRequest;
use App\Http\Requests\UpdateClienteRequest;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Inertia::render('Clientes/indexEs' , [
            'consultaPrincipal' => Cliente::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('Clientes/Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreClienteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClienteRequest $request)
    {
        $request['fecha_inicio']=Carbon::parse($request['fecha_inicio'])->format('Y-m-d H:i:s');

        $curso = Curso::create($request->all());

        // $nombreContenido= $request->contenido->getClientOriginalName();
        $nombreContenido= time() ."_". $request->contenido->getClientOriginalName();
        $request->contenido->storeAs('public/contenido_curso',$nombreContenido);
        $curso->update([
            'contenido'=> 'contenido_curso/'.$nombreContenido,
        ]);

        return redirect()->route('curso.index')->with('status', 'Curso creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit($cliente)
    {
        $elCliente = Cliente::find($cliente);
        return Inertia::render('Clientes/EditEs' , [
            'cliente' => $elCliente,
            'servicios' => $elCliente->servicios($cliente)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateClienteRequest  $request
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateClienteRequest $request, Cliente $cliente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $cliente)
    {
        $cliente->delete();
        return redirect()->route('dashboard')->with('status', 'Cliente borrado');
    }
}
