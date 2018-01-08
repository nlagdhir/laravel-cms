@extends('layouts.dashboard')

@section('content')

    <h1>Portfolio</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Project Name</th><th>Project Slug</th><th>Project Content</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $portfolio->id }}</td> <td> {{ $portfolio->project_name }} </td><td> {{ $portfolio->project_slug }} </td><td> {{ $portfolio->project_content }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection