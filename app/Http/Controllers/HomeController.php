<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
            // return "Bienvenido a la pagina de cursos";
        return view('auth.login');
    }
}
