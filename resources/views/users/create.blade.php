@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-3">
			<h1>New User</h1>
			<form id="new_user_form" action="{{ route('users.store') }}" method="POST" data-toggle="validator">
				{{ csrf_field() }}
			  <div class="form-group">
				<label for="">Name</label>
				<input type="text" class="form-control" value="" name="name" required>
			  </div>
			  <div class="form-group">
				<label for="">Email address</label>
				<input type="email" class="form-control" value="" name="email" required>
			  </div>
			  <div class="form-group">
					<label for="inputPassword" class="control-label">Password</label>
					<input type="password" data-minlength="6" class="form-control" id="inputPassword" placeholder="Password" required name="password">
					<div class="help-block">Minimum of 6 characters</div>
				</div>
			  <div class="form-group">
				<input type="password" class="form-control" id="inputPasswordConfirm" data-match="#inputPassword" data-match-error="Whoops, these don't match" placeholder="Confirm" required>
				<div class="help-block with-errors"></div>
			  </div>
			  
			  <label for="">Roles</label>
				<select multiple class="form-control" name="roles[]" required>
				  @foreach($roles AS $role)
					<option value="{{ $role->id }}">{{ $role->role }}</option>
				  @endforeach
				</select>
				
				
			  <label for="">Active</label>
				<div class="radio">
				  <label>
					<input type="radio" name="active" id="active_yes" value="1">
					Yes
				  </label>
				</div>
				<div class="radio">
				  <label>
					<input type="radio" name="active" id="active_no" value="0">
					No
				  </label>
				</div>
				
				
				
			  <button type="submit" class="btn btn-default">Save</button>
			</form>

			
        </div>
    </div>    
</div>
@push('scripts')
    <script src="/js/users.js"></script>
@endpush
@endsection