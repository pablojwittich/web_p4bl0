<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WebController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function app()
    {
        return view('app');
    }


    public function proyectos()
    {
        return view('proyectos');
    }


    public function contacto()
    {
        return view('contacto');
    }
}
