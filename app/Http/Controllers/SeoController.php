<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeoController extends Controller
{
    private array $pages = [
        'software-development-company-ahmedabad' => [
            'title'       => 'Top Software Development Company in Ahmedabad | Klick2Up',
            'meta_desc'   => 'Looking for the best software development company in Ahmedabad? Klick2Up engineers high-performance custom enterprise software, mobile apps, and SaaS platforms.',
            'badge'       => 'Software Development Ahmedabad',
            'heading'     => "Custom Software <span class='text-accent'>Engineering.</span><br>Built for <span class='text-primary/90'>Scale & Success.</span>",
            'subheading'  => 'We design and build enterprise-grade software architectures tailored to streamline operations, enhance productivity, and drive digital growth.',
            'features'    => [
                ['icon' => 'code-2',       'title' => 'ISO Standards',  'label' => 'Compliance'],
                ['icon' => 'server',       'title' => 'Scalable Code',  'label' => 'Architecture'],
                ['icon' => 'shield-check',  'title' => 'Full IP rights', 'label' => 'Ownership'],
                ['icon' => 'headset',      'title' => '24/7 SLA Support','label' => 'Reliability'],
            ],
            'about'       => [
                'subtitle'   => "Ahmedabad's Premiere Software Engineering Partner",
                'content_p1' => 'Klick2Up is a top-rated software development company in Ahmedabad, delivering reliable, custom software solutions. We help startups and enterprises turn complex business logic into efficient, scalable applications.',
                'content_p2' => 'From conceptualizing the software architecture to frontend design and cloud deployment, our dedicated programmers ensure standard compliance, robust security audits, and high performance.',
                'stats'      => [
                    ['value' => '150+', 'label' => 'Projects Delivered'],
                    ['value' => '98%',  'label' => 'Client Retention'],
                    ['value' => '15+',  'label' => 'Tech Stacks'],
                ],
            ],
            'services'    => [
                ['title' => 'Custom Enterprise Software', 'desc' => 'Tailored software systems engineered to solve unique organizational challenges and streamline business operations.', 'icon' => 'cpu'],
                ['title' => 'SaaS Product Development',  'desc' => 'Full-cycle engineering to build, launch, and scale SaaS products with multi-tenant architectures.', 'icon' => 'layers'],
                ['title' => 'Cloud Applications',       'desc' => 'Secure, modern cloud-native systems designed for AWS, Microsoft Azure, and Google Cloud.', 'icon' => 'cloud'],
                ['title' => 'Legacy System Migration',   'desc' => 'Upgrading legacy code to modern, faster technology stacks without data loss or downtime.', 'icon' => 'refresh-cw'],
            ],
            'why_choose_us' => [
                'title'   => 'Why Choose Klick2Up in Ahmedabad?',
                'reasons' => [
                    ['title' => 'Agile Development Process', 'desc' => 'Fast iterations, transparent sprint planning, and regular progress updates through Jira/Slack.', 'icon' => 'clock'],
                    ['title' => 'High-Security Protocols', 'desc' => 'Implementation of industry-grade encryption, secure APIs, and complete GDPR/data privacy compliance.', 'icon' => 'shield'],
                    ['title' => 'Dedicated Developers', 'desc' => 'Access to top-tier software engineers, certified cloud architects, UI/UX designers, and QA testers.', 'icon' => 'users'],
                ],
            ],
            'faqs'        => [
                ['q' => 'Do you provide support after the software is deployed?', 'a' => 'Yes, Klick2Up provides flexible post-launch support, SLA maintenance packages, and server monitoring to keep your system secure and optimized.'],
                ['q' => 'Will I own the source code?', 'a' => 'Absolutely. We transfer 100% intellectual property (IP) and source code ownership to you upon project completion.'],
                ['q' => 'How long does a custom software project take?', 'a' => 'Depending on the complexity and feature set, development can range from 8 weeks to 6 months. We define clear milestones in the SRS document before kicking off.'],
            ],
        ],

        'web-development-company-ahmedabad' => [
            'title'       => 'Leading Web Development Company in Ahmedabad | Klick2Up',
            'meta_desc'   => 'Klick2Up is a premier web development company in Ahmedabad. We build custom websites, corporate portals, and high-converting e-commerce web apps.',
            'badge'       => 'Web Development Ahmedabad',
            'heading'     => "High-Performance <span class='text-accent'>Websites.</span><br>Tailored Web <span class='text-primary/90'>Engineering.</span>",
            'subheading'  => 'We engineer fast, responsive, and visually stunning web applications designed to engage visitors, establish brand authority, and maximize conversions.',
            'features'    => [
                ['icon' => 'layout-grid', 'title' => 'Responsive Grid', 'label' => 'Layouts'],
                ['icon' => 'search',      'title' => 'SEO Optimized',  'label' => 'Structures'],
                ['icon' => 'zap',         'title' => 'Sub-2s Load',    'label' => 'Performance'],
                ['icon' => 'sparkles',    'title' => 'Micro Effects',  'label' => 'Animations'],
            ],
            'about'       => [
                'subtitle'   => 'Premier Web Engineering in Ahmedabad',
                'content_p1' => 'As a leading web development agency in Ahmedabad, we combine state-of-the-art frontend frameworks with robust backend technologies to build seamless web platforms.',
                'content_p2' => 'Whether you need a corporate portal, custom web application, or dynamic marketplace, our solutions are architected to deliver speed, security, and exceptional user experiences across all devices.',
                'stats'      => [
                    ['value' => '100+', 'label' => 'Websites Launched'],
                    ['value' => 'Sub-2s', 'label' => 'Load Times'],
                    ['value' => '100%',  'label' => 'Responsive Designs'],
                ],
            ],
            'services'    => [
                ['title' => 'Custom Web Applications', 'desc' => 'Bespoke web-based portals and tools designed around your specific business logic and workflows.', 'icon' => 'monitor'],
                ['title' => 'Corporate Websites',      'desc' => 'Premium, interactive websites built to establish a powerful, authoritative digital identity for your brand.', 'icon' => 'building-2'],
                ['title' => 'E-commerce Development',  'desc' => 'Secure online storefronts featuring custom checkouts, inventory syncing, and multiple payment gateways.', 'icon' => 'shopping-bag'],
                ['title' => 'Headless CMS Solutions',   'desc' => 'Blazing-fast frontend experiences connected to headless backends like Sanity, Strapi, or WordPress.', 'icon' => 'globe'],
            ],
            'why_choose_us' => [
                'title'   => 'Why Choose Klick2Up for Web Development?',
                'reasons' => [
                    ['title' => 'User-Centric Design', 'desc' => 'Beautiful UI layouts paired with intuitive user journeys designed to reduce bounce rates.', 'icon' => 'pen-tool'],
                    ['title' => 'SEO & Performance Ready', 'desc' => 'Clean semantic HTML markup and optimized media assets for better organic visibility and search rankings.', 'icon' => 'trending-up'],
                    ['title' => 'Modern Frameworks', 'desc' => 'Expert utilization of React, Next.js, Vue, Laravel, Tailwind CSS, and Node.js for bleeding-edge web apps.', 'icon' => 'code'],
                ],
            ],
            'faqs'        => [
                ['q' => 'Are your websites mobile friendly?', 'a' => 'Yes, all web applications we build are fully responsive, ensuring a flawless experience on desktops, tablets, and smartphones.'],
                ['q' => 'Can you redesign our existing website?', 'a' => 'Yes, we specialize in revamping outdated websites to improve performance, visual appeal, security, and conversion rates.'],
                ['q' => 'Do you optimize websites for SEO?', 'a' => 'Yes, we follow strict SEO best practices, including semantic markup, schema integration, optimized meta tags, and fast page speeds.'],
            ],
        ],

        'mobile-app-development-ahmedabad' => [
            'title'       => 'Top Mobile App Development Company in Ahmedabad | Klick2Up',
            'meta_desc'   => 'Looking for custom mobile app development in Ahmedabad? Klick2Up builds premium iOS & Android apps using Flutter, React Native, and native frameworks.',
            'badge'       => 'Mobile App Development Ahmedabad',
            'heading'     => "Next-Gen Mobile <span class='text-accent'>Apps.</span><br>Native & Hybrid <span class='text-primary/90'>Solutions.</span>",
            'subheading'  => 'We build cross-platform and native mobile applications that deliver smooth user experiences, robust performance, and seamless offline functionality.',
            'features'    => [
                ['icon' => 'smartphone', 'title' => 'Dual Platform',  'label' => 'iOS & Android'],
                ['icon' => 'cpu',        'title' => 'Native-Like',    'label' => 'Performance'],
                ['icon' => 'database',   'title' => 'Offline Sync',   'label' => 'Data Caching'],
                ['icon' => 'sparkles',   'title' => 'Fluid Transitions','label' => 'UI Experience'],
            ],
            'about'       => [
                'subtitle'   => "Ahmedabad's Leading Mobile App Developers",
                'content_p1' => 'Klick2Up is an expert mobile app development company in Ahmedabad. We design and program feature-rich mobile applications that connect businesses with users on iOS and Android devices.',
                'content_p2' => 'Our mobile app engineers utilize Flutter, React Native, and Swift/Kotlin to build apps that perform flawlessly under heavy loads and integrate seamlessly with phone hardware.',
                'stats'      => [
                    ['value' => '50+',  'label' => 'Apps Deployed'],
                    ['value' => 'Dual',  'label' => 'Platform Experts'],
                    ['value' => '4.8+', 'label' => 'App Store Rating'],
                ],
            ],
            'services'    => [
                ['title' => 'Cross-Platform Flutter Apps', 'desc' => 'High-performance mobile apps targeting iOS and Android from a single code base using Flutter.', 'icon' => 'phone-call'],
                ['title' => 'React Native Development',   'desc' => 'Beautiful, responsive hybrid apps utilizing the modular power and speed of ReactJS.', 'icon' => 'tablet'],
                ['title' => 'Native iOS & Android',        'desc' => 'Custom Swift and Kotlin development for platform-specific hardware access and maximum speed.', 'icon' => 'smartphone'],
                ['title' => 'Mobile App UI/UX Layouts',    'desc' => 'Custom mobile-first layouts designed to maximize user engagement, onboarding, and retention.', 'icon' => 'layout'],
            ],
            'why_choose_us' => [
                'title'   => 'Why Partner with Klick2Up for Apps?',
                'reasons' => [
                    ['title' => 'Seamless Integrations', 'desc' => 'Secure connections to third-party APIs, payment processors, Bluetooth services, and databases.', 'icon' => 'git-branch'],
                    ['title' => 'Rigorous Device Testing', 'desc' => 'Comprehensive QA checks across multiple physical screen sizes and operating system versions.', 'icon' => 'check-square'],
                    ['title' => 'App Store Publishing', 'desc' => 'Full assistance with publishing apps to Google Play Store and Apple App Store, including guidance on policies.', 'icon' => 'rocket'],
                ],
            ],
            'faqs'        => [
                ['q' => 'What framework do you recommend for app development?', 'a' => 'For most projects, we recommend Flutter or React Native as they allow you to target both iOS and Android efficiently, saving up to 40% in development costs.'],
                ['q' => 'Will you publish our app to the App Stores?', 'a' => 'Yes, we handle the entire submission, review, and publishing process for both Google Play and the Apple App Store.'],
                ['q' => 'Do you integrate push notifications and analytics?', 'a' => 'Yes, we integrate push notifications (Firebase), user behavior analytics, crash reporting, and real-time support chat features.'],
            ],
        ],

        'laravel-development-company-ahmedabad' => [
            'title'       => 'Premier Laravel Development Company in Ahmedabad | Klick2Up',
            'meta_desc'   => 'Klick2Up is a top Laravel development company in Ahmedabad. We build secure, robust APIs, custom portals, and backend solutions using the Laravel framework.',
            'badge'       => 'Laravel Development Ahmedabad',
            'heading'     => "Custom Laravel <span class='text-accent'>Engineering.</span><br>Secure & Robust <span class='text-primary/90'>Backends.</span>",
            'subheading'  => 'We utilize Laravel\'s powerful ecosystem to craft robust backend APIs, custom CRM systems, and enterprise portals with clean, maintainable MVC architecture.',
            'features'    => [
                ['icon' => 'layers',       'title' => 'MVC Patterns',   'label' => 'Architecture'],
                ['icon' => 'shield',       'title' => 'Eloquent ORM',   'label' => 'Secure Queries'],
                ['icon' => 'server',       'title' => 'RESTful APIs',   'label' => 'Data Services'],
                ['icon' => 'check-circle', 'title' => 'Unit Testing',   'label' => 'PHPUnit'],
            ],
            'about'       => [
                'subtitle'   => 'Certified Laravel Engineers in Ahmedabad',
                'content_p1' => 'Klick2Up stands as the premiere Laravel development company in Ahmedabad. We build custom backend architectures using the PHP framework built for web artisans.',
                'content_p2' => 'From simple CMS engines to complex business automation portals, our Laravel programmers follow PSR coding standards to deliver clean and secure codebases.',
                'stats'      => [
                    ['value' => '80+',  'label' => 'Laravel Projects'],
                    ['value' => '100%', 'label' => 'PSR Standards'],
                    ['value' => '5x',   'label' => 'Backend Security'],
                ],
            ],
            'services'    => [
                ['title' => 'Custom Laravel Web Apps', 'desc' => 'Designing and building web apps optimized for performance, robust database schemas, and modular scalability.', 'icon' => 'code'],
                ['title' => 'Laravel API Development',  'desc' => 'Secure, high-throughput RESTful and GraphQL APIs for mobile apps and third-party integrations.', 'icon' => 'share-2'],
                ['title' => 'Laravel Portal Development', 'desc' => 'Robust enterprise portals, custom CRMs, accounting tools, and inventory management systems.', 'icon' => 'panels-top-left'],
                ['title' => 'Laravel Migration & Upgrade','desc' => 'Seamless upgrade of older PHP/Laravel versions to the latest stable release with zero data loss.', 'icon' => 'refresh-cw'],
            ],
            'why_choose_us' => [
                'title'   => 'Why Choose Klick2Up for Laravel?',
                'reasons' => [
                    ['title' => 'Deep Framework Expertise', 'desc' => 'Comprehensive knowledge of Laravel queues, jobs, events, caching (Redis/Memcached), and background workers.', 'icon' => 'cpu'],
                    ['title' => 'High Security Focus', 'desc' => 'Built-in protection against SQL injection, XSS, CSRF attacks, and custom role-based access controls.', 'icon' => 'lock'],
                    ['title' => 'Database Optimization', 'desc' => 'Proficient in database indexing, optimizing complex Eloquent relations, and writing clean migrations.', 'icon' => 'database'],
                ],
            ],
            'faqs'        => [
                ['q' => 'Why should we use Laravel for our backend?', 'a' => 'Laravel is highly secure, fast, and comes with built-in modules for authentication, routing, and database management, making it perfect for rapid enterprise scaling.'],
                ['q' => 'Can you migrate our legacy PHP app to Laravel?', 'a' => 'Yes, we have extensive experience refactoring legacy procedural PHP or older frameworks into clean Laravel applications.'],
                ['q' => 'Do you write automated tests for Laravel?', 'a' => 'Yes, we write custom unit and integration tests using PHPUnit to ensure the codebase remains stable during future updates.'],
            ],
        ],

        'react-js-development-company-ahmedabad' => [
            'title'       => 'Top ReactJS Development Company in Ahmedabad | Klick2Up',
            'meta_desc'   => 'Looking for a ReactJS development company in Ahmedabad? Klick2Up designs fast, interactive frontend applications and NextJS SPAs for modern web brands.',
            'badge'       => 'ReactJS Development Ahmedabad',
            'heading'     => "Interactive React <span class='text-accent'>Interfaces.</span><br>Stunning Frontend <span class='text-primary/90'>Experiences.</span>",
            'subheading'  => 'We engineer lightning-fast single page applications (SPAs) and server-side rendered (SSR) web interfaces using React.js and Next.js.',
            'features'    => [
                ['icon' => 'atom',         'title' => 'Component-Based','label' => 'Modular UI'],
                ['icon' => 'zap',          'title' => 'Virtual DOM',    'label' => 'Instant Render'],
                ['icon' => 'cpu',          'title' => 'State Systems',  'label' => 'Zustand / Redux'],
                ['icon' => 'globe',        'title' => 'Next.js SSR',    'label' => 'SEO Friendly'],
            ],
            'about'       => [
                'subtitle'   => 'Modern React Development in Ahmedabad',
                'content_p1' => 'As a leading ReactJS development agency in Ahmedabad, we build modular, reusable frontend architectures. We enable digital products to respond to user interactions instantly.',
                'content_p2' => 'Our engineers create engaging user interfaces backed by state management systems and optimized configurations for lightning-fast page loading.',
                'stats'      => [
                    ['value' => '60+',  'label' => 'React Apps'],
                    ['value' => '95+',  'label' => 'PageSpeed Score'],
                    ['value' => '100%', 'label' => 'UI Reusability'],
                ],
            ],
            'services'    => [
                ['title' => 'React Single Page Apps (SPA)', 'desc' => 'Highly responsive client-side web applications built with seamless transitions and routing.', 'icon' => 'monitor-smartphone'],
                ['title' => 'Next.js Web Applications',     'desc' => 'SEO-optimized frontend applications with Server-Side Rendering (SSR) and Static Site Generation (SSG).', 'icon' => 'server-cog'],
                ['title' => 'Custom UI Component Libraries', 'desc' => 'Building modular, accessible, and themeable UI components matching your brand design system.', 'icon' => 'library'],
                ['title' => 'React Native Mobile Apps',     'desc' => 'Translating React components into cross-platform iOS and Android apps with native wrappers.', 'icon' => 'smartphone'],
            ],
            'why_choose_us' => [
                'title'   => 'Why Choose Klick2Up for ReactJS?',
                'reasons' => [
                    ['title' => 'Premium UI/UX Focus', 'desc' => 'Crafting modern animations, glassmorphism designs, and micro-interactions that captivate users.', 'icon' => 'sparkles'],
                    ['title' => 'State & Render Optimization', 'desc' => 'Clean state modeling to prevent unnecessary component re-renders, ensuring high FPS performance.', 'icon' => 'activity'],
                    ['title' => 'Full API Integration', 'desc' => 'Flawless integrations with RESTful APIs, GraphQL endpoints, WebSockets, and real-time backend updates.', 'icon' => 'link-2'],
                ],
            ],
            'faqs'        => [
                ['q' => 'What are the benefits of ReactJS?', 'a' => 'ReactJS uses a virtual DOM, making page transitions and user interactions instant without reloading the page. It is highly modular and search engine friendly when combined with Next.js.'],
                ['q' => 'Can you convert our design (Figma/PSD) to React?', 'a' => 'Yes, we convert Figma, Sketch, and Adobe XD designs into clean, responsive React components using Tailwind CSS or standard CSS.'],
                ['q' => 'Do you support Next.js for SEO?', 'a' => 'Yes, we build all SEO-heavy React projects with Next.js to provide server-side rendering for superior search engine rankings.'],
            ],
        ],

        'nodejs-development-company-ahmedabad' => [
            'title'       => 'Leading NodeJS Development Company in Ahmedabad | Klick2Up',
            'meta_desc'   => 'Klick2Up is a top NodeJS development company in Ahmedabad. We build secure, real-time backend systems, REST APIs, and microservices.',
            'badge'       => 'NodeJS Development Ahmedabad',
            'heading'     => "Scalable Node.js <span class='text-accent'>Backends.</span><br>Real-Time API & <span class='text-primary/90'>Microservices.</span>",
            'subheading'  => 'We develop fast, event-driven backend systems using Node.js, Express, and NestJS, optimized for real-time applications and high-throughput APIs.',
            'features'    => [
                ['icon' => 'zap',          'title' => 'Asynchronous',   'label' => 'Non-Blocking I/O'],
                ['icon' => 'activity',     'title' => 'WebSockets',     'label' => 'Real-Time Apps'],
                ['icon' => 'grid',         'title' => 'Microservices',  'label' => 'Decoupled Dev'],
                ['icon' => 'trending-up',  'title' => 'High Scale',     'label' => 'Concurrency'],
            ],
            'about'       => [
                'subtitle'   => 'High-Performance Node.js Engineering',
                'content_p1' => 'Klick2Up is a trusted NodeJS development company in Ahmedabad. We specialize in building fast, non-blocking backend APIs capable of handling millions of concurrent users.',
                'content_p2' => 'Whether you\'re building a real-time messaging application, multiplayer platform, or microservices architecture, Node.js provides the raw speed and efficiency your application demands.',
                'stats'      => [
                    ['value' => '50+',  'label' => 'Node APIs Built'],
                    ['value' => '<50ms', 'label' => 'API Latency'],
                    ['value' => '10k+',  'label' => 'Concurrent Conns'],
                ],
            ],
            'services'    => [
                ['title' => 'Custom Node.js REST APIs', 'desc' => 'Structuring clean, secure endpoints for mobile apps, web applications, and third-party integrations.', 'icon' => 'plug'],
                ['title' => 'Real-Time Application Dev','desc' => 'Engineering chats, live dashboards, multiplayer backends, and notifications using WebSockets.', 'icon' => 'message-square-code'],
                ['title' => 'Microservices Architecture','desc' => 'Breaking monolithic applications down into independent, dockerized Node.js services.', 'icon' => 'server'],
                ['title' => 'Serverless Backend Functions','desc' => 'Developing lightweight, cost-effective serverless APIs optimized for AWS Lambda or GCP Functions.', 'icon' => 'cloud-lightning'],
            ],
            'why_choose_us' => [
                'title'   => 'Why Choose Klick2Up for NodeJS?',
                'reasons' => [
                    ['title' => 'Asynchronous Expertise', 'desc' => 'In-depth mastery of event-loops, streams, callbacks, and promises to write efficient asynchronous backend routines.', 'icon' => 'cpu'],
                    ['title' => 'Database Adaptability', 'desc' => 'Expertise in database connectivity using ORMs/ODMs for MongoDB, PostgreSQL, Redis, and MySQL.', 'icon' => 'database'],
                    ['title' => 'Secure NestJS & Express', 'desc' => 'Structuring standard-compliant codebases with TypeScript and NestJS for robust dependency injection and testing.', 'icon' => 'shield'],
                ],
            ],
            'faqs'        => [
                ['q' => 'Is Node.js suitable for enterprise applications?', 'a' => 'Yes, large enterprises like Netflix, LinkedIn, and PayPal use Node.js due to its asynchronous, non-blocking I/O model which handles high traffic efficiently.'],
                ['q' => 'Can you build real-time systems?', 'a' => 'Absolutely. Node.js is the industry standard for real-time apps due to its strong support for WebSockets and low-latency data streams.'],
                ['q' => 'Which database works best with Node.js?', 'a' => 'Node.js works flawlessly with both NoSQL (MongoDB, DynamoDB) and SQL (PostgreSQL, MySQL) databases. We choose the database based on your data relationships.'],
            ],
        ],

        'erp-development-company-ahmedabad' => [
            'title'       => 'Custom ERP Development Company in Ahmedabad | Klick2Up',
            'meta_desc'   => 'Klick2Up builds custom ERP software and business management systems in Ahmedabad. Streamline your HR, inventory, CRM, and finance workflows.',
            'badge'       => 'ERP Development Ahmedabad',
            'heading'     => "Custom ERP <span class='text-accent'>Solutions.</span><br>Streamlined Business <span class='text-primary/90'>Operations.</span>",
            'subheading'  => 'We design and develop custom Enterprise Resource Planning (ERP) software that unifies your operations, finance, HR, inventory, and CRM workflows into a single dashboard.',
            'features'    => [
                ['icon' => 'database',     'title' => 'Unified DB',     'label' => 'Single Source'],
                ['icon' => 'settings-2',   'title' => 'Workflow Engine','label' => 'Automation'],
                ['icon' => 'bar-chart-3',  'title' => 'Real-Time BI',   'label' => 'Reporting'],
                ['icon' => 'user-check',   'title' => 'Role Controls',  'label' => 'Secure Access'],
            ],
            'about'       => [
                'subtitle'   => 'Custom Business Management Software in Ahmedabad',
                'content_p1' => 'Klick2Up is a premier ERP development company in Ahmedabad. We build custom ERP systems from scratch, ensuring they fit your exact business processes instead of forcing you to adapt to ready-made software.',
                'content_p2' => 'Our custom ERP solutions help manufacturing, retail, logistics, and service businesses automate repetitive manual tasks, reduce human errors, and obtain real-time financial reporting.',
                'stats'      => [
                    ['value' => '30+', 'label' => 'Enterprise ERPs'],
                    ['value' => '40%', 'label' => 'Operational Boost'],
                    ['value' => '100%','label' => 'Custom Workflows'],
                ],
            ],
            'services'    => [
                ['title' => 'Bespoke ERP Systems',      'desc' => 'Software built specifically for your custom corporate structures, factory floors, and warehouse workflows.', 'icon' => 'factory'],
                ['title' => 'CRM & Pipeline Systems',    'desc' => 'Detailed customer pipelines, automatic lead captures, sales dashboards, and communication trackers.', 'icon' => 'users'],
                ['title' => 'Inventory & Supply Chain',  'desc' => 'Barcode-enabled inventory, automatic restock triggers, and dispatch logistics trackers.', 'icon' => 'box'],
                ['title' => 'HRMS & Payroll Modules',    'desc' => 'Employee database, automated attendance/payroll rules, shift planners, and leave systems.', 'icon' => 'contact-2'],
            ],
            'why_choose_us' => [
                'title'   => 'Why Choose Klick2Up for ERP Development?',
                'reasons' => [
                    ['title' => 'Zero User License Fees', 'desc' => 'No monthly fees per employee. You own the software and can add unlimited users without additional costs.', 'icon' => 'dollar-sign'],
                    ['title' => 'Advanced BI Dashboards', 'desc' => 'Get real-time insights with custom graphs, sales trackers, and financial balance sheets in one place.', 'icon' => 'line-chart'],
                    ['title' => 'Deep API Integrations', 'desc' => 'Connects to your bank feeds, SMS portals, WhatsApp business, accounting tools, and shipping platforms.', 'icon' => 'link'],
                ],
            ],
            'faqs'        => [
                ['q' => 'Why build a custom ERP instead of buying ready-made software?', 'a' => 'Ready-made ERPs like SAP or Salesforce charge high licensing fees per user and are difficult to customize. A custom ERP is built around your specific workflow, has no recurring user fees, and belongs 100% to you.'],
                ['q' => 'Can you integrate the ERP with our existing software?', 'a' => 'Yes, we integrate custom ERPs with external accounting tools (Tally, QuickBooks), payment gateways, shipping APIs, and corporate emails.'],
                ['q' => 'Is my business data secure in a custom ERP?', 'a' => 'Yes, we implement advanced data security, including SSL encryption, automatic databases backups, and multi-factor authentication.'],
            ],
        ],

        'ai-software-development-ahmedabad' => [
            'title'       => 'Custom AI & Machine Learning Software Development in Ahmedabad',
            'meta_desc'   => 'Klick2Up provides custom AI software development in Ahmedabad. We build machine learning models, NLP, LLM integrations, and smart chatbots.',
            'badge'       => 'AI Software Development Ahmedabad',
            'heading'     => "Intelligent AI <span class='text-accent'>Solutions.</span><br>Machine Learning & <span class='text-primary/90'>Automation.</span>",
            'subheading'  => 'We build cutting-edge artificial intelligence systems, custom NLP text processors, predictive analytics models, and intelligent LLM-driven chatbots.',
            'features'    => [
                ['icon' => 'line-chart',   'title' => 'Predictive ML',  'label' => 'Forecasting'],
                ['icon' => 'message-square','title' => 'NLP & LLMs',    'label' => 'Smart Chatbots'],
                ['icon' => 'eye',          'title' => 'Computer Vision','label' => 'Image OCR'],
                ['icon' => 'workflow',     'title' => 'Automation',     'label' => 'Intelligent Agents'],
            ],
            'about'       => [
                'subtitle'   => "Ahmedabad's Premiere AI & ML Engineers",
                'content_p1' => 'Klick2Up is at the forefront of AI software development in Ahmedabad. We help businesses leverage machine learning, computer vision, and cognitive automation to gain a competitive edge.',
                'content_p2' => 'From integrating Gemini and GPT APIs to training custom predictive forecasting models, we build smart software that learns, adapts, and automates complex operations.',
                'stats'      => [
                    ['value' => '20+', 'label' => 'AI Deployments'],
                    ['value' => '90%+', 'label' => 'Model Accuracy'],
                    ['value' => '24/7', 'label' => 'Smart Automation'],
                ],
            ],
            'services'    => [
                ['title' => 'Custom ML Model Training', 'desc' => 'Developing classification, regression, and anomaly detection models using TensorFlow and PyTorch.', 'icon' => 'binary'],
                ['title' => 'NLP & Text Analytics',      'desc' => 'Semantic analysis, automated document classification, sentiment detection, and translation tools.', 'icon' => 'languages'],
                ['title' => 'Generative AI & LLMs',      'desc' => 'Integrating Gemini and GPT systems for smart enterprise search, auto-responders, and document summary.', 'icon' => 'wand-2'],
                ['title' => 'Computer Vision Systems',   'desc' => 'Object tracking, face recognition, facial attribute analyses, and custom OCR receipt scanning.', 'icon' => 'viewfinder'],
            ],
            'why_choose_us' => [
                'title'   => 'Why Choose Klick2Up for AI Development?',
                'reasons' => [
                    ['title' => 'Secure Enterprise Data', 'desc' => 'We deploy private model wrappers ensuring your corporate data is never trained or leaked into public APIs.', 'icon' => 'shield-alert'],
                    ['title' => 'Clean Data Pipelines', 'desc' => 'We assist in aggregating, cleaning, and labeling datasets to prepare them for optimal model accuracy.', 'icon' => 'filter'],
                    ['title' => 'Practical ROI Solutions', 'desc' => 'We prioritize AI automations that reduce overhead, like customer support agent cost or visual manual auditing.', 'icon' => 'coins'],
                ],
            ],
            'faqs'        => [
                ['q' => 'How do we get started with AI development?', 'a' => 'We start with a feasibility analysis to evaluate your business data. Once we confirm the dataset is clean and large enough, we outline the model training plan.'],
                ['q' => 'Can you integrate LLMs (like OpenAI GPT or Google Gemini) into our software?', 'a' => 'Yes, we specialize in building custom application wrappers and fine-tuning prompts for LLM APIs to build custom corporate chatbots and document parsers.'],
                ['q' => 'How do you ensure our data remains private when using AI?', 'a' => 'We build secure, self-hosted data models or utilize enterprise cloud API contracts that guarantee your data is never used to train external public models.'],
            ],
        ],
    ];

    private function renderPage(string $slug)
    {
        if (!array_key_exists($slug, $this->pages)) {
            abort(404);
        }

        $page = $this->pages[$slug];
        return view('seo.landing', compact('page', 'slug'));
    }

    public function software() { return $this->renderPage('software-development-company-ahmedabad'); }
    public function web()      { return $this->renderPage('web-development-company-ahmedabad'); }
    public function mobile()   { return $this->renderPage('mobile-app-development-ahmedabad'); }
    public function laravel()  { return $this->renderPage('laravel-development-company-ahmedabad'); }
    public function react()    { return $this->renderPage('react-js-development-company-ahmedabad'); }
    public function nodejs()   { return $this->renderPage('nodejs-development-company-ahmedabad'); }
    public function erp()      { return $this->renderPage('erp-development-company-ahmedabad'); }
    public function ai()       { return $this->renderPage('ai-software-development-ahmedabad'); }

    public function sitemap()
    {
        $urls = [
            ['loc' => url('/'), 'pri' => '1.0', 'freq' => 'daily'],
            ['loc' => url('/about'), 'pri' => '0.8', 'freq' => 'monthly'],
            ['loc' => url('/portfolio'), 'pri' => '0.8', 'freq' => 'monthly'],
            ['loc' => url('/careers'), 'pri' => '0.7', 'freq' => 'monthly'],
            ['loc' => url('/services'), 'pri' => '0.9', 'freq' => 'weekly'],
            ['loc' => url('/industries'), 'pri' => '0.9', 'freq' => 'weekly'],
            ['loc' => url('/contact'), 'pri' => '0.9', 'freq' => 'monthly'],
        ];

        // Add services
        $services = [
            'web-design-ui-ux',
            'web-development-services',
            'hybrid-app-development',
            'seo-search-engine-optimization',
            'digital-marketing-services',
            'business-analysis-consulting'
        ];
        foreach ($services as $svc) {
            $urls[] = ['loc' => url("/services/{$svc}"), 'pri' => '0.8', 'freq' => 'weekly'];
        }

        // Add industries
        $industries = [
            'ecommerce-retail',
            'healthcare-telemedicine',
            'fintech-payments',
            'logistics-fleet',
            'real-estate-proptech',
            'education-edtech',
            'on-demand-services',
            'manufacturing-erp'
        ];
        foreach ($industries as $ind) {
            $urls[] = ['loc' => url("/industries/{$ind}"), 'pri' => '0.8', 'freq' => 'weekly'];
        }

        // Add SEO landing pages
        foreach (array_keys($this->pages) as $page) {
            $urls[] = ['loc' => url("/{$page}"), 'pri' => '0.8', 'freq' => 'weekly'];
        }

        // Add Blog Index & Posts
        $urls[] = ['loc' => url('/blog'), 'pri' => '0.8', 'freq' => 'weekly'];
        $blogController = new \App\Http\Controllers\BlogController();
        foreach (array_keys($blogController->getAllPosts()) as $postSlug) {
            $urls[] = ['loc' => url("/blog/{$postSlug}"), 'pri' => '0.7', 'freq' => 'monthly'];
        }

        $xml = '<?xml version="1.0" encoding="UTF-8"?>';
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
        foreach ($urls as $url) {
            $xml .= '<url>';
            $xml .= '<loc>' . htmlspecialchars($url['loc']) . '</loc>';
            $xml .= '<lastmod>' . date('Y-m-d') . '</lastmod>';
            $xml .= '<changefreq>' . $url['freq'] . '</changefreq>';
            $xml .= '<priority>' . $url['pri'] . '</priority>';
            $xml .= '</url>';
        }
        $xml .= '</urlset>';

        return response($xml, 200, [
            'Content-Type' => 'application/xml',
        ]);
    }
}
