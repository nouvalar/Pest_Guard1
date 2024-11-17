<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class UserAkses
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure  $next
     * @param  string|array  $role
     */
    public function handle(Request $request, Closure $next, $role)
    {
        // Cek apakah user sudah login
        if (!auth()->check()) {
            Log::info('Pengguna belum login.');
            return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu.');
        }

        // Cek role user
        $roles = is_array($role) ? $role : [$role];
        Log::info('Role pengguna: ' . auth()->user()->role);
        if (!in_array(auth()->user()->role, $roles)) {
            Log::warning('Akses ditolak untuk role: ' . auth()->user()->role . '. Dibutuhkan role: ' . implode(', ', $roles));
            abort(403, 'Unauthorized action.');
        }

        return $next($request);
    }
}
