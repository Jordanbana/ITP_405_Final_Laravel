<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class VideoController extends Controller
{
    public function index()
    {
        $videos = DB::table('videos')
          ->select('*')
          ->orderby('votes','DESC')
          ->get();
        return view('videos.index', [
          'videos' => $videos
        ]); // resources/views/books/index.blade.php
    }
}
