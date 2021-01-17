<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cliente;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = cliente::all();

        return view('admin.clientes.index', compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.clientes.create');
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
            'DNI' => 'required',
            'Apellido' => 'required',
            'Nombre' => 'required',
            'Telefono' => 'required',
        ]);

        $tag = cliente::create($request->all());

        return redirect()->route('admin.clientes.index', compact('tag'))->with('info', 'Se creo con exito');
        // return $request->all();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(cliente $tag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(cliente $tag)
    {
        return view('admin.clientes.edit', compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cliente $tag)
    {
        $request->validate([
            'DNI' => 'required',
            'Apellido' => 'required',
            'Nombre' => 'required',
            'Telefono' => 'required',
        ]);
        
        $tag->update($request->all());
         return redirect()->route('admin.clientes.index',$tag)->with('info', 'los datos se actualizaron con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(cliente $tag)
    {
        $tag->delete();

        return redirect()->route('admin.clientes.index')->with('info', 'los datos se eliminaron con exito');
    }
}
