    <!-- FILTERS: category / tag / search -->
    <section id="filters" class="bg-white rounded-lg shadow p-6">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
            <div class=" space-y-3">
                <div class="flex items-center gap-3 flex-wrap">
                    <div class="text-sm font-medium text-gray-700 min-w-20">Categories:</div>
                    <div class="flex gap-2 flex-wrap">
                        <a href="" class="px-3 py-1 text-sm bg-gray-100 rounded hover:bg-gray-200">All</a>
                        <a href="" @class(["px-3 py-1 text-sm bg-indigo-50 rounded",'text-indigo-700' => true])>Tutorials</a>
                        <a href="" class="px-3 py-1 text-sm bg-gray-100 rounded">Opinion</a>
                        <a href="" class="px-3 py-1 text-sm bg-gray-100 rounded">Tools</a>
                        <a href="" class="px-3 py-1 text-sm bg-gray-100 rounded">News</a>
                    </div>
                </div>
                <div class="flex items-center gap-3 flex-wrap">
                    <div class="text-sm font-medium text-gray-700 min-w-20">Tags:</div>
                    <div class="flex gap-2 flex-wrap">
                        <a href="" class="px-2 py-1 text-sm bg-gray-100 rounded">PHP</a>
                        <a href="" class="px-2 py-1 text-sm bg-gray-100 rounded">Laravel</a>
                        <a href="" class="px-2 py-1 text-sm bg-gray-100 rounded">Tailwind</a>
                        <a href="" class="px-2 py-1 text-sm bg-gray-100 rounded">API</a>
                        <a href="" class="px-2 py-1 text-sm bg-gray-100 rounded">DevOps</a>
                        <a href="" class="px-2 py-1 text-sm bg-gray-100 rounded">UI</a>
                        <a href="" class="px-2 py-1 text-sm bg-gray-100 rounded">UX</a>
                    </div>
                </div>
            </div>

            <div class="flex items-center gap-4 w-full md:w-auto">
                <form action="">
                    <div class="flex items-center gap-2 bg-gray-50 rounded px-3 py-2 w-full md:w-80">
                        <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35M11 19a8 8 0 100-16 8 8 0 000 16z"></path></svg>
                        <input name="search" type="search" placeholder="Search posts" class="bg-transparent outline-none text-sm w-full" />
                        <button type="submit" class=" cursor-pointer text-gray-400 hover:text-gray-700 transition duration-200">Search</button>
                    </div>
                </form>
                
            </div>
        </div>
    </section>