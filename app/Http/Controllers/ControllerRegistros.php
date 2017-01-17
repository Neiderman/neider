<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ControllerRegistros extends Controller
{
  public function index()
  {
    $tipoVista = ['ver'];
    return view('paginas/registros', compact('tipoFuncion'));
  }

  public function nuevo()
  {
    $tipoVista = ['nuevo'];
    return view('paginas/registros', compact('tipoFuncion'));
  }

  public function cargar()
  {
    return json_encode(array());
  }
}
