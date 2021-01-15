<?php

namespace App\Http\Controllers;
use App\Models\oficio;
use Illuminate\Http\Request;

class PruebaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('paginas.prueba1');
    }
    public function create()
    {
        return view('paginas.prueba2');
    }
    public function practica(Request $request)
    {
        $prueba = new oficio();

        $prueba->Resposabilidad = $request->oficio;
        $prueba->Sueldo = $request->sueldo;

        // return $prueba;
        $prueba->save();
    }
    public function show($dato)
    {
        return view('paginas.prueba3', compact('dato'));;
    }
}
