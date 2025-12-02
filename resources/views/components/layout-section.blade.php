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
		<link rel="stylesheet" href="/ckeditor/ckeditor.css">
		<link
			rel="stylesheet"
			href="https://cdn.ckeditor.com/ckeditor5/47.2.0/ckeditor5.css"
			crossorigin
		/>
		<link
			rel="stylesheet"
			href="https://cdn.ckeditor.com/ckeditor5-premium-features/47.2.0/ckeditor5-premium-features.css"
			crossorigin
		/>
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
							@if (auth()->user()->is_admin)
								<a href="{{route('admin.blogs.create')}}" class="hidden sm:inline-flex items-center px-3 py-2 bg-indigo-600 text-white rounded hover:bg-indigo-700">New Blog</a>
							@endif

							<div class="relative">
								<button id="user-menu-button" aria-expanded="false" class="hidden sm:inline-flex items-center p-0 rounded-full focus:outline-none" title="Open user menu">
									@if (Auth::user()->avatar)
										<img src="{{ Auth::user()->avatar }}" alt="" class=" w-10 h-10 rounded-full object-cover cursor-pointer">
									@else
										<span class="w-10 h-10 rounded-full bg-indigo-600 text-white flex items-center justify-center text-sm font-medium uppercase cursor-pointer">{{ substr(Auth::user()->name,0,2) }}</span>
									@endif
								</button>
								<div id="user-dropdown" class="hidden absolute right-0 mt-2 bg-indigo-600 rounded shadow z-50">
									<form method="POST" action="{{ route('logout') }}">
										@csrf
										<button type="submit" class=" w-auto text-left px-4 py-2 text-sm text-white hover:bg-indigo-700 rounded cursor-pointer">Logout</button>
									</form>
								</div>
							</div>
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

				if (toggleButton && mobileMenu) {
					toggleButton.addEventListener('click', () => {
						const isHidden = mobileMenu.classList.toggle('hidden');
						toggleButton.setAttribute('aria-expanded', (!isHidden).toString());
					});
				}

				const userBtn = document.getElementById('user-menu-button');
				const userDropdown = document.getElementById('user-dropdown');

				if (userBtn && userDropdown) {
					userBtn.addEventListener('click', (e) => {
						e.stopPropagation();
						const isHidden = userDropdown.classList.toggle('hidden');
						userBtn.setAttribute('aria-expanded', (!isHidden).toString());
					});

					// Close dropdown when clicking outside
					document.addEventListener('click', (e) => {
						if (!userDropdown.classList.contains('hidden')) {
							const clickedInside = e.target.closest && (e.target.closest('#user-dropdown') || e.target.closest('#user-menu-button'));
							if (!clickedInside) {
								userDropdown.classList.add('hidden');
								userBtn.setAttribute('aria-expanded', 'false'); 
							}
						}
					});
				}
			});
		</script>
		<script
			src="https://cdn.ckeditor.com/ckeditor5/47.2.0/ckeditor5.umd.js"
			crossorigin
		></script>
		<script
			src="https://cdn.ckeditor.com/ckeditor5-premium-features/47.2.0/ckeditor5-premium-features.umd.js"
			crossorigin
		></script>
		<script src="/ckeditor/ckeditor.js"></script>
	</body>
</html>
