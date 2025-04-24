@extends('layouts.main')

@section('title', 'Up-To-Date News') <!-- This changes <title> -->

@section('headerTitle', 'Welcome to the Up-To-Date News!') <!-- This changes header -->

@section('content')
<h1>Sveiks!</h1>
<ul>
@foreach ($news as $new)
  <li><a href="/pages/{{ $new->id }}">{{ $new->content }}</a></li>
  @endforeach
</ul>
@endsection
