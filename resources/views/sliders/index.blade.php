@extends('layouts.dashboard')

@section('content')

    <h1>Sliders <a href="{{ url('admin/sliders/create') }}" class="btn btn-primary pull-right btn-sm">Add New Slider</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th>Title</th><th>Image</th><th>Content</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($sliders as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('admin/sliders', $item->id) }}">{{ $item->title }}</a></td>
                    <td><img width="300px" src="{{ url('/')}}/upload/sliders/{{ $item->image  }}" /></td>
                    <td>{{ $item->content }}</td>
                    <td>
                        <a href="{{ url('admin/sliders/' . $item->id . '/edit') }}">
                            <button type="submit" class="btn btn-primary btn-xs">Update</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/sliders', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $sliders->render() !!} </div>
    </div>

@endsection
