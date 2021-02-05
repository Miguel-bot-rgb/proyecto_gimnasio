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
    {{-- <div class="grid grid-cols-3 gap-2 place-items-stretch h-48">
        <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
            <div class="card-header">Usuarios</div>
            <div class="card-body">
                <h5 class="card-title">Primary card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                    content.</p>
            </div>
        </div>
        <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
            <div class="card-header">Clientes</div>
            <div class="card-body">
                <h5 class="card-title">Secondary card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                    content.</p>
            </div>
        </div>
        <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
            <div class="card-header">Servicios</div>
            <div class="card-body">
                <h5 class="card-title">Success card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                    content.</p>
            </div>
        </div>
        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
            <div class="card-header">Secciones</div>
            <div class="card-body">
                <h5 class="card-title">Danger card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                    content.</p>
            </div>
        </div>
        <div class="card text-dark bg-warning mb-3" style="max-width: 18rem;">
            <div class="card-header">Consultas</div>
            <div class="card-body">
                <h5 class="card-title">Warning card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                    content.</p>
            </div>
        </div>
        <div class="card text-dark bg-info mb-3" style="max-width: 18rem;">
            <div class="card-header">Información</div>
            <div class="card-body">
                <h5 class="card-title">Info card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                    content.</p>
            </div>
        </div>
    </div> --}}

    <div class="row">
        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-lightblue">
                <div class="inner">
                    <h3>150</h3>
                    <p>New Orders</p>
                </div>
                <div class="icon">
                    <i class="fas fa-cash-register"></i>
                </div>
                <a href="#" class="small-box-footer">
                    More info <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-green">
                <div class="inner">
                    <h3>53<sup style="font-size: 20px">%</sup></h3>
                    <p>Bounce Rate</p>
                </div>
                <div class="icon">
                    <i class="fas fa-chart-bar"></i>
                </div>
                <a href="#" class="small-box-footer">
                    More info <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-yellow">
                <div class="inner">
                    <h3>44</h3>
                    <p>User Registrations</p>
                </div>
                <div class="icon">
                    <i class="fas fa-users"></i>
                </div>
                <a href="#" class="small-box-footer">
                    More info <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-red">
                <div class="inner">
                    <h3>65</h3>
                    <p>Unique Visitors</p>
                </div>
                <div class="icon">
                    <i class="fas fa-chart-pie"></i>
                </div>
                <a href="#" class="small-box-footer">
                    More info <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
    </div>
{{-- ---------------- --}}
    <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-lightblue">
                <span class="info-box-icon"><i class="fa fa-bookmark-o"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Bookmarks</span>
                    <span class="info-box-number">41,410</span>
                    <div class="progress">
                        <div class="progress-bar" style="width: 70%"></div>
                    </div>
                    <span class="progress-description">
                        70% Increase in 30 Days
                    </span>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-green">
                <span class="info-box-icon"><i class="fa fa-thumbs-o-up"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Likes</span>
                    <span class="info-box-number">41,410</span>
                    <div class="progress">
                        <div class="progress-bar" style="width: 70%"></div>
                    </div>
                    <span class="progress-description">
                        70% Increase in 30 Days
                    </span>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-yellow">
                <span class="info-box-icon"><i class="fa fa-calendar"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Events</span>
                    <span class="info-box-number">41,410</span>
                    <div class="progress">
                        <div class="progress-bar" style="width: 70%"></div>
                    </div>
                    <span class="progress-description">
                        70% Increase in 30 Days
                    </span>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-red">
                <span class="info-box-icon"><i class="fa fa-comments-o"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Comments</span>
                    <span class="info-box-number">41,410</span>
                    <div class="progress">
                        <div class="progress-bar" style="width: 70%"></div>
                    </div>
                    <span class="progress-description">
                        70% Increase in 30 Days
                    </span>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
@stop

@section('js')
    <script>
        console.log('Hi!');

    </script>
@stop
