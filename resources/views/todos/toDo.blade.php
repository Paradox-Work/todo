<x-layout>
    <x-slot:title>ToDo list</x-slot:title>

    <h1>Welcome to the Up-To-Date News!</h1>
    @auth
        <h1>Sveiks, {{ Auth::user()->first_name }}!</h1>
    @endauth

    @guest
        <h1>Welcome, Guest!</h1>
    @endguest
    <ul>
        @foreach ($Todos as $todo)
            <li><a href="/todos/{{ $todo->id }}">{{ $todo->content }}</a></li>
        @endforeach
    </ul>
</x-layout>
