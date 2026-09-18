<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class AdminProjectController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->get();
        return view('admin.projects.index', compact('projects'));
    }

    public function create()
    {
        return view('admin.projects.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'       => ['required', 'string', 'max:255'],
            'category'    => ['required', 'string', 'max:100'],
            'tech'        => ['required', 'string', 'max:100'],
            'color'       => ['nullable', 'string', 'max:50'],
            'icon'        => ['nullable', 'string', 'max:50'],
            'icon_color'  => ['nullable', 'string', 'max:50'],
            'cover_image' => ['nullable', 'image', 'max:2048'],
            'desc'        => ['required', 'string'],
        ]);

        $coverImagePath = null;
        if ($request->hasFile('cover_image')) {
            $file = $request->file('cover_image');
            $filename = time() . '_project_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/projects'), $filename);
            $coverImagePath = asset('uploads/projects/' . $filename);
        }

        Project::create([
            'title'       => $validated['title'],
            'category'    => $validated['category'],
            'tech'        => $validated['tech'],
            'color'       => $validated['color'] ?: 'bg-red-50',
            'icon'        => $validated['icon'] ?: 'briefcase',
            'icon_color'  => $validated['icon_color'] ?: 'text-accent',
            'cover_image' => $coverImagePath,
            'desc'        => $validated['desc'],
        ]);

        return redirect()->route('admin.projects.index')->with('success', 'Project successfully created.');
    }

    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        $validated = $request->validate([
            'title'       => ['required', 'string', 'max:255'],
            'category'    => ['required', 'string', 'max:100'],
            'tech'        => ['required', 'string', 'max:100'],
            'color'       => ['nullable', 'string', 'max:50'],
            'icon'        => ['nullable', 'string', 'max:50'],
            'icon_color'  => ['nullable', 'string', 'max:50'],
            'cover_image' => ['nullable', 'image', 'max:2048'],
            'desc'        => ['required', 'string'],
        ]);

        $coverImagePath = $project->cover_image;
        if ($request->hasFile('cover_image')) {
            $file = $request->file('cover_image');
            $filename = time() . '_project_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/projects'), $filename);
            $coverImagePath = asset('uploads/projects/' . $filename);
        }

        $project->update([
            'title'       => $validated['title'],
            'category'    => $validated['category'],
            'tech'        => $validated['tech'],
            'color'       => $validated['color'] ?: 'bg-red-50',
            'icon'        => $validated['icon'] ?: 'briefcase',
            'icon_color'  => $validated['icon_color'] ?: 'text-accent',
            'cover_image' => $coverImagePath,
            'desc'        => $validated['desc'],
        ]);

        return redirect()->route('admin.projects.index')->with('success', 'Project successfully updated.');
    }

    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('admin.projects.index')->with('success', 'Project successfully deleted.');
    }
}
