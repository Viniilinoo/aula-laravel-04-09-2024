<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function iniciar() {
        return view("pagina_inicial");
    }
}
