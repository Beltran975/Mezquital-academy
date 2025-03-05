<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PracticasController extends Controller
{
    public function mostrarPhishing()
{
    return view('practicas.phishing');
}

    public function mostrarComprasSeguras()
    {
        return view('practicas.compras-seguras');
    }

    public function mostrarWiFiPublico()
    {
        return view('practicas.wifi-publico');
}
}