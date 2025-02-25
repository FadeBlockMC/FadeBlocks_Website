<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    public function create()
    {
        return view('admin.create_announcement');
    }

    // Store the new announcement
    public function store(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'content' => 'required|string',
        ]);

        // Create a new announcement and save it to the database
        Announcement::create([
            'content' => $request->input('content'),
        ]);

        // Redirect back with a success message
        return redirect()->route('admin.announcements.create')
                         ->with('success', 'Announcement created successfully!');
    }
}
