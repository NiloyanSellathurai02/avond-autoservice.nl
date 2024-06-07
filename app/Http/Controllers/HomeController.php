<?php

namespace App\Http\Controllers;

use App\Models\ContactDetail;
use App\Models\Review;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Compound;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $contactDetail = ContactDetail::first();
        $reviews = Review::all(); // Haal alle recensies op
        return view('welcome', compact('contactDetail', 'reviews')); // Stuur beide naar de view
    }

    public function contact()
    {
        $contactDetail = ContactDetail::first();

        return view('contact' , compact(['contactDetail']));
    }
}
