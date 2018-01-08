<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Requests\PostRequest;
use App\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Session;

class PostsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $posts = Post::paginate(15);

        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(PostRequest $request)
    {
        if($request->file('image')->isValid()){

            $model = new Post;
            $imageName = 'post'.time().'.'.$request->file('image')->getClientOriginalExtension();
            $model->image = $imageName;
            $model->title = $request->get('title');
            $model->content = $request->get('content');
            $model->save();
            $request->file('image')->move(base_path().'/public/upload/posts/',$imageName);
            Session::flash('flash_message','Post Added!');
            return redirect('admin/posts');
        }else{
            Session::flash('flash_message','upload file is not valid');
            return redirect('admin/posts/create');
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
        $post = Post::findOrFail($id);

        return view('posts.show', compact('post'));
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
        $post = Post::findOrFail($id);

        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function update($id, PostRequest $request)
    {
        $model = Post::findOrFail($id);

        if($request->file('image') && $request->file('image')->isValid()){

            @unlink(base_path().'/public/upload/posts/'.$model->image);

            $imageName = 'post'.time().'.'.$request->file('image')->getClientOriginalExtension();
            $model->image = $imageName;
            $request->file('image')->move(base_path().'/public/upload/posts/',$imageName);            
        }

        $model->title = $request->get('title');
        $model->content = $request->get('content');
        $model->save();
        Session::flash('flash_message','Post Updated!');
        return redirect('admin/posts');
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
        Post::destroy($id);

        Session::flash('flash_message', 'Post deleted!');

        return redirect('admin/posts');
    }

}
