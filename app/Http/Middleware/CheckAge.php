<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAge
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // lay gia tri age tu session
        $age = $request->session()->get('age');

        // kiem tra cac dieu kien
        // - phai la so
        // - phai >= 18
        if (is_numeric($age) && $age >= 18) {
            return $next($request); // cho phep tiep tuc truy cap
        }

        // neu tuoi <18 hoac khong hop le, tra ve loi 
        return response("Không được phép truy cập", 403);
    }
}