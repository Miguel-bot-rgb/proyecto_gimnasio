@extends('adminlte::page')

@section('title', 'secciones')

@section('content_header')
    <h1>Mostrar listado de secciones</h1>
    <br>
    {{-- <a data-target="#exampleModal" class="btn btn-secondary btn-sm">Crear</a> --}}
    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal"
        data-bs-whatever="@mdo">Crear</button>
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
                        <th>nombre</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($Secciones as $tag)
                        <tr>
                            <td>{{ $tag->id }}</td>
                            <td>{{ $tag->nombre }}</td>
                            <td width="10px">
                                <a target="editModal" class="btn btn-primary btn-sm">Edit</a>
                                
                            </td>
                            <td width="10px">
                                <form action="{{ route('admin.secciones.destroy', $tag) }}" method="POST">
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
    {{-- ---------------------------aqui se crea los formularios modal de crear seccion ---------------------------------------------------------------- --}}
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Crear Seccion</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    {{-- route donde se guardaran los datso ingresados en el formulario --}}

                    {!! Form::open(['route' => 'admin.secciones.store']) !!}
                    @include('admin.secciones.partials.form')

                    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
                    {!! Form::close() !!}

                </div>
            </div>
{{-- ----------------------------------------- aqui sera el editar seccion--------------------------------------------------------------------- --}}


            <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editModalLabel">Editar Seccion</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            {{-- route donde se guardaran los datso ingresados en el formulario --}}
                            {!! Form::model($tag, ['route' => ['admin.secciones.update', $tag], 'method' => 'put']) !!}
                            @include('admin.secciones.partials.form')
                            {!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}
                
                            {!! Form::close() !!}
        
                        </div>
                    </div>
        @stop
        @section('css')
            {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

        @stop

        @section('js')
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
            </script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
                integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous">
            </script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"
                integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous">
            </script>

        @stop
