<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SimulacionController extends Controller
{
    public function mostrarAtaques()
    {
        return view('simulaciones.ataques');
    }
    
}

