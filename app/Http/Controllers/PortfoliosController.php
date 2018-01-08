<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Requests\PortfolioRequest;
use App\Portfolio;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Session;

class PortfoliosController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $portfolios = Portfolio::paginate(15);

        return view('admin.portfolio.index', compact('portfolios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.portfolio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(PortfolioRequest $request)
    {
        if($request->file('project_thumb') && $request->file('project_thumb')->isValid()){
            $model = new Portfolio;
            $imageName = 'portfolio'.time().'.'.$request->file('project_thumb')->getClientOriginalExtension();
            $model->project_name = $request->get('project_name');
            $model->project_slug = $request->get('project_slug');
            $model->project_content = $request->get('project_content');
            $model->project_thumb = $imageName;
            $model->project_url = $request->get('project_url');
            $model->save();
            $request->file('project_thumb')->move(base_path().'/public/upload/portfolio',$imageName);
            Session::flash('flash_message','Portfolio Added!');
            return redirect('admin/portfolio');
        }else{
            Session::flash('flash_message','Image is not valid');
            return redirect('admin/portfolio/create');
        }

        Portfolio::create($request->all());

        Session::flash('flash_message', 'Portfolio added!');

        return redirect('admin/portfolio');
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
        $portfolio = Portfolio::findOrFail($id);

        return view('admin.portfolio.show', compact('portfolio'));
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
        $portfolio = Portfolio::findOrFail($id);

        return view('admin.portfolio.edit', compact('portfolio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function update($id, PortfolioRequest $request)
    {
        $model = Portfolio::findOrFail($id);

        if($request->file('project_thumb') && $request->file('project_thumb')->isValid()){

            @unlink(base_path().'/public/upload/portfolio/'.$model->project_thumb);

            $imageName = 'portfolio'.time().'.'.$request->file('project_thumb')->getClientOriginalExtension();
            $model->project_thumb = $imageName;
            $request->file('project_thumb')->move(base_path().'/public/upload/portfolio/',$imageName);            
        }

        $model->project_name = $request->get('project_name');
        $model->project_slug = $request->get('project_slug');
        $model->project_content = $request->get('project_content');
        $model->project_url = $request->get('project_url');
        $model->save();
        Session::flash('flash_message','Portfolio Updated!');
        return redirect('admin/portfolio');

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
        Portfolio::destroy($id);

        Session::flash('flash_message', 'Portfolio deleted!');

        return redirect('admin/portfolio');
    }

}
