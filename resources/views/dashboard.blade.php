@extends('layouts.app')

@section('content')
    @php
        use App\Models\UserDetail;
    @endphp

    @if (!empty($details->image_path) && $details->fullname != null)
        <div class=" flex justify-center w-full overflow-hidden  absolute   h-screen   dark:bg-gray-900">
            <div class="w-2/5">
                <iframe src="/templates" class="overflow-hidden w-full border-none h-full"></iframe>
            </div>
            <div>
                <div class="flex flex-col gap-2 h-fit w-full  z-50 dark:bg-gray-900 p-2">
                    <a href="{{ route('resume.download') }}">
                        <x-button class="ms-4">
                            {{ __('Download') }}
                        </x-button>
                    </a>
                </div>
            </div>
        </div>
    @else
        <div class="text-white flex justify-center">
            <h1>Your Resume will be Displayed Here!</h1>
        </div>
    @endif
@endsection
