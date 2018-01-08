@extends('layouts.dashboard')

@section('content')

    <h1>Settings <a href="{{ url('settings/create') }}" class="btn btn-primary pull-right btn-sm">Add New Setting</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th>Obj Id</th><th>Obj Type</th><th>Key</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($settings as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('settings', $item->id) }}">{{ $item->obj_id }}</a></td><td>{{ $item->obj_type }}</td><td>{{ $item->key }}</td>
                    <td>
                        <a href="{{ url('settings/' . $item->id . '/edit') }}">
                            <button type="submit" class="btn btn-primary btn-xs">Update</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['settings', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $settings->render() !!} </div>
    </div>

@endsection
