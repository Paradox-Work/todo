@extends('layouts.main')

@section('title', 'Veicamie uzdevumi') <!-- This changes <title> -->

@section('headerTitle', 'Welcome to the Home Page!') <!-- This changes header -->

@section('content')
<h1>Visi veicamie uzdevumi</h1>
@guest
    <p>Lūdzu, piesakies, lai redzētu savus uzdevumus.</p>
    <a href="/login">
    <button type="button">Login</button>
    </a>

@endguest
@auth
    <p>Sveiks, {{ auth()->user()->first_name }}!</p>
    <form method="POST" action="/logout">
        @csrf
        <button type="submit">Logout</button>
    </form>
@endauth
<ul>
  @foreach ($news as $new)
    <li>{{ $new->content }}</li>
  @endforeach
</ul>
@endsection
