<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\oficio;

use function GuzzleHttp\Promise\all;

class OficioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = oficio::all();
        return view('admin.oficios.index', compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.oficios.create');
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
            'Resposabilidad'=>'required',
            'Sueldo'=>'required',
        ]);
        
        $tag = oficio::create($request->all());

        return redirect()->route('admin.oficios.index', compact('tag'))->with('info', 'Se creo con exito');;
        // return $request->all();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(oficio $tag)
    {
        return view('admin.oficios.show', compact('tag'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(oficio $tag)
    {
        return view('admin.oficios.edit', compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, oficio $tag)
    {
        $request->validate([
            'Resposabilidad'=>'required',
            'Sueldo'=>'required',
        ]);
        
        $tag->update($request->all());
         return redirect()->route('admin.oficios.index',$tag)->with('info', 'los datos se actualizaron con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(oficio $tag)
    {
        $tag->delete();

        return redirect()->route('admin.oficios.index')->with('info', 'los datos se eliminaron con exito');
    }
}
