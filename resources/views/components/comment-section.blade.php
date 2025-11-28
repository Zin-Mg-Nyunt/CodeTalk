{{-- Comments section --}}
<div class="space-y-6">
    <div class="rounded-2xl border border-gray-200 p-6 space-y-4">
        <div class="flex items-center justify-between">
            <h3 class="text-lg font-semibold">Discussion</h3>
            <button class="px-3 py-1 text-sm bg-gray-900 text-white rounded">Leave a comment</button>
        </div>
        <p class="text-sm text-gray-600">You can wire this up to your favorite comment system later. For now, we prefill a few sample threads to show spacing.</p>
        <div class="space-y-4  overflow-auto h-100" style=" scrollbar-width: none;">
            @foreach (range(1, 4) as $comment)
                <div class="flex gap-3" style="">
                    <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?w=80&h=80&auto=format&fit=crop" alt="Commenter" class="w-12 h-12 rounded-full object-cover" />
                    <div class="flex-1">
                        <p class="text-sm font-semibold">Commenter {{ $comment }}</p>
                        <p class="text-xs text-gray-500">2 hours ago</p>
                        <p class="mt-2 text-sm text-gray-700">Loving this layout. Going to drop it into a Livewire setup later today—thanks for sharing the callout idea.</p>
                        <button class="mt-2 text-xs text-indigo-600 font-semibold">Reply</button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>