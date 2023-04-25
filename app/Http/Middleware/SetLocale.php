<?php

namespace App\Http\Middleware;
use Illuminate\Http\Request;
use Closure;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $language = 'ar'; // default

        if (request('language')) {
            $language = request('language');
            session()->put('language', $language);
        } elseif (session('language')) {
            $language = session('language');
        }
        app()->setLocale($language);
        return $next($request);
    }
}
