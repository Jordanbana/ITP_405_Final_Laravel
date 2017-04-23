<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class VideoController extends Controller
{
    public function index()
    {
        $videos = DB::table('songs')
          ->select('songs.id','artist_name','title','price')
          ->join('artists', 'songs.artist_id', '=', 'artists.id' )
          ->get();
        return view('videos.index', [
          'videos' => $videos
        ]); // resources/views/books/index.blade.php
    }
}
