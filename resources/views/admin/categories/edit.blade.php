@extends('layouts.admin')


@section('content')
	<h1>Categories</h1>
	
	<div class="row">
		<div class="col-sm-4">
			{!! Form::model($category, ['method'=>'PATCH', 'action'=>['AdminCategoriesController@update', $category->id] ]) !!}

			<div class="form-group">
				{!! Form::label('name', 'Name') !!}
				{!! Form::text('name', null, ['class' => 'form-control']) !!}
			</div>
			
			<div class="form-group">
				{!! Form::submit('Update Categories', ['class' => 'btn btn-primary col-sm-6']) !!}
				
			</div>

			{!! Form::close() !!}


			{!! Form::open(['method'=>'DELETE', 'action'=>['AdminCategoriesController@destroy', $category->id ]]) !!}
				
				<div class="form-group">
					{!! Form::submit('Delete Category', ['class' => 'btn btn-danger col-sm-6']) !!}
				</div>

			{!! Form::close() !!}

		</div>

		

	</div>

	<div class="row">
		@include('includes.form_errors')
	</div>

@stop