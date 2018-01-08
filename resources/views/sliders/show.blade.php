@extends('layouts.dashboard')

@section('content')

    <h1>Slider</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Title</th><th>Image</th><th>Content</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $slider->id }}</td>
                    <td> {{ $slider->title }} </td>
                    <td><img width="300px" src="{{ url('/')}}/upload/sliders/{{ $slider->image  }}" /></td>
                    <td> {{ $slider->content }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection