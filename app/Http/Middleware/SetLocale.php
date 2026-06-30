<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $locale = $request->query('lang');
        
        if ($locale && in_array($locale, ['en', 'fa', 'ar'])) {
            app()->setLocale($locale);
            session(['locale' => $locale]);
        } elseif (session()->has('locale')) {
            app()->setLocale(session('locale'));
        } else {
            app()->setLocale('en'); // زبان پیش‌فرض انگلیسی
        }

        return $next($request);
    }
}
