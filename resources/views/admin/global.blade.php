@extends('layouts.dashboard')

@section('content')
	<h1>Global Settings</h1>
	<hr/>

	{!! Form::model($global,[
		'url'=>'admin/save_global_settings',
		'class' =>'form-horizontal',
	]) !!}

	{!! Form::hidden('type','global') !!}

	<div class="form-group">
		{!! Form::label('menu_items','Menu Items:',['class'=>'col-sm-3 control-label']) 
		!!}
		<div class="col-sm-6">
			{!! Form::select('menu_items[]',$pages,null,['class'=>'form-control','reuqired'=>'required','multiple'=>'multiple']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('footer_menu_items','Footer Menu Items:',['class'=>'col-sm-3 control-label']) !!}
		<div class="col-sm-6">
			{!! Form::select('footer_menu_items[]',$pages,null,['class'=>'form-control','required'=>'reuqired','multiple'=>'multiple']) !!}
		</div>
	</div>

	<h4>Footer Setting</h4>
	<hr/>
	<h5>First Column</h5>
	<div class="form-group">
		{!! Form::label('fc_title','Title:',['class'=>'col-sm-3 control-label']) !!}
		<div class="col-sm-6">
			{!! Form::text('fc_title',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('fc_content','Content:',['class'=>'col-sm-3 control-label']) !!}
		<div class="col-sm-6">
			{!! Form::textarea('fc_content',null,['class'=>'form-control']) !!}
		</div>
		 <script src="{{ url('/') }}/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
            <script>
                CKEDITOR.replace( 'fc_content' );
                CKEDITOR.config.extraAllowedContent = 'div(*)';
            </script>
	</div>

	<h5>Second Column</h5>
	<div class="form-group">
		{!! Form::label('sc_title','Title:',['class'=>'col-sm-3 control-label']) !!}
		<div class="col-sm-6">
			{!! Form::text('sc_title',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('sc_content','Content:',['class'=>'col-sm-3 control-label']) !!}
		<div class="col-sm-6">
			{!! Form::textarea('sc_content',null,['class'=>'form-control']) !!}
		</div>
			<script>
                CKEDITOR.replace( 'sc_content' );
                CKEDITOR.config.extraAllowedContent = 'div(*)';
            </script>
	</div>

	<h5>Third Column</h5>
	<div class="form-group">
		{!! Form::label('tc_title','Title:',['class'=>'col-sm-3 control-label']) !!}
		<div class="col-sm-6">
			{!! Form::text('tc_title',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('tc_content','Content:',['class'=>'col-sm-3 control-label']) !!}
		<div class="col-sm-6">
			{!! Form::textarea('tc_content',null,['class'=>'form-control']) !!}
		</div>
		 	<script>
                CKEDITOR.replace( 'tc_content' );
                CKEDITOR.config.allowedContent = true;
                CKEDITOR.config.extraAllowedContent = 'div(*)';
            </script>
	</div>

	<h5>Fourth Column</h5>
	<div class="form-group">
		{!! Form::label('fthc_title','Title:',['class'=>'col-sm-3 control-label']) !!}
		<div class="col-sm-6">
			{!! Form::text('fthc_title',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('fthc_content','Content:',['class'=>'col-sm-3 control-label']) !!}
		<div class="col-sm-6">
			{!! Form::textarea('fthc_content',null,['class'=>'form-control']) !!}
		</div>
		 	<script>
                CKEDITOR.replace( 'fthc_content' );
                CKEDITOR.config.extraAllowedContent = 'div(*)';
                CKEDITOR.config.allowedContent = true;
            </script>
	</div>

	<duv class="form-group">
		{!! Form::label('','',['class'=>'col-sm-3']) !!}
		<div class="col-sm-6">
			{!! Form::submit('Save',['class'=>'btn btn-primary']) !!}
		</div>
	</duv>
	{!! Form::close() !!}
@stop