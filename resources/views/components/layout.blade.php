<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Uzdevumi un dienasgrāmata' }}</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
    <x-header />
    
    <x-navigation />

    <main class="container">
        {{ $slot }}
        @guest
    <a href="{{ route('login') }}">Login</a>
    <a href="{{ route('signUp') }}">Sign Up</a>
  @endguest

  @auth
    <form method="POST" action="{{ route('logout') }}">
      @csrf
      <button type="submit">Logout</button>
    </form>
  @endauth
    </main>

    <x-footer /> 
</body>
</html>
