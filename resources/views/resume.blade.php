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

    <div class=" min-h-screen bg-gray-100 dark:bg-gray-900">

        @livewire('navigation-menu')

        <div class="flex-col w-full justify-center container text-white text-center">

            <h2 class="font-bold">Welcome to Resume Builder Builder</h2>


            <a href="/user_detail/create" role="button">
                <button
                    class="px-12 py-2 mt-2 bg-blue-500 text-white font-semibold rounded hover:bg-blue-600 w-fit">Create
                    Resume</button></a>

        </div>

    </div>

</body>

</html>
