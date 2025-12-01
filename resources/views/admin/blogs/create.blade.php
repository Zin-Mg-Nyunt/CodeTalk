@props(["categories"])
<x-layout-section>
    <main class="max-w-4xl mx-auto mt-12 bg-white p-8 rounded-lg shadow">
        <div class="flex items-center justify-between mb-6">
            <h1 class="text-2xl font-semibold text-gray-800">Create Blog</h1>
            <a href="{{ route('blogs.index')}}" class="text-sm text-gray-600 hover:underline">Back to list</a>
        </div>

        @if ($errors->any())
            <x-alert type="error">
                <div class="font-medium">Please fix the following errors:</div>
                <ul class="mt-2 list-disc ml-5 text-sm">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </x-alert>
        @endif

        <form action="{{ route('admin.blogs.store') }}" method="POST" class="space-y-6" enctype="multipart/form-data">
            @csrf

            <x-input name="title" />
            <x-input name="slug">
                <p class="text-xs text-gray-500 mt-1">URL friendly identifier — lowercase, hyphens instead of spaces.</p>
            </x-input>
            <x-select-option name="category_id" :categories="$categories" />

            <div>
                <label for="body" class="block text-sm font-medium text-gray-700">Body</label>
                <textarea id="body" name="body" rows="8" required class="mt-1 block w-full rounded border border-gray-200 px-3 py-2 resize-y focus:outline-none focus:ring-2 focus:ring-indigo-300">{{ old('body') }}</textarea>
                @error('body') <p class="text-xs text-red-600 mt-1">{{ $message }}</p> @enderror
            </div>

            <x-input name="thumbnail" type="file"/>

            <div class="flex items-center justify-end gap-3">
                <a href="{{ url('/admin/blogs') }}" class="inline-flex items-center px-4 py-2 border border-gray-200 rounded text-sm text-gray-700 hover:bg-gray-50">Cancel</a>
                <button type="submit" class="inline-flex items-center px-4 py-2 bg-indigo-600 text-white rounded hover:bg-indigo-700">Create Blog</button>
            </div>
        </form>
    </main>

    <script>
       document.addEventListener('DOMContentLoaded',()=>{
        const titleInput = document.getElementById('title');
        const slugInput = document.getElementById('slug');

        titleInput.addEventListener('input',()=>{
            if(slugInput.dataset.touched === 'true') return;
            const slug = titleInput.value.toLowerCase().trim()
                .replace(/[^a-z0-9\s-]/g, '') // Remove invalid chars
                .replace(/\s+/g, '-')         // Replace spaces with hyphens
                .replace(/-+/g, '-');         // Collapse multiple hyphens
            slugInput.value = slug;
        })
        slugInput.addEventListener('input',()=>{
            slugInput.dataset.touched = 'true';
        })
       })
    </script>
</x-layout-section>