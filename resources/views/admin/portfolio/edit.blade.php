@extends('layouts.dashboard')

@section('content')

    <h1>Edit Portfolio</h1>
    <hr/>

    {!! Form::model($portfolio, [
        'method' => 'PATCH',
        'url' => ['admin/portfolio', $portfolio->id],
        'class' => 'form-horizontal',
        'files'=>true,
    ]) !!}

                <div class="form-group {{ $errors->has('project_name') ? 'has-error' : ''}}">
                {!! Form::label('project_name', 'Project Name: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('project_name', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('project_name', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('project_slug') ? 'has-error' : ''}}">
                {!! Form::label('project_slug', 'Project Slug: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('project_slug', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('project_slug', '<p class="help-block">:message</p>') !!}
                </div>
            </div>

            <div class="form-group {{ $errors->has('project_thumb') ? 'has-error' : ''}}">
                {!! Form::label('project_thumb', 'Image: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::file('project_thumb', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('project_thumb', '<p class="help-block">:message</p>') !!}
                @if($portfolio->project_thumb != '')
                    <p>
                        <img width="200" src="{{ url('/') }}/upload/portfolio/{{ $portfolio->project_thumb }}" alt="">
                    </p>
                @endif
                </div>

            </div>

            <div class="form-group {{ $errors->has('project_content') ? 'has-error' : ''}}">
                {!! Form::label('project_content', 'Prject Content: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('project_content', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('project_content', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
                <script>
                    CKEDITOR.replace( 'project_content' );
                </script>

            <div class="form-group {{ $errors->has('project_url') ? 'has-error' : ''}}">
                {!! Form::label('project_url', 'Project Url: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('project_url', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('project_url', '<p class="help-block">:message</p>') !!}
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