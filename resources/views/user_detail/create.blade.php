@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Tell us something about you</h2>

        <form action="/user_detail" method="POST">
            @csrf
            <input type="text" name="fullname" id="fullname">
            <input type="text" name="email" id="email">
            <input type="text" name="phone" id="phone">
            <input type="text" name="address" id="address">

            <input type="submit" value="Submit">
        </form>
    </div>
@endsection
