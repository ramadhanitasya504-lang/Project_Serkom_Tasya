<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    public function handle(
        Request $request,
        Closure $next,
        string $role
    ): Response {

        // Pastikan pengguna sudah login
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        // Normalisasi role pengguna
        $userRole = strtolower(trim(Auth::user()->role ?? ''));
        $allowedRole = strtolower(trim($role));

        // Jika route khusus Admin, hanya Admin yang boleh masuk
        if ($allowedRole === 'admin') {

            // Route CRUD user tetap khusus Admin
            if ($request->is('user') || $request->is('user/*')) {
                if ($userRole !== 'admin') {
                    abort(403, 'Menu pengelolaan user hanya untuk Admin.');
                }
            }

            // Admin dan Operator boleh mengakses route data sekolah
            if (in_array($userRole, ['admin', 'operator'], true)) {
                return $next($request);
            }
        }

        // Jika route khusus Operator
        if ($allowedRole === 'operator' && $userRole === 'operator') {
            return $next($request);
        }

        // Role tidak diizinkan
        abort(403, 'Kamu tidak memiliki hak akses ke halaman ini.');
    }
}
