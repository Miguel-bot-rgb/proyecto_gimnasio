<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\servicio;

class ServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = servicio::all();
        return view('admin.servicios.index',compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.servicios.create');
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
            'nombre' => 'required',
            'descripcion' => 'required',
        ]);

        $tag = servicio::create($request->all());

        return redirect()->route('admin.servicios.index', compact('tag'))->with('info', 'Se creo con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(servicio $tag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(servicio $tag)
    {
        return view('admin.servicios.edit', compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, servicio $tag)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',

       ]);
        
        $tag->update($request->all());
         return redirect()->route('admin.servicios.index',$tag)->with('info', 'los datos se actualizaron con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(servicio $tag)
    {
        $tag->delete();

        return redirect()->route('admin.servicios.index')->with('info', 'los datos se eliminaron con exito');
    }
}
