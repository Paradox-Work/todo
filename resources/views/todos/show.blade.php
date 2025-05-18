<x-layout>
    <x-slot name="title">
        {{ $todo->content }}
    </x-slot>

    <h1>{{ $todo->content }}</h1>
    <p>Izpildīts: {{ $todo->completed ? 'Jā' : 'Nē' }}</p>
    <a href="/todos/{{ $todo->id }}/edit">Edit this todo</a>
    <form action="/todos/{{ $todo->id }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this todo?');">
    @csrf
    @method('DELETE')
    <button type="submit" style="color:red;">Delete</button>
</form>
</x-layout>
