<x-layout>
    <x-slot:title>Izveidot uzdevumu</x-slot:title>

    <h1>Izveidot uzdevumu</h1>

    <form action="{{ route('todos.store') }}" method="POST">
        @csrf
        <input name="content" />
        <button>Save</button>
        
    </form>
    @error("content")
  <p style="color:red;">{{ $message }}</p>
    @enderror

</x-layout>
