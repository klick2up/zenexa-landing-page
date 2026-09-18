@extends('emails.layout')

@section('title', 'New Contact Inquiry')
@section('heading', 'New Contact Inquiry')
@section('subheading', 'Received from klick2up.com contact form')

@section('content')
    <div class="badge">New Lead</div>

    <div class="field">
        <div class="label">Name</div>
        <div class="value">{{ $data['first_name'] }} {{ $data['last_name'] ?? '' }}</div>
    </div>

    <div class="field">
        <div class="label">Email</div>
        <div class="value"><a href="mailto:{{ $data['email'] }}">{{ $data['email'] }}</a></div>
    </div>

    @if(!empty($data['service']))
    <div class="field">
        <div class="label">Service Interested In</div>
        <div class="value">{{ $data['service'] }}</div>
    </div>
    @endif

    <div class="field">
        <div class="label">Message</div>
        <div class="value message-value">{{ $data['message'] }}</div>
    </div>
@endsection
