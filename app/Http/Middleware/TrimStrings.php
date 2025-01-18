<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\TrimStrings as Middleware;

class TrimStrings extends Middleware
{
    /**
     * Los nombres de los atributos que deben ser excluidos de los recortes.
     *
     * @var array
     */
    protected $except = [
        //
    ];
}
