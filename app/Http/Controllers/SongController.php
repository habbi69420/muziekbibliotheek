<?php
 
namespace App\Http\Controllers;
 
use App\Models\Song;
use Illuminate\Http\Request;
 
class SongController extends Controller
{
    public function show()
    {
        return view('songs');
    }
 
    public function create()
    {
        return view('newsong');
    }
 
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|min:3|max:32',
            'artist' => 'required|min:6|max:32',
            'year' => 'required|integer',
        ]);
 
        $song = new Song();
        $song->song_name = $request->input('title');
        $song->author = $request->input('artist');
        $song->release_year = $request->input('year');
        $song->save();
 
        return redirect()->route('songs')->with('success', 'Song added successfully!');
    }
 
    public function delete($id)
    {
        $song = Song::find($id);
 
        if ($song) {
            $song->delete();
            return redirect()->route('library')->with('success', 'Song deleted successfully');
        }
 
        return redirect()->route('library')->with('error', 'Song not found');
    }
 
    public function showUpdateForm($id)
    {
        $song = Song::find($id);
 
        if (!$song) {
            return redirect()->route('library')->with('error', 'Song not found');
        }
 
        return view('updatesongform', ['song' => $song]);
    }
 
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required|min:3|max:32',
            'artist' => 'required|min:6|max:32',
            'year' => 'required|integer',
        ]);
 
        $song = Song::find($id);
 
        if (!$song) {
            return redirect()->route('library')->with('error', 'Song not found');
        }
 
        $song->song_name = $request->input('title');
        $song->author = $request->input('artist');
        $song->release_year = $request->input('year');
        $song->save();
 
        return redirect()->route('library')->with('success', 'Song updated successfully!');
    }
 
}