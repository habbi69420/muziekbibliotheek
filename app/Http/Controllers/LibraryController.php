<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;

class LibraryController extends Controller
{
    /**
     * Toon alle songs uit de bibliotheek.
     */
    public function show()
    {
        // 2. Haal alle songs op via het Song-model
        $data = Song::all();

        // 3. Geef de data door aan de 'library' view als key 'songs'
        return view('library')->with('songs', $data);
    }
}
