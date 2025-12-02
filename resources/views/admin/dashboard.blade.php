@props(['blogs','categoriesCount','usersCount','commentsCount','recentBlogs'])
<x-admin-layout title="Dashboard">
    <!-- Statistics Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <!-- Blogs Card -->
        <x-dashboard-card 
            :count="$blogs->count()" 
            title="Blogs"
        />
        <!-- Categories Card -->
        <x-dashboard-card 
            :count="$categoriesCount" 
            title="Categories"
        />
        <!-- Users Card -->
        <x-dashboard-card 
            :count="$usersCount" 
            title="Users"  
        />
        <!-- Comments Card -->
        <x-dashboard-card 
            :count="$commentsCount" 
            title="Comments"  
        />
    </div>

    <!-- Recent Activity / Additional Widgets -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <!-- Recent Blogs -->
        <div class="bg-white rounded-lg shadow p-6">
            <h3 class="text-lg font-semibold text-gray-800 mb-4">Recent Blogs</h3>
            <div class="space-y-3">
                @forelse($blogs->sortByDesc('created_at')->take(3) ?? [] as $blog)
                    <div class="flex items-center justify-between py-2 border-b border-gray-100">
                        <div>
                            <a href="{{ route('blogs.show',$blog->slug) }}" class="font-medium text-gray-800">{{ $blog->title }}</a>
                            <p class="text-xs text-gray-500">{{ $blog->created_at->diffForHumans() }}</p>
                        </div>
                        <span class="inline-block px-2 py-1 text-xs font-semibold bg-indigo-100 text-indigo-600 rounded">{{ $blog->category->name ?? 'N/A' }}</span>
                    </div>
                @empty
                    <p class="text-gray-500 text-sm">No recent blogs</p>
                @endforelse
            </div>
        </div>

        <!-- System Status -->
        <div class="bg-white rounded-lg shadow p-6">
            <h3 class="text-lg font-semibold text-gray-800 mb-4">System Status</h3>
            <div class="space-y-4">
                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-3">
                        <div class="w-3 h-3 rounded-full bg-green-500"></div>
                        <span class="text-gray-700">Database</span>
                    </div>
                    <span class="text-sm font-semibold text-green-600">Connected</span>
                </div>
                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-3">
                        <div class="w-3 h-3 rounded-full bg-green-500"></div>
                        <span class="text-gray-700">Cache</span>
                    </div>
                    <span class="text-sm font-semibold text-green-600">Active</span>
                </div>
                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-3">
                        <div class="w-3 h-3 rounded-full bg-green-500"></div>
                        <span class="text-gray-700">Mail</span>
                    </div>
                    <span class="text-sm font-semibold text-green-600">Ready</span>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>