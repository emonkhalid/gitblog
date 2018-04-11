@extends('layouts.admin')


@section('content')

	<h1>Media</h1>

<table class="table">
  <thead>
  	<th>Id</th>
    <th>Photo</th>
    <th>Created</th> 
    <th>Updated</th> 
  </thead>
  <tbody>
  	@if($photos)
  		
  		@foreach($photos as $photo)
  			<tr>  				
  				<td>{{$photo->id}}</td>
          <td><img height="50" src="{{$photo->file ? $photo->file : 'Photo Not Available'}}"></td>
  				<td>{{$photo->created_at->diffForHumans()}}</td>
  				<td>{{$photo->updated_at->diffForHumans()}}</td>

          <td>
          {!! Form::open(['method'=>'DELETE', 'action'=>['AdminMediasController@destroy', $photo->id]]) !!}
          <div class="form-group">
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
          </div>
          {!! Form::close() !!}

        </td>
  			</tr>
		@endforeach

  	@endif

  </tbody>
</table>

@stop