@extends('layouts.dashboard')

@section('content')

    <h1>Portfolios <a href="{{ url('admin/portfolio/create') }}" class="btn btn-primary pull-right btn-sm">Add New Portfolio</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th>Project Name</th><th>Project Slug</th><th>Project Content</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($portfolios as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('admin/portfolio', $item->id) }}">{{ $item->project_name }}</a></td><td>{{ $item->project_slug }}</td><td>{{ $item->project_content }}</td>
                    <td>
                        <a href="{{ url('admin/portfolio/' . $item->id . '/edit') }}">
                            <button type="submit" class="btn btn-primary btn-xs">Update</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/portfolios', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $portfolios->render() !!} </div>
    </div>

@endsection
