<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * Los URIs que deben ser excluidos de la verificación de CSRF.
     *
     * @var array
     */
    protected $except = [
        //
    ];
}
