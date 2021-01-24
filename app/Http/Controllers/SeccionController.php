<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\seccion;

class SeccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = seccion::all();
        return view('admin.secciones.index',compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.secciones.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombreSC' => 'required',
            'descripcion' => 'required',
        ]);

        $tag = seccion::create($request->all());

        return redirect()->route('admin.secciones.index', compact('tag'))->with('info', 'Se creo con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(seccion $tag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(seccion $tag)
    {
        return view('admin.secciones.edit', compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, seccion $tag)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
       ]);
        
        $tag->update($request->all());
         return redirect()->route('admin.secciones.index',$tag)->with('info', 'los datos se actualizaron con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(seccion $tag)
    {
        $tag->delete();

        return redirect()->route('admin.secciones.index')->with('info', 'los datos se eliminaron con exito');
    }
}
