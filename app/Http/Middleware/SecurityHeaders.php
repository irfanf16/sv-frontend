<?php

namespace App\Http\Middleware;

use Closure;

class SecurityHeaders
{
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        // Set the X-Frame-Options header to DENY
        $response->headers->set('X-Frame-Options', 'SAMEORIGIN');

        // // Set the Referrer-Policy header
        $response->headers->set('Referrer-Policy', 'no-referrer');

        // // Set the HSTS header (max-age: 31536000 = 1 year, includeSubDomains to apply to all subdomains)
        $response->headers->set('Strict-Transport-Security', 'max-age=31536000; includeSubDomains');

        // // Set the X-Content-Type-Options header to nosniff
        $response->headers->set('X-Content-Type-Options', 'nosniff');

        return $response;
    }
}
