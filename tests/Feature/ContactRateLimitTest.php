<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\RateLimiter;
use Tests\TestCase;

class ContactRateLimitTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        // Clear rate limiter cache before each test
        RateLimiter::clear('contact-submit:127.0.0.1');
    }

    public function test_contact_page_is_accessible(): void
    {
        $response = $this->get('/contact');
        $response->assertStatus(200);
    }

    public function test_contact_submissions_are_rate_limited(): void
    {
        // First 3 requests should be successful (redirect back with success)
        for ($i = 1; $i <= 3; $i++) {
            $response = $this->post('/contact', [
                'first_name' => "User{$i}",
                'last_name' => 'Test',
                'email' => "user{$i}@example.com",
                'service' => 'Web Development',
                'message' => 'Hello, this is a test message that has more than ten characters.',
            ]);

            $response->assertRedirect(route('contact'));
            $response->assertSessionHas('success');
            $response->assertSessionHasNoErrors();
        }

        // 4th request should be rate limited (redirect back with rate limit error)
        $response = $this->post('/contact', [
            'first_name' => 'User4',
            'last_name' => 'Test',
            'email' => 'user4@example.com',
            'service' => 'Web Development',
            'message' => 'Hello, this is another test message that has more than ten characters.',
        ]);

        $response->assertRedirect();
        $response->assertSessionHas('error');
        $this->assertStringContainsString('Too many requests', session('error'));
    }
}
