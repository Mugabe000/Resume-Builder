<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Resume</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])



    <!-- Styles -->
    @livewireStyles
</head>

<body class="font-sans antialiased">
    <x-banner />

    <div class="mr-9 w-full">
        <div class="bg-white  mr-1 p-3">

            <section class="heading text-center">
                <h2 class="font-bold text-center pt-5 pb-1 border-solid  border-b border-black">
                    {{ $user->details->fullname }}
                </h2>
                <p>{{ $user->details->address }}</p>

                <p> {{ $user->details->email }}</p>

                <p>{{ $user->details->phone }}</p>

            </section>

            <section class="summary">
                <h2 class="font-bold pt-5 pb-1 border-solid text-center border-b border-black">Summary</h2>

                <p>
                    <em>
                        {{ $user->details->summary }}
                    </em>
                </p>
            </section>

            <section class="education">

                <h2 class="font-bold pt-5 pb-1 border-solid text-center border-b border-black">Education</h2>

                @foreach ($user->education as $edu)
                    <div class="mb-2">
                        <div class="flex justify-between">
                            <p>{{ $edu->school_name }} </p>
                            <p>{{ $edu->school_location }}</p>
                        </div>

                        <div class="flex justify-between">
                            <div class="flex gap-1">
                                <h4>{{ $edu->degree }}</h4>
                                <p>{{ $edu->field_of_study }}</p>
                            </div>
                            <div>from {{ $edu->graduation_start_date }} to {{ $edu->graduation_end_date }} </div>
                        </div>
                    </div>
                @endforeach
            </section>

            <section class="work">
                <h2 class="font-bold pt-5 pb-1 border-solid text-center border-b border-black">Experience</h2>

                @foreach ($user->experiences as $work)
                    <div class="mb-2">
                        <div class="flex justify-between">
                            <p>{{ $work->employer }} </p>
                            <p>{{ $work->state }}</p>
                        </div>
                        <div class="flex justify-between">
                            <p> {{ $work->job_title }}</p>
                            <div>
                                from {{ $work->start_date }} to {{ $work->end_date }}
                            </div>
                        </div>
                    </div>
                @endforeach
            </section>

            <section class="skill">

                <h2 class="font-bold pt-5 pb-1 border-solid text-center border-b border-black">Skills</h2>

                <ul>
                    @foreach ($user->skills as $skill)
                        <li>
                            {{ $skill->name }}
                        </li>
                    @endforeach
                </ul>
            </section>

        </div>
    </div>

</body>

</html>
