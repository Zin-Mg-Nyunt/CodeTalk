<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>Admin Dashboard — CodeTalk</title>
		{{-- @if (file_exists(public_path('build/manifest.json'))) --}}
			@vite(['resources/css/app.css', 'resources/js/app.js'])
		{{-- @else
			<link rel="stylesheet" href="/css/app.css">
		@endif --}}
	</head>
	<body class="antialiased bg-gray-50">
		<div class="flex h-screen">
			<!-- Sidebar -->
			<aside class="w-64 bg-white shadow-lg flex flex-col">
				<div class="p-6 border-b border-gray-200 h-23">
					<h1 class="text-xl font-bold text-indigo-600">CodeTalk Admin</h1>
					<p class="text-xs text-gray-500 mt-1">Dashboard</p>
				</div>

				<nav class="flex-1 overflow-y-auto p-4 space-y-2">
					<a href="{{route('admin.dashboard')}}" class="flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-indigo-50 text-gray-700 hover:text-indigo-600">
						<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-3m0 0l7-4 7 4M5 9v10a1 1 0 001 1h12a1 1 0 001-1V9m-9 4v6m4-6v6"/></svg>
						<span>Dashboard</span>
					</a>

					<a href="{{ route('admin.index') }}" class="flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-indigo-50 text-gray-700 hover:text-indigo-600">
						<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg>
						<span>Blogs</span>
					</a>

					<a href="{{ route('admin.blogs.create') }}" class="flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-indigo-50 text-gray-700 hover:text-indigo-600">
						<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
						<span>Create Blog</span>
					</a>

					<a  class="flex items-center space-x-3 px-4 py-3 rounded-lg  text-gray-300" >
						<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 012 12V7a2 2 0 012-2z"/></svg>
						<span>Categories</span>
					</a>

					<a class="flex items-center space-x-3 px-4 py-3 rounded-lg text-gray-300 ">
						<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 8.048M7 20h10a2 2 0 002-2v-1.061a2 2 0 00-.868-1.651l-4-2.5a2 2 0 00-2.264 0l-4 2.5A2 2 0 007 18.939V19a2 2 0 002 2z"/></svg>
						<span>Users</span>
					</a>

					<a class="flex items-center space-x-3 px-4 py-3 rounded-lg text-gray-300 ">
						<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"/></svg>
						<span>Comments</span>
					</a>

                    <a href="{{ url('/admin/blogs/create') }}" class="flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-indigo-50 text-gray-700 hover:text-indigo-600">
						
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M10 12q-1.65 0-2.825-1.175T6 8t1.175-2.825T10 4t2.825 1.175T14 8t-1.175 2.825T10 12m-8 8v-2.8q0-.825.425-1.55t1.175-1.1q1.275-.65 2.875-1.1T10 13h.35q.15 0 .3.05q-.2.45-.337.938T10.1 15H10q-1.775 0-3.187.45t-2.313.9q-.225.125-.363.35T4 17.2v.8h6.3q.15.525.4 1.038t.55.962zm14 1l-.3-1.5q-.3-.125-.562-.262T14.6 18.9l-1.45.45l-1-1.7l1.15-1q-.05-.35-.05-.65t.05-.65l-1.15-1l1-1.7l1.45.45q.275-.2.538-.337t.562-.263L16 11h2l.3 1.5q.3.125.563.275t.537.375l1.45-.5l1 1.75l-1.15 1q.05.3.05.625t-.05.625l1.15 1l-1 1.7l-1.45-.45q-.275.2-.537.338t-.563.262L18 21zm1-3q.825 0 1.413-.587T19 16t-.587-1.412T17 14t-1.412.588T15 16t.588 1.413T17 18m-7-8q.825 0 1.413-.587T12 8t-.587-1.412T10 6t-1.412.588T8 8t.588 1.413T10 10m.3 8"/>
                        </svg>
						<span>Profile</span>
					</a>

					<hr class="my-4 border-gray-200">

					<a href="{{ url('/') }}" class="flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-indigo-50 text-gray-700 hover:text-indigo-600">
						<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
						<span>Back to Site</span>
					</a>
				</nav>

				<div class="p-4 border-t border-gray-200">
					<div class="flex items-center space-x-3 px-4 py-2 rounded-lg bg-gray-50">
						<div class="w-8 h-8 rounded-full bg-indigo-600 text-white flex items-center justify-center text-sm font-medium">{{ strtoupper(substr(Auth::user()->name,0,1)) }}</div>
						<div class="flex-1 text-xs">
							<p class="font-semibold text-gray-800">{{ Auth::user()->name }}</p>
							<p class="text-gray-500">Admin</p>
						</div>
					</div>
					<x-logout />
				</div>
			</aside>

			<!-- Main Content -->
			<main class="flex-1 overflow-y-auto">
				<!-- Top Bar -->
				<div class="bg-white border-b border-gray-200 px-6  h-23 flex items-center justify-between">
					<h2 class="text-2xl font-semibold text-gray-800">{{ $title ?? 'Dashboard' }}</h2>
					<div class="flex items-center space-x-4">
						<button class="p-2 rounded-lg hover:bg-gray-100 text-gray-600">
							<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/></svg>
						</button>
					</div>
				</div>

				<!-- Content Area -->
				<div class="p-6">
                    {{ $slot }}
				</div>
			</main>
		</div>
	</body>
</html>