 <!-- BLOG CARDS -->
 @props(['blogs']);
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
            @foreach ($blogs as $blog)
                <article class="bg-white rounded-lg shadow overflow-hidden flex">
                            <img src="https://images.unsplash.com/photo-1545239351-1141bd82e8a6?q=80&w=400&auto=format&fit=crop&ixlib=rb-4.0.3&s=placeholder" alt="thumb" class="w-36 h-auto" />
                            <div class="p-4 flex-1 space-y-2">
                                <div class=" space-x-1">
                                    <span class=" text-sm font-bold text-gray-500">{{ $blog->author->name }}</span>
                                    <span class=" text-xs text-gray-500 bg-indigo-200 px-2 py-1 rounded">{{ $blog->category->name }}</span>
                                </div>
                                <h3 class="font-semibold">{{ $blog->title }}</h3>
                                <p class="mt-2 text-sm text-gray-600 line-clamp-2">{{ $blog->body }}</p>
                                <div class="mt-3 flex items-center justify-between">
                                    <div class="text-xs text-gray-500">{{ $blog->created_at->diffForHumans() }}</div>
                                    <a href="/blogs/{{$blog->slug}}" class="text-indigo-600 text-sm">Read</a>
                                </div>
                            </div>
                </article>
            @endforeach
        </div>

        <!-- Pagination (above footer) -->
        {{$blogs->links()}}

    </div>
    
    <x-sidebar-section />
</section>