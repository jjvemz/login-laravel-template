<?php

namespace App\Http\Middleware;
use Closure;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

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



    public function handle($request, Closure $next): Response
    {
        if($request->route()->named('logout')) {

            if (!Auth::check() || Auth::guard()->viaRemember()) {

                $this->except[] = 'logout';

            }
        }

        return parent::handle($request, $next);
    }
}
