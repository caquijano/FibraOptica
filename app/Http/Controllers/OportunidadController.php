<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Oportunidad;

class OportunidadController extends Controller
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
        return view('createoportunidad');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $crearOportunidad = New Oportunidad();
        $crearOportunidad->oportunidad = $request->oportunidad;
        $crearOportunidad->comercial = $request->comercial;
        $crearOportunidad->ingeniero_preventa = $request->ingeniero_preventa;
        $crearOportunidad->fecha_inicio = $request->fecha_inicio;
        $crearOportunidad->fecha_compromiso = $request->fecha_compromiso;
        $crearOportunidad->prioridad = $request->prioridad;
        $crearOportunidad->compromiso_activacion = $request->compromiso_activacion;
        $crearOportunidad->prioridad = $request->prioridad;
        $crearOportunidad->id_cliente = $request->id_cliente;
        $crearOportunidad->save();
        return back()->with('crearoportunidad', 'La oportunidad se ha creado satisfactoriamente');
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
    public function destroy($id)
    {
        //
    }
}
