<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class RedirectorMiddleware
{
    /**
     * @param  Request  $request
     * @param  Closure  $next
     * @return Application|RedirectResponse|Redirector|mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->is('app', 'app/')) {
            return redirect()->route('admin:home');
        }

        if ($request->is('/', '/home')) {
            return redirect()->route('admin:home');
        }

        return $next($request);
    }
}
