<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Laravel</title>

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
	<main
		class="w-full h-[85%] bg-[url(../../public/images/background1.webp)] bg-center bg-cover bg-no-repeat overflow-y-scroll flex flex-col justify-center items-center">
			<h1 class="text-7xl">Virtual Meditate</h1>
			<p class="text-5xl">A moment of calm in world of hurry</p>
	</main>

	<footer class="w-full h-[5%] bg-gray-900 flex flex-row items-center justify-center">

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
