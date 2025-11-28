<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>Blog — CodeTalk</title>
		@if (file_exists(public_path('build/manifest.json')))
			@vite(['resources/css/app.css', 'resources/js/app.js'])
		@else
			<link rel="stylesheet" href="/css/app.css">
		@endif
	</head>
	<body class="antialiased bg-gray-50 text-gray-800">
		<!-- NAVBAR -->
		<nav class="bg-white shadow-xl">
			<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
				<div class="flex justify-between h-16 items-center">
					<div class="flex items-center space-x-4">
						<a href="/" class="text-xl font-semibold text-indigo-600">CodeTalk</a>
						<div class="hidden md:flex items-center space-x-2 text-sm text-gray-600">
							<a href="/" class="px-3 py-2 rounded hover:font-semibold">Home</a>
							<a href="#blogs" class="px-3 py-2 rounded hover:font-semibold">Blogs</a>
							<a href="/" class="px-3 py-2 rounded hover:font-semibold">Contact</a>
						</div>
					</div>
					<div class="flex items-center space-x-4">
						@auth
							<a href="/" class="hidden sm:inline-flex items-center px-3 py-2 bg-indigo-600 text-white rounded hover:bg-indigo-700">New Post</a>
							<form action="/logout" method="POST" class="inline">
								@csrf
								<button type="submit" class="hidden sm:inline-flex items-center px-3 py-2 bg-indigo-600 text-white rounded hover:bg-indigo-700">Logout</button>
							</form>
						@else
							<a href="/register" class="hidden sm:inline-flex items-center px-3 py-2 bg-indigo-600 text-white rounded hover:bg-indigo-700">Register</a>
							<a href="/login" class="hidden sm:inline-flex items-center px-3 py-2 bg-indigo-600 text-white rounded hover:bg-indigo-700">Login</a>
						@endauth
						<button data-menu-toggle class="md:hidden p-2 rounded hover:bg-gray-100" aria-expanded="false" aria-controls="mobile-menu">
                            ☰
                        </button>
					</div>
				</div>
                <div id="mobile-menu" class="md:hidden mt-2 py-2 space-y-4 text-sm text-gray-700 hidden">
                    <div class="flex flex-col items-center space-y-2">
						<a href="/">Home</a>
						<a href="#blogs">Blogs</a>
						<a href="/">Contact</a>
						<a href="/" class="block px-3 py-2 rounded bg-indigo-600 text-white text-center">New Post</a>
					</div>
                </div>
			</div>
		</nav>
            {{$slot}}
        <!-- FOOTER -->
		<footer class="mt-12 bg-white shadow-xl">
			<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 flex flex-col md:flex-row justify-between gap-6">
				<div>
					<div class="text-xl font-semibold text-indigo-600">CodeTalk</div>
					<p class="mt-4 text-sm text-gray-600">Writing about code, design and developer life.</p>
					<p class="mt-4 text-sm text-gray-500">© 2025 CodeTalk. All rights reserved.</p>
				</div>
				<div>
					<h5 class="font-semibold">Quick Links</h5>
					<ul class="mt-3 text-sm text-gray-600 space-y-2">
						<li><a href="/">Home</a></li>
						<li><a href="/#blogs">Blogs</a></li>
						<li><a href="/">Contact</a></li>
					</ul>
				</div>
			</div>
		</footer>

        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const toggleButton = document.querySelector('[data-menu-toggle]');
                const mobileMenu = document.getElementById('mobile-menu');

                if (!toggleButton || !mobileMenu) {
                    return;
                }

                toggleButton.addEventListener('click', () => {
                    const isOpen = mobileMenu.classList.toggle('hidden');
                    toggleButton.setAttribute('aria-expanded', (!isOpen).toString());
                });
            });
        </script>
	</body>
</html>