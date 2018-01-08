@extends('layouts.dashboard')

@section('content')

    <h1>Videos <a href="{{ url('admin/videos/create') }}" class="btn btn-primary pull-right btn-sm">Add New Video</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th>Title</th><th>Description</th><th>Video</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($videos as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('admin/videos', $item->id) }}">{{ $item->title }}</a></td><td>{{ $item->description }}</td><td>{{ $item->video }}</td>
                    <td>
                        <a href="{{ url('admin/videos/' . $item->id . '/edit') }}">
                            <button type="submit" class="btn btn-primary btn-xs">Update</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/videos', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $videos->render() !!} </div>
    </div>

@endsection
