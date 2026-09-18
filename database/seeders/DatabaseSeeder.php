<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Post;
use App\Models\Project;
use App\Models\Review;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Seed default Admin User
        User::updateOrCreate(
            ['email' => 'info@klick2up.com'],
            [
                'name'     => 'Admin User',
                'password' => Hash::make('password'),
            ]
        );

        // Seed Default Blog Posts
        $posts = [
            // [
            //     'slug'          => 'the-future-of-laravel-in-226-and-beyond',
            //     'title'         => 'The Future of Laravel: What to Expect in 2026 and Beyond',
            //     'meta_desc'     => 'Discover where the Laravel framework is heading in 2026, featuring PHP 8.4 advancements, modular directory structures, and serverless optimization.',
            //     'badge'         => 'Laravel',
            //     'date'          => 'July 05, 2026',
            //     'author_name'   => 'Hardik Patel',
            //     'author_title'  => 'Lead PHP Architect',
            //     'author_avatar' => 'https://images.unsplash.com/photo-1539571696357-5a69c17a67c6?w=120&h=120&fit=crop&q=80',
            //     'image'         => 'https://images.unsplash.com/photo-1555066931-4365d14bab8c?w=800&auto=format&fit=crop&q=80',
            //     'summary'       => 'Laravel continues to dominate PHP development with a focus on speed, security, and developer ergonomics. Here is where the ecosystem is heading in 2026.',
            //     'content'       => '<p>As we cross into mid-2026, the web development landscape is evolving at a breakneck speed. Yet, amidst the rise of serverless runtimes and micro-frontends, Laravel remains the undisputed powerhouse for enterprise-grade backend architecture. Laravel\'s continuous refinement highlights a key trend: making web engineering simpler, faster, and more robust without burdening programmers with boilerplate code.</p><h3>1. PHP 8.4 Native Power</h3><p>The latest Laravel versions are built from the ground up to take advantage of PHP 8.4 features, including property hooks, asymmetric visibility, and new array helper functions. Property hooks, in particular, allow us to define custom getter and setter logic directly inside Eloquent models, removing the need for traditional Laravel attribute accessors. This makes models cleaner and improves IDE completion.</p><h3>2. Native Serverless and Edge Compiling</h3><p>For years, running PHP on serverless environments like AWS Lambda required complex custom layers. With Laravel Octane and Vapor receiving major upgrades in 2026, running Laravel at the edge with zero cold starts is now a reality. Octane utilizes high-performance application servers like Swoole and FrankenPHP to keep the application in memory, reducing API latencies to single-digit milliseconds.</p><blockquote class="border-l-4 border-accent pl-6 py-2 my-6 italic text-primary bg-gray-50 rounded-r-2xl font-normal">"FrankenPHP support has revolutionized Laravel deployment, allowing us to package our entire application into a single binary for seamless containerization and distribution."</blockquote><h3>3. The Rise of Hybrid Architectures</h3><p>We are seeing a major shift toward hybrid architectures that merge Laravel\'s robust controllers with interactive React or Vue frontends via Inertia.js. This allows developers to build Single Page Applications (SPAs) without managing complex client-side routers or state synchronization issues, saving hours of development time.</p><p>At Klick2Up, we use Laravel to build secure APIs, custom billing workflows, and dashboard modules. Laravel remains our framework of choice for clients who value speed, security, and structured scaling.</p>',
            // ],

            // [
            //     'slug'          => 'why-nextjs-and-react-are-dominating-frontend-tech',
            //     'title'         => 'Why Next.js & React are Dominating Enterprise Web Development',
            //     'meta_desc'     => 'Explore why Next.js and ReactJS are the gold standard for enterprise web frontends in 2026, focusing on SSR, performance, and UI scalability.',
            //     'badge'         => 'ReactJS',
            //     'date'          => 'June 28, 2026',
            //     'author_name'   => 'Sneha Sharma',
            //     'author_title'  => 'Senior Frontend Engineer',
            //     'author_avatar' => 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=120&h=120&fit=crop&q=80',
            //     'image'         => 'https://images.unsplash.com/photo-1633356122544-f134324a6cee?w=800&auto=format&fit=crop&q=80',
            //     'summary'       => 'Next.js has transitioned from a simple SSR framework to the foundation of modern web experiences. Here is why enterprise brands trust Next.js for high conversion.',
            //     'content'       => '<p>User attention spans are shorter than ever, making page speed and interactive fluidity key factors in business success. For modern web brands, React.js paired with Next.js has emerged as the premier framework stack. It provides the flexibility of client-side reactivity while maintaining the search engine optimization (SEO) strengths of static site generation.</p><h3>1. Server-Side Rendering (SSR) & SEO Integration</h3><p>Traditional client-side React apps render empty HTML skeletons, forcing search engine bots to execute Javascript to discover content. Next.js solves this by rendering HTML pages on the server before sending them to the browser. This ensures search engines index your page immediately and web vitals, like Largest Contentful Paint (LCP), remain exceptionally fast.</p><h3>2. Incremental Static Regeneration (ISR)</h3><p>ISR allows developers to update static pages in the background without rebuilds. You can serve static pages for speed, but regenerate them behind the scenes when data changes. This makes Next.js ideal for massive e-commerce portals, blogs, and real estate directories that require live data updates and sub-second rendering.</p><blockquote class="border-l-4 border-accent pl-6 py-2 my-6 italic text-primary bg-gray-50 rounded-r-2xl font-normal">"Next.js App Router and Server Components have blurred the lines between server and client, allowing developers to write secure database queries directly inside UI components."</blockquote><h3>3. Component Reusability & Brand Consistency</h3><p>React\'s component-driven design allows us to build unified UI design systems. By constructing accessible, modular blocks from scratch (using Tailwind CSS and Radix UI), we ensure that updates to button patterns or header grids apply across all landing pages automatically, maintaining absolute visual consistency.</p>',
            // ],

            // [
            //     'slug'          => 'custom-erp-vs-ready-made-software-making-the-choice',
            //     'title'         => 'Custom ERP vs. Ready-Made Software: Making the Right Business Choice',
            //     'meta_desc'     => 'Compare custom ERP development with off-the-shelf software to understand which solution fits your company, focusing on licensing, scaling, and custom flows.',
            //     'badge'         => 'ERP',
            //     'date'          => 'June 15, 2026',
            //     'author_name'   => 'Vikram Mehta',
            //     'author_title'  => 'Enterprise Solutions Consultant',
            //     'author_avatar' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=120&h=120&fit=crop&q=80',
            //     'image'         => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=800&auto=format&fit=crop&q=80',
            //     'summary'       => 'Buying an off-the-shelf CRM or ERP seems like an easy fix, but custom-built systems save thousands in licensing fees while adapting to your exact workflows.',
            //     'content'       => '<p>Every growing business reaches a point where spreadsheets no longer cut it. When departments become disconnected and data is siloed across separate applications, the need for an Enterprise Resource Planning (ERP) platform becomes clear. However, businesses face a critical decision: buy a subscription-based ERP (like SAP, Salesforce, or Zoho) or build a custom ERP from scratch.</p><h3>1. The Hidden Costs of Ready-Made Software</h3><p>Off-the-shelf systems appear cheaper initially. However, they charge licensing fees per user. As your staff grows, your monthly software costs multiply. Additionally, customizing ready-made software requires specialized consultants, often costing more than the initial setup.</p><h3>2. Adapting Software to Your Workflow vs. Adapting to the Software</h3><p>Ready-made systems force you to adapt your corporate processes to their pre-built layout. If your business has unique manufacturing stages, custom pricing formulas, or specific shipping integrations, off-the-shelf software will struggle. A custom ERP is built around your exact workflows, ensuring maximum operational efficiency.</p><blockquote class="border-l-4 border-accent pl-6 py-2 my-6 italic text-primary bg-gray-50 rounded-r-2xl font-normal">"A custom ERP platform belongs completely to your company. It is an intellectual property asset with zero user seat licenses, providing a massive return on investment over time."</blockquote><h3>3. Database Ownership & Integration</h3><p>Custom ERPs allow complete control over data schemas. You can connect your platform directly with factory IoT sensors, custom mobile apps, and local accounting tools like Tally with absolute security and zero API restrictions.</p>',
            // ],

            // [
            //     'slug'          => 'implementing-generative-ai-in-your-business-workflows',
            //     'title'         => 'Implementing Generative AI: Practical ML Use Cases for Growing SMBs',
            //     'meta_desc'     => 'Learn how small and medium businesses can implement Generative AI and Large Language Models to automate support, analyze contracts, and boost efficiency.',
            //     'badge'         => 'AI',
            //     'date'          => 'June 02, 2026',
            //     'author_name'   => 'Dr. Arpan Shah',
            //     'author_title'  => 'AI & Machine Learning Director',
            //     'author_avatar' => 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=120&h=120&fit=crop&q=80',
            //     'image'         => 'https://images.unsplash.com/photo-1677442136019-21780efad99a?w=800&auto=format&fit=crop&q=80',
            //     'summary'       => 'Artificial Intelligence is no longer just for tech giants. Learn how to implement Gemini, GPT, and custom NLP models to automate operations today.',
            //     'content'       => '<p>While artificial intelligence dominates headlines, many businesses struggle to find practical applications for it. Generative AI and Large Language Models (LLMs) have matured to a point where SMBs can implement them to automate repetitive operations, reduce customer support backlogs, and analyze complex contracts in seconds.</p><h3>1. Intelligent Customer Support & Document Chatbots</h3><p>Basic rule-based chat modules frustrate users. By connecting modern LLM APIs (like Google Gemini or OpenAI GPT) with your internal knowledge base (using Retrieval-Augmented Generation, or RAG), we build smart support chatbots. These bots answer client questions about shipping rules, return policies, or system debugging instantly, resolving up to 70% of support tickets automatically.</p><h3>2. Intelligent Document Processing (IDP)</h3><p>Many businesses waste hours manually typing invoice data, receipts, or shipping manifests into databases. By using Computer Vision and NLP models, we can automate data ingestion. The system reads PDFs, extracts data points, and logs them into your custom ERP with over 98% accuracy.</p><blockquote class="border-l-4 border-accent pl-6 py-2 my-6 italic text-primary bg-gray-50 rounded-r-2xl font-normal">"AI is not about replacing human talent; it is about automating low-value tasks so your team can focus on client relationships and creative strategy."</blockquote><h3>3. Data Privacy and Security Concerns</h3><p>Sending proprietary client data to public AI endpoints is a massive compliance risk. When we implement AI for our partners, we utilize secure enterprise cloud API contracts or deploy light-weight, self-hosted open source models. This guarantees that your proprietary data is never used to train external public models.</p>',
            // ],
        ];

        foreach ($posts as $postData) {
            Post::updateOrCreate(
                ['slug' => $postData['slug']],
                $postData
            );
        }

        // Seed Default Testimonials / Reviews
        $reviews = [
            [
                'client_name'   => 'Marcus Chen',
                'client_title'  => 'CTO, Vertex Logistics',
                'project_name'  => 'FleetTrack Dashboard',
                'stars'         => 5,
                'client_avatar' => 'https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80',
                'review_text'   => 'The team at Klick2Up completely transformed our digital presence. They didn\'t just build a website; they architected a growth engine that increased our inbound leads by 300% in 4 months.',
            ],
            [
                'client_name'   => 'Elena Rodriguez',
                'client_title'  => 'Founder, PulseHealth',
                'project_name'  => 'HealthConnect Pro',
                'stars'         => 5,
                'client_avatar' => 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80',
                'review_text'   => 'Finding a development partner that understands BOTH stunning frontend UI/UX and complex backend architecture is rare. Klick2Up is that rare partner. Absolutely exceptional delivery quality.',
            ],
            [
                'client_name'   => 'David Park',
                'client_title'  => 'VP Product, Luxe Retail',
                'project_name'  => 'ShopSphere eCommerce',
                'stars'         => 5,
                'client_avatar' => 'https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80',
                'review_text'   => 'The Flutter mobile app they built for our retail brand is flawless. Our users constantly compliment the smooth UI, and our executive team loves the backend dashboard tracking feature.',
            ]
        ];

        foreach ($reviews as $reviewData) {
            Review::updateOrCreate(
                ['client_name' => $reviewData['client_name']],
                $reviewData
            );
        }

        $projects = [
            [
                'title'       => 'HealthConnect Pro',
                'category'    => 'Healthcare',
                'tech'        => 'React + Laravel',
                'color'       => 'bg-blue-50',
                'icon'        => 'heart-pulse',
                'icon_color'  => 'text-blue-600',
                'cover_image' => 'https://images.unsplash.com/photo-1576091160550-2173dba999ef?w=800&auto=format&fit=crop&q=80',
                'desc'        => 'HIPAA-compliant telemedicine portal with video consultations and patient management.',
            ],
            [
                'title'       => 'ShopSphere eCommerce',
                'category'    => 'eCommerce',
                'tech'        => 'Next.js + Stripe',
                'color'       => 'bg-red-50',
                'icon'        => 'shopping-bag',
                'icon_color'  => 'text-accent',
                'cover_image' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=800&auto=format&fit=crop&q=80',
                'desc'        => 'Headless eCommerce platform with real-time inventory and multi-currency support.',
            ],
            [
                'title'       => 'FleetTrack Dashboard',
                'category'    => 'Logistics',
                'tech'        => 'Vue.js + Node.js',
                'color'       => 'bg-amber-50',
                'icon'        => 'truck',
                'icon_color'  => 'text-amber-600',
                'cover_image' => 'https://images.unsplash.com/photo-1518241353330-0f7941c2d9b5?w=800&auto=format&fit=crop&q=80',
                'desc'        => 'Live GPS fleet management system with route optimization and driver analytics.',
            ],
            [
                'title'       => 'EduLearn LMS',
                'category'    => 'EdTech',
                'tech'        => 'Flutter + Firebase',
                'color'       => 'bg-purple-50',
                'icon'        => 'graduation-cap',
                'icon_color'  => 'text-purple-600',
                'cover_image' => 'https://images.unsplash.com/photo-1501504905252-473c47e087f8?w=800&auto=format&fit=crop&q=80',
                'desc'        => 'Mobile-first learning management system with live classrooms and progress tracking.',
            ],
            [
                'title'       => 'PropList Platform',
                'category'    => 'Real Estate',
                'tech'        => 'React + PostgreSQL',
                'color'       => 'bg-indigo-50',
                'icon'        => 'home',
                'icon_color'  => 'text-indigo-600',
                'cover_image' => 'https://images.unsplash.com/photo-1560518883-ce09059eeffa?w=800&auto=format&fit=crop&q=80',
                'desc'        => 'Property listing platform with advanced search, virtual tours, and agent CRM.',
            ],
            [
                'title'       => 'PayFlow Gateway',
                'category'    => 'FinTech',
                'tech'        => 'Node.js + React',
                'color'       => 'bg-green-50',
                'icon'       => 'credit-card',
                'icon_color'  => 'text-green-600',
                'cover_image' => 'https://images.unsplash.com/photo-1559526324-4b87b5e36e44?w=800&auto=format&fit=crop&q=80',
                'desc'        => 'PCI-DSS compliant payment gateway with multi-currency and fraud detection.',
            ]
        ];

        foreach ($projects as $projData) {
            Project::updateOrCreate(
                ['title' => $projData['title']],
                $projData
            );
        }
    }
}
