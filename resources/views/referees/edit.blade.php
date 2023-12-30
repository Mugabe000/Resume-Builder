@extends('layouts.app')

@section('content')
    <div class="p-20 flex-col  justify-center container text-white">
        <div class="text-left  w-9/12 mr-auto ">
            <h2 class="font-bold"> Referee's Detail: </h2>
        </div>

        <form class="flex-col w-11/12 ml-auto mr-auto justify-center" action="{{ route('referees.update', $referee) }}"
            method='POST'>
            @csrf
            @method('PUT')

            <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Job Title:
                <input type="text" placeholder="Job Title" name='title' id="title"
                    class="bg-gray-100  text-gray-900 text-sm rounded block w-1/2 p-2.5" value="{{ $referee->title }}">
            </label>

            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Name:
                <input type="text" placeholder="Name" name="refname" id="name"
                    class="bg-gray-100  text-gray-900 text-sm rounded block w-1/2 p-2.5" value="{{ $referee->refname }}">
            </label>

            <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Phone:
                <input type="text" placeholder="phone" name='phone' id="phone"
                    class="bg-gray-100  text-gray-900 text-sm rounded block w-1/2 p-2.5" value="{{ $referee->phone }}">
            </label>

            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Email:
                <input type="email" placeholder="Email" name='email' id="email"
                    class="bg-gray-100  text-gray-900 text-sm rounded block w-1/2 p-2.5" value="{{ $referee->email }}">
            </label>

            <button type="submit"
                class="px-12 py-2 mt-2 bg-blue-500 text-white font-semibold rounded hover:bg-blue-600 w-1/2">Save</button>
        </form>
    </div>
@endsection
