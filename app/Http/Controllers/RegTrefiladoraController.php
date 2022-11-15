<?php

namespace App\Http\Controllers;

use App\Models\Operador;
use App\Models\RegTrefiladora;
use App\Models\Turno;
use Illuminate\Http\Request;

class RegTrefiladoraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $regtrefilado = RegTrefiladora::select('reg_trefiladora.id', 'reg_trefiladora.nalambron', 
        'producto.nombre as producto', 'reg_trefiladora.diametro', 'reg_trefiladora.kg', 'turno.nombre as turno', 
        'operador.nombre as operador', 'reg_trefiladora.horas', 'reg_trefiladora.opservaciones', 'reg_trefiladora.fecha')
        ->join('operador','reg_trefiladora.id_operador','=','operador.id')
        ->join('producto','reg_trefiladora.id_producto','=','producto.id')
        ->join('turno','reg_trefiladora.id_turno','=','turno.id')
        ->get();

        /* $regtrefilado = RegTrefiladora::all(); */
        return view('trefiladora.index',compact('regtrefilado'));
       /*  return $regtrefilado; */
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
