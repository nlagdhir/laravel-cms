<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Page;
use App\Post;
use App\Setting;
use App\Slider;
use App\Video;
use Illuminate\Http\Request;

class PagesController extends Controller
{
	/**
	* return homepage view
	*/
    public function index()
    {
        $sliders = Slider::all();
        $data = Setting::where('key','home_setting')->first();
        $pagesettings = json_decode($data->value);
        $pagecontent = Page::findOrFail($pagesettings->is_home);
        return view('front.home',compact('sliders','pagesettings','pagecontent'));
    }

    /**
    * return about page
    */
    public function about()
    {
    	return view('front.about');
    }

    /**
     * return blog page
     */
    public function blog()
    {
        $posts = Post::paginate(3);
        $recentPosts = Post::latest()->take(4)->get();
        return view('front.blog',compact('posts','recentPosts'));
    }

    /**
     * return Single Blog page
     */
    public function single_blog($id)
    {
        $post = Post::findOrFail($id);
        $recentPosts = Post::latest()->take(4)->get();
        return view('front.singleblog',compact('post','recentPosts'));
    }

    /**
     * dynamic pages display 
     */
    public function page_show($id)
    {
        $page = Page::findOrFail($id);
        return view('front.pages',compact('page'));
    }

    /**
    * return contact us page
    */
    public function contact()
    {
    	return view('front.contact');
    }

    /*
    * return All videos listing
    */
    public function showVideos()
    {
        $videos = Video::paginate(5);
        return view('front.videos',compact('videos'));
    }

}
