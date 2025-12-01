@props(['blog'])
<x-layout-section>
	<x-header-section :blog="$blog"/>
		<main class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 -mt-12" id="blogs">
			<div class="bg-white rounded-2xl shadow-xl p-6 sm:p-10 space-y-10">
				<section class="grid gap-6 lg:grid-cols-[1fr_320px]">
					<article class="prose max-w-none" id="blog">
						<p>{{ $blog->body }}</p>
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
							@if ($blog->author->avatar)
								<img src="https://images.unsplash.com/photo-1544723795-3fb6469f5b39?w=200&h=200&auto=format&fit=crop" alt="Author" class="w-15 h-15 rounded-full object-cover" />
							@else
								<span class="w-30 h-15 rounded-full bg-indigo-600 text-white flex items-center justify-center text-sm font-medium uppercase cursor-pointer">{{ substr($blog->author->name,0,2) }}</span>
							@endif
							<div>
								<p class="text-sm uppercase tracking-wide text-gray-500">Written by</p>
								<p class="text-xl font-semibold">{{$blog->author->name}}</p>
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
					<x-comment-section :blog="$blog" :comments="$blog->comments()->with('author')->latest()->get()"/>

					<div class="space-y-6" id="contact">
						<x-random-blog-section :randomBlogs="$randomBlogs"/>
						<x-subscribed-card />
					</div>
				</section>
			</div>
		</main>
</x-layout-section>
