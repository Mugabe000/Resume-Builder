<?php

namespace App\Http\Controllers;

use App\Models\UserDetail;
use Illuminate\Http\Request;


class UserDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $details = auth()->user()->details;

        return view('user_detail.index', compact('details'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('user_detail.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Useful methods mostly used
        //guessExtension()
        //getMimeType()
        //store()
        //asStore()
        //storePublicly()
        //move()
        //getClientOriginalName()
        //getClientMimeType()
        //guessClientExtension()
        //getSize()
        //getError()
        //isValid()

        // $test = $request->file('image')->isValid();

        // dd($test);

        $request->validate([
            'fullname'=>'required',
            'email'=>'required|email',
            'phone'=>'required',
            'summary' => 'required',
            'image'=> 'required | mimes:jpg,png,jpeg | max:50480'

        ]);


        $newImageName = time() . '_' . $request->fullname . '.' . $request->image->guessClientExtension();

        $request->image->move(public_path('images'), $newImageName);


        $detail = new UserDetail();

        $detail->fullname = $request->input('fullname');
        $detail->phone = $request->input('phone');
        $detail->email = $request->input('email');
        $detail->address = $request->input('address');
        $detail->summary = $request->input('summary');
        $detail->image_path = $newImageName;
        // $detail->image_path = $request->input('image');
        $detail->user_id = auth()->id();

        $detail->save();

        return redirect('education/create');
    }

    /**
     * Display the specified resource.
     */
    public function show(UserDetail $userDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UserDetail $userDetail)
    {
       return view('user_detail.edit', compact('userDetail'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UserDetail $userDetail)
    {
        $request->validate([
            'fullname' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'summary' => 'required',
            'image'=> 'required | mimes:jpg,png,jpeg | max:50480'
        ]);


        $userDetail->update($request->except('_token'));

        return redirect()->route('user_detail.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserDetail $userDetail)
    {
        $userDetail->delete();
        return back();
    }
}
