<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;

class SitemapController extends Controller
{
    public function index(): Response
    {
        $urls = [];
        $excludedUris = [
            'sanctum/csrf-cookie',
            '_ignition/health-check',
            '_ignition/execute-solution',
            '_ignition/update-config',
            'sitemap.xml',
            'public/docs',
            'message',
            'company-setup',
            'subscription-confirmed-successfully',
            'subscribe-confirm-return',
            'subscribe-confirm-return',
        ];

        foreach (Route::getRoutes() as $route) {
            $uri = $route->uri();
            $action = $route->action;

            // Ensure the route is not a POST method and is not in the excluded list
            if (
                strpos($uri, '{') === false &&
                !in_array($uri, $excludedUris) &&
                isset($action['uses']) &&
                is_string($action['uses']) &&
                str_contains($action['uses'], 'Controller@') &&
                $route->methods()[0] !== 'POST' // Exclude POST methods
            ) {
                // Add the URL with the full route path (without "public/")
                $urls[] = url($uri);
            }
        }

        $xmlContent = $this->generateXml($urls);

        // Return the XML directly as a response
        return response($xmlContent, 200)->header('Content-Type', 'application/xml');
    }

    private function generateXml(array $urls): string
    {
        $output = '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
        $output .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . PHP_EOL;

        foreach ($urls as $url) {
            $output .= '    <url>' . PHP_EOL;
            $output .= '        <loc>' . htmlspecialchars($url, ENT_QUOTES, 'UTF-8') . '</loc>' . PHP_EOL;
            $output .= '        <priority>0.8</priority>' . PHP_EOL;
            $output .= '    </url>' . PHP_EOL;
        }

        $output .= '</urlset>' . PHP_EOL;

        return $output;
    }
}
