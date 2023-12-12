<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class SetLocale
{
    public function handle($request, Closure $next)
    {
        // Check if the locale is set in the session
        if (Session::has('locale')) {
            $locale = Session::get('locale');
            App::setLocale($locale);
        }

        return $next($request);
    }
}