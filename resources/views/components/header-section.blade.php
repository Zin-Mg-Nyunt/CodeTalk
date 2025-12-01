@props(['blog'])
<header class="bg-linear-to-r from-indigo-600 to-indigo-400 text-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-16 space-y-6">
        <div class="flex flex-wrap items-center gap-3 text-sm text-white/80">
            <span class="px-2 py-1 rounded bg-white/20">{{ $blog->category->name }}</span>
            <span>{{ $blog->created_at->diffForHumans() }}</span>
            <span>•</span>
            <span>12 min read</span>
        </div>
        <img src="{{ $blog->thumbnail ?? 'https://images.unsplash.com/photo-1545239351-1141bd82e8a6?q=80&w=400&auto=format&fit=crop&ixlib=rb-4.0.3&s=placeholder' }}" alt="" class="w-full h-64 sm:h-80 md:h-96 object-cover rounded-lg shadow-lg"/>
        <h1 class="text-4xl sm:text-5xl font-extrabold leading-tight">{{ $blog->title }}</h1>
        <div class="flex flex-wrap items-center gap-4 text-sm">
            <div class="flex items-center gap-3">
                @if ($blog->author->avatar)
                    <img src="{{ $blog->author->avatar }}" alt="" class="w-10 h-10 rounded-full object-cover cursor-pointer">
				@else
					<span class="w-10 h-10 rounded-full bg-indigo-600 text-white flex items-center justify-center text-sm font-medium uppercase cursor-pointer">{{ substr($blog->author->name,0,2) }}</span>
				@endif
                <p class="font-semibold">{{ $blog->author->name }}</p>
                <p class="text-white/70">Product Engineer @ CodeTalk</p>
                </div>
            </div>
            <div class="flex items-center gap-3">
                <button class="px-4 py-2 rounded border border-white/50 hover:bg-white/10">Share</button>
                <button class="px-4 py-2 bg-white text-indigo-600 rounded hover:bg-gray-100">Download PDF</button>
                <form action="{{ route('subscription.handle',$blog->slug) }}" method="POST">
                    @csrf
                    @auth      
                        @if (auth()->user()->isSubscribed($blog))
                            <button type="submit" class="px-4 py-2 bg-white text-red-600 rounded hover:bg-gray-100 cursor-pointer active:ring-3 active:ring-gray-200">Unsubscribe</button>
                        @else
                            <button type="submit" class="px-4 py-2 bg-white text-yellow-600 rounded hover:bg-gray-100 cursor-pointer active:ring-3 active:ring-gray-200">Subscribe</button>
                        @endif
                    @endauth
                </form>
            </div>
        </div>
    </div>
</header>