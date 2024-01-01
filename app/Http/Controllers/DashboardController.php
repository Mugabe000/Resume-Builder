<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $details = auth()->user()->details;
        return view('dashboard', compact('details'));
    }
}
