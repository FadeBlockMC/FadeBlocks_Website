<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rules;

class RulesController extends Controller
{
    public function index()
    {
        $Rules = Rules::all();
        return view('rules.Rules', ['rules' => $Rules]);
    }
}
