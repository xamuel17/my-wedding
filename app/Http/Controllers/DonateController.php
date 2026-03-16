<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use Illuminate\Http\Request;

class DonateController extends Controller
{
    public function index()
    {
        return view('donate');
    }

    public function confirm(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'amount' => 'required|numeric|min:1',
            'message' => 'nullable|string|max:500',
            'confirm_transfer' => 'required|accepted',
        ]);

        // Save donation to database
        Donation::create([
            'name' => $validated['name'],
            'amount' => $validated['amount'],
            'message' => $validated['message'] ?? null,
        ]);

        // Store donation info in session for thank you page
        session([
            'donation' => [
                'name' => $validated['name'],
                'amount' => $validated['amount'],
                'message' => $validated['message'] ?? null,
            ]
        ]);

        // Trigger confetti animation flag
        session(['show_confetti' => true]);

        return redirect()->route('donate.thankyou');
    }

    public function thankYou()
    {
        $donation = session('donation');
        
        if (!$donation) {
            return redirect()->route('donate');
        }

        $showConfetti = session('show_confetti', false);
        
        // Clear the confetti flag after displaying
        session(['show_confetti' => false]);

        return view('donate-thankyou', compact('donation', 'showConfetti'));
    }
}
