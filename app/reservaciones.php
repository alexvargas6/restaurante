<?php

namespace App;

use DB;

use Illuminate\Database\Eloquent\Model;

class reservaciones extends Model
{
    public function getNumReservaciones()
    {
        $resp = DB::select('SELECT COUNT(*) FROM reservaciones WHERE visto = 0');
        return $resp;
    }
}
