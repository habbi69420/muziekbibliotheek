<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nieuwe Single Toevoegen</title>
</head>
<body>
    <nav>
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('library') }}">Muziekbibliotheek</a>
        <a href="{{ route('songs') }}">Muzieknummers</a>
    </nav>
 
    <h1>Nieuwe Single Toevoegen</h1>
 
    <form method="POST" action="{{ route('songs.store') }}">
        @csrf
 
        <label for="title">Naam</label><br>
        <input type="text" id="title" name="title" placeholder="Naam van de single" value="{{ old('title') }}"><br>
        @error('title')
            <div class="error">{{ $message }}</div>
        @enderror
        <br>
 
        <label for="artist">Auteur</label><br>
        <input type="text" id="artist" name="artist" placeholder="Auteur" value="{{ old('artist') }}"><br>
        @error('artist')
            <div class="error">{{ $message }}</div>
        @enderror
        <br>
 
        <label for="year">Release jaar</label><br>
        <input type="number" id="year" name="year" placeholder="Release jaar" value="{{ old('year') }}"><br>
        @error('year')
            <div class="error">{{ $message }}</div>
        @enderror
        <br>
 
        <button type="submit">Verstuur</button>
    </form>
</body>
</html>