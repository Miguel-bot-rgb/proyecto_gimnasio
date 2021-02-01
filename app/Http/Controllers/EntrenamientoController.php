<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\entrenamiento;
use App\Models\seccion;
use App\Models\servicio;
use Illuminate\Support\Arr;

class EntrenamientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //   Consulta
        $entrs = DB::table('entrenamientos')
            ->join('servicios', 'servicios_id', '=', 'servicios.id')
            ->join('seccions', 'secciones_id', '=', 'seccions.id')
            ->select('servicios.nombreS', 'seccions.nombreSC', 'entrenamientos.observacion', 'entrenamientos.estado')
            ->get();
        $entrs_descrip = entrenamiento::all();
        return view('admin.entrenamientos.index', compact('entrs','entrs_descrip'));
        // $entrs = entrenamiento::all();
        // return DD($entrs);
        // return $entrs;
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $servs = servicio::all();
        $seccs = seccion::all();
        $stds = ['activo' => 'activo', 'desactivo' => 'desactivo'];
        return view('admin.entrenamientos.create', compact('servs', 'seccs', 'stds'));
        // return $servs;
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
            'nombreS' => 'required',
            'nombreSC' => 'required',
            'descripcion' => 'required',
            'observacion' => 'required',
            'estado' => 'required',
        ]);

        $entr = new entrenamiento();
        $entr->observacion = $request->observacion;
        $entr->estado = $request->estado;
        $entr->servicios_id = $request->nombreS;
        $entr->secciones_id = $request->nombreSC;

        $entr->save();


        return redirect()->route('admin.entrenamientos.index', compact('entr'))->with('info', 'Se creo con exito');
        // return $request->all();
        // return DD($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(entrenamiento $tag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(entrenamiento $tag)
    {
        $stds = ['activo' => 'activo', 'desactivo' => 'desactivo'];
        return view('admin.entrenamientos.edit', compact('tag', 'stds'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, entrenamiento $tag)
    {
        $request->validate([
            'descripcion' => 'required',
            'observacion' => 'required',
            'estado' => 'required',
        ]);

        $tag->update($request->all());
        return redirect()->route('admin.entrenamientos.index', $tag)->with('info', 'los datos se actualizaron con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(entrenamiento $tag)
    {
        $tag->delete();

        return redirect()->route('admin.entrenamientos.index')->with('info', 'los datos se eliminaron con exito');
    }
}
