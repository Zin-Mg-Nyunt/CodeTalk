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
						<a href="#" class="text-xl font-semibold text-indigo-600">CodeTalk</a>
						<div class="hidden md:flex items-center space-x-2 text-sm text-gray-600">
							<a href="#" class="px-3 py-2 rounded hover:font-semibold">Home</a>
							<a href="#" class="px-3 py-2 rounded hover:font-semibold">Blogs</a>
							<a href="#" class="px-3 py-2 rounded hover:font-semibold">Contact</a>
						</div>
					</div>
					<div class="flex items-center space-x-4">
						<a href="#" class="hidden sm:inline-flex items-center px-3 py-2 bg-indigo-600 text-white rounded hover:bg-indigo-700">New Post</a>
						<button data-menu-toggle class="md:hidden p-2 rounded hover:bg-gray-100" aria-expanded="false" aria-controls="mobile-menu">
                            ☰
                        </button>
					</div>
				</div>
                <div id="mobile-menu" class="md:hidden mt-2 py-2 space-y-4 text-sm text-gray-700 hidden">
                    <div class="flex flex-col items-center space-y-2">
						<a href="#">Home</a>
						<a href="#">Blogs</a>
						<a href="#">Contact</a>
						<a href="#" class="block px-3 py-2 rounded bg-indigo-600 text-white text-center">New Post</a>
					</div>
                </div>
			</div>
		</nav>

		<!-- HERO -->
		<header class="bg-linear-to-r from-indigo-600 to-indigo-400 text-white">
			<div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
				<div class="lg:flex lg:items-center lg:justify-between">
					<div class="max-w-2xl">
						<h1 class="text-4xl font-extrabold tracking-tight">Insights, Tutorials, and Stories</h1>
						<p class="mt-4 text-lg opacity-90">Read hand-picked articles about coding, creativity and career growth.</p>
						<div class="mt-6 flex items-center space-x-3">
							<a href="#blogs" class="inline-flex items-center px-5 py-3 bg-white text-indigo-600 rounded shadow">Explore Blogs</a>
							<a href="#filters" class="inline-flex items-center px-4 py-2 border border-white/30 rounded text-white/90">Filter</a>
						</div>
					</div>
					<div class="hidden lg:block mt-8 lg:mt-0">
						<img src="https://images.unsplash.com/photo-1526378723477-55f1b4c2f3a4?q=80&w=800&auto=format&fit=crop&ixlib=rb-4.0.3&s=placeholder" alt="Hero" class="w-72 rounded-lg shadow-lg" />
					</div>
				</div>
			</div>
		</header>

		<main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 -mt-10">

			<!-- FILTERS: category / tag / search -->
			<section id="filters" class="bg-white rounded-lg shadow p-6">
				<div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
					<div class=" space-y-3">
                        <div class="flex items-center gap-3 flex-wrap">
                            <div class="text-sm font-medium text-gray-700 min-w-20">Categories:</div>
                            <div class="flex gap-2 flex-wrap">
                                <a href="" class="px-3 py-1 text-sm bg-gray-100 rounded hover:bg-gray-200">All</a>
                                <a href="" @class(["px-3 py-1 text-sm bg-indigo-50 rounded",'text-indigo-700' => true])>Tutorials</a>
                                <a href="" class="px-3 py-1 text-sm bg-gray-100 rounded">Opinion</a>
                                <a href="" class="px-3 py-1 text-sm bg-gray-100 rounded">Tools</a>
                                <a href="" class="px-3 py-1 text-sm bg-gray-100 rounded">News</a>
                            </div>
                        </div>
                        <div class="flex items-center gap-3 flex-wrap">
                            <div class="text-sm font-medium text-gray-700 min-w-20">Tags:</div>
                            <div class="flex gap-2 flex-wrap">
                                <a href="" class="px-2 py-1 text-sm bg-gray-100 rounded">PHP</a>
                                <a href="" class="px-2 py-1 text-sm bg-gray-100 rounded">Laravel</a>
                                <a href="" class="px-2 py-1 text-sm bg-gray-100 rounded">Tailwind</a>
                                <a href="" class="px-2 py-1 text-sm bg-gray-100 rounded">API</a>
                                <a href="" class="px-2 py-1 text-sm bg-gray-100 rounded">DevOps</a>
                                <a href="" class="px-2 py-1 text-sm bg-gray-100 rounded">UI</a>
                                <a href="" class="px-2 py-1 text-sm bg-gray-100 rounded">UX</a>
                            </div>
                        </div>
                    </div>

					<div class="flex items-center gap-4 w-full md:w-auto">
                        <form action="">
                            <div class="flex items-center gap-2 bg-gray-50 rounded px-3 py-2 w-full md:w-80">
                                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35M11 19a8 8 0 100-16 8 8 0 000 16z"></path></svg>
                                <input name="search" type="search" placeholder="Search posts" class="bg-transparent outline-none text-sm w-full" />
                                <button type="submit" class=" cursor-pointer text-gray-400 hover:text-gray-700 transition duration-200">Search</button>
                            </div>
                        </form>
						
					</div>
				</div>
			</section>

			<!-- BLOG CARDS -->
			<section id="blogs" class="mt-8 grid grid-cols-1 lg:grid-cols-3 gap-6">
				<!-- Main column with cards -->
				<div class="lg:col-span-2 space-y-6">
					<article class="bg-white rounded-lg shadow overflow-hidden">
						<img src="https://images.unsplash.com/photo-1508830524289-0adcbe822b40?q=80&w=1200&auto=format&fit=crop&ixlib=rb-4.0.3&s=placeholder" alt="Post image" class="w-full h-48 object-cover" />
						<div class="p-6">
							<div class="flex items-center text-sm text-gray-500 gap-3">
								<span>Tutorials</span>
								<span>•</span>
								<time datetime="2025-11-24">Nov 24, 2025</time>
							</div>
							<h2 class="mt-3 text-2xl font-bold">How to build a modern blog with Tailwind</h2>
							<p class="mt-2 text-gray-600">A short walkthrough showing how to combine Laravel, Vite and Tailwind for fast UI development.</p>
							<div class="mt-4 flex items-center justify-between">
								<div class="flex items-center gap-2">
									<span class="text-xs bg-indigo-50 text-indigo-700 px-2 py-1 rounded">Tailwind</span>
									<span class="text-xs bg-gray-100 px-2 py-1 rounded">Laravel</span>
								</div>
								<a href="#" class="text-indigo-600 text-sm font-medium">Read more →</a>
							</div>
						</div>
					</article>

					<!-- Grid of small cards -->
					<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
						@for ($i = 0; $i < 4; $i++)
						<article class="bg-white rounded-lg shadow overflow-hidden">
							<div class="flex">
								<img src="https://images.unsplash.com/photo-1545239351-1141bd82e8a6?q=80&w=400&auto=format&fit=crop&ixlib=rb-4.0.3&s=placeholder" alt="thumb" class="w-36 h-36 object-cover" />
								<div class="p-4 flex-1">
									<h3 class="font-semibold">Post title example #{!! $i + 1 !!}</h3>
									<p class="mt-2 text-sm text-gray-600">Short excerpt that summarizes the article content and entices the reader to click through.</p>
									<div class="mt-3 flex items-center justify-between">
										<div class="text-xs text-gray-500">Nov 24, 2025</div>
										<a href="#" class="text-indigo-600 text-sm">Read</a>
									</div>
								</div>
							</div>
						</article>
						@endfor
					</div>

					<!-- Pagination (above footer) -->
					<nav class="mt-6 bg-white p-4 rounded-lg shadow flex items-center justify-between">
						<div>
							<p class="text-sm text-gray-600">Showing <strong>1</strong> to <strong>9</strong> of <strong>72</strong> results</p>
						</div>
						<div class="flex items-center space-x-2">
							<a href="#" class="px-3 py-1 rounded bg-gray-100">Prev</a>
							<a href="#" class="px-3 py-1 rounded bg-indigo-600 text-white">1</a>
							<a href="#" class="px-3 py-1 rounded bg-gray-100">2</a>
							<a href="#" class="px-3 py-1 rounded bg-gray-100">3</a>
							<a href="#" class="px-3 py-1 rounded bg-gray-100">Next</a>
						</div>
					</nav>
				</div>

				<!-- Sidebar: categories / popular tags / random blog -->
				<aside class="space-y-6">
					<div class="bg-white rounded-lg shadow p-4">
						<h4 class="text-sm font-semibold text-gray-700">Popular Categories</h4>
						<ul class="mt-3 text-sm space-y-2 text-gray-600">
							<li><a href="#">Tutorials <span class="text-xs text-gray-400">(24)</span></a></li>
							<li><a href="#">Opinion <span class="text-xs text-gray-400">(12)</span></a></li>
							<li><a href="#">Tools <span class="text-xs text-gray-400">(18)</span></a></li>
						</ul>
					</div>

					<div class="bg-white rounded-lg shadow p-4">
						<h4 class="text-sm font-semibold text-gray-700">Popular Tags</h4>
                        <ul class="mt-3 text-sm space-y-2 text-gray-600">
                            <li><a href="#">PHP <span class="text-xs text-gray-400">(24)</span></a></li>
                            <li><a href="#">API <span class="text-xs text-gray-400">(12)</span></a></li>
                            <li><a href="#">UI <span class="text-xs text-gray-400">(18)</span></a></li>
						</ul>
					</div>

					<div class="bg-white rounded-lg shadow p-4">
						<h4 class="text-sm font-semibold text-gray-700">Random Read</h4>
						<article class="mt-3 flex gap-3">
							<img src="https://images.unsplash.com/photo-1515879218367-8466d910aaa4?q=80&w=200&auto=format&fit=crop&ixlib=rb-4.0.3&s=placeholder" alt="random" class="w-16 h-16 object-cover rounded" />
							<div>
								<a href="#" class="font-medium">A surprising tip about developer productivity</a>
								<div class="text-xs text-gray-500 mt-1">Oct 5, 2025 • Tutorials</div>
							</div>
						</article>
                        <article class="mt-3 flex gap-3">
							<img src="https://images.unsplash.com/photo-1515879218367-8466d910aaa4?q=80&w=200&auto=format&fit=crop&ixlib=rb-4.0.3&s=placeholder" alt="random" class="w-16 h-16 object-cover rounded" />
							<div>
								<a href="#" class="font-medium">A surprising tip about developer productivity</a>
								<div class="text-xs text-gray-500 mt-1">Oct 5, 2025 • Tutorials</div>
							</div>
						</article>
                        <article class="mt-3 flex gap-3">
							<img src="https://images.unsplash.com/photo-1515879218367-8466d910aaa4?q=80&w=200&auto=format&fit=crop&ixlib=rb-4.0.3&s=placeholder" alt="random" class="w-16 h-16 object-cover rounded" />
							<div>
								<a href="#" class="font-medium">A surprising tip about developer productivity</a>
								<div class="text-xs text-gray-500 mt-1">Oct 5, 2025 • Tutorials</div>
							</div>
						</article>
					</div>
                    

				</aside>
			</section>

		</main>

		<!-- FOOTER -->
		<footer class="mt-12 bg-white border-t">
			<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 grid grid-cols-1 md:grid-cols-3 gap-6">
				<div>
					<div class="text-xl font-semibold text-indigo-600">CodeTalk</div>
					<p class="mt-4 text-sm text-gray-600">Writing about code, design and developer life.</p>
				</div>
				<div>
					<h5 class="font-semibold">Quick Links</h5>
					<ul class="mt-3 text-sm text-gray-600 space-y-2">
						<li><a href="#">Home</a></li>
						<li><a href="#">Blogs</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
				</div>
				<div>
					<h5 class="font-semibold">Subscribe</h5>
					<p class="mt-3 text-sm text-gray-600">Get the latest posts delivered to your inbox.</p>
					<div class="mt-3 flex">
						<input class="px-3 py-2 border rounded-l w-full text-sm" placeholder="Your email" />
						<button class="px-4 py-2 bg-indigo-600 text-white rounded-r">Subscribe</button>
					</div>
				</div>
			</div>
			<div class="border-t bg-gray-50">
				<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 text-sm text-gray-500">© 2025 CodeTalk. All rights reserved.</div>
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

