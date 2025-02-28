@extends('layouts.main')

@section('title', 'Up-To-Date News') <!-- This changes <title> -->

@section('headerTitle', 'Welcome to the Up-To-Date News!') <!-- This changes header -->

@section('content')
<h1>Sveiks 2!</h1>
<ul>
  @foreach ($news as $new)
    <li>{{ $new->content }}</li>
  @endforeach
</ul>
@endsection
