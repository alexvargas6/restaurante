<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\chef;
use App\about;
use App\puntos;
use App\galeria;
use App\whyus;
use App\testimonio;
use App\menu;
use App\platillos;

class menuControl extends Controller
{
    public function rest()
    {
        $chefs = chef::all();
        $about = about::find(1);
        $point = puntos::all();
        $fotos = galeria::all();
        $why = whyus::all();
        $test = testimonio::all();
        $menu = menu::all();
        $plato = platillos::all();
        $responseview = [
            'chef' => $chefs,
            'about' => $about,
            'puntos' => $point,
            'fotos' => $fotos,
            'whyus' => $why,
            'testi' => $test,
            'menu' => $menu,
            'platillo' => $plato
        ];
        return view('principal.index', $responseview);
    }
}
