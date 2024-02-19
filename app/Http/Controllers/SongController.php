<?php

namespace App\Http\Controllers;

use App\Models\Song;

class SongController extends Controller
{
    /**
     * Retrieve all songs from the database.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            // Fetch all songs from the database
            $songs = Song::all();

            // Return the songs as a JSON response
            return response()->json(['success' => true, 'songs' => $songs], 200);
        } catch (\Exception $e) {
            // Handle any exceptions and return an error response
            return response()->json(['success' => false, 'message' => 'Failed to retrieve songs.', 'error' => $e->getMessage()], 500);
        }
    }
}

