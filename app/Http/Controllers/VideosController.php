<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Requests\VideoRequest;
use App\Video;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Session;

class VideosController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $videos = Video::paginate(15);

        return view('admin.videos.index', compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.videos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(VideoRequest $request)
    {
        if($request->file('video')->isValid()){
            $model = new Video;
            $vidName = 'video'.time().'.'.$request->file('video')->getClientOriginalExtension();
            $model->video = $vidName;
            $model->title = $request->get('title');
            $model->description = $request->get('description');
            $model->save();
            $request->file('video')->move(base_path().'/public/upload/videos/',$vidName);
            Session::flash('flash_message','Video Posted!');
            return redirect('admin/videos');            
        }else{
            Session::flash('flash_message','Video File is not valid!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function show($id)
    {
        $video = Video::findOrFail($id);

        return view('admin.videos.show', compact('video'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $video = Video::findOrFail($id);

        return view('admin.videos.edit', compact('video'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function update($id, VideoRequest $request)
    {
        $video = Video::findOrFail($id);
        if($request->file('video') && $request->file('video')->isValid()){
            @unlink(base_path().'/public/upload/videos/'.$video->video);
            $vidName = 'video'.time().'.'.$request->file('video')->getClientOriginalExtension();
            $video->video = $vidName;
            $request->file('video')->move(base_path().'/public/upload/videos',$vidName);
        }
            $video->title = $request->get('title');
            $video->description = $request->get('description');
            $video->save();
            Session::flash('flash_message','Video Updated!');
            return redirect('admin/videos');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        Video::destroy($id);

        Session::flash('flash_message', 'Video deleted!');

        return redirect('admin/videos');
    }

}
