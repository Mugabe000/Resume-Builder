@extends('layouts.app')

@section('content')
    @php
        use App\Models\UserDetail;
    @endphp

    @if (!empty($details->image_path) && $details->fullname != null)
        <div class=" flex-row-reverse  right-2 w-2/5 overflow-hidden  absolute top-0 z-50 h-screen   dark:bg-gray-900">

            <iframe src="/templates" class="overflow-hidden w-full border-none   h-full"></iframe>

            <div class="flex justify-between h-fit w-full  z-50 dark:bg-gray-900 p-2">
                <button class="px-6 py-1 bg-blue-500 text-white font-semibold rounded hover:bg-blue-600 w-fit">Close</button>
                <a href="{{ route('resume.download') }}">

                    <button class="px-6 py-1  bg-blue-500 text-white font-semibold rounded hover:bg-blue-600 w-fit">
                        Save
                    </button>
                </a>
            </div>
        </div>
    @else
        <div class="text-white flex justify-center">
            <h1>Your Resume will be Displayed Here!</h1>
        </div>
    @endif
@endsection
