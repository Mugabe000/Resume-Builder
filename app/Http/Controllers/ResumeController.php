<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class ResumeController extends Controller
{
    public function index()
    {
        $details = auth()->user()->details;
        return view('resume', compact('details'));
    }
    public function template(){

        $user = auth()->user();
        return view('templates.default', compact('user'));
    }

    public function download(){
        $user = auth()->user();

        $pdf = \Pdf::loadView('templates.default', compact('user'));

        // return $pdf->download('resume.pdf');
        return $pdf->stream('resume.pdf');

    }
}
