<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SecurityHeaders
{
    private $unwantedHeaders = ['X-Powered-By', 'server', 'Server'];

    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);
        
        if (!app()->environment('testing')) {
            $response->headers->set('X-XSS-Protection', '1; mode=block');
            $response->headers->set('X-Frame-Options', 'sameorigin');
            $response->headers->set('X-Content-Type-Options', 'nosniff');
            $response->headers->set('Strict-Transport-Security', 'max-age=31536000; includeSubDomains');
            $response->headers->set('Referrer-Policy', 'same-origin');
            $response->headers->set('Feature-Policy', "geolocation 'self'; vibrate 'none'");
            /* $response->headers->set('Content-Security-Policy', "default-src 'self'; script-src 'self' *.iconscout.com *.cloudflare.com 'unsafe-inline' 'unsafe-eval'; style-src 'self' *.iconscout.com *.cloudflare.com 'unsafe-inline'; img-src 'self' * data:; font-src 'self' data: ; connect-src 'self' plausible.io/api/event; media-src 'self'; frame-src 'self' platform.twitter.com github.com *.youtube.com; object-src 'none'; base-uri 'self';");
            $response->headers->set('Expect-CT', 'enforce, max-age=30');
            $response->headers->set('Permissions-Policy', 'autoplay=(self), camera=(), encrypted-media=(self), fullscreen=(), geolocation=(self), gyroscope=(self), magnetometer=(), microphone=(), midi=(), payment=(), sync-xhr=(self), usb=()');
            $response->headers->set('Access-Control-Allow-Origin', '*');
            $response->headers->set('Access-Control-Allow-Methods', 'GET,POST,PUT,PATCH,DELETE,OPTIONS');
            $response->headers->set('Access-Control-Allow-Headers', 'Content-Type,Authorization,X-Requested-With,X-CSRF-Token'); */

            $this->removeUnwantedHeaders($this->unwantedHeaders);
        }

        return $response;
    }

    private function removeUnwantedHeaders($headers): void
    {
        foreach ($headers as $header) {
            header_remove($header);
        }
    }
}
