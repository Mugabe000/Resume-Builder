@extends('layouts.app')

@section('content')
    <div class="p-20 flex-col  justify-center container text-white">
        <div class="text-left  w-9/12 mr-auto ">
            <h2 class="font-bold">Skill Details: </h2>
        </div>

        <form class="flex-col w-11/12 ml-auto mr-auto justify-center" action="/skill" method="POST">
            @csrf
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Skill Name:
                <input type="text" placeholder="Skill Name" name='name' id="name"
                    class="bg-gray-100  text-gray-900 text-sm rounded block w-1/2 p-2.5">
            </label>

            <label for="rating" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Rating:
                <input type="text" placeholder="Rating" name="rating" id="rating"
                    class="bg-gray-100  text-gray-900 text-sm rounded block w-1/2 p-2.5">
            </label>


            <button type="submit"
                class="px-12 py-2 mt-2 bg-blue-500 text-white font-semibold rounded hover:bg-blue-600 w-1/2">Save</button>
        </form>

        <div class="text-right">
            <a class=" btn btn-primary" href=" {{ route('skill.index') }} " role="button">Next</a>
        </div>
    </div>
@endsection
