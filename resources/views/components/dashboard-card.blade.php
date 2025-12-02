@props(['count','title'])
@php
    $border = match($title) {
        'Blogs' => 'border-indigo-600',
        'Categories' => 'border-green-600',
        'Users' => 'border-blue-600',
        'Comments' => 'border-orange-600',
    };
    $text = match($title) {
        'Blogs' => 'text-indigo-600',
        'Categories' => 'text-green-600',
        'Users' => 'text-blue-600',
        'Comments' => 'text-orange-600',
    };
    $route = match($title) {
        'Blogs' => 'admin.blogs',
        'Categories' => 'admin.categories',
        'Users' => 'admin.users',
        'Comments' => 'admin.comments',
    };
@endphp
        <div class="bg-white rounded-lg shadow p-6 border-l-4 {{$border}}">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-500 text-sm font-medium">Total {{$title}}</p>
                        <p class="text-3xl font-bold text-gray-800 mt-2">{{ $count ?? 0 }}</p>
                    <p class="text-xs text-gray-400 mt-2">Blog posts published</p>
                </div>
                <div class="bg-indigo-100 rounded-full p-4">
                    <svg 
                        class="w-8 h-8 {{ $text }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        @if ($title == 'Blogs')
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                        @elseif ($title == 'Categories')
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 012 12V7a2 2 0 012-2z"/>
                        @elseif ($title == 'Users')
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 8.048M7 20h10a2 2 0 002-2v-1.061a2 2 0 00-.868-1.651l-4-2.5a2 2 0 00-2.264 0l-4 2.5A2 2 0 007 18.939V19a2 2 0 002 2z"/>
                        @elseif ($title == 'Comments')
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"/>
                        @endif
                    </svg>
                </div>
            </div>
            <a href="{{ route($route) }}" class="text-indigo-600 text-sm font-semibold hover:underline mt-4 inline-block">View all →</a>
        </div>