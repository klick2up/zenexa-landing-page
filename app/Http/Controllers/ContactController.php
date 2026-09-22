<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use App\Models\Lead;
use Illuminate\Support\Facades\RateLimiter;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function submit(Request $request)
    {
        $key = 'contact-submit:' . $request->ip();

        if (RateLimiter::tooManyAttempts($key, 3)) {
            $seconds = RateLimiter::availableIn($key);
            return redirect()->back()
                ->withInput()
                ->with('error', 'Too many requests. Please try again in ' . $seconds . ' seconds.');
        }

        RateLimiter::hit($key, 60);

        $validated = $request->validate([
            'first_name' => ['required', 'string', 'max:100'],
            'last_name'  => ['nullable', 'string', 'max:100'],
            'email'      => ['required', 'email', 'max:255'],
            'service'    => ['nullable', 'string', 'max:200'],
            'message'    => ['required', 'string', 'min:10', 'max:5000'],
            'captcha'    => ['required', 'captcha'],
            'website'    => ['nullable', 'max:0'],
        ], [
            'captcha.required' => 'Please enter the verification code.',
            'captcha.captcha'  => 'Invalid verification code. Please try again.',
        ]);
        // check 
        if($validated["website"]!=null)
        {
            return redirect()->route('contact')->with('error', 'Spam detected. We cannot accept your inquiry. Please remove your website and try again.');
        }
        if(Lead::where("email",$validated["email"])->first())
        {
            return redirect()->route('contact')->with('error', 'You have already submitted an inquiry. We will respond within 2–4 hours.');
        }
   
        Lead::create($validated);

        // Log the inquiry (mail driver can be configured in .env)
        Log::info('Contact Form Submission', $validated);

        // Send email notification to admin
        try {
            Mail::send('emails.contact-inquiry', ['data' => $validated], function ($mail) use ($validated) {
                $mail->to('sales@klick2up.com')
                     ->subject('New Contact Inquiry — ' . ($validated['service'] ?? 'General Inquiry'))
                     ->replyTo($validated['email'], $validated['first_name'] . ' ' . ($validated['last_name'] ?? ''));
            });
        } catch (\Exception $e) {
            Log::error('Contact form admin mail failed: ' . $e->getMessage());
        }

        // Send confirmation email to customer
        try {
            Mail::send('emails.contact-confirmation', ['data' => $validated], function ($mail) use ($validated) {
                $mail->to($validated['email'], $validated['first_name'] . ' ' . ($validated['last_name'] ?? ''))
                     ->subject('We have received your inquiry | Klick2Up');
            });
        } catch (\Exception $e) {
            Log::error('Contact form customer confirmation mail failed: ' . $e->getMessage());
        }

        return redirect()->route('contact')->with('success', 'Thank you! Your inquiry has been submitted. We\'ll respond within 2–4 hours.');
    }
}