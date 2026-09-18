<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Klick2Up Mail</title>
    <style>
        body {
            font-family: 'Helvetica Neue', Arial, sans-serif;
            background-color: #f3f4f6;
            margin: 0;
            padding: 0;
            color: #374151;
            -webkit-font-smoothing: antialiased;
        }
        .wrapper {
            padding: 40px 20px;
            background-color: #f3f4f6;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background: #ffffff;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -1px rgba(0, 0, 0, 0.03);
            border: 1px solid #e5e7eb;
        }
        .header {
            background-color: #ffffff;
            padding: 35px 20px 30px;
            text-align: center;
            border-bottom: 1px solid #f3f4f6;
        }
        .header img {
            max-height: 45px;
            display: block;
            margin: 0 auto;
        }
        .content {
            padding: 40px 30px;
            font-size: 16px;
            line-height: 1.7;
            color: #4b5563;
        }
        .content p {
            margin-bottom: 16px;
        }
        .footer {
            background-color: #f9fafb;
            padding: 30px;
            text-align: center;
            font-size: 13px;
            color: #6b7280;
            border-top: 1px solid #f3f4f6;
        }
        .footer p {
            margin: 5px 0;
        }
        .footer a {
            color: #4f46e5;
            text-decoration: none;
            font-weight: 500;
        }
        .footer .social {
            margin-top: 20px;
            padding-top: 20px;
            border-top: 1px solid #e5e7eb;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <div class="header">
                <img src="{{ $message->embed(public_path('assets/logo.png')) }}" alt="Klick2Up">
            </div>
            <div class="content">
                @if(isset($name) && $name !== 'Customer')
                    <p style="font-size: 18px; font-weight: 600; color: #111827; margin-bottom: 24px;">Hi {{ $name }},</p>
                @endif
                {!! $messageBody !!}
            </div>
            <div class="footer">
                <p>&copy; {{ date('Y') }} Klick2Up Technology. All rights reserved.</p>
                <div class="contact-info" style="margin-top: 15px; font-size: 13px; color: #6b7280; line-height: 1.8;">
                    <span style="display: block;">📍 Ahmedabad, Gujarat, India</span>
                    <span style="display: block;">✉️ <a href="mailto:sales@klick2up.com" style="color: #6b7280; text-decoration: none;">sales@klick2up.com</a></span>
                    <span style="display: block;">📞 <a href="tel:+919521574858" style="color: #6b7280; text-decoration: none;">+91 9521574858</a></span>
                </div>
                <div class="social">
                    <p>Visit us at <a href="https://klick2up.com{{ isset($campaignName) && $campaignName ? '?utm_source=email&utm_campaign=' . $campaignName : '' }}">klick2up.com</a></p>
                </div>
            </div>
        </div>
    </div>
    @if(isset($tracker) && $tracker)
        <img src="{{ route('email.track', $tracker) }}" width="1" height="1" border="0" alt="" style="position: absolute; width: 1px; height: 1px; opacity: 0; pointer-events: none;">
    @endif
</body>
</html>
