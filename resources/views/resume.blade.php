@extends('layouts.app')

@section('content')
    @php
        use App\Models\UserDetail;
    @endphp

    @if (!empty($details->image_path) && $details->fullname != null)
        <div class="text-white  min-h-screen overflow-auto relative  w-9/12 ml-auto mr-auto">

            <ul class="flex border-b sticky">
                <li class="mr-1 -mb-px">
                    <a class="bg-white inline-block border-l border-t border-r rounded-t py-2 px-4 text-blue-700 font-semibold"
                        href="{{ route('user_detail.index') }}">Home</a>
                </li>
                <li class="mr-1">
                    <a class="bg-white inline-block py-2 px-4 text-blue-500 hover:text-blue-800 font-semibold"
                        href="{{ route('education.index') }}">Education</a>
                </li>
                <li class="mr-1">
                    <a class="bg-white inline-block py-2 px-4 text-blue-500 hover:text-blue-800 font-semibold"
                        href="{{ route('experience.index') }}">Work History</a>
                </li>
                <li class="mr-1">
                    <a class="bg-white inline-block py-2 px-4 text-blue-500 hover:text-blue-800 font-semibold"
                        href="{{ route('skill.index') }}">Skills</a>
                </li>
                <li class="mr-1">
                    <a class="bg-white inline-block py-2 px-4 text-blue-500 hover:text-blue-800 font-semibold"
                        href="{{ route('referees.index') }}">Referees</a>
                </li>

            </ul>

            <div class="text-left  w-9/12 mr-auto sticky">
                <h2 class="font-bold">About: </h2>
            </div>



            <div class="px-4 py-2 text-white mb-4  border-solid border border-black  sticky">
                <div class="mb-2">
                    <h4> {{ $details->fullname }} {{ $details->email }} {{ $details->phone }} </h4>

                    <a href=" {{ route('user_detail.edit', $details) }} " role="button"><button
                            class="px-6 py-1 mt-2 bg-blue-500 text-white font-semibold rounded hover:bg-blue-600 w-fit">Edit</button></a>

                    <form action="{{ route('user_detail.destroy', $details) }}" method="POST"
                        style="display: inline-block">
                        @csrf
                        @method('DELETE')

                        <button
                            class="px-6 py-1 mt-2  text-white font-semibold rounded bg-red-600 hover:bg-red-500 w-fit">Delete</button>
                    </form>

                </div>


            </div>
        </div>
    @else
        <div class=" min-h-screen bg-gray-100 dark:bg-gray-900">

            <div class="flex-col w-full justify-center container text-white text-center">

                <h2 class="font-bold">Welcome to Resume Builder</h2>


                <a href="/user_detail/create" role="button">
                    <button
                        class="px-12 py-2 mt-2 bg-blue-500 text-white font-semibold rounded hover:bg-blue-600 w-fit">Create
                        Resume</button></a>

            </div>

        </div>
    @endif
@endsection
