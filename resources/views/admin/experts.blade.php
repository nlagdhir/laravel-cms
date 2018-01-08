@extends('layouts.dashboard')

@section('content')
	<h1>Expert Settings</h1>
	<hr/>
	{!! Form::model($experts,['url'=>'admin/setting/experts','class'=>'form-horizontal']) !!}

	{!! Form::hidden('type','experts') !!}

	<div class="form-group">
		{!! Form::label('content','About Our Experts:',['class'=>'col-sm-3 control-label','required'=>'required']) !!}
		<div class="col-sm-6">
			{!! Form::textarea('content',null,['class'=>'form-control']) !!}
		</div>
		<script>
            CKEDITOR.replace( 'content' );
        </script>
	</div>
	
	<div class="form-group">
		{!! Form::label('skill_label_1','Skill Label 1:',['class'=>'col-sm-3 control-label','required'=>'required']) !!}
		<div class="col-sm-6">
			{!! Form::text('skills[skill_label_!]',null,['class'=>'form-control','placeholder'=>'Design','required'=>'required']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('skill_value_1','Skill Value 1(%):',['class'=>'col-sm-3 control-label','required'=>'required']) !!}
		<div class="col-sm-6">
			{!! Form::number('skills[skill_value_1]',null,['class'=>'form-control','min'=>'0','max'=>'100','placeholder'=>'89']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('skill_label_2','Skill Label 2:',['class'=>'col-sm-3 control-label','required'=>'required']) !!}
		<div class="col-sm-6">
			{!! Form::text('skills[skill_label_2]',null,['class'=>'form-control','placeholder'=>'Design','required'=>'required']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('skill_value_2','Skill Value 2(%):',['class'=>'col-sm-3 control-label','required'=>'required']) !!}
		<div class="col-sm-6">
			{!! Form::number('skills[skill_value_2]',null,['class'=>'form-control','min'=>'0','max'=>'100','placeholder'=>'89']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('skill_label_3','Skill Label 3:',['class'=>'col-sm-3 control-label','required'=>'required']) !!}
		<div class="col-sm-6">
			{!! Form::text('skills[skill_label_3]',null,['class'=>'form-control','placeholder'=>'Design','required'=>'required']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('skill_value_3','Skill Value 3(%):',['class'=>'col-sm-3 control-label','required'=>'required']) !!}
		<div class="col-sm-6">
			{!! Form::number('skills[skill_value_3]',null,['class'=>'form-control','min'=>'0','max'=>'100','placeholder'=>'89']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('skill_label_4','Skill Label 4:',['class'=>'col-sm-3 control-label','required'=>'required']) !!}
		<div class="col-sm-6">
			{!! Form::text('skills[skill_label_4]',null,['class'=>'form-control','placeholder'=>'Design','required'=>'required']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('skill_value_4','Skill Value 4(%):',['class'=>'col-sm-3 control-label','required'=>'required']) !!}
		<div class="col-sm-6">
			{!! Form::number('skills[skill_value_4]',null,['class'=>'form-control','min'=>'0','max'=>'100','placeholder'=>'89']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('skill_label_5','Skill Label 5:',['class'=>'col-sm-3 control-label','required'=>'required']) !!}
		<div class="col-sm-6">
			{!! Form::text('skills[skill_label_5]',null,['class'=>'form-control','placeholder'=>'Design','required'=>'required']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('skill_value_5','Skill Value 5(%):',['class'=>'col-sm-3 control-label','required'=>'required']) !!}
		<div class="col-sm-6">
			{!! Form::number('skills[skill_value_5]',null,['class'=>'form-control','min'=>'0','max'=>'100','placeholder'=>'89']) !!}
		</div>
	</div>
	
	<div class="form-group">
		{{ Form::label('','',['class'=>'col-sm-3']) }}
		<div class="col-sm-6">
			{!! Form::submit('submit',['class'=>'btn btn-primary']) !!}
		</div>
	</div>

	{!! Form::close() !!}
@stop