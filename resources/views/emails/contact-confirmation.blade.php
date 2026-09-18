@extends('emails.layout')

@section('title', 'Inquiry Confirmation | Klick2Up')
@section('heading', "We've Received Your Inquiry")
@section('subheading', 'Klick2Up - Premium IT Services')

@section('content')
    <div class="badge">Inquiry Confirmed</div>

    <p class="intro">
        Hi {{ $data['first_name'] }},<br><br>
        Thank you for contacting Klick2Up. We have received your inquiry, and our engineering team will get back to you within 2–4 hours for a free consultation and project estimate.
    </p>

    <div class="field">
        <div class="label">A copy of your submission</div>
    </div>

    @if(!empty($data['service']))
    <div class="field">
        <div class="label">Service of Interest</div>
        <div class="value">{{ $data['service'] }}</div>
    </div>
    @endif

    <div class="field">
        <div class="label">Message Submitted</div>
        <div class="value message-value">{{ $data['message'] }}</div>
    </div>

    <p class="signoff">
        Regards,<br>
        <strong>The Klick2Up Team</strong><br>
        <span style="font-size: 12px; color: #64748b;">Ahmedabad, Gujarat, India</span>
    </p>
@endsection
