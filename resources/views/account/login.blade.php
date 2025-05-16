<x-layout>
    <x-slot:title>User Account</x-slot:title>
    <x-slot:headerTitle>Welcome to your Account!</x-slot:headerTitle>

    <h2>Login</h2>

    <form action="/login" method="POST">
        @csrf

        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Register</button>
    </form>
</x-layout>