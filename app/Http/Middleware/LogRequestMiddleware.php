<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Log;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\DB;

class LogRequestMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        Log::info('LogRequestMiddleware executed');

        $logData = [
            'session_id' => session()->getId(),
            'ip_address' => $request->ip(),
            'url' => $request->fullUrl(),
            'request_headers' => json_encode($request->headers->all()),
            'request_body' => json_encode($request->all()),
            'created_at' => now(),
        ];

        DB::table('logs')->insert($logData);

        return $next($request);
    }
}

