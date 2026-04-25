<x-layouts.app>
    <h1 class="text-2xl font-bold mb-4">Dashboard</h1>
    <p>Welcome, {{ auth()->user()->name }}!</p>
    <p>
        Organization: {{ ucfirst(auth()->user()->organization->name) }}
    </p>
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <x-form.auth.submit-button>Logout</x-form.auth.submit-button>
    </form>
</x-layouts.app>
