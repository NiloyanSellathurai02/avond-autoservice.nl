<?php

namespace App\Http\Controllers;

use App\Models\ContactDetail;
use Illuminate\Http\Request;

class ContactDetailController extends Controller
{
    public function home()
    {
        $contactDetail = ContactDetail::first();
        return view('welcome', compact('contactDetail'));
    }

    public function index()
    {
        $contactDetail = ContactDetail::first();
        return view('contact', compact('contactDetail'));
    }

    public function edit()
    {
        $contactDetail = ContactDetail::first();
        return view('contact.edit', compact('contactDetail'));
    }

    public function update(Request $request)
    {
        $contactDetail = ContactDetail::first();
        if ($contactDetail) {
            $contactDetail->update($request->all());
        } else {
            ContactDetail::create($request->all());
        }
        return redirect()->route('contact.index');
    }
}
