<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            scroll-behavior: smooth;
            box-sizing: border-box;
        }

        nav {
            display: flex;
            background-color: black;
            flex-direction: row-reverse;
            padding: .6rem 1rem;
        }

        button {
            padding: .3rem;
            width: 6rem;
            cursor: pointer;
            transition: scale .3s ease-in-out;
        }

        button:focus {
            transform: scale(0.9);
        }

        main {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            text-align: center;
            min-height: 100vh;
            background-color: rgb(243, 244, 246);

            @media (prefers-color-scheme: dark) {
                background-color: rgb(17, 24, 39);
                color: ghostwhite;
            }
        }
    </style>
</head>

<body>
    <nav>
        <a href="/login" wire:navigate><button>Login</button></a>
    </nav>
    <main>
        <h1>Welcome to Online Resume Builder!</h1>
    </main>

</body>

</html>
