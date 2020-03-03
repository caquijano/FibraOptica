<?php

namespace App\Http\Controllers;

use App\Servicio;
use Illuminate\Http\Request;

class ServicioController extends Controller
{   
    public function get_all(){
        return Servicio::all();
    }
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('testhome');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        Servicio::insert([
            'sid'=> $request->input('sid'), 
            'servicio'=> $request->input('servicio'), 
            'tipo'=> $request->input('tipo'), 
            'medio'=> $request->input('medio'), 
            'bw'=> $request->input('bw'), 
            'direccion'=> $request->input('bw'), 
            'ciudad'=> $request->input('ciudad'), 
            'telefono'=> $request->input('telefono'),
            'descripcion'=> $request->input('descripcion'),
            'fecha_contratacion'=> $request->input('fecha_contratacion'), 
            'fecha_proveedor'=> $request->input('fecha_proveedor'), 
            'fecha_costos'=>$request->input('fecha_costos'),
            'tiempo_contrato'=> $request->input('tiempo_contrato'),
            'tercero'=> $request->input('tercero'), 
            'os'=> $request->input('os'),
            'mrc_cliente'=> $request->input('mrc_cliente'), 
            'nrc_cliente'=> $request->input('nrc_cliente'),
            'inversion_cliente'=> $request->input('inversion_cliente'),
            'gasto_cliente'=> $request->input('gasto_cliente'),
            'inversion_tercero'=> $request->input('inversion_tercero'),
            'gasto_tercero'=> $request->input('gasto_tercero'),
            'obra_civil'=> $request->input('obra_civil'),
            'observacion_obra'=> $request->input('observacion_obra'),
            'fecha_entrega_tercero'=> $request->input('fecha_entrega_tercero'),
            'id_oportunidad'=> $request->input('id_oportunidad'),
            'id_suministro'=> $request->input('id_suministro')
          ]);
    
          $response['message'] = "Guardo exitosamente";
          $response['success'] = true;
    
          return $response;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
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
