<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Videos;
use Validator;

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

    public function view($videoID)
    {
        // DB::table('videos')->where('id', '=', $videoID)->get();
        //return redirect('videos/{{$videoID}}/view');
        $videos = DB::table('videos')
          ->where('id', '=', $videoID)
          ->get();
          return view("/videos", [
            'videos' => $videos
]);
    }

    public function create()
    {
        return view('videos.create');
    }

    public function store()
    {
        $validation = Validator::make([
            'videoURL' => request('title'),
            'votes' => '1'
        ],[
          'videoURL' => 'required',
          'votes' => 'required|numeric'
        ]);

        // $validation = Validator::make($request->all()
        // ,[
        //   'videoURL' => 'required',
        //   'votes' => 'required|numeric'
        // ]);

        if($validation->passes()){
            DB::table('videos')->insert([
                'videoURL' => request('title'),
                'votes' => '1'
            ]);

            return redirect('/videos')
              ->with('successStatus', 'Video was added successfully!');
        }
        else{
            return redirect('/videos/new')
              ->withErrors($validation);
        }


    }




}
