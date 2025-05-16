<x-layout>
    <x-slot:title>Home Page</x-slot:title>
    <x-slot:headerTitle>Welcome to the Home Page!</x-slot:headerTitle>

    @auth
        <h1>Sveiks, {{ Auth::user()->first_name }}!</h1>
    @endauth

    @guest
        <h1>Welcome, Guest!</h1>
    @endguest
</x-layout>
