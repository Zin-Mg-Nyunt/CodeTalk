@props(['name','type'=>'text','value'=>''])
<div>
    <label for="{{$name}}" class="block text-sm font-medium text-gray-700">{{ ucwords($name)}}</label>
    <input type="{{$type}}" id="{{$name}}" name="{{$name}}" value="{{ old($name,$value) }}" {{$type != 'file' ? "required" : ''}}
        class="mt-1 block w-full rounded border border-gray-200 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-300" />
        {{$slot}}
    @error($name) <p class="text-xs text-red-600 mt-1">{{ $message }}</p> @enderror
</div>