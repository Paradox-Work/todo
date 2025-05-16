<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <title>ToDo</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
    <h1>{{ $todo->content }}</h1>
    <p>Izpildīts: {{ $todo->completed ? 'Jā' : 'Nē' }}</p>
</body>
</html>
