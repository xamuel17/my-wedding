<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RsvpController extends Controller
{
    public function index()
    {
        return view('rsvp');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'guests' => 'required|string',
            'attendance' => 'required|in:yes,virtual,no',
            'message' => 'nullable|string|max:1000',
        ]);

        // If attending virtually, redirect with Zoom link
        if ($validated['attendance'] === 'virtual') {
            $zoomLink = env('ZOOM_MEETING_LINK', '#');

            return redirect()->route('rsvp')
                ->with('success', 'Thank you for your RSVP! You chose to attend virtually.')
                ->with('zoom_link', $zoomLink);
        }

        if ($validated['attendance'] === 'yes') {
            return redirect()->route('rsvp')
                ->with('success', 'Thank you for your RSVP! We look forward to seeing you on our special day!');
        }

        return redirect()->route('rsvp')
            ->with('success', 'Thank you for letting us know. We\'ll miss you but appreciate your response!');
    }
}
