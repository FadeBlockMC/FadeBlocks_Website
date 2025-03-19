<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;


class ReportController extends Controller
{
        public function player()
        {
            return view('forums.reports.player_report');
        }
    
        public function bug()
        {
            return view('forums.reports.bug_report');
        }
    
        public function store(Request $request)
        {
            $validated = $request->validate([
                'type' => 'required|in:player_report,punishment_appeal,bug_report',
                'username' => 'required|string',
                'evidence' => 'required|string',
            ]);
    
            Report::create([
                'type' => $validated['type'],
                'username' => $validated['username'],
                'rule_breaker_username' => $request->rule_breaker_username,
                'rules_broken' => $request->rules_broken,
                'evidence' => $validated['evidence'],
                'additional_info' => $request->additional_info,
            ]);
    
            return redirect()->back()->with('success', 'Your report has been submitted!');
        }
}
