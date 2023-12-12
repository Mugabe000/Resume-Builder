@extends('layouts.app')

@section('content')
    <div class="text-white mb-2  relative w-9/12 ml-auto mr-auto">

        <ul class="flex border-b">
            <li class="mr-1">
                <a class="bg-white inline-block border-l border-t border-r rounded-t py-2 px-4 text-blue-700 font-semibold"
                    href="{{ route('user_detail.index') }}">Home</a>
            </li>
            <li class="-mb-px mr-1">
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

        </ul>

        <div class="text-left  w-9/12 mr-auto ">
            <h2 class="font-bold">About: </h2>
        </div>



        <div class="px-4 py-2 text-white mb-4 border-solid border border-black ">
            <div class="mb-2">
                <h4> {{ $details->fullname }} {{ $details->email }} {{ $details->phone }} </h4>

                <a href=" {{ route('user_detail.edit', $details) }} " role="button"><button
                        class="px-6 py-1 mt-2 bg-blue-500 text-white font-semibold rounded hover:bg-blue-600 w-fit">Edit</button></a>

                <form action="{{ route('user_detail.destroy', $details) }}" method="POST" style="display: inline-block">
                    @csrf
                    @method('DELETE')

                    <button
                        class="px-6 py-1 mt-2  text-white font-semibold rounded bg-red-600 hover:bg-red-500 w-fit">Delete</button>
                </form>

            </div>


        </div>
        <div class=" flex-col h-screen right-2 w-10/12  absolute top-26">
            <iframe src="/templates" class=" w-full h-full"></iframe>
            <div class="flex justify-between">
                <button
                    class="px-6 py-1 mt-2 bg-blue-500 text-white font-semibold rounded hover:bg-blue-600 w-fit">Close</button>
                <a href="{{ route('resume.download') }}"><button
                        class="px-6 py-1 mt-2 bg-blue-500 text-white font-semibold rounded hover:bg-blue-600 w-fit">
                        Save
                    </button>
                </a>
            </div>
        </div>
    </div>
@endsection
