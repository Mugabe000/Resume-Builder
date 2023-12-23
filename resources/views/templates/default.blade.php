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

    <style>
        * {
            box-sizing: border-box;
            overflow: auto;
            scroll-behavior: smooth;
        }

        html {
            scroll-behavior: smooth;
            font-family: 'Times New Roman', Times, serif;
            font-size: 12px;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            width: 100%;
        }

        .body {
            width: 60%;
            height: fit-content;
            padding: 2rem;
            background-color: rgb(255, 255, 255);
            border: 1px solid #999;
        }

        .flex-body {
            display: flex;
            justify-content: space-between;
        }

        section {
            padding: 0 .80rem;
        }

        .section-title {
            font-weight: bolder;
            border-bottom: 1px solid black;
            text-transform: uppercase;
            text-align: center;
        }

        /* .about {} */

        /* .summary {} */

        /* .education {} */

        /* .experience {} */

        .skills>ul {
            display: flex;
            gap: 2rem;
        }

        .content {
            margin: .5rem 1rem;
        }

        .content .flex-body>div {
            display: flex;
            gap: .25rem;
        }
    </style>
</head>

<body>
    <div class="body" id="container">

        <section class="about">
            <h2 class="section-title">
                {{ $user->details->fullname }}
            </h2>
            <div class="content" style="text-align: center">

                <p>{{ $user->details->address }}</p>

                <p> {{ $user->details->email }}</p>

                <p>{{ $user->details->phone }}</p>
            </div>

        </section>

        <section class="summary">
            <h2 class=" section-title ">Summary</h2>

            <div class="content">
                <em>
                    {{ $user->details->summary }}
                </em>
            </div>
        </section>

        <section class="education">

            <h2 class=" section-title ">Education</h2>

            @foreach ($user->education as $edu)
                <div class="content">
                    <div class="flex-body">
                        <div>
                            <strong>{{ $edu->school_name }}</strong>
                        </div>
                        <div style="text-align: right"><strong>{{ $edu->school_location }}</strong></div>
                    </div>

                    <div class="flex-body">

                        <div>
                            <strong>{{ $edu->degree }}:</strong>
                            {{ $edu->field_of_study }}
                        </div>

                        <div style="text-align: right; display:inline-block">
                            <em>from {{ $edu->graduation_start_date }} to {{ $edu->graduation_end_date }}</em>
                        </div>
                    </div>
                </div>
            @endforeach
        </section>

        <section class="experience">
            <h2 class=" section-title ">Experience</h2>

            @foreach ($user->experiences as $work)
                <div class="content">
                    <div class="flex-body">
                        <div>
                            <strong>{{ $work->employer }}</strong>
                        </div>
                        <div style="text-align: right"><strong>{{ $work->state }}</strong></div>
                    </div>
                    <div class="flex-body">
                        <div>
                            <strong>{{ $work->job_title }}</strong>
                        </div>
                        <div style="text-align: right">
                            <em> from {{ $work->start_date }} to {{ $work->end_date }}</em>
                        </div>
                    </div>
                    <div>
                        {{ $work->achievement }}
                    </div>
                </div>
            @endforeach
        </section>

        <section class="skills">

            <h2 class=" section-title ">Skills</h2>

            <ul>
                @foreach ($user->skills as $skill)
                    <li>
                        {{ $skill->name }}
                    </li>
                @endforeach
            </ul>
        </section>

    </div>

</body>

</html>
