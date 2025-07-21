<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Response;

class HtmlMinifier
{
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        if ($response instanceof Response && strpos($response->headers->get('Content-Type'), 'text/html') !== false) {
            $output = $response->getContent();

            // Minify HTML
            $output = preg_replace('/<!--(?!\[if).*?-->/', '', $output); // Remove comments except IE
            $output = preg_replace('/\s{2,}/', ' ', $output); // Collapse whitespace
            $output = preg_replace('/>\s+</', '><', $output); // Remove space between tags

            $response->setContent($output);
        }

        return $response;
    }
}
