<?php

namespace App\Http\Controllers;

use App\Models\Resource;
use Illuminate\Http\Request;

class ResourceController extends Controller
{

    public static function index()
    {
        $resources = Resource::all();
        return view('resources.index',compact('resources'));

    }

    public function getPrincipiante(){
        $resources =  Resource::where('level', 'Principiante')
        ->get();
        return view('resources.index',compact('resources'));
    }

    public function getIntermedio(){
        $resources = Resource::where('level', 'Intermedio')
        ->get();
        return view('resources.index',compact('resources'));
    }

    public function getAvanzado(){
        $resources = Resource::where('level', 'Avanzado')
        ->get();
        return view('resources.index', compact('resources'));
    }


}
