<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Klick2Up')</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; background: #f8fafc; margin: 0; padding: 20px; }
        .container { max-width: 600px; margin: 0 auto; background: white; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 20px rgba(0,0,0,0.08); }
        /* Logo Bar */
        .logo-bar { background: #0A1F44; padding: 20px 32px; text-align: center; }
        .logo-bar img { max-height: 40px; }
        .logo-bar .logo-text { color: white; font-size: 24px; font-weight: bold; letter-spacing: 1px; text-decoration: none; }
        .logo-bar .logo-text span { color: #C11F25; }
        /* Header */
        .header { background: #0A1F44; padding: 0 32px 24px; }
        .header h1 { color: white; margin: 0; font-size: 22px; }
        .header p { color: rgba(255,255,255,0.6); margin: 4px 0 0; font-size: 13px; }
        /* Body */
        .body { padding: 32px; }
        .field { margin-bottom: 20px; }
        .label { font-size: 11px; font-weight: bold; text-transform: uppercase; letter-spacing: 0.08em; color: #C11F25; margin-bottom: 6px; }
        .value { font-size: 15px; color: #0A1F44; font-weight: 500; background: #f8fafc; padding: 12px 16px; border-radius: 8px; border: 1px solid #e2e8f0; }
        .message-value { white-space: pre-wrap; }
        .badge { display: inline-block; background: #C11F25; color: white; font-size: 11px; font-weight: bold; padding: 4px 10px; border-radius: 20px; margin-bottom: 16px; }
        .intro { font-size: 15px; color: #0A1F44; margin-bottom: 24px; font-weight: normal; }
        .signoff { margin-top: 24px; font-size: 14px; color: #0A1F44; }
        @yield('extra-styles')
        /* Footer */
        .footer { padding: 24px 32px; background: #0A1F44; text-align: center; }
        .footer-links { margin-bottom: 12px; }
        .footer-links a { color: #C11F25; text-decoration: none; font-size: 13px; font-weight: bold; margin: 0 10px; }
        .footer-divider { border: none; border-top: 1px solid rgba(255,255,255,0.1); margin: 16px 0; }
        .footer-text { font-size: 11px; color: rgba(255,255,255,0.5); line-height: 1.8; }
        .footer-text a { color: rgba(255,255,255,0.7); text-decoration: none; }
        .footer-social a { display: inline-block; margin: 0 6px; color: rgba(255,255,255,0.6); font-size: 13px; text-decoration: none; }
    </style>
</head>
<body>
    <div class="container">
        {{-- Logo Bar --}}
        <div class="logo-bar">
            <a href="{{ url('/') }}" class="logo-text">Klick<span>2</span>Up</a>
        </div>

        {{-- Header --}}
        <div class="header">
            <h1>@yield('heading')</h1>
            <p>@yield('subheading')</p>
        </div>

        {{-- Body Content --}}
        <div class="body">
            @yield('content')
        </div>

        {{-- Footer --}}
        <div class="footer">
            <div class="footer-links">
                <a href="{{ url('/') }}">Home</a>
                <a href="{{ url('/services') }}">Services</a>
                <a href="{{ url('/portfolio') }}">Portfolio</a>
                <a href="{{ url('/contact') }}">Contact</a>
            </div>
            <hr class="footer-divider">
            <div class="footer-text">
                &copy; {{ date('Y') }} Klick2Up. All rights reserved.<br>
                Ahmedabad, Gujarat, India<br>
                <a href="{{ url('/') }}">klick2up.com</a>
            </div>
        </div>
    </div>
</body>
</html>
