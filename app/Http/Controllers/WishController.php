<?php

namespace App\Http\Controllers;

use App\Models\Wish;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WishController extends Controller
{
    public function index()
    {
        return view('wishes.index');
    }

    public function showcase()
    {
        $wishes = Wish::where('approved', true)->latest()->get();
        return view('wishes.showcase', compact('wishes'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'message' => 'required|string|max:1000',
            'video' => 'nullable|file|mimes:mp4,mov,avi,wmv|max:102400', // 100MB max
        ]);

        $wish = new Wish();
        $wish->name = $validated['name'];
        $wish->message = $validated['message'];

        if ($request->hasFile('video')) {
            $video = $request->file('video');
            $path = $video->store('wishes/videos', 'public');
            $wish->video_path = $path;
        }

        $wish->save();

        return redirect()->route('wishes.showcase')
            ->with('success', 'Thank you for your warm wishes! Your message has been shared.');
    }
}
