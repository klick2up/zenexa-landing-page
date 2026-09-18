<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\EmailTemplate;

class AdminTemplateController extends Controller
{
    public function index()
    {
        $templates = EmailTemplate::latest()->get();
        return view('admin.templates.index', compact('templates'));
    }

    public function create()
    {
        return view('admin.templates.create');
    }

    public function show(EmailTemplate $template)
    {
        // Replace sample variables for the preview
        $subject = str_replace(['{{$name}}', '{{$email}}', '{{$company}}'], ['John Doe', 'john@example.com', 'Acme Corp'], $template->subject);
        $body = str_replace(['{{$name}}', '{{$email}}', '{{$company}}'], ['John Doe', 'john@example.com', 'Acme Corp'], $template->body_html);

        return new \App\Mail\MarketingMail($subject, $body, 'John Doe');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'subject' => 'required|string|max:255',
            'body_html' => 'required|string',
        ]);

        EmailTemplate::create($request->all());

        return redirect()->route('admin.templates.index')->with('success', 'Template created successfully.');
    }

    public function edit(EmailTemplate $template)
    {
        return view('admin.templates.edit', compact('template'));
    }

    public function update(Request $request, EmailTemplate $template)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'subject' => 'required|string|max:255',
            'body_html' => 'required|string',
        ]);

        $template->update($request->all());

        return redirect()->route('admin.templates.index')->with('success', 'Template updated successfully.');
    }

    public function destroy(EmailTemplate $template)
    {
        $template->delete();
        return redirect()->route('admin.templates.index')->with('success', 'Template deleted successfully.');
    }
}
