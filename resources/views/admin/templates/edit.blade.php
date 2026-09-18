@extends('admin.layout')

@section('title', 'Edit Template - Klick2Up Admin')

@section('admin_content')
<div class="mb-8">
    <div class="flex items-center gap-3">
        <a href="{{ route('admin.templates.index') }}" class="text-gray-400 hover:text-accent transition-colors">
            <i data-lucide="arrow-left" class="w-5 h-5"></i>
        </a>
        <h2 class="text-2xl font-bold text-primary flex items-center gap-2">
            Edit Email Template
        </h2>
    </div>
    <p class="text-sm text-gray-500 mt-1 ml-8">Update your existing email template.</p>
</div>

<div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
    <div class="p-6 md:p-8">
        
        @if ($errors->any())
            <div class="mb-6 bg-red-50 border border-red-200 text-red-800 text-sm rounded-xl p-4">
                <ul class="list-disc pl-5 space-y-1">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.templates.update', $template) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <!-- Left Column: Form & Code Editor -->
                <div class="space-y-6">
                    <div class="space-y-2">
                        <label for="name" class="block text-sm font-semibold text-gray-700">Template Name <span class="text-red-500">*</span></label>
                        <input type="text" id="name" name="name" value="{{ old('name', $template->name) }}" class="w-full rounded-xl border border-gray-200 focus:border-accent focus:ring focus:ring-accent/20 transition-all p-3 text-sm outline-none bg-gray-50/50" required>
                    </div>

                    <div class="space-y-2">
                        <label for="subject" class="block text-sm font-semibold text-gray-700">Email Subject Line <span class="text-red-500">*</span></label>
                        <input type="text" id="subject" name="subject" value="{{ old('subject', $template->subject) }}" class="w-full rounded-xl border border-gray-200 focus:border-accent focus:ring focus:ring-accent/20 transition-all p-3 text-sm outline-none bg-gray-50/50" required>
                    </div>

                    <div class="space-y-2">
                        <label for="body_html" class="block text-sm font-semibold text-gray-700">HTML Source Code <span class="text-red-500">*</span></label>
                        <div class="rounded-xl border border-gray-200 overflow-hidden">
                            <textarea id="body_html" name="body_html" class="hidden">{{ old('body_html', $template->body_html) }}</textarea>
                        </div>
                        <div class="mt-2 text-xs text-gray-500 bg-gray-100 p-3 rounded-lg border border-gray-200">
                            <p class="font-semibold mb-1 text-gray-700">Available Variables:</p>
                            <ul class="list-disc pl-4 space-y-1">
                                <li><code>@{{$name}}</code> - Recipient's name</li>
                                <li><code>@{{$email}}</code> - Recipient's email address</li>
                                <li><code>@{{$company}}</code> - Recipient's company (from CSV)</li>
                            </ul>
                            <p class="mt-2 text-gray-400">Note: The system will automatically wrap this content in the official Klick2Up email header and footer.</p>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Live Preview -->
                <div class="flex flex-col h-full min-h-[400px]">
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Live Preview</label>
                    <div class="flex-grow bg-white rounded-xl border border-gray-200 overflow-hidden shadow-inner flex flex-col">
                        <div class="bg-gray-100 border-b border-gray-200 px-4 py-2 text-xs text-gray-500 flex justify-between items-center">
                            <span>Browser View</span>
                            <span>Updates automatically</span>
                        </div>
                        <iframe id="preview_iframe" class="w-full flex-grow border-0 bg-white"></iframe>
                    </div>
                </div>
            </div>

            <div class="pt-6 mt-8 border-t border-gray-100 flex items-center justify-end gap-3">
                <a href="{{ route('admin.templates.index') }}" class="px-5 py-2.5 rounded-xl text-sm font-semibold text-gray-600 hover:bg-gray-100 transition-colors">
                    Cancel
                </a>
                <button type="submit" class="flex items-center gap-2 px-6 py-2.5 rounded-xl bg-accent text-white text-sm font-semibold hover:bg-accent/90 focus:ring-4 focus:ring-accent/20 transition-all shadow-md">
                    <i data-lucide="save" class="w-4 h-4"></i> Update Template
                </button>
            </div>
        </form>

    </div>
</div>

<style>
    .CodeMirror {
        height: 400px;
        font-size: 14px;
        font-family: 'ui-monospace', 'SFMono-Regular', 'Menlo', 'Monaco', 'Consolas', 'Liberation Mono', 'Courier New', monospace;
    }
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.13/codemirror.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.13/theme/monokai.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.13/codemirror.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.13/mode/xml/xml.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.13/mode/htmlmixed/htmlmixed.min.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var textarea = document.getElementById('body_html');
        var iframe = document.getElementById('preview_iframe');
        
        var editor = CodeMirror.fromTextArea(textarea, {
            mode: "htmlmixed",
            theme: "monokai",
            lineNumbers: true,
            lineWrapping: true,
            tabSize: 4
        });

        function updatePreview() {
            var content = editor.getValue();

            // Replace variables with dummy data for the preview
            content = content.replace(/\{\{\s*\$name\s*\}\}/g, 'John Doe');
            content = content.replace(/\{\{\s*\$email\s*\}\}/g, 'john@example.com');
            content = content.replace(/\{\{\s*\$company\s*\}\}/g, 'Acme Corp');

            // Wrap the content in the official email header and footer
            iframe.srcdoc = `
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
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
                <img src="{{ asset('assets/logo.png') }}" alt="Klick2Up">
            </div>
            <div class="content">
                <p style="font-size: 18px; font-weight: 600; color: #111827; margin-bottom: 24px;">Hi John Doe,</p>
                ${content}
            </div>
            <div class="footer">
                <p>&copy; ${new Date().getFullYear()} Klick2Up Technology. All rights reserved.</p>
                <div class="contact-info" style="margin-top: 15px; font-size: 13px; color: #6b7280; line-height: 1.8;">
                    <span style="display: block;">📍 Ahmedabad, Gujarat, India</span>
                    <span style="display: block;">✉️ <a href="mailto:sales@klick2up.com" style="color: #6b7280; text-decoration: none;">sales@klick2up.com</a></span>
                    <span style="display: block;">📞 <a href="tel:+919521574858" style="color: #6b7280; text-decoration: none;">+91 9521574858</a></span>
                </div>
                <div class="social">
                    <p>Visit us at <a href="https://klick2up.com">klick2up.com</a></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
            `;
        }

        editor.on("change", function() {
            updatePreview();
        });

        // Initial preview
        updatePreview();
    });
</script>
@endsection
