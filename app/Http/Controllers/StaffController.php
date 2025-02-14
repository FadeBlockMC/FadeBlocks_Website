<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function index()
    {
        return view(view: 'staff.only_staff.staff_home'); 
    }
}
