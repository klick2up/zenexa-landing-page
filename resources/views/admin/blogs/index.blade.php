@extends('admin.layout')

@section('title', 'Manage Blog Posts | Klick2Up')

@section('admin_content')
<div class="space-y-8 animate-fade-in-up">
    {{-- Header --}}
    <div class="flex items-center justify-between">
        <div>
            <h2 class="text-2xl font-display font-bold text-primary">Blog CMS</h2>
            <p class="text-xs text-gray-400 mt-1">Add, edit, or remove articles from the public Klick2Up blog</p>
        </div>
        <a href="{{ route('admin.blogs.create') }}" class="inline-flex items-center gap-2 bg-accent hover:bg-rose-700 text-white px-6 py-3 rounded-full font-bold text-xs transition duration-300 shadow-md hover:shadow-lg">
            <i data-lucide="plus" class="w-4 h-4"></i> Write New Article
        </a>
    </div>

    {{-- Blog list table --}}
    <div class="bg-white rounded-3xl border border-gray-200/80 shadow-sm overflow-hidden">
        @if($posts->count() > 0)
        <div class="overflow-x-auto">
            <table class="w-full text-left text-xs font-medium border-collapse">
                <thead>
                    <tr class="bg-gray-50 text-gray-400 uppercase tracking-wider border-b border-gray-150">
                        <th class="px-6 py-4">Article</th>
                        <th class="px-6 py-4">Category</th>
                        <th class="px-6 py-4">Author</th>
                        <th class="px-6 py-4">Publication Date</th>
                        <th class="px-6 py-4 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @foreach($posts as $post)
                    <tr class="hover:bg-gray-50/20 transition-colors">
                        {{-- Image & Title --}}
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-4 max-w-md">
                                <img src="{{ $post->image }}" alt="{{ $post->title }}" class="w-16 h-10 rounded-lg object-cover shadow-sm border border-gray-150">
                                <div>
                                    <h4 class="text-sm font-bold text-primary line-clamp-1 hover:text-accent transition-colors"><a href="{{ route('blog.show', $post->slug) }}" target="_blank">{{ $post->title }}</a></h4>
                                    <p class="text-[10px] text-gray-400 font-light mt-0.5 line-clamp-1">{{ $post->summary }}</p>
                                </div>
                            </div>
                        </td>
                        {{-- Category Badge --}}
                        <td class="px-6 py-4">
                            <span class="px-2.5 py-1 rounded-full text-[10px] font-bold bg-primary/5 text-primary">
                                {{ $post->badge }}
                            </span>
                        </td>
                        {{-- Author info --}}
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-2">
                                <img src="{{ $post->author_avatar }}" alt="{{ $post->author_name }}" class="w-7 h-7 rounded-full object-cover shadow-sm">
                                <div>
                                    <span class="block font-bold text-primary">{{ $post->author_name }}</span>
                                    <span class="block text-[9px] text-gray-400">{{ $post->author_title }}</span>
                                </div>
                            </div>
                        </td>
                        {{-- Date --}}
                        <td class="px-6 py-4 text-gray-400">{{ $post->date }}</td>
                        {{-- Actions --}}
                        <td class="px-6 py-4">
                            <div class="flex items-center justify-center gap-2">
                                {{-- Edit button --}}
                                <a href="{{ route('admin.blogs.edit', $post->id) }}" class="p-2 rounded-lg bg-gray-50 hover:bg-gray-100 text-gray-500 hover:text-primary transition-colors" title="Edit Article">
                                    <i data-lucide="edit-3" class="w-4 h-4"></i>
                                </a>

                                {{-- Delete button --}}
                                <form action="{{ route('admin.blogs.destroy', $post->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this blog post? This action will permanently remove it from the database.');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="p-2 rounded-lg bg-red-50 hover:bg-red-100 text-red-500 hover:text-red-700 transition-colors" title="Delete Article">
                                        <i data-lucide="trash-2" class="w-4 h-4"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @else
        <div class="p-20 text-center text-gray-400 space-y-4">
            <div class="w-16 h-16 rounded-full bg-gray-50 flex items-center justify-center mx-auto text-gray-400 border border-gray-100 shadow-inner">
                <i data-lucide="book-open" class="w-8 h-8"></i>
            </div>
            <div class="space-y-1">
                <p class="text-base font-bold text-primary">No Articles Found</p>
                <p class="text-xs text-gray-400">Write your first technical article using the button above.</p>
            </div>
        </div>
        @endif
    </div>
</div>
@endsection
