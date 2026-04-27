<?php

namespace App\Http\Controllers;

use App\Models\video;
use FFMpeg\FFMpeg;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request as FacadesRequest;
use Illuminate\Support\Facades\Storage;

use function Laravel\Prompts\table;

class VideoController extends Controller
{
  public function create(Request $request)
{
  $vi=new video();
    $request->validate([
        'title' => 'nullable|string',
        'description' =>'nullable|string',
        'file_path' =>'nullable|file|mimes:mp4,mov,avi|max:10240',
    ]);

    // $vi = new video();
    $pathfile = null;

    if ($request->hasFile('file_path')) {
        $pathfile = $request->file('file_path')->store('videos', 'public');
    }
       $pathfile = $request->file('file_path')->store('videos', 'public');
    // $duration = FFMpeg::fromdisk('public')->open($pathfile)->getDurationInSeconds();
    // $vi->duration = $duration;
    $vi->title = $request->title;
    $vi->file_path = $pathfile;
    $vi->description = $request->description;
    
    $vi->save();
    return redirect('/');
}
    public function index() {
     $all= video::all();
     return view('video.index',compact('all'));
    }
   
      public function home() {
     $all= video::all();
     return view('welcome',compact('all'));
    }
      public function update($id){
        $video= video::findOrfail($id);
        return view('update', compact('video'));
      }
      public function edite(Request $request, $id ) {
      $vi= video::findOrfail($id);
       $vi->title=$request->title;
       $vi->description=$request->description;
       $vi->update();
       return redirect('/');
      }

        public function delete($id)
    {
        $video = video::findOrFail($id);

        // Delete file from storage
        if ($video->file_path && Storage::disk('public')->exists($video->file_path)) {
            Storage::disk('public')->delete($video->file_path);
        }

        $video->delete();

        return redirect('/');
    }

}