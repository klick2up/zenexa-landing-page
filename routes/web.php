<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\IndustryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SeoController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminLeadController;
use App\Http\Controllers\Admin\AdminBlogController;
use App\Http\Controllers\Admin\AdminReviewController;
use App\Http\Controllers\Admin\AdminProjectController;
use App\Http\Controllers\Admin\AdminAnalyticsController;
use App\Http\Controllers\Admin\AdminMailController;
use App\Http\Controllers\Admin\AdminCampaignController;
use App\Http\Controllers\Admin\AdminTemplateController;
// Home
Route::get('/', [HomeController::class, 'index'])->name('home');

// Sitemap
Route::get('/sitemap.xml', [SeoController::class, 'sitemap'])->name('seo.sitemap');

// Local SEO Ahmedabad Landing Pages
Route::get('/software-development-company-ahmedabad', [SeoController::class, 'software'])->name('seo.software');
Route::get('/web-development-company-ahmedabad', [SeoController::class, 'web'])->name('seo.web');
Route::get('/mobile-app-development-ahmedabad', [SeoController::class, 'mobile'])->name('seo.mobile');
Route::get('/laravel-development-company-ahmedabad', [SeoController::class, 'laravel'])->name('seo.laravel');
Route::get('/react-js-development-company-ahmedabad', [SeoController::class, 'react'])->name('seo.react');
Route::get('/nodejs-development-company-ahmedabad', [SeoController::class, 'nodejs'])->name('seo.nodejs');
Route::get('/erp-development-company-ahmedabad', [SeoController::class, 'erp'])->name('seo.erp');
Route::get('/ai-software-development-ahmedabad', [SeoController::class, 'ai'])->name('seo.ai');

// Static Pages
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/portfolio', [PageController::class, 'portfolio'])->name('portfolio');
Route::get('/careers', [PageController::class, 'careers'])->name('careers');

// Services
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/services/{slug}', [ServiceController::class, 'show'])->name('services.show');

// Industries
Route::get('/industries', [PageController::class, 'industries'])->name('industries');
Route::get('/industries/{slug}', [IndustryController::class, 'show'])->name('industries.show');

// Contact
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

// Blog Section
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');

// Email Open Tracking Route
Route::get('/track/{tracker}.gif', [\App\Http\Controllers\EmailTrackingController::class, 'track'])->name('email.track');

Route::prefix("admin")->group(function(){
    Route::get('login', [AdminAuthController::class, 'showLogin'])->name('admin.login');
    Route::post('login', [AdminAuthController::class, 'login']);
    
    // Admin Protected Routes
    Route::middleware(['auth'])->group(function () {
        Route::post('logout', [AdminAuthController::class, 'logout'])->name('admin.logout');
        Route::get('dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
        
        // Admin Leads
        Route::get('leads', [AdminLeadController::class, 'index'])->name('admin.leads');
        Route::post('leads/{lead}/read', [AdminLeadController::class, 'toggleRead'])->name('admin.leads.read');
        Route::delete('leads/{lead}', [AdminLeadController::class, 'destroy'])->name('admin.leads.destroy');
        
        // Admin Blogs (CRUD)
        Route::resource('blogs', AdminBlogController::class, ['names' => 'admin.blogs'])->except(['show']);

        // Admin Reviews (CRUD)
        Route::resource('reviews', AdminReviewController::class, ['names' => 'admin.reviews'])->except(['show']);

        // Admin Projects (CRUD)
        Route::resource('projects', AdminProjectController::class, ['names' => 'admin.projects'])->except(['show']);

        // Admin Analytics
        Route::get('analytics', [AdminAnalyticsController::class, 'index'])->name('admin.analytics');

        // Admin Mail (Legacy standalone mail)
        Route::get('mail', [AdminMailController::class, 'index'])->name('admin.mail');
        Route::post('mail/send', [AdminMailController::class, 'send'])->name('admin.mail.send');

        // Admin Email Templates
        Route::resource('templates', AdminTemplateController::class, ['names' => 'admin.templates']);

        // Admin Campaigns
        Route::get('campaigns', [AdminCampaignController::class, 'index'])->name('admin.campaigns.index');
        Route::get('campaigns/create', [AdminCampaignController::class, 'create'])->name('admin.campaigns.create');
        Route::post('campaigns', [AdminCampaignController::class, 'store'])->name('admin.campaigns.store');
        Route::get('campaigns/{campaign}', [AdminCampaignController::class, 'show'])->name('admin.campaigns.show');
    });
});


// SMTP Mail Testing Route
Route::get('/test-email', function () {
    $to = request()->query('to', 'suthar.haree@gmail.com');
    
    try {
        \Illuminate\Support\Facades\Mail::raw('This is a test email from Klick2Up to verify SMTP settings.', function ($message) use ($to) {
            $message->to($to)
                    ->subject('Klick2Up SMTP Test Email');
        });
        return "SMTP Test: Email successfully sent to: {$to}. Please check your inbox / spam folder.";
    } catch (\Exception $e) {
        return "SMTP Test Failed. Error message: " . $e->getMessage();
    }
});

// Fallback login route to resolve Route [login] not defined exceptions
Route::get('/login', function () {
    return redirect()->route('admin.login');
})->name('login');