<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
    public function getTipo()
    {
        return $this->belongsTo('App\platillos', 'tipo', 'id');
    }
}
