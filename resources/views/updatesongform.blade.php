@extends('layouts.master')
 
@section('content')
    <h1>Update Song</h1>
 
    <form method="POST" action="{{ route('songs.update', ['id' => $song->id]) }}">
        @csrf
        @method('PUT')
 
        <label for="title">Naam</label><br>
        <input type="text" id="title" name="title" value="{{ old('title', $song->song_name) }}" required><br>
 
        <label for="artist">Auteur</label><br>
        <input type="text" id="artist" name="artist" value="{{ old('artist', $song->author) }}" required><br>
 
        <label for="year">Release jaar</label><br>
        <input type="number" id="year" name="year" value="{{ old('year', $song->release_year) }}" required><br>
 
        <input type="hidden" name="id" value="{{ $song->id }}"><br>
 
        <button type="submit">Update</button>
    </form>
@endsection 