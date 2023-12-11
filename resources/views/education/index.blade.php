@extends('layouts.app')

@section('content')
    <div class="text-white mb-2  w-9/12 ml-auto mr-auto">

        <h2>Education Summary</h2>

        @foreach ($education as $edu)
            <div class="px-4 py-2 text-white mb-4 border-solid border border-black ">
                <div class="mb-2">
                    <h4 class="card-title"> {{ $edu->degree }} {{ $edu->school_name }} ({{ $edu->graduation_start_date }} -
                        {{ $edu->graduation_end_date }})</h4>

                    <a href=" {{ route('education.edit', $edu) }} " role="button"><button
                            class="px-6 py-1 mt-2 bg-blue-500 text-white font-semibold rounded hover:bg-blue-600 w-fit">Edit</button></a>

                    <form action="{{ route('education.destroy', $edu) }}" method="POST" style="display: inline-block">
                        @csrf
                        @method('DELETE')

                        <a> <button
                                class="px-6 py-1 mt-2  text-white font-semibold rounded bg-red-600 hover:bg-red-500 w-fit">Delete</button></a>
                    </form>

                </div>
            </div>
        @endforeach


        <a href=" {{ route('education.create') }} " role="button"><button
                class="px-12 py-2 mt-2 bg-blue-500 text-white font-semibold rounded hover:bg-blue-600 w-fit">+ Add another
                Education</button></a>
        {{-- </div>
    <div class="row mt-3">
        <div class="col text-left">
            <a class="btn btn-secondary" href=" {{ route('education.create') }} " role="button">Back</a>
        </div>

        <div class="col text-right">
            <a class=" btn btn-primary" href=" {{ route('experience.index') }} " role="button">Work History</a>
        </div> --}}
    </div>
@endsection
