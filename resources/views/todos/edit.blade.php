<x-layout>
    <x-slot:title>Edit Todo</x-slot:title>

    <h1>Edit Todo</h1>

    <form action="/todos/{{ $todo->id }}" method="POST">
        @csrf
        @method('PUT') {{-- Tell Laravel this is a PUT request for update --}}

        <label for="content">Content:</label>
        <input type="text" name="content" id="content" value="{{ old('content', $todo->content) }}">
        @error('content')
    <p style="color:red;">{{ $message }}</p>
        @enderror
        <label>
        Izpildīts:
        <input name="completed" type="hidden" value="0">
        <input name="completed" type="checkbox" value="1" {{ old('completed', $todo->completed) ? 'checked' : '' }}>
        </label>
        @error('completed')
    <p style="color:red;">{{ $message }}</p>
        @enderror
        <button type="submit">Save</button>
    </form>
</x-layout>
