<?php

namespace App\Http\Controllers;

use App\Models\Referees;
use Illuminate\Http\Request;

class RefereesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $referees = auth()->user()->referees;

        return view('referees.index', compact('referees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('referees.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'refname' => 'required',
            'phone' => 'required',
            'email' => 'required',
        ]);

        auth()->user()->referees()->create($request->all());

        return redirect()->route('referees.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Referees $referees)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Referees $referee)
    {
        return view('referees.edit', compact('referee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Referees $referee)
    {
        $request->validate([
            'title' => 'required',
            'refname' => 'required',
            'phone' => 'required',
            'email' => 'required',
        ]);

        $referee->update($request->all());

        return redirect()->route('referees.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Referees $referee)
    {
        $referee->delete();

        return back();
    }
}
