<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RespondWithMarkdown
{
    /**
     * Handle an incoming request.
     * If the Accept header is text/markdown or ?format=markdown is present,
     * convert the HTML body response to Markdown.
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        // Check if the request accepts markdown or wants markdown query format
        $acceptHeader = $request->header('Accept');
        if ($acceptHeader === 'text/markdown' || $acceptHeader === 'application/markdown' || $request->query('format') === 'markdown') {
            $content = $response->getContent();

            // Extract the body content if it exists to avoid rendering navigation/footers in markdown
            if (preg_match('/<body[^>]*>(.*?)<\/body>/is', $content, $matches)) {
                $html = $matches[1];
            } else {
                $html = $content;
            }

            $markdown = $this->convertToMarkdown($html);

            return response($markdown, 200, [
                'Content-Type' => 'text/markdown; charset=UTF-8'
            ]);
        }

        return $response;
    }

    /**
     * Basic HTML-to-Markdown parser.
     */
    protected function convertToMarkdown(string $html): string
    {
        // Remove style, script, and head elements
        $html = preg_replace('/<(script|style|head)[^>]*?>.*?<\/\1>/is', '', $html);

        // Convert common structural tags
        $html = preg_replace('/<h1[^>]*?>(.*?)<\/h1>/is', "\n# $1\n", $html);
        $html = preg_replace('/<h2[^>]*?>(.*?)<\/h2>/is', "\n## $1\n", $html);
        $html = preg_replace('/<h3[^>]*?>(.*?)<\/h3>/is', "\n### $1\n", $html);
        $html = preg_replace('/<h4[^>]*?>(.*?)<\/h4>/is', "\n#### $1\n", $html);

        // Convert lists
        $html = preg_replace('/<li[^>]*?>(.*?)<\/li>/is', "\n- $1", $html);
        $html = preg_replace('/<ul[^>]*?>(.*?)<\/ul>/is', "$1\n", $html);
        $html = preg_replace('/<ol[^>]*?>(.*?)<\/ol>/is', "$1\n", $html);

        // Convert blockquotes
        $html = preg_replace('/<blockquote[^>]*?>(.*?)<\/blockquote>/is', "\n> $1\n", $html);

        // Convert paragraphs and divs
        $html = preg_replace('/<p[^>]*?>(.*?)<\/p>/is', "\n$1\n", $html);
        $html = preg_replace('/<div[^>]*?>(.*?)<\/div>/is', "\n$1\n", $html);

        // Convert links and images
        $html = preg_replace('/<a[^>]*?href="([^"]*?)"[^>]*?>(.*?)<\/a>/is', '[$2]($1)', $html);
        $html = preg_replace('/<img[^>]*?src="([^"]*?)"[^>]*?alt="([^"]*?)"[^>]*?>/is', '![$2]($1)', $html);
        $html = preg_replace('/<img[^>]*?src="([^"]*?)"[^>]*?>/is', '![]($1)', $html);

        // Convert basic formatting
        $html = preg_replace('/<strong[^>]*?>(.*?)<\/strong>/is', '**$1**', $html);
        $html = preg_replace('/<b[^>]*?>(.*?)<\/b>/is', '**$1**', $html);
        $html = preg_replace('/<em[^>]*?>(.*?)<\/em>/is', '*$1*', $html);
        $html = preg_replace('/<i[^>]*?>(.*?)<\/i>/is', '*$1*', $html);

        // Clean up remaining tags
        $markdown = strip_tags($html);

        // Decode HTML entities
        $markdown = html_entity_decode($markdown, ENT_QUOTES, 'UTF-8');

        // Normalize whitespaces and blank lines
        $markdown = preg_replace("/\n{3,}/", "\n\n", $markdown);
        
        return trim($markdown);
    }
}
