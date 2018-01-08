<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Requests\TeamRequest;
use App\Team;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Session;

class TeamsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $teams = Team::paginate(15);

        return view('admin.teams.index', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.teams.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(TeamRequest $request)
    {
        if($request->file('thumb') && $request->file('thumb')->isValid()){
            $imageName = 'team'.time().'.'.$request->file('thumb')->getClientOriginalExtension();
            $team = new Team;
            $team->name = $request->get('name');
            $team->designation = $request->Get('designation');
            $team->thumb = $imageName;
            $team->about = $request->get('about');
            $team->social = json_encode($request->get('social'));
            $team->save();
            $request->file('thumb')->move(base_path().'/public/upload/teams/',$imageName);
            Session::flash('flash_message','Team Added!');
            return redirect('admin/teams');
        }else{
            Session::flash('flash_message','Invalid Images!');
            return redirect('admin/teams/create');
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
        $team = Team::findOrFail($id);

        return view('admin.teams.show', compact('team'));
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
        $team = Team::findOrFail($id);
        $team->social = json_decode($team->social);
        return view('admin.teams.edit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function update($id, TeamRequest $request)
    {
        $model = Team::findOrFail($id);

        if($request->file('thumb') && $request->file('thumb')->isValid()){

            @unlink(base_path().'/public/upload/teams/'.$model->thumb);

            $imageName = 'team'.time().'.'.$request->file('thumb')->getClientOriginalExtension();
            $model->image = $imageName;
            $request->file('thumb')->move(base_path().'/public/upload/teams/',$imageName);            
        }

        $model->name = $request->get('name');
        $model->designation = $request->Get('designation');
        $model->about = $request->get('about');
        $model->social = json_encode($request->get('social'));
        $model->save();
        Session::flash('flash_message','Team Updated!');
        return redirect('admin/teams');
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
        Team::destroy($id);

        Session::flash('flash_message', 'Team deleted!');

        return redirect('admin/teams');
    }

}
