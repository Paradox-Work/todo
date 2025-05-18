<x-layout>
    <x-slot:title>Diaries</x-slot:title>

    <h1>Latest Diaries</h1>
    @auth
        <h1>Sveiks, {{ Auth::user()->first_name }}!</h1>
    @endauth

    @guest
        <h1>Welcome, Guest!</h1>
    @endguest
    <ul>
        @foreach ($Diaries as $diary)
        <li>
    <a href="/diaries/{{ $diary->id }}">
        <strong>{{ $diary->title }}</strong><br>
        <small>{{ $diary->date }}</small><br>
        {{ \Illuminate\Support\Str::limit($diary->body, 100) }}
    </a>
        </li>

        @endforeach
    </ul>
</x-layout>
