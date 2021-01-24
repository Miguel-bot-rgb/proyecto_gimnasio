<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EntrenamientoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\OficioController;
use App\Http\Controllers\PruebaController;
use App\Http\Controllers\SeccionController;
use App\Http\Controllers\ServicioController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Router;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', HomeController::class);

Route::get('main', [MainController::class, 'vista_principal'])->name('main.pag_principal');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('oficios', OficioController::class)->parameters(['oficios' => 'tag'])->names('admin.oficios');
Route::resource('clientes', ClienteController::class)->parameters(['clientes' => 'tag'])->names('admin.clientes');
Route::resource('servicios', ServicioController::class)->parameters(['servicios' => 'tag'])->names('admin.servicios');
Route::resource('secciones', SeccionController::class)->parameters(['secciones' => 'tag'])->names('admin.secciones');
Route::resource('entrenamientos', EntrenamientoController::class)->parameters(['entrenamientos' => 'tag'])->names('admin.entrenamientos');
Route::resource('empleados', EntrenamientoController::class)->parameters(['empleados' => 'tag'])->names('admin.empleados');
