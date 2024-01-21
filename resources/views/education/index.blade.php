@extends('layouts.app')

@section('content')
    <div class="text-white pb-2  w-9/12 ml-auto mr-auto">
        <ul class="flex border-b">
            <li class="mr-1">
                <a class="bg-blue-500 inline-block py-2 px-4 text-white hover:bg-blue-600 font-semibold"
                    href="{{ route('user_detail.index') }}">Home</a>
            </li>
            <li class="-mb-px mr-1">
                <a class="bg-blue-500 inline-block border-l border-t border-r rounded-t py-2 px-4 text-blue-800 font-semibold"
                    href="{{ route('education.index') }}">Education</a>
            </li>
            <li class="mr-1">
                <a class="bg-blue-500 inline-block py-2 px-4 text-white hover:bg-blue-600 font-semibold"
                    href="{{ route('experience.index') }}">Work History</a>
            </li>
            <li class="mr-1">
                <a class="bg-blue-500 inline-block py-2 px-4 text-white hover:bg-blue-600 font-semibold"
                    href="{{ route('skill.index') }}">Skills</a>
            </li>
            <li class="mr-1">
                <a class="bg-blue-500 inline-block py-2 px-4 text-white hover:bg-blue-600 font-semibold"
                    href="{{ route('referees.index') }}">Referees</a>
            </li>

        </ul>
        <div class="text-left  w-9/12 mr-auto ">
            <h2>Education Summary: </h2>
        </div>

        <div class="grid grid-cols-3 px-4 py-2 text-white border-solid border border-black ">
            @foreach ($education as $edu)
                <div class="mb-2">
                    <h4 class="card-title"> {{ $edu->degree }} <br /> {{ $edu->school_name }} <br />
                        ({{ $edu->graduation_start_date }} to
                        {{ $edu->graduation_end_date }})
                    </h4>

                    <a href=" {{ route('education.edit', $edu) }} " role="button"><button
                            class="px-6 py-1 mt-2 bg-blue-500 text-white font-semibold rounded hover:bg-blue-600 w-fit">Edit</button></a>

                    <form action="{{ route('education.destroy', $edu) }}" method="POST" style="display: inline-block">
                        @csrf
                        @method('DELETE')

                        <a> <button
                                class="px-6 py-1 mt-2  text-white font-semibold rounded bg-red-600 hover:bg-red-500 w-fit">Delete</button></a>
                    </form>

                </div>
            @endforeach
        </div>


        <a href=" {{ route('education.create') }} " role="button"><button
                class="px-12 py-2 mt-2 bg-blue-500 text-white font-semibold rounded hover:bg-blue-600 w-fit">+ Add another
                Education</button></a>

        <div class="mt-3">

            <div class="text-left">
                <a href=" {{ route('user_detail.index') }} " role="button">
                    &lt;&lt;About </a>
            </div>
            <div class="text-right">
                <a href=" {{ route('experience.index') }} " role="button">Experience&gt;&gt;</a>
            </div>
        </div>
    </div>
@endsection
