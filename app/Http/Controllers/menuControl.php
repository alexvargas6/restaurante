<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class menuControl extends Controller
{
    public function rest()
    {
        return view('principal.index');
    }
}
