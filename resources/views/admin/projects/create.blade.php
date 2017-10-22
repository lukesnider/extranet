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
				<label for="exampleInputEmail1">Project Name</label>
				<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
			  </div>
			  <div class="form-group">
				<label for="exampleInputPassword1">Password</label>
				<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
			  </div>
			  <button type="submit" class="btn btn-default">Save</button>
			</form>
		</div>
	</div>

</div>

@endsection