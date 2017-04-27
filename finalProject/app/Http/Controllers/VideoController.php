<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Videos;

class VideoController extends Controller
{
    public function index()
    {
        //Switching to use Eloquent
        $videos = Videos::all();

        // $videos = DB::table('videos')
        //   ->select('*')
        //   ->orderby('votes','DESC')
        //   ->get();
        return view('videos.index', [
          'videos' => $videos
        ]); // resources/views/books/index.blade.php
    }
}
