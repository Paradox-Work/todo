<x-slot:title>Izveidot uzdevumu</x-slot:title>
<x-layout>
<form method="POST" action="{{ route('diaries.store') }}">
    @csrf

    <label>Nosaukums:</label>
    <input type="text" name="title" value="{{ old('title') }}">
    @error('title') <p>{{ $message }}</p> @enderror

    <label>Teksts:</label>
    <textarea name="body">{{ old('body') }}</textarea>
    @error('body') <p>{{ $message }}</p> @enderror

    <label>Datums:</label>
    <input type="date" name="date" value="{{ old('date') }}">
    @error('date') <p>{{ $message }}</p> @enderror

    <button type="submit">Saglabāt</button>
</form>
</x-layout>