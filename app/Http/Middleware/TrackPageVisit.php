<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\PageVisit;
use Symfony\Component\HttpFoundation\Response;

class TrackPageVisit
{
    /**
     * Pages to exclude from tracking (admin, assets, API, etc.)
     */
    protected array $excludePatterns = [
        'admin/*',
        'login',
        'logout',
        'test-email',
        'sitemap.xml',
        '_debugbar/*',
        'livewire/*',
        'track/*',
    ];

    /**
     * Map of route paths to human-readable page names.
     */
    protected function getPageName(string $path): string
    {
        $map = [
            '/'          => 'Home',
            'about'      => 'About Us',
            'services'   => 'Services',
            'portfolio'  => 'Portfolio',
            'contact'    => 'Contact Us',
            'blog'       => 'Blog',
            'careers'    => 'Careers',
            'industries' => 'Industries',
        ];

        // Exact match
        if (isset($map[$path])) {
            return $map[$path];
        }

        // Prefix matches for dynamic routes
        if (str_starts_with($path, 'blog/')) {
            return 'Blog Post';
        }
        if (str_starts_with($path, 'services/')) {
            return 'Service Detail';
        }
        if (str_starts_with($path, 'industries/')) {
            return 'Industry Detail';
        }

        // SEO landing pages
        if (str_contains($path, 'ahmedabad')) {
            return 'SEO Landing';
        }

        return ucfirst(str_replace(['-', '/'], [' ', ' / '], $path));
    }

    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        // Only track GET requests with successful HTML responses
        if ($request->method() !== 'GET' || $response->getStatusCode() >= 400) {
            return $response;
        }

        // Skip excluded patterns
        $path = $request->path();
        foreach ($this->excludePatterns as $pattern) {
            if ($request->is($pattern)) {
                return $response;
            }
        }

        // Skip bot/crawler requests
        $userAgent = $request->userAgent() ?? '';
        if (preg_match('/(bot|crawl|spider|slurp|googlebot|bingbot)/i', $userAgent)) {
            return $response;
        }

        // Extract page title from HTML response
        $pageName = $this->getPageName($path);
        $content = $response->getContent();
        if (is_string($content) && preg_match('/<title[^>]*>(.*?)<\/title>/is', $content, $matches)) {
            $extractedTitle = trim(strip_tags($matches[1]));
            if (!empty($extractedTitle)) {
                // Remove common brand suffixes for a cleaner page name
                $pageName = trim(preg_replace('/(\s*\|\s*Klick2Up|\s*-\s*Klick2Up)$/i', '', $extractedTitle));
            }
        }

        // Record the visit asynchronously (after response)
        try {
            PageVisit::create([
                'page_url'     => '/' . ltrim($path, '/'),
                'page_name'    => $pageName,
                'utm_source'   => $request->query('utm_source'),
                'utm_medium'   => $request->query('utm_medium'),
                'utm_campaign' => $request->query('utm_campaign'),
                'ip_address'   => $request->ip(),
                'user_agent'   => substr($userAgent, 0, 500),
                'referrer'     => $request->header('referer') ? substr($request->header('referer'), 0, 500) : null,
            ]);
        } catch (\Exception $e) {
            // Silently fail — never break the user experience for tracking
        }

        return $response;
    }
}
