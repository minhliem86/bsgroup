<?php

namespace App\Modules\Admin\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Repositories\HomeRepository;
use App\Models\Video;

class HomeController extends Controller
{
    protected $homeRepo;

    public function __construct(HomeRepository $homeRepo)
    {
        $this->homeRepo = $homeRepo;
    }

    public function index()
    {
        $inst = $this->homeRepo->first();
        return view('Admin::pages.home.view', compact('inst'));
        // if($inst){
        //
        // }else{
        //     return view('Admin::pages.home.view');
        // }

    }

    public function createOrUpdate(Request $request, $id = null)
    {
        $data = [
                'title'=> $request->input('title'),
        ];
        if($request->has('video_id')){
            $video_id = $request->input('video_id');
        }

        if(!$id){
            $home = $this->homeRepo->create($data);
            $video = new Video;
            $video->video_id = $video_id;
            $home->videos()->save($video);
        }else{
            $home = $this->homeRepo->update($data, $id);
            if($video_id){
                $video = $home->videos->first();
                $video->video_id = $video_id;
                $home->videos()->save($video);
            }
        }

        return redirect()->route('admin.home.index')->with('success', 'Infomation Updated !');
    }
    // public function
}
