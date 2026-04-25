<x-layouts.app>
    <h2>Login Page</h2>

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <x-form.error>{{ $error }}</x-form.error>
        @endforeach
    @endif

    @if (session('error'))
        <x-form.error>{{ session('error') }}</x-form.error>
    @endif
    
    <form action="{{ route('login') }}" method="post">
        @csrf
        <x-form.auth.field type="email" name="email" label="Enter your email" />

        <x-form.auth.field type="password" name="password" label="Password" />

        <x-form.auth.submit-button>Login</x-form.auth.submit-button>
    </form>

    <p>
        <a href="#">Forgot Password?</a>
    </p>

    <p>
        Don't have an account? <a href="{{ route('register.form') }}">Register</a>
    </p>
</x-layouts.app>
