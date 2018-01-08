@extends('layouts.dashboard')

@section('content')

    <h1>Video</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Title</th><th>Description</th><th>Video</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $video->id }}</td> <td> {{ $video->title }} </td><td> {{ $video->description }} </td><td> {{ $video->video }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection