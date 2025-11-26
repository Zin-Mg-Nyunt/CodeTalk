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
    
    <x-sidebar-section />
</section>