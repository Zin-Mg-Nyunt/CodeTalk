@props(['blogs','randomBlogs'])
<main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 -mt-10">
    <x-filter-section :blogs="$blogs"/>
    <x-blog-card-section :blogs="$blogs" :randomBlogs="$randomBlogs"/>
</main>