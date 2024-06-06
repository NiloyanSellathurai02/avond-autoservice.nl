<?php

namespace App\Http\Controllers;

use App\Models\ContactDetail;
use Illuminate\Http\Request;

class ContactDetailController extends Controller
{

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
        return redirect()->route('contact');
    }
}
