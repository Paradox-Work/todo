<x-layout>
    <x-slot name="title">
        {{ $diary->title }}
    </x-slot>

    <h1>{{ $diary->title }}</h1>
    <p>{{ $diary->body }}</p>
    <p>Datums: {{ $diary->date }}</p>

    <a href="/diaries/{{ $diary->id }}/edit">Edit this diary</a>

    <form action="/diaries/{{ $diary->id }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this diary?');">
        @csrf
        @method('DELETE')
        <button type="submit" style="color:red;">Delete</button>
    </form>
</x-layout>
