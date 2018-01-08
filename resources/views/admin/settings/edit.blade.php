@extends('layouts.dashboard')

@section('content')

    <h1>Edit Setting</h1>
    <hr/>

    {!! Form::model($setting, [
        'method' => 'PATCH',
        'url' => ['settings', $setting->id],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('obj_id') ? 'has-error' : ''}}">
                {!! Form::label('obj_id', 'Obj Id: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('obj_id', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('obj_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('obj_type') ? 'has-error' : ''}}">
                {!! Form::label('obj_type', 'Obj Type: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('obj_type', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('obj_type', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('key') ? 'has-error' : ''}}">
                {!! Form::label('key', 'Key: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('key', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('key', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('value') ? 'has-error' : ''}}">
                {!! Form::label('value', 'Value: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('value', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('value', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Update', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    </div>
    {!! Form::close() !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

@endsection