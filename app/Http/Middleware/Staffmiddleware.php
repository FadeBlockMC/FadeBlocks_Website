<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class StaffMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if user is logged in and has subrank = 'staff' or 'admin'
        if (Auth::check() && in_array(Auth::user()->subrank, ['staff', 'admin'])) {
            return $next($request);
        }

        // Redirect or return unauthorized response if not staff or admin
        return response()->json(['message' => 'Unauthorized'], 403);
    }
}