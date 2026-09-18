<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndustryController extends Controller
{
    /**
     * All industry page data keyed by URL slug.
     */
    private array $industries = [
        'ecommerce-retail' => [
            'title'      => 'eCommerce & Retail Solutions | Klick2Up',
            'meta_desc'  => 'Klick2Up builds high-converting eCommerce stores, headless checkouts, and retail technology platforms.',
            'badge'      => 'eCommerce & Retail',
            'icon'       => 'shopping-bag',
            'color'      => 'text-accent',
            'bg'         => 'bg-red-50',
            'heading'    => "eCommerce That <span class='text-accent'>Converts.</span>",
            'subheading' => 'We build high-performance online stores, headless eCommerce platforms, and retail technology solutions that drive sales and customer loyalty.',
            'image'      => 'industry_ecommerce.png',
            'image_alt'  => 'eCommerce Platform Mockup',
            'challenges' => [
                'Cart abandonment and low conversion rates',
                'Poor mobile shopping experience',
                'Slow page loads affecting product discovery',
                'Complex multi-channel inventory management',
            ],
            'solutions'  => [
                ['icon' => 'shopping-cart', 'title' => 'Headless Commerce',    'desc' => 'Blazing-fast storefronts decoupled from backend systems.'],
                ['icon' => 'smartphone',    'title' => 'Mobile-First Design',  'desc' => 'Seamless shopping journeys on any device.'],
                ['icon' => 'zap',           'title' => 'Performance Tuning',   'desc' => 'Sub-2s load times through CDN and lazy loading.'],
                ['icon' => 'bar-chart',     'title' => 'Analytics Dashboards', 'desc' => 'Real-time sales, funnel, and inventory insights.'],
            ],
        ],
        'healthcare-telemedicine' => [
            'title'      => 'Healthcare & Telemedicine Solutions | Klick2Up',
            'meta_desc'  => 'Klick2Up builds HIPAA-compliant healthcare portals, telemedicine platforms, and patient management systems.',
            'badge'      => 'Healthcare & Telemedicine',
            'icon'       => 'heart-pulse',
            'color'      => 'text-blue-600',
            'bg'         => 'bg-blue-50',
            'heading'    => "Healthcare Tech That <span class='text-accent'>Heals.</span>",
            'subheading' => 'We engineer HIPAA-compliant healthcare portals, telemedicine platforms, and patient management systems designed for the modern healthcare ecosystem.',
            'image'      => 'industry_healthcare.png',
            'image_alt'  => 'Healthcare Platform Mockup',
            'challenges' => [
                'Ensuring HIPAA compliance and data security',
                'Fragmented patient records and scheduling',
                'Poor telemedicine video and UX quality',
                'Complex billing and insurance integrations',
            ],
            'solutions'  => [
                ['icon' => 'shield',     'title' => 'HIPAA Compliance',     'desc' => 'End-to-end encrypted, regulation-ready systems.'],
                ['icon' => 'video',      'title' => 'Telemedicine Portals', 'desc' => 'WebRTC-powered live consultation interfaces.'],
                ['icon' => 'calendar',   'title' => 'Smart Scheduling',     'desc' => 'AI-assisted appointment booking and reminders.'],
                ['icon' => 'file-text',  'title' => 'EHR Integration',      'desc' => 'Seamless electronic health records connectivity.'],
            ],
        ],
        'fintech-payments' => [
            'title'      => 'FinTech & Payments Solutions | Klick2Up',
            'meta_desc'  => 'Klick2Up builds secure payment gateways, banking APIs, and financial technology platforms.',
            'badge'      => 'FinTech & Payments',
            'icon'       => 'credit-card',
            'color'      => 'text-green-600',
            'bg'         => 'bg-green-50',
            'heading'    => "FinTech Solutions That <span class='text-accent'>Scale.</span>",
            'subheading' => 'We build secure payment gateways, banking APIs, and financial technology platforms that handle transactions with enterprise-grade reliability.',
            'image'      => 'industry_ecommerce.png',
            'image_alt'  => 'FinTech Platform Mockup',
            'challenges' => [
                'PCI-DSS compliance and fraud prevention',
                'Multi-currency and cross-border transactions',
                'Real-time transaction processing at scale',
                'Regulatory reporting and audit trails',
            ],
            'solutions'  => [
                ['icon' => 'lock',        'title' => 'Secure Gateways',    'desc' => 'PCI-DSS compliant payment processing systems.'],
                ['icon' => 'globe',       'title' => 'Multi-Currency',     'desc' => 'Cross-border payments with live FX conversion.'],
                ['icon' => 'activity',    'title' => 'Real-Time Processing','desc' => 'Millisecond transaction handling at any scale.'],
                ['icon' => 'file-check',  'title' => 'Compliance Reports', 'desc' => 'Automated regulatory and audit trail generation.'],
            ],
        ],
        'logistics-fleet' => [
            'title'      => 'Logistics & Fleet Management Solutions | Klick2Up',
            'meta_desc'  => 'Klick2Up builds live vehicle tracking, route optimization, and fleet management platforms.',
            'badge'      => 'Logistics & Fleet',
            'icon'       => 'truck',
            'color'      => 'text-amber-600',
            'bg'         => 'bg-amber-50',
            'heading'    => "Logistics Tech That <span class='text-accent'>Delivers.</span>",
            'subheading' => 'We build live vehicle tracking, intelligent route optimization, and fleet management platforms that reduce costs and improve delivery performance.',
            'image'      => 'industry_ecommerce.png',
            'image_alt'  => 'Logistics Platform Mockup',
            'challenges' => [
                'Real-time vehicle tracking and visibility',
                'Inefficient route planning and fuel costs',
                'Driver performance and compliance tracking',
                'Last-mile delivery optimization',
            ],
            'solutions'  => [
                ['icon' => 'map-pin',     'title' => 'Live GPS Tracking',  'desc' => 'Real-time fleet visibility on interactive maps.'],
                ['icon' => 'navigation',  'title' => 'Route Optimization', 'desc' => 'AI-powered routing to cut fuel and delivery time.'],
                ['icon' => 'users',       'title' => 'Driver Management',  'desc' => 'Performance scores, logs, and compliance tracking.'],
                ['icon' => 'package',     'title' => 'Last-Mile Solutions','desc' => 'Smart dispatch and customer delivery notifications.'],
            ],
        ],
        'real-estate-proptech' => [
            'title'      => 'Real Estate & PropTech Solutions | Klick2Up',
            'meta_desc'  => 'Klick2Up builds property listing platforms, real estate CRMs, and PropTech applications.',
            'badge'      => 'Real Estate & PropTech',
            'icon'       => 'home',
            'color'      => 'text-indigo-600',
            'bg'         => 'bg-indigo-50',
            'heading'    => "PropTech That <span class='text-accent'>Connects.</span>",
            'subheading' => 'We build property listing platforms, real estate CRMs, and PropTech applications that connect buyers, sellers, and agents in the digital age.',
            'image'      => 'industry_ecommerce.png',
            'image_alt'  => 'Real Estate Platform Mockup',
            'challenges' => [
                'Outdated listing systems with poor search UX',
                'Fragmented agent and client communication',
                'Manual document and contract management',
                'Limited virtual tour and remote viewing options',
            ],
            'solutions'  => [
                ['icon' => 'home',        'title' => 'Listing Platforms',  'desc' => 'Advanced search, filters, and map-based property grids.'],
                ['icon' => 'message-square','title' => 'Agent CRM',        'desc' => 'Unified lead management and client communication.'],
                ['icon' => 'file-text',   'title' => 'Digital Contracts',  'desc' => 'e-Signature and document management workflows.'],
                ['icon' => 'eye',         'title' => 'Virtual Tours',      'desc' => '360° property walkthroughs and virtual staging.'],
            ],
        ],
        'education-edtech' => [
            'title'      => 'Education & EdTech Solutions | Klick2Up',
            'meta_desc'  => 'Klick2Up builds LMS platforms, online learning portals, and EdTech applications.',
            'badge'      => 'Education & EdTech',
            'icon'       => 'graduation-cap',
            'color'      => 'text-purple-600',
            'bg'         => 'bg-purple-50',
            'heading'    => "EdTech That <span class='text-accent'>Educates.</span>",
            'subheading' => 'We build LMS platforms, online learning portals, and EdTech applications that deliver engaging, effective educational experiences at scale.',
            'image'      => 'industry_ecommerce.png',
            'image_alt'  => 'EdTech Platform Mockup',
            'challenges' => [
                'Engaging students in remote learning environments',
                'Tracking student progress and performance analytics',
                'Live class and WebRTC integration complexity',
                'Monetization and course marketplace management',
            ],
            'solutions'  => [
                ['icon' => 'book-open',   'title' => 'LMS Platforms',     'desc' => 'Custom learning management with progress tracking.'],
                ['icon' => 'video',       'title' => 'Live Classes',      'desc' => 'WebRTC-powered real-time virtual classrooms.'],
                ['icon' => 'bar-chart',   'title' => 'Student Analytics', 'desc' => 'Performance dashboards for teachers and admins.'],
                ['icon' => 'dollar-sign', 'title' => 'Course Marketplace','desc' => 'Subscription and pay-per-course monetization.'],
            ],
        ],
        'on-demand-services' => [
            'title'      => 'On-Demand App Solutions | Klick2Up',
            'meta_desc'  => 'Klick2Up builds on-demand booking engines, dispatch systems, and service marketplace apps.',
            'badge'      => 'On-Demand Apps',
            'icon'       => 'clock',
            'color'      => 'text-teal-600',
            'bg'         => 'bg-teal-50',
            'heading'    => "On-Demand Apps That <span class='text-accent'>Dispatch.</span>",
            'subheading' => 'We build booking engines, service dispatch systems, and on-demand marketplace applications that connect service providers and customers seamlessly.',
            'image'      => 'industry_ecommerce.png',
            'image_alt'  => 'On-Demand App Mockup',
            'challenges' => [
                'Real-time availability and smart booking flows',
                'Provider matching and dispatch optimization',
                'Live order tracking for end customers',
                'Rating, review, and trust management systems',
            ],
            'solutions'  => [
                ['icon' => 'calendar',    'title' => 'Smart Booking',     'desc' => 'Real-time availability and intelligent scheduling.'],
                ['icon' => 'map-pin',     'title' => 'Live Tracking',     'desc' => 'Real-time provider location and ETA updates.'],
                ['icon' => 'zap',         'title' => 'Auto-Dispatch',     'desc' => 'Algorithmic provider matching and routing.'],
                ['icon' => 'star',        'title' => 'Rating Engine',     'desc' => 'Two-way review and trust score management.'],
            ],
        ],
        'manufacturing-erp' => [
            'title'      => 'Manufacturing & ERP Solutions | Klick2Up',
            'meta_desc'  => 'Klick2Up builds enterprise ERP systems, IoT sensor dashboards, and manufacturing management platforms.',
            'badge'      => 'Manufacturing & ERP',
            'icon'       => 'settings',
            'color'      => 'text-emerald-600',
            'bg'         => 'bg-emerald-50',
            'heading'    => "Manufacturing Tech That <span class='text-accent'>Optimizes.</span>",
            'subheading' => 'We build enterprise ERP systems, IoT sensor integration dashboards, and manufacturing management platforms that streamline operations and cut costs.',
            'image'      => 'industry_ecommerce.png',
            'image_alt'  => 'Manufacturing ERP Mockup',
            'challenges' => [
                'Disconnected production and inventory systems',
                'Manual quality control and compliance tracking',
                'Equipment downtime and predictive maintenance',
                'Supply chain visibility and vendor management',
            ],
            'solutions'  => [
                ['icon' => 'settings',    'title' => 'ERP Integration',   'desc' => 'Unified production, inventory, and finance modules.'],
                ['icon' => 'cpu',         'title' => 'IoT Dashboards',    'desc' => 'Real-time sensor data visualization and alerts.'],
                ['icon' => 'shield-check','title' => 'Quality Control',   'desc' => 'Digital checklists and compliance audit trails.'],
                ['icon' => 'truck',       'title' => 'Supply Chain',      'desc' => 'Vendor portals and procurement automation.'],
            ],
        ],
    ];

    public function show(string $slug)
    {
        if (!array_key_exists($slug, $this->industries)) {
            abort(404);
        }

        $industry = $this->industries[$slug];
        return view('industries.show', compact('industry', 'slug'));
    }
}
