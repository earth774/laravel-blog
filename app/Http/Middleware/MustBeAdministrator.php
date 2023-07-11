<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class MustBeAdministrator
{

    public function handle(Request $request, Closure $next)
    {
        abort_if(auth()->user()?->username !== 'earth774', Response::HTTP_FORBIDDEN);

        return $next($request);
    }
}
