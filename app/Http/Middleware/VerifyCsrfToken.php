<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        'api/categoria/guardar',
        'api/alimento/guardar',
        'api/update/inter',
        'api/crear/chef',
        'api/editae/chef',
        'api/crear/evento',
        'api/editar/evento'
    ];
}
