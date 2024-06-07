<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    // Toon alle recensies
    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $reviews = Review::all();
        return view('reviews.index', compact('reviews'));
    }

    // Toon het formulier om een nieuwe recensie aan te maken
    public function create(): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('reviews.create');
    }

    // Sla een nieuwe recensie op in de database
    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'author_name' => 'required|string|max:255',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        Review::create($request->all());
        return redirect()->route('reviews.index')->with('success', 'Review added successfully');
    }

    // Toon het formulier voor het bewerken van een bestaande recensie
    public function edit(Review $review): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('reviews.edit', compact('review'));
    }

    // Update de gespecificeerde recensie in de database
    public function update(Request $request, Review $review): \Illuminate\Http\RedirectResponse
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

    // Verwijder de gespecificeerde recensie uit de database
    public function destroy(Review $review): \Illuminate\Http\RedirectResponse
    {
        $review->delete();
        return redirect()->route('reviews.index')->with('success', 'Review deleted successfully');
    }
}
