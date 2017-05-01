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
    }




}
