@extends('layouts.dashboard')

@section('content')

    <h1>Post</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Title</th><th>Image</th><th>Content</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $post->id }}</td>
                    <td> {{ $post->title }} </td>
                    <td> <img width="200" src="{{ url('/') }}/upload/posts/{{ $post->image }}"  /> </td>
                    <td> {{ $post->content }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection