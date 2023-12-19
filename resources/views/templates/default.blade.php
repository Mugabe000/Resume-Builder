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
        *,
        ::before,
        ::after {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
            font-family: Figtree, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        section {
            padding: 1.5rem 0 .80rem;
        }

        .section-title {
            font-weight: bolder;
            border-bottom: 1px solid black;
            text-transform: uppercase;
            letter-spacing: .35rem;
            text-align: center;
        }

        .container {
            margin: 2.25rem;
            width: fit-content;
            padding: 2rem;
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity));
        }

        .flex-container {
            display: flex;
            justify-content: space-between;
        }

        .about {}

        .summary {}

        .education {}

        .experience {}

        .skills {}

        .content {
            margin: 0 1rem .5rem 1rem;
        }

        .content .flex-container>div {
            display: flex;
            gap: .25rem;
        }
    </style>
</head>

<body>

    <div class="container">

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

            <div class="content" style="text-align: left">
                <em>
                    {{ $user->details->summary }}
                </em>
            </div>
        </section>

        <section class="education">

            <h2 class=" section-title ">Education</h2>

            @foreach ($user->education as $edu)
                <div class="content">
                    <div class="flex-container">
                        <div>
                            <strong>{{ $edu->school_name }}</strong>
                        </div>
                        <div>{{ $edu->school_location }}</div>
                    </div>

                    <div class="flex-container">

                        <div>
                            <strong>{{ $edu->degree }}:</strong>
                            {{ $edu->field_of_study }}
                        </div>

                        <div>from {{ $edu->graduation_start_date }} to {{ $edu->graduation_end_date }} </div>
                    </div>
                </div>
            @endforeach
        </section>

        <section class="experience">
            <h2 class=" section-title ">Experience</h2>

            @foreach ($user->experiences as $work)
                <div class="content">
                    <div class="flex-container">
                        <div>
                            <strong>{{ $work->employer }}</strong>
                        </div>
                        <div>{{ $work->state }}</div>
                    </div>
                    <div class="flex-container">
                        <div>
                            <strong>{{ $work->job_title }}</strong>
                        </div>
                        <div>
                            from {{ $work->start_date }} to {{ $work->end_date }}
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
