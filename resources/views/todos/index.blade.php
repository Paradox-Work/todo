@extends('layouts.main')

@section('title', 'Veicamie uzdevumi') <!-- This changes <title> -->

@section('headerTitle', 'Welcome to the Home Page!') <!-- This changes header -->

@section('content')
<h1>Visi veicamie uzdevumi</h1>
<ul>
  @foreach ($news as $new)
    <li>{{ $new->content }}</li>
  @endforeach
</ul>
@endsection
