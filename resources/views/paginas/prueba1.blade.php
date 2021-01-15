{{-- @extends('layout/test')

@section('title', 'prueba1')

@section('content')

    <h1>En esta pagina podras crear un Oficio</h1>

    <form action="{{ route('prueba.practica') }}" method="POST">
        @csrf
        <label>
            reponsabilidad:
            <input type="text" name="oficio">
        </label>
        <label>
            sueldo:
            <input type="text" name="sueldo">
        </label>
        <button type="submit">Enviar</button>
    </form>
@endsection --}}
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    {{-- <p>Welcome to this beautiful admin panel.</p> --}}
    <h1>En esta pagina podras crear un Oficio</h1>

    <form action="{{ route('prueba.practica') }}" method="POST">
        @csrf
        <label>
            reponsabilidad:
            <input type="text" name="oficio">
        </label>
        <label>
            sueldo:
            <input type="text" name="sueldo">
        </label>
        <button type="submit">Enviar</button>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
