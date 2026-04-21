<?php

namespace App\Http\Controllers;

use App\Models\video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\table;

class VideoController extends Controller
{
  public function index()  {
    $video= video::all();
    return view('welcome',compact('video',$video));
  }

  public function store(Request $request){
    $path=null;
    if ($request->hasFile('video')) {
        $path=$request->file('video')->store('allvideo','public');    
    }
  $video= new video();
  $video->title=$request->title;
  $video->videourl=$request->$path;
  $video->description=$request->description;
  $video->catagory=$request->catagory;
    
  }
}
