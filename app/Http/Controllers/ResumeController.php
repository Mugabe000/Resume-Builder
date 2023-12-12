<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResumeController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        return view('templates.default', compact('user'));
    }

    public function download(){
        $user = auth()->user();

        $pdf = \Pdf::loadView('templates.default', compact('user'));

        return $pdf->download('resume.pdf');
    }
}
