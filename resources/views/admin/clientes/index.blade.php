@extends('adminlte::page')

@section('title', 'clientes')

@section('content_header')
    <h1>Mostrar listado de clientes</h1>
    <br>
    <a href="{{ route('admin.clientes.create') }}" class="btn btn-secondary btn-sm">Crear</a>
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
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>DNI</th>
                        <th>Apellido</th>
                        <th>Nombre</th>
                        <th>Telefono</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tags as $tag)
                        <tr>
                            <td>{{ $tag->id }}</td>
                            <td>{{ $tag->DNI }}</td>
                            <td>{{ $tag->Apellido }}</td>
                            <td>{{ $tag->Nombre }}</td>
                            <td>{{ $tag->Telefono }}</td>
                            <td width="10px">
                                <a href="{{ route('admin.clientes.edit', $tag) }}" class="btn btn-primary btn-sm">Edit</a>
                            </td>
                            <td width="10px">
                                <form action="{{ route('admin.clientes.destroy', $tag) }}" method="POST">
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
