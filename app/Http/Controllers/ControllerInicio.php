<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ControllerInicio extends Controller
{
    public function index()
    {
      return view('paginas/inicio');
    }
}
