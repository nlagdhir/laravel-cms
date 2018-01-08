@extends('layouts.dashboard')

@section('content')

    <h1>Team</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Name</th><th>Designation</th><th>About</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $team->id }}</td> <td> {{ $team->name }} </td><td> {{ $team->designation }} </td><td> {{ $team->about }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection