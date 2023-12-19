@extends('layouts.app')

@section('content')
    <div class="p-20 flex-col  justify-center container text-white">
        <div class="text-left  w-9/12 mr-auto ">
            <h2 class="font-bold">Work Details: </h2>
        </div>

        <form class="flex-col w-11/12 ml-auto mr-auto justify-center" action="/experience" method="POST">
            @csrf
            <label for="job" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Job Title:
                <input type="text" placeholder="Job Title" name='job_title' id="degree"
                    class="bg-gray-100  text-gray-900 text-sm rounded block w-1/2 p-2.5">
            </label>

            <label for="employer" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Employer:
                <input type="text" placeholder="Employer" name="employer" id="employer"
                    class="bg-gray-100  text-gray-900 text-sm rounded block w-1/2 p-2.5">
            </label>

            <label for="city" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                City:
                <input type="text" placeholder="city" name='city' id="city"
                    class="bg-gray-100  text-gray-900 text-sm rounded block w-1/2 p-2.5">
            </label>

            <label for="state" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Country/State:
                <input type="text" placeholder="State" name='state' id="state"
                    class="bg-gray-100  text-gray-900 text-sm rounded block w-1/2 p-2.5">
            </label>

            <label for="achievement" class=" flex-col block mb-2 text-sm font-medium text-white">
                <p>Achievement:</p>
                <textarea name="achievement" id="achievement" cols="55" rows="4" class="text-black""></textarea>
            </label>

            <label for="start_date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Start Date:
                <input type="date" name='start_date' id='start_date'
                    class="bg-gray-100  text-gray-900 text-sm rounded block w-1/2 p-2.5">
            </label>

            <label for="end_date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                End Date:
                <input type="date" name='end_date' id='end_date'
                    class="bg-gray-100  text-gray-900 text-sm rounded block w-1/2 p-2.5">
            </label>


            <button type="submit"
                class="px-12 py-2 mt-2 bg-blue-500 text-white font-semibold rounded hover:bg-blue-600 w-1/2">Save</button>
        </form>
    </div>
@endsection
