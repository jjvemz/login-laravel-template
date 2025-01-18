<?php

namespace App\Http\Middleware;

use Illuminate\Cookie\Middleware\EncryptCookies as Middleware;

class EncryptCookies extends Middleware
{
    /**
     * Los nombres de las cookies que deben ser excluidos de la encriptación.
     *
     * @var array
     */
    protected $except = [
        //
    ];
}
