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
}
