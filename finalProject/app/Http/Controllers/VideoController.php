<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Videos;

class VideoController extends Controller
{
    public function index()
    {
        //Using Eloquent instead of DB
        $videos = Videos::all();
        return view('videos.index', [
          'videos' => $videos
        ]); // resources/views/books/index.blade.php
    }

    public function create()
    {
        return view('videos.create');
    }

    public function store()
    {
        DB::table('videos')->insert([
            'videoURL' => request('title'),
            'votes' => '1'
        ]);

        return redirect('/videos');
    }




}
