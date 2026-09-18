@extends('admin.layout')

@section('title', 'Edit Blog Post | Klick2Up')

@section('admin_content')
<!-- Quill Rich Text Editor Styles -->
<link href="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.snow.css" rel="stylesheet" />

<style>
    /* Quill custom styling to match our UI */
    .ql-toolbar.ql-snow {
        border-top-left-radius: 16px;
        border-top-right-radius: 16px;
        border-color: #e2e8f0;
        background: #f8fafc;
    }
    .ql-container.ql-snow {
        border-bottom-left-radius: 16px;
        border-bottom-right-radius: 16px;
        border-color: #e2e8f0;
        font-family: 'Inter', sans-serif;
        font-size: 14px;
        min-height: 240px;
    }
</style>

<div class="space-y-8 animate-fade-in-up">
    {{-- Header --}}
    <div class="flex items-center justify-between">
        <div>
            <h2 class="text-2xl font-display font-bold text-primary">Edit Article</h2>
            <p class="text-xs text-gray-400 mt-1">Modify article fields or content layouts of the active post</p>
        </div>
        <a href="{{ route('admin.blogs.index') }}" class="inline-flex items-center gap-2 text-xs font-bold text-gray-500 hover:text-accent transition-colors">
            <i data-lucide="arrow-left" class="w-4 h-4"></i> Back to Blogs
        </a>
    </div>

    {{-- Form card --}}
    <div class="bg-white rounded-3xl border border-gray-200/80 shadow-sm p-8 w-full">
        <form id="blog-form" action="{{ route('admin.blogs.update', $post->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf
            @method('PUT')

            @if($errors->any())
            <div class="bg-red-50 border border-red-200 text-red-800 text-xs rounded-2xl p-4 space-y-1">
                @foreach ($errors->all() as $error)
                    <p class="font-semibold flex items-center gap-1.5"><i data-lucide="alert-circle" class="w-4 h-4 text-red-500"></i> {{ $error }}</p>
                @endforeach
            </div>
            @endif

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                {{-- Title --}}
                <div class="space-y-2">
                    <label for="title" class="block text-xs font-bold uppercase tracking-wider text-gray-400">Article Title</label>
                    <input type="text" name="title" id="title" value="{{ old('title', $post->title) }}" required class="w-full bg-gray-50 border border-gray-200 rounded-xl py-3 px-4 text-sm text-primary focus:outline-none focus:border-accent focus:ring-2 focus:ring-accent/10 transition-all placeholder-gray-400" placeholder="e.g. The Future of PHP Architectures">
                </div>

                {{-- Slug --}}
                <div class="space-y-2">
                    <label for="slug" class="block text-xs font-bold uppercase tracking-wider text-gray-400">Custom URL Slug (Optional)</label>
                    <input type="text" name="slug" id="slug" value="{{ old('slug', $post->slug) }}" class="w-full bg-gray-50 border border-gray-200 rounded-xl py-3 px-4 text-sm text-primary focus:outline-none focus:border-accent focus:ring-2 focus:ring-accent/10 transition-all placeholder-gray-400" placeholder="e.g. future-of-php-architectures">
                </div>

                {{-- Category Badge --}}
                <div class="space-y-2">
                    <label for="badge" class="block text-xs font-bold uppercase tracking-wider text-gray-400">Category Badge</label>
                    <select name="badge" id="badge" required class="w-full bg-gray-50 border border-gray-200 rounded-xl py-3 px-4 text-sm text-primary focus:outline-none focus:border-accent focus:ring-2 focus:ring-accent/10 transition-all">
                        <option value="Laravel" {{ old('badge', $post->badge) == 'Laravel' ? 'selected' : '' }}>Laravel</option>
                        <option value="ReactJS" {{ old('badge', $post->badge) == 'ReactJS' ? 'selected' : '' }}>ReactJS</option>
                        <option value="NodeJS" {{ old('badge', $post->badge) == 'NodeJS' ? 'selected' : '' }}>NodeJS</option>
                        <option value="ERP" {{ old('badge', $post->badge) == 'ERP' ? 'selected' : '' }}>ERP</option>
                        <option value="AI" {{ old('badge', $post->badge) == 'AI' ? 'selected' : '' }}>AI</option>
                        <option value="Design" {{ old('badge', $post->badge) == 'Design' ? 'selected' : '' }}>Design</option>
                        <option value="Growth" {{ old('badge', $post->badge) == 'Growth' ? 'selected' : '' }}>Growth</option>
                    </select>
                </div>

                {{-- Image Cover --}}
                <div class="space-y-2">
                    <label for="image" class="block text-xs font-bold uppercase tracking-wider text-gray-400">Cover Image (Leave empty to keep existing)</label>
                    <input type="file" name="image" id="image" accept="image/*" class="w-full bg-gray-50 border border-gray-200 rounded-xl py-2.5 px-4 text-sm text-primary focus:outline-none focus:border-accent focus:ring-2 focus:ring-accent/10 transition-all">
                    @if($post->image)
                        <span class="text-[10px] text-gray-400 block mt-1 font-semibold">Active: <a href="{{ $post->image }}" target="_blank" class="text-accent underline hover:text-rose-700">View Current Image</a></span>
                    @endif
                </div>

                {{-- Author Name --}}
                <div class="space-y-2">
                    <label for="author_name" class="block text-xs font-bold uppercase tracking-wider text-gray-400">Author Name</label>
                    <input type="text" name="author_name" id="author_name" value="{{ old('author_name', $post->author_name) }}" required class="w-full bg-gray-50 border border-gray-200 rounded-xl py-3 px-4 text-sm text-primary focus:outline-none focus:border-accent focus:ring-2 focus:ring-accent/10 transition-all placeholder-gray-400" placeholder="e.g. Hardik Patel">
                </div>

                {{-- Author Title --}}
                <div class="space-y-2">
                    <label for="author_title" class="block text-xs font-bold uppercase tracking-wider text-gray-400">Author Title</label>
                    <input type="text" name="author_title" id="author_title" value="{{ old('author_title', $post->author_title) }}" required class="w-full bg-gray-50 border border-gray-200 rounded-xl py-3 px-4 text-sm text-primary focus:outline-none focus:border-accent focus:ring-2 focus:ring-accent/10 transition-all placeholder-gray-400" placeholder="e.g. Lead PHP Architect">
                </div>

                {{-- Author Avatar --}}
                <div class="space-y-2 md:col-span-2">
                    <label for="author_avatar" class="block text-xs font-bold uppercase tracking-wider text-gray-400">Author Avatar Image (Leave empty to keep existing)</label>
                    <input type="file" name="author_avatar" id="author_avatar" accept="image/*" class="w-full bg-gray-50 border border-gray-200 rounded-xl py-2.5 px-4 text-sm text-primary focus:outline-none focus:border-accent focus:ring-2 focus:ring-accent/10 transition-all">
                    @if($post->author_avatar)
                        <span class="text-[10px] text-gray-400 block mt-1 font-semibold">Active: <a href="{{ $post->author_avatar }}" target="_blank" class="text-accent underline hover:text-rose-700">View Current Avatar</a></span>
                    @endif
                </div>
            </div>

            {{-- Summary Excerpt --}}
            <div class="space-y-2">
                <label for="summary" class="block text-xs font-bold uppercase tracking-wider text-gray-400">Short Summary Excerpt</label>
                <textarea name="summary" id="summary" rows="3" required class="w-full bg-gray-50 border border-gray-200 rounded-xl py-3 px-4 text-sm text-primary focus:outline-none focus:border-accent focus:ring-2 focus:ring-accent/10 transition-all placeholder-gray-400" placeholder="A single paragraph summarizing the post for cards...">{{ old('summary', $post->summary) }}</textarea>
            </div>

            {{-- Body Content (Rich Text) --}}
            <div class="space-y-2">
                <label class="block text-xs font-bold uppercase tracking-wider text-gray-400">Article Body Content</label>
                
                {{-- Quill editor host --}}
                <div id="quill-editor" class="bg-white"></div>
                
                {{-- Hidden input to transmit raw HTML --}}
                <input type="hidden" name="body_content" id="body_content">
            </div>

            {{-- Submit --}}
            <div class="flex justify-end gap-3 pt-4 border-t border-gray-100">
                <a href="{{ route('admin.blogs.index') }}" class="px-6 py-3 rounded-full text-xs font-bold border border-gray-200 text-gray-500 hover:bg-gray-50 transition">
                    Cancel
                </a>
                <button type="submit" class="bg-accent hover:bg-rose-700 text-white px-8 py-3 rounded-full font-bold text-xs transition duration-300 shadow-md hover:shadow-lg flex items-center gap-2">
                    <i data-lucide="save" class="w-4 h-4"></i> Save Changes
                </button>
            </div>
        </form>
    </div>
</div>

<!-- Quill Rich Text Editor Script -->
<script src="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize Quill WYSIWYG
        const quill = new Quill('#quill-editor', {
            theme: 'snow',
            modules: {
                toolbar: [
                    [{ 'header': [1, 2, 3, false] }],
                    ['bold', 'italic', 'underline', 'strike'],
                    ['blockquote', 'code-block'],
                    [{ 'list': 'ordered'}, { 'list': 'bullet' }],
                    ['link', 'clean']
                ]
            }
        });

        // Set editing post's HTML content
        quill.root.innerHTML = {!! json_encode(old('body_content', $bodyContent)) !!};

        // Sync HTML to hidden input on form submit
        const form = document.getElementById('blog-form');
        form.addEventListener('submit', function(e) {
            const htmlContent = quill.root.innerHTML;
            
            // If Quill has only empty paragraph tags, mark as blank
            if (htmlContent === '<p><br></p>' || htmlContent.trim() === '') {
                document.getElementById('body_content').value = '';
            } else {
                document.getElementById('body_content').value = htmlContent;
            }
        });
    });
</script>
@endsection
