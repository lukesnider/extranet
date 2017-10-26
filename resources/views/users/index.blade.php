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
				<th>Active</th>
				<th>Company</th>
				<th></th>
			  </tr>
			</thead>
			<tbody>
			@foreach($users AS $user)
			  <tr>
				<td><a href="{{ route('users.edit', ['id' => $user->id]) }}">{{ $user->name }}</a></td>
				<td>{{ $user->email }}</td>
				<td>
				@php $count = 1; @endphp
				@foreach($user->roles AS $role)
					{{ $role->role }}@if($count != $user->roles()->count()), @endif 
					@php $count++; @endphp
				@endforeach
				</td>
				<td>@if($user->isActive)Yes @else No @endif</td>
				<td>N/A</td>
				<td>
					<form action="{{route('users.destroy', $user->id)}}" method="POST">
					{{csrf_field()}}
					<input class="btn btn-sm btn-danger" type="submit" value="Disable" />
					</form>
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
