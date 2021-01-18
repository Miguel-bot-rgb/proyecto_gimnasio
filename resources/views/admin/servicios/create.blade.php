@extends('adminlte::page')

@section('title', 'servicios')

@section('content_header')
    <h1>Crear servicios</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ session('info') }}</strong>
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            {{-- route donde se guardaran los datso ingresados en el formulario
            --}}
            {!! Form::open(['route' => 'admin.servicios.store']) !!}
            @include('admin.servicios.partials.form')
            {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');

    </script>
@stop
