@extends('layouts.dashboard')

@section('content')
	<h1>Homepage Settings</h1>
	<hr/>
	{!! Form::model($datat,[
		'url'=>'admin/save_settings',
		'class'=>'form-horizontal',
	]) !!}

	{!! Form::hidden('type','page') !!}

	<div class="form-group">
		{!! Form::label('is_home','Select Homepage:',['class'=>'col-sm-3 control-label']) !!}
		<div class="col-sm-6">
			{!! Form::select('is_home',$pages,null,['class'=>'form-control','required'=>'required']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('header_title','Header Title:',['class'=>'col-sm-3 control-label']) !!}
		<div class="col-sm-6">
			{!! Form::text('header_title',null,['class'=>'form-control','required'=>'required']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('header_content','Header Content:',['class'=>'col-sm-3 control-label']) !!}
		<div class="col-sm-6">
			{!! Form::text('header_content',null,['class'=>'form-control','required'=>'required']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('sidebar_links','Sidebar Links:',['class'=>'col-sm-3 control-label']) !!}
		<div class="col-sm-6">
			{!! Form::textarea('sidebar_links',null,['class'=>'form-control','required'=>'required']) !!}
			<p><code>add all links separate by new line.</code></p>
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('shortcode', 'Short Code:',['class'=>'col-sm-3 control-label']) !!}
		<div class="col-sm-6">
			{!! Form::text('shortcode',null,['class'=>'form-control','required'=>'required']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('bottom_header', 'Bottom Header:',['class'=>'col-sm-3 control-label']) !!}
		<div class="col-sm-6">
			{!! Form::text('bottom_header',null,['class'=>'form-control','required'=>'required']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('bottom_content', 'Bottom Content:',['class'=>'col-sm-3 control-label']) !!}
		<div class="col-sm-6">
			{!! Form::text('bottom_content',null,['class'=>'form-control','required'=>'required']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('','',['class'=>'col-sm-3']) !!}
		<div class="col-sm-6">
		{!! Form::submit('Save',['class'=>'btn btn-primary']) !!}	
		</div>
	</div>
	{!! Form::close() !!}
@stop