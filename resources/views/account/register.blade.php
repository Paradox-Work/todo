@extends('layouts.main')

@section('title', 'User Account') <!-- This changes <title> -->

@section('headerTitle', 'Welcome to your Account!') <!-- This changes header -->

@section('content')
<div class="register-container">
        <h2>Register</h2>

        <form action="/account" method="POST">
            @csrf
            @if ($errors->any())
  <ul>
    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
  </ul>
@endif
            <input type="text" name="first_name" placeholder="First Name" required>
            <input type="text" name="last_name" placeholder="Last Name" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="password" name="password_confirmation" placeholder="Password_confirmation" required>
            <button type="submit">Register</button>
        </form>
    </div>
@endsection
