@props(['popularCategories'])
<div class="bg-white rounded-lg shadow p-4">
    <h4 class="text-sm font-semibold text-gray-700">Popular Categories</h4>
    <ul class="mt-3 text-sm space-y-2 text-gray-600">
        @foreach ($popularCategories as $category)
            <li><a href="/?category={{$category->slug}}{{request('search')? '&search='.request('search') : ''}}{{request('username')? '&username='.request('username') : ''}}">{{ $category->name }} <span class="text-xs text-gray-400">({{$category->blogs_count}})</span></a></li>
        @endforeach
    </ul>
</div>