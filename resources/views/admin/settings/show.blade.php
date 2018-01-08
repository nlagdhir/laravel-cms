@extends('layouts.dashboard')

@section('content')

    <h1>Setting</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Obj Id</th><th>Obj Type</th><th>Key</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $setting->id }}</td> <td> {{ $setting->obj_id }} </td><td> {{ $setting->obj_type }} </td><td> {{ $setting->key }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection