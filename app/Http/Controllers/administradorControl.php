<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use App\menu;
use App\platillos;
use App\especiales;
use App\contacto;
use App\chef;
use App\evento;
use App\about;
use App\puntos;
use App\whyus;
use App\galeria;

class administradorControl extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showAdmin()
    {
        $usuarios = user::all();
        return view('administrador.adminIndex', ['usuarios' => $usuarios]);
    }

    public function showMenu()
    {
        $menu = menu::all();
        $cat = platillos::all();
        $espe = especiales::all();
        return view('administrador.menu', ['menu' => $menu, 'cat' => $cat, 'esp' => $espe]);
    }

    public function showAbout()
    {
        $puntos = puntos::all();
        $about = about::find(1);
        return view('administrador.aboutEdit', ['about' => $about, 'puntos' => $puntos]);
    }

    public function showInterfazConfig()
    {
        $contac = contacto::all();
        return view('administrador.interfazConfig', ['contacto' => $contac]);
    }

    public function showChef()
    {
        $chefs = chef::all();
        return view('administrador.adminChef', ['chef' => $chefs]);
    }

    public function showEvents()
    {
        $eventos = evento::all();
        return view('administrador.eventos', ['evento' => $eventos]);
    }

    public function showWhy()
    {
        $why = whyus::all();
        return view('administrador.whyUsesAdmin', ['whyus' => $why]);
    }

    public function showGaleria()
    {
        $galeria = galeria::all();
        return view('administrador.galeriaAdmin', ['galeria' => $galeria]);
    }
}
