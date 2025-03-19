<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;
use Illuminate\Support\Facades\Auth;

class ApplicationController extends Controller
{   
    public function staff()
    {
        return view('forums.applications.staff_applications');
    }

    public function media()
    {
        return view('forums.applications.media_applications');
    }

    public function developer()
    {
        return view('forums.applications.developer_applications');
    }

    public function store(Request $request)
    {

    
        $validated = $request->validate([
            'role' => 'required|in:staff,media,developer',
            'username' => 'required|string',
            'discord' => 'required|string',
            'age' => 'required|integer',
            'gender' => 'nullable|string',
            'country' => 'nullable|string',
            'timezone' => 'nullable|string',
            'languages' => 'nullable|string',
            'availability' => 'nullable|string',
            'motivation' => 'nullable|string',
            'skills' => 'nullable|string',
            'about' => 'nullable|string',
            'strength' => 'nullable|string',
            'weakness' => 'nullable|string',
            'social_links' => 'nullable|string',
            'why_accept' => 'nullable|string',
            'can_talk_in_calls' => 'nullable|boolean',
            'can_record_proof' => 'nullable|boolean',
            'share_account' => 'nullable|boolean',
            'read_rules' => 'nullable|boolean',
        ]);

        $validated['user_id'] = Auth::id();
        Application::create($validated);
        

        return redirect()->back()->with('success', 'Your application has been submitted!');
    }

    public function index()
    {
        $applications = Application::latest()->get();
        return view('applications.index', compact('applications'));
    }
}
