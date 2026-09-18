@extends('admin.layout')

@section('title', 'Edit Project | Klick2Up')

@section('admin_content')
<div class="space-y-8 animate-fade-in-up">
    {{-- Header --}}
    <div class="flex items-center justify-between">
        <div>
            <h2 class="text-2xl font-display font-bold text-primary">Edit Project</h2>
            <p class="text-xs text-gray-400 mt-1">Modify details for the project: {{ $project->title }}</p>
        </div>
        <a href="{{ route('admin.projects.index') }}" class="inline-flex items-center gap-2 text-xs font-bold text-gray-500 hover:text-accent transition-colors">
            <i data-lucide="arrow-left" class="w-4 h-4"></i> Back to Projects
        </a>
    </div>

    {{-- Form card --}}
    <div class="bg-white rounded-3xl border border-gray-200/80 shadow-sm p-8 w-full">
        <form action="{{ route('admin.projects.update', $project->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
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
                {{-- Project Title --}}
                <div class="space-y-2">
                    <label for="title" class="block text-xs font-bold uppercase tracking-wider text-gray-400">Project Title</label>
                    <input type="text" name="title" id="title" value="{{ old('title', $project->title) }}" required class="w-full bg-gray-50 border border-gray-200 rounded-xl py-3 px-4 text-sm text-primary focus:outline-none focus:border-accent focus:ring-2 focus:ring-accent/10 transition-all placeholder-gray-400" placeholder="e.g. HealthConnect Pro">
                </div>

                {{-- Category --}}
                <div class="space-y-2">
                    <label for="category" class="block text-xs font-bold uppercase tracking-wider text-gray-400">Category</label>
                    <input type="text" name="category" id="category" value="{{ old('category', $project->category) }}" required class="w-full bg-gray-50 border border-gray-200 rounded-xl py-3 px-4 text-sm text-primary focus:outline-none focus:border-accent focus:ring-2 focus:ring-accent/10 transition-all placeholder-gray-400" placeholder="e.g. Healthcare, eCommerce">
                </div>

                {{-- Tech Stack --}}
                <div class="space-y-2">
                    <label for="tech" class="block text-xs font-bold uppercase tracking-wider text-gray-400">Tech Stack</label>
                    <input type="text" name="tech" id="tech" value="{{ old('tech', $project->tech) }}" required class="w-full bg-gray-50 border border-gray-200 rounded-xl py-3 px-4 text-sm text-primary focus:outline-none focus:border-accent focus:ring-2 focus:ring-accent/10 transition-all placeholder-gray-400" placeholder="e.g. React + Laravel, Next.js + Stripe">
                </div>

                {{-- Cover Image --}}
                <div class="space-y-2">
                    <label for="cover_image" class="block text-xs font-bold uppercase tracking-wider text-gray-400">Cover Image</label>
                    <div class="flex items-center gap-4">
                        @if($project->cover_image)
                        <img src="{{ $project->cover_image }}" alt="Current cover" class="w-20 h-12 object-cover rounded-lg border border-gray-200 shadow-sm">
                        @endif
                        <input type="file" name="cover_image" id="cover_image" accept="image/*" class="w-full bg-gray-50 border border-gray-200 rounded-xl py-2.5 px-4 text-sm text-primary focus:outline-none focus:border-accent focus:ring-2 focus:ring-accent/10 transition-all">
                    </div>
                    <p class="text-[10px] text-gray-400 mt-1 leading-relaxed">If uploaded, this will replace the current cover image. If left empty, the current image or fallback stylings will be preserved.</p>
                </div>
            </div>

            <div class="pt-6 border-t border-gray-100">
                <h3 class="text-sm font-bold text-primary mb-4">Aesthetic Fallback Stylings (If no cover image is used)</h3>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    {{-- Color Backdrop --}}
                    <div class="space-y-2">
                        <label for="color" class="block text-xs font-bold uppercase tracking-wider text-gray-400">Background Color Class</label>
                        <select name="color" id="color" class="w-full bg-gray-50 border border-gray-200 rounded-xl py-3 px-4 text-sm text-primary focus:outline-none focus:border-accent focus:ring-2 focus:ring-accent/10 transition-all">
                            <option value="bg-blue-50" {{ old('color', $project->color) == 'bg-blue-50' ? 'selected' : '' }}>Blue Backdrop</option>
                            <option value="bg-red-50" {{ old('color', $project->color) == 'bg-red-50' ? 'selected' : '' }}>Red Backdrop</option>
                            <option value="bg-amber-50" {{ old('color', $project->color) == 'bg-amber-50' ? 'selected' : '' }}>Amber Backdrop</option>
                            <option value="bg-purple-50" {{ old('color', $project->color) == 'bg-purple-50' ? 'selected' : '' }}>Purple Backdrop</option>
                            <option value="bg-indigo-50" {{ old('color', $project->color) == 'bg-indigo-50' ? 'selected' : '' }}>Indigo Backdrop</option>
                            <option value="bg-green-50" {{ old('color', $project->color) == 'bg-green-50' ? 'selected' : '' }}>Green Backdrop</option>
                            <option value="bg-gray-50" {{ old('color', $project->color) == 'bg-gray-50' ? 'selected' : '' }}>Gray Backdrop</option>
                        </select>
                    </div>

                    {{-- Lucide Icon --}}
                    <div class="space-y-2">
                        <label for="icon" class="block text-xs font-bold uppercase tracking-wider text-gray-400">Lucide Icon Name</label>
                        <input type="text" name="icon" id="icon" value="{{ old('icon', $project->icon) }}" class="w-full bg-gray-50 border border-gray-200 rounded-xl py-3 px-4 text-sm text-primary focus:outline-none focus:border-accent focus:ring-2 focus:ring-accent/10 transition-all placeholder-gray-400" placeholder="e.g. heart-pulse, truck, home">
                    </div>

                    {{-- Icon Color --}}
                    <div class="space-y-2">
                        <label for="icon_color" class="block text-xs font-bold uppercase tracking-wider text-gray-400">Icon Color Class</label>
                        <select name="icon_color" id="icon_color" class="w-full bg-gray-50 border border-gray-200 rounded-xl py-3 px-4 text-sm text-primary focus:outline-none focus:border-accent focus:ring-2 focus:ring-accent/10 transition-all">
                            <option value="text-blue-600" {{ old('icon_color', $project->icon_color) == 'text-blue-600' ? 'selected' : '' }}>Blue Text</option>
                            <option value="text-accent" {{ old('icon_color', $project->icon_color) == 'text-accent' ? 'selected' : '' }}>Accent / Red Text</option>
                            <option value="text-amber-600" {{ old('icon_color', $project->icon_color) == 'text-amber-600' ? 'selected' : '' }}>Amber Text</option>
                            <option value="text-purple-600" {{ old('icon_color', $project->icon_color) == 'text-purple-600' ? 'selected' : '' }}>Purple Text</option>
                            <option value="text-indigo-600" {{ old('icon_color', $project->icon_color) == 'text-indigo-600' ? 'selected' : '' }}>Indigo Text</option>
                            <option value="text-green-600" {{ old('icon_color', $project->icon_color) == 'text-green-600' ? 'selected' : '' }}>Green Text</option>
                            <option value="text-primary" {{ old('icon_color', $project->icon_color) == 'text-primary' ? 'selected' : '' }}>Primary Text</option>
                        </select>
                    </div>
                </div>
            </div>

            {{-- Description --}}
            <div class="space-y-2">
                <label for="desc" class="block text-xs font-bold uppercase tracking-wider text-gray-400">Project Description</label>
                <textarea name="desc" id="desc" rows="5" required class="w-full bg-gray-50 border border-gray-200 rounded-xl py-3 px-4 text-sm text-primary focus:outline-none focus:border-accent focus:ring-2 focus:ring-accent/10 transition-all placeholder-gray-400" placeholder="Type a brief description of the project, including features and solutions...">{{ old('desc', $project->desc) }}</textarea>
            </div>

            {{-- Actions --}}
            <div class="pt-4 border-t border-gray-100 flex items-center justify-end gap-3">
                <a href="{{ route('admin.projects.index') }}" class="px-6 py-3 rounded-full text-xs font-bold text-gray-500 hover:text-primary transition-all">Cancel</a>
                <button type="submit" class="bg-accent hover:bg-rose-700 text-white px-8 py-3 rounded-full font-bold text-xs transition duration-300 shadow-md hover:shadow-lg">
                    Save Changes
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
