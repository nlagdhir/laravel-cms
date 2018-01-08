@extends('layouts.dashboard')

@section('content')

    <h1>Edit Page</h1>
    <hr/>

    {!! Form::model($page, [
        'method' => 'PATCH',
        'url' => ['admin/pages', $page->id],
        'class' => 'form-horizontal',
        'files' => true,
    ]) !!}

                <div class="form-group {{ $errors->has('page_title') ? 'has-error' : ''}}">
                {!! Form::label('page_title', 'Page Title: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('page_title', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('page_title', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('page_slug') ? 'has-error' : ''}}">
                {!! Form::label('page_slug', 'Page Slug: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('page_slug', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('page_slug', '<p class="help-block">:message</p>') !!}
                </div>
            </div>

            <div class="form-group {{ $errors->has('page_layout') ? 'has-error' : '' }}">
                {!! Form::label('page_layout','Select Layout:',['class'=>'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::select('page_layout',$layouts,null,['class'=>'form-control']) !!}
                    {!! $errors->first('page_layout','<p class="hrlp-block">:message</p>') !!}
                </div>
            </div>

            <div class="form-group {{ $errors->has('page_content') ? 'has-error' : ''}}">
                {!! Form::label('page_content', 'Page Content: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('page_content', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('page_content', '<p class="help-block">:message</p>') !!}
                </div>
                <script>
                    CKEDITOR.replace( 'page_content' );
                </script>
            </div>
            <div class="form-group {{ $errors->has('page_short_content') ? 'has-error' : ''}}">
                {!! Form::label('page_short_content', 'Page Short Content: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('page_short_content', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('page_short_content', '<p class="help-block">:message</p>') !!}
                </div>
                 <script>
                    CKEDITOR.replace( 'page_short_content' );
                </script>
            </div>
            <div class="form-group {{ $errors->has('page_thumbnail') ? 'has-error' : ''}}">
                {!! Form::label('page_thumbnail', 'Page Thumbnail: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::file('page_thumbnail', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('page_thumbnail', '<p class="help-block">:message</p>') !!}
                @if($page->page_thumbnail != '')
                    <p>
                        <img width="200" src="{{ url('/') }}/upload/pages/{{ $page->page_thumbnail }}" alt="">
                    </p>
                @endif
                </div>
            </div>
            <div class="form-group {{ $errors->has('parent_id') ? 'has-error' : ''}}">
                {!! Form::label('parent_id', 'Parent Id: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::select('parent_id', $pages,$page->parent_id, ['class' => 'form-control']) !!}
                    {!! $errors->first('parent_id', '<p class="help-block">:message</p>') !!}
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