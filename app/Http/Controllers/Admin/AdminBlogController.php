<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminBlogController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->get();
        return view('admin.blogs.index', compact('posts'));
    }

    public function create()
    {
        return view('admin.blogs.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'         => ['required', 'string', 'max:255'],
            'slug'          => ['nullable', 'string', 'max:255', 'unique:posts,slug'],
            'badge'         => ['required', 'string', 'max:50'],
            'author_name'   => ['required', 'string', 'max:100'],
            'author_title'  => ['required', 'string', 'max:100'],
            'author_avatar' => ['nullable', 'image', 'max:1024'],
            'image'         => ['nullable', 'image', 'max:2048'],
            'summary'       => ['required', 'string', 'max:1000'],
            'body_content'  => ['required', 'string'],
        ]);

        $slug = $validated['slug'] ?: Str::slug($validated['title']);
        
        $avatar = 'https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?w=120&h=120&fit=crop&q=80';
        if ($request->hasFile('author_avatar')) {
            $file = $request->file('author_avatar');
            $filename = time() . '_author_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/authors'), $filename);
            $avatar = asset('uploads/authors/' . $filename);
        }

        $postImage = 'https://images.unsplash.com/photo-1555066931-4365d14bab8c?w=800&auto=format&fit=crop&q=80';
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_blog_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/blogs'), $filename);
            $postImage = asset('uploads/blogs/' . $filename);
        }
      
        Post::create([
            'title'         => $validated['title'],
            'slug'          => $slug,
            'badge'         => $validated['badge'],
            'date'          => date('F d, Y'),
            'author_name'   => $validated['author_name'],
            'author_title'  => $validated['author_title'],
            'author_avatar' => $avatar,
            'image'         => $postImage,
            'summary'       => $validated['summary'],
            'content'       => $validated['body_content'],
        ]);

        return redirect()->route('admin.blogs.index')->with('success', 'Blog post successfully created.');
    }

    public function edit(Post $blog)
    {
        $post = $blog;
        $bodyContent = $post->content;
        return view('admin.blogs.edit', compact('post', 'bodyContent'));
    }

    public function update(Request $request, Post $blog)
    {
        $post = $blog;
        $validated = $request->validate([
            'title'         => ['required', 'string', 'max:255'],
            'slug'          => ['nullable', 'string', 'max:255', 'unique:posts,slug,' . $post->id],
            'badge'         => ['required', 'string', 'max:50'],
            'author_name'   => ['required', 'string', 'max:100'],
            'author_title'  => ['required', 'string', 'max:100'],
            'author_avatar' => ['nullable', 'image', 'max:1024'],
            'image'         => ['nullable', 'image', 'max:2048'],
            'summary'       => ['required', 'string', 'max:1000'],
            'body_content'  => ['required', 'string'],
        ]);

        $slug = $validated['slug'] ?: Str::slug($validated['title']);

        $avatar = $post->author_avatar;
        if ($request->hasFile('author_avatar')) {
            $file = $request->file('author_avatar');
            $filename = time() . '_author_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/authors'), $filename);
            $avatar = asset('uploads/authors/' . $filename);
        }

        $postImage = $post->image;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_blog_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/blogs'), $filename);
            $postImage = asset('uploads/blogs/' . $filename);
        }

        $post->update([
            'title'         => $validated['title'],
            'slug'          => $slug,
            'badge'         => $validated['badge'],
            'author_name'   => $validated['author_name'],
            'author_title'  => $validated['author_title'],
            'author_avatar' => $avatar,
            'image'         => $postImage,
            'summary'       => $validated['summary'],
            'content'       => $validated['body_content'],
        ]);

        return redirect()->route('admin.blogs.index')->with('success', 'Blog post successfully updated.');
    }

    public function destroy(Post $blog)
    {
        $blog->delete();
        return redirect()->route('admin.blogs.index')->with('success', 'Blog post successfully deleted.');
    }
}
