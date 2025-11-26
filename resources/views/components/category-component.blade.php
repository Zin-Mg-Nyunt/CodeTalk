@props(['categories'])
<div class="flex items-center gap-3 flex-wrap">
    <div class="text-sm font-medium text-gray-700 min-w-20">Categories:</div>
    <div class="flex gap-2 flex-wrap">
        <a href="/" @class(["px-3 py-1 text-sm bg-indigo-50 rounded hover:bg-gray-200",'text-indigo-500 font-semibold' => !request('category')])>All</a>
        @foreach ($categories as $category)
            <a href="/?category={{$category->slug}}{{request('search') ? "&search=".request('search') : ''}}{{request('username') ? "&username=".request('username') : ''}}" @class(["px-3 py-1 text-sm bg-indigo-50 rounded hover:bg-gray-200",'text-indigo-500 font-semibold' => $category->slug == request('category')])>{{ $category->name }}</a>
        @endforeach
    </div>
</div>