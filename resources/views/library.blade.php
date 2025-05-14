@extends('layouts.master')
 
@section('content')
    <h1>Muziekbibliotheek Pagina</h1>
 
    <h2>Alle songs</h2>
 
    <ul>
       
    @foreach ($songs as $song)
        <div>
            <h3>{{ $song->song_name }} - {{ $song->author }} ({{ $song->release_year }})</h3>
            <a href="{{ route('songs.updateform', ['id' => $song->id]) }}">Update</a>
            <a href="{{ route('songs.delete', ['id' => $song->id]) }}">Delete</a>
        </div>
    @endforeach
 
    </ul>
 
@endsection