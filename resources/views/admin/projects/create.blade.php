@extends('layouts.app')

@section('content')
<div class="container-fluid">

	<div class="row">
		<div class="col-md-8 col-md-offset-3">	
			<h1>New Project</h1>
		</div>
	</div>
		
	<div class="row">
		<div class="col-md-8 col-md-offset-3">
			<form method="POST" action="{{ route('projects.store') }}">
				{{ csrf_field() }} 
			  <div class="form-group">
				<label for="exampleInputEmail1">Name</label>
				<input type="text" class="form-control" name="name">
			  </div>			  
			  <div class="form-group">
				<label for="exampleInputEmail1">Client</label>
				<select class="form-control" name="client" required>
					<option value=""></option>
					@foreach($clients AS $client)
						<option value="{{ $client->id }}">{{ $client->name }}</option>
					@endforeach
				</select>
			  </div>			 

			  <div class="form-group">
				<label for="exampleInputEmail1">Notes</label>
				<textarea class="form-control" name="notes" ></textarea>
			  </div>

			  <button type="submit" class="btn btn-default">Save</button>
			</form>
		</div>
	</div>

</div>

@endsection