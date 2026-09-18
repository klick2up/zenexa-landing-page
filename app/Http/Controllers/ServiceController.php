<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * All service page data keyed by URL slug.
     */
    private array $services = [
        'web-design-ui-ux' => [
            'title'       => 'Web Design UI/UX Solutions | Klick2Up',
            'meta_desc'   => 'Klick2Up provides modern, responsive website designs and UI/UX redesigns optimized for high conversions.',
            'badge'       => 'Web Design (UI/UX)',
            'heading'     => "Web Design That <span class='text-accent'>Captivates.</span><br>Experiences That <span class='text-primary/90'>Convert.</span>",
            'subheading'  => 'We craft custom, responsive website designs that deliver seamless user experiences, build trust, and turn visitors into loyal customers.',
            'image'       => 'service_web_design.png',
            'image_alt'   => 'Web Design Dashboard Mockups',
            'features'    => [
                ['icon' => 'pen-tool',    'title' => 'Pixel Perfect',  'label' => 'Design'],
                ['icon' => 'smartphone',  'title' => 'Fully',          'label' => 'Responsive'],
                ['icon' => 'target',      'title' => 'Conversion',     'label' => 'Focused'],
                ['icon' => 'gem',         'title' => 'Premium',        'label' => 'Visuals'],
            ],
        ],
        'web-development-services' => [
            'title'       => 'Web Development Services | Klick2Up',
            'meta_desc'   => 'Klick2Up builds enterprise-grade web applications, custom portals, and full-stack solutions.',
            'badge'       => 'Web Development',
            'heading'     => "Custom Web <span class='text-accent'>Engineering.</span><br>Scalable Full-Stack <span class='text-primary/90'>Solutions.</span>",
            'subheading'  => 'We build high-performance, scalable web applications tailored to your business needs — from custom portals to enterprise-grade systems.',
            'image'       => 'service_web_dev.png',
            'image_alt'   => 'Web Development Code Mockup',
            'features'    => [
                ['icon' => 'code',        'title' => 'Clean Code',     'label' => 'Standards'],
                ['icon' => 'server',      'title' => 'Scalable',       'label' => 'Architecture'],
                ['icon' => 'shield',      'title' => 'Secure',         'label' => 'Systems'],
                ['icon' => 'zap',         'title' => 'High',           'label' => 'Performance'],
            ],
        ],
        'hybrid-app-development' => [
            'title'       => 'Hybrid App Development | Klick2Up',
            'meta_desc'   => 'Klick2Up delivers cross-platform iOS & Android apps using Flutter and React Native.',
            'badge'       => 'Hybrid App Development',
            'heading'     => "Cross-Platform Apps That <span class='text-accent'>Perform.</span><br>iOS & Android, <span class='text-primary/90'>One Codebase.</span>",
            'subheading'  => 'We develop high-quality hybrid mobile applications using Flutter and React Native that deliver native-like performance on both iOS and Android.',
            'image'       => 'service_hybrid_apps.png',
            'image_alt'   => 'Hybrid App Mockup',
            'features'    => [
                ['icon' => 'smartphone',  'title' => 'iOS & Android',  'label' => 'Platforms'],
                ['icon' => 'cpu',         'title' => 'Native-Like',    'label' => 'Performance'],
                ['icon' => 'layers',      'title' => 'Single',         'label' => 'Codebase'],
                ['icon' => 'refresh-cw',  'title' => 'OTA',            'label' => 'Updates'],
            ],
        ],
        'seo-search-engine-optimization' => [
            'title'       => 'SEO & Search Engine Optimization | Klick2Up',
            'meta_desc'   => 'Klick2Up delivers enterprise SEO strategies, technical audits, and organic ranking growth.',
            'badge'       => 'SEO Services',
            'heading'     => "Dominate Search <span class='text-accent'>Rankings.</span><br>Drive Organic <span class='text-primary/90'>Traffic.</span>",
            'subheading'  => 'Our enterprise SEO strategies combine technical audits, content optimization, and authoritative link building to deliver sustainable organic growth.',
            'image'       => 'service_seo.png',
            'image_alt'   => 'SEO Analytics Dashboard',
            'features'    => [
                ['icon' => 'search',      'title' => 'Keyword',        'label' => 'Research'],
                ['icon' => 'bar-chart',   'title' => 'Analytics',      'label' => 'Driven'],
                ['icon' => 'link',        'title' => 'Link',           'label' => 'Building'],
                ['icon' => 'trending-up', 'title' => 'Ranking',        'label' => 'Growth'],
            ],
        ],
        'digital-marketing-services' => [
            'title'       => 'Digital Marketing Services | Klick2Up',
            'meta_desc'   => 'Klick2Up runs high-ROI PPC campaigns, social media strategies, and conversion funnels.',
            'badge'       => 'Digital Marketing',
            'heading'     => "Marketing That <span class='text-accent'>Converts.</span><br>Campaigns That <span class='text-primary/90'>Scale.</span>",
            'subheading'  => 'We run data-driven digital marketing campaigns — from PPC and social media to email marketing — designed to maximize ROI and accelerate growth.',
            'image'       => 'service_marketing.png',
            'image_alt'   => 'Digital Marketing Dashboard',
            'features'    => [
                ['icon' => 'megaphone',   'title' => 'PPC',            'label' => 'Campaigns'],
                ['icon' => 'users',       'title' => 'Social Media',   'label' => 'Management'],
                ['icon' => 'mail',        'title' => 'Email',          'label' => 'Marketing'],
                ['icon' => 'pie-chart',   'title' => 'ROI',            'label' => 'Focused'],
            ],
        ],
        'business-analysis-consulting' => [
            'title'       => 'IT Consulting & Business Analysis | Klick2Up',
            'meta_desc'   => 'Klick2Up provides IT roadmap consulting, startup advisory, and digital transformation blueprints.',
            'badge'       => 'IT Consulting',
            'heading'     => "Strategic IT <span class='text-accent'>Consulting.</span><br>Blueprint for <span class='text-primary/90'>Growth.</span>",
            'subheading'  => 'We help businesses navigate digital transformation with expert IT consulting — from technology roadmaps and system architecture to startup advisory.',
            'image'       => 'service_it_consulting.png',
            'image_alt'   => 'IT Consulting Strategy',
            'features'    => [
                ['icon' => 'target',      'title' => 'IT',             'label' => 'Roadmap'],
                ['icon' => 'clipboard',   'title' => 'SRS',            'label' => 'Documents'],
                ['icon' => 'git-branch',  'title' => 'System',         'label' => 'Architecture'],
                ['icon' => 'lightbulb',   'title' => 'Startup',        'label' => 'Advisory'],
            ],
        ],
    ];

    public function show(string $slug)
    {
        if (!array_key_exists($slug, $this->services)) {
            abort(404);
        }

        $service = $this->services[$slug];
        return view('services.show', compact('service', 'slug'));
    }
}
