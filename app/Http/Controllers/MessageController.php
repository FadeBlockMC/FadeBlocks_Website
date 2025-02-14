<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    public function index()
    {
        $messages = Message::orderBy('topic')->get()->groupBy('topic');
        return view('admin.messages.index', compact('messages'));
    }

    public function update(Request $request, $id)
    {
        $message = Message::findOrFail($id);
        $message->update(['message' => $request->message]);

        return response()->json(['success' => 'Message updated successfully!']);
    }
}

