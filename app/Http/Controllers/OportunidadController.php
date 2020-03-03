<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Oportunidad;
use App\Empleado;
use App\Ingeniero;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\New_;

class OportunidadController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        /** */
        $consulta = $request->buscarpor;
        
        $oportunidads=DB::table('oportunidads')
        ->join('clientes', 'oportunidads.id_cliente', '=', 'clientes.id')
        ->join('empleados', 'oportunidads.comercial', '=', 'empleados.id')
        ->join('ingenieros', 'oportunidads.ingeniero_preventa', '=', 'ingenieros.id')
        ->select('*', 'clientes.nombre as empresa')
        ->where('oportunidad', 'like', "$consulta%")
        ->paginate(6);
        
        return view('veroportunidad', compact('oportunidads'));
   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        

        
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
        return redirect('/veroportunidad');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $oportunidads = Oportunidad::all();
        return view('veroportunidad', compact('oportunidads'));
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
