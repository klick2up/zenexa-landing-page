<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;

class AdminReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::latest()->get();
        return view('admin.reviews.index', compact('reviews'));
    }

    public function create()
    {
        return view('admin.reviews.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'client_name'   => ['required', 'string', 'max:255'],
            'client_title'  => ['required', 'string', 'max:255'],
            'project_name'  => ['nullable', 'string', 'max:255'],
            'stars'         => ['required', 'integer', 'min:1', 'max:5'],
            'client_avatar' => ['nullable', 'image', 'max:2048'],
            'review_text'   => ['required', 'string'],
        ]);

        $avatar = null;
        if ($request->hasFile('client_avatar')) {
            $file = $request->file('client_avatar');
            $filename = time() . '_avatar_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/reviews'), $filename);
            $avatar = asset('uploads/reviews/' . $filename);
        }

        Review::create([
            'client_name'   => $validated['client_name'],
            'client_title'  => $validated['client_title'],
            'project_name'  => $validated['project_name'] ?? null,
            'stars'         => $validated['stars'],
            'client_avatar' => $avatar,
            'review_text'   => $validated['review_text'],
        ]);

        return redirect()->route('admin.reviews.index')->with('success', 'Testimonial/Review successfully created.');
    }

    public function edit(Review $review)
    {
        return view('admin.reviews.edit', compact('review'));
    }

    public function update(Request $request, Review $review)
    {
        $validated = $request->validate([
            'client_name'   => ['required', 'string', 'max:255'],
            'client_title'  => ['required', 'string', 'max:255'],
            'project_name'  => ['nullable', 'string', 'max:255'],
            'stars'         => ['required', 'integer', 'min:1', 'max:5'],
            'client_avatar' => ['nullable', 'image', 'max:2048'],
            'review_text'   => ['required', 'string'],
        ]);

        $avatar = $review->client_avatar;
        if ($request->hasFile('client_avatar')) {
            $file = $request->file('client_avatar');
            $filename = time() . '_avatar_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/reviews'), $filename);
            $avatar = asset('uploads/reviews/' . $filename);
        }

        $review->update([
            'client_name'   => $validated['client_name'],
            'client_title'  => $validated['client_title'],
            'project_name'  => $validated['project_name'] ?? null,
            'stars'         => $validated['stars'],
            'client_avatar' => $avatar,
            'review_text'   => $validated['review_text'],
        ]);

        return redirect()->route('admin.reviews.index')->with('success', 'Testimonial/Review successfully updated.');
    }

    public function destroy(Review $review)
    {
        $review->delete();
        return redirect()->route('admin.reviews.index')->with('success', 'Testimonial/Review successfully deleted.');
    }
}
