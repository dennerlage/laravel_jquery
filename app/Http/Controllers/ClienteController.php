<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = \App\Cliente::get();
        return view('cliente.index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cliente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cliente = new \App\Cliente();
        $cliente->nomcli = $request->get('nomcli');
        $cliente->cpfcli = $request->get('cpfcli');
        $cliente->endcli = $request->get('endcli');
        $cliente->numcli = $request->get('numcli');
        $cliente->baicli = $request->get('baicli');
        $cliente->cidcli = $request->get('cidcli');
        $cliente->ufcli = $request->get('ufcli');
        $cliente->telcli = $request->get('telcli');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($codcli)
    {
        $cliente = \App\Cliente::find($codcli);
        $cliente->delete();
        
        return redirect('/cliente')->with('cliEliminar', 'Cliente Excluida!');
    }
}
