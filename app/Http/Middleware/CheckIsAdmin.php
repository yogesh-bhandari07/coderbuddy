<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckIsAdmin
{
    public function handle(Request $request, Closure $next)
    {
        // Check if the user is authenticated
        if (Auth::check()) {
            // Check if the user is an admin
            if (Auth::user()->is_admin) {
                return $next($request);
            } else {
                // If the user is logged in but not an admin, redirect to user-dashboard
                return redirect('/user-dashboard');
            }
        } else {
            // If the user is not authenticated, redirect to the login page
            return redirect('/login');
        }
    }
}
