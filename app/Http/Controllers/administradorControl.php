<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class administradorControl extends Controller
{
    public function showAdmin()
    {
        return view('administrador.adminIndex');
    }
}
