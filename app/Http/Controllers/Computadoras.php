<?php

namespace App\Http\Controllers;

use App\Models\Computadora;
use Illuminate\Http\Request;

class Computadoras extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $titulo = 'Catalogo';
        $url = 'inicio';
        $text = 'Catalogo';
        $computadoras = Computadora::all();
        return view('index', compact('titulo','url','text','computadoras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $titulo = 'Nuevo';
        $url = 'nuevo';
        $text = 'Agregar';
        return view('crear',compact('titulo','url','text'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $descripcion = $request->filled('descripcion') ? $request->input('descripcion') : 'null';
        $url = $request->filled('url')?$request->input('url'):'null';
        $computadoras = new Computadora();
        $computadoras->nombre = $request->nombre;
        $computadoras->marca = $request->marca;
        $computadoras->modelo = $request->modelo;
        $computadoras->ram = $request->ram;
        $computadoras->procesador = $request->procesador;
        $computadoras->disco_duro = $request->disco_duro;
        $computadoras->descripcion = $descripcion;
        $computadoras->URL_imagen = $url;
        $computadoras->save();
        return redirect()->route('inicio');
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
        $computadora = Computadora::find($id);
        $titulo = 'Editar';
        $url = 'inicio';
        $text = 'Editar';
        return view('editar',compact('computadora','titulo','url','text'));
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
        $descripcion = $request->filled('descripcion') ? $request->input('descripcion') : 'null';
        $url = $request->filled('url')?$request->input('url'):'null';
        $computadora = Computadora::find($id);
        $computadora->nombre = $request->nombre;
        $computadora->marca = $request->marca;
        $computadora->modelo = $request->modelo;
        $computadora->ram = $request->ram;
        $computadora->procesador = $request->procesador;
        $computadora->disco_duro = $request->disco_duro;
        $computadora->descripcion = $descripcion;
        $computadora->URL_imagen = $url;
        $computadora->save();
        return redirect()->route('inicio');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $computadora = Computadora::find($id);
        $computadora->delete();
        return redirect()->route('inicio');
    }
}
