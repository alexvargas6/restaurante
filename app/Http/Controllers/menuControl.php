<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\chef;
use App\about;
use App\puntos;
use App\galeria;

class menuControl extends Controller
{
    public function rest()
    {
        $chefs = chef::all();
        $about = about::find(1);
        $point = puntos::all();
        $fotos = galeria::all();
        $responseview = ['chef' => $chefs, 'about' => $about, 'puntos' => $point, 'fotos' => $fotos];
        return view('principal.index', $responseview);
    }
}
