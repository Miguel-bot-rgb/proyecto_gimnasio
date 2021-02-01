@extends('adminlte::page')

@section('title', 'entrenamientos')

@section('content_header')
    <h1>Editar entrenamientos</h1>
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
            {!! Form::model($tag, ['route' => ['admin.entrenamientos.update', $tag], 'method' => 'put']) !!}

            <div class="form-group">
                {!! Form::label('descripcion', 'descripcion:') !!}
                {!! Form::text('descripcion', null, ['class' => 'form-control', 'placeholder' => 'Ingrese descripcion...'])
                !!}
                @error('descripcion')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('observacion', 'observaciones:') !!}
                {!! Form::text('observacion', null, ['class' => 'form-control', 'placeholder' => 'Ingrese observacion...'])
                !!}
                @error('observaciones')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('estado', 'estado:') !!}
                {{-- {!! Form::text('estado', null, ['class' => 'form-control', 'placeholder'
                => 'Ingrese observacion...']) !!} --}}
                {!! Form::select('estado', $stds, null, ['class' => 'form-control']) !!}
                @error('estado')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            {!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}

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
