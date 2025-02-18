<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Virtual Meditate</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite('resources/css/app.css')
</head>

<body class="antialiased">
    <div
        class="relative flex justify-end items-center h-[10%] bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        @if (Route::has('login'))
            <div class="p-6 text-center z-10 h-full flex flex-row items-center justify-end">
                @auth
                    <a href="{{ url('/dashboard') }}"
                        class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                @else
                    <a href="{{ route('login') }}"
                        class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                        in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                    @endif
                @endauth
            </div>
        @endif


    </div>
    <main class="w-full min-h-[85%] h-[200dvh] overflow-y-scroll flex flex-col items-center ">
        <div id="container"
            class="min-h-[100dvh] w-full flex flex-col justify-center items-center bg-[url(../../public/images/background1.webp)] bg-center bg-cover bg-no-repeat bg-fixed">
            <h1 class="text-7xl p-4">Virtual Meditate</h1>
            <p class="text-5xl ">A moment of calm in world of hurry</p>
            <span class="text-2xl text-emerald-500 font-semibold mt-28 animate-bounce p-4 rounded-md">More info</span>
        </div>
        <div id="container"
            class="min-h-[100dvh] w-full flex flex-col justify-center items-center bg-gradient-to-bl to-gray-950 from-gray-700 bg-center bg-cover bg-no-repeat">
            <h2 class="text-white text-2xl">¿Quiénes somos?</h2>
            <P>Somos dos jóvenes interesados por el desarrollo de nuevas tecnologías que al igual que muchos nos hemos
                visto atrapados en el ritmo frenético de la sociedad occidental actual.</P>
            <h2 class="text-white text-2xl">¿Cuál es nuestro objetivo?</h2>
            <p>Nuestro objetivo es usar nuestra pasión para poder aportar soluciones a todas aquellas personas que al
                igual que nosotros buscan un pequeño resquicio de paz y tranquilidad en el agobiante ritmo de vida
                actual.
            </p>
        </div>

    </main>

    <footer class="w-full h-[7dvh] bg-gray-950 flex flex-row items-center justify-center border-t-1 border-black">
        <span class="text-white">Made with ❤️ by Javier</span>
    </footer>
</body>

</html>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Italianno&display=swap');

    p {
        font-family: Italianno;
    }

    html,
    body {
        height: 100%;
        width: 100%;
    }
</style>
