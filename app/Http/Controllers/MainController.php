<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function vista_principal()
    {
        return view('admin.main.main');
    }
}
