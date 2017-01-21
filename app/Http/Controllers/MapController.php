<?php

namespace App\Http\Controllers;

use App\Map;
use Illuminate\Http\Request;
use App\Http\Requests;

class MapController extends Controller
{
    public function index()
    {
        $coords = Map::all();
        $test = [];
        for($i = 0; $i < count($coords->toArray()); $i++){
            array_push($test, array_values($coords->toArray()[$i]));
        }
        $coords = $test;
        return view('welcome', compact('coords'));
    }

    public function add(Request $request)
    {
        return view('add');
    }

    public function getGoogle()
    {
        return view('google_map');
    }
}
