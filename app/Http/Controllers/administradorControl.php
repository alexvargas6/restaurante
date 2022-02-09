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
use App\testimonio;
use App\reservaciones;

class administradorControl extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showAdmin()
    {
        $reserv = reservaciones::all();
        $usuarios = user::all();
        return view('administrador.adminIndex', ['usuarios' => $usuarios, 'rev' => $reserv]);
    }

    public function showMenu()
    {
        $reserv = reservaciones::all();
        $menu = menu::all();
        $cat = platillos::all();
        $espe = especiales::all();
        return view('administrador.menu', ['menu' => $menu, 'cat' => $cat, 'esp' => $espe, 'rev' => $reserv]);
    }

    public function showAbout()
    {
        $reserv = reservaciones::all();
        $puntos = puntos::all();
        $about = about::find(1);
        return view('administrador.aboutEdit', ['about' => $about, 'puntos' => $puntos, 'rev' => $reserv]);
    }

    public function showInterfazConfig()
    {
        $reserv = reservaciones::all();
        $contac = contacto::all();
        return view('administrador.interfazConfig', ['contacto' => $contac, 'rev' => $reserv]);
    }

    public function showChef()
    {
        $reserv = reservaciones::all();
        $chefs = chef::all();
        return view('administrador.adminChef', ['chef' => $chefs, 'rev' => $reserv]);
    }

    public function showEvents()
    {
        $reserv = reservaciones::all();
        $eventos = evento::all();
        return view('administrador.eventos', ['evento' => $eventos, 'rev' => $reserv]);
    }

    public function showWhy()
    {
        $reserv = reservaciones::all();
        $why = whyus::all();
        return view('administrador.whyUsesAdmin', ['whyus' => $why, 'rev' => $reserv]);
    }

    public function showGaleria()
    {
        $reserv = reservaciones::all();
        $galeria = galeria::all();
        return view('administrador.galeriaAdmin', ['galeria' => $galeria, 'rev' => $reserv]);
    }

    public function showTestimonio()
    {
        $reserv = reservaciones::all();
        $test = testimonio::all();
        return view('administrador.testimonioAdmin', ['test' => $test, 'rev' => $reserv]);
    }

    public function showReserv()
    {
        $reserv = reservaciones::all();
        return view('administrador.reservacionesAdmin', ['rev' => $reserv]);
    }
}
