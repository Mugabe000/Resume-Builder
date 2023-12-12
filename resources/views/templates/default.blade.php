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
        <div class="bg-white  mr-1">
            <h2 class="pt-5 pb-5 border-solid border-t border-b border-black">Resume</h2>

            <section class="heading">
                <h2 class="pt-5 pb-5 border-solid border-t border-b border-black">{{ $user->details->fullname }}
                </h2>

                <p>Email: {{ $user->details->email }}</p>
                <p>Phone: {{ $user->details->phone }}</p>
                <p>Address: {{ $user->details->address }}</p>

            </section>

            <section class="summary">
                <h2 class="pt-5 pb-5 border-solid border-t border-b border-black">Summary:</h2>

                <p>
                    <strong>
                        {{ $user->details->summary }}
                    </strong>
                </p>
            </section>

            <section class="education">

                <h2 class="pt-5 pb-5 border-solid border-t border-b border-black">Education</h2>

                @foreach ($user->education as $edu)
                    <h4> Degree: {{ $edu->degree }}</h4>

                    <p>School: {{ $edu->school_name }} </p>
                    <p>Start Date: {{ $edu->graduation_start_date }} </p>
                    <p>Graduation Date: {{ $edu->graduation_end_date }} </p>
                @endforeach
            </section>

            <section class="work">
                <h2 class="pt-5 pb-5 border-solid border-t border-b border-black">Work History</h2>

                @foreach ($user->experiences as $work)
                    <h3>
                        Job Title: {{ $work->job_title }}
                    </h3>
                    <p>Employer: {{ $work->employer }} </p>
                    <p>Start Date: {{ $work->start_date }} </p>
                    <p>End Date: {{ $work->end_date }} </p>
                @endforeach
            </section>

            <section class="skill">

                <h2 class="pt-5 pb-5 border-solid border-t border-b border-black">Skills</h2>

                @foreach ($user->skills as $skill)
                    <h4> {{ $skill->name }} ({{ $skill->rating }} out of 5)</h4>
                @endforeach
            </section>

        </div>
    </div>

</body>

</html>
