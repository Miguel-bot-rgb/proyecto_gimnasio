<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seccion;
use phpDocumentor\Reflection\DocBlock\Tag;

class SeccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Secciones=Seccion::all();
        return view('admin.secciones.index',compact('Secciones')); 
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
        //return view('admin.secciones.index'); 
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
        $request->validate([
            'nombre'=>'required'  
        ]);
        $tag=Seccion::create($request->all());
         return redirect()->route('admin.secciones.index',compact('tag'))->with('Creado Exitosamente!!');
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
    public function edit(seccion $tag)
    {
        //

        //return view('admin.secciones.index');
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
        //
        $request->validate([
            'nombre'=>'required'  
        ]);
        $tag->update($request->all());
         return redirect()->route('admin.secciones.index',$tag)->with('Se actualizo Exitosamente!!');
        
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
        return redirect()->route('admin.secciones.index')->with('info','Eliminado');
        
    }
}
