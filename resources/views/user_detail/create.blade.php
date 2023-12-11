@extends('layouts.app')

@section('content')
    <div class=" flex-col  justify-center container text-white">
        <h2>Tell us something about you</h2>

        <form action="/user_detail" method="POST">
            @csrf
            <input type="text" name="fullname" id="fullname">
            <input type="text" name="email" id="email">
            <input type="text" name="phone" id="phone">
            <input type="text" name="address" id="address">

            <button type="submit" class="rounded-md bg-blue-900 py-1 px-3">Submit</button>
        </form>
    </div>
@endsection
