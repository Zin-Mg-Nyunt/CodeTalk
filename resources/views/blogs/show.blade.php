<x-layout-section>
	<x-header-section />
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
					<x-comment-section />

					<div class="space-y-6" id="contact">
						<x-random-blog-section />
						<x-subscribed-card />
					</div>
				</section>
			</div>
		</main>
</x-layout-secti>
