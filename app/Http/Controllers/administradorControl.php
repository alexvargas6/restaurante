<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use App\menu;
use App\platillos;

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
        return view('administrador.menu', ['menu' => $menu, 'cat' => $cat]);
    }

    public function showAbout()
    {
        return view('administrador.aboutEdit');
    }

    public function showInterfazConfig()
    {
        return view('administrador.interfazConfig');
    }
}
