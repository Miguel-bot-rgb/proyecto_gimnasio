<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PruebaController;
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

Route::get('prueba', [PruebaController::class, 'index'])->name('prueba.index');
Route::get('prueba/test', [PruebaController::class, 'create'])->name('prueba.create');
Route::post('prueba', [PruebaController::class, 'practica'])->name('prueba.practica');
Route::get('prueba/{dato}', [PruebaController::class, 'show'])->name('prueba.show');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
