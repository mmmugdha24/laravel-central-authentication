<x-layouts.app>
    <h2>Register Page</h2>

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <x-form.error>{{ $error }}</x-form.error>
        @endforeach
    @endif

    @if(session('error'))
        <x-form.error>{{ session('error') }}</x-form.error>
    @endif
    
    <form action="{{ route('register') }}" method="post">
        @csrf
        <x-form.auth.field type="text" name="name" label="Full Name" />

        <x-form.auth.field type="email" name="email" label="Enter your email" />

        <x-form.auth.field type="password" name="password" label="Password" />

        <x-form.auth.field type="password" name="password_confirmation" label="Confirm Password" />

        <x-form.auth.submit-button>Register</x-form.auth.submit-button>

    </form>

    <p>
        Already have an account? <a href="{{ route('login.form') }}">Login</a>
    </p>

</x-layouts.app>
