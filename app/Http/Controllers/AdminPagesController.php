<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\PagesRequest;
use App\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminPagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = Page::paginate(15);
        return view('admin.pages.index',compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pages = getPagesList();
        $layouts = getTemplates();
        return view('admin.pages.create',compact('pages','layouts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PagesRequest $request)
    {
        $page = new Page;
        if($request->file('page_thumbnail') && $request->file('page_thumbnail')->isValid()){
            $imageName = 'page'.time().'.'.$request->file('page_thumbnail')->getClientOriginalExtension();
            $page->page_thumbnail = $imageName;
            $request->file('page_thumbnail')->move(base_path().'/public/upload/pages/',$imageName);        
        }
        
        $page->page_title = $request->get('page_title');
        $page->page_slug = $request->get('page_slug');
        $page->page_layout = $request->get('page_layout');
        $page->page_content = $request->get('page_content');
        $page->page_short_content = $request->get('page_short_content');
        $page->parent_id = $request->get('parent_id');
        
        Auth::user()->pages()->save($page);
        
        return redirect('/admin/pages');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $page = Page::findOrFail($id);

        return view('admin.pages.show',compact('page'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page = Page::findOrFail($id);
        $pages = getPagesList($id);
        $layouts = getTemplates();
        return view('admin.pages.edit', compact('page','pages','layouts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PagesRequest $request, $id)
    {
        $page = Page::findOrFail($id);

        if($request->file('page_thumbnail') && $request->file('page_thumbnail')->isValid()){
           @unlink(base_path().'/public/upload/pages/'.$page->page_thumbnail);
            
            $imageName = 'page'.time().'.'.$request->file('page_thumbnail')->getClientOriginalExtension();
            $page->page_thumbnail = $imageName;
            $request->file('page_thumbnail')->move(base_path().'/public/upload/pages/',$imageName);            
        }

        $page->page_title = $request->get('page_title');
        $page->page_slug = $request->get('page_slug');
        $page->page_layout = $request->get('page_layout');
        $page->page_content = $request->get('page_content');
        $page->page_short_content = $request->get('page_short_content');
        $page->parent_id = $request->get('parent_id');

        Auth::user()->pages()->save($page);
        //$model->update($request->all());
        return redirect('admin/pages');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $page = Page::findOrFail($id);
        @unlink(base_path().'/public/upload/pages/'.$page->page_thumbnail);
        Page::destroy($id);
        return redirect('admin/pages');
    }
}
