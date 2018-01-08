<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Requests\Sliderrequest;
use App\Slider;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Session;

class SlidersController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $sliders = Slider::paginate(15);

        return view('sliders.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('sliders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Sliderrequest $request)
    {
        if($request->file('image')->isValid()){

            $model = new Slider;
            $imageName = 'slider'.time().'.'.$request->file('image')->getClientOriginalExtension();
            $model->image = $imageName;
            $model->title = $request->get('title');
            $model->content = $request->get('content');
            $model->url = $request->get('url');
            $model->save();
            $request->file('image')->move(base_path().'/public/upload/sliders/',$imageName);
            Session::flash('flash_message', 'Slider added!');
            return redirect('admin/sliders');    
        }else{
            Session::flash('flash_message','uploaded file is not valid');
            return redirect('admin/sliders/create');
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
        $slider = Slider::findOrFail($id);

        return view('sliders.show', compact('slider'));
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
        $slider = Slider::findOrFail($id);

        return view('sliders.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function update($id, Sliderrequest $request)
    {
        $model = Slider::findOrFail($id);
        if( $request->file('image') && $request->file('image')->isValid()){

            @unlink(base_path().'/public/upload/sliders/'.$model->image);

            $imageName = 'slider'.time().'.'.$request->file('image')->getClientOriginalExtension();
            $model->image = $imageName;
            $request->file('image')->move(base_path().'/public/upload/sliders/',$imageName);
        }
        $model->title = $request->get('title');
        $model->content = $request->get('content');
        $model->url = $request->get('url');
        $model->save();
        Session::flash('flash_message', 'Slider updated!');
        return redirect('admin/sliders');
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
        Slider::destroy($id);

        Session::flash('flash_message', 'Slider deleted!');

        return redirect('admin/sliders');
    }

}
