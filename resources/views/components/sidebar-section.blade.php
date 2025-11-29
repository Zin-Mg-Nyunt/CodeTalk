@props(['randomBlogs'])
    <!-- Sidebar: categories / popular tags / random blog -->
    <aside class="space-y-6">
        <x-popular-category />

        <div class="bg-white rounded-lg shadow p-4">
            <h4 class="text-sm font-semibold text-gray-700">Popular Tags</h4>
            <ul class="mt-3 text-sm space-y-2 text-gray-600">
                <li><a href="#">PHP <span class="text-xs text-gray-400">(24)</span></a></li>
                <li><a href="#">API <span class="text-xs text-gray-400">(12)</span></a></li>
                <li><a href="#">UI <span class="text-xs text-gray-400">(18)</span></a></li>
            </ul>
        </div>

        <x-random-blog-section :randomBlogs="$randomBlogs"/>

        <x-subscribed-card />
    </aside>