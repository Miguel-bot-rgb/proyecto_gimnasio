@extends('layout/test')

@section('title', 'prueba de datos')

@section('content')
    <h1>En esta pagina podras crear un Oficio</h1>

    <form action="{{route(prueba.practica)}}" method="POST">
        @csrf
        <label>
            reposabilidad:
            <input type="text" name="oficio">
        </label>
        <label>
            sueldo:
            <input type="text" name="sueldo">
        </label>
        <button type="submit"></button>
    </form>
@endsection