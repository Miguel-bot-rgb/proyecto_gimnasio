@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    {{-- <div class="card">
        <div class="card-body">
            <img class="float-left" src="https://i.pinimg.com/736x/63/06/f8/6306f8e16651b943254cd477ba8470ec.jpg"
                width="300" height="241">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam quo amet possimus facere corporis cum
                reiciendis id modi consequuntur voluptas magni expedita, odit nobis quod quam nisi cumque. Possimus, sequi.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem iusto, veritatis sapiente quaerat cumque
                quia doloribus deleniti modi aperiam recusandae et expedita, optio accusantium laudantium? Voluptatum enim
                porro exercitationem est. Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, quia voluptatum
                consectetur officiis neque temporibus facilis adipisci placeat fuga, rem velit rerum quisquam quod autem
                quibusdam pariatur, sequi atque aliquid?</p>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam quo amet possimus facere corporis cum
                reiciendis id modi consequuntur voluptas magni expedita, odit nobis quod quam nisi cumque. Possimus, sequi.
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quasi repudiandae soluta ea. Accusamus quo magni
                non aut. Esse sunt officiis nam voluptatum deserunt quia vitae numquam velit, quod fugiat cumque?</p>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam quo amet possimus facere corporis cum
                reiciendis id modi consequuntur voluptas magni expedita, odit nobis quod quam nisi cumque. Possimus, sequi.
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Modi beatae id inventore. Mollitia sed, ea dolores
                sunt ab consequatur necessitatibus non, odio iusto expedita aliquid labore dolore. Omnis, ab earum.</p>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam quo amet possimus facere corporis cum
                reiciendis id modi consequuntur voluptas magni expedita, odit nobis quod quam nisi cumque. Possimus, sequi.
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Modi beatae id inventore. Mollitia sed, ea dolores
                sunt ab consequatur necessitatibus non, odio iusto expedita aliquid labore dolore. Omnis, ab earum.</p>


        </div>
    </div> --}}
    <div class="grid grid-cols-3 gap-2 place-items-stretch h-48">
        <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
            <div class="card-header">Header</div>
            <div class="card-body">
                <h5 class="card-title">Primary card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                    content.</p>
            </div>
        </div>
        <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
            <div class="card-header">Header</div>
            <div class="card-body">
                <h5 class="card-title">Secondary card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                    content.</p>
            </div>
        </div>
        <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
            <div class="card-header">Header</div>
            <div class="card-body">
                <h5 class="card-title">Success card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                    content.</p>
            </div>
        </div>
        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
            <div class="card-header">Header</div>
            <div class="card-body">
                <h5 class="card-title">Danger card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                    content.</p>
            </div>
        </div>
        <div class="card text-dark bg-warning mb-3" style="max-width: 18rem;">
            <div class="card-header">Header</div>
            <div class="card-body">
                <h5 class="card-title">Warning card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                    content.</p>
            </div>
        </div>
        <div class="card text-dark bg-info mb-3" style="max-width: 18rem;">
            <div class="card-header">Header</div>
            <div class="card-body">
                <h5 class="card-title">Info card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                    content.</p>
            </div>
        </div>
        <div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
            <div class="card-header">Header</div>
            <div class="card-body">
                <h5 class="card-title">Light card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                    content.</p>
            </div>
        </div>
        <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
            <div class="card-header">Header</div>
            <div class="card-body">
                <h5 class="card-title">Dark card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                    content.</p>
            </div>
        </div>
    </div>
@stop

@section('css')
    {{--
    <link rel="stylesheet" href="/css/admin_custom.css"> --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
@stop

@section('js')
    <script>
        console.log('Hi!');

    </script>
@stop
