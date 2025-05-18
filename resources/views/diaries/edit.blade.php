<x-layout>
    <x-slot:title>Edit Todo</x-slot:title> <!-- (You could rename this to "Edit Diary" for clarity) -->

    <h1>Edit Diary</h1> <!-- updated -->

    <form action="/diaries/{{ $diary->id }}" method="POST">
        @csrf
        @method('PUT') {{-- Tell Laravel this is a PUT request for update --}}

        <!-- Title -->
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" value="{{ old('title', $diary->title) }}">
        @error('title')
            <p style="color:red;">{{ $message }}</p>
        @enderror

        <!-- Body -->
        <label for="body">Body:</label> <!-- You accidentally wrote "Title:" again -->
        <input type="text" name="body" id="body" value="{{ old('body', $diary->body) }}"> <!-- you missed a " before id="body" -->
        @error('body')
            <p style="color:red;">{{ $message }}</p>
        @enderror

        <!-- Date -->
        <label for="date">Datums:</label>
        <input type="date" name="date" id="date" value="{{ old('date', $diary->date) }}"> <!-- you accidentally used a comma instead of a comma+braces combo -->
        @error('date')
            <p style="color:red;">{{ $message }}</p>
        @enderror

        <button type="submit">Save</button>
    </form>
</x-layout>
