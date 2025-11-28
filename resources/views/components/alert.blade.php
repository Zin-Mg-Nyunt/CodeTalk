@props(['type' => 'info'])
@php
    $classes = match($type) {
        'success' => 'bg-green-50 border-green-400 text-green-800',
        'error' => 'bg-red-50 border-red-400 text-red-800',
        'warning' => 'bg-yellow-50 border-yellow-400 text-yellow-800',
        default => 'bg-blue-50 border-blue-400 text-blue-800',
    };
@endphp

<div role="alert" class="alert {{ $classes }} p-4 rounded">
    <div class="flex items-center">
        <div class="flex-1 text-md text-center">
            {{ $slot }}
        </div>
        <button type="button" onclick="this.closest('.alert').style.display='none'" class="ml-4 text-sm text-gray-600 hover:text-gray-900 cursor-pointer">✕</button>
    </div>
</div>
