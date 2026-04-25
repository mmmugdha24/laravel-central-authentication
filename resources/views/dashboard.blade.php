<x-layouts.app>
    dashboard
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        {{-- <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">Logout</button> --}}
        <x-form.auth.submit-button>Logout</x-form.auth.submit-button>
    </form>
</x-layouts.app>
