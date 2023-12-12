@extends('layouts.app')

@section('content')
    <div class="text-white mb-2  w-9/12 ml-auto mr-auto">

        <div class="text-left  w-9/12 mr-auto ">
            <h2 class="font-bold">Work Summary:</h2>
        </div>


        @foreach ($experiences as $exp)
            <div class="px-4 py-2 text-white mb-4 border-solid border border-black ">
                <div class="mb-2">
                    <h4> {{ $exp->job_title }} ({{ $exp->start_date }} to {{ $exp->end_date }}) </h4>

                    <ul>
                        <li>{{ $exp->employer }}</li>
                        <li>{{ $exp->city }}</li>
                        <li>{{ $exp->state }}</li>
                    </ul>

                    <a href=" {{ route('experience.edit', $exp) }} " role="button"><button
                            class="px-6 py-1 mt-2 bg-blue-500 text-white font-semibold rounded hover:bg-blue-600 w-fit">Edit</button></a>

                    <form action="{{ route('experience.destroy', $exp) }}" method="POST" style="display: inline-block">
                        @csrf
                        @method('DELETE')

                        <button
                            class="px-6 py-1 mt-2  text-white font-semibold rounded bg-red-600 hover:bg-red-500 w-fit">Delete</button>
                    </form>

                </div>
        @endforeach

        <a href=" {{ route('experience.create') }} " role="button"><button
                class="px-12 py-2 mt-2 bg-blue-500 text-white font-semibold rounded hover:bg-blue-600 w-fit">+ Add
                Experience</button></a>

        {{-- <div class="text-right">
        <a class=" btn btn-primary" href=" {{ route('skill.index') }} " role="button">Next</a>
    </div> --}}
    </div>
@endsection
