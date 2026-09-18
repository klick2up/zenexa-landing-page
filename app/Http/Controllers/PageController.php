<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class PageController extends Controller
{
    public function about()
    {
        return view('about');
    }

    public function services()
    {
        return view('services.index');
    }

    public function industries()
    {
        return view('industries.index');
    }

    public function portfolio()
    {
        $projects = Project::latest()->get();
        return view('portfolio', compact('projects'));
    }

    public function careers()
    {
        return view('careers');
    }
}
