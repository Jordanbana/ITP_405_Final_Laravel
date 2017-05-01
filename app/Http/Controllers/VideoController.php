<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Videos;
use Validator;

class VideoController extends Controller
{

    //Getting all the videos
    public function index()
    {
        //Using Eloquent instead of DB
        $videos = Videos::all();
        return view('videos.index', [
          'videos' => $videos
        ]); // resources/views/books/index.blade.php 
    }

    //Adding comments to a video
    public function storeComments($videoID)
    {
      DB::table('comments')->insert([
          'user_comment' => request('title'),
          'user_id' => 1,
          'video_id' => $videoID
      ]);

      return redirect("/videos/$videoID");
    }

    //Seeing the indivudal video
    public function view($videoID)
    {
        // DB::table('videos')->where('id', '=', $videoID)->get();
        //return redirect('videos/{{$videoID}}/view');
        $videos = DB::table('videos')
          ->where('id', '=', $videoID)
          ->get();

        $comments = DB::table('comments')
          ->where('video_id', '=', $videoID)
          ->get();

          return view("/videos", [
            'videos' => $videos,
            'comments' => $comments
          ]);
    }


    //Adding Videos
    public function create()
    {
        return view('videos.create');
    }


    //Actually storing the video
    public function store()
    {
        $validation = Validator::make([
            'videoURL' => request('title'),
            'votes' => '1'
        ],[
          'videoURL' => 'required',
          'votes' => 'required|numeric'
        ]);


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
