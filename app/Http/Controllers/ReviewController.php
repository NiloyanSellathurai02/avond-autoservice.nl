<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    // Toont alle recensies
    public function index()
    {
        $reviews = Review::all();
        return view('reviews.index', compact('reviews'));
    }

    // Toont het formulier om een nieuwe recensie aan te maken
    public function create()
    {
        return view('reviews.create');
    }

    // Slaat een nieuwe recensie op in de database
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'author_name' => 'required|string|max:255',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        $review = new Review();
        $review->title = $request->title;
        $review->content = $request->content;
        $review->author_name = $request->author_name;
        $review->rating = $request->rating;
        $review->save();

        return redirect()->route('reviews.index')->with('success', 'Review successfully added!');
    }

    // Toont het formulier voor het bewerken van een bestaande recensie
    public function edit(Review $review)
    {
        return view('reviews.edit', compact('review'));
    }

    // Updatet de gespecificeerde recensie in de database
    public function update(Request $request, Review $review)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'author_name' => 'required|string|max:255',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        $review->update($request->all());
        return redirect()->route('reviews.index')->with('success', 'Review updated successfully');
    }

    // Verwijderd de gespecificeerde recensie uit de database
    public function destroy(Review $review): \Illuminate\Http\RedirectResponse
    {
        $review->delete();
        return redirect()->route('reviews.index')->with('success', 'Review deleted successfully');
    }
}
