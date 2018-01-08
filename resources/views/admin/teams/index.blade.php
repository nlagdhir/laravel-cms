@extends('layouts.dashboard')

@section('content')

    <h1>Teams <a href="{{ url('admin/teams/create') }}" class="btn btn-primary pull-right btn-sm">Add New Team</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th>Name</th><th>Designation</th><th>About</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($teams as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('admin/teams', $item->id) }}">{{ $item->name }}</a></td><td>{{ $item->designation }}</td><td>{{ $item->about }}</td>
                    <td>
                        <a href="{{ url('admin/teams/' . $item->id . '/edit') }}">
                            <button type="submit" class="btn btn-primary btn-xs">Update</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/teams', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $teams->render() !!} </div>
    </div>

@endsection
