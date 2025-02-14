<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\StaffController;

class StaffMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'You are not logged in!');
        }

        if (in_array(Auth::user()->subrank, ['staff', 'admin'])) {
            return $next($request);
        }

        return redirect()->route('home')->with('error', 'You do not have the required permissions!');
    }
}