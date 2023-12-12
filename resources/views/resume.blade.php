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

    <style>
        h2 {
            font-weight: 100;
            padding: 20px 0;
            border-top: 1px solid black;
            border-bottom: 1px solid black;
        }

        .container {
            width: 70%;
            margin: 0 auto;
        }
    </style>
</head>

<body class="font-sans antialiased">
    <x-banner />

    <div class=" min-h-screen bg-gray-100 dark:bg-gray-900">
        @livewire('navigation-menu')
        <div class="flex w-full">
            <div class="flex-col justify-center container text-white text-center">

                <h2 class="font-bold">Welcome to Resume Builder Builder</h2>


                <a name="" id="" class="btn btn-primary" href="/user_detail/create" role="button">
                    <button
                        class="px-12 py-2 mt-2 bg-blue-500 text-white font-semibold rounded hover:bg-blue-600 w-fit">Create
                        Resume</button></a>

            </div>

            <div class="bg-white mr-9 w-8/12">
                <h2>Resume</h2>

                <section class="heading">
                    <h2>{{ $user->details->fullname }}</h2>

                    <p>Email: {{ $user->details->email }}</p>
                    <p>Phone: {{ $user->details->phone }}</p>
                    <p>Address: {{ $user->details->address }}</p>

                </section>

                <section class="summary">
                    <h2>Summary:</h2>

                    <p>
                        <strong>
                            {{ $user->details->summary }}
                        </strong>
                    </p>
                </section>

                <section class="education">

                    <h2>Education</h2>

                    @foreach ($user->education as $edu)
                        <h4> Degree: {{ $edu->degree }}</h4>

                        <p>School: {{ $edu->school_name }} </p>
                        <p>Start Date: {{ $edu->graduation_start_date }} </p>
                        <p>Graduation Date: {{ $edu->graduation_end_date }} </p>
                    @endforeach
                </section>

                <section class="work">
                    <h2>Work History</h2>

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

                    <h2>Skills</h2>

                    @foreach ($user->skills as $skill)
                        <h4> {{ $skill->name }} ({{ $skill->rating }} out of 5)</h4>
                    @endforeach
                </section>

            </div>
        </div>

    </div>

</body>

</html>
