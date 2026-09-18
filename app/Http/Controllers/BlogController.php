<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class BlogController extends Controller
{
    /**
     * Display a listing of all blog posts dynamically from the database.
     */
    public function index(Request $request)
    {
        $category = $request->query('category');

        $query = Post::latest();

        if ($category) {
            $query->where('badge', 'like', $category);
        }

        $posts = $query->get();
        $allCategories = Post::distinct()->pluck('badge')->toArray();

        return view('blog.index', compact('posts', 'allCategories', 'category'));
    }

    /**
     * Display the specified blog post dynamically from the database.
     */
    public function show(string $slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();

        // Fetch recent posts excluding the current one
        $recentPosts = Post::where('slug', '!=', $slug)
                           ->latest()
                           ->take(3)
                           ->get();

        return view('blog.show', compact('post', 'recentPosts'));
    }

    /**
     * Internal method to return all posts for sitemap dynamic generation.
     */
    public function getAllPosts()
    {
        return Post::all()->keyBy('slug')->toArray();
    }
}
