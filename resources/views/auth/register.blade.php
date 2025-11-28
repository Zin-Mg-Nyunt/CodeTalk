<x-layout-section>
    <div class="max-w-md mx-auto mt-12 bg-white p-8 rounded-lg shadow">
        <h1 class="text-2xl font-semibold text-center text-gray-800">Create an account</h1>
        <form method="POST" action="{{ route('register') }}" class="mt-6 space-y-4">
            @csrf
    
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                <input id="name" name="name" value="{{ old('name') }}" required autofocus
                class="mt-1 block w-full rounded border-gray-200 shadow-sm px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-300" />
                @error('name') 
                    <p class="text-xs text-red-600 mt-1">{{ $message }}</p> 
                @enderror
            </div>
    
            <div>
                <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                <input id="username" name="username" value="{{ old('username') }}" required
                class="mt-1 block w-full rounded border-gray-200 shadow-sm px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-300" />
                @error('username') 
                    <p class="text-xs text-red-600 mt-1">{{ $message }}</p> 
                @enderror
            </div>
    
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required
                class="mt-1 block w-full rounded border-gray-200 shadow-sm px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-300" />
                @error('email') 
                    <p class="text-xs text-red-600 mt-1">{{ $message }}</p>
                @enderror
            </div>
    
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input id="password" type="password" name="password" required
                class="mt-1 block w-full rounded border-gray-200 shadow-sm px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-300" />
                @error('password') 
                    <p class="text-xs text-red-600 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                <input id="password_confirmation" type="password" name="password_confirmation" required
                class="mt-1 block w-full rounded border-gray-200 shadow-sm px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-300" />
                @error('password_confirmation') 
                    <p class="text-xs text-red-600 mt-1">{{ $message }}</p> 
                @enderror
            </div>
    
            <div>
                <button type="submit" class="w-full bg-indigo-600 text-white py-2 rounded hover:bg-indigo-700">Register</button>
            </div>
        </form>
    
        <p class="text-sm text-center text-gray-600 mt-4">Already registered? <a href="{{ route('login.form') }}" class="text-indigo-600 hover:underline">login in</a></p>
    </div>
</x-layout-section>