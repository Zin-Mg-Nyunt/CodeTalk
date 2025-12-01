@props(['name','categories'])
<div>
    <label for="{{$name}}" class="block text-sm font-medium text-gray-700">Category</label>
    <select id="{{$name}}" name="{{$name}}" required class="mt-1 block w-full rounded border border-gray-200 px-3 py-2 bg-white focus:outline-none focus:ring-2 focus:ring-indigo-300">
        <option value="">Select a category</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}" {{old($category->id) == $category->id ?'selected' : ''}}>{{ $category->name }}</option>
            @endforeach
    </select>
    @error('{{$name}}') <p class="text-xs text-red-600 mt-1">{{ $message }}</p> @enderror
</div>