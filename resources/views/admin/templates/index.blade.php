@extends('admin.layout')

@section('title', 'Email Templates - Klick2Up Admin')

@section('admin_content')
<div class="flex items-center justify-between mb-8">
    <div>
        <h2 class="text-2xl font-bold text-primary flex items-center gap-2">
            <i data-lucide="layout-template" class="w-6 h-6"></i> Email Templates
        </h2>
        <p class="text-sm text-gray-500 mt-1">Manage reusable email templates for your campaigns.</p>
    </div>
    <a href="{{ route('admin.templates.create') }}" class="flex items-center gap-2 px-5 py-2.5 rounded-xl bg-accent text-white text-sm font-semibold hover:bg-accent/90 transition-all shadow-md">
        <i data-lucide="plus" class="w-4 h-4"></i> Create Template
    </a>
</div>

<div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
    <div class="p-6 md:p-8">
        @if($templates->isEmpty())
            <div class="text-center py-10">
                <i data-lucide="file-text" class="w-12 h-12 text-gray-300 mx-auto mb-3"></i>
                <h3 class="text-lg font-semibold text-gray-800">No templates found</h3>
                <p class="text-sm text-gray-500 mt-1">You haven't created any email templates yet.</p>
            </div>
        @else
            <div class="overflow-x-auto">
                <table class="w-full text-left text-sm text-gray-600">
                    <thead class="text-xs uppercase bg-gray-50/50 text-gray-700">
                        <tr>
                            <th class="px-6 py-4 font-bold rounded-tl-xl">Template Name</th>
                            <th class="px-6 py-4 font-bold">Subject Line</th>
                            <th class="px-6 py-4 font-bold">Created At</th>
                            <th class="px-6 py-4 font-bold rounded-tr-xl text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        @foreach($templates as $template)
                        <tr class="hover:bg-gray-50/50 transition-colors">
                            <td class="px-6 py-4 font-medium text-gray-900">{{ $template->name }}</td>
                            <td class="px-6 py-4">{{ $template->subject }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $template->created_at->format('M d, Y') }}</td>
                            <td class="px-6 py-4 text-right">
                                <div class="flex items-center justify-end gap-2">
                                    <a href="{{ route('admin.templates.show', $template) }}" target="_blank" class="p-2 text-indigo-500 hover:bg-indigo-50 rounded-lg transition-colors" title="Preview">
                                        <i data-lucide="eye" class="w-4 h-4"></i>
                                    </a>
                                    <a href="{{ route('admin.templates.edit', $template) }}" class="p-2 text-blue-500 hover:bg-blue-50 rounded-lg transition-colors" title="Edit">
                                        <i data-lucide="edit-2" class="w-4 h-4"></i>
                                    </a>
                                    <form action="{{ route('admin.templates.destroy', $template) }}" method="POST" class="inline-block" onsubmit="return confirm('Are you sure you want to delete this template?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="p-2 text-red-500 hover:bg-red-50 rounded-lg transition-colors" title="Delete">
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
        @endif
    </div>
</div>
@endsection
