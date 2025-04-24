@extends('layouts.main')

@section('title', 'User Account') <!-- This changes <title> -->

@section('headerTitle', 'Welcome to the your Account!') <!-- This changes header -->

@section('content')
<h2>Login</h2>

        <form action="/login" method="POST">
            @csrf
            @if ($errors->any())
  <ul>
    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
  </ul>
@endif
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Register</button>
        </form>
@endsection
