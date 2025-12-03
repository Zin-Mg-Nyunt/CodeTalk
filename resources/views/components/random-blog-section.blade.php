@props(['randomBlogs'])
<div class="rounded-2xl border border-gray-200 p-6 bg-white">
    <h4 class="text-sm font-semibold text-gray-700">Random Read</h4>
    @foreach ($randomBlogs as $blog) 
        <article class="mt-3 flex gap-3">
            <img src="{{ $blog->thumbnail }}" alt="random" class="w-16 h-16 object-cover rounded" />
            <div>
                <a href="#" class="font-medium">{{ $blog->title }}</a>
                <div class="text-xs text-gray-500 mt-1">
                    {{ $blog->created_at->diffForHumans() }} 
                        <span class=" text-xs text-gray-500 bg-indigo-200 px-2 py-1 rounded">
                            {{ $blog->category->name }}
                        </span>
                </div>
            </div>
        </article>
    @endforeach
</div>
