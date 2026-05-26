<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Pixel Position </title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100..300;1,100..300&display=swap" rel="stylesheet">
	@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="px-10 pb-20 bg-black text-white font-hanken-grotesk">
	<div>

		<nav class="flex justify-between items-center py-4 border-b border-white/10">
			<div>
				<a href="/">
					<img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="">
				</a>
			</div>

			<div class="space-x-6 font-bold">
				<a href="#">Jobs</a>
				<a href="#">Careers</a>
				<a href="#">Salaries</a>
				<a href="#">Companies</a>
			</div>

			<div class="flex space-x-5">
				@auth
					<a href="/jobs/create">Post a Job</a>
					<form action="/logout" method="POST">
						@csrf
						@method("DELETE")
						<button type="submit" class="cursor-pointer">Log Out</button>
					</form>
				@endauth
			</div>
			<div class="flex space-x-3">
				@guest
					<a href="/register">Sign up</a>
					<a href="/login">Log in</a>
				@endguest
			</div>

		</nav>	
	</div>

	<main class="mt-10 max-w-[986px] mx-auto">
		{{ $slot }}
	</main>

</body>
</html>