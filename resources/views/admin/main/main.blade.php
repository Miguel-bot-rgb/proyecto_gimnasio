@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        <img class="float-left" src="https://i.pinimg.com/736x/63/06/f8/6306f8e16651b943254cd477ba8470ec.jpg" width="300" height="241">
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam quo amet possimus facere corporis cum reiciendis id modi consequuntur voluptas magni expedita, odit nobis quod quam nisi cumque. Possimus, sequi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem iusto, veritatis sapiente quaerat cumque quia doloribus deleniti modi aperiam recusandae et expedita, optio accusantium laudantium? Voluptatum enim porro exercitationem est. Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, quia voluptatum consectetur officiis neque temporibus facilis adipisci placeat fuga, rem velit rerum quisquam quod autem quibusdam pariatur, sequi atque aliquid?</p>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam quo amet possimus facere corporis cum reiciendis id modi consequuntur voluptas magni expedita, odit nobis quod quam nisi cumque. Possimus, sequi. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quasi repudiandae soluta ea. Accusamus quo magni non aut. Esse sunt officiis nam voluptatum deserunt quia vitae numquam velit, quod fugiat cumque?</p>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam quo amet possimus facere corporis cum reiciendis id modi consequuntur voluptas magni expedita, odit nobis quod quam nisi cumque. Possimus, sequi. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Modi beatae id inventore. Mollitia sed, ea dolores sunt ab consequatur necessitatibus non, odio iusto expedita aliquid labore dolore. Omnis, ab earum.</p>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam quo amet possimus facere corporis cum reiciendis id modi consequuntur voluptas magni expedita, odit nobis quod quam nisi cumque. Possimus, sequi. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Modi beatae id inventore. Mollitia sed, ea dolores sunt ab consequatur necessitatibus non, odio iusto expedita aliquid labore dolore. Omnis, ab earum.</p>
        
        
    </div>
</div>
@stop

@section('css')
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
