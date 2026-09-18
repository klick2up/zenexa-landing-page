@extends('admin.layout')

@section('title', 'Manage Projects & Portfolio | Klick2Up')

@section('admin_content')
<div class="space-y-8 animate-fade-in-up">
    {{-- Header --}}
    <div class="flex items-center justify-between">
        <div>
            <h2 class="text-2xl font-display font-bold text-primary">Portfolio Projects</h2>
            <p class="text-xs text-gray-400 mt-1">Manage project cards rendered on the public portfolio page</p>
        </div>
        <a href="{{ route('admin.projects.create') }}" class="inline-flex items-center gap-2 bg-accent hover:bg-rose-700 text-white px-6 py-3 rounded-full font-bold text-xs transition duration-300 shadow-md hover:shadow-lg">
            <i data-lucide="plus" class="w-4 h-4"></i> Add Project
        </a>
    </div>

    {{-- Projects list table --}}
    <div class="bg-white rounded-3xl border border-gray-200/80 shadow-sm overflow-hidden">
        @if($projects->count() > 0)
        <div class="overflow-x-auto">
            <table class="w-full text-left text-xs font-medium border-collapse">
                <thead>
                    <tr class="bg-gray-50 text-gray-400 uppercase tracking-wider border-b border-gray-150">
                        <th class="px-6 py-4">Preview</th>
                        <th class="px-6 py-4">Project Details</th>
                        <th class="px-6 py-4">Tech Stack</th>
                        <th class="px-6 py-4">Icon Stylings</th>
                        <th class="px-6 py-4 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @foreach($projects as $project)
                    <tr class="hover:bg-gray-50/20 transition-colors">
                        {{-- Cover image preview --}}
                        <td class="px-6 py-4 whitespace-nowrap">
                            @if($project->cover_image)
                            <img src="{{ $project->cover_image }}" alt="{{ $project->title }}" class="w-16 h-10 object-cover rounded-lg shadow-sm border border-gray-200">
                            @else
                            <div class="w-16 h-10 rounded-lg {{ $project->color }} flex items-center justify-center border border-gray-200">
                                <i data-lucide="{{ $project->icon }}" class="w-5 h-5 {{ $project->icon_color }}"></i>
                            </div>
                            @endif
                        </td>

                        {{-- Title & Category --}}
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div>
                                <span class="block font-bold text-primary text-sm">{{ $project->title }}</span>
                                <span class="block text-[10px] text-accent font-bold uppercase tracking-wider mt-0.5">{{ $project->category }}</span>
                            </div>
                        </td>

                        {{-- Tech Stack --}}
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2.5 py-1 rounded-md bg-gray-100 text-gray-500 font-mono text-[10px] border border-gray-200/50">
                                {{ $project->tech }}
                            </span>
                        </td>

                        {{-- Stylings --}}
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center gap-2">
                                <span class="px-2 py-0.5 rounded text-[10px] font-mono {{ $project->color }} border border-gray-250">
                                    {{ $project->color }}
                                </span>
                                <span class="text-gray-400 font-mono text-[10px]">
                                    {{ $project->icon }}
                                </span>
                            </div>
                        </td>

                        {{-- Actions --}}
                        <td class="px-6 py-4 whitespace-nowrap text-center">
                            <div class="flex items-center justify-center gap-2">
                                {{-- Edit button --}}
                                <a href="{{ route('admin.projects.edit', $project->id) }}" class="p-2 rounded-lg bg-gray-50 hover:bg-gray-100 text-gray-500 hover:text-primary transition-colors" title="Edit Project">
                                    <i data-lucide="edit-3" class="w-4 h-4"></i>
                                </a>

                                {{-- Delete button --}}
                                <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this project? It will immediately stop showing on the portfolio page.');" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="p-2 rounded-lg bg-red-50 hover:bg-red-100 text-red-500 hover:text-red-700 transition-colors" title="Delete Project">
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
        <div class="text-center py-16 space-y-4">
            <div class="w-14 h-14 bg-red-50 text-accent rounded-full flex items-center justify-center mx-auto shadow-inner">
                <i data-lucide="briefcase" class="w-7 h-7"></i>
            </div>
            <div>
                <h3 class="text-base font-bold text-primary">No Projects Found</h3>
                <p class="text-xs text-gray-400 mt-1 max-w-sm mx-auto leading-relaxed">No portfolio items have been added to the database yet.</p>
            </div>
            <a href="{{ route('admin.projects.create') }}" class="inline-flex items-center gap-2 bg-accent hover:bg-rose-700 text-white px-5 py-2.5 rounded-full font-bold text-xs transition duration-300 shadow-md hover:shadow-lg">
                <i data-lucide="plus" class="w-4 h-4"></i> Add Your First Project
            </a>
        </div>
        @endif
    </div>
</div>
@endsection
