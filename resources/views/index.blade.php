<x-layouts.app>
    <div class="text-center mt-10">
        <h1 class="text-4xl font-bold mb-4">Welcome to Auth Kit</h1>
        <p class="text-lg text-gray-600 mb-6">Your central authentication solution for Laravel applications.</p>
        <a href="{{ route('login.form') }}" class="bg-blue-500 text-white px-4 py-2 rounded mr-2">Login</a>
        <a href="{{ route('register.form') }}" class="bg-green-500 text-white px-4 py-2 rounded">Register</a>
    </div>
</x-layouts.app>