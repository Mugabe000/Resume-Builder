@extends('layouts.app')

@section('content')
    <div class="p-20 flex-col  justify-center container text-white">
        <div class="text-left  w-9/12 mr-auto ">
            <h2 class="font-bold">Education Details: </h2>
        </div>

        <div>
            @if (session()->has('errors'))
                @foreach ($errors->all() as $error)
                    <p class="text-red mr-auto ml-auto">{{ $error }}</p>
                @endforeach
            @endif
        </div>

        <form class="flex-col w-11/12 ml-auto mr-auto justify-center" action="/education" method="POST">
            @csrf
            <label for="schoolName" class=" block mb-2 mt-2 text-sm font-medium text-gray-900 dark:text-white">
                School:
                <input type="text" placeholder="School" name="school_name" id="schoolName"
                    class="bg-gray-100  text-gray-900 text-sm rounded block w-1/2 p-2.5">
            </label>
            <label for="schoolLocation" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Location:
                <input type="text" placeholder="School Location" name="school_location" id="schoolLocation"
                    class="bg-gray-100  text-gray-900 text-sm rounded block w-1/2 p-2.5">
            </label>
            <label for="degree" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Degree:
                <input type="text" placeholder="degree" name="degree" id="degree"
                    class="bg-gray-100  text-gray-900 text-sm rounded block w-1/2 p-2.5">
            </label>

            <label for="field_of_study" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Field of Study:
                <input type="text" placeholder="field of study" name="field_of_study" id="field_of_study"
                    class="bg-gray-100  text-gray-900 text-sm rounded block w-1/2 p-2.5 ">
            </label>
            <label for="graduation_start_date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Start Year:
                <input type="date" name="graduation_start_date" id="graduation_start_date"
                    class="bg-gray-100  text-gray-900 text-sm rounded block w-1/2 p-2.5 ">
            </label>
            <label for="graduation_end_date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Graduation Year:
                <input type="date" name="graduation_end_date" id="graduation_end_date"
                    class="bg-gray-100  text-gray-900 text-sm rounded block w-1/2 p-2.5 ">
            </label>

            <button type="submit"
                class="px-12 py-2 mt-2 bg-blue-500 text-white font-semibold rounded hover:bg-blue-600 w-1/2">Save
                Education</button>
        </form>
    </div>
@endsection
