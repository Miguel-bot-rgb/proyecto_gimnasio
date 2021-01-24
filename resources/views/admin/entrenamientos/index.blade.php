@extends('adminlte::page')

@section('title', 'entrenamientos')

@section('content_header')
    <h1>Mostrar listado de entrenamientos</h1>
    <br>
    <a href="{{ route('admin.entrenamientos.create') }}" class="btn btn-secondary btn-sm">Crear</a>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ session('info') }}</strong>
        </div>
    @endif

    {{-- --}}
    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        {{-- <th>ID</th> --}}
                        <th>Servicio</th>
                        <th>Seccion</th>
                        <th>observacion</th>
                        <th>estado</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($entrs as $entr)
                        <tr>
                            {{-- <td>{{ $entr->id }}</td> --}}
                            <td>{{ $entr->nombreS }}</td>
                            <td>{{ $entr->nombreSC }}</td>
                            <td>{{ $entr->observacion }}</td>
                            <td>{{ $entr->estado }}</td>
                            <td width="10px">
                                {{-- <a href="{{ route('admin.entrenamientos.edit', $entr) }}" class="btn btn-primary btn-sm">Edit</a> --}}
                                <a href="" class="btn btn-primary btn-sm">Edit</a>
                            </td>
                            <td width="10px">
                                {{-- <form action="{{ route('admin.entrenamientos.destroy', $entr) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger btn-sm" type="summit">Eliminar</button>
                                </form> --}}
                                <form action="" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger btn-sm" type="summit">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@stop

{{-- @section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!');

</script>
@stop --}}
