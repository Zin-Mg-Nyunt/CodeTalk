<x-admin-layout title="Blogs">
    <div class="flex items-center justify-between mb-6">
        <div>
            <h2 class="text-2xl font-bold text-gray-800">Manage Blogs</h2>
            <p class="text-gray-500 text-sm mt-1">Total: {{ $blogs->count() }} blog posts</p>
        </div>
        <a href="{{ route('admin.blogs.create') }}" class="inline-flex items-center px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
            Create New Blog
        </a>
    </div>

    @if (session('success'))
        <x-alert type="success">{{ session('success') }}</x-alert>
    @elseif (session('info'))
        <x-alert type="info">{{ session('info') }}</x-alert>
    @endif

    <div class="bg-white rounded-lg shadow overflow-hidden">
        <table class="w-full">
            <thead class="bg-gray-50 border-b border-gray-200">
                <tr>
                    <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Title</th>
                    <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Category</th>
                    <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Published At</th>
                    <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Total Comments</th>
                    <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @forelse ($blogs as $blog)
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 text-sm text-gray-800">
                            <a href="{{ route('blogs.show',$blog->slug) }}" target="__blink" class="text-indigo-600 hover:underline font-medium">
                                {{ Str::limit($blog->title, 40)}}
                            </a>
                        </td>
                        <td class="px-6 py-4 text-sm">
                            <span class="inline-block px-3 py-1 text-xs font-semibold bg-indigo-100 text-indigo-600 rounded-full">
                                {{ $blog->category->name ?? 'N/A' }}
                            </span>
                        </td>
                        <td class="px-6 py-4 text-sm text-gray-600">
                            <span class="text-xs">{{ $blog->created_at->format('M d, Y') }}</span>
                            <p class="text-gray-400 text-xs">{{ $blog->created_at->diffForHumans() }}</p>
                        </td>
                        <td class="px-6 py-4 text-sm text-gray-600">
                            <p class="text-xs text-center">{{ $blog->comments()->count() }}</p>
                        </td>
                        <td class="px-6 py-4 text-sm">
                            <div class="flex items-center space-x-2">
                                <a href="{{ route('admin.blogs.edit',$blog->slug) }}" class="inline-flex items-center px-3 py-1 bg-blue-100 text-blue-600 rounded hover:bg-blue-200">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg>
                                    Edit
                                </a>
                                <form action="{{ route('admin.blogs.delete',$blog->id) }}" method="POST" class="inline" 
                                    onsubmit="return confirm('Are you sure?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="inline-flex items-center px-3 py-1 bg-red-100 text-red-600 rounded hover:bg-red-200">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="px-6 py-8 text-center">
                            <div class="flex flex-col items-center justify-center">
                                <svg class="w-12 h-12 text-gray-300 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg>
                                <p class="text-gray-500 text-sm">No blogs found</p>
                                <a href="{{ url('/admin/blogs/create') }}" class="mt-2 text-indigo-600 hover:underline text-sm font-semibold">Create your first blog →</a>
                            </div>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</x-admin-layout>