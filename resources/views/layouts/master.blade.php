<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Muziek Bibliotheek</title>
</head>
<body>
    <nav>
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('library') }}">Muziekbibliotheek</a>
        <a href="{{ route('songs') }}">Muzieknummers</a>
    </nav>
 
    <div class="content">
        @yield('content')
    </div>
</body>
</html>
 