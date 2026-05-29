<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VerifyApiKey
{
    /**
     * The expected API key required to access protected API endpoints.
     */
    protected const API_KEY = '1000waystodie@Nigeria';

    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        $providedKey = $request->header('X-API-KEY')
            ?? $request->header('x-api-key')
            ?? $request->input('api_key');

        if (!$providedKey || !hash_equals(self::API_KEY, (string) $providedKey)) {
            return response()->json([
                'success' => false,
                'message' => 'Unauthorized. A valid API key is required.',
            ], 401);
        }

        return $next($request);
    }
}
