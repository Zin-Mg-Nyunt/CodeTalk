@props(['comments','blog'])
{{-- Comments section --}}
<div class="space-y-6" id="comments">
    <div class="rounded-2xl border border-gray-200 p-6 space-y-6 bg-white">
        <div class="flex items-center justify-between">
            <h3 class="text-lg font-semibold">Discussion</h3>
            <span class="text-sm text-gray-500">Be kind — keep comments constructive</span>
        </div>

        {{-- Comment form (auth-aware) --}}
        @auth
        
        <form method="POST" action="{{ route('comment.store',$blog->slug) }}" class="space-y-4">
                @csrf
                <div class="flex gap-4">
                    <div class="shrink-0">
                        @if (Auth::user()->avatar)
                            <img src="{{ Auth::user()->avatar }}" alt="" class=" w-10 h-10 rounded-full object-cover cursor-pointer">
                        @else
                            <span class="w-10 h-10 rounded-full bg-indigo-600 text-white flex items-center justify-center text-sm font-medium uppercase cursor-pointer">{{ substr(Auth::user()->name,0,2) }}</span>
                        @endif
                    </div>
                    <div class="flex-1">
                        <label for="comment" class="sr-only">Your comment</label>
                        <textarea id="comment-input" name="comment" rows="4" placeholder="Share your thoughts..." required
                            class="w-full rounded border border-gray-200 px-3 py-2 resize-y focus:outline-none focus:ring-2 focus:ring-indigo-300"></textarea>

                        <div class="flex items-center justify-between mt-2">
                            <div class="text-xs text-gray-500" id="char-count">0 / 500</div>
                            <div class="flex items-center gap-3">
                                <button type="submit" id="comment-submit" class="inline-flex items-center px-4 py-2 bg-indigo-600 text-white text-sm rounded disabled:opacity-50" disabled>Post Comment</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        @else
            <div class="flex gap-4 items-center">
                {{-- <div class="w-12 h-12 rounded-full bg-gray-200"></div> --}}
                <div class="flex-1 text-sm text-gray-700 text-center">
                    <p class="mb-2">Please <a href="{{ route('login.form') }}" class="text-indigo-600 hover:underline">log in</a> or <a href="{{ route('register.form') }}" class="text-indigo-600 hover:underline">register</a> to join the discussion.</p>
                </div>
            </div>
        @endauth

        {{-- Comments list --}}
        <div class="pt-2 border-t border-gray-100 space-y-4 max-h-70 overflow-auto">
            @foreach ($comments as $comment)
                <div class="flex gap-3">
                    @if ($comment->author->avatar)
                        <img src="{{ $comment->author->avatar }}" alt="" class="w-10 h-10 rounded-full object-cover cursor-pointer">
					@else
					    <span class="w-10 h-10 rounded-full bg-indigo-600 text-white flex items-center justify-center text-sm font-medium uppercase cursor-pointer">{{ substr($comment->author->name,0,2) }}</span>
					@endif
                    <div class="flex-1">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-semibold">{{ $comment->author->name }}</p>
                                <p class="text-xs text-gray-500">{{ $comment->created_at?->diffForHumans() }}</p>
                            </div>
                        </div>
                        <p class="mt-2 text-sm text-gray-700">{{ $comment->body }}</p>
                        <div class="mt-2 flex items-center gap-4 text-xs">
                            <button class="text-indigo-600 font-semibold">Reply</button>
                            <button class="text-gray-500">Like</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const textarea = document.getElementById('comment-input');
        const submit = document.getElementById('comment-submit');
        const count = document.getElementById('char-count');
        const max = 500;

        if (!textarea) return;

        const update = () => {
            const len = textarea.value.length;
            count.textContent = `${len} / ${max}`;
            submit.disabled = len === 0 || len > max;
        };

        textarea.addEventListener('input', update);
        update();
    });
</script>
