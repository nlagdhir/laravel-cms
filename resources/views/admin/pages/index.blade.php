@extends('layouts.dashboard')

@section('content')

    <h1>Pages <a href="{{ url('admin/pages/create') }}" class="btn btn-primary pull-right btn-sm">Add New Page</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th>Page Title</th><th>Page Slug</th><th>Page Content</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($pages as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('pages/pages', $item->id) }}">{{ $item->page_title }}</a></td>
                    <td>{{ $item->page_slug }}</td>
                    <td>{{ $item->page_content }}</td>
                    <td>
                        <a href="{{ url('admin/pages/' . $item->id . '/edit') }}">
                            <button type="submit" class="btn btn-primary btn-xs">Update</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/pages', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $pages->render() !!} </div>
    </div>

@endsection
