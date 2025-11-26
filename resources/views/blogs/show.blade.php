<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>Single Blog — CodeTalk</title>
		@if (file_exists(public_path('build/manifest.json')))
			@vite(['resources/css/app.css', 'resources/js/app.js'])
		@else
			<link rel="stylesheet" href="/css/app.css">
		@endif
	</head>
	<body class="bg-gray-50 text-gray-900 antialiased">
		@php
			$navLinks = [
				['label' => 'Home', 'href' => '#'],
				['label' => 'Blogs', 'href' => '#blog'],
				['label' => 'Resources', 'href' => '#resources'],
				['label' => 'Contact', 'href' => '#contact'],
			];

			$articleSections = [
				['title' => 'Why developer storytelling matters', 'anchor' => 'section-1'],
				['title' => 'Collecting meaningful data', 'anchor' => 'section-2'],
				['title' => 'Designing for trust', 'anchor' => 'section-3'],
				['title' => 'Launch checklist', 'anchor' => 'section-4'],
			];
		@endphp

		<nav class="bg-white border-b">
			<div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
				<div class="flex justify-between h-16 items-center">
					<a href="#" class="text-xl font-semibold text-indigo-600">CodeTalk</a>
					<div class="hidden md:flex items-center text-sm text-gray-600 space-x-2">
						@foreach ($navLinks as $link)
							<a href="{{ $link['href'] }}" class="px-3 py-2 rounded hover:bg-gray-100">{{ $link['label'] }}</a>
						@endforeach
					</div>
					<div class="flex items-center gap-3">
						<a href="#" class="hidden sm:inline-flex items-center px-3 py-2 bg-indigo-600 text-white rounded hover:bg-indigo-700">Subscribe</a>
						<button data-menu-toggle class="md:hidden p-2 rounded hover:bg-gray-100" aria-expanded="false" aria-controls="mobile-menu">
							<span class="sr-only">Toggle navigation</span>
							☰
						</button>
					</div>
				</div>
				<div id="mobile-menu" class="md:hidden hidden border-t mt-2 pt-2 space-y-2 text-sm text-gray-700">
					@foreach ($navLinks as $link)
						<a href="{{ $link['href'] }}" class="block px-3 py-2 rounded hover:bg-gray-100">{{ $link['label'] }}</a>
					@endforeach
					<a href="#" class="block px-3 py-2 rounded bg-indigo-600 text-white text-center">Subscribe</a>
				</div>
			</div>
		</nav>

		<header class="bg-linear-to-r from-indigo-600 to-indigo-400 text-white">
			<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-16 space-y-6">
				<div class="flex flex-wrap items-center gap-3 text-sm text-white/80">
					<span class="px-2 py-1 rounded bg-white/20">Tutorials</span>
					<span>Nov 26, 2025</span>
					<span>•</span>
					<span>12 min read</span>
				</div>
				<h1 class="text-4xl sm:text-5xl font-extrabold leading-tight">Designing a trustworthy technical blog layout with Tailwind CSS</h1>
				<p class="text-lg text-white/90 max-w-3xl">A reference layout you can copy into any Laravel project while you wire up the backend later. Packed with sections for hero content, article body, table of contents, callouts, author profile, comments, and newsletter opt-in.</p>
				<div class="flex flex-wrap items-center gap-4 text-sm">
					<div class="flex items-center gap-3">
						<img src="https://images.unsplash.com/photo-1504593811423-6dd665756598?w=100&h=100&auto=format&fit=crop" alt="Author" class="w-12 h-12 rounded-full object-cover border border-white/40" />
						<div>
							<p class="font-semibold">Sierra Patel</p>
							<p class="text-white/70">Product Engineer @ CodeTalk</p>
						</div>
					</div>
					<div class="flex items-center gap-3">
						<button class="px-4 py-2 rounded border border-white/50 hover:bg-white/10">Share</button>
						<button class="px-4 py-2 bg-white text-indigo-600 rounded hover:bg-gray-100">Download PDF</button>
					</div>
				</div>
			</div>
		</header>

		<main class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 -mt-12">
			<div class="bg-white rounded-2xl shadow-xl p-6 sm:p-10 space-y-10">
				<section class="grid gap-6 lg:grid-cols-[1fr_320px]" id="blog">
					<article class="prose max-w-none">
						<p class="lead text-lg text-gray-700">Every blog post template needs room to breathe as well as thoughtful interaction details. This layout keeps things semantic while also feeling polished enough to ship.</p>

						<h2 id="section-1">Why developer storytelling matters</h2>
						<p>Clarity, voice, and structure help your articles stand out. We start with a short hero section that sets the context, then move directly into the article body. Use Tailwind utility classes to modulate spacing, typography, and color tokens without reaching for custom CSS too early.</p>

						<div class="rounded-xl bg-indigo-50 border border-indigo-100 p-5 text-sm text-indigo-900">
							<p class="font-semibold mb-1">Key idea</p>
							<p>Pair your backend delivery with thoughtful microcopy. Readers decide within seconds if they trust a tutorial.</p>
						</div>

						<h2 id="section-2">Collecting meaningful data</h2>
						<p>Before you have a CMS, drop static placeholders that mimic your future data shape. This template uses arrays defined in Blade so you can swap them for real models later. Keep lorem ipsum minimal—tell a real story instead.</p>
						<ul>
							<li>Structure the article with semantic headings</li>
							<li>Mix paragraphs, quotes, code, and callouts</li>
							<li>Break up long sections with media or stats</li>
						</ul>

						<blockquote>“When content reads like a conversation, people remember it. When layouts are delightful, they share it.”</blockquote>

						<h2 id="section-3">Designing for trust</h2>
						<p>Add supporting UI elements such as a sticky table of contents, estimated read time, and author context. Tailwind makes these quick to compose with stack utilities (<code>space-y-</code>, <code>gap-</code>) and color tokens.</p>

						<h2 id="section-4">Launch checklist</h2>
						<ol>
							<li>Link typography scales to design tokens.</li>
							<li>Ensure mobile navigation collapses gracefully.</li>
							<li>Add focused CTAs (newsletter, share buttons, related posts).</li>
							<li>Leave comments UI ready even if backend is coming later.</li>
						</ol>

						<p class="text-gray-700">Once the backend is wired up, replace the static arrays with eloquent resources and hydrate comments via Livewire, Inertia, or your stack of choice.</p>
					</article>

					<aside class="lg:sticky lg:top-8 bg-gray-50 border border-gray-100 rounded-2xl p-6 space-y-6" id="resources">
						<div>
							<p class="text-xs uppercase tracking-wide text-gray-500">Tags</p>
							<div class="mt-3 flex flex-wrap gap-2 text-xs">
								<span class="px-3 py-1 rounded-full bg-white border">Tailwind</span>
								<span class="px-3 py-1 rounded-full bg-white border">Laravel</span>
								<span class="px-3 py-1 rounded-full bg-white border">Design</span>
								<span class="px-3 py-1 rounded-full bg-white border">UX Writing</span>
							</div>
						</div>
						<div class="rounded-2xl py-5 flex flex-col sm:flex-row gap-4 sm:items-center">
							<img src="https://images.unsplash.com/photo-1544723795-3fb6469f5b39?w=200&h=200&auto=format&fit=crop" alt="Author" class="w-15 h-15 rounded-full object-cover" />
							<div>
								<p class="text-sm uppercase tracking-wide text-gray-500">Written by</p>
								<p class="text-xl font-semibold">Sierra Patel</p>
								<p class="text-gray-600">Sierra leads the content platform team at CodeTalk.</p>
								<div class="flex items-center gap-4 text-sm text-indigo-600 mt-3">
									<a href="#">Twitter</a>
									<a href="#">LinkedIn</a>
									<a href="#">Website</a>
								</div>
							</div>
						</div>
					</aside>
				</section>

				<section class="grid gap-6 lg:grid-cols-[1fr_320px]">
					<div class="space-y-6">
						

						<div class="rounded-2xl border border-gray-200 p-6 space-y-4">
							<div class="flex items-center justify-between">
								<h3 class="text-lg font-semibold">Discussion</h3>
								<button class="px-3 py-1 text-sm bg-gray-900 text-white rounded">Leave a comment</button>
							</div>
							<p class="text-sm text-gray-600">You can wire this up to your favorite comment system later. For now, we prefill a few sample threads to show spacing.</p>
							<div class="space-y-4">
								@foreach (range(1, 2) as $comment)
									<div class="flex gap-3">
										<img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?w=80&h=80&auto=format&fit=crop" alt="Commenter" class="w-12 h-12 rounded-full object-cover" />
										<div class="flex-1">
											<p class="text-sm font-semibold">Commenter {{ $comment }}</p>
											<p class="text-xs text-gray-500">2 hours ago</p>
											<p class="mt-2 text-sm text-gray-700">Loving this layout. Going to drop it into a Livewire setup later today—thanks for sharing the callout idea.</p>
											<button class="mt-2 text-xs text-indigo-600 font-semibold">Reply</button>
										</div>
									</div>
								@endforeach
							</div>
						</div>
					</div>

					<div class="space-y-6" id="contact">
						<div class="rounded-2xl border border-gray-200 p-6">
							<p class="text-sm uppercase tracking-wide text-gray-500">Related reads</p>
							<ul class="mt-3 space-y-3 text-sm text-gray-700">
								<li><a href="#" class="hover:text-indigo-600">How to ship content faster with Blade components</a></li>
								<li><a href="#" class="hover:text-indigo-600">Design tokens for Laravel + Tailwind teams</a></li>
								<li><a href="#" class="hover:text-indigo-600">Crafting delightful onboarding modals</a></li>
							</ul>
						</div>
						<div class="rounded-2xl border border-gray-200 p-6 bg-indigo-50">
							<p class="text-lg font-semibold text-indigo-900">Join the fortnightly digest</p>
							<p class="text-sm text-indigo-900/70 mt-2">Stories on DX, UI kits, and Laravel tips. No spam.</p>
							<form class="mt-4 space-y-3">
								<input type="email" placeholder="you@example.com" class="w-full px-3 py-2 rounded border border-indigo-200 bg-white focus:outline-none focus:ring-2 focus:ring-indigo-400" />
								<button type="submit" class="w-full px-4 py-2 rounded bg-indigo-600 text-white font-semibold">Subscribe</button>
							</form>
						</div>
					</div>
				</section>
			</div>
		</main>

		<footer class="mt-16 bg-white border-t">
			<div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-8 flex flex-col sm:flex-row items-center justify-between gap-4 text-sm text-gray-500">
				<p>© 2025 CodeTalk — Crafted with Laravel & Tailwind.</p>
				<div class="flex items-center gap-4">
					<a href="#">Privacy</a>
					<a href="#">Support</a>
					<a href="#">Twitter</a>
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
					const isHidden = mobileMenu.classList.toggle('hidden');
					toggleButton.setAttribute('aria-expanded', (!isHidden).toString());
				});
			});
		</script>
	</body>
</html>

