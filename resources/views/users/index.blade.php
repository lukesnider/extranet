@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-3">
			<h1>Users</h1> 
        </div>
    </div>    
	
	<div class="row">
        <div class="col-md-8 col-md-offset-3">
		  <table id="projectsTable">
			<thead>
			  <tr>
				<th>Name</th>
				<th>Email</th>
				<th>Role</th>
			  </tr>
			</thead>
			<tbody>
			@foreach($users AS $user)
			  <tr>
				<td><a href="{{ route('users.edit', ['id' => $user->id]) }}">{{ $user->name }}</a></td>
				<td>{{ $user->email }}</td>
				<td>
				@foreach($user->roles AS $role)
					{{ $role->role }}@if($user->roles()->count() > 1), @endif 
				@endforeach
				</td>
			  </tr>
			@endforeach
			</tbody>
		  </table>
        </div>
    </div>
</div>
@push('scripts')
    <script src="/js/projects.js"></script>
@endpush
@endsection
