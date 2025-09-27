<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $user = Auth::user();

        // If roles parameter contains a comma, split it into an array
        $validRoles = [];
        foreach ($roles as $role) {
            if (str_contains($role, ',')) {
                $validRoles = array_merge($validRoles, explode(',', $role));
            } else {
                $validRoles[] = $role;
            }
        }

        // Trim whitespace from each role
        $validRoles = array_map('trim', $validRoles);

        if (!in_array($user->role, $validRoles)) {
            abort(403, 'Unauthorized access.');
        }

        return $next($request);
    }
}

